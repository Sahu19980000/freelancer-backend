<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel AJAX Dependent Category Subcategory Dropdown Example - ItSolutionStuff.com</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-primary mb-4 text-center">
                    <h4>Laravel AJAX Dependent Category Subcategory Dropdown Example - Saurabh</h4>
                </div>
                <form>
                    <div class="form-group mb-3">
                        <select id="category-dropdown" class="form-control">
                            <option value="">-- Select Category --</option>
                            @foreach ($categories as $data)
                                <option value="{{ $data->id }}">
                                    {{ $data->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <select id="subcategory-dropdown" class="form-control">
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            /*------------------------------------------
            --------------------------------------------
            Category Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#category-dropdown').on('change', function() {
                var idCategory = this.value;
                $("#subcategory-dropdown").html('');
                $.ajax({
                    url: "{{ url('api/fetch-subcategories') }}",
                    type: "POST",
                    data: {
                        category_id: idCategory,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#subcategory-dropdown').html(
                            '<option value="">-- Select Subcategory --</option>');
                        $.each(result.subcategories, function(key, value) {
                            $("#subcategory-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });

        });
    </script>
</body>

</html>
