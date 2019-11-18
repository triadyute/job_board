<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        return view('welcome', compact('jobs'));
    }

    public function results(Request $request)
    {
        $jobs = Job::all();

        $requirements = $request->requirements;

        $results_qualified = array();
        $results_not_qualified = array();

        
        if((in_array('apartment', $requirements) || in_array('house', $requirements) ) && in_array('property insurance', $requirements))
        {
            $job = Job::find(1);
            array_push($results_qualified, $job);
        }
        else{
            $job = Job::find(1);
            array_push($results_not_qualified, $job);

        }

        if((in_array('5 door car', $requirements) || in_array('4 door car', $requirements)) && in_array('driver\'s licence', $requirements) && in_array('car insurance', $requirements))
        {
            $job = Job::find(2);
            array_push($results_qualified, $job);
        }
        else{
            $job = Job::find(2);
            array_push($results_not_qualified, $job);
        } 

        if(in_array('social security number', $requirements) && in_array('work permit', $requirements))
        {
            $job = Job::find(3);
            array_push($results_qualified, $job);
        }
        else{
            $job = Job::find(3);
            array_push($results_not_qualified, $job);
        }

        if(in_array('apartment', $requirements) || in_array('flat', $requirements)|| in_array('house', $requirements))
        {
            $job = Job::find(4);
            array_push($results_qualified, $job);
        }
        else{
            $job = Job::find(4);
            array_push($results_not_qualified, $job);
        }

        if((in_array('driver\'s licence', $requirements)) && (in_array('2 door car', $requirements) || in_array('3 door car', $requirements) || in_array('4 door car', $requirements) || in_array('5 door car', $requirements))){
            $job = Job::find(5);
            array_push($results_qualified, $job);
        }
        else{
            $job = Job::find(5);
            array_push($results_not_qualified, $job);
        }

        if((in_array('scooter', $requirements) || in_array('bike', $requirements))  || (in_array('motorcycle', $requirements) && in_array('driver\'s licence', $requirements) && in_array('motorcycle insurance', $requirements)))  
        {
            $job = Job::find(6);
            array_push($results_qualified, $job);
        }
        else{
            $job = Job::find(6);
            array_push($results_not_qualified, $job);
        }

        if(in_array('massage qualification certificate', $requirements) && in_array('liability insurance', $requirements))
        {
            $job = Job::find(7);
            array_push($results_qualified, $job);
        }
        else{
            $job = Job::find(7);
            array_push($results_not_qualified, $job);
        }

        if(in_array('storage place', $requirements) || in_array('garage', $requirements))
        {
            $job = Job::find(8);
            array_push($results_qualified, $job);
        }
        else{
            $job = Job::find(8);
            array_push($results_not_qualified, $job);
        }

        if(in_array('no requirements', $requirements))
        {
            $job = Job::find(9);
            array_push($results_qualified, $job);
        }
        else{
            $job = Job::find(9);
            array_push($results_not_qualified, $job);
        }
        
        if(in_array('paypal account', $requirements))
        {
            $job = Job::find(10);
            array_push($results_qualified, $job);
        }
        else{
            $job = Job::find(10);
            array_push($results_not_qualified, $job);
        }
        return view('results', compact('results_qualified','results_not_qualified'));

    }
}
