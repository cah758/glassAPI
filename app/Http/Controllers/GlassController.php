<?php

namespace App\Http\Controllers;
use App\Models\Glass;

use App\Models\User;
use Illuminate\Http\Request;

class GlassController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'refractive_index' => 'required',
            'sodium' => 'required',
            'magnesium' => 'required',
            'aluminum' => 'required',
            'barium' => 'required',
            'attribute_class' => 'required',
            'type_consult' => 'required',
            'user_id' => 'required',
        ]);

        Glass::create($request->all());

        return response()->json([
            'message' => 'Successfully created glass!'
        ], 201);
    }

    public function destroy($id)  {
        Glass::find($id)->delete();
        return response()->json([
            'message' => 'Successfully deleted glass!'
        ], 201);
    }

    public function glass(Request $request)
    {
        return response()->json($request->user()->glass);
    }
}
