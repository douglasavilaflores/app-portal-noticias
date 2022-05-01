<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorenoticiaRequest;
use App\Http\Requests\UpdatenoticiaRequest;
use App\Models\Noticia;
use Illuminate\Support\Facades\Cache;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$noticias = Noticia::orderByDesc('created_at')->limit(100)->get();
        //$noticias = [];

        if(Cache::has('top_dez')){
            $noticias = Cache::get('top_dez');
        }else{
            $noticias = Noticia::orderByDesc('created_at')->limit(100)->get();
            Cache::put('top_dez', $noticias, 15);
        }
        

        

        return view('noticia', ['noticias' => $noticias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorenoticiaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorenoticiaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(noticia $noticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(noticia $noticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatenoticiaRequest  $request
     * @param  \App\Models\noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatenoticiaRequest $request, noticia $noticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(noticia $noticia)
    {
        //
    }
}
