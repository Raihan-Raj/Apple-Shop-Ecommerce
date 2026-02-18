<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Helpers\SSLCommerz;
use App\Models\CustomerProfile;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\ProductCart;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{

    public function InvoiceCreate(Request $request)
    {
        DB::beginTransaction();

        try {
            $user_id = $request->header('id');
            $user_email = $request->header('email');

            $tran_id = uniqid();
            $delivery_status = "Pending";
            $payment_status = "Pending";

            $profile = CustomerProfile::where('user_id', '=', $user_id)->first();
            $cus_details = "Name: $profile->cus_name,Address:$profile->cus_add,City:$profile->cus_city,Phone:$profile->cus_phone";
            $ship_details = "Name:$profile->ship_name,Address:$profile->ship_add,City:$profile->ship_city,Phone:$profile->cus_phone";

            //Payable Calculation
            $total = 0;
            $cartlist = ProductCart::where('user_id', '=', $user_id)->get();
            foreach ($cartlist as $cartItem) {
                $total = $total + $cartItem->price;
            }

            $vat = ($total * 3) / 100;
            $payable = $total + $vat;

            $invoice = Invoice::create([
                'total' => $total,
                'vat' => $vat,
                'payable' => $payable,
                'cus_details' => $cus_details,
                'ship_details' => $ship_details,
                'tran_id' => $tran_id,
                'delivery_status' => $delivery_status,
                'payment_status' => $payment_status,
                'user_id' => $user_id
            ]);

            $invoiceId = $invoice->id;


            foreach ($cartlist as $EachProduct) {
                InvoiceProduct::create([
                    'invoice_id' => $invoiceId,
                    'product_id' => $EachProduct['product_id'],
                    'user_id' => $user_id,
                    'qty' => $EachProduct['qty'],
                    'sale_price' => $EachProduct['price']

                ]);
            }
            $paymentMethod = SSLCommerz::initiatePayment($profile, $payable, $tran_id, $user_email);
            DB::commit();
            return ResponseHelper::Out(
                'success',
                array(['paymentMethod' => $paymentMethod, 'payable' => $payable, 'vat' => $vat, 'total' => $total,]),
                200
            );
        } catch (Exception $e) {
            DB::rollBack();
            return ResponseHelper::Out('Fail', $e, 200);
        }
    }
}
