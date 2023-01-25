<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function store(StoreComicRequest $request)
    {        
        $data = $request->all();

        $new_comics = new Comic();
        // $new_comics->title = $data['title'];
        // $new_comics->description = $data['description'];
        // $new_comics->thumb = $data['thumb'];
        // $new_comics->price = $data['price'];
        // $new_comics->series = $data['series'];
        // $new_comics->sale_date = $data['sale_date'];
        // $new_comics->type = $data['type'];
        $new_comics->fill($data);
        $new_comics->save();

        return redirect()->route('comics.show', $new_comics->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comics = Comic::where('id', $id)->first;
        // o
        // $comics = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreComicRequest $request, Comic $comic)
    {
        // $request->validate([
        //     'title'=>'required|string|min:1|max:50',
        //     'description' => 'nullable|string',
        //     'thumb' => 'nullable',
        //     'price' => 'required|numeric|max:1000',
        //     'series' => 'required|string|max:100',
        //     'sale_date' => 'required|date',
        //     'type' => 'required|string|max:50'
        // ]);
       
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }

    public function delete($id)
    {
        $comic = Comic::find($id);
        return view('delete', compact('comic'));
    }
}
