@extends('LTS.layouts.main')
@section('content-header')

   <div class="container-fluid">
    <div class="row column_title">
       <div class="col-md-12">
          <div class="page_title">
             <h2>Client Management</h2>
          </div>
       </div>
    </div>
    <!-- row -->
    <div class="row column1">
       <div class="col-md-12">
          <div class="white_shd full margin_bottom_30">
             <div class="full graph_head">
                <div class="heading1 margin_0">
                   <h2>Add Client </h2>
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
                  <nav class="navbar navbar-light bg-light">
                   <div class="d-grid gap-2 d-md-flex">
                     <a class="btn btn-danger text-white" href="{{ route('dashboard') }}" role="button">Back</a>
                   </div>     
                </div>
    <div class="form-group">
     <div class="col ms-1 me-2 mt-3">  
         <div class="row g-3">
          <Form action="{{route('addclinetstore')}}"  method="POST">
            @csrf
           <div class="col-12">
              <label for="text" class="form-label"> Name <span style="color: red">*</span></label>
                <input type="text" class="client_name form-control" name="client_name" id="client_name" placeholder=" Enter the Name" required>
                </div><br>
                <div class="col-12">
                   <label for="text" class="form-label">Phone no. <span style="color: red">*</span></label>
                     <input type="text" class="client_phone form-control"  name="client_phone" id="client_phone" maxlength="10" placeholder="Enter the Phone No" required>
                 </div><br>
                <div class="col-12">
                  <label for="text" class="form-label"> Address<span style="color: red">*</span></label>
                    <input type="text" class="client_address form-control" name="client_address" id="client_address" placeholder=" Enter the Address" required>
                </div><br>
                <div class="col-12">
                    <label for="pincode" class="form-label">Pincode <span style="color: red">*</span></label>
                       <input type="text" class="pin_code form-control" id="pin_code" name="pin_code"  maxlength="6" placeholder="Enter the Pincode" required> 
                </div><br>
                <div class="col-12">
                  <label for="country" class="form-label">Country <span style="color: red">*</span></label>
                    <select name="country"  id="country" class="country form-control">
                      <option value="">Select Country first</option>
                    </select>   
                </div><br>
                <div class="col-12">
                        <label for="inputState" class="form-label">State <span style="color: red">*</span></label>
                        <select  name="region" id="region" class="region form-control">
                          <option value="">Select State</option>
                        </select>
                </div><br>
                <div class="col-12">
                   <label for="inputCity" class="form-label">City <span style="color: red">*</span></label>
                     <select  name="city" id="city" class="city form-control">
                      <option value="">Select City</option>
                </select>
                </div><br>
              
            <div class="col-12">
               <label for="text" class="form-label">GST No.<span style="color: red">*</span></label>
                   <input type="text" class="gst form-control" placeholder="Enter the GST"  name="gst" id="gst" required>
            </div>
                <div class="col-12">
                <label for="text" class="form-label">PAN No.<span style="color: red">*</span></label> 
                    <input type="text" class="pan_card form-control"   placeholder="Enter the PAN" name="pan_card"  id="pan_card" required>
                </div><br>

            <div class="col-12">
            <label for="text" class="form-label"> Concerned Person Name <span style="color: red">*</span></label>
                <input type="text" class="concerned_name form-control" placeholder="Enter the Name" id="concerned_name" name="concerned_name" required>
            </div><br>

            <div class="col-12">
            <label for="text" class="form-label">Concerned Person Phone no. <span style="color: red">*</span></label>
                <input type="text" class="concerned_person_phone form-control"  maxlength="10" id="concerned_person_phone"  name="concerned_person_phone" placeholder="Enter the Phone No" required>
            </div><br>
            <div class="col-12"> 
            <label for="country" class="form-label">SMS <span style="color: red">*</span></label></br>
            <select name="sms" class="sms  form-control select_type" id="sms">
                <option selected>Select</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select> 
            </div><br>

                <div class="col-12"> 
                    <label for="country" class="form-label">Other CRM ID <span style="color: red">*</span></label></br>
                    <select name="othercrmid" class="othercrmid  form-control select_type" id="othercrmid">
                        <option selected>Select</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    </div><br>
                <div class="col-4">
                  <button type="submit" id="submit"   class="btn btn-primary add_client">Add</button>
                </div>
             </div>
          </div>
        </form>
        </div>
    </div>
 </div>
 
@endsection
@section('scripts')
<script type="text/javascript">
$(document).ready(function(){

    $.ajaxSetup({
                     headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   }
               });  
            
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
                 regioncode +
                    "&key=" +
                    BATTUTA_KEY +
                    "&callback=?";
                  $.getJSON(url, function(data) {
                    console.log(data);
                    $("#city option").remove();
                    $('#city').append('<option value="">Please select your city</option>');
                    $.each(data, function(index, value) {
                      regioncode +
                      "/search/?city=" +
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

            });
            
</script>
@endsection