<?php 

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('back.pages.index');
    }
}