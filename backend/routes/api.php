<?php

use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\HonoraireController;
use App\Http\Controllers\LigneController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\PubController;
use App\Http\Controllers\ScanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoyageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('admin')->group(function () {
    Route::get('/members', [UserController::class, 'index']);
    Route::get('/members/{id}', [UserController::class, 'findMember']);
    Route::post('/register', [AuthAdminController::class, 'register']);
    Route::post('/login', [AuthAdminController::class, 'login']);
});

Route::prefix('auth')->group(function () {
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);
});



Route::prefix('user')->group(function () {
    Route::get('/get-by-role/{id}', [UserController::class, 'getEtudiantByRole']);

    Route::get('/get-ticket/{id}', [UserController::class, 'getTicketByUser']);
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/change-password', [UserController::class, 'changePassword']);
    Route::post('/update-avatar', [UserController::class, 'updateAvatar']);
    Route::post('/get-info-by-immatricule', [UserController::class, 'checkUserByImmatricule']);
    Route::post('/update', [UserController::class, 'update']);
});

//
// Route::prefix('pub')->group(function () {
//     Route::post('/add', [PubController::class, 'addPub']);
//     Route::get('/get-all', [PubController::class, 'getAllPub']);
//     Route::post('/change-status', [PubController::class, 'changePubStatus']);
//     Route::delete('/delete/{id}', [PubController::class, 'destroy']);
// });
//
//
// Route::prefix('operation')->group(function () {
//     Route::get('/get-all', [OperationController::class, 'getPaieOperation']);
//
//     Route::get('/made-by-user/{id}', [OperationController::class, 'getOperationByuser']);
//
//     Route::post('/buy-ticket-for-me', [OperationController::class, 'buyTicketForMe']);
//     Route::post('/buy-ticket-for-other', [OperationController::class, 'buyTicketForOther']);
//     Route::post('/transfer-ticket', [OperationController::class, 'transferTicker']);
// });
//
// Route::prefix('ligne')->group(function () {
//     Route::get('/', [LigneController::class, 'index']);
//     Route::post('/', [LigneController::class, 'store']);
//     Route::post('/update', [LigneController::class, 'update']);
//     Route::delete('/{id}', [LigneController::class, 'destroy']);
// });
//
//
// Route::prefix('honoraire')->group(function () {
//     Route::get('/', [HonoraireController::class, 'index']);
//     Route::post('/', [HonoraireController::class, 'store']);
//     Route::post('/update', [HonoraireController::class, 'update']);
//     Route::delete('/{id}', [HonoraireController::class, 'destroy']);
// });
//
//
// Route::prefix('voyage')->group(function () {
//     Route::get('/get-historique/{id}', [VoyageController::class, 'getHistoriqueVoyage']);
//
//     Route::get('/get-all', [VoyageController::class, 'getAllVoyage']);
//     Route::get('/get-detail/{id}', [VoyageController::class, 'getVoyageDetail']);
//
//     Route::post('/', [VoyageController::class, 'store']);
//     Route::get('/get-by-delegue/{id}', [VoyageController::class, 'getVoyageByDelege']);
// });
//
//
// Route::prefix('affectation')->group(function () {
//     Route::get('/user/{id}', [LigneController::class, 'getOneUserLigne']);
//     Route::get('/', [LigneController::class, 'getUserLigne']);
//     Route::post('/', [LigneController::class, 'addUserLigne']);
//     Route::delete('/{id}', [LigneController::class, 'RemoveUserLigne']);
// });
//
//
// Route::prefix('email')->group(function () {
//     Route::post('/otp', [UserController::class, 'sendOpt']);
//     Route::post('/verification-code', [UserController::class, 'motDePasseOublier']);
// });
//
// Route::prefix('qr')->group(function () {
//     Route::get('/danger', [ScanController::class, 'danger']);
//     Route::post('/scan', [ScanController::class, 'scanQr']);
//     Route::get('/scan-immatricule', [ScanController::class, 'scanWithImmatricule']);
//     Route::post('/auto-scan', [ScanController::class, 'autoScan']);
//     Route::get('/generate/{id}', [ScanController::class, 'generateNewQr']);
// });


Route::group(['middleware' => 'auth:sanctum'] ,function() {

});
