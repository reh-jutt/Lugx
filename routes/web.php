<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminRouteController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\TrendGamesController;
use App\Http\Controllers\Admin\MostPlayedController;
use App\Http\Controllers\Admin\TopCategoryController;
use App\Http\Controllers\Admin\ContactInfoController;
use App\Http\Controllers\Admin\GamesCategoryController;

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
//Front-End Routes
Route::get('sendmail',[FrontController::class, 'sendingmail'])->name('mailsender');
Route::get('/', [FrontController::class, 'index'])->name('Index');
Route::get('Products-details', [FrontController::class, 'Productsdetails'])->name('Productdetails');
Route::get('Our-shops', [FrontController::class, 'Ourshops'])->name('Ourshops');
Route::get('Contact-us', [FrontController::class, 'Contactus'])->name('Contactus');
Route::post('Contact-us', [ContactController::class, 'ContactRequest'])->name('Contactusrequest');
Route::get('table', [ContactController::class, 'getContactRequest'])->name('table');
Route::get('registration', [AuthController::class, 'registration'])->name('user.registration');
Route::post('postregistration', [AuthController::class, 'postregistration'])->name('user.postregistration');
Route::get('login', [AuthController::class, 'loginuser'])->name('user.login');
Route::post('login', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('logout', [AuthController::class, 'logout'])->name('user.logout');
Route::get('/edit/{id}', [AuthController::class, 'edit'])->name('editinfo');
Route::post('/update/{id}', [AuthController::class, 'update'])->name('update');
Route::get('userprofile', [FrontController::class, 'userprofile'])->name('user.profile');


// Admin Dashboard Routes

Route::get('/admin/dashboard', [AdminRouteController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/form', [AdminRouteController::class, 'adminform'])->name('admin.form');
Route::post('/admin/form', [FormController::class, 'adminpostform'])->name('admin.postform');
Route::get('/admin/table', [FormController::class, 'admintable'])->name('admin.table');
Route::get('/admin/edit/{id}', [FormController::class, 'adminedit'])->name('admin.edit-form');
Route::post('/admin/update/{id}', [FormController::class, 'adminupdate'])->name('admin.update-info');
Route::get('/admin/delete/{id}', [FormController::class, 'admindelete'])->name('admin.delete-form');

Route::prefix('/admin')->group(function () {


    //Admin Trending Games Routes

    Route::get('/trending', [AdminRouteController::class, 'trendinggames'])->name('trendinggames');
    Route::post('/gamesinfo', [TrendGamesController::class, 'gameinfopost'])->name('addtrendinggame');
    Route::get('/gametable', [AdminRouteController::class, 'gamestable'])->name('admin.games.table');
    Route::get('/editgametable/{id}', [TrendGamesController::class, 'gameinfoedit'])->name('admin.gametable.edit');
    Route::post('/updategametable/{id}', [TrendGamesController::class, 'gameinfoupdate'])->name('admin.gametable.update');
    Route::get('/deletegametable/{id}', [TrendGamesController::class, 'gameinfodelete'])->name('admin.gametable.delete');

    //Admin Most Played Games Routes

    Route::get('/mostplayed', [AdminRouteController::class, 'mostplayedgames'])->name('mostplayedgames');
    Route::post('/mostplayedgamesinfo', [MostPlayedController::class, 'mostplayedgameinfopost'])->name('add.mostplayed.game');
    Route::get('/mostplayed/games/list', [AdminRouteController::class, 'mostplayedgamestable'])->name('admin.mostplayedgames.table');
    Route::get('/editmostgametable/{id}', [MostPlayedController::class, 'mostplayedgameinfoedit'])->name('admin.mostplayedgametable.edit');
    Route::post('/updatemostgametable/{id}', [MostPlayedController::class, 'mostplayedgameinfoupdate'])->name('admin.mostplayedgamelist.update');
    Route::get('/deletemostgametable/{id}', [MostPlayedController::class, 'mostplayedgameinfodelete'])->name('admin.mostplayedgametable.delete');

    //Top Games Categories
    Route::get('/topgames', [AdminRouteController::class, 'topgames'])->name('topgames');
    Route::post('/topgamesinfo', [TopCategoryController::class, 'topgamesinfopost'])->name('add.topgames.game');
    Route::get('/topgames/games/list', [AdminRouteController::class, 'topgameslist'])->name('admin.topgames.lists');
    Route::get('/edittopgametable/{id}', [TopCategoryController::class, 'topgameinfoedit'])->name('admin.topgamelist.edit');
    Route::post('/updatetopgametable/{id}', [TopCategoryController::class, 'topgameinfoupdate'])->name('admin.topgamelist.update');
    Route::get('/deletetopgametable/{id}', [TopCategoryController::class, 'topgameinfodelete'])->name('admin.topgamelist.delete');

    //Contact Info LugX
    Route::get('/contactinfo', [AdminRouteController::class, 'contactinfo'])->name('contactinfo');
    Route::post('/contactinfopost', [ContactInfoController::class, 'contactinfopost'])->name('contactinfopost');
    Route::get('/contactinfodata', [AdminRouteController::class, 'contactinfodata'])->name('admin.contactinfo.data');
    Route::get('/editcontactinfo/{id}', [ContactInfoController::class, 'contactinfoedit'])->name('admin.contactinfo.edit');
    Route::post('/updatecontactinfo/{id}', [ContactInfoController::class, 'contactinfoupdate'])->name('admin.contactinfo.update');
    Route::get('/deletecontactinfo/{id}', [ContactInfoController::class, 'contactinfodelete'])->name('admin.contactinfo.delete');

    //Games CAtegories Routes
    Route::get('/gamescategory', [GamesCategoryController::class, 'gamescategory'])->name('admin.gamescategory');
    Route::post('/gamescategorypost', [GamesCategoryController::class, 'addgamescategory'])->name('admin.addgamescategory');
    Route::get('/gamescategorylists', [GamesCategoryController::class, 'gamescategorylists'])->name('admin.view.gamescategory');
    Route::get('/deletegamescategory/{id}', [GamesCategoryController::class, 'deletegamescategory'])->name('admin.delete.gamescategory');

    //Add New Games Routes
    Route::get('/addgames', [GamesController::class, 'gamesform'])->name('games.form');
    Route::get('/gamesdata', [GamesController::class, 'gamesdata'])->name('view.games.data');
});
