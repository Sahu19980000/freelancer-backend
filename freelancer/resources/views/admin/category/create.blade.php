@extends('admin.layouts.master')
@section('title', 'Admin Dashboard |Units')
@section('content')


    <div class="row mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Category</h4>
                    </div>
                    <div class="text-start">
                        <a href="{{ route('category.index') }}" class="btn btn-primary btn-sm ms-4" id="addRow">Back</a>
                    </div>
                    <hr />
                    <form action="{{ route('category.store') }}" method="POST" id="settings" enctype="multipart/form-data"
                        class="form theme-form dark-inputs">
                        @csrf

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput5">Category Name</label>
                                        <input class="form-control btn-pill" name="name" id="exampleFormControlInput5"
                                            type="text" placeholder="Enter Category Name">
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
