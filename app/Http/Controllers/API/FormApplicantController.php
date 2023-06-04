<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ApplyForm;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormApplicantController extends Controller
{
    public function index(): JsonResponse
    {
        if (Auth::check()) {
            return response()->json('true');
        } else {
            return response()->json('true');
        }

        $applicants = ApplyForm::all();
        return response()->json($applicants);
    }
}
