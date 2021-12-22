<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
{
    public function homepage(Request $request){
        $data = User::paginate(10);
        return view('dashboard',['data'=>$data]);
    }

    public function filter(Request $request){
        if($request->method() == "GET"){
            $data = User::paginate(10);
            return view('dashboard',['data'=>$data]);
        }else{
            if($request->filter_by == '1'){
                $data = User::where('gender', "LIKE", '%' . $request->searchValue . '%')->paginate(20);
                return view('dashboard',['data'=>$data]);
            }elseif($request->filter_by == '2'){
                $data = User::where('family_type', "LIKE", '%' . $request->searchValue . '%')->paginate(20);
                return view('dashboard',['data'=>$data]);
            }
            elseif($request->filter_by == '3'){
                $data = User::where('manglik', "LIKE", '%' . $request->searchValue . '%')->paginate(20);
                return view('dashboard',['data'=>$data]);
            }
            elseif($request->filter_by == '4'){
                $data = User::where('dob', "LIKE", '%' . $request->searchValue . '%')->paginate(20);
                return view('dashboard',['data'=>$data]);
            }
            elseif($request->filter_by == '5'){
                $data = User::where('annual_income', "LIKE", '%' . $request->searchValue . '%')->paginate(20);
                return view('dashboard',['data'=>$data]);
            }
            elseif($request->filter_by == '6'){
                $data = User::where('occupation', "LIKE", '%' . $request->searchValue . '%')->paginate(20);
                return view('dashboard',['data'=>$data]);
            }
        }
       
    }
}
