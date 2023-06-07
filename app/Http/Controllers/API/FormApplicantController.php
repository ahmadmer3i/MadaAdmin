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
            ->with('transfer_ways')->latest()->take(30)->get();
        return response()->json($applicants);
    }

    public function update_approval(Request $request)
    {
        $approved = null;
        if ($request->approved === 0) {
            $approved = true;
        } else if ($request->approved === 1) {
            $approved = false;
        }
        $updated_form = ApplyForm::find($request->id);
        $updated_form->update(compact('approved'));
        $updated_form->with('form_services')
            ->with('category_services')
            ->with('transfer_ways_sponsor')
            ->with('partner_bank')
            ->with('sponsor_bank')
            ->with('form_qualification')
            ->with('form_material_status')->first();
        return response()->json($updated_form);
    }
}
