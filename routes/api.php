 <?php

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

/*
|--------------------------------------------------------------------------
| API Routes
|
*/

Route::get('/emails', [EmailController::class, 'emails']);
Route::post('/subscribe', [EmailController::class, 'subscribe']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
