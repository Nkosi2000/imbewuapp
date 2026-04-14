<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Enums\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $publicRoles = UserRole::publicRoles(); // returns enum cases
        return view('auth.register', compact('publicRoles'));
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'mobile_number' => 'required|string|unique:users,mobile_number',
            'role' => ['required', Rule::in(UserRole::publicValues())], // excludes admin
            'password' => 'required|min:8|confirmed',
            'consent' => 'accepted', // GDPR checkbox
        ]);

        $user = User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'mobile_number' => $validated['mobile_number'],
            'role' => $validated['role'],
            'password' => Hash::make($validated['password']),
            'consent_given_at' => now(),
            'consent_version' => '1.0',
            'is_active' => true,
        ]);

        auth()->login($user);

        return redirect()->route('dashboard');
    }
}