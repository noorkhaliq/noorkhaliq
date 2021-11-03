@extends('layouts.master')

@section('mainContent')
    <div class="content-wrapper col-md-9 mt-3" >
        <div class="card card-primary">
            <div class="card-header " style="background: #17a2b8">
                <h3 class="card-title">Edit Services</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
                        @include('layouts.errors')
            <form method="post" action="{{ route('services.update' , $service->id)  }}" class="p-3">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="exampleInputEmail1 " >Title</label>
                    <input type="text" name="title" class="form-control" value="{{$service->title}}" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Text</label>
                    <textarea name="text" id="summernote" class="form-control">{{ $service->text }}</textarea>
                </div>
                {{--                <div class="form-check">--}}
                {{--                    <input type="checkbox" class=" form-check-input" name="status" id="exampleCheck1"  @if($project->status) checked @endif>--}}
                {{--                    <label class="form-check-label " for="exampleCheck1">Check out Status</label>--}}
                {{--                </div>--}}

                <button type="submit" class="btn text-light" style="background: #17a2b8">Save</button>
            </form>
        </div>
    </div>
@endsection
