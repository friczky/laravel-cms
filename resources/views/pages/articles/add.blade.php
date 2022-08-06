@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Profile') }}</h1>

    <div class="col-md-12">

        <div class="card shadow">
            <div class="card-header row">
                <div class="col-sm-6">{{ __('Add Articles') }}</div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('articles') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" placeholder="Input title your articles here !">
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="" id="" class="form-control">
                        <option value="">Select Category</option>

                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Body</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <button class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>

    </div>
@endsection
