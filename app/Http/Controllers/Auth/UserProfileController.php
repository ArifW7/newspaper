<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Laravel\Facades\Image;

class UserProfileController extends Controller
{
    public function editProfile()
    {
        $user = Auth::user();
        return view('backend.auth.profileEdit', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255|unique:users,email,' . $request->user()->id,
            'address' => 'nullable|string|max:255',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'phone' => 'nullable|string|max:20',
        ]);

        $user = $request->user();
        $imgPath = $user->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = public_path('images/users');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $name = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::read($image)->resize(150, 120)->save($path . '/' . $name);
            $imgPath = 'images/users/' . $name;
            if ($user->image && file_exists(public_path($user->image))) {
                @unlink(public_path($user->image));
            }
        }

        $user->update([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'address' => $request->address,
            'image'   => $imgPath,
        ]);

        toastr()->success('Profile Updated Successfully!');
        return redirect()->back();
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password'      => ['required', 'string'],
            'password'              => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = $request->user();
        if (!Hash::check($validated['current_password'], $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect']);
        }

        $user->update(['password' => Hash::make($validated['password'])]);
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->back();
    }

    public function status(User $user)
    {
        if (Auth::user()->status == 2) {
            abort(403, "Unauthorized: You can't update status");
        }

        $user->update(['status' => $user->status == 0 ? 1 : 0]);
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->back();
    }

    public function deleteMedia($id, $type, $use){
        deleteMedia($id, $type, $use);
        return redirect()->back()->with('success', 'Media deleted successfully');
    }

}
