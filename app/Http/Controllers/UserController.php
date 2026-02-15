<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Mail\OTPMail;
use App\Models\User;
use Exception;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use App\Helpers\JWTToken;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends Controller
{
    public function UserLogin(Request $request): JsonResponse
    {
        try {
            $UserEmail = $request->UserEmail;
            $OTP = rand(100000, 999999);
            $details = ['code' => $OTP];
            $mail = Mail::to($UserEmail)->send(new OTPMail($details));
            User::updateOrCreate(['email' => $UserEmail], ['email' => $UserEmail, 'otp' => $OTP]);
            return ResponseHelper::Out('success', 'A 6 Digit OTP has been send to your email address', 200);
        } catch (Exception $e) {
            return ResponseHelper::Out('fail', $e, 200);
        }
    }

    public function VerifyLogin(Request $request): JsonResponse
    {
        $UserEmail = $request->UserEmail;
        $OTP = $request->OTP;
        $verification = User::where('email', $UserEmail)->where('otp', $OTP)->first();
        if ($verification) {
            User::where('email', $UserEmail)->where('otp', $OTP)->update(['otp' => '0']);
            $token = JWTToken::CreateToken($UserEmail, $verification->id);
            return ResponseHelper::Out('success', "", 200)->cookie('token', $token, 60 * 24 * 30);
        } else {
            return ResponseHelper::Out('fail', null, 401);
        }
    }

    public function UserLogout()
    {
        return redirect('/userloginPage')->cookie('token', '', -1);
    }
}
