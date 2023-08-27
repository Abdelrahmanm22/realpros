<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use App\Notifications\contact as NotificationsContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
class ContactController extends Controller
{
    //
    use ApiResponseTrait;

    public function store(Request $request){

        ///validation
        
        $validator = Validator::make($request->all(),[
            'first_name'=>'required|max:50',
            'last_name'=>'required|max:50',
            'message'=>'required|max:500',
            'email'=>'required|email',
            'phone'=>'required|max:50',
        ]);

        if($validator->fails()){
            return $this->apiResponse(null,$validator->errors(),400);
        }
        
        $message = Contact::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'message'=>$request->message,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ]);
        
        $users = User::all();
        
        foreach ($users as $user) { 
            Notification::send($user, new NotificationsContact($user->name,$request->first_name));
        }
        
        if($message){
            return $this->apiResponse($message,'The Message save successfully',202);
        }
        return $this->apiResponse(null,'The Message not save',400);
    }
}
