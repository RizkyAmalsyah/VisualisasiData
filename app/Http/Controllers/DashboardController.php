<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index (Request $request, $id)
  {
    $dashboards = Dashboard::where('cluster_id', $id)->get();
    // return redirect('/', $id)->with('cluster_id', $id);
    return view('dashboard.dashboard', [
      'dashboards' => $dashboards,
      'dashboard_name' => 'l'
    ]);
  }
}
