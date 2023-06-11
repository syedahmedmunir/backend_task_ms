<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\JobType;
use App\Models\Job;

class JobController extends Controller
{
    public function index(Request $request){

        $data['countries'] =Country::get();
        $data['job_types'] =JobType::get();

        $my_posts = Job::myPost();
        $all_posts = Job::with('job_type');

        // FIlters Start

        if($request->search_skills){
            $my_posts->where('tags','LIKE','%'.$request->search_skills.'%');
            $all_posts->where('tags','LIKE','%'.$request->search_skills.'%');
        }

        if($request->availability){
            $my_posts->whereHas('job_type',function($cond) use($request){
                $cond->where('name',$request->availability);
            });
            $all_posts->whereHas('job_type',function($cond) use($request){
                $cond->where('name',$request->availability);
            });
        }

        if($request->job_type){
            $my_posts->whereHas('job_type',function($cond) use($request){
                $cond->where('id',$request->job_type);
            });
            $all_posts->whereHas('job_type',function($cond) use($request){
                $cond->where('id',$request->job_type);
            });
        }

        if($request->rate){
            $my_posts->whereBetween('rate',explode(',',$request->rate));
            $all_posts->whereBetween('rate',explode(',',$request->rate));
        }

        if($request->country_id){
            $my_posts->whereHas('user',function($cond) use($request){
                $cond->where('country_id',$request->country_id);
            });
            $all_posts->whereHas('user',function($cond) use($request){
                $cond->where('country_id',$request->country_id);
            });
        }
        // Filters End

        $data['my_posts']  =  $my_posts->get();
        $data['all_posts'] =  $all_posts->get();


        return view('jobs.index',$data);
    }
}
