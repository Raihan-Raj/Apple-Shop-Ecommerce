<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Models\Brand;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class BrandController extends Controller
{
    public function BrandList(): JsonResponse
    {
        $data = Brand::all();
        return ResponseHelper::Out('success', $data, 200);
    }
}
