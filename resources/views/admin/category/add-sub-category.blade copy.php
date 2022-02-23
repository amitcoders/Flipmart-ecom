@extends('layouts.dashboard.index')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-10">
          <!-- Progress bars basic -->
          <div class="card mb-4" style="margin-left: 194px">

            <div class="card-body">
               @if (Session('success'))
                <div class="alert bg-primary fade in">
                    <a href="" class="close" data-dismiss="alert">X</a>
                    {{ Session('success') }}
                </div>
               @endif
                <form class="form-horizontal" method="POST" action="{{ route('save-subcategory')}}">
                    @csrf
                    <a class="btn btn-primary" style="margin-left: 550px;" href="{{ route('manage-subcategory')}}">All&nbsp;Sub&nbsp;Category</a>
                    <span style="color: red;">Add sub category</span>
                    <div class="form-group">
                        <label for="category" class="col-sm-3 control-label">Category</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="category" name="cat_id" >
                                <option value="">Select Category</option>
                                @foreach ($categories as $row )
                                    <option>{{ $row->category}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                          <input type="text" class="form-control" name="sub_cat" id="sub_cat" placeholder="subcategory Name" required>
                        </div>
                    </div>
                      <div class="form-group row">
                        <div class="col-lg-12">
                          <button type="submit" class="btn btn-primary">Save Sub Category</button>
                        </div>
                      </div>
                </form>

            </div>

          </div>
        </div>








</div>



@endsection
