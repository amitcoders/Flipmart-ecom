@extends('layouts.dashboard.index')
@section('content')
<div class="container">
    <div class="row">

        <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-primary" style="margin-left: 750px;" href="">All Brand</a>
                <a href="{{ route('add-brand')}}" class="btn btn-primary">Add Brand</a>

                  <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-bordered" id="dataTable">
                      <thead class="thead-light">
                        <tr>
                          <th>SL No</th>
                          <th>Brand Name</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      @foreach($brand as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{ $row->brand_name}}</td>
                            <td>
                                {{-- {{ $row->status == 1 ? 'Active':'Inactive'}} --}}

                                <input type="checkbox" id="brandStatus" data-id="{{ $row->id}}" data-toggle="toggle" data-on="Active" {{ $row->status == 1 ? 'checked': ''}} data-off="Inactive">
                            </td>
                            <td>
                                @if($row->status == 1)
                                <a href="{{ route('active-brand', $row->id)}}" class="btn btn-info btn-xs"><i class="fa fa-arrow-up"></i></a>
                                @else
                                <a href="{{ route('inactive-brand', $row->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-arrow-down"></i></a>
                                @endif


                                {{-- <a href="{{ route('edit-brand', $row->id)}}" class="btn btn-success btn-xs"><i class="fas fa-check">&nbsp;edit</i></a> --}}
                                <a href="{{ route('edit-brand', $row->id)}}" class="btn btn-success btn-xs"><i class="fas fa-check">&nbsp;edit</i></a>
                                <a href="{{ route('delete-brand', $row->id)}}" class="btn btn-danger btn-xs"><i class="fas fa-trash">&nbsp;Delete</i></a>
                            </td>
                        </tr>
                        @endforeach
                      </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>

    </div>

</div>
@endsection
