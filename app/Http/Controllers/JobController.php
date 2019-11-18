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

    public function results(Request $request){
        $jobs = Job::all();
        $requirements = $request->requirements;
        $results = array();
        if($requirements == ['apartment', ] ){
            $job = Job::find(1);
            array_push($results, $job);
            return $results;
        }
        elseif(in_array(['bike', 'driver\'s licence'], $requirements) ){
            return $requirements;
        }
        elseif($requirements == [''] ){
            return $requirements;
        }
        elseif($requirements == [''] ){
            return $requirements;
        }
        elseif($requirements == [''] ){
            return $requirements;
        }
        elseif($requirements == [''] ){
            return $requirements;
        }
        elseif($requirements == [''] ){
            return $requirements;
        }
        elseif($requirements == [''] ){
            return $requirements;
        }
        elseif($requirements == [''] ){
            return $requirements;
        }
        else{
            return $requirements;
        }


        //return $requirements;
    }


}
