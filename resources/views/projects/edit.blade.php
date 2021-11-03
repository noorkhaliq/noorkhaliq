@extends('layouts.master')

@section('mainContent')
    <div class="content-wrapper col-md-9 mt-3" >
        <div class="card card-primary">
            <div class="card-header " style="background: #17a2b8">
                <h3 class="card-title">Edit Projects</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
{{--            @include('layouts.errors')--}}
            <form method="post" action="{{ route('projects.update' , $project->id)  }}" enctype="multipart/form-data" class="p-3">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="exampleSelectBorder" >Select Category</label>
                    <select name="category_id" class="bg-light custom-select form-control-border" id="exampleSelectBorder" required>
                        <option value="" selected>Select a category</option>
                        @foreach($categories as $id => $category_title )
                            <option value="{{ $id }}" @if($id == $project->category_id) selected  @endif>{{ $category_title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1 " >Title</label>
                    <input type="text" name="title" class="form-control" value="{{$project->title}}" required="required">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1 " >Location</label>
                    <input type="text" name="location" class="form-control" value="{{$project->location}}" required="required">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1 " >Area</label>
                    <input type="text" name="area" class="form-control" value="{{$project->area}}" required="required">
                </div>

                <br>
                <br>

                <label class="form-label" for="customFile">Import an Image</label>
                <input type="file" class="form-control" name="image" id="customFile" />


{{--                <div class="form-check">--}}
{{--                    <input type="checkbox" class=" form-check-input" name="status" id="exampleCheck1"  @if($project->status) checked @endif>--}}
{{--                    <label class="form-check-label " for="exampleCheck1">Check out Status</label>--}}
{{--                </div>--}}
                <button type="submit" class="btn text-light" style="background: #17a2b8">Save</button>
            </form>
        </div>
    </div>
@endsection
