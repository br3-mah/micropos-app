<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AutoAuthController extends Controller
{
    public function index(Request $request)
    {
        try {
            // Extract user data from the request
            $userData = $request->input('user');
            // dd($userData);
            if ($userData) {
                // Check if a user with the provided email exists
                $existingUser = User::where('email', $userData['email'])->first();
                
                if ($existingUser == null) {
                    // Register a new user using the provided data
                    User::create([
                        'global_id' => $userData['id'],
                        'fname' => $userData['fname'],
                        'lname' => $userData['lname'],
                        'email' => $userData['email'],
                        'dob' => $userData['dob'],
                        'sex' => $userData['sex'],
                        'is_type' => $userData['is_type'],
                        'status' => $userData['status'],
                        'customer_group' => $userData['customer_group'],
                        'password' => Hash::make($userData['global_secret_word']), 
                    ]);
                    return response()->json(['message' => 'User registered','user' => $userData], 200);
                }
                return response()->json(['message' => 'Already registered','user' => $userData], 200);
            } else {
                return response()->json(['error' => 'User data not provided'], 400);
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function registerSeller($user, $data){
        // $user->is_type = $data['type'];
        // $user->seller_name = $data['seller_name'];
        // $user->seller_address = $data['seller_address'];
        // $user->seller_city = $data['seller_city'];
        // $user->seller_phone = $data['seller_phone'];
        // $user->save();
    }
}
