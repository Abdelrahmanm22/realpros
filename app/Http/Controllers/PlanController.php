<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PlanController extends Controller
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
        //
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
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan= Plan::find($id);
        return view('plans.edit',compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $plan = Plan::find($id);
        $validator = Validator::make($request->all(),[
            'name'=>'required|max:50',
            'Description'=>'required|max:255',
            'Service1'=>'required|max:255',
            'Service2'=>'required|max:255',
            'Service3'=>'required|max:255',
            'Service4'=>'max:255',
            'Service5'=>'max:255',
            'Service6'=>'max:255',
            'price'=>'required|numeric',
            'discount'=>'required|numeric',
            'period'=>'required|max:255',
        ]);
        //check if data is not correct
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        // dd($plan);

        $plan->update([
            'name'=>$request->name,
            'title'=>$request->Description,
            'service1'=>$request->Service1,
            'service2'=>$request->Service2,
            'service3'=>$request->Service3,
            'service4'=>$request->Service4,
            'service5'=>$request->Service5,
            'service6'=>$request->Service6,
            'price'=>$request->price,
            'discount'=>$request->discount,
            'priceDesc'=>$request->period,
            'user_id'=>Auth::user()->id,
        ]);
        // dd($plan);
        return redirect('/home')->with(['success'=>'Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        //
    }
}
