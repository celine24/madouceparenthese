<?php 

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller as Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Page;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('back.pages.index', compact('pages'));
    }


    /**
     * Montre la vue pour créer une page
     *
     * @return Response
     */
    public function create(Request $request)
    {
       /* $auth_id = Auth::user()->id;*/
        return view('back.pages.create');
    }

    /**
     * Permet de créer une page après soumission du formulaire
     *
     * @return Response
     */
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'title' => 'required|unique:pages',
            'content' => 'required',
            'url' => 'required|unique:pages',
            'location' => 'required',
            'published'
        ]);

        if($validator->fails()) {
            return redirect(route('admin.pages.create'))->withErrors($validator);
        }

        else {
            $post = Page::create($request->all());            
            $post->save();
            return redirect(route('admin.pages.index'))->with('message', 'Félicitations ! Votre page a bien été créée :)');
        }
    }



    /**
     * Permet de prévisualiser la page
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        
    }


    /**
     * Permet de voir la page d'édition
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        return view('back.pages.edit', compact('page'));
    }


    /**
     * Permet de mettre à jour
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $page = Page::findOrFail($id);

        if ($request->has('publication')) 
        {
            $page->published = $request->get('publication');
            $page->update($request->all());
            return redirect(route('admin.pages.index'))->with('message', 'Votre page est désormais en ligne :)');
        }
        else 
        {
            $page->update($request->all());
            return redirect(route('admin.pages.index'))->with('message', 'Félicitations ! Votre page vient d\'être éditée :)');
        }

        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();

        return redirect(route('admin.pages.index'))->with('message', 'La page "' . $page->title . '" a bien été supprimée.');
    }

}