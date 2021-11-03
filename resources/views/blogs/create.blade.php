@extends('layouts.master')

@section('mainContent')
    <div class="content-wrapper col-md-9 mt-3" style="margin-left: 18rem;margin-bottom: 3rem;">
        <div class="card card-primary" style="background: #858f912e" >
            <div class="card-header " style="background: #17a2b8">
                <h3 class="card-title">Create Projects</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @include('layouts.errors')
            <form method="post" action="{{ route('blogs.save')  }}"  enctype="multipart/form-data" class="p-3">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1 " >Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea name="description" id="summernote" class="form-control">{{ old('description') }}</textarea>
                </div>
                <label class="form-label" for="customFile">Import an Image</label>
                <input type="file" class="form-control" name="image" id="customFile" />

                <button type="submit" class="btn text-light" style="background: #17a2b8">Save</button>
            </form>
        </div>
    </div>

@endsection

{{--                <div class="form-check">--}}
{{--                    <input type="checkbox" class=" form-check-input" name="status" id="exampleCheck1">--}}
{{--                    <label class="form-check-label " for="exampleCheck1">Check out Status</label>--}}
{{--                </div>--}}
