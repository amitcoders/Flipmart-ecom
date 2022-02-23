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
                <form class="form-horizontal" method="POST" action="{{ route('save-category')}}">
                    @csrf
                    <a class="btn btn-primary" style="margin-left: 550px;" href="{{ route('manage-category')}}">All Category</a>
                    <div class="form-group row">
                        <label for="brand_name" class="col-lg-12 col-form-label">Category Name</label>


                        <div class="col-lg-12">
                          <input type="text" class="form-control" name="category" id="category" placeholder="Category Name" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-lg-12">
                          <button type="submit" class="btn btn-primary">Save Brand</button>
                        </div>
                      </div>
                </form>

            </div>

          </div>
        </div>








</div>



@endsection
