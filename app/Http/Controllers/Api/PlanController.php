<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    //
    use ApiResponseTrait;
    public function index(){
        $plans = Plan::select('id','name', 'title', 'service1','service2','service3','service4','service5','service6','price','discount','priceDesc')->get();
        return $this->apiResponse($plans,"ok",200);
    }
    public function earth(Request $request){
        $plan = Plan::where('name', 'Earth')->first();
        
        $clickEarth = $plan->clicks;
        $plan->update([
            'clicks'=>$clickEarth+1,
        ]);
        return $this->apiResponse($plan,"Inc Earth",200);
        
    }
    public function mars(Request $request){
        $plan = Plan::where('name', 'Mars')->first();
        
        $clickMars = $plan->clicks;
        $plan->update([
            'clicks'=>$clickMars+1,
        ]);
        return $this->apiResponse($plan,"Inc Mars",200);
        
    }
    public function jupiter(Request $request){
        $plan = Plan::where('name', 'Jupiter')->first();
        
        $clickJupiter = $plan->clicks;
        $plan->update([
            'clicks'=>$clickJupiter+1,
        ]);
        return $this->apiResponse($plan,"Inc Jupiter",200);       
    }
}
