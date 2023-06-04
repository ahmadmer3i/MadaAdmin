<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ApplyForm;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FormApplicantController extends Controller
{
    public function index(): JsonResponse
    {
        $applicants = ApplyForm::all();
        return response()->json($applicants);
    }
}
