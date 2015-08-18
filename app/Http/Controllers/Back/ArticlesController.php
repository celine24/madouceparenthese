<?php 

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller as Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\User;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('back.articles.index');
    }

    public function create(Request $request)
    {
       /* $auth_id = Auth::user()->id;*/
        return view('back.articles.create');
    }
}