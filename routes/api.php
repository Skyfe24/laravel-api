<?php

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;

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

Route::get('/test', function () {
    $names = ['Fabio', 'Flavio', 'Frizz'];
    $total = count($names);
    return response()->json(compact('names', 'total'));
});

Route::get('/projects', function () {
    $projects = Project::all();
    return response()->json($projects);
});

Route::resource('projects', ProjectController::class);
