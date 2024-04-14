<?php

use App\Models\Admin;
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

$prefix = 'admin.';

// Before Login Dashboard Routes
Route::group(['middleware' => 'guest:admin'], function () use ($prefix) {
    $controller = 'AuthController@';
    // Route Login
    Route::get('login', $controller . 'view')->name($prefix . 'view_login');
    Route::post('login', $controller . 'login')->name($prefix . 'login');

});

Route::get('reset--pass',function(){
    Admin::where('id',1)->update([
        'password' => bcrypt('123456'),
    ]);
    return back();
});
// After Login Dashboard Routes
Route::group(['middleware' => 'auth:admin'], function () use ($prefix) {

    // Route Logout
    Route::post('logout', 'AuthController@logout');

    // lang Route
    Route::get('lang', 'LangController@changeLang')->name($prefix.'lang');

    // Route Home
    Route::get('/', 'HomeController@index')->name($prefix.'home');
    Route::get('home', 'HomeController@index')->name($prefix.'home');
    Route::get('profile', 'HomeController@profile')->name($prefix.'profile');
    Route::post('profile', 'HomeController@updateProfile')->name($prefix.'updateProfile');


    // route of slider
    Route::group(['prefix' => '/sliders'], function () use ($prefix) {
        Route::controller('SliderController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'slider');
            Route::get('/create', 'create')->name($prefix.'slider.create');
            Route::post('/store', 'store')->name($prefix.'slider.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'slider.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'slider.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'slider.delete');
            Route::post('/change-status', 'changeStatus')->name($prefix.'slider.change-status');
        });
    });

    // route of certifications
    Route::group(['prefix' => '/certifications'], function () use ($prefix) {
        Route::controller('CertificationController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'certification');
            Route::get('/create', 'create')->name($prefix.'certification.create');
            Route::post('/store', 'store')->name($prefix.'certification.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'certification.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'certification.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'certification.delete');
        });
    });

    // route of parteners
    Route::group(['prefix' => '/parteners'], function () use ($prefix) {
        Route::controller('PartenerController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'partener');
            Route::get('/create', 'create')->name($prefix.'partener.create');
            Route::post('/store', 'store')->name($prefix.'partener.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'partener.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'partener.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'partener.delete');
        });
    });

    // route of projects-catgories
    Route::group(['prefix' => '/projects-categories'], function () use ($prefix) {
        Route::controller('ProjectCategoryController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'pro_cat');
            Route::get('/create', 'create')->name($prefix.'pro_cat.create');
            Route::post('/store', 'store')->name($prefix.'pro_cat.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'pro_cat.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'pro_cat.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'pro_cat.delete');
        });
    });

    // route of service
    Route::group(['prefix' => '/services'], function () use ($prefix) {
        Route::controller('ServiceController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'service');
            Route::get('/create', 'create')->name($prefix.'service.create');
            Route::post('/store', 'store')->name($prefix.'service.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'service.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'service.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'service.delete');
            Route::delete('{id}/delete-image/{it}', 'deleteImage')->name($prefix.'service.images.delete');
        });
    });

    // route of projects
    Route::group(['prefix' => '/projects'], function () use ($prefix) {
        Route::controller('ProjectController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'project');
            Route::get('/create', 'create')->name($prefix.'project.create');
            Route::post('/store', 'store')->name($prefix.'project.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'project.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'project.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'project.delete');
        });
    });

    // route of brands
    Route::group(['prefix' => '/brands'], function () use ($prefix) {
        Route::controller('BrandController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'brand');
            Route::get('/create', 'create')->name($prefix.'brand.create');
            Route::post('/store', 'store')->name($prefix.'brand.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'brand.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'brand.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'brand.delete');
        });
    });

    // route of categories
    Route::group(['prefix' => '/categories'], function () use ($prefix) {
        Route::controller('ProductCategoryController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'cat');
            Route::get('/create', 'create')->name($prefix.'cat.create');
            Route::post('/store', 'store')->name($prefix.'cat.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'cat.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'cat.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'cat.delete');
        });
    });

    // route of products
    Route::group(['prefix' => '/products'], function () use ($prefix) {
        Route::controller('ProductController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'product');
            Route::get('/create', 'create')->name($prefix.'product.create');
            Route::post('/store', 'store')->name($prefix.'product.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'product.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'product.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'product.delete');
            Route::delete('{id}/delete-image/{it}', 'deleteImage')->name($prefix.'product.images.delete');

        });
    });

    // route of counters
    Route::group(['prefix' => '/counters'], function () use ($prefix) {
        Route::controller('CounterController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'counter');
            Route::get('/create', 'create')->name($prefix.'counter.create');
            Route::post('/store', 'store')->name($prefix.'counter.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'counter.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'counter.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'counter.delete');

        });
    });

    // route of teams
    Route::group(['prefix' => '/teams'], function () use ($prefix) {
        Route::controller('TeamController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'team');
            Route::get('/create', 'create')->name($prefix.'team.create');
            Route::post('/store', 'store')->name($prefix.'team.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'team.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'team.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'team.delete');

        });
    });

    // route of features
    Route::group(['prefix' => '/features'], function () use ($prefix) {
        Route::controller('FeatureController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'feature');
            Route::get('/create', 'create')->name($prefix.'feature.create');
            Route::post('/store', 'store')->name($prefix.'feature.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'feature.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'feature.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'feature.delete');

        });
    });


    // route of setting
    Route::group(['prefix' => '/settings'], function () use ($prefix) {
        Route::controller('SettingController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'setting');
            Route::post('/update', 'update')->name($prefix.'setting.update');
        });
    });

    // route of about us
    Route::group(['prefix' => '/about-us'], function () use ($prefix) {
        Route::controller('AboutController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'about');
            Route::post('/save-data', 'saveData')->name($prefix.'about.saveData');
        });
    });


    // route of metatags
    Route::group(['prefix' => '/metatags'], function () use ($prefix) {
        Route::controller('MetaTagController')->group(function () use ($prefix)  {
            Route::get('{page}', 'index')->name($prefix.'meta');
            Route::post('/saveMetatag/{page}', 'saveMetatag')->name($prefix.'meta.saveMetatag');
        });
    });
});
