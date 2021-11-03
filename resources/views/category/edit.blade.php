@extends('layouts.master')

@section('mainContent')
    <div class="content-wrapper col-md-9 mt-3" >
        <div class="card card-primary">
            <div class="card-header " style="background: #17a2b8">
                <h3 class="card-title">Edit Category</h3>
            </div>
            @include('layouts.errors')
            <form method="post" action="{{ route('category.update' , $category->id)  }}" >
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="exampleInputEmail1 " >category_title</label>
                    <input type="text" name="category_title" class="form-control" value="{{ $category->category_title}}" required="required">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1 " >Status</label>
                    <input type="text" name="status" class="form-control" value="{{ $category->status}}" required="required">
                </div>

                <br> <br>
                <button type="submit" class="btn text-light" style="background: #17a2b8">Save</button>
            </form>
        </div>
    </div>
@endsection
