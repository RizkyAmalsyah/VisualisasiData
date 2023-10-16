<?php

namespace App\Http\Controllers;

use App\Models\Cluster;
use Illuminate\Http\Request;
use App\Models\Content;

class ClusterController extends Controller
{
  public function index(Request $request)
  {
    $clusters = Cluster::get();
    return view('dashboard.index', [
      'dashboard_name' => '$dashboard->name',
      'dashboard_id' => '$dashboard->id',
      'contents' => Content::where('dashboard_id', 1)->get(),
      'clusters' => $clusters 
    ]);
  }
}
