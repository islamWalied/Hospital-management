<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::id()){
            $userid = Auth::user()->id;
            $appointments = Appointment::where('user_id', $userid)->get();
            return view('user.my-appointment' ,compact('appointments'));
        }
        else{
            return redirect()->back();
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Auth::id()){

        $data = new appointment;
        $request->validate([
            'name' => 'required|string|alpha_num',
            'number' => 'required',
            'date' => 'date',
            'email' => 'required|email',
            'message' => 'required|max:200|string|alpha_num',
            'doctor' => 'required',
        ]);
        $data->name = $request->name;
        $data->phone = $request->number;
        $data->date = $request->date;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->doctor = $request->doctor;
        $data->status = 'In Progress';
        if(Auth::id()){
            $data->user_id = Auth::user()->id;
        }

        $data->save();
        return redirect()->back()->with('message','Appointment Request Successfully, We Will Contact You Soon');
        }
        else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Appointment::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('delete', 'Appointment Has Deleted Successfully');
    }
}
