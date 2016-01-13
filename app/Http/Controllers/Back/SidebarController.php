<?php 

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller as Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\Sidebar;

class SidebarController extends Controller
{
    public function index()
    {
    	$sidebars = Sidebar::get();
        return view('back.sidebar.index', compact('sidebars'));
    }

    public function edit($id)
    {
    	$sidebar = Sidebar::find($id);
        return view('back.sidebar.edit', compact('sidebar'));
    }

    public function update($id, Request $request)
    {	
        $sidebar = Sidebar::findOrFail($id);

        if ($request->has('publication'))
        {
            $sidebar->published = $request->get('publication');
            $sidebar->update($request->all());
            return redirect(route('admin.mise-en-avant.index'))->with('message', 'Le contenu de la section est désormais en ligne :)');
        }

        else 
        {
	        $sidebar->update($request->all());
	        return redirect(route('admin.mise-en-avant.index'))->with('message', 'La Section de Mise-en-avant vient d\'être éditée :)');
        }
    }
}