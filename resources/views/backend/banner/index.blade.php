@extends('backend.layouts.master')
@section('title') {{ __('sidebar.banner_title_name') }} @endsection
@section('main-content')
@include('backend.layouts.notification')

<div class="breadcrumbs">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
              <h1>Sliders</h1>
          </div>
      </div>
  </div>
  <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                <li><a href="{{ route('admin')}}">Dashboard</a></li>
                <li><a href="{{ route('banner.create')}}"> Add Slider</a></li>
                <li class="active">Sliders</li>
              </ol>
          </div>
      </div>
  </div>
</div>

<div class="content mt-3">
  <div class="animated fadeIn">
      <div class="row">

          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <strong class="card-title">Sliders</strong>
                  </div>
                  <div class="card-body">
                    @if(count($banners)>0)
                      <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                <th>{{ __('sidebar.bann_number') }}</th>
                                <th>{{ __('sidebar.bann_title') }}</th>
                                <th>Subtitle</th>
                                <th>Button</th>
                                <th>{{ __('sidebar.bann_photo') }}</th>
                                <th>{{ __('sidebar.bann_status') }}</th>
                                <th>{{ __('sidebar.bann_action') }}</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($banners as $banner)
                              <tr>
                                <td>{{$banner->id}}</td>
                                <td>{{$banner->title}}</td>
                                <td>{{$banner->subtitle}}</td>
                                <td>{{$banner->button}}</td>
                                <td>
                                    @if($banner->photo)
                                        <img src="{{ Storage::url($banner->photo) }}" class="img-fluid zoom" style="max-width:80px" alt="{{ Storage::url($banner->photo) }}">
                                    @else
                                        <img src="{{asset('backend/img/thumbnail-default.jpg')}}" class="img-fluid zoom" style="max-width:100%" alt="avatar.png">
                                    @endif
                                </td>
                                <td>
                                    @if($banner->status=='active')
                                        <span class="badge badge-success">{{$banner->status}}</span>
                                    @else
                                        <span class="badge badge-warning">{{$banner->status}}</span>
                                    @endif
                                </td>
                                <td>
                                  <a href="{{route('banner.edit',$banner->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fa fa-edit"></i></a>
                                  <form method="POST" action="{{route('banner.destroy',[$banner->id])}}">
                                    @csrf 
                                    @method('delete')
                                        <button class="btn btn-danger btn-sm dltBtn" data-id={{$banner->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></button>
                                      </form>
                                </td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                      @else
                      <h6 class="text-center">No banners found!!! Please add banner</h6>
                    @endif
                  </div>
              </div>
          </div>


      </div>
  </div><!-- .animated -->
</div><!-- .content -->

@endsection

