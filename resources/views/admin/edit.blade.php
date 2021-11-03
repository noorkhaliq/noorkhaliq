@extends('layouts.master')

@section('mainContent')
    <div class="content-wrapper col-md-9 mt-3" >
        <div class="card card-primary">
            <div class="card-header " style="background: #17a2b8">
                <h3 class="card-title">Edit User</h3>
            </div>
{{--            @include('layouts.errors')--}}
            <form method="post" action="{{ route('admin.update' , $admin->id)  }}" >
                @csrf
                @method('put')

                <div class="form-group">
                    <label for="exampleInputEmail1 " >Name</label>
                    <input type="text" name="name" class="form-control" value="{{$admin->name}}" required="required">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1 " >Email</label>
                    <input type="text" name="email" class="form-control" value="{{$admin->email}}" required="required">
                </div>

                <br> <br>
                <button type="submit" class="btn text-light" style="background: #17a2b8">Save</button>
            </form>
        </div>
    </div>
@endsection
