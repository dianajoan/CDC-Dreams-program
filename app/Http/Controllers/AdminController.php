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
        $data = User::select(DB::raw("COUNT(*) as count"), DB::raw("DAYNAME(created_at) as day_name"), DB::raw("DAY(created_at) as day"))
            ->where('created_at', '>', Carbon::today()->subDay(6))
            ->groupBy('day_name', 'day')
            ->orderBy('day')
            ->get();
        $array[] = ['Name', 'Number'];
        foreach ($data as $key => $value) {
            $array[++$key] = [$value->day_name, $value->count];
        }
        return view('backend.index')->with('users', json_encode($array));
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

    public function settings()
    {
        $data = Settings::first();
        return view('backend.setting')->with('data', $data);
    }

    public function settingsUpdate(Request $request)
    {
        $this->validate($request, [
            'short_des' => 'required|string',
            'description' => 'required|string',
            'logo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'address' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        $data = $request->only('short_des', 'description', 'address', 'email', 'phone');
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('public/images');
            $data['logo'] = $path;
        }

        $settings = Settings::first();
        $status = $settings->fill($data)->save();

        if ($status) {
            $request->session()->flash('success', 'Setting successfully updated');
        } else {
            $request->session()->flash('error', 'Please try again');
        }

        return redirect()->route('admin');
    }

    public function changePassword()
    {
        return view('backend.layouts.changePassword');
    }

    public function changePasswordStore(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        return redirect()->route('admin')->with('success', 'Password successfully changed');
    }
}
