<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
// ->name('home');


// <?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// use App\Http\Controllers\HtmltestsController;
use App\Mail\OrderShipped;
/* //* --- Web Routes ---
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
*/
// -------------------------------------------------------------------------------------------------------------

Route::get('/', [App\Http\Controllers\FirstStartMainPage::class, 'first_start'])
->name('main.first_start');         // Стареовая страница

Auth::routes();
// Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])
// ->name('register');

Route::get('/categorys',        [App\Http\Controllers\HomeController::class, 'show_Categories' ])
->name('home.show.categories');     // запускается после успешного входа

Route::get('/{category}/{id}',  [App\Http\Controllers\HomeController::class, 'show_Products'])
->name('home.show.products');       // запускается по клику на выбранной категории

Route::post('/cart', [App\Http\Controllers\CartController::class, 'store']);

Route::get('/mail', function () {
    $numbeOrder = 555;          // "Квитанция № 555"
    $dTime = now('+02:00');
    $shoppingList = [
        "8-Apples, 1кГ x 12.89 = 12.89₴\n",
        "18-Grechka, 1уп x 12.85 = 12.85₴\n",
        "1-Cherry_plum, 1кГ x 19.50 = 19.50₴\n",
    ];
    $newOrderShipped = new OrderShipped($numbeOrder, $dTime, $shoppingList);
    Mail::to('misLiza@app.com')->send($newOrderShipped);                        //? Письмо отображается в файле \storage\logs\laravel.log
    return $newOrderShipped;                                                    //? Визуализация работала
    // newOrderShipped - возвращает это - markdown('vendor.mail.html.message');

})->name('mail.show.viewMailable');
