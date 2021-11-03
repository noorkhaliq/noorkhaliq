@extends('layouts.master')

@section('mainContent')
    <div class="content-wrapper col-md-9 mt-3" style="margin-left: 18rem;margin-bottom: 3rem;">
        <div class="card card-primary" style="background: #858f912e" >
            <div class="card-header " style="background: #17a2b8">
                <h3 class="card-title">Create User</h3>
            </div>
            <form method="post" action="{{ route('category.save') }}"  enctype="multipart/form-data" class="p-3">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1 " >Category_title</label>
                    <input type="text" name="category_title" class="form-control" value="{{ old('category_title') }}" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1 " >Status</label>
                    <input type="text" name="status" class="form-control" value="{{ old('status') }}" required="required">
                </div>
                <br> <br>
                <button type="submit" class="btn text-light" style="background: #17a2b8">Save</button>
            </form>
        </div>
    </div>
@endsection
