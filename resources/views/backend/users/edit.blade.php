@extends('backend.layouts.master')
@section('title','Edit User')
@section('main-content')

@include('backend.layouts.notification')

<div class="main-content">
  <div class="section__content section__content--p30">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                  <div class="card-header">
                      <strong>Edit User</strong>
                  </div>
                  <div class="card-body card-block">
                    <form method="post" action="{{route('users.update',$user->id)}}" enctype="multipart/form-data">
                      @csrf 
                      @method('PATCH')
                      <div class="form-group">
                        <label for="inputTitle" class="col-form-label">Name</label>
                      <input id="inputTitle" type="text" name="name" placeholder=""  value="{{$user->name}}" class="form-control" required>
                      @error('name')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                      </div>

                      <div class="form-group">
                          <label for="inputEmail" class="col-form-label">Email</label>
                        <input id="inputEmail" type="email" name="email" placeholder=""  value="{{$user->email}}" class="form-control" required>
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="inputPhoto" class="col-form-label">Upload Photo<span class="text-danger">*</span></label>
                        <div class="input-group">
                          <input class="form-control" type="file" name="photo" id="uploadImage" value="{{$user->photo}}">
                        </div>
                        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                          @error('photo')
                          <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
        
                        <div class="form-group">
                          <img src="{{ Storage::url($user->photo) }}" height="75" width="75" alt="" />
                        </div>
  
                        @php 
                        $roles=DB::table('users')->select('role')->where('id',$user->id)->get();
                        // dd($roles);
                        @endphp
                        <div class="form-group">
                            <label for="role" class="col-form-label">Role</label>
                            <select name="role" class="form-control" required>
                                <option value="">-----Select Role-----</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->role}}" {{(($role->role=='admin') ? 'selected' : '')}}>Admin</option>
                                    <option value="{{$role->role}}" {{(($role->role=='user') ? 'selected' : '')}}>User</option>
                                @endforeach
                            </select>
                          @error('role')
                          <span class="text-danger">{{$message}}</span>
                          @enderror
                          </div>

                        <div class="form-group">
                          <label for="status" class="col-form-label">Status</label>
                          <select name="status" class="form-control" required>
                              <option value="active" {{(($user->status=='active') ? 'selected' : '')}}>Active</option>
                              <option value="inactive" {{(($user->status=='inactive') ? 'selected' : '')}}>Inactive</option>
                          </select>
                        @error('status')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                      <div class="form-group mb-3">
                        <button class="btn btn-success" type="submit">Update</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>

@endsection
