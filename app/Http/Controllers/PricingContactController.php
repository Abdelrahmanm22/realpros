<?php

namespace App\Http\Controllers;

use App\Models\PricingContact;
use Illuminate\Http\Request;

class PricingContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = PricingContact::get();
        // dd($contacts);
        return view('pricingContact.index', compact('contacts'));

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
     * @param  \App\Models\PricingContact  $pricingContact
     * @return \Illuminate\Http\Response
     */
    public function show(PricingContact $pricingContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PricingContact  $pricingContact
     * @return \Illuminate\Http\Response
     */
    public function edit(PricingContact $pricingContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PricingContact  $pricingContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PricingContact $pricingContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PricingContact  $pricingContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(PricingContact $pricingContact)
    {
        //
    }
}
