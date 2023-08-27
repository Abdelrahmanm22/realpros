<?php

namespace App\Http\Controllers\Api;

use App\Models\popupcontact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\popUp;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
class PopupcontactController extends Controller
{
    use ApiResponseTrait;
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
        ///validation
        
        $validator = Validator::make($request->all(),[
            'full_name'=>'required|max:50',
            'email'=>'required|email',
            'phone'=>'required|max:50',
            'c_market'=>'max:50',
            'h_about'=>'max:50',
        ]);

        if($validator->fails()){
            return $this->apiResponse(null,$validator->errors(),400);
        }
       


        $message = popupcontact::create([
            'full_name'=>$request->full_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'c_market'=>$request->c_market,
            'h_about'=>$request->h_about,
        ]);

        $users = User::all();
        foreach ($users as $user) {
            Notification::send($user, new popUp($user->name,$request->full_name));
        }

        if($message){
            return $this->apiResponse($message,'The Message save successfully',200);
        }
        return $this->apiResponse(null,'The Message not save',400);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\popupcontact  $popupcontact
     * @return \Illuminate\Http\Response
     */
    public function show(popupcontact $popupcontact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\popupcontact  $popupcontact
     * @return \Illuminate\Http\Response
     */
    public function edit(popupcontact $popupcontact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\popupcontact  $popupcontact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, popupcontact $popupcontact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\popupcontact  $popupcontact
     * @return \Illuminate\Http\Response
     */
    public function destroy(popupcontact $popupcontact)
    {
        //
    }
}
