<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Thangmay;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function index(){
    $thangmays = Thangmay::where('is_active', true)->latest()->take(6)->get();
    $projects = Project::where('is_active', true)->latest()->get();
    return view('clients.index', compact('thangmays', 'projects'));
 }
}
