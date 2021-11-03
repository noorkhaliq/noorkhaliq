@extends('layouts.master')

@section('mainContent')
    <div class="content-wrapper col-md-9 mt-3" style="margin-left: 18rem;margin-bottom: 3rem;">
        <div class="card card-primary" style="background: #858f912e" >
            <div class="card-header " style="background: #17a2b8">
                <h3 class="card-title">Create User</h3>
            </div>
            <form method="post" action="{{ route('admin.save')  }}"  enctype="multipart/form-data" class="p-3">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1 " >Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1 " >E-mail</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1 " >Password</label>
                    <input type="password" name="password" class="form-control" required="required">
                </div>

                <br> <br>
                <button type="submit" class="btn text-light" style="background: #17a2b8">Save</button>
            </form>
        </div>
    </div>
@endsection
{{--     <form method="post" action="{{ route('news.save')  }}"  enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                     <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required="required">
                    </div>

                         <div class="form-group">
                                <label for="exampleSelectBorder">Select Category</label>
                                <select name="category_id" class="custom-select form-control-border" id="exampleSelectBorder">
                                     <option value="" selected>Select a category</option>
                                        @foreach($categories as $id => $title)
                                            <option value="{{ $id }}">{{ $title }}</option>
                                        @endforeach
                                </select>
                              </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description" id="summernote" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>


--}}

{{--<div class="form-group">
                            <label  for="exampleInputFile">Choose file</label>
                            <input type="file" name="image" />

                </div>--}}
