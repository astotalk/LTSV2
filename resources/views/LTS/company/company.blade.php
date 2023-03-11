@extends('LTS.layouts.main')
@section('content-header')
    <!-- Start dashboard inner -->
    <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Company</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head ">
                                 <div class="heading1 margin_0">
                                    <h2>Company Info</h2>
                                 </div>
                              </div>
      <div class="container py-5">
         <div class="row">
            <div class="col-md-12">
            @if(session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                @endif
                <div id="success_message"></div>
<div class="card mt-3">
<div class="card-header">
  <!-- SEARCH BY TASK START -->
  <nav class="navbar navbar-light bg-light">
     <form method="get"  class="form-inline">
     <a class="btn btn-danger text-white" href="{{route('dashboard')}}" role="button">Back</a> &nbsp;&nbsp;
     <!-- <input  type="search"  name="search" id="" class="form-control" placeholder="Search Department"">
           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
     </form>
     @if (is_null($companyname))
                                    <a href="#" type="hidden" data-bs-toggle="modal"
                                        data-bs-target="#myModal" id=""
                                        class="btn btn-primary float-end btn-sm" aria-hidden="true"> + Add Company</a>
                                @endif 
</div>
                              
               
                   <!--table start-->
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead class="thead-dark ">
                           <tr>
                              <th><b>S.No.</b></th>
                              <th><b>Company Name</b></th>
                              <th><b>GST No.</b></th> 
                              <th style="text-align: center;"><b> Action</b></th>
                           </tr>
                        </thead>
                        
                        <tbody>
                        @if(!empty($company))
                          @foreach($company as $master_com)
                           <tr>
                           <th>{{$master_com->id}}</th>
                           <th>{{ucfirst($master_com->company_name)}}</th>
                           <th>{{$master_com->gst}}</th>

                                 <td>
                            <button type="button"  value="{{$master_com->id}}" class="btn btn-primary editbtn btn-sm">Edit</button> &nbsp;
                                 </td>
                           </tr>
                           @endforeach
                           @endif
                        </tbody>
                        
                     </table>
                  </div>  
</div>            
            <!--------Card close-->
          </div>
      </div>
   </div>
 <!--------Container close-->
 </div>
 </div>
 <!--row close-->
   </div>
   </div>
 <!-- Edit Modal HTML -->    
           
 <div class="modal fade" id="EditModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
 <Form    action="{{url('/company/update/')}}" method="POST"  id="editForm">
 
  @method('PUT')  
            @csrf       

<input type="hidden" id="cmp_id" name="cmp_id" />

  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title"style="color:Orange;"> Edit Company Details</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <ul id="savefrom_errList"></ul>
        <div class="form-group mp-3">
           <div class="form-row">
              <div class="col ">  
                    <label for="company_name">Company Name.* </label>
                    <input type="text" class="company_name form-control" name="company_name" id="company_name" required/>
                  </div>
                 <div class="col">  
               <label for="phone">Phone No.*</label>
              <input type="text" class="phone form-control" name="phone"  maxlength="10" id="phone" value="" required/>    
            </div>
           </div>
        </div>
        <div class="form-row">
          <div class="col ">  
              <label for="">Email.* </label>
              <input type="text" class="email form-control" name="email"  id="email" placeholder="Please Enter Email Id"  required/>
           </div>
          <div class="col ">  
              <label for="register_number">Incorporation No.*</label>
              <input type="text" class="incorporation_num form-control" maxlength="10" name="incorporation_num"  id="incorporation_num1" placeholder="Enter Incorporation No" required>
            </div>
           </div><br>
           <div class="form-row"> 
            <div class="col ">  
              <label for="pan_card">Pan Card.*</label>
              <input type="text" class="pan_card form-control" name="pan_card" id="pan_card"   placeholder="Please Enter Pan Card No." required/>
            </div>
            <div class="col ">  
              <label for="gst">GST No.*</label>
              <input type="text" class="gst form-control" name="gst"  id="gst" required/>
            </div>
            </div><br>
           <div class="form-row">
            <div class="col ">  
                   <label for="date">Date of Incorporation no.* </label>
                   <input type="dates"  class="date form-control"   id="dates"  name="dates" required/>
            </div>
            <div class="col">  
                   <label for="">Pin Code.* </label>
                   <input type="text"  class="pin_code form-control"  id="pin_code"  maxlength="6"  name="pin_code" required/>
            </div>
           </div><br>
           <div class="form-row">
              <div class="col ">  
              <label for="">Registered Address.*</label>
              <input type="text" class="register_address form-control"   id="register_address" placeholder="Please Enter Registered Address" name="register_address" required/>
            </div>
            </div><br>
           <div class="form-row">
              <div class="col ">  
                 <label for="country">Country.*</label>
                 <select id="country1" name="country"class="country form-control" >  
                  <option value="12">INDIA</option>
                  <option value="country1">Country</option>
                  
              </select>
            </div>
            <div class="col ">  
                <label for="">State.*</label>
                <select  name="region" id="region1" class="region form-control">
                  <option value="DELHI">DELHI</option>
                  <option value="region1">State</option>
              </select>
            </div>
            <div class="col ">  
                   <label for="">City.* </label>
                   <select  name="city" id="city1" class="city form-control">
                    <option value="DELHI">DELHI</option>
                    <option value="city1">City</option>
                  </select>
            </div>
           </div>
            <br>
           <br>
            <div class="form-row">
                <div class="col ">  
                <img src="{{url('lts_assets/images/layout_img/latech.jfif')}}" class="img-circle elevation-2" alt="User Image" style="height: 33px;margin-left: -1px;padding: -1px;">
                <label for="">Upload Logo.*</label>
                 <input type="file" class="file_upload form-control"  name="file_upload"  id="file_upload1">
            </div>
              <div class="col ">  
              <label for="">Website *</label>
              <input type="text" class="website form-control" name="website" id="website"  value=""  required/>
            </div>
           </div><br>
<!-- //////////////////////End  Edit Modal///////////////////////// -->

           <!-- /////////////////////////////Concern Person Details///////////////////////////////// -->

<h5 class="modal-title" id="exampleModal">Concern Person Details :</h5><br>

                     <div class="form-row">
                     <div class="col ">  
                        <label for="">Name.*</label>
                        <input type="text" class="name form-control" name="name"   id="name" required/>
                        </div>
                        <div class="col ">  
                           <label for="">Desigantion * </label>
                           <select name="desigantion" class="desigantion  form-control"  id="desigantion1" data-live-search="true"  data-size="8" tabindex="null">
                           @foreach($List as $row)
                           <option value="{{$row->id}}">{{$row->desigantion}}</option>
                           @endforeach
                           </select>
                           </div>
                        </div><br>
                        <div class="form-row">
                           <div class="col">  
                           <label for="">Email Id.*</label>
                           <input type="text" class="email_id form-control" name="email_id"   id="email_id" placeholder="Please Enter Email" required/>
                           </div>
                           <div class="col">  
                              <label for="">Phone No.*</label>
                              <input type="text" class="phone_number form-control" name="phone_number"   id="phone_number" maxlength="10" placeholder="Please Enter Phone" required/>
                        </div>
                        </div><br>

   <!-- ///////////////////////////// End Concern Person Details///////////////////////////////// -->

    <!-- ///////////////////////////// Start BANK DETAILS  ///////////////////////////////// -->
    <h5 class="modal-title" id="exampleModal">Company Bank Detail :</h5><br>
             <div class="container">
               <div class="form-row">
               <div class="col-md-1"></div> 
                        <table class="table table-bordered table-hover" id="dynamic_field"><tr>
                          <td><input type="text" name="bank_name" placeholder="Enter Bank Name"   id="bank_name1" class="bank_name form-control"/></td>
                          <td><input type="text" name="beneficiary_name" placeholder="Beneficiary Name"  id="beneficiary_name1" class="beneficiary_name form-control"/></td>
                          <td><input type="text" name="account_number" placeholder="Account Number"  id="account_number1" class="account_number form-control"/></td>
                          <td><input type="text" name="ifsc_code" placeholder="Enter your IFSC Code"  id="ifsc_code1" class="ifsc_code form-control"/></td>
                          <td><input type="text" name="branch_name" placeholder="Enter City Name"  id="branch_name1" class="branch_name form-control"/></td>
                         </tr>
                        </table>       
                <div class="col-md-1"></div> 
                   </div>
               <!-- //////////////////////////////////End Details////////////////////// -->
              </div>
           </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" id="submit"    class="btn btn-primary edit_comapany">Update</button>
      </div>
    </div>
  </div>
 </form> 
</div>

   <!-- The Modal -->
   <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModalLabel" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <Form    action="{{route('companystore')}}"  method="POST">
 @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Add Company</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
               <div class="modal-body">	
                  <div class="form-group">               
                     <div class="row">
                        <div class="col-4">
                           <label for="inputname" class="form-label"> Company Name <span style="color: red">*</span></label>
                              <input type="text" class="company_name form-control" name="company_name"  placeholder="Enter Company Name" required>
                        </div>

                        <div class="col-4">
                           <label for="inputphone" class="form-label"> Phone Number <span style="color: red">*</span></label>
                              <input type="text" class="phone form-control" maxlength="10" name="phone" placeholder="Enter Phone No" required>
                        </div>

                        <div class="col-4">
                           <label for="inputemail" class="form-label"> E-mail Address <span style="color: red">*</span></label>
                              <input type="text" class="email form-control" name="email" placeholder="Enter  E-mail" required>
                        </div>
                     </div>
                  </div>

                   <div class="form-group">
                     <div class="row">
                       <div class="col-4">
                        <label for="inputphone" class="form-label">Incorporation No <span style="color: red">*</span></label>
                           <input type="text" class="incorporation_num form-control" maxlength="10" name="incorporation_num"  placeholder="Enter Incorporation No" required>
                       </div>

                      <div class="col-4">
                        <label for="inputphone" class="form-label"> GST No <span style="color: red">*</span></label>
                           <input type="text" class="gst form-control" maxlength="10" name="gst" placeholder="Enter GST" required>
                      </div>

                      <div class="col-4">
                        <label for="inputemail" class="form-label">PAN No <span style="color: red">*</span></label>
                           <input type="text" class="pan_card form-control"  name="pan_card" placeholder="Enter PAN" required>
                        </div>
                     </div> 
                  </div>

                  <div class="form-group">
                        <label for="date" class="form-label">Date of Inorporation <span style="color: red">*</span></label>
                           <input type="dates" class="dates  form-control" name="dates" required>
                  </div>

                  <div class="form-group">
                        <label for="inputpincode" class="form-label">Pincode</label>
                           <input type="text" class="pin_code form-control" name="pin_code" placeholder="Enter Pincode" required>
                  </div>

                  <div class="form-group">
                        <label for="inputptext" class="form-label">Registered Address <span style="color: red">*</span></label>
                           <input type="text" class="register_address form-control" name="register_address" placeholder="Enter Address"  required>
                  </div>
                  
                  <div class="form-group">
                     <div class="row g-3">
                            <div class="col-4 mt-3"> 
                                <label for="country" class="form-label">Country<span style="color: red">*</span></label></br>
                                <select id="country"  name="country"    class='country form-control'><option value="">-- Country --</option></select>
                            </div>

                            <div class="col-4">
                                <label for="inputState" class="form-label">State<span style="color: red">*</span></label>
                                <select  name="region" id="region"  class='region form-control'><option value="">-- State --</option></select>
                      </select>
                            </div>
                      
                                                           
                            <div class="col-4">
                                <label for="inputCity" class="form-label">City<span style="color: red">*</span></label>
                                <select  id="city" name="city"   class='city form-control'><option value="">-- City --</option></select>
                   </select>
                            </div>
                      </div></div>
                     </br>
               <div class="form-group">
                     <div class="row">
                        <div class="col-12 ">
                           <div class="input-group ">
                           <img src="{{url('lts_assets/images/layout_img/latech.jfif')}}" class="img-circle elevation-2" alt="User Image" style="height: 33px;margin-left: -1px;padding: -1px;">
                           <input type="file" class="file_upload form-control"  name="file_upload"  id="file_upload"  >
                                 <button class="btn btn-outline-secondary" type="button" id="button-addon2">Logo</button>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="form-group">
                     
                     <label for="inputwebsite" class="form-label">Website <span style="color: red">*</span></label>
                        <input type="text" class="website form-control"  name="website" placeholder="Enter Website" required>
                        </div>
                        <div class="form-group">
                        <select name="desigantion" class="desigantion  form-control"  id="desigantion" data-live-search="true"  data-size="8" tabindex="null">
                        @foreach($List as $row)
                        <option value="{{$row->id}}">{{$row->desigantion}}</option>
                        @endforeach
                        </select>
                         </div>
                          
   
                  <div class="form-group">
                     <legend class="scheduler-border mt-2">Concern Person Details</legend>
                           <label for="desigantion" class="form-label"> Name <span style="color: red">*</span></label>
                              <input type="text" class="name form-control" name="name" placeholder="Enter Name" required>
                  </div>
                              
                  <div class="form-group">
                        <label for="inputemail" class="form-label">E-mail Address <span style="color: red">*</span></label>
                           <input type="email" class="email_id form-control" name="email_id" placeholder="Enter E-mail" required>
                  </div>

                  <div class="form-group">
                        <label for="inputphone" class="form-label"> Phone Number <span style="color: red">*</span></label>
                           <input type="text" class="phone_number form-control" name="phone_number" maxlength="10" placeholder="Enter Phone No"  required>
                  </div>

                 

                  <div class="form-group">
                     <legend class="scheduler-border mt-2">Banking Details</legend></br>
                     <label for="name" class="form-label">Account Holder Name <span style="color: red">*</span></label>
                        <input type="text" class="beneficiary_name form-control" name="beneficiary_name" placeholder="Enter account holder name" required>
                  </div>

                  <div class="form-group">
                     <div class="row">
                           <div class="col-3">
                              <label for="inputwebsite" class="form-label">Account Number <span style="color: red">*</span></label>
                              <input type="text" class="account_number form-control" name="account_number" placeholder="Enter account no." required>
                           </div>

                           <div class="col-3">
                              <label for="inputwebsite" class="form-label">Bank Name <span style="color: red">*</span></label>
                              <input type="text" class="bank_name form-control" name="bank_name" placeholder="Enter Bank name" required>
                           </div>
            
                           <div class="col-3">
                              <label for="inputwebsite" class="form-label">Branch Name <span style="color: red">*</span></label>
                                 <input type="text" class="branch_name form-control" name="branch_name" placeholder="Enter Branch name" required>
                           </div>

                           <div class="col-3">
                                 <label for="inputwebsite" class="form-label">IFSC Code <span style="color: red">*</span></label>
                                 <input type="text" class="ifsc_code form-control"  name="ifsc_code" placeholder="Enter IFSC Code" required>
                           </div>
                     </div>
                  </div>
               </div>
               
            
               <div class="modal-footer">
                <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
               <input type="submit" class="btn btn-info" value="Add">
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
@section('scripts')
 <script>
$(document).ready(function (){
var selectedCountry = (selectedRegion = selectedCity = "");
  // This is a demo API key for testing purposes. You should rather request your API key (free) from http://battuta.medunes.net/
  var BATTUTA_KEY = "00000000000000000000000000000000";
  // Populate country select box from battuta API
  url =
    "https://battuta.medunes.net/api/country/all/?key=" +
    BATTUTA_KEY +
    "&callback=?";

  // EXTRACT JSON DATA.
  $.getJSON(url, function(data) {
    console.log(data);
    $.each(data, function(index, value) {
      // APPEND OR INSERT DATA TO SELECT ELEMENT.
      $("#country").append(
        '<option value="' + value.code + '">' + value.name + "</option>"
      );
    });
  });
  // Country selected --> update region list .
  $("#country").change(function() {
    selectedCountry = this.options[this.selectedIndex].text;
    countryCode = $("#country").val();
    // Populate country select box from battuta API
    url =
      "https://battuta.medunes.net/api/region/" +
      countryCode +
      "/all/?key=" +
      BATTUTA_KEY +
      "&callback=?";
    $.getJSON(url, function(data) {
      $("#region option").remove();
      $('#region').append('<option value="">Please select your region</option>');
      $.each(data, function(index, value) {
        // APPEND OR INSERT DATA TO SELECT ELEMENT.
        $("#region").append(
          '<option value="' + value.region + '">' + value.region + "</option>"
        );
      });
    });
  });
  // Region selected --> updated city list
  $("#region").on("change", function() {
    selectedRegion = this.options[this.selectedIndex].text;
    // Populate country select box from battuta API
    countryCode = $("#country").val();
    region = $("#region").val();
    url =
      "https://battuta.medunes.net/api/city/" +
      countryCode +
      "/search/?region=" +
      region +
      "&key=" +
      BATTUTA_KEY +
      "&callback=?";
    $.getJSON(url, function(data) {
      console.log(data);
      $("#city option").remove();
      $('#city').append('<option value="">Please select your city</option>');
      $.each(data, function(index, value) {
        // APPEND OR INSERT DATA TO SELECT ELEMENT.
        $("#city").append(
          '<option value="' + value.city + '">' + value.city + "</option>"
        );
      });
    });
  });
  // city selected --> update location string
  $("#city").on("change", function() {
    selectedCity = this.options[this.selectedIndex].text;
    $("#location").html(
      "Locatation: Country: " +
        selectedCountry +
        ", Region: " +
        selectedRegion +
        ", City: " +
        selectedCity
    );
  });    

         
$(document).on('click', '.editbtn', function(){
  var cmp_id = $(this).val();
  $('#EditModal').modal('show');
  var selectedCountry = (selectedRegion = selectedCity = "");
// This is a demo API key for testing purposes. You should rather request your API key (free) from http://battuta.medunes.net/
var BATTUTA_KEY = "00000000000000000000000000000000";
// Populate country select box from battuta API
url =
  "https://battuta.medunes.net/api/country/all/?key=" +
  BATTUTA_KEY +
  "&callback=?"
      // EXTRACT JSON DATA.
      $.getJSON(url, function(data) {
        console.log(data);
        $.each(data, function(index, value) {
          // APPEND OR INSERT DATA TO SELECT ELEMENT.
          $("#country1").append(
            '<option value="' + value.code + '">' + value.name + "</option>"
          );
        });
      });
      // Country selected --> update region list .
      $("#country1").change(function() {
        selectedCountry = this.options[this.selectedIndex].text;
        countryCode = $("#country1").val();
        // Populate country select box from battuta API
        url =
          "https://battuta.medunes.net/api/region/" +
          countryCode +
          "/all/?key=" +
          BATTUTA_KEY +
          "&callback=?";
        $.getJSON(url, function(data) {
          $("#region1 option").remove();
          $('#region1').append('<option value="">Please select your region</option>');
          $.each(data, function(index, value) {
            // APPEND OR INSERT DATA TO SELECT ELEMENT.
            $("#region1").append(
              '<option value="' + value.region + '">' + value.region + "</option>"
            );
          });
        });
      });
      // Region selected --> updated city list
      $("#region1").on("change", function() {
        selectedRegion = this.options[this.selectedIndex].text;
        // Populate country select box from battuta API
        countryCode = $("#country1").val();
        region = $("#region1").val();
        url =
          "https://battuta.medunes.net/api/city/" +
          countryCode +
          "/search/?region=" +
          region +
          "&key=" +
          BATTUTA_KEY +
          "&callback=?";
        $.getJSON(url, function(data) {
          console.log(data);
          $("#city1 option").remove();
          $('#city1').append('<option value="">Please select your city</option>');
          $.each(data, function(index, value) {
            // APPEND OR INSERT DATA TO SELECT ELEMENT.
            $("#city1").append(
              '<option value="' + value.city + '">' + value.city + "</option>"
            );
          });
        });
      });
      // city selected --> update location string
      $("#city1").on("change", function() {
        selectedCity = this.options[this.selectedIndex].text;
        $("#location").html(
          "Locatation: Country: " +
            selectedCountry +
            ", Region: " +
            selectedRegion +
            ", City: " +
            selectedCity
        );
      });

        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

                    
            $.ajax({

                  type: "GET",
                  url: "/company/edit/"+cmp_id,
                  success: function (response){
                    // console.log(response.company.cmp_id);
                    $('#cmp_id').val(response.company.id);
                    $('#company_name').val(response.company.company_name);
                    $('#name').val(response.company.name);
                    $('#email').val(response.company.email);
                    $('#phone').val(response.company.phone);
                    $('#incorporation_num1').val(response.company.incorporation_num);
                    $('#pan_card').val(response.company.pan_card);
                    $('#dates').val(response.company.dates);
                    $('#gst').val(response.company.gst);
                    $('#register_address').val(response.company.register_address);
                    $('#country2').val(response.company.country);
                    $('#region2').val(response.company.region);
                    $('#city2').val(response.company.city);
                    $('#pin_code').val(response.company.pin_code);
                    $('#website').val(response.company.website);
                    $('#desigantion1').val(response.company.desigantion);
                    $('#email_id').val(response.company.email_id);
                    $('#phone_number').val(response.company.phone_number);
                    $('#bank_name1').val(response.company.bank_name);
                    $('#beneficiary_name1').val(response.company.beneficiary_name);
                    $('#account_number1').val(response.company.account_number);
                    $('#branch_name1').val(response.company.branch_name);
                    $('#ifsc_code1').val(response.company.ifsc_code);
      }
    });
  });
});            
 </script>
 @endsection
       



   
   




               