<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ApplyForm;
use App\Models\Clients;
use App\Models\Contact;
use App\Models\Partners;
use App\Models\Services;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact_us()
    {
        $contact_title = Contact::findOrFail(1);
        return view('frontend.contact_us', compact('contact_title'));
    }

    public function services()
    {
        $services = Services::findOrFail(1);
        return view('frontend.services', compact('services'));
    }

    public function partners()
    {
        $partner_data = Partners::findOrFail(1);
        return view('frontend.partners', compact('partner_data'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function clients()
    {
        $client_title = Clients::findOrFail(1);
        return view('frontend.client', compact('client_title'));
    }

    public function submit_form(Request $request)
    {
        $apply = new ApplyForm();
        $apply->apply_full_name = $request->apply_full_name;
        $apply->application_type_id = $request->application_type_id;
        $apply->apply_gender = $request->apply_gender;
        $apply->apply_nationality = $request->apply_nationality;
        $apply->apply_national_id = $request->apply_national_id;
        $apply->apply_address = $request->apply_address;
        $apply->apply_phone = $request->apply_phone;
        $apply->apply_birthdate = $request->apply_birthdate;
        $apply->apply_email = $request->apply_email;
        $apply->material_status = $request->material_status;
        $apply->husband_wife_name = $request->husband_wife_name;
        $apply->husband_wife_work = $request->husband_wife_work;
        $apply->qualification_id = $request->qualification_id;
        $apply->dependents = $request->dependents;
        $apply->relative_one_name = $request->relative_one_name;
        $apply->relative_one_relation = $request->relative_one_relation;
        $apply->relative_one_work_title = $request->relative_one_work_title;
        $apply->relative_one_work_place = $request->relative_one_work_place;
        $apply->relative_one_phone = $request->relative_one_phone;
        $apply->relative_two_name = $request->relative_two_name;
        $apply->relative_two_relation = $request->relative_two_relation;
        $apply->relative_two_work_title = $request->relative_two_work_title;
        $apply->relative_two_work_place = $request->relative_two_work_place;
        $apply->relative_two_phone = $request->relative_two_phone;
        $apply->apply_work_place = $request->apply_work_place;
        $apply->apply_work_title = $request->apply_work_title;
        $apply->apply_work_website = $request->apply_work_website;
        $apply->apply_work_phone = $request->apply_work_phone;
        $apply->apply_work_address = $request->apply_work_address;
        $apply->apply_work_date = $request->apply_work_date;
        $apply->apply_salary = $request->apply_salary;
        $apply->salary_deduction = $request->salary_deduction;
        $apply->salary_deduction_detail = $request->salary_deduction_detail;
        $apply->personal_loan = $request->personal_loan;
        $apply->mortgages = $request->mortgages;
        $apply->sponsor_full_name = $request->sponsor_full_name;
        $apply->sponsor_nationality = $request->sponsor_nationality;
        $apply->sponsor_national_id = $request->sponsor_national_id;
        $apply->sponsor_gender = $request->sponsor_gender;
        $apply->sponsor_address = $request->sponsor_address;
        $apply->sponsor_relationship = $request->sponsor_relationship;
        $apply->sponsor_phone = $request->sponsor_phone;
        $apply->sponsor_work_title = $request->sponsor_work_title;
        $apply->sponsor_work_place = $request->sponsor_work_place;
        $apply->sponsor_work_address = $request->sponsor_work_address;
        $apply->sponsor_salary = $request->sponsor_salary;
        $apply->sponsor_work_date = $request->sponsor_work_date;
        $apply->application_date = $request->application_date;
        $apply->approved = $request->approved;
        $apply->service_requested = $request->service_requested;
        $apply->service_type = $request->service_type;
        $apply->payment_period = $request->payment_period;
        $apply->procedure_value = $request->procedure_value;
        $apply->profit_ratio = $request->profit_ratio;
        $apply->first_payment = $request->first_payment;
        $apply->installment_value = $request->installment_value;
        $apply->apply_work_email = $request->apply_work_email;
        $apply->transfer_way_id = $request->transfer_way_id;
        $apply->sponsor_salary_transfer_way_id = $request->sponsor_salary_transfer_way_id;
        $apply->save();
        return redirect()->back()->with('success', 'done');
    }

    public function request_form()
    {
        return view('admin.form.form');
    }
}
