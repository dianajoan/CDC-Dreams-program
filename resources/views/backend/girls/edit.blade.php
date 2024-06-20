@extends('backend.layouts.master')
@section('title') Edit Girls @endsection
@section('main-content')
@include('backend.layouts.notification')

<div class="breadcrumbs">
  <div class="breadcrumbs-inner">
      <div class="row m-0">
          <div class="col-sm-4">
              <div class="page-header float-left">
                  <div class="page-title">
                      <h1>Edit</h1>
                  </div>
              </div>
          </div>
          <div class="col-sm-8">
              <div class="page-header float-right">
                  <div class="page-title">
                      <ol class="breadcrumb text-right">
                          <li><a href="{{ route('admin')}}">Dashboard</a></li>
                          <li><a href="{{ route('girls.index') }}">View</a></li>
                          <li class="active">Edit</li>
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
              <strong>Edit</strong>
          </div>
          <div class="card-body card-block">
            <form method="post" action="{{route('girls.update',$girl->id)}}" enctype="multipart/form-data">
              @csrf 
              @method('PATCH')

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
                <label for="inputTitle" class="col-form-label">Full Name</label>
                <input id="inputTitle" type="text" name="name" placeholder=""  value="{{$girl->name}}" class="form-control" required>
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="age_group" class="col-form-label">Age Group</label>
                <select name="age_group" class="form-control">
                  <option value="10-14" {{(($girl->age_group=='10-14') ? 'selected' : '')}}>10-14</option>
                  <option value="15-19" {{(($girl->age_group=='15-19') ? 'selected' : '')}}>15-19</option>
                </select>
                @error('age_group')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="hiv_status" class="col-form-label">HIV Status</label>
                <select name="hiv_status" class="form-control">
                  <option value="positive" {{(($girl->hiv_status=='10-14') ? 'selected' : '')}}>Positive</option>
                  <option value="negative" {{(($girl->hiv_status=='15-19') ? 'selected' : '')}}>Negative</option>
                </select>
                @error('hiv_status')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="inputTitle" class="col-form-label">Address</label>
                <input id="inputTitle" type="text" name="address" placeholder=""  value="{{$girl->address}}" class="form-control" required>
                @error('address')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>


               <div class="form-group">
                <label for="inputTitle" class="col-form-label">Date of Birth</label>
                <input id="inputTitle" type="date" name="date_of_birth" placeholder=""  value="{{$girl->date_of_birth}}" class="form-control" required>
                @error('date_of_birth')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="inputTitle" class="col-form-label">Village</label>
                <input id="inputTitle" type="text" name="village" placeholder=""  value="{{$girl->village}}" class="form-control" required>
                @error('village')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="schooling_status" class="col-form-label">Schooling Status</label>
                <select name="schooling_status" class="form-control">
                  <option value="in_school" {{(($girl->schooling_status=='in_school') ? 'selected' : '')}}>In School</option>
                  <option value="out_of_school" {{(($girl->schooling_status=='out_of_school') ? 'selected' : '')}}>Out of School</option>
                </select>
                @error('schooling_status')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="inputPhoto" class="col-form-label">Upload Photo<span class="text-danger">*</span></label>
                <div class="input-group">
                  <input class="form-control" type="file" name="photo" id="uploadImage" value="{{$girl->photo}}">
                </div>
                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                  @error('photo')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <img src="{{ Storage::url($girl->photo) }}" height="75" width="75" alt="" />
                </div>

              <div class="form-group">
                <label for="status" class="col-form-label">Status</label>
                <select name="status" class="form-control">
                  <option value="active" {{(($girl->status=='active') ? 'selected' : '')}}>Active</option>
                  <option value="inactive" {{(($girl->status=='inactive') ? 'selected' : '')}}>Inactive</option>
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

@endsection

@push('scripts')

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

@endpush
