<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PricingContact;
use App\Models\User;
use App\Notifications\pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
class PricingContactController extends Controller
{
    //
    use ApiResponseTrait;
    public function store(Request $request)
    {
        //
        ///validation
        
        $validator = Validator::make($request->all(),[
            'name'=>'required|max:50',
            'email'=>'required|email',
            'phone'=>'required|max:50',
        ]);
        

        if($validator->fails()){
            return $this->apiResponse(null,$validator->errors(),400);
        }
       


        $message = PricingContact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ]);
        $users = User::all();
        foreach ($users as $user) {
            Notification::send($user, new pricing($user->name,$request->name));
        }
        if($message){
            return $this->apiResponse($message,'The Message save successfully',200);
        }
        return $this->apiResponse(null,'The Message not save',400);
    }
}
