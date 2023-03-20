<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctors;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        $doctors = Doctors::all();
        return view('user.home',compact('doctors'));
    }
    public function redirect(){
        if(Auth::id()){

            if(Auth::user()->status == '0'){
                //user
                $doctors = Doctors::all();
                return view('user.home',compact('doctors'));
            }
            else{

                //admin
                $users = User::where('status', 1)->get();
                $doctors = Doctors::orderBy("updated_at")->limit(5)->get();
                $doctor = Doctors::all()->count();
                $appointments = Appointment::orderBy("updated_at")->limit(5)->get();
                return view('admin.home',compact('appointments','doctors','doctor','users'));
            }
        }
        else{
            // hack
            return redirect()->back();
        }
    }
    public function about(){
        if(Auth::id()){
        $doctors = Doctors::all();
        return view('user.about.about',compact('doctors'));
        }
        else{
            // hack
            return redirect()->back();
        }
    }
    public function blog(){
        if(Auth::id()){
            $doctors = Doctors::all();
            return view('user.blog.blog',compact('doctors'));
        }
        else{
            // hack
            return redirect()->back();
        }
    }
    public function doctor(){
        if(Auth::id()){
            $doctors = Doctors::all();
            return view('user.doctor.doctors',compact('doctors'));
        }
        else{
            // hack
            return redirect()->back();
        }
    }
    public function contact(){
        if(Auth::id()){
            return view('user.contact.contact');
        }
        else{
            // hack
            return redirect()->back();
        }
    }

}
