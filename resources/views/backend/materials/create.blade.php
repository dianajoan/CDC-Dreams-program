@extends('backend.layouts.master')
@section('title') Add Material @endsection
@section('main-content')
@include('backend.layouts.notification')

<div class="breadcrumbs">
  <div class="breadcrumbs-inner">
      <div class="row m-0">
          <div class="col-sm-4">
              <div class="page-header float-left">
                  <div class="page-title">
                      <h1>Add</h1>
                  </div>
              </div>
          </div>
          <div class="col-sm-8">
              <div class="page-header float-right">
                  <div class="page-title">
                      <ol class="breadcrumb text-right">
                          <li><a href="{{ route('admin')}}">Dashboard</a></li>
                          <li><a href="{{ route('materials.index') }}">View</a></li>
                          <li class="active">Add</li>
                      </ol>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="content">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
              <strong>Add</strong>
          </div>
          <div class="card-body card-block">
            <form method="post" action="{{route('materials.store')}}" enctype="multipart/form-data">
              {{csrf_field()}}

              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif

              <div class="form-group">
                <label for="inputTitle" class="col-form-label">Material Name</label>
                <input id="inputTitle" type="text" name="material_name" placeholder=""  value="{{old('material_name')}}" class="form-control" required>
                @error('material_name')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="inputTitle" class="col-form-label">Target Audience</label>
                <input id="inputTitle" type="text" name="target_audience" placeholder=""  value="{{old('target_audience')}}" class="form-control" required>
                @error('target_audience')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="inputTitle" class="col-form-label">Target Age Group</label>
                <select name="target_age_group" class="form-control">
                  <option value="10-14">10-14</option>
                  <option value="15-19">15-19</option>
              </select>
                @error('target_age_group')
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

              <div class="form-group">
                <label for="status" class="col-form-label">Status</label>
                <select name="status" class="form-control">
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

@endsection
