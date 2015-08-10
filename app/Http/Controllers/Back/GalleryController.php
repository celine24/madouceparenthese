<?php 

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        return view('back.gallery.index');
    }
}