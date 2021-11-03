@extends('layouts.master')

@section('mainContent')
    <div class="content-wrapper col-md-9 mt-3" >
        <div class="card card-primary">
            <div class="card-header " style="background: #17a2b8">
                <h3 class="card-title">Edit Pages</h3>
            </div>
            {{--            @include('layouts.errors')--}}
            <form method="post" action="{{ route('pages.update' , $pages->id)  }}" >
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="exampleInputEmail1 " >Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $pages->title}}" required="required">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Content</label>
                    <textarea name="content" id="summernote" class="form-control">{{ $pages->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1 " >Type</label>
                    <input type="text" name="type" class="form-control" value="{{ $pages->type}}" required="required">
                </div>

                <br> <br>
                <button type="submit" class="btn text-light" style="background: #17a2b8">Save</button>
            </form>
        </div>
    </div>
@endsection
