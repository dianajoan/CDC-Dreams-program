@extends('backend.layouts.master')
@section('title') Add Event @endsection
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
                          <li><a href="{{ route('events.index') }}">View</a></li>
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
            <form method="post" action="{{route('events.store')}}" enctype="multipart/form-data">
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
                <label for="inputTitle" class="col-form-label">Event Type</label>
                <input id="inputTitle" type="text" name="event_type" placeholder=""  value="{{old('event_type')}}" class="form-control" required>
                @error('event_type')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="learning_outcomes">Learning Outcomes<span class="text-danger">*</span></label>
                <textarea id="learning_outcomes" name="learning_outcomes" class="form-control ckeditor" required>{{ old('learning_outcomes') }}</textarea>
                @error('learning_outcomes')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

              <div class="form-group">
                <label for="inputTitle" class="col-form-label">Start Date</label>
                <input id="inputTitle" type="date" name="start_date" placeholder=""  value="{{old('start_date')}}" class="form-control" required>
                @error('start_date')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="inputTitle" class="col-form-label">End Date</label>
                <input id="inputTitle" type="date" name="end_date" placeholder=""  value="{{old('end_date')}}" class="form-control" required>
                @error('end_date')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="inputTitle" class="col-form-label">Location</label>
                <input id="inputTitle" type="text" name="location" placeholder=""  value="{{old('location')}}" class="form-control" required>
                @error('location')
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

@push('scripts')

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

@endpush
