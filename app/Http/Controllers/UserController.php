<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Role;
use Validator;

class UserController extends Controller
{
      
    public function create()
    {
        $roles = Role::all();
        return view('user.create', compact('roles'));
        //return view('user.create');
    }

    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|regex:/[0-9]{10}/',
            'role_id' => 'required',
            'description' => 'required|string',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        
        if ($validator->fails()) {
           return response()->json(['errors' => $validator->errors()], 422);
        
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->description = $request->description;
        $user->role_id = $request->role_id;

        if ($request->hasFile('profile_image')) {
            $filename = time() . '.' . $request->profile_image->extension();

            $request->profile_image->move(public_path('images'), $filename);
            // Save the file path in the database
            $user->profile_image = 'images/' . $filename;
        }

        $user->save();

        return response()->json(['message' => 'User created successfully'], 201);

    }


     // Method to retrieve all users
     public function index()
     {
         //$users = User::all();
         $users = User::with('role')->get();
         return response()->json($users);
        // $users = User::with('role')->get();
        //return response()->json(['users' => $users], 200);
     }
     

     
 
     // Method to retrieve a specific user by ID
     public function show($id)
     {
         $user = User::findOrFail($id);
         return response()->json($user);
     }
    
}
