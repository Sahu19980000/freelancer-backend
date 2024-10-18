@extends('admin.layouts.master')
@section('title', 'Admin Dashboard |Units')
@section('content')


    <div class="row mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Basic Plan</h4>
                    </div>
                    {{-- <div class="text-start">
                        <a href="{{ route('subcategory.index') }}" class="btn btn-primary btn-sm ms-4" id="addRow">Back</a>
                    </div> --}}
                    {{-- <hr /> --}}
                    <form action="{{ route('basicplanmake.store') }}" method="POST" id="makeplan" enctype="multipart/form-data" class="form theme-form dark-inputs">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">Category</label>
                                        <select id="category" class="form-control" name="categoryid">
                                            <option value="">-- Select Category --</option>
                                            @foreach ($categories as $data)
                                                <option value="{{ $data->id }}" {{ old('categoryid')==$data->id ? 'selected' : ''  }}>{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">Sub Category</label>
                                        <select id="parent_category" class="form-control" name="subcategoryid">
                                            <option value="">-- Select Sub Category --</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="pricingtable p-2">
                                        <div><h3>Basic Details</h3></div><br>
                                        <div class="text-end"><label> <a href="javascript:void(0);" class="btn btn-success btn-sm" id="add_rowA"><i class="fa fa-plus"></i> Add</a></label></div>
                                        <div class="row" style="padding: 0px 11px 0px 11px;">
                                            <table class="w-100" id="dynamicTable"  style="border: 1px solid #eee;" name="myForm">
                                                <thead>
                                                <tr>
                                                    <th style="border: 1px solid #000;margin-left: 5px;width: 30rem;text-align: center;">Description</th>
                                                    <th style="border: 1px solid #000;margin-left: 8px;width: 30px;text-align: center;">Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody id="row_body1">
                                                    <input type="hidden" value="0" id="row_countA">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="plan_name" value="basic" readonly>
                                <div class="col-lg-6 col-md-6">
                                    <div class="pricingtable p-2">
                                        <div><h3>Basic plan add Technology</h3></div><br>
                                        <div class="text-end"><label> <a href="javascript:void(0);" class="btn btn-success btn-sm" id="add_rowB"><i class="fa fa-plus"></i> Add</a></label></div>
                                        <div class="row" style="padding: 0px 11px 0px 11px;">
                                            <table class="w-100" id="dynamicTable"  style="border: 1px solid #eee;" name="myForm">
                                                <thead>
                                                <tr>
                                                    <th style="border: 1px solid #000;margin-left: 5px;width: 30rem;text-align: center;">Enter Technology Name</th>
                                                    <th style="border: 1px solid #000;margin-left: 8px;width: 30px;text-align: center;">Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody id="row_body2">
                                                    <input type="hidden" value="0" id="row_countB">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-4 col-md-4">
                                    <div class="pricingtable p-2">
                                        <div><h4>Advance</h4></div><br>
                                        <div class="text-end"><label> <a href="javascript:void(0);" class="btn btn-success btn-sm" id="add_rowB"><i class="fa fa-plus"></i> Add</a></label></div>
                                        <div class="row" style="padding: 0px 11px 0px 11px;">
                                            <table class="w-100" id="dynamicTable"  style="border: 1px solid #eee;" name="myForm">
                                                <thead>
                                                <tr>
                                                    <th style="border: 1px solid #000;margin-left: 5px;width: 30rem;text-align: center;">Description</th>
                                                    <th style="border: 1px solid #000;margin-left: 8px;width: 30px;text-align: center;">D</th>
                                                </tr>
                                                </thead>
                                                <tbody id="row_body2">
                                                    <input type="hidden" value="0" id="row_countB">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="pricingtable p-2">
                                        <div><h4>Premium</h4></div><br>
                                        <div class="text-end"><label> <a href="javascript:void(0);" class="btn btn-success btn-sm" id="add_rowC"><i class="fa fa-plus"></i> Add</a></label></div>
                                        <div class="row" style="padding: 0px 11px 0px 11px;">
                                            <table class="w-100" id="dynamicTable"  style="border: 1px solid #eee;" name="myForm">
                                                <thead>
                                                <tr>
                                                    <th style="border: 1px solid #000;margin-left: 5px;width: 30rem;text-align: center;">Description</th>
                                                    <th style="border: 1px solid #000;margin-left: 8px;width: 30px;text-align: center;">D</th>
                                                </tr>
                                                </thead>
                                                <tbody id="row_body3">
                                                    <input type="hidden" value="0" id="row_countC">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> --}}
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $().ready(function() {
            // basic
            $('#add_rowA').on('click', function() {
                var row_countA = $('#row_countA').val();
                row_countA++;
                var content =
                 '<tr id="rowA'+row_countA+'"><td><input type="text" class="form-control" name="basic['+row_countA+'][items]" id="basic'+row_countA+'"></td><td><a href="javascript:void(0);" class="remove_row text-danger" data-row="'+row_countA+'"><i class="fa fa-trash"></i></a></td></tr>';
                $('#row_body1').append(content);
                $('#row_countA').val(row_countA);
            });
            // technology name add dynamic input field
            $('#add_rowB').on('click', function() {
                var row_countB = $('#row_countB').val();
                row_countB++;
                var content =
                 '<tr id="rowB'+row_countB+'"><td><input type="text" class="form-control" name="tech['+row_countB+'][name]" id="tech'+row_countB+'"></td><td><a href="javascript:void(0);" class="remove_row_one text-danger" data-row="'+row_countB+'"><i class="fa fa-trash"></i></a></td></tr>';
                $('#row_body2').append(content);
                $('#row_countB').val(row_countB);
            });
            // // premium
            // $('#add_rowC').on('click', function() {
            //     var row_countC = $('#row_countC').val();
            //     row_countC++;
            //     var content =
            //      '<tr id="rowC'+row_countC+'"><td><input type="text" class="form-control" name="premium['+row_countC+'][items]" id="premium'+row_countC+'"></td><td><a href="javascript:void(0);" class="remove_row_two text-danger" data-row="'+row_countC+'"><i class="fa fa-trash"></i></a></td></tr>';
            //     $('#row_body3').append(content);
            //     $('#row_countC').val(row_countC);
            // });

            jQuery("#category").on("change", function(){
                var categoryid = jQuery(this).val();
                $.ajax({
                    url:'{{ route("getsubcategory") }}/'+categoryid,
                    method:'POST',
                    dataType:"json",
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success:function(response){
                        let html = '';
                        html += '<option value="">'+'-- Select Sub Category --'+'</option>';
                        $.each(response ,function(i,v){
                            html += '<option value="'+v.id+'">'+v.name+'</option>';
                        });
                        $("#parent_category").html(html);
                    }
                })
            });
        });
    </script>
    <script>
        $("#makeplan").on('submit', function(e){
            e.preventDefault();

            $.ajax({
                url:$(this).attr('action'),
                method:$(this).attr('method'),
                data:new FormData(this),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(document).find('span.error-text').text('');
                },
                success:function(data){
                    if (data.errormsg != ""){
                        $("#errormsg").html(data.errormsg);
                    }

                    if (data.status == 0) {
                        $("#tableerror").html(data.table_status);
                        $("#tableerrors").html(data.table_status);
                        $.each(data.error, function(prefix, val){
                            $('span.'+prefix+'_error').text(val[0]);                        
                        });
                    }else{
                        $('#makeplan')[0].reset();
                        alert(data.msg);
                        // sessionStorage.setItem("cpmsg", data.msg);
                        window.location.href = '{{route("basicplanmake.index")}}';
                    }
                }
            })
        })
    </script>
@endsection
