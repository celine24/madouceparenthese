<?php 


namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller as Controller;
use App\Page;


class ViewController extends Controller
{
    public function show($url)
    {
    	$view = Page::string($url)->first();
    	$main_menu = Page::published()->where('location', 'main')->get();
    	$menu_footer = Page::published()->where('location', 'footer')->get();

        return view('front.view', compact('view', 'main_menu', 'menu_footer'));
    }
}