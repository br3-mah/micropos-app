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
            
            if ($userData) {
                // Check if a user with the provided email exists
                $existingUser = User::where('email', $userData['email'])->first();
                
                if ($existingUser == null) {
                    
                    // Register a new user using the provided data
                    $user = User::create([
                        'name' => $userData['name'],
                        'email' => $userData['email'],
                        'global_id' => $userData['id'],
                        'customer_group' => $userData['customer_group'],
                        'status' => $userData['status'],
                        // 'password' => bcrypt('your_password'), // Set a default password or generate one
                        'password' => Hash::make($userData['global_secret_word']), // Set a default password or generate one
                        // You may also set other fields based on the user data
                        'sex' => $userData['sex'],
                        'occupation' => $userData['occupation'],
                        'is_farmer' => $userData['is_farmer'] == 'on' ? 1 : 0
                    ]);
                    if($userData['type'] == 'seller'){
                        $this->registerSeller($user, $userData);
                    }
                    return response()->json(['message' => 'User registered'], 200);
                }
                return response()->json(['message' => 'Already registered'], 200);
            } else {
                return response()->json(['error' => 'User data not provided'], 400);
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    // --Cloned from auth 
    public function registerSeller($user, $data){
        $user->is_type = $data['type'];
        $user->seller_name = $data['seller_name'];
        $user->seller_address = $data['seller_address'];
        $user->seller_city = $data['seller_city'];
        $user->seller_phone = $data['seller_phone'];
        $user->save();
    }
}
