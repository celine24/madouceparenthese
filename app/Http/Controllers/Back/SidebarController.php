<?php 

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;

class SidebarController extends Controller
{
    public function index()
    {
        return view('back.sidebar.index');
    }
}