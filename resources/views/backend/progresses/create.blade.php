@extends('backend.layouts.master')
@section('title') Add Progress @endsection
@section('main-content')
@include('backend.layouts.notification')

<div class="breadcrumbs">
  <div class="breadcrumbs-inner">
      <div class="row m-0">
          <div class="col-sm-4">
              <div class="page-header float-left">
                  <div class="page-title">
                      <h1>Add Progress</h1>
                  </div>
              </div>
          </div>
          <div class="col-sm-8">
              <div class="page-header float-right">
                  <div class="page-title">
                      <ol class="breadcrumb text-right">
                          <li><a href="{{ route('admin') }}">Dashboard</a></li>
                          <li><a href="{{ route('progress.index') }}">Progress</a></li>
                          <li class="active">Add Progress</li>
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
                <strong>Add Progress</strong>
            </div>
            <div class="card-body card-block">
              <form method="POST" action="{{ route('progress.store') }}" enctype="multipart/form-data">
                @csrf


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
                    <label for="girl_id">Girl<span class="text-danger">*</span></label>
                    <select name="girl_id" id="girl_id" class="form-control select2" required>
                        <option value="">Select Girl</option>
                        @foreach($girls as $girl)
                        <option value="{{ $girl->id }}" {{ old('girl_id') == $girl->id ? 'selected' : '' }}>
                            {{ $girl->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('girl_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="event_id">Event<span class="text-danger">*</span></label>
                    <select name="event_id" id="event_id" class="form-control select2" required>
                        <option value="">Select Event</option>
                        @foreach($events as $event)
                        <option value="{{ $event->id }}" {{ old('event_id') == $event->id ? 'selected' : '' }}>
                            {{ $event->event_type }}
                        </option>
                        @endforeach
                    </select>
                    @error('event_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="lessons_attended">Lessons Attended<span class="text-danger">*</span></label>
                    <textarea id="lessons_attended" name="lessons_attended" class="form-control" required>{{ old('lessons_attended') }}</textarea>
                    @error('lessons_attended')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="skills_attained">Skills Attained<span class="text-danger">*</span></label>
                    <textarea id="skills_attained" name="skills_attained" class="form-control" required>{{ old('skills_attained') }}</textarea>
                    @error('skills_attained')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="finish_without_hiv">Can the girl finish the program with contracting HIV<span class="text-danger">*</span></label>
                    <textarea id="finish_without_hiv" name="finish_without_hiv" class="form-control ckeditor" required>{{ old('finish_without_hiv') }}</textarea>
                    @error('finish_without_hiv')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="standalone_in_community">Can the girl be stand alone in the community while utilizing the skills<span class="text-danger">*</span></label>
                    <textarea id="standalone_in_community" name="standalone_in_community" class="form-control ckeditor" required>{{ old('standalone_in_community') }}</textarea>
                    @error('standalone_in_community')
                        <span class="text-danger">{{ $message }}</span>
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
                    <label for="status">Status<span class="text-danger">*</span></label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
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
