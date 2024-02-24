<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrations;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $validations = [
            'parent_name' => 'required|max:255',
            'child_name' => 'required|max:255',
            'age' => 'required',
            'camp' => 'required|in:football,multi',
            'email' => 'required|email',
            'phone' => 'required',
        ];

        $messages = [
            'location_football.required' => 'Please select a location',
            'location_multi.required' => 'Please select a location',
        ];
        if(isset($request->camp) && $request->camp === 'football') {
            $validations['location_football'] = 'required';
        } else {
            $validations['location_multi'] = 'required';
        }
        $validator = Validator::make($request->all(), $validations, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'messages' => $validator->messages()
            ]);
        }
        $registration = new Registrations;
        $registration->parent_name = $request->parent_name;
        $registration->child_name = $request->child_name;
        $registration->email = $request->email;
        $registration->phone = $request->phone;
        $registration->age = $request->age;
        $registration->medical = $request->medical;
        $registration->camp = $request->camp;
        $registration->location = $request->location_multi;
        if($request->camp == 'football') {
            $registration->location = $request->location_football;
        }
        $registration->save();
        return response()->json([
            'status' => true,
            'message' => "Registration Completed Successfully"
        ], 201);
    }
}
