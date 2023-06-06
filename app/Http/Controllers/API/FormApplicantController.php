<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ApplyForm;
use App\Models\ApplyFormService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormApplicantController extends Controller
{
    public function index(): JsonResponse
    {
        $applicants = ApplyForm::with('form_services')
            ->with('category_services')
            ->with('transfer_ways_sponsor')
            ->with('partner_bank')
            ->with('sponsor_bank')
            ->with('form_qualification')
            ->with('form_material_status')
            ->with('transfer_ways')->latest()->take(30);
        return response()->json($applicants);
    }
}
