<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ApplyForm;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([ 'index', 'show' ]);
    }

    public function application_list()
    {
        $applications = ApplyForm::all();
        return view('admin.form_application.applications', compact('applications'));
    }
}
