@extends('admin.layouts.master')
@section('title', 'Admin Dashboard |Units')
@section('content')


    <div class="row mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Company Techonology</h4>
                    </div>
                    {{-- <div class="text-start">
                        <a href="{{ route('subcategory.index') }}" class="btn btn-primary btn-sm ms-4" id="addRow">Back</a>
                    </div> --}}
                    {{-- <hr /> --}}
                    <form action="{{ route('company/technology/store') }}" method="POST" id="makeplan" enctype="multipart/form-data" class="form theme-form dark-inputs">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">Company name</label>
                                        <input type="text" name="companyname" class="form-control">
                                        <span class="text-danger error-text companyname_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">Category</label>
                                        <select id="category" class="form-control" name="categoryid">
                                            <option value="">-- Select Category --</option>
                                            @foreach ($categories as $data)
                                                <option value="{{ $data->id }}" {{ old('categoryid')==$data->id ? 'selected' : ''  }}>{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger error-text categoryid_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">Sub Category</label>
                                        <select id="parent_category" class="form-control" name="subcategoryid">
                                            <option value="">-- Select Sub Category --</option>
                                        </select>
                                    <span class="text-danger error-text subcategoryid_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">Plan</label>
                                        <select id="parent_plan" class="form-control" name="planid">
                                            <option value="">-- Select a Plan --</option>
                                        </select>
                                        <span class="text-danger error-text planid_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">Technology</label>
                                        <select id="parent_technology" class="form-control" name="techid">
                                            <option value="">-- Select a Technology --</option>
                                        </select>
                                        <span class="text-danger error-text techid_error"></span>
                                    </div>
                                </div>
                                <br>
                                <div class="text-center pb-3"><u><h4>Make Technology Details</h4></u></div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">FRONT END</label>
                                        <input type="text" class="form-control" name="frontend">
                                        <span class="text-danger error-text frontend_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">BACK END</label>
                                        <input type="text" class="form-control" name="backend">
                                        <span class="text-danger error-text backend_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">DATABASE</label>
                                        <input type="text" class="form-control" name="database">
                                        <span class="text-danger error-text database_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">AVG COST</label>
                                        <input type="text" class="form-control" name="avg_cost">
                                        <span class="text-danger error-text avg_cost_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">DELIVERY TIME</label>
                                        <input type="text" class="form-control" name="delivery_time">
                                        <span class="text-danger error-text delivery_time_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">OTHER VARIABLES</label>
                                        <input type="text" class="form-control" name="other_variables">
                                        <span class="text-danger error-text other_variables_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">OTHER VARIABLES</label>
                                        <input type="text" class="form-control" name="other_variables_one">
                                        <span class="text-danger error-text other_variables_one_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">Technology Information</label>
                                        <textarea name="info" class="form-control" placeholder="Describe technology here..."></textarea>
                                        <span class="text-danger error-text info_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">Multiple Images update</label>
                                        <input type="file" class="form-control" name="images[]" placeholder="address" multiple>
                                        <span class="text-danger error-text images_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">Video update</label>
                                        <input type="file" class="form-control" name="videos">
                                        <span class="text-danger error-text videos_error"></span>
                                    </div>
                                </div>
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
            // get search a category in subcategory
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
            // get subcategory in plann 
            jQuery("#parent_category").on("change", function(){
                var subcategoryid = jQuery(this).val();
                var categoryid = $("#category").val();
                $.ajax({
                    url:'{{ route("language/info/plan") }}',
                    method:'POST',
                    dataType:"json",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        subcategoryid:subcategoryid,
                        categoryid:categoryid,
                    },
                    success:function(response){
                        // console.log(response, 'response');
                        
                        let html = '';
                        html += '<option value="">'+'-- Select a Plan --'+'</option>';
                        $.each(response ,function(i,v){
                            html += '<option value="'+v.id+'">'+v.plan_name+'</option>';
                        });
                        $("#parent_plan").html(html);
                    }
                })
            });
            // get Plan in technology 
            jQuery("#parent_plan").on("change", function(){
                var planid = jQuery(this).val();
                // var categoryid = $("#category").val();
                // var planid = $("#parent_plan").val();
                $.ajax({
                    url:'{{ route("language/info/plans") }}',
                    method:'POST',
                    dataType:"json",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        planid:planid,
                    },
                    success:function(response){
                        let html = '';
                        html += '<option value="">'+'-- Select a Technology --'+'</option>';
                        $.each(response ,function(i,v){
                            html += '<option value="'+v.id+'">'+v.name+'</option>';
                        });
                        $("#parent_technology").html(html);
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
                        window.location.href = '{{route("company/technology/index")}}';
                    }
                }
            })
        })
    </script>
@endsection
