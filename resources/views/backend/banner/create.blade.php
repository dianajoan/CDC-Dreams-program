@extends('backend.layouts.master')
@section('title') {{ __('sidebar.add_banner') }} @endsection
@section('main-content')
@include('backend.layouts.notification')

<div class="breadcrumbs">
  <div class="breadcrumbs-inner">
      <div class="row m-0">
          <div class="col-sm-4">
              <div class="page-header float-left">
                  <div class="page-title">
                      <h1>Add Slider</h1>
                  </div>
              </div>
          </div>
          <div class="col-sm-8">
              <div class="page-header float-right">
                  <div class="page-title">
                      <ol class="breadcrumb text-right">
                          <li><a href="{{ route('admin')}}">Dashboard</a></li>
                          <li><a href="{{ route('banner.index') }}">Sliders</a></li>
                          <li class="active">Add Slider</li>
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
                <strong>{{ __('sidebar.add_banner') }}</strong>
            </div>
            <div class="card-body card-block">
              <form method="post" action="{{route('banner.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="inputTitle" class="col-form-label">{{ __('sidebar.bann_title') }} <span class="text-danger">*</span></label>
                <input id="inputTitle" type="text" name="title" placeholder=""  value="{{old('title')}}" class="form-control" required>
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

                <div class="form-group">
                  <label for="inputTitle" class="col-form-label">Sub title <span class="text-danger">*</span></label>
                <input id="inputTitle" type="text" name="subtitle" placeholder=""  value="{{old('subtitle')}}" class="form-control" required>
                @error('subtitle')
                <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

                <div class="form-group">
                  <label for="inputTitle" class="col-form-label">Button <span class="text-danger">*</span></label>
                <input id="inputTitle" type="text" name="button" placeholder=""  value="{{old('button')}}" class="form-control" required>
                @error('button')
                <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

                <div class="form-group">
                  <label for="inputTitle" class="col-form-label">Link <span class="text-danger">*</span></label>
                <input id="inputTitle" type="text" name="link" placeholder=""  value="{{old('link')}}" class="form-control" required>
                @error('link')
                <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

                <div class="form-group">
                  <label for="inputPhoto" class="col-form-label">Upload Image (Size: 1920px x 840px) <span class="text-danger">*</span></label>
                  <div class="input-group">
                      {{-- <span class="input-group-btn">
                          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                          <i class="fa fa-picture-o"></i> Choose
                          </a>
                      </span>
                    <input id="thumbnail" class="form-control" type="text" name="photo" value="{{old('photo')}}"> --}}
                    <input class="form-control" type="file" name="photo" id="uploadImage" required>
                  </div>
                  <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                  <label for="status" class="col-form-label">{{ __('sidebar.bann_status') }} <span class="text-danger">*</span></label>
                  <select name="status" class="form-control">
                      <option value="active">Active</option>
                      <option value="inactive">Inactive</option>
                  </select>
                  @error('status')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <button type="reset" class="btn btn-warning">{{ __('sidebar.bann_reset') }}</button>
                  <button class="btn btn-success" type="submit" id="banner_submit">{{ __('sidebar.bann_submit') }}</button>
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