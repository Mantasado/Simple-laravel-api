<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Data validation
        $validator = $request->validate([
            'first_name' => 'required|min:3|max:20|alpha',
            'last_name' => 'required|min:3|max:20|alpha'
        ]);

        $full_name = $request->input('first_name') . ' ' . $request->input('last_name');

        return response()->json([
            'Users' => array('full_name' => $full_name) 
        ], 201);
    }

}
