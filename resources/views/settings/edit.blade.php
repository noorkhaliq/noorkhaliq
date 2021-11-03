@extends('layouts.master')

@section('mainContent')
    <div class="content-wrapper col-md-9 mt-3" >
        <div class="card card-primary">
            <div class="card-header " style="background: #17a2b8">
                <h3 class="card-title">Edit Settings</h3>
            </div>
            {{--            @include('layouts.errors')--}}
            <form method="post" action="{{ route('settings.update' , $settings->id)  }}" >
                @csrf
                @method('put')

                <div class="form-group">
                    <label for="exampleInputEmail1 " >Key</label>
                    <input type="text" name="key" class="form-control" value="{{ $settings->key}}" required="required">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Value</label>
                    <textarea name="value" id="summernote" class="form-control">{{ $settings->value }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1 " >Locale</label>
                    <input type="text" name="locale" class="form-control" value="{{ $settings->locale}}" required="required">
                </div>

                <br> <br>
                <button type="submit" class="btn text-light" style="background: #17a2b8">Save</button>
            </form>
        </div>
    </div>
@endsection
