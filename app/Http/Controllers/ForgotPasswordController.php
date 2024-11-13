<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordController extends Controller
{
    public function resetPassword(Request $request)
{
    $validator = Validator::make($request->all(), [
        'nik' => 'required|exists:users,nik',
        'new_password' => 'required|min:6',
        'confirm_password' => 'required|same:new_password',
    ], [
        'nik.exists' => 'NIK tidak ditemukan',
        'confirm_password.same' => 'Konfirmasi password tidak sesuai',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $user = User::where('nik', $request->nik)->first();
    $user->password = Hash::make($request->new_password);
    $user->save();

    return redirect()->back()->with('status', 'Password has been successfully updated.');
}

}
