<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $data = User::firstWhere('id', Auth()->user()->id);
        $active = 'profile';
        return view('home.profile.index', compact('data', 'active'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'fullname' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'role' => 'required',
            'images' => 'required|max:5020|mimes:jpg,png'
        ]);
    }
    public function password(Request $request, $id)
    {
        $user = User::findOrFail($id);
        try {
            $request->validate([
                'current_password' => 'required',
                'password' => 'required|confirmed|min:8',
            ]);
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect()->back()->with('success', 'Password has been updated successfully!');
        } catch (QueryException $th) {
            return redirect()->back()->with('error', 'Server tidak merespon!');
        }
    }
}
