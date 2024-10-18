@extends('admin.layouts.master')
@section('title', 'Admin Dashboard |Units')
@section('content')


    <div class="row mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create SubCategory</h4>
                    </div>
                    <div class="text-start">
                        <a href="{{ route('subcategory.index') }}" class="btn btn-primary btn-sm ms-4" id="addRow">Back</a>
                    </div>
                    <hr />
                    <form action="{{ route('subcategory.store') }}" method="POST" id="settings" enctype="multipart/form-data"
                        class="form theme-form dark-inputs">
                        @csrf

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">Category</label>
                                        <select id="category-dropdown" class="form-control" name="category_id">
                                            <option value="">-- Select Category --</option>
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
                                        <input class="form-control btn-pill" name="name" id="exampleFormControlInput5"
                                            type="text" placeholder="Enter Sub Category">
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <button class="btn btn-primary me-3" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>


    <script>
        $(document).on('submit', '#myForm', function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            alert(formData);
        });
    </script>

@endsection
