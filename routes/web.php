<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Livewire\Account\AccountComponent;
use App\Livewire\Address\AddressComponent;
use App\Livewire\Auth\LoginComponent;
use App\Livewire\Cart\CartComponent;
use App\Livewire\Home\ComingSoonComponent;
use App\Livewire\Order\OrderPlacedComponent;
use App\Livewire\Home\HomeComponent;
use App\Livewire\Order\NewOrderComponent;
use App\Livewire\Order\HistoryComponent;
use App\Livewire\Order\OrderHistoryComponent;
use App\Livewire\Product\DetailsComponent;
use App\Livewire\Product\ProductListComponent;
use App\Livewire\Profile\ChangePasswordComponent;
use App\Livewire\Profile\ProfileComponent;
use App\Livewire\Wishlist\WishlistComponent;
use Illuminate\Support\Facades\DB;
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

include __DIR__.'/admin.php';

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('/clear', function() {   /// CLEAR CACHE

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Cleared!";

});

// Route::get('/', function(){
//     return storage_path();
// });

//Route::get('/', HomeComponent::class)->name('home'); 
Route::get('/', HomeComponent::class)->name('home')->middleware('customer');
//Route::get('/', ComingSoonComponent::class)->name('home')->middleware('web');

Route::get('login', LoginComponent::class)->name('login'); 

Route::group(['middleware' => 'customer'], function () {
    Route::get('wishlist', WishlistComponent::class)->name('wishlist');
    
    Route::get('account', AccountComponent::class)->name('account');
    
    Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
        Route::get('details/{id}', DetailsComponent::class)->name('details'); 
        Route::get('list/{search}/{categoryId}', ProductListComponent::class)->name('list');
        Route::get('list/{search}', ProductListComponent::class)->name('list');
        // Route::get('list', ProductListComponent::class)->name('list');
    });

    Route::group(['prefix' => 'cart', 'as' => 'cart.'], function () {
        Route::get('/', CartComponent::class)->name('info'); 
    });

    Route::group(['prefix' => 'address', 'as' => 'address.'], function () {
        Route::get('/', AddressComponent::class)->name('address'); 
    });

    Route::group(['prefix' => 'order', 'as' => 'order.'], function () {
        Route::get('/', OrderPlacedComponent::class)->name('success'); 
        Route::get('success/{id}', OrderPlacedComponent::class)->name('success'); 
        Route::get('new',NewOrderComponent::class)->name('new');
        Route::get('history', OrderHistoryComponent::class)->name('history'); 
    });

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::get('/',ProfileComponent::class)->name('profile');
        Route::get('change-password', ChangePasswordComponent::class)->name('change-password');

    });


});


// Route::get('/', 'HomeController@index')->name('home');
Route::get('about-us', 'HomeController@about_us')->name('about-us');
Route::get('app-store', 'HomeController@app_store')->name('app-store');
Route::get('terms-and-conditions', 'HomeController@terms_and_conditions')->name('terms-and-conditions');
Route::get('privacy-policy', 'HomeController@privacy_policy')->name('privacy-policy');
Route::get('about-us', 'HomeController@about_us')->name('about-us');
Route::get('payment-status', 'PaymentController@payment_status')->name('payment-status');


Route::group(['namespace' => 'Website'], function() {
    Route::get('home-page', 'HomeController@home_page')->name('home-page');
});

Route::get('authentication-failed', function () {
    $errors = [];
    array_push($errors, ['code' => 'auth-001', 'message' => 'Unauthenticated.']);
    return response()->json([
        'errors' => $errors
    ], 401);
})->name('authentication-failed');

Route::group(['prefix' => 'payment-mobile'], function () {
    Route::get('/', 'PaymentController@payment')->name('payment-mobile');
    Route::get('set-payment-method/{name}', 'PaymentController@set_payment_method')->name('set-payment-method');
});

// SSLCOMMERZ Start
/*Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');*/
Route::post('pay-ssl', 'SslCommerzPaymentController@index');
Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');
Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END


/*paypal*/
/*Route::get('/paypal', function (){return view('paypal-test');})->name('paypal');*/
Route::post('pay-paypal', 'PaypalPaymentController@payWithpaypal')->name('pay-paypal');
Route::get('paypal-status', 'PaypalPaymentController@getPaymentStatus')->name('paypal-status');
/*paypal*/

/*Route::get('stripe', function (){
return view('stripe-test');
});*/
Route::post('pay-stripe', 'StripePaymentController@paymentProcess')->name('pay-stripe');

// Get Route For Show Payment Form
Route::get('paywithrazorpay', 'RazorPayController@payWithRazorpay')->name('paywithrazorpay');
Route::post('payment-razor', 'RazorPayController@payment')->name('payment-razor');

/*Route::fallback(function () {
    return redirect('/admin/auth/login');
});*/

Route::get('payment-success', 'PaymentController@success')->name('payment-success');
Route::get('payment-fail', 'PaymentController@fail')->name('payment-fail');

Route::get('add-currency', function () {
    $currencies = file_get_contents("installation/currency.json");
    $decoded = json_decode($currencies, true);
    $keep = [];
    foreach ($decoded as $item) {
        array_push($keep, [
            'country' => $item['name'],
            'currency_code' => $item['code'],
            'currency_symbol' => $item['symbol_native'],
            'exchange_rate' => 1,
        ]);
    }
    DB::table('currencies')->insert($keep);
    return response()->json(['ok']);
});


Route::get('/test',function (){
    return view('errors.404');
});
