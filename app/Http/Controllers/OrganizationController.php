<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrganizationController extends Controller
{
    function postOrg(Request $request) {
        $participant = Participant::where('id', $request->participant)->first();

        $participant->organizations()->attach($request->org, [
            'reason' => 'hahahihi'
        ]);

        return $participant;   
    }

    function postParticipant(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'personality' => 'required',
        ], [
            'name.required' => 'Name is required!',
            'personality.required' => 'Personality is required!',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->errors()->first());
        }

        $participant = Participant::create($validator->validated());

        return redirect()->back()->with('success', 'participant successfully made');
    }

    function updateParticipant(Request $request) {

        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:participants,id',
            'new_name' => 'required|string',
        ], [
            'id.required' => 'Name is required!',
            'id.exists' => 'Id does not exists!',
            'new_name.required' => 'New name is required!',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->errors()->first());
        }

        $participant = Participant::find($request->id);
        $participant->name = $request->new_name;
        $participant->save();

        return redirect()->back()->with('success', 'participant successfully made');
    }
}
