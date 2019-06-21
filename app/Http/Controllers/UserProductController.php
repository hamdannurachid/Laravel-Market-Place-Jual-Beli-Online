<?php

namespace App\Http\Controllers;

use App\ProductUser;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengguna.list_product');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductUser  $productUser
     * @return \Illuminate\Http\Response
     */
    public function show(ProductUser $productUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductUser  $productUser
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductUser $productUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductUser  $productUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductUser $productUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductUser  $productUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductUser $productUser)
    {
        //
    }
}
