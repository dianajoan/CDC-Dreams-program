@extends('backend.layouts.master')
@section('title') Skills @endsection
@section('main-content')
@include('backend.layouts.notification')

<div class="breadcrumbs">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
              <h1>Skills</h1>
          </div>
      </div>
  </div>
  <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                <li><a href="{{ route('admin')}}">Dashboard</a></li>
                <li><a href="{{ route('skills.create')}}">Add Skill</a></li>
                <li class="active">View</li>
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
                      <strong class="card-title">View</strong>
                  </div>
                  <div class="card-body">
                    @if(count($skills)>0)
                      <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                <th>ID</th>
                                <th>Skill Name</th>
                                <th>Photo</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($skills as $data)  
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->skill_name}}</td>
                                <td>
                                    @if($data->photo)
                                        <img src="{{ Storage::url($data->photo) }}" class="img-fluid zoom" style="max-width:80px" alt="{{ Storage::url($data->photo) }}">
                                    @else
                                        <img src="{{asset('backend/img/thumbnail-default.jpg')}}" class="img-fluid zoom" style="max-width:100%" alt="avatar.png">
                                    @endif
                                </td>
                                <td>
                                    @if($data->status=='active')
                                        <span class="badge badge-success">{{$data->status}}</span>
                                    @else
                                        <span class="badge badge-warning">{{$data->status}}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('skills.edit',$data->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fa fa-edit"></i></a>
                                <form method="POST" action="{{route('skills.destroy',[$data->id])}}">
                                  @csrf 
                                  @method('delete')
                                      <button class="btn btn-danger btn-sm dltBtn" data-id={{$data->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                      @else
                      <h6 class="text-center">No skill found!!! Please add skill</h6>
                    @endif
                  </div>
              </div>
          </div>


      </div>
  </div><!-- .animated -->
</div><!-- .content -->

@endsection

