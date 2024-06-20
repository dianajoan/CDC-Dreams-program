<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;

class AdminController extends Controller
{
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

    public function index()
    {
        $events = Event::all();
        return view('backend.index', compact('events'));
    }

    public function profile()
    {
        $profile = Auth::user();
        return view('backend.users.profile')->with('profile', $profile);
    }

    public function profileUpdate(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'string|required|max:100',
            'email' => 'email|required|unique:users,email,' . $user->id,
            'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->only('name', 'email');
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $data['photo'] = $path;
        }

        $status = $user->fill($data)->save();

        if ($status) {
            $request->session()->flash('success', 'Successfully updated your profile');
        } else {
            $request->session()->flash('error', 'Please try again!');
        }

        return redirect()->back();
    }

}
