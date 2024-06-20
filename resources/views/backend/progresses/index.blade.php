@extends('backend.layouts.master')
@section('title') Progresses @endsection
@section('main-content')
@include('backend.layouts.notification')

<div class="breadcrumbs">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
              <h1>Progresses</h1>
          </div>
      </div>
  </div>
  <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li><a href="{{ route('admin') }}">Dashboard</a></li>
                  <li><a href="{{ route('progresses.create') }}">Add Progress</a></li>
                  <li class="active">Progresses</li>
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
                      <strong class="card-title">Progresses</strong>
                  </div>
                  <div class="card-body">
                      @if(count($progresses) > 0)
                          <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                              <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>Girl</th>
                                      <th>Event</th>
                                      <th>Lessons Attended</th>
                                      <th>Skills Attained</th>
                                      <th>Photo</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($progresses as $progress)
                                      <tr>
                                          <td>{{ $progress->id }}</td>
                                          <td>{{ $progress->girl->name }}</td>
                                          <td>{{ $progress->event->event_type}}</td>
                                          <td>{{ $progress->lessons_attended }}</td>
                                          <td>{{ $progress->skills_attained }}</td>
                                          <td>
                                            @if($progress->photo)
                                                <img src="{{ Storage::url($progress->photo) }}" class="img-fluid zoom" style="max-width:80px" alt="{{ Storage::url($progress->photo) }}">
                                            @else
                                                <img src="{{asset('backend/img/thumbnail-default.jpg')}}" class="img-fluid zoom" style="max-width:100%" alt="avatar.png">
                                            @endif
                                        </td>
                                          <td>
                                              @if($progress->status == 'active')
                                                  <span class="badge badge-success">{{ $progress->status }}</span>
                                              @else
                                                  <span class="badge badge-warning">{{ $progress->status }}</span>
                                              @endif
                                          </td>
                                          <td>
                                              <a href="{{ route('progresses.edit', $progress->id) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Edit" data-placement="bottom"><i class="fa fa-edit"></i></a>
                                              <form method="POST" action="{{ route('progresses.destroy', $progress->id) }}" style="display: inline;">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button class="btn btn-danger btn-sm dltBtn" style="height: 30px; width: 30px; border-radius: 50%;" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></button>
                                              </form>
                                          </td>
                                      </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      @else
                          <h6 class="text-center">No progresses found!!! Please add progress.</h6>
                      @endif
                  </div>
              </div>
          </div>
      </div>
  </div><!-- .animated -->
</div><!-- .content -->

@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endpush

@push('scripts')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
    });
</script>
@endpush
