<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);

        return view('admin.Admin', compact('users'));
    }

    public function search(Request $request)
    {

        $search = $request->input('search');

        $users = User::when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('nik', 'like', '%' . $search . '%')
                ->orWhere('jabatan', 'like', '%' . $search . '%')
                ->orWhere('unit_kerja', 'like', '%' . $search . '%');
        })
            ->paginate(10);

        // Pass the users to the view
        return view('admin.Admin', compact('users'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data input
        $validated = $request->validate([
            'name' => 'nullable|string|max:100',
            'nik' => 'nullable|string|max:32',
            'jabatan' => 'nullable|string|max:100',
            'unit_kerja' => 'nullable|string|max:60',
        ]);

        // Mencari klinik berdasarkan ID yang diberikan
        $users = User::findOrFail($id);

        // Update data klinik
        $users->update([
            'name' => $validated['name'],
            'nik' => $validated['nik'],
            'jabatan' => $validated['jabatan'],
            'unit_kerja' => $validated['unit_kerja'],
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Users updated successfully');
    }

    public function delete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->back()->with('success', 'Users deleted successfully');
    }

    public function store(Request $request)
    {
        // Validasi input data
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'nik' => 'required|string|max:32|unique:users,nik',
            'jabatan' => 'required|string|max:100',
            'unit_kerja' => 'required|string|max:60',
        ]);

        // Membuat user baru
        $user = User::create([
            'name' => $validated['name'],
            'nik' => $validated['nik'],
            'jabatan' => $validated['jabatan'],
            'role' => 'user', // Default role
            'upload_status' => 'n', // Default upload status
            'password' => bcrypt('Telkomedika@2024#!'), // Default password
            'unit_kerja' => $validated['unit_kerja'],
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin')->with('success', 'User added successfully');
    }
}
