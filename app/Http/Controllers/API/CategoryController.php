<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ApplyFormService;
use App\Models\Services;
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
}
