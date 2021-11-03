@extends('layouts.master')

@section('mainContent')
    <div class="content-wrapper col-md-9 mt-3" style="margin-left: 18rem;margin-bottom: 3rem;">
        <div class="card card-primary" style="background: #858f912e" >
            <div class="card-header " style="background: #17a2b8">
                <h3 class="card-title">Create Settings</h3>
            </div>
            <form method="post" action="{{ route('settings.save') }}"  enctype="multipart/form-data" class="p-3">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1 " >Key</label>
                    <input type="text" name="key" class="form-control" value="{{ old('key') }}" required="required">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Valye</label>
                    <textarea name="value" id="summernote" class="form-control">{{ old('value') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1 " >Locale</label>
                    <input type="text" name="locale" class="form-control" value="{{ old('locale') }}" required="required">
                </div>

                <br> <br>
                <button type="submit" class="btn text-light" style="background: #17a2b8">Save</button>
            </form>
        </div>
    </div>
@endsection
