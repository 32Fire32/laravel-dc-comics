<?php

function validation($request){
    $request->validate([
        'title'=>'required|string|min:1|max:50',
        'description' => 'nullable|string',
        'thumb' => 'nullable',
        'price' => 'required|numeric|max:1000',
        'series' => 'required|string|max:100',
        'sale_date' => 'required|date',
        'type' => 'required|string|max:50'
    ]);
}