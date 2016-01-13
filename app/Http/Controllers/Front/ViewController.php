<?php 


namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller as Controller;
use App\Page;
use App\Post;
use App\Sidebar;


class ViewController extends Controller
{
    public function show($url)
    {
        $view = Page::string($url)->first();
    	$main_menu = Page::published()->where('location', 'main')->get();
    	$menu_footer = Page::published()->where('location', 'footer')->get();
        $posts = Post::where('page_id', $view->id)->orderBy('created_at')->get();
        $sidebar = Sidebar::findOrFail(1);

        return view('front.view', compact('view', 'main_menu', 'menu_footer', 'posts', 'sidebar'));
    }
}