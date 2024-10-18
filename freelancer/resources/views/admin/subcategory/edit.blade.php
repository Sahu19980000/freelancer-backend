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
                        <a href="{{ route('subcategory.index') }}" class="btn btn-primary btn-sm ms-4" id="addRow">Back</a>
                    </div>
                    <hr />
                    <form method="POST" id="quickForm" enctype="multipart/form-data"
                        action="{{ route('subcategory.update', $subcategory->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">Category</label>
                                        <select id="category-dropdown" class="form-control" name="category_id">
                                            <option
                                                value="{{ App\Models\Category::where('id', '=', $subcategory->category_id)->pluck('id')->first() }}">
                                                {{ App\Models\Category::where('id', '=', $subcategory->category_id)->pluck('name')->first() }}
                                            </option>
                                            @foreach ($categories as $data)
                                                <option value="{{ $data->id }}">
                                                    {{ $data->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    </br>

                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">Sub Category</label>
                                        <input class="form-control btn-pill" name="name" value="{{ $subcategory->name }}"
                                            type="text" placeholder="Enter Sub Category">
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
