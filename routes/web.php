<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\ApplyApplicationController;
use App\Http\Controllers\Home\ClientsController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\FormController;
use App\Http\Controllers\Home\HomeHeroController;
use App\Http\Controllers\Home\LocationController;
use App\Http\Controllers\Home\PartnersController;
use App\Http\Controllers\Home\PhoneController;
use App\Http\Controllers\Home\RequestController;
use App\Http\Controllers\Home\ServicesController;
use App\Models\User;
use App\Models\VisitorInfo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use Stevebauman\Location\Facades\Location;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('frontend.index');
});
/*Route::match(array( 'GET', 'POST' ), '/', function (Request $request) {
    $userIp = $request->ip();
    $locationData = Location::get($userIp);
    VisitorInfo::insert([

        'ip' => $locationData->ip,
        'countryName' => $locationData->countryName,
        'countryCode' => $locationData->countryCode,
        'regionCode' => $locationData->regionCode,
        'regionName' => $locationData->regionName,
        'cityName' => $locationData->cityName,
        'zipCode' => $locationData->zipCode,
        'isoCode' => $locationData->isoCode,
        'postalCode' => $locationData->postalCode,
        'latitude' => $locationData->latitude,
        'longitude' => $locationData->longitude,
        'metroCode' => $locationData->metroCode,
        'areaCode' => $locationData->areaCode,
        'timezone' => $locationData->timezone,
        'created_at' => Carbon::now(),
    ]);
    return view('frontend.index');
});*/
Route::middleware([ 'auth' ])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('admin/logout', 'destroy')->name('admin.logout');
        Route::get('admin/profile', 'profile')->name('admin.profile');
        Route::get('admin/edit/profile', 'edit_profile')->name('edit.profile');
        Route::post('admin/update/profile', 'store_profile')->name('update.profile');
        Route::get('admin/profile/change/password', 'change_password')->name('admin.profile.change.password');
        Route::post('admin/profile/update/password', 'update_password')->name('admin.profile.update.password');
        Route::get('admin/users/add-user', 'add_user')->name('admin.users.add-user');

        Route::get('admin/users', 'users_list')->name('admin.users')->middleware('admin');

        Route::post('admin/users/store-user', 'store_user')->name('admin.users.store-user');

    });

    Route::controller(HomeHeroController::class)->group(function () {
        Route::get('admin/home/hero', 'home_hero')->name('home.hero');
        Route::post('admin/home/hero/update', 'hero_update')->name('hero.update');
        Route::get('admin/home/counter', 'home_counter')->name('home.counter');
        Route::post('admin/home/counter/update', 'home_counter_update')->name('home.counter.update');
        Route::get('admin/home/overview', 'home_overview')->name('home.overview');
        Route::post('admin/home/overview/update', 'home_overview_update')->name('home.overview.update');
    });
    Route::controller(AboutController::class)->group(function () {

        Route::get('admin/about/about-title', 'about_title')->name('about.about-title');
        Route::post('admin/about/about-title/update', 'about_title_update')->name('about.about-title.update');
        Route::get('admin/about/core-values', 'about_core_value')->name('about.core-values');
        Route::get('admin/about/core-values/add', 'add_about_core_value')->name('about.core-values.add');
        Route::post('admin/about/core-values/add/store', 'add_about_core_value_store')->name('about.core-values.add.store');
        Route::get('admin/about/core-values/edit/{id}', 'edit_about_core_values')->name('about.core-values.edit');
        Route::post('admin/about/core-values/edit/update', 'edit_about_core_values_update')->name('about.core-values.edit.update');
        Route::get('admin/about/core-values/delete/{id}', 'about_core_values_delete')->name('about.core-values.delete');
        Route::get('admin/about/mission', 'about_mission')->name('about.mission');
        Route::post('admin/about/mission/update', 'about_mission_update')->name('about.mission.update');
        Route::get('admin/about/vision', 'about_vision')->name('about.vision');
        Route::post('admin/about/vision/update', 'about_vision_update')->name('about.vision.update');

        /*Route::get('about/multi-image', 'multi_image')->name('about.multi-image');
        Route::post('about/multi-image/store', 'multi_image_store')->name('about.multi-image.store');
        Route::get('about/multi-image/all', 'multi_image_all')->name('about.multi-image.all');
        Route::get('about/multi-image/edit/{id}', 'multi_image_edit')->name('about.multi-image.edit');
        Route::post('about/multi-image/update/', 'multi_image_update')->name('about.multi-image.update');*/
    });
    Route::controller(ServicesController::class)->group(function () {

        Route::get('admin/services/title', 'services_title')->name('services.title');
        Route::post('admin/services/title/update', 'services_title_update')->name('services.title.update');
        Route::get('admin/services/category/edit/{id}', 'service_category_edit')->name('services.category.edit');
        Route::post('admin/services/category/update', 'service_category_update')->name('services.category.update');
        Route::get('admin/services/category/add', 'add_service_category')->name('services.category.add');
        Route::post('admin/services/category/store', 'service_category_store')->name('services.category.store');
        Route::get('admin/services/category/add/{id}/item', 'add_service_category_item')->name('services.category.item.add');
        Route::post('admin/services/category/add/item/store', 'service_category_item_store')->name('category.add.item.store');
        Route::get('admin/services/category/edit/item/{id}', 'service_category_item_edit')->name('category.edit.item');
        Route::get('admin/services/category/delete/item/{id}', 'service_category_item_delete')->name('category.delete.item');
        Route::post('admin/service/category/edit/item/update', 'service_category_item_update')->name('category.edit.item.update');
    });
    Route::controller(ClientsController::class)->group(function () {
        Route::get('admin/clients/list', 'client_list')->name('clients.list');
        Route::get('admin/clients/list/add', 'add_client')->name('clients.list.add');
        Route::post('admin/clients/list/add/store', 'add_client_store')->name('clients.list.add.store');
        Route::get('admin/clients/list/delete/{id}', 'delete_client')->name('clients.list.delete');
        Route::get('admin/clients/title', 'clients_header_edit')->name('clients.title');
        Route::post('admin/clients/title/update', 'clients_header_save')->name('clients.title.update');

    });
    Route::controller(PartnersController::class)->group(function () {

        Route::get('admin/partners/title', 'partners_title')->name('partners.title');
        Route::post('admin/partners/title/update', 'partners_title_update')->name('partners.title.update');
        Route::get('admin/partners/list', 'partners_list')->name('partners.list');
        Route::get('admin/partners/list/add', 'add_partner')->name('partners.list.add');
        Route::post('admin/partners/list/add/store', 'add_partner_store')->name('partners.list.add.store');
        Route::get('admin/partners/list/edit/{id}', 'edit_partner')->name('partners.list.edit');
        Route::post('admin/partners/list/edit/update', 'edit_partner_update')->name('partners.list.edit.update');
        Route::get('admin/partners/list/delete/{id}', 'delete_partner')->name('partners.list.delete');
    });
    Route::controller(ContactController::class)->group(function () {

        Route::get('admin/contacts-us/title', 'contact_us_title')->name('contacts-us.title');
        Route::post('admin/contact-us/title/update', 'contact_us_title_update')->name('contact-us.title.update');
        Route::get('admin/contact-us/why', 'contact_us_why')->name('contact-us.why');
        Route::post('admin/contact-us/why/update', 'contact_us_why_update')->name('contact-us.why.update');
        Route::get('admin/contact-us/address', 'contact_address')->name('contact-us.address');
        Route::post('admin/contact-us/address/update', 'contact_address_update')->name('contact-us.address.update');
        Route::get('admin/contact-us/social-media', 'contact_social_media_links')->name('contact-us.social-media');
        Route::post('admin/contact-us/social-media/icon/update', 'contact_social_media_icon_section_update')->name('contact-us.social-media.icon.update');
        Route::get('admin/contact-us/social-media/add', 'contact_social_media_links_add')->name('contact-us.social-media.add');
        Route::post('admin/contact-us/social-media/store', 'contact_social_media_links_store')->name('contact-us.social-media.store');
        Route::get('admin/contact-us/social-media/edit/{id}', 'contact_social_media_links_edit')->name('contact-us.social-media.edit');
        Route::post('admin/contact-us/social-media/update', 'contact_social_media_links_update')->name('contact-us.social-media.update');
        Route::get('admin/contact-us/social-media/delete/{id}', 'contact_social_media_links_delete')->name('contact-us.social-media.delete');
        Route::get('admin/contact-us/email', 'contact_email')->name('contact-us.email');
        Route::post('admin/contact-us/email/subtitle/update', 'contact_email_subtitle_update')->name('contact-us.email.subtitle.update');
        Route::get('admin/contact-us/email/add', 'contact_email_add')->name('contact-us.email.add');
        Route::post('admin/contact-us/email/store', 'contact_email_store')->name('contact-us.email.store');
        Route::get('admin/contact-us/email/edit/{id}', 'contact_email_edit')->name('contact-us.email.edit');
        Route::post('admin/contact-us/email/update', 'contact_email_update')->name('contact-us.email.update');
        Route::get('admin/contact-us/email/delete/{id}', 'contact_email_delete')->name('contact-us.email.delete');
        Route::get('admin/contact-us/phones', 'contact_phone')->name('contact-us.phones');
        Route::post('admin/contact-us/phones/update', 'contact_phone_update')->name('contact-use.phones.update');
        Route::get('admin/contact-us/phones/add', 'contact_phone_add')->name('contact-use.phones.add');
        Route::post('admin/contact-us/phones/store', 'contact_phone_store')->name('contact-us.phones.store');
        Route::get('admin/contact-us/phones/edit{id}', 'contact_phone_edit')->name('contact-us.phones.edit');
        Route::post('admin/contact-us/phones/edit/update', 'contact_phone_edit_update')->name('contact-us.phones.edit.update');
        Route::get('admin/contact-us/phones/delete{id}', 'contact_phone_delete')->name('contact-us.phones.delete');
    });
    Route::controller(PhoneController::class)->group(function () {
        Route::get('admin/phone-section/phone', 'phone_section')->name('phone-section.phone');
        Route::post('admin/phone-section/update', 'phone_section_update')->name('phone-section.update');
    });
    Route::controller(ApplyApplicationController::class)->group(function () {
        Route::get('admin/form-application/services', 'application_services')->name('form-application.services');
        Route::get('admin/form-application/services/add', 'application_services_add')->name('form-application.services.add');
        Route::post('admin/form-application/services/store', 'application_services_store')->name('form-application.services.store');
        Route::get('admin/form-application/services/edit/{id}', 'application_service_edit')->name('form-application.services.edit');
        Route::post('admin/form-application/services/update', 'application_service_update')->name('form-application.services.update');
        Route::get('admin/form-application/services/delete/{id}', 'application_service_delete')->name('form-application.services.delete');
        Route::get('admin/form-application/transfer-ways', 'application_transfer_way')->name('form-application.transfer-ways');
        Route::get('admin/form-application/transfer-ways/add', 'application_transfer_way_add')->name('form-application.transfer-ways.add');
        Route::post('admin/form-application/transfer-ways/store', 'application_transfer_way_store')->name('form-application.transfer-ways.store');
        Route::get('admin/form-application/transfer-way/edit/{id}', 'application_transfer_way_edit')->name('form-application.transfer-way.edit');
        Route::post('admin/form-application/transfer-way/update', 'application_transfer_way_update')->name('form-application.transfer-way.update');
        Route::get('admin/form-application/transfer-way/delete/{id}', 'application_transfer_way_delete')->name('form-application.transfer-way.delete');
        Route::get('admin/form-application/qualification', 'application_qualification')->name('form-application.qualification');
        Route::get('admin/form-application/qualification/add', 'application_qualification_add')->name('form-application.qualification.add');
        Route::post('admin/form-application/qualification/store', 'application_qualification_store')->name('form-application.qualification.store');
        Route::get('admin/form-application/qualification/edit/{id}', 'application_qualification_edit')->name('form-application.qualification.edit');
        Route::post('admin/form-application/qualification/update', 'application_qualification_update')->name('form-application.qualification.update');
        Route::get('admin/form-application/qualification/delete/{id}', 'application_qualification_delete')->name('form-application.qualification.delete');
        Route::get('admin/form-application/material-status', 'application_material_status')->name('form-application.material-status');
        Route::get('admin/form-application/material-status/add', 'application_material_status_add')->name('form-application.material-status.add');
        Route::post('admin/form-application/material-status/store', 'application_material_status_store')->name('form-application.material-status.store');
        Route::get('admin/form-application/material-status/edit/{id}', 'application_material_status_edit')->name('form-application.material-status.edit');
        Route::post('admin/form-application/material-status/update', 'application_material_status_update')->name('form-application.material-status.update');
        Route::get('admin/form-application/material-status/delete/{id}', 'application_material_status_delete')->name('form-application.material-status.delete');
        Route::get('admin/form-application/banks', 'application_banks')->name('form-application.banks');
        Route::get('admin/form-application/banks/add', 'application_banks_add')->name('form-application.banks.add');
        Route::post('admin/form-application/banks/store', 'application_banks_store')->name('form-application.banks.store');
        Route::get('admin/form-application/bank/edit/{id}', 'application_banks_edit')->name('form-application.bank.edit');
        Route::post('admin/form-application/bank/update', 'application_banks_update')->name('form-application.bank.update');
        Route::get('admin/form-application/bank/delete/{id}', 'application_banks_delete')->name('form-application.bank.delete');
    });
    Route::controller(FormController::class)->group(function () {
        Route::get('admin/form-application/applications', 'application_list')->name('form-application.applications');
        Route::get('admin/form-application/applications/{id}', 'application_details')->name('form-application.applications.details');
        Route::post('admin/form-application/application/submit', 'application_details_submit')->name('form-application.application.submit');
        Route::get('admin/form-application/applications/{id}/pdf', 'PDF_download')->name('form-application.applications.pdf');
    });
});


Route::get('about', [ PagesController::class, 'about' ])->name('about');
Route::get('services', [ PagesController::class, 'services' ])->name('services');
Route::get('partners', [ PagesController::class, 'partners' ])->name('partners');
Route::get('contact-us', [ PagesController::class, 'contact_us' ])->name('contact-us');
Route::get('clients', [ PagesController::class, 'clients' ])->name('clients');
Route::get('apply', [ RequestController::class, 'request_page' ])->name('request_page');
Route::post('apply/submit', [ PagesController::class, 'submit_form' ])->name('apply.submit');
Route::get('request-from', [ PagesController::class, 'request_form' ])->name('request_form');
Route::post('/', [ LocationController::class, 'index' ])->name('index');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware([ 'auth', 'verified' ])->name('dashboard');

require __DIR__ . '/auth.php';
