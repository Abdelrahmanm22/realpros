<?php

namespace App\Http\Controllers;

use App\Models\popupcontact;
use Illuminate\Http\Request;

class PopupController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $pop = popupcontact::orderby('id', 'desc')->get();



        //=============bar chart==============

        $about_all = popupcontact::count();

        $about_FA = popupcontact::where('h_about', 'facebook')->count();
        $about_IN = popupcontact::where('h_about', 'instagram')->count();
        $about_LI = popupcontact::where('h_about', 'linkedin')->count();
        $about_GA = popupcontact::where('h_about', 'google-ads')->count();
        $about_O = popupcontact::where('h_about', 'other')->count();
        if ($about_FA == 0) {
            $nabout_FA = 0;
        } else {
            $nabout_FA = $about_FA / $about_all * 100;
        }

        if ($about_IN == 0) {
            $nabout_IN = 0;
        } else {
            $nabout_IN = $about_IN / $about_all * 100;
            
        }
        

        if ($about_LI == 0) {
            $nabout_LI = 0;
        } else {
            $nabout_LI = $about_LI / $about_all * 100;
        }

        if ($about_GA == 0) {
            $nabout_GA = 0;
        } else {
            $nabout_GA = $about_GA / $about_all * 100;
        }

        if ($about_O == 0) {
            $nabout_O = 0;
        } else {
            $nabout_O = $about_O / $about_all * 100;
        }
        $chartjs = app()->chartjs
            ->name('barChartTest')
            ->type('bar')
            ->size(['width' => 350, 'height' => 200])
            ->labels(['Facebook', 'Instagram', 'LinkedIn','Google Ads', 'Other'])
            ->datasets([
                [
                    'backgroundColor' => ['#4267B2
                    ', '#F77737', '#0A66C2', '#435334'],
                    'data' => [$nabout_FA, $nabout_IN, $nabout_LI,$about_GA,$nabout_O]
                ]


            ])
            ->options([]);


        //=============pie chart==============
        $market_all = popupcontact::count();

        $States =  ["AL" ,"AK" ,"AZ" ,"AR" ,"CA" ,"CO" ,"CT" ,"DE" ,"FL" ,"GA" ,"HI" ,"ID" ,"IL" ,"IN" ,"IA" ,"KS" ,"KY" ,
                    "LA" ,"ME" ,"MD" ,"MA" ,"MI" ,"MN" ,"MS" ,"MO" ,"MT" ,"NE" ,"NV" ,"NH" ,"NJ" ,"NM" ,"NY" ,"NC" ,"ND" ,
                    "OH" ,"OK" ,"OR" ,"PA" ,"RI" ,"SC" ,"SD" ,"TN" ,"TX" ,"UT" ,"VT" ,"VA" ,"WA" ,"WV" ,"WI" ,"WY"];
        $percentage =[];

        for($i=0;$i<50;$i++){
            $x = popupcontact::where('c_market', $States[$i])->count();
            if ($x==0){
                $nx=0;
            }else{
                $nx = $x/$market_all *100;
            }
            array_push($percentage, $nx);
        }

        $chartjs_2 = app()->chartjs
            ->name('pieChartTest')
            ->type('pie')
            ->size(['width' => 340, 'height' => 200])
            ->labels( ["Alabama","Alaska", "Arizona", "Arkansas","California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia",  "Hawaii", "Idaho", "Illinois","Indiana", "Iowa",  "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland","Massachusetts", "Michigan", "Minnesota","Mississippi", "Missouri", "Montana", "Nebraska", "Nevada","New Hampshire","New Jersey", "New Mexico", "New York", "North Carolina","North Dakota", "Ohio", "Oklahoma","Oregon","Pennsylvania","Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah",  "Vermont","Virginia", "Washington","West Virginia","Wisconsin", "Wyoming"])
            ->datasets([
                [
                    'backgroundColor' =>  [
                        '#FF0000', '#00FF00', '#0000FF', '#FFFF00', '#00FFFF',
                        '#FF00FF', '#FFA500', '#008000', '#800080', '#008080',
                        '#800000', '#008000', '#FF4500', '#32CD32', '#FFD700',
                        '#9400D3', '#00BFFF', '#FF1493', '#8A2BE2', '#00FA9A',
                        '#FF6347', '#1E90FF', '#FF8C00', '#7CFC00', '#FF69B4',
                        '#DC143C', '#3CB371', '#BA55D3', '#FF8C00', '#7FFF00',
                        '#800000', '#2E8B57', '#9932CC', '#FF4500', '#66CDAA',
                        '#9370DB', '#FF4500', '#20B2AA', '#FFD700', '#8B4513',
                        '#7B68EE', '#FF6347', '#00CED1', '#FF00FF', '#32CD32',
                        '#FF0000', '#00FF00', '#0000FF', '#FFFF00', '#00FFFF',
                        '#FF00FF', '#FFA500', '#008000', '#800080', '#008080',
                    ],
                    'data' => $percentage
                ]
            ])
            ->options([]);



        return view('popup.index', compact('chartjs', 'chartjs_2', 'pop'));
    }
}
