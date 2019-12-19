<?php

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

Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function(){
    Auth::routes();

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/shop', 'ShopController@index')->name('shop');
    Route::get('/about', 'AboutController@index');
    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::post('/profile', 'UserController@profileSave');
    Route::get('/profile/account', 'UserController@account')->name('account');
    Route::post('/profile/account', 'UserController@accountUpdate');

    Route::resource('/profile/verses', 'VerseController');

    Route::get('/verses/authors/{id}', 'VerseController@authorVerses');
    Route::get('/verses/authors', 'VerseController@authorsVerses');

    Route::get('/verses/latest', 'VerseController@latestVerses');
    Route::get('/verses/popular', 'VerseController@popularVerses');
    Route::get('/verses', 'VerseController@allVerses');
    Route::get('/verses/{id}', 'VerseController@showVerse');

    Route::post('/contact/submit','MessageController@submit');

});

//Переключение языков
Route::get('setlocale/{lang}', function ($lang) {

    $referer = Redirect::back()->getTargetUrl(); //URL предыдущей страницы
    $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

    //разбиваем на массив по разделителю
    $segments = explode('/', $parse_url);

    //Если URL (где нажали на переключение языка) содержал корректную метку языка
    if (in_array($segments[1], App\Http\Middleware\LocaleMiddleware::$languages)) {

        unset($segments[1]); //удаляем метку
    }

    //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
    if ($lang != App\Http\Middleware\LocaleMiddleware::$mainLanguage){
        array_splice($segments, 1, 0, $lang);
    }

    //формируем полный URL
    $url = Request::root().implode("/", $segments);

    //если были еще GET-параметры - добавляем их
    if(parse_url($referer, PHP_URL_QUERY)){
        $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
    }
    return redirect($url); //Перенаправляем назад на ту же страницу

})->name('setlocale');




Route::group(['prefix' => 'admin', 'namespace'=>"Admin", 'middleware'=>['auth', 'admin']], function() {
    Route::get('/', "AdminController@index");
    Route::resource('verses', "VersesController");
    Route::resource('categories', "CategoriesController");
    Route::resource('users', "UserController");
});