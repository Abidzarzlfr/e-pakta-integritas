<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChangePasswordController extends Controller
{
    public function changePassword(Request $request)
    {
        // Validasi dan logika perubahan password
        $validator = Validator::make($request->all(), [
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ], [
            'confirm_password.same' => 'Konfirmasi password tidak sesuai.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    

        // Perubahan password user
        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Set session success message
        return redirect()->back()->with('success_change_password', 'Password has been successfully updated.');
    }
}
