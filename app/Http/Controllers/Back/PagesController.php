<?php 

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('back.pages.index');
    }


    /**
     * Montre la vue pour créer une page
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $auth_id = Auth::user()->id;
        return view('back.pages.create', compact('auth_id'));
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
        
    }


    /**
     * Permet de mettre à jour
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        
    }

}