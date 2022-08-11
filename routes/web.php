<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\ClientsController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\HomeHeroController;
use App\Http\Controllers\Home\PartnersController;
use App\Http\Controllers\Home\ServicesController;
use Illuminate\Support\Facades\Route;

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

Route::controller(AdminController::class)->group(function () {
    Route::get('admin/logout', 'destroy')->name('admin.logout');
    Route::get('admin/profile', 'profile')->name('admin.profile');
    Route::get('admin/edit/profile', 'edit_profile')->name('edit.profile');
    Route::post('admin/update/profile', 'store_profile')->name('update.profile');
    Route::get('admin/profile/change/password', 'change_password')->name('admin.profile.change.password');
    Route::post('admin/profile/update/password', 'update_password')->name('admin.profile.update.password');
});

Route::controller(HomeHeroController::class)->group(function () {
    Route::get('home/hero', 'home_hero')->name('home.hero');
    Route::post('home/hero/update', 'hero_update')->name('hero.update');
    Route::get('home/counter', 'home_counter')->name('home.counter');
    Route::post('home/counter/update', 'home_counter_update')->name('home.counter.update');
    Route::get('home/overview', 'home_overview')->name('home.overview');
    Route::post('home/overview/update', 'home_overview_update')->name('home.overview.update');
});
Route::controller(AboutController::class)->group(function () {
    Route::get('about', 'about')->name('about');
    Route::get('about/about-title', 'about_title')->name('about.about-title');
    Route::post('about/about-title/update', 'about_title_update')->name('about.about-title.update');
    Route::get('about/core-values', 'about_core_value')->name('about.core-values');
    Route::get('about/core-values/add', 'add_about_core_value')->name('about.core-values.add');
    Route::post('about/core-values/add/store', 'add_about_core_value_store')->name('about.core-values.add.store');
    Route::get('about/core-values/edit/{id}', 'edit_about_core_values')->name('about.core-values.edit');
    Route::post('about/core-values/edit/update', 'edit_about_core_values_update')->name('about.core-values.edit.update');
    Route::get('about/core-values/delete/{id}', 'about_core_values_delete')->name('about.core-values.delete');
    Route::get('about/mission', 'about_mission')->name('about.mission');
    Route::post('about/mission/update', 'about_mission_update')->name('about.mission.update');
    Route::get('about/vision', 'about_vision')->name('about.vision');
    Route::post('about/vision/update', 'about_vision_update')->name('about.vision.update');

    /*Route::get('about/multi-image', 'multi_image')->name('about.multi-image');
    Route::post('about/multi-image/store', 'multi_image_store')->name('about.multi-image.store');
    Route::get('about/multi-image/all', 'multi_image_all')->name('about.multi-image.all');
    Route::get('about/multi-image/edit/{id}', 'multi_image_edit')->name('about.multi-image.edit');
    Route::post('about/multi-image/update/', 'multi_image_update')->name('about.multi-image.update');*/
});
Route::controller(ServicesController::class)->group(function () {
    Route::get('services', 'services')->name('services');
    Route::get('services/title', 'services_title')->name('services.title');
    Route::post('services/title/update', 'services_title_update')->name('services.title.update');
    Route::get('services/category/edit/{id}', 'service_category_edit')->name('services.category.edit');
    Route::post('services/category/update', 'service_category_update')->name('services.category.update');
    Route::get('services/category/add', 'add_service_category')->name('services.category.add');
    Route::post('services/category/store', 'service_category_store')->name('services.category.store');
    Route::get('services/category/add/{id}/item', 'add_service_category_item')->name('services.category.item.add');
    Route::post('services/category/add/item/store', 'service_category_item_store')->name('category.add.item.store');
    Route::get('services/category/edit/item/{id}', 'service_category_item_edit')->name('category.edit.item');
    Route::get('services/category/delete/item/{id}', 'service_category_item_delete')->name('category.delete.item');
    Route::post('service/category/edit/item/update', 'service_category_item_update')->name('category.edit.item.update');
});
Route::controller(ClientsController::class)->group(function () {
    Route::get('clients', 'clients')->name('clients');
    Route::get('clients/list', 'client_list')->name('clients.list');
    Route::get('clients/list/add', 'add_client')->name('clients.list.add');
    Route::post('clients/list/add/store', 'add_client_store')->name('clients.list.add.store');
    Route::get('clients/list/delete/{id}', 'delete_client')->name('clients.list.delete');
    Route::get('clients/title', 'clients_header_edit')->name('clients.title');
    Route::post('clients/title/update', 'clients_header_save')->name('clients.title.update');

});
Route::controller(PartnersController::class)->group(function () {
    Route::get('partners', 'partners')->name('partners');
    Route::get('partners/title', 'partners_title')->name('partners.title');
    Route::post('partners/title/update', 'partners_title_update')->name('partners.title.update');
    Route::get('partners/list', 'partners_list')->name('partners.list');
    Route::get('partners/list/add', 'add_partner')->name('partners.list.add');
    Route::post('partners/list/add/store', 'add_partner_store')->name('partners.list.add.store');
    Route::get('partners/list/edit/{id}', 'edit_partner')->name('partners.list.edit');
    Route::post('partners/list/edit/update', 'edit_partner_update')->name('partners.list.edit.update');
    Route::get('partners/list/delete/{id}', 'delete_partner')->name('partners.list.delete');
});
Route::controller(ContactController::class)->group(function () {
    Route::get('contact-us', 'contact_us')->name('contact-us');
    Route::get('contacts-us/title', 'contact_us_title')->name('contacts-us.title');
    Route::post('contact-us/title/update', 'contact_us_title_update')->name('contact-us.title.update');
    Route::get('contact-us/why', 'contact_us_why')->name('contact-us.why');
    Route::post('contact-us/why/update', 'contact_us_why_update')->name('contact-us.why.update');
    Route::get('contact-us/address', 'contact_address')->name('contact-us.address');
    Route::post('contact-us/address/update', 'contact_address_update')->name('contact-us.address.update');
    Route::get('contact-us/social-media', 'contact_social_media_links')->name('contact-us.social-media');
    Route::get('contact-us/social-media/add', 'contact_social_media_links_add')->name('contact-us.social-media.add');
    Route::post('contact-us/social-media/store', 'contact_social_media_links_store')->name('contact-us.social-media.store');
    Route::get('contact-us/social-media/edit/{id}', 'contact_social_media_links_edit')->name('contact-us.social-media.edit');
    Route::post('contact-us/social-media/update', 'contact_social_media_links_update')->name('contact-us.social-media.update');
    Route::get('contact-us/social-media/delete/{id}', 'contact_social_media_links_delete')->name('contact-us.social-media.delete');
    Route::get('contact-us/email', 'contact_email')->name('contact-us.email');
    Route::get('contact-us/email/add', 'contact_email_add')->name('contact-us.email.add');
    Route::post('contact-us/email/store', 'contact_email_store')->name('contact-us.email.store');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware([ 'auth', 'verified' ])->name('dashboard');

require __DIR__ . '/auth.php';
