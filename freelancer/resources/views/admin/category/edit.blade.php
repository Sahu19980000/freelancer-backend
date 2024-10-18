@extends('admin.layouts.master')
@section('title', 'Admin Dashboard |Units')
@section('content')


    <div class="row mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit/Update Category</h4>
                    </div>
                    <div class="text-start">
                        <a href="{{ route('category.index') }}" class="btn btn-primary btn-sm ms-4" id="addRow">Back</a>
                    </div>
                    <hr />
                    <form method="POST" id="quickForm" enctype="multipart/form-data"
                        action="{{ route('category.update', $category->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput5">Category Name</label>
                                        <input class="form-control btn-pill" name="name" value="{{$category->name}}"
                                            type="text" placeholder="Enter Category Name">
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <button class="btn btn-primary me-3" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
@endsection
