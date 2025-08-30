<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SeoMetaController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\CommonController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProfileSettingController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SectionSettingController;
use App\Http\Controllers\Admin\BusinessController;
use App\Http\Controllers\Admin\VisaController;
use App\Http\Controllers\Admin\QuotationController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Artisan;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get("help-center", function () {
    return view('front.help-center');
})->name('help-center');
Route::get("blog-details", function () {
    return view('front.blog-details');
})->name('blog-details');

Route::get("customers", function () {
    return view('front.customers');
})->name('customers');

Route::get("roadmap", function () {
    return view('front.roadmap');
})->name('roadmap');

Route::get("legal-docs", function () {
    return view('front.legal-docs');
})->name('legal-docs');

Route::get("signin", function () {
    return view('front.login');
})->name('signin');

Route::get("homepage2", function () {
    return view('front.homepage2');
})->name('homepage2');

Route::get("homepage3", function () {
    return view('front.homepage3');
})->name('homepage3');
Route::get("real-estate", function () {
    return view('front.real-estate');
})->name('real-estate');

Route::get("faq", function () {
    return view('front.faq');
})->name('faq');
Route::get("homepage4", function () {
    return view('front.homepage4');
})->name('homepage4');

Route::get("index-2", function () {
    return view('front.index-2');
})->name('index-2');

Route::get('/cache', function () {
    \Artisan::call('cache:clear');
    \Artisan::call('config:clear');
    \Artisan::call('route:clear');
    // \Artisan::call('optimize');
    dd('cleared');
});

Route::controller(FrontController::class)->group(function () {
    Route::get('/', [FrontController::class, 'home'])->name('home');

    Route::get("about-us", 'aboutUs')->name('about-us');
    Route::get("blogs", 'blogs')->name('blogs');
    Route::get('/blog/{slug}', [FrontController::class, 'blogDetails'])->name('blog.details');
    Route::get('/contact-us', [FrontController::class, 'contactUs'])->name('contact-us');
    Route::get("career", 'career')->name('career');
    Route::get("markets", 'markets')->name('markets');
    Route::get("education", 'education')->name('education');
});


Route::get('thank-you', function () {
    return view('front.thank-you');
})->name('thank-you');


Route::get('error-page', function () {
    return view('front.error-page');
})->name('error-page');


//admin panel
Auth::routes(['register' => true]);
// Admin Routes list
Route::prefix('admin')->name('admin.')->group(function () {
    Route::post('get-states-by-country', [FrontUserController::class, 'getState'])->name('getState');
    Route::post('get-cities-by-state', [FrontUserController::class, 'getCity'])->name('getCity');

    Route::middleware(['auth', 'isAdmin'])->group(function () {
        /****************************************
         *     START DASHBOARD
         * ****************************************/
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        /********************************************
         *      START MANAGE CAREER
         * ******************************************/
        Route::get('/manage-career', [HomePageController::class, 'career'])->name('manage-career.career');
        Route::get('/manage-career/edit/{id}', [HomePageController::class, 'career_edit'])->name('manage-career.edit');
        Route::post('/manage-career/update', [HomePageController::class, 'career_update'])->name('manage-career.update');
        Route::get('/manage-apply', [HomePageController::class, 'manageApply'])->name('manageApply');
        Route::post('/manage-apply/store', [HomePageController::class, 'storeApply'])->name('storeApply');
        Route::get('/manage-signup', [HomePageController::class, 'manageSignup'])->name('manageSignup');
        Route::post('/manage-signup/store', [HomePageController::class, 'storeSignup'])->name('storeSignup');
        Route::resource('/manage-servicers', ServiceController::class);


        /********************************************
         *   START MANAGE PAGE SEO
         * *****************************************/
        Route::resource('/manage-page-seo', SeoMetaController::class);



        /********************************************
         *   START MANAGE FEEDBACK
         * *****************************************/
        Route::resource('/manage-feedback', FeedbackController::class);

        /********************************************
         *   START MANAGE CONTACT US
         * *****************************************/
        Route::resource('/manage-contact-us', ContactUsController::class);



        /********************************************
         *   START MANAGE BLOG CATEGORY
         * *****************************************/
        Route::resource('/manage-blog-category', BlogCategoryController::class);
        Route::resource('/manage-blog', BlogController::class);

        Route::post('/image-upload', [CommonController::class, 'imageUpload'])->name('image-upload');
        /********************************************
         *   START MANAGE BLOG
         * *****************************************/
        Route::resource('/manage-blog', BlogController::class);
        Route::resource('/manage-sections', SectionSettingController::class);
        Route::resource('/manage-business', BusinessController::class);
        Route::resource('/manage-visa', VisaController::class);
        Route::resource('/manage-quotation', QuotationController::class);
        Route::resource('/manage-offers', OfferController::class);


        Route::get('/manage-offersdetails', [
            OfferController::class,
            'offerdeatils'
        ])->name('manage-offersdetails');
        Route::delete('/manage-offersdetails/{id}', [
            OfferController::class,
            'offerdeatilsdelete'
        ])->name('manage-offersdetails.delete');
        Route::resource('/manage-packages', PackageController::class);
        Route::get('/manage-packagedeatils', [
            PackageController::class,
            'packagedeatils'
        ])->name('manage-packagedeatils');

        Route::delete('/manage-packagedeatils/{id}', [
            PackageController::class,
            'packagedeatilsdelete'
        ])->name('manage-packagedeatils.delete');

        Route::resource('/manage-contact', ContactController::class);



        /********************************************
         *   START MANAGE TESTIMONIAL
         * *****************************************/
        Route::resource('/manage-testimonial', TestimonialController::class);

        /********************************************
         *   START MANAGE FAQ AND CATEGORY
         * *****************************************/
        Route::resource('/manage-pages', PageController::class);

        Route::resource('/manage-faq', FaqController::class);

        /********************************************
         *   START MANAGE GENERAL SETTING
         * *****************************************/
        Route::resource('/manage-general-setting', GeneralSettingController::class);



        /********************************************
         *   START MANAGE COUNTRY STATE AND CITY
         * *****************************************/
        Route::resource('/manage-country', CountryController::class);
        Route::resource('/manage-state', StateController::class);
        Route::resource('/manage-city', CityController::class);



        #Blank Pages
        Route::post('resetpassword', [GeneralSettingController::class, 'resetPassword'])->name('resetPassword');

        Route::resource('/profile-setting', ProfileSettingController::class);


        Route::post('/logout', [LogoutController::class, 'logout']);



        Route::get('/sitemap', [InvestTypeController::class, 'generateSitemap'])->name('generateSitemap');


    });
});
