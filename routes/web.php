<?php

use App\Http\Controllers\ClusterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContentController;
use App\Models\Dashboard;
use App\Models\Content;
use Illuminate\Support\Facades\Route;

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

// $dashboards;
// if (Schema::hasTable('dashboards')) {
//     $dashboards = Dashboard::where('cluster_id', 1)->get();
// }

// foreach ($dashboards as $dashboard) {
//     Route::get('/' . $dashboard->id, function () use ($dashboard) {
//         return view('dashboard.layouts.main', [
//             'dashboard_name' => $dashboard->name,
//             'dashboard_id' => $dashboard->id,
//             'contents' => Content::where('dashboard_id', $dashboard->id)->get(),
//         ]);
//     });
// }

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
  Route::get('/dashboard', [ClusterController::class, 'index'])->name('cluster');
  Route::get('/dashboard/{id}', [DashboardController::class, 'index'])->name('dashboards');
  Route::get('/dashboard/content/{id}', [ContentController::class, 'index'])->name('content');

  Route::resource('/dashboard/content', ContentController::class);
  Route::resource('/dashboard/chart', ChartController::class);
  Route::resource('/prompt', PromptController::class);
  Route::post('/fetch-data', function (Request $request) {

      // return response()->json($request->selectedJudul);

      $cleanAll = Clean::where('judul', $request->selectedJudul)->get();
      $xValue = Content::where('id', $request->contentId)->pluck('x_value');
      return response()->json([
          'value' => $cleanAll,
          'xValue' => $xValue
      ]);
  });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
