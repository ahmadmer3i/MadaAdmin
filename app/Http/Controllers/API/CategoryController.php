<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ApplyFormService;
use App\Models\Services;
use App\Models\ServicesCategores;
use App\Models\ServicesCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(): JsonResponse
    {
        $category = ApplyFormService::all();
        return response()->json($category);
    }

    public function get_services(Request $request): JsonResponse
    {
        $service = ServicesCategory::where('service_id', $request->id)->get();
        return response()->json($service);
    }
}
