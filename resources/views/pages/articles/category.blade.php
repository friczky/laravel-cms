@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Profile') }}</h1>
    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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
                            @forelse ($data as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>
                                        <a href="{{ route('category.edit', $data->id) }}" class="btn btn-primary"><i
                                                class="fa fa-edit"></i></a>
                                        <a href="{{ route('category.destroy', $data->id) }}" class="btn btn-danger"
                                            onclick="return confirm('Do you want to delete this category ?')"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No data</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
