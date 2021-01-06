<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        if ($request->state =="") {
          $request->state = false;
        }
        Project::create(['name'=> $request->name ,'state'=> $request->state,'user_id' => $request->user()->id]);

        return response()->json([
            'message' => 'Successfully created glass!'
        ], 201);
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'state' => 'required',
        ]);

        $project = Project::find($id);
        $project->update($request);

        return response()->json([
            'message' => 'Successfully update project!'
        ], 201);
    }
    public function destroy($id)  {
        Project::find($id)->delete();
        return response()->json([
            'message' => 'Successfully deleted project!'
        ], 201);
    }

    public function projects(Request $request)
    {
        return response()->json($request->user()->projects);
    }
    public function project($id)
    {
        //TODO
    }
}
