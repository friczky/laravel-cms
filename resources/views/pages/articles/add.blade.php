@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Profile') }}</h1>

    <div class="">

        <div class="card shadow col-md-12">
            <form action="">
                <div class="card-header row">
                    <div class="col-sm-6">{{ __('Add Articles') }}</div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('articles') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name=""
                            placeholder="Input title your articles here !">
                    </div>

                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($categories as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Body</label>
                        <textarea name="body" id="summernote"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
