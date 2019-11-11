<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Assignment;

class CaptainController extends Controller
{
    //
    public function show($captain_slug)
    {
        $captain = \App\Captain::where('slug', $captain_slug)->first();

        if (!$captain) {
            abort(404, 'Captain not found');
        }

        $view = view('captain/show');
        $view->captain = $captain;
        return $view;
    }

    public function index()
    {   
        $captains = \App\Captain::orderBy('name', 'asc')->get();
        $view = view('captain/index', compact('captains'));
        return $view;
    }

    public function update(Request $request)
    {   
        $subject = $request->input('subject');
        $description = $request->input('description');

        $newAssignment = new Assignment;

        $newAssignment->subject = $subject;

        $newAssignment->description = $description;

        $newAssignment->save();
    }
}
