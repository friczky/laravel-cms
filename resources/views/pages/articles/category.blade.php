@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Profile') }}</h1>

    <div class="">

        <div class="card shadow col-md-12">
            <div class="card-header row">
                <div class="col-sm-6">{{ __('Category') }}</div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('articles') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>
            <div class="card-body row">
                <div class="col-md-3">
                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        {{ __('Add Category') }}
                        <hr>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control"
                                placeholder="Input name your category here !">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-9">
                    {{ __('Data Category') }}
                    <hr>
                    <table id="datatables" class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
