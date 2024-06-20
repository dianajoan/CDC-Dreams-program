@extends('backend.layouts.master')
@section('title') Add User @endsection
@section('main-content')

@include('backend.layouts.notification')

<div class="main-content">
  <div class="section__content section__content--p30">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                  <div class="card-header">
                      <strong>Add</strong>
                  </div>
                  <div class="card-body card-block">
                    <form method="post" action="{{route('users.store')}}" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label for="inputTitle" class="col-form-label">{{ __('sidebar.user_name') }}</label>
                      <input id="inputTitle" type="text" name="name" placeholder=""  value="{{old('name')}}" class="form-control" required>
                      @error('name')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                      </div>

                      <div class="form-group">
                          <label for="inputEmail" class="col-form-label">{{ __('sidebar.user_email') }}</label>
                        <input id="inputEmail" type="email" name="email" placeholder=""  value="{{old('email')}}" class="form-control" required>
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                          <label for="inputPassword" class="col-form-label">{{ __('sidebar.user_password') }}</label>
                        <input id="inputPassword" type="password" name="password" placeholder=""  value="{{old('password')}}" class="form-control" required>
                        @error('password')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="inputPhoto" class="col-form-label">Upload Photo<span class="text-danger">*</span></label>
                        <div class="input-group">
                          <input class="form-control" type="file" name="photo" id="uploadImage" required>
                        </div>
                        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                          @error('photo')
                          <span class="text-danger">{{$message}}</span>
                          @enderror
                      </div>

                      @php 
                      $roles=DB::table('users')->select('role')->get();
                      @endphp
                      <div class="form-group">
                          <label for="role" class="col-form-label">{{ __('sidebar.user_role') }}</label>
                          <select name="role" class="form-control" required>
                              <option value="">-----Select Role-----</option>
                              @foreach($roles as $role)
                                  <option value="{{$role->role}}">{{$role->role}}</option>
                              @endforeach
                          </select>
                        @error('role')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                     
                        <div class="form-group">
                          <label for="status" class="col-form-label">{{ __('sidebar.user_status') }}</label>
                          <select name="status" class="form-control" required>
                              <option value="active">Active</option>
                              <option value="inactive">Inactive</option>
                          </select>
                        @error('status')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                      <div class="form-group mb-3">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button class="btn btn-success" type="submit">Submit</button>
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

