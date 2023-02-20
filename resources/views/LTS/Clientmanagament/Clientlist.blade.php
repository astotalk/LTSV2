
@extends('LTS.layouts.main')
@section('content-header')



<div class="midde_cont">
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
                <div class="full graph_head ">
                   <div class="heading1 margin_0">
                      <h2>Client List</h2>
                  </div>
                  

              </div>
             <div class="container py-5">
                <div class="row">
                  <div class="col-12">
                   <div id="success_message"></div>
                     <div class="card mt-3">
                     <div class="card-header">
<!-- SEARCH BY TASK START -->
                        <nav class="navbar navbar-light bg-light">

                            <form method="get"  class="form-inline">
                                <a class="btn btn-danger text-white" href="{{ route('dashboard') }}" role="button">Back</a> &nbsp;&nbsp;
                            <input  type="search"  name="search" id="" class="form-control" placeholder="Search Employee"  value= "{{$search}}">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    <div class="d-grid gap-2 d-md-flex">
                      <a class="btn btn-outline-success" tabindex="0" aria-controls="empTable" href="#"><span>Copy</span></a>
                        <a class="btn btn-outline-success" tabindex="0" aria-controls="empTable" href="#"><span>CSV</span></a>
                         <a class="btn btn-outline-success" tabindex="0" aria-controls="empTable" href="#"><span>Excel</span></a>
                          <a class="btn btn-outline-success" tabindex="0" aria-controls="empTable" href="#"><span>PDF</span></a>
                          <a class="btn btn-outline-success" tabindex="0" aria-controls="empTable" href="#"><span>Print</span></a>
                      </div>
                    </div><br>

                    <div class="modal fade" id="userShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Show Client</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            
                            <div class="card-body">
                              <p><strong>Name:</strong> <span id="client_name"></span></p>
                              <p><strong>Phone no:</strong> <span id="client_phone"></span></p>
                              <p><strong>GST NO:</strong> <span id="gst"></span></p>
                              <p><strong>Pan Card:</strong> <span id="pan_card"></span></p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>     
         
               
<!--table start-->
<div id="EditModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
       <div class="modal-content">
        <div class="form-group">
          <div class="col ms-1 me-2 mt-3">  
            <div class="row g-3">
            <Form    action="{{url('/clientlist/update/')}}" method="POST"  id="editForm">
                @method('PUT')  
                        @csrf  
                        <input type="hidden" id="id" name="id"/>
           <div class="col-12">
             <label for="text" class="form-label"> Name <span style="color: red">*</span></label>
               <input type="text" class="client_name form-control" name="client_name" id="client_name1" placeholder=" Enter the Name" required>
               </div><br>
               <div class="col-12">
                  <label for="text" class="form-label">Phone no. <span style="color: red">*</span></label>
                    <input type="text" class="client_phone form-control"  name="client_phone" id="client_phone1" maxlength="10" placeholder="Enter the Phone No" required>
                </div><br>
               <div class="col-12">
                 <label for="text" class="form-label"> Address<span style="color: red">*</span></label>
                   <input type="text" class="concerned_name form-control" name="client_address" id="client_address1" placeholder=" Enter the Address" required>
               </div><br>
               <div class="col-12">
                   <label for="pincode" class="form-label">Pincode <span style="color: red">*</span></label>
                      <input type="text" class="pin_code form-control" id="pin_code1" name="pin_code"  maxlength="6" placeholder="Enter the Pincode" required> 
               </div><br>
               <div class="col-12">
                 <label for="country" class="form-label">Country <span style="color: red">*</span></label>
                   <select id="country" name="country"  id="country1" class="country form-control">
                    <option value="1">Country</option>
                  
                   </select>   
               </div><br>
               <div class="col-12">
                       <label for="inputState" class="form-label">State <span style="color: red">*</span></label>
                       <select  name="region" id="region" class="region form-control">
                        <option value="Delhi">Delhi</option>
                      
                       </select>
               </div><br>
               <div class="col-12">
                  <label for="inputCity" class="form-label">City <span style="color: red">*</span></label>
                    <select  name="city" id="city" class="city form-control">
                      <option value="Delhi">Delhi</option>
               </select>
               </div><br>
             
           <div class="col-12">
              <label for="text" class="form-label">GST No.<span style="color: red">*</span></label>
                  <input type="text" class="gst form-control" placeholder="Enter the GST"  name="gst" id="gst1" required>
           </div><br>
               <div class="col-12">
               <label for="text" class="form-label">PAN No.<span style="color: red">*</span></label> 
                   <input type="text" class="pan_card form-control"   placeholder="Enter the PAN" name="pan_card"  id="pan_card1" required>
               </div><br>

           <div class="col-12">
           <label for="text" class="form-label"> Concerned Person Name <span style="color: red">*</span></label>
               <input type="text" class="concerned_name form-control" placeholder="Enter the Name" id="concerned_name1" name="concerned_name" required>
           </div><br>

           <div class="col-12">
           <label for="text" class="form-label">Concerned Person Phone no. <span style="color: red">*</span></label>
               <input type="text" class="concerned_person_phone form-control"  maxlength="10" id="concerned_person_phone1"  name="concerned_person_phone" placeholder="Enter the Phone No" required>
           </div><br>
           <div class="col-12"> 
           <label for="country" class="form-label">SMS <span style="color: red">*</span></label></br>
           <select name="sms" class="sms  form-control select_type" id="sms1">
               <option selected>Select</option>
               <option value="Yes">Yes</option>
               <option value="No">No</option>
           </select> 
           </div><br>

               <div class="col-12"> 
                   <label for="country" class="form-label">Other CRM ID <span style="color: red">*</span></label></br>
                   <select name="othercrmid" class="othercrmid  form-control select_type" id="othercrmid1">
                       <option selected>Select</option>
                       <option value="Yes">Yes</option>
                       <option value="No">No</option>
                   </select>
                   </div><br>
                   <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" id="submit"   class="btn btn-primary add_empolyee">Update</button>
                 </div>
                </div>
            </div>
          </form>
         </div>
        </div>
       </div>
     </div>
  </div>
</div>
{{-- ////////////////////////////////Client List Table////////////////////////////////// --}}

                     <div class="card-body">
                            <table class="table table-condensed table-bordered ">
                            <thead class="thead-dark ">
                                <tr>
                                    <th><b>S.No.</b></th>
                                    <th><b>Name</b></th> 
                                    <th><b>Phone No.</b></th>
                                    <th><b>GST No.</b></th> 
                                    <th><b>PAN No.</b></th>
                                    <th style="text-align: center;"> <b>Action</b></th>
                                </tr>
                                 </thead>
                                    <tbody>
                                    @if(!empty($clientmanagement))
                                    @foreach($clientmanagement as $clien_id)
                                    <tr> 
                                    <th>{{$clien_id->id}}</th>
                                    <th>{{$clien_id->client_name}}</th>
                                    <th>{{$clien_id->client_phone}}</th>
                                    <th>{{$clien_id->gst}}</th>
                                    <th>{{$clien_id->pan_card}}</th>
                                    <td>
                                        <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                        <li>
                                        <button type="button"  value="{{$clien_id->id}}" class="btn btn-primary editbtn btn-sm">Update</button>&nbsp;
                                        <button type="button"   data-url="{{ url('/clientlist/view', $clien_id->id) }}" id="show-user"   class="btn btn-danger  showbtn btn-sm">View</button>&nbsp;<br>                  
                                        <button type="button"  value="{{$clien_id->id}}" class="btn btn-danger sharebtn btn-sm">Deactive</button> &nbsp;
                                        </ul>
                                        </div>
                                    </td>   
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                              </div>
                              {{$clientmanagement->links()}}
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


@endsection
@section('scripts')
<script type="text/javascript">
 $(document).on('click', '.editbtn', function(){
      var id = $(this).val();
        $('#EditModal').modal('show');
              
      $.ajaxSetup({
               headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
            });
            $.ajax({
            type: "GET",
            url: "/clientlist/edit/"+id,
               success: function (response){
               //console.log("Hello world!");
               $('#id').val(response.clientmanagement.id);
               $('#client_name1').val(response.clientmanagement.client_name)   
               $('#client_phone1').val(response.clientmanagement.client_phone)    
               $('#client_address1').val(response.clientmanagement.client_address);
               $('#pin_code1').val(response.clientmanagement.pin_code)   
               $('#country1').val(response.clientmanagement.country)   
               $('#region1').val(response.clientmanagement.region)    
               $('#city1').val(response.clientmanagement.city);
               $('#gst1').val(response.clientmanagement.gst)
               $('#pan_card1').val(response.clientmanagement.pan_card)   
               $('#client_phone1').val(response.clientmanagement.client_phone)    
               $('#concerned_name1').val(response.clientmanagement.concerned_name);
               $('#sms1').val(response.clientmanagement.sms)
               $('#othercrmid1').val(response.clientmanagement.othercrmid)
              
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
                $(document).ready(function () {
       
       /* When click show user */
        $('body').on('click', '#show-user', function () {
          var userURL = $(this).data('url');
          $.get(userURL, function (data) {
              $('#userShowModal').modal('show');
              $('#id').text(data.id);
              $('#client_name').text(data.client_name);
              $('#client_phone').text(data.client_phone);
              $('#gst').text(data.gst);
              $('#pan_card').text(data.pan_card);
          })
       });
       
    });
            });
       
 </script>
  @endsection