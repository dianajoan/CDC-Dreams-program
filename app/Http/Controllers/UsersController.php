<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::orderBy('id','ASC')->paginate(57);
        return view('backend.users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required|max:100',
            'email' => 'string|required|unique:users',
            'password' => 'string|required',
            'role'=>'required|in:admin,content-creator',
            'status' => 'required|in:active,inactive',
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();
        $data['password']=Hash::make($request->password);
        $data['name'] = $request->get('name');
        $data['email'] = $request->get('email');
        $data['role'] = $request->get('role');
        $data['status'] = $request->get('status');
        $path = $request->file('photo')->store('public/images');
        $data['photo'] = $path; 

        $status=User::create($data);
        if($status){
            request()->session()->flash('success','User successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding partner');
        }
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('backend.users.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $this->validate($request, [
            'name' => 'string|required|max:100',
            'email' => 'nullable|email|unique:users,email,' . $id,
            'role' => 'required|in:admin,content-creator',
            'status' => 'required|in:active,inactive',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();
        $data['name'] = $request->get('name');
        $data['email'] = $request->get('email');
        $data['role'] = $request->get('role');
        $data['status'] = $request->get('status');

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $data['photo'] = $path;
        } else {
            unset($data['photo']);
        }

        $status = $user->fill($data)->save();

        if ($status) {
            request()->session()->flash('success', 'User successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred while updating user');
        }

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=User::findorFail($id);
        $status=$delete->delete();
        if($status){
            request()->session()->flash('success','User Successfully deleted');
        }
        else{
            request()->session()->flash('error','There is an error while deleting users');
        }
        return redirect()->route('users.index');
    }
}
