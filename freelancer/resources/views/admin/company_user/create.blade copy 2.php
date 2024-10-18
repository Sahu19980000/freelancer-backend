@extends('admin.layouts.master')
<!-- Stylesheets -->
<link rel="stylesheet" href="{{ asset('multiform/css/reset.min.css') }}">
<link rel="stylesheet" href="{{ asset('multiform/css/style.css') }}">
<script src="{{ asset('multiform/js/jquery.validate.js') }}"></script> 

<script src="{{ asset('multiform/code.jquery.com/jquery-3.4.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('multiform/cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js') }}"></script>

<script src="{{ asset('multiform/cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }}"></script>
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

.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('img/Spinner.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .5;
}

.error
{
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
        <div class="col-md-2"></div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Company User</h4>
                    </div>
                    {{-- <div class="text-start">
                        <a href="{{ route('companyusers.index') }}" class="btn btn-primary btn-sm ms-4" id="addRow">Back</a>
                    </div>
                    <hr /> --}}
                    {{-- <form action="{{ route('companyusers.store') }}" method="POST" id="settings"
                        enctype="multipart/form-data" class="form theme-form dark-inputs">
                        @csrf

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput5">Name</label>
                                        <input class="form-control btn-pill" name="company_name"
                                            id="exampleFormControlInput5" type="text" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput5">Email</label>
                                        <input class="form-control btn-pill" name="company_email"
                                            id="exampleFormControlInput5" type="email" placeholder="Enter Email Address">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput5">Join as</label>
                                        <select class="form-select input-air-primary digits" id="exampleFormControlSelect17"
                                            fdprocessedid="b0n8th" name="joinas">
                                            <option value="Company" selected>Company</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput5">Country</label>
                                        <select class="form-select input-air-primary digits" id="exampleFormControlSelect17"
                                            fdprocessedid="b0n8th" name="country">
                                            <option> -- Select --</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Åland Islands">Åland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                            </option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic
                                                Republic of The</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                            </option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories
                                            </option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
                                                Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                            </option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                                People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic
                                                Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The
                                                Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                            </option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                            </option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The
                                                Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and
                                                The South Sandwich Islands</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of
                                            </option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor
                                                Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-3">

                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput5">Set Password</label>
                                        <input class="form-control btn-pill" name="password"
                                            id="exampleFormControlInput5" type="password" placeholder="Enter Password">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <button class="btn btn-primary me-3" type="submit">Submit</button>
                        </div>
                    </form> --}}
                   
                    <!-- multistep form -->
      <form class="form-horizontal form" id="msform" method="POST" action="#" enctype="multipart/form-data">
        <!-- progressbar -->
        <ul id="progressbar">
          <li class="active">Step One</li>
          <li>Step Two</li>
          <li>Step Three</li>
          <li>Final Step</li>
        </ul>
        
        <div id="sucessmsg" style="display:none;"><h2 class="fs-subtitle" style="color: #dc3c52; font-size:22px; text-align:center;">Form Submitted Successfully</h2></div>
		<div id="errormsg" style="display:none;"><h2 class="fs-subtitle" style="color: #dc3c52; font-size:22px; text-align:center;">Oops.. Something wrong.</h2></div>
        
        <!-- fieldsets -->
        <fieldset id="step1">
			
			
		<div align="center">
			<h3 class="fs-subtitle">Multi Step form</h3>
			
		</div>		
		   
          <h2 class="fs-title">Personal Details</h2>
        
         <div class="form-group required">
          <label class="control-label col-sm-2">First Name: </label>
          <div class="col-sm-10">
          <input type="text" name="firstname"/>
         </div>
         </div>
         
         <div class="form-group required"> 
          <label class="control-label col-sm-2">Last Names: </label>
          <div class="col-sm-10">
          <input type="text" name="lastname" />
         </div>
         </div>
                  
         <div class="form-group required">  
          <label class="control-label col-sm-2">Gender:</label>
          <div class="col-sm-10">
          <label class="checkstyle">Male
		  <input type="radio" name="gender" value="Male">
		  <span class="checkmark"></span>
		  </label>
		  
		  <label class="checkstyle">Female
		  <input type="radio" name="gender" value="Female">
		  <span class="checkmark"></span>
		  </label>
		  
		  <label class="checkstyle">Other
		  <input type="radio" name="gender" value="Other">
		  <span class="checkmark"></span>
		  </label>
		  <label for="gender" class="error" generated="true"></label>
          </div>
          </div>
          
        <input style="float:right;" type="button" id="stepone" name="next" class="next action-button" value="Next" />
         
        </fieldset>
        
        <fieldset id="step2">
			
			<h2 class="fs-title">Contact Information</h2>
			
		<div class="form-group required">
          <label class="control-label col-sm-2">Email: </label>
          <div class="col-sm-10">
          <input type="text" name="email"/>
         </div>
         </div>
			
         <div class="form-group required">
          <label class="control-label col-sm-2">Mobile Number: </label>
          <div class="col-sm-10">
          <input type="text" name="mobilenumber"/>
         </div>
         </div> 
          
       
          <input type="button" name="previous" id="previous1" class="previous action-button" value="Previous" />
          <input style="float:right;" type="button" id="steptwo" name="next" class="next action-button" value="Next" />
        </fieldset>
        
        
        <fieldset id="step3">
          	
          <h2 class="fs-title">Address Information</h2>
          
          <div class="form-group required">
          <label class="control-label col-sm-2">Address: </label>
          <div class="col-sm-10">
          <input type="text" name="address"/>
         </div>
         </div>
         
         <div class="form-group required">
          <label class="control-label col-sm-2">Postal Code: </label>
          <div class="col-sm-10">
          <input type="text" name="postalcode"/>
         </div>
         </div>
         
         <div class="form-group required">
          <label class="control-label col-sm-2">City Name: </label>
          <div class="col-sm-10">
          <input type="text" name="cityname"/>
         </div>
         </div>
      
          
          <input type="button" name="previous"  id="previous2" class="previous action-button" value="Previous" />
          <input style="float:right;" type="button" id="stepthree" name="next" class="next action-button" value="Next" />
        </fieldset>
        
        
        <fieldset id="step4">
			
          	
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
			  <label style="padding-left: 30px;" class="checkstyle">I have read, agree and accept the terms and conditions
			  <input type="checkbox" id="termscls" name="termsclsname">
			  <span class="checkmark"></span></a>
			  </label>
			  <label id="temsandconderror" style="color:red;display:none;">Please Accept Terms & Conditions</label>
          </div>
          </div>
          
          <input type="button" name="previous" id="previous3" class="previous action-button" value="Previous" />
		  
		  <input style="float:right;" type="submit" id="stepfour" name="submit" class="submitbutton" value="Submit" />

        </fieldset>
       
		<div class="loader" id="loadingmessage" style="display:none;"></div>
      </form>

                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>  
  
@endsection
