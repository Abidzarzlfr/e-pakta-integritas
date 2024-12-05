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

    public function delete($id) {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->back()->with('success', 'Users deleted successfully');
    }
}
