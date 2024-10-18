@extends('admin.layouts.master')
<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,200' rel='stylesheet' type='text/css'>

<!-- Stylesheets -->
<link rel="stylesheet" href="{{ asset('multiform/css/reset.min.css') }}">
<link rel="stylesheet" href="{{ asset('multiform/css/style.css') }}">
    
{{-- <link rel="stylesheet" href="{{ asset('multiform/css/bootstrap.min.css') }}"> --}}
    
<script src="{{ asset('multiform/code.jquery.com/jquery-3.4.1.min.js') }}" type="text/javascript"></script>
    
<script src="{{ asset('multiform/js/jquery.validate.js') }}"></script>      
    
{{-- <script src="{{ asset('multiform/cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js') }}"></script> --}}

{{-- <script src="{{ asset('multiform/cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }}"></script> --}}
{{-- <script src="../../../maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> --}}

<script type="text/javascript">
    $(function () {
        $("#postaliddiv").click(function () {
            if ($(this).is(":checked")) {
                $("#showpostaladssdiv").show();
               
            } else {
                $("#showpostaladssdiv").hide();
            }
        });
    });
</script> 


<style>

/* .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('img/Spinner.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .5;
} */

.error
{
margin: 0px !important;
color:red !important;
font-size: 15px !important;
}

.form-group.required .control-label:after {
  content:"*";
  color:red;
}
</style>

<script>

 $(window).on('load', function () 
 {
     
     $("input", "#step2").addClass("ignore"); // do not validate #form2 input
     $("input", "#step3").addClass("ignore"); // do not validate #form2 input
     $("input", "#step4").addClass("ignore"); // do not validate #form2 input
     
 });

</script>

<script>

var _0xa9fc=["\x2E\x69\x67\x6E\x6F\x72\x65","\x72\x65\x71\x75\x69\x72\x65\x64","\x73\x68\x6F\x77","\x23\x6C\x6F\x61\x64\x69\x6E\x67\x6D\x65\x73\x73\x61\x67\x65","\x66\x6F\x72\x6D\x73\x75\x62\x6D\x69\x74\x61\x6A\x61\x78\x2E\x70\x68\x70","\x50\x4F\x53\x54","\x73\x75\x63\x63\x65\x73\x73","\x68\x69\x64\x65","\x23\x73\x75\x63\x65\x73\x73\x6D\x73\x67","\x65\x72\x72\x6F\x72","\x23\x65\x72\x72\x6F\x72\x6D\x73\x67","\x61\x6A\x61\x78","\x73\x63\x72\x6F\x6C\x6C\x54\x6F","\x76\x61\x6C\x69\x64\x61\x74\x65","\x23\x6D\x73\x66\x6F\x72\x6D","\x70\x61\x72\x65\x6E\x74","\x6E\x65\x78\x74","\x66\x6F\x72\x6D","\x69\x67\x6E\x6F\x72\x65","\x72\x65\x6D\x6F\x76\x65\x43\x6C\x61\x73\x73","\x69\x6E\x70\x75\x74","\x23\x73\x74\x65\x70\x32","\x61\x63\x74\x69\x76\x65","\x61\x64\x64\x43\x6C\x61\x73\x73","\x69\x6E\x64\x65\x78","\x66\x69\x65\x6C\x64\x73\x65\x74","\x65\x71","\x23\x70\x72\x6F\x67\x72\x65\x73\x73\x62\x61\x72\x20\x6C\x69","\x23\x73\x74\x65\x70\x31","\x63\x6C\x69\x63\x6B","\x23\x73\x74\x65\x70\x6F\x6E\x65","\x70\x72\x65\x76","\x23\x70\x72\x65\x76\x69\x6F\x75\x73\x31","\x23\x73\x74\x65\x70\x33","\x23\x73\x74\x65\x70\x74\x77\x6F","\x23\x70\x72\x65\x76\x69\x6F\x75\x73\x32","\x23\x73\x74\x65\x70\x34","\x23\x73\x74\x65\x70\x74\x68\x72\x65\x65","\x23\x70\x72\x65\x76\x69\x6F\x75\x73\x33","\x3A\x63\x68\x65\x63\x6B\x65\x64","\x69\x73","\x23\x74\x65\x72\x6D\x73\x63\x6C\x73","\x70\x72\x6F\x70","\x23\x74\x65\x6D\x73\x61\x6E\x64\x63\x6F\x6E\x64\x65\x72\x72\x6F\x72","\x6F\x6E","\x23\x73\x74\x65\x70\x66\x6F\x75\x72","\x72\x65\x61\x64\x79"];jQuery()[_0xa9fc[46]](function(){var _0xb70ex1=jQuery(_0xa9fc[14])[_0xa9fc[13]]({ignore:_0xa9fc[0],rules:{firstname:_0xa9fc[1],lastname:_0xa9fc[1],'\x67\x65\x6E\x64\x65\x72':{required:true},address:_0xa9fc[1],mobilenumber:_0xa9fc[1],email:_0xa9fc[1],postalcode:_0xa9fc[1],cityname:_0xa9fc[1]},submitHandler:function(_0xb70ex2){var _0xb70ex3= new FormData(_0xb70ex2);$(_0xa9fc[3])[_0xa9fc[2]]();$[_0xa9fc[11]]({url:_0xa9fc[4],type:_0xa9fc[5],data:_0xb70ex3,contentType:false,cache:false,processData:false,success:function(_0xb70ex4){if(_0xb70ex4== _0xa9fc[6]){$(_0xa9fc[3])[_0xa9fc[7]]();$(_0xa9fc[8])[_0xa9fc[2]]()};if(_0xb70ex4== _0xa9fc[9]){$(_0xa9fc[3])[_0xa9fc[7]]();$(_0xa9fc[10])[_0xa9fc[2]]()}},error:function(){}})},highlight:function(_0xb70ex5,_0xb70ex6){window[_0xa9fc[12]](0,0)},unhighlight:function(_0xb70ex5,_0xb70ex6){}});$(_0xa9fc[30])[_0xa9fc[29]](function(){current_fs= $(this)[_0xa9fc[15]]();next_fs= $(this)[_0xa9fc[15]]()[_0xa9fc[16]]();if(_0xb70ex1[_0xa9fc[17]]()){$(_0xa9fc[20],_0xa9fc[21])[_0xa9fc[19]](_0xa9fc[18]);$(_0xa9fc[27])[_0xa9fc[26]]($(_0xa9fc[25])[_0xa9fc[24]](next_fs))[_0xa9fc[23]](_0xa9fc[22]);$(_0xa9fc[28])[_0xa9fc[7]]();$(_0xa9fc[21])[_0xa9fc[2]]();window[_0xa9fc[12]](0,0)}});$(_0xa9fc[32])[_0xa9fc[29]](function(){$(_0xa9fc[20],_0xa9fc[21])[_0xa9fc[23]](_0xa9fc[18]);current_fs= $(this)[_0xa9fc[15]]();previous_fs= $(this)[_0xa9fc[15]]()[_0xa9fc[31]]();$(_0xa9fc[27])[_0xa9fc[26]]($(_0xa9fc[25])[_0xa9fc[24]](current_fs))[_0xa9fc[19]](_0xa9fc[22]);$(_0xa9fc[21])[_0xa9fc[7]]();$(_0xa9fc[28])[_0xa9fc[2]]();window[_0xa9fc[12]](0,0)});$(_0xa9fc[34])[_0xa9fc[29]](function(){current_fs= $(this)[_0xa9fc[15]]();next_fs= $(this)[_0xa9fc[15]]()[_0xa9fc[16]]();if(_0xb70ex1[_0xa9fc[17]]()){$(_0xa9fc[20],_0xa9fc[33])[_0xa9fc[19]](_0xa9fc[18]);$(_0xa9fc[27])[_0xa9fc[26]]($(_0xa9fc[25])[_0xa9fc[24]](next_fs))[_0xa9fc[23]](_0xa9fc[22]);$(_0xa9fc[21])[_0xa9fc[7]]();$(_0xa9fc[33])[_0xa9fc[2]]();window[_0xa9fc[12]](0,0)}});$(_0xa9fc[35])[_0xa9fc[29]](function(){$(_0xa9fc[20],_0xa9fc[33])[_0xa9fc[23]](_0xa9fc[18]);current_fs= $(this)[_0xa9fc[15]]();previous_fs= $(this)[_0xa9fc[15]]()[_0xa9fc[31]]();$(_0xa9fc[27])[_0xa9fc[26]]($(_0xa9fc[25])[_0xa9fc[24]](current_fs))[_0xa9fc[19]](_0xa9fc[22]);$(_0xa9fc[33])[_0xa9fc[7]]();$(_0xa9fc[21])[_0xa9fc[2]]();window[_0xa9fc[12]](0,0)});$(_0xa9fc[37])[_0xa9fc[29]](function(){current_fs= $(this)[_0xa9fc[15]]();next_fs= $(this)[_0xa9fc[15]]()[_0xa9fc[16]]();if(_0xb70ex1[_0xa9fc[17]]()){$(_0xa9fc[20],_0xa9fc[36])[_0xa9fc[19]](_0xa9fc[18]);$(_0xa9fc[27])[_0xa9fc[26]]($(_0xa9fc[25])[_0xa9fc[24]](next_fs))[_0xa9fc[23]](_0xa9fc[22]);$(_0xa9fc[33])[_0xa9fc[7]]();$(_0xa9fc[36])[_0xa9fc[2]]();window[_0xa9fc[12]](0,0)}});$(_0xa9fc[38])[_0xa9fc[29]](function(){$(_0xa9fc[20],_0xa9fc[36])[_0xa9fc[23]](_0xa9fc[18]);current_fs= $(this)[_0xa9fc[15]]();previous_fs= $(this)[_0xa9fc[15]]()[_0xa9fc[31]]();$(_0xa9fc[27])[_0xa9fc[26]]($(_0xa9fc[25])[_0xa9fc[24]](current_fs))[_0xa9fc[19]](_0xa9fc[22]);$(_0xa9fc[36])[_0xa9fc[7]]();$(_0xa9fc[33])[_0xa9fc[2]]();window[_0xa9fc[12]](0,0)});$(_0xa9fc[45])[_0xa9fc[44]](_0xa9fc[29],function(_0xb70ex7){if(_0xb70ex1[_0xa9fc[17]]()){if($(_0xa9fc[41])[_0xa9fc[40]](_0xa9fc[39])){return true}else {$(_0xa9fc[41])[_0xa9fc[42]](_0xa9fc[1],true);$(_0xa9fc[43])[_0xa9fc[2]]();return false}}})})
</script> 

<script>

$(document).ready(function() {

	$('#incheck').on('click', function(e) {
		$("#termscls").prop('checked', true);
		$("#temsandconderror").hide();
		window_ht();
		
	});
	
});

</script>
@section('title', 'Admin Dashboard |Units')
@section('content')

<div class="row mt-5">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Create Company User</h4>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12" style="padding-right:0px;padding-left:0px;">
                            <div class="col-md-12 col-xs-12 col-md-offset-1">
                                <!-- multistep form -->
                                <form class="form-horizontal form" id="msform" method="POST" action="#" enctype="multipart/form-data">
                                    <!-- progressbar -->
                                    <ul id="progressbar">
                                        <li class="active">Account Details</li>
                                        <li>Company Image</li>
                                        <li>Portfolio</li>
                                        {{-- <li>Final Step</li> --}}
                                    </ul>
                                    
                                    <div id="sucessmsg" style="display:none;"><h2 class="fs-subtitle" style="color: #dc3c52; font-size:22px; text-align:center;">Form Submitted Successfully</h2></div>
                                    <div id="errormsg" style="display:none;"><h2 class="fs-subtitle" style="color: #dc3c52; font-size:22px; text-align:center;">Oops.. Something wrong.</h2></div>
                                    
                                    <!-- fieldsets -->
                                    <fieldset id="step1">
                                        <div align="center">
                                            {{-- <h3 class="fs-subtitle">Multi Step form</h3> --}}
                                        </div>		
                                    
                                        <h2 class="fs-title">Account Details</h2>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label class="control-label">Company Name</label>
                                                <input type="text" name="companyname" id="companyname" class="form-control required" placeholder="Company name">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="control-label">Company Email</label>
                                                <input type="text" name="email" id="email" class="form-control required" placeholder="Company email">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="control-label">Password</label>
                                                <input type="text" name="password" id="password" class="form-control required" placeholder="Company password">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Company Website</label>
                                                <input type="text" name="website" id="website" class="form-control" placeholder="Company Website">
                                            </div>
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-lg-3">
                                                <label class="form-label">Employee Count (Min)</label>
                                                <input type="number" name="empcount_min" id="empcount_min" class="form-control required">  
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="form-label">Employee Count (Max)</label>
                                                <input type="number" name="empcount_max" id="empcount_max" class="form-control required">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Number of Offices</label>
                                                <input type="number" name="no_ofoffice" id="no_ofoffice" class="form-control required">  
                                            </div>
                                        </div>
                                        <div class="row pt-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Company Introduction</label>
                                                <textarea class="form-control" name="introduction" id="introduction" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <input style="float:right;" type="button" id="stepone" name="next" class="next action-button" value="Next" />
                                    </fieldset>
                                    
                                    <fieldset id="step2">
                                        <h2 class="fs-title">Company Image</h2>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label class="form-label">Company Revenue</label>
                                                <input type="text" name="revenue" id="revenue" class="form-control required">  
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Balance Sheet File</label>
                                                <input type="file" name="balancesheet" id="balancesheet" class="form-control">  
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Company Video</label>
                                                <input type="file" name="companyvideo" id="companyvideo" class="form-control">  
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Company Youtube Link</label>
                                                <input type="text" name="youtubelink" id="youtubelink" class="form-control">  
                                            </div>
                                        </div>
                                        <input type="button" name="previous" id="previous1" class="previous action-button" value="Previous" />
                                        <input style="float:right;" type="button" id="steptwo" name="next" class="next action-button" value="Next" />
                                    </fieldset>
                                    
                                    <fieldset id="step3">
                                        <h2 class="fs-title">Portfolio</h2>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label class="form-label">Category</label>
                                                <select id="category" name="categoryid" class="form-control">
                                                    <option value="">-- Select Category --</option>
                                                    @foreach ($categories as $data)
                                                        <option value="{{ $data->id }}" {{ old('categoryid')==$data->id ? 'selected' : ''  }}>{{ $data->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Subcategory</label>
                                                <select id="parent_category" class="form-control" name="subcategoryid">
                                                    <option value="">-- Select Sub Category --</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="formFile">Plan</label>
                                                    <select id="parent_plan" class="form-control" name="planid">
                                                        <option value="">-- Select a Plan --</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="formFile">Technology</label>
                                                    <select id="parent_technology" class="form-control" name="techid">
                                                        <option value="">-- Select a Technology --</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Name of the Project</label>
                                                <input type="text" name="nameoftheproject" id="nameoftheproject" class="form-control required">  
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Project Photos</label>
                                                <input type="text" name="projectphoto" id="projectphoto" class="form-control">  
                                            </div>
                                            <div class="row pt-3">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Project Description</label>
                                                    <textarea class="form-control" name="projectdescription" id="projectdescription" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Project duration</label>
                                                <input type="text" name="projectduration" id="projectduration" class="form-control required">  
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Project category</label>
                                                <input type="text" name="projectcategory" id="projectcategory" class="form-control">  
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Project Subcategory</label>
                                                <input type="text" name="projectsubcategory" id="projectsubcategory" class="form-control">  
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Project Cost</label>
                                                <input type="text" name="projectcost" id="projectcost" class="form-control required">  
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label">Picture, video</label>
                                                <input type="file" name="picturevideo" id="picturevideo" class="form-control">  
                                            </div>
                                            <div class="row pt-3">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Other Information</label>
                                                    <textarea class="form-control" name="otherinfo" id="otherinfo" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="previous"  id="previous2" class="previous action-button" value="Previous" />
                                        {{-- <input style="float:right;" type="button" id="stepthree" name="next" class="next action-button" value="Next" /> --}}
                                        {{-- <input style="float:right;" type="submit" id="stepthree" name="submit" class="submitbutton" value="Submit" /> --}}
                                        <input style="float:right;" type="submit" id="stepthree" name="submit" class="submitbutton companysubmit" value="Submit" />
                                    </fieldset>
                                    
                                    {{-- <fieldset id="step4">
                                        <h2 class="fs-title">Upload Document</h2>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Upload File: </label>
                                            <div class="col-sm-5">
                                                <input type="file" name="uploadFile">
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <a href = "#" style="text-decoration: none;" class="terms_text">
                                                    <label style="padding-left: 30px;" class="checkstyle">I have read, agree and accept the terms and conditions</label>
                                                    <input type="checkbox" id="termscls" name="termsclsname">
                                                    <span class="checkmark"></span>
                                                </a>
                                                <label id="temsandconderror" style="color:red;display:none;">Please Accept Terms & Conditions</label>
                                            </div>
                                        </div>
                                        <input type="button" name="previous" id="previous3" class="previous action-button" value="Previous" />
                                        <input style="float:right;" type="submit" id="stepfour" name="submit" class="submitbutton" value="Submit" />
                                    </fieldset> --}}
                                    <div class="loader" id="loadingmessage" style="display:none;"></div>
                                </form>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </div>
</div>
<script>
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
</script>

<script>
    jQuery(".companysubmit").on("click", function(){
        // var categoryid = jQuery(this).val();
        // console.log('hello ji');
        var companyname = $("#companyname").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var website = $("#website").val();
        var empcount_min = $("#empcount_min").val();
        var empcount_max = $("#empcount_max").val();
        var no_ofoffice = $("#no_ofoffice").val();
        var introduction = $("#introduction").val();
        var revenue = $("#revenue").val();
        var balancesheet = $("#balancesheet").val();
        var companyvideo = $("#companyvideo").val();
        var youtubelink = $("#youtubelink").val();
        var categoryid = $("#categoryid").val();
        var subcategoryid = $("#subcategoryid").val();
        var planid = $("#planid").val();
        var techid = $("#techid").val();
        var nameoftheproject = $("#nameoftheproject").val();
        var projectphoto = $("#projectphoto").val();
        var projectdescription = $("#projectdescription").val();
        var projectduration = $("#projectduration").val();
        var projectcategory = $("#projectcategory").val();
        var projectsubcategory = $("#projectsubcategory").val();
        var projectcost = $("#projectcost").val();
        var picturevideo = $("#picturevideo").val();
        $.ajax({
            url:'{{ route("companyusers.store") }}',
            method:'POST',
            dataType:"json",
            data: {
                "_token": "{{ csrf_token() }}",
                companyname : companyname,
                email : email,
                password : password,
                website : website,
                empcount_min : empcount_min,
                empcount_max : empcount_max,
                no_ofoffice : no_ofoffice,
                introduction : introduction,
                revenue : revenue,
                balancesheet : balancesheet,
                companyvideo : companyvideo,
                youtubelink : youtubelink,
                categoryid : categoryid,
                subcategoryid : subcategoryid,
                planid : planid,
                techid : techid,
                nameoftheproject : nameoftheproject,
                projectphoto : projectphoto,
                projectdescription : projectdescription,
                projectduration : projectduration,
                projectcategory : projectcategory,
                projectsubcategory : projectsubcategory,
                projectcost : projectcost,
                picturevideo : picturevideo,
            },
            success:function(response){
                // alert('response',response);
                window.location.href = '{{ route("companyusers.index") }}';
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
</script>
@endsection
