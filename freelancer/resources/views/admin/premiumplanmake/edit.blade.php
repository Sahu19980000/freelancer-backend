@extends('admin.layouts.master')
@section('title', 'Admin Dashboard |Units')
@section('content')


    <div class="row mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Premium Plan</h4>
                    </div>
                    {{-- <div class="text-start">
                        <a href="{{ route('subcategory.index') }}" class="btn btn-primary btn-sm ms-4" id="addRow">Back</a>
                    </div> --}}
                    {{-- <hr /> --}}
                    <form action="{{ route('premiumplanmake/update') }}" method="POST" id="makeplan" enctype="multipart/form-data" class="form theme-form dark-inputs">
                        @csrf
                        {{-- @method('PATCH') --}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="hidden" name="id" value="{{ $planmakes->id }}" readonly/>
                                        <label class="form-label" for="formFile">Category</label>
                                        <select id="category" class="form-control" name="categoryid">
                                            <option value="">-- Select Category --</option>
                                            @foreach ($categories as $data)
                                                <option value="{{ $data->id }}" {{ ( $data->id == $planmakes->categoryid) ? 'selected' : '' }}>{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">Sub Category</label>
                                        <select id="parent_category" class="form-control" name="subcategoryid" required>
                                            <option value="">-- Select Sub Category --</option>
                                            @foreach ($subcategories as $sub)
                                                <option value="{{ $sub->id }}" {{ ( $sub->id == $planmakes->subcategoryid) ? 'selected' : '' }}>{{ $sub->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="pricingtable p-2">
                                        <div><h3>Premium Details</h3></div><br>
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
                                                    @php
                                                        $numItems = count($planmakes_item);
                                                        $i = 0;
                                                    @endphp
                                                    @foreach ($planmakes_item as $plan_item)
                                                        @if(++$i === $numItems)
                                                        @endif
                                                        <tr id="rowA{{ $i }}">
                                                            <td><input type="hidden" class="w-100" name="premium[{{$i}}][id]" id="premium_id{{$i}}" data-srno="{{$i}}" value="{{$plan_item->id}}" readonly><input type="text" class="form-control" name="premium[{{ $i }}][items]" id="premium{{ $i }}" value="{{ $plan_item->items }}"></td>
                                                            <td><a href="javascript:void(0);" class="remove_plan text-danger" data-row="{{ $plan_item->id }}"><i class="fa fa-trash"></i></a></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="plan_name" value="premium" readonly>
                                <div class="col-lg-6 col-md-6">
                                    <div class="pricingtable p-2">
                                        <div><h3>Premium plan add Technology</h3></div><br>
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
                                                    @php
                                                        $numItems = count($technologies);
                                                        $j = 0;
                                                    @endphp
                                                    @foreach ($technologies as $tech_item)
                                                        @if(++$j === $numItems)
                                                        @endif
                                                        <tr id="rowB{{ $j }}">
                                                            <td><input type="hidden" class="w-100" name="tech[{{$j}}][techid]" id="tech_id{{$j}}" data-srno="{{$j}}" value="{{$tech_item->id}}" readonly><input type="text" class="form-control" name="tech[{{ $j }}][name]" id="tech{{ $i }}" value="{{ $tech_item->name }}"></td>
                                                            <td><a href="javascript:void(0);" class="remove_tech text-danger" data-row="{{ $tech_item->id }}"><i class="fa fa-trash"></i></a></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-4 col-md-4">
                                    <div class="pricingtable p-2">
                                        <div><h4>premium</h4></div><br>
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
            // premium
            $('#add_rowA').on('click', function() {
                var row_countA = $('#row_countA').val();
                row_countA++;
                var content =
                '<tr id="rowA'+row_countA+'"><td><input type="text" class="form-control" name="premium['+row_countA+'][items]" id="premium'+row_countA+'"></td><td><a href="javascript:void(0);" class="remove_plan text-danger" data-row="'+row_countA+'"><i class="fa fa-trash"></i></a></td></tr>';
                $('#row_body1').append(content);
                $('#row_countA').val(row_countA);
            });
            // technology name add dynamic input field
            $('#add_rowB').on('click', function() {
                var row_countB = $('#row_countB').val();
                row_countB++;
                var content =
                 '<tr id="rowB'+row_countB+'"><td><input type="text" class="form-control" name="tech['+row_countB+'][name]" id="tech'+row_countB+'"></td><td><a href="javascript:void(0);" class="remove_tech text-danger" data-row="'+row_countB+'"><i class="fa fa-trash"></i></a></td></tr>';
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
                        window.location.href = '{{route("premiumplanmake/index")}}';
                    }
                }
            })
        })
    </script>
    <script>
        // plan item delete here
        $(document).on('click', '.remove_plan', function() {
            var id = $(this).attr('data-row');
            var row_countA = $(this).attr('data-row');
            // var ntrid = $(this).closest('tr').attr('id');
            // var newStr = ntrid.replace('rowA','');
            // var item_id = $('#purchase_id'+newStr).val();
            
            // console.log(row_countA, 'data');
            
            swal({
                title: "Are you sure?",
                text: "Once deleted, you want to delete!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url:'{{ route("premiumplanmakeitem/delete") }}',
                        method:'POST',
                        dataType:"json",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            id:id
                        },
                        success:function(response){
                            // let purchaseid = $("#purchaseid").val();
                            // let lpovalue = $(".lpo_value").val();
                            // let discount = $(".discount").val();
                            // let afterdiscount = $(".after_discount").val();
                            // let vat = $(".vat").val();
                            // let vat_value = $(".vat_value").val();
                            // let total_value = $(".total_value").val();
                            // console.log(purchaseid, lpovalue, discount, afterdiscount, vat, vat_value, total_value, 'lpovalue');
                            $('#rowA'+row_countA).remove();
                            location.reload()
                        }
                    })

                    // var sum1 = 0;
                    // $(".t2g").each(function() {
                    //     sum1 += +$(this).val();
                    //     var aq = (sum1).toFixed(3);
                    //     $("#total_g").html(aq);
                    //     $("#rep_amount").val(aq);
                    // }); 

                    // var total = (sum1).toFixed(3);

                    // $('.lpo_value').val(total);
                    // var discount = $('.discount').val();
                    // var get_discount = parseFloat(discount).toFixed(3);
                    // var vat = $('.vat').val();
                    // var getVAT = parseFloat(vat).toFixed(3);

                    // if(get_discount == 0){
                    //     $('.after_discount').val(total);
                    //     var vat_value = parseFloat(total*getVAT/100).toFixed(3);
                    //     $('.vat_value').val(vat_value);
                    //     var grand_total = (parseFloat(total)+parseFloat(vat_value)).toFixed(3);
                    //     $('.total_value').val(grand_total);
                    // }else{
                    //     var after_discount = (parseFloat(total)-parseFloat(get_discount)).toFixed(3);
                    //     $('.after_discount').val(after_discount);
                    //     var vat_value = parseFloat(after_discount*getVAT/100).toFixed(3);
                    //     $('.vat_value').val(vat_value);
                    //     var grand_total = (parseFloat(after_discount)+parseFloat(vat_value)).toFixed(3);
                    //     $('.total_value').val(grand_total);
                    // }

                    // var ischeck_item = $(".t2g").val();
                    // if(ischeck_item === undefined){
                    //     var letus = '0.000';
                    //     $("#total_g").html(letus);
                    //     $("#rep_amount").val(letus);
                    //     $('.lpo_value').val(letus);
                    //     $('.discount').val(letus);
                    //     $('.after_discount').val(letus);
                    //     $('.vat_value').val(letus);
                    //     $('.total_value').val(letus);
                    // }
                   

                }else {
                    swal("Your lead is safe!");
                }
            });
        });

    </script>
@endsection
