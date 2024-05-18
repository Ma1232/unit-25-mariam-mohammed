<?php

namespace App\Http\Controllers;

use App\Models\knowladgebase;
use App\Http\Requests\StoreknowladgebaseRequest;
use App\Http\Requests\UpdateknowladgebaseRequest;
use Illuminate\Http\Request;

class KnowladgebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $articles = knowladgebase::where('title', 'like', "%{$search}%")->paginate();
        return view('KnowladgeBase',['article'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreknowladgebaseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(knowladgebase $knowladgebase)
    {
      
        $article = knowladgebase::where('id',$knowladgebase->id)->paginate();
        return view('showarticle',['article'=>$article]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(knowladgebase $knowladgebase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateknowladgebaseRequest $request, knowladgebase $knowladgebase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(knowladgebase $knowladgebase)
    {
        //
    }
}
