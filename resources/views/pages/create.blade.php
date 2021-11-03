@extends('layouts.master')

@section('mainContent')
    <div class="content-wrapper col-md-9 mt-3" style="margin-left: 18rem;margin-bottom: 3rem;">
        <div class="card card-primary" style="background: #858f912e" >
            <div class="card-header " style="background: #17a2b8">
                <h3 class="card-title">Create Pages</h3>
            </div>
            <form method="post" action="{{ route('pages.save') }}"  enctype="multipart/form-data" class="p-3">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1 " >Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Content</label>
                    <textarea name="content" id="summernote" class="form-control">{{ old('content') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1 " >Type</label>
                    <input type="text" name="type" class="form-control" value="{{ old('type') }}" required="required">
                </div>
                <br> <br>
                <button type="submit" class="btn text-light" style="background: #17a2b8">Save</button>
            </form>
        </div>
    </div>
@endsection
