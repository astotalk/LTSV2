          <!-- Edit Modal HTML -->                   
          <div id="EditModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
               <div class="modal-content">
               <Form    action="{{url('/employee/update/')}}" method="POST"  id="editForm">
                @method('PUT')  
                        @csrf      
                <input type="hidden" id="id" name="id"/>
                     <div class="modal-header">						
                        <h4 class="modal-title"  id="EditModal">Edit Employee Details</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">			
                           <div class="form-group">
                              
                    <div class="col ms-1 me-2 mt-3">              
                        <div class="row g-3">
                        <div class="col-4">
                                <label for="emp_name" class="form-label">Employee Name <span style="color: red">*</span></label>
                                <input type="text" class="name form-control" name="name" id="name1"   required>
                            </div>
                            <div class="col-4">
                                <label for="email" class="form-label">Email <span style="color: red">*</span></label>
                                <input type="text" class="email form-control" id="email1" name="email" required>
                            </div>

                            <div class="col-4">
                                <label for="text" class="form-label">Phone Number <span style="color: red">*</span></label>
                                <input type="text"  class="phone form-control"   id="phone1" maxlength="10" name="phone" required>
                            </div>
                            <div class="col-4">
                                <label for="text" class="form-label">Alternate Phone No <span style="color: red">*</span></label>
                                <input type="text"  class="alernate_number form-control"  id="alernate_number1"  maxlength="10" name="alernate_number" required>
                            </div>
                        </div>
                      <br>
                        <div class="row g-3">
                            <div class="col-4">
                                <label for="text" class="form-label">Father Name <span style="color: red">*</span></label>
                                <input type="text" class="father_name form-control"  id="father_name1" name="father_name" required>
                            </div>
                            <div class="col-4">
                                <label for="text" class="form-label">Father Phone No <span style="color: red">*</span></label>
                                    <input type="text" class="father_mobile form-control" name="father_mobile" id="father_mobile1" maxlength="10" placeholder="Enter Father Phone No" required>
                            </div>
                            <div class="col-4">
                                <label for="text" class="form-label">Father Occupation <span style="color: red">*</span></label>
                                    <input type="text" class="father_occupation form-control" maxlength="10"  name="father_occupation" id="father_occupation1" placeholder="Enter Father Occupation" required>
                            </div> 
                        </div>
                      <br>
                        <div class="row">
                            <div class="col">
                                <label for="text" class="form-label">Current Address <span style="color: red">*</span></label>
                                <input type="text" class="current_address form-control" name="current_address" id="current_address1" required>
                            </div>
                        </div> 
                        <br>
                        <div class="row g-3">
                            <div class="col-6 mt-3"> 
                                <label for="country" class="form-label">Country <span style="color: red">*</span></label><br>
                                <select id="country2" name="country_id"  class="country_id form-control" >  
                                  <option value="DELHI">Country</option>
                                 
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="inputState" class="form-label">State <span style="color: red">*</span></label>
                                <select  name="region_id" id="region2" class="region_id form-control">
                                  <option value="DELHI">DELHI</option>
                                
                              </select>
                            </div>
                        </div>
                    <br>
                        <div class="row g-3">
                            <div class="col-6">
                                <label for="inputCity" class="form-label">City <span style="color: red">*</span></label>
                                <select  name="city_id" id="city2" class="city_id form-control">
                                  <option value="DELHI">DELHI</option>
                              </select>
                            </div>
                            <div class="col-6">
                                <label for="pincode" class="form-label">Pincode <span style="color: red">*</span></label>
                                <input type="Pincode" class="form-control" id="Pincode"  maxlength="6" placeholder="Enter Pincode" required>
                            </div>
                        </div>
                     <br>                                                
                        <div class="row">
                            <div class="col">
                                <label for="text" class="form-label">Permanent Address <span style="color: red">*</span></label>
                                <input type="text"  class="permanent_address form-control"  name="permanent_address"  id="permanent_address1" required>
                            </div>
                        </div> 
                        <br>
                        <div class="row g-3">
                            <div class="col-6 mt-3"> 
                                <label for="country" class="form-label">Country<span style="color: red">*</span></label><br>
                                <select id="country3" name="country_id" class="country_id form-control" >   
                               </select>
                            </div>
                            <div class="col-6">
                                <label for="inputState" class="form-label">State<span style="color: red">*</span></label>
                                <select  name="region_id" id="region3" class="region_id form-control">
                            </select>
                            </div>
                        </div>
                        <br>
                        <div class="row g-3">
                            <div class="col-6">
                                <label for="inputCity" class="form-label">City<span style="color: red">*</span></label>
                                <select  name="city_id" id="city3" class="city_id form-control">
                             </select>
                            </div>
                            <div class="col-6">
                                <label for="pincode" class="form-label">Pincode <span style="color: red">*</span></label>
                                <input type="pin_code"   maxlength="6" class="pin_code form-control" id="pin_code1"  name="pin_code" required> 
                            </div>
                        </div>   
                    <br>    
                        <div class="row g-3">
                            <div class="col-4">
                                <label for="desigantion" class="form-label">Designation <span style="color: red">*</span></label>
                                <select name="desigantion" class="desigantion   form-control"  id="desigantion" data-live-search="true"  data-size="8" tabindex="null">
                                @foreach($DesignationList as $row)
                                <option value="{{$row->desigantion}}">{{$row->desigantion }}</option>
                                    @endforeach
                                    </select>
                            </div>
                            <div class="col-4">
                                <label for="select" class="form-label">Department <span style="color: red">*</span> </label>
                                <select name="department" class="department   form-control"  id="department" data-live-search="true"  data-size="8" tabindex="null">
                                @foreach($DeparmenttmList as $row)
                                <option value="{{$row->department}}">{{$row->department}}</option>
                                    @endforeach
                                    </select>
                            </div>      
                            <div class="col-4">
                                <label for="text" class="form-label">Gender <span style="color: red">*</span> </label>
                                <select name="gender" class="gender  form-control select_type" id="gender1" >
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    <br>
                        <div class="row g-3">
                            <div class="col">
                                <label for="text" class="form-label">Joining Date</label>
                                <input type="date"  class="joining_date form-control"  id="joining_date1" name="joining_date" required>
                            </div>
                        <div class="col">  
                            <label for="">Status *</label>
                                <select name="status" class="status  form-control " id="status1">
                                    <option value="Active">Active</option>
                                    <option value="In active">In Active</option>
                               </select>
                         </div>
                     </div>
                    <br>
                                       
<!--Bank Details Start-->
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border mt-2">Banking Details</legend>
                    <div class="row">
                        <div class="col mt-3">
                            <div class="row g-3">
                                <div class=" col-6 ">
                                    <label for="text" class="form-label">Account Holder Name <span style="color: red">*</span></label>
                                    <input type="text" class="beneficiary_name form-control" name="beneficiary_name" id="beneficiary_name1"  required>
                                </div>
                                <div class=" col-6 ">
                                    <label for="text" class="form-label">Account Number <span style="color: red">*</span></label>
                                    <input type="text" class="account_number form-control" name="account_number" id="account_number1" required>
                                </div>
                            </div><br>
                            <div class="row g-3">
                                <div class=" col-4 ">
                                    <label for="text" class="form-label">Bank Name <span style="color: red">*</span></label>
                                    <input type="bank_name" class="bank_name form-control" name="bank_name"  id="bank_name1" required>
                                </div>
                                <div class=" col-4 ">
                                    <label for="text" class="form-label">Branch Name <span style="color: red">*</span></label>
                                    <input type="text" class="branch_name form-control" name="branch_name" id="branch_name1"  required>
                                </div>
                                <div class=" col-4 ">
                                    <label for="text" class="form-label">IFSC Code <span style="color: red">*</span></label>
                                    <input type="ifsc_code" class="ifsc_code form-control" name="ifsc_code"  id="ifsc_code1" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>

 <!--dfd-->
                    </div>       
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" id="submit"   class="btn btn-primary add_empolyee">Update</button>
                            </div>
                         </form>
                        </div>
                     </div>
                  </div>
                </div>
            </div>
        </div>




        <script>
            
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
                    $("#country3").append(
                      '<option value="' + value.code + '">' + value.name + "</option>"
                    );
                  });
                });
                // Country selected --> update region list .
                $("#country3").change(function() {
                  selectedCountry = this.options[this.selectedIndex].text;
                  countryCode = $("#country3").val();
                  // Populate country3 select box from battuta API
                  url =
                    "https://battuta.medunes.net/api/region/" +
                    countryCode +
                    "/all/?key=" +
                    BATTUTA_KEY +
                    "&callback=?";
                  $.getJSON(url, function(data) {
                    $("#region3 option").remove();
                    $('#region3').append('<option value="">Please select your region</option>');
                    $.each(data, function(index, value) {
                      // APPEND OR INSERT DATA TO SELECT ELEMENT.
                      $("#region3").append(
                        '<option value="' + value.region + '">' + value.region + "</option>"
                      );
                    });
                  });
                });
                // Region selected --> updated city list
                $("#region3").on("change", function() {
                  selectedRegion = this.options[this.selectedIndex].text;
                  // Populate country select box from battuta API
                  countryCode = $("#country3").val();
                  region = $("#region3").val();
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
                    $("#city3 option").remove();
                    $('#city3').append('<option value="">Please select your city</option>');
                    $.each(data, function(index, value) {
                      // APPEND OR INSERT DATA TO SELECT ELEMENT.
                      $("#city3").append(
                        '<option value="' + value.city + '">' + value.city + "</option>"
                      );
                    });
                  });
                });
                // city selected --> update location string
                $("#city3").on("change", function() {
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
                    $("#country2").append(
                      '<option value="' + value.code + '">' + value.name + "</option>"
                    );
                  });
                });
                // Country selected --> update region list .
                $("#country2").change(function() {
                  selectedCountry = this.options[this.selectedIndex].text;
                  countryCode = $("#country2").val();
                  // Populate country select box from battuta API
                  url =
                    "https://battuta.medunes.net/api/region/" +
                    countryCode +
                    "/all/?key=" +
                    BATTUTA_KEY +
                    "&callback=?";
                  $.getJSON(url, function(data) {
                    $("#region2 option").remove();
                    $('#region2').append('<option value="">Please select your region</option>');
                    $.each(data, function(index, value) {
                      // APPEND OR INSERT DATA TO SELECT ELEMENT.
                      $("#region2").append(
                        '<option value="' + value.region + '">' + value.region + "</option>"
                      );
                    });
                  });
                });
                // Region selected --> updated city list
                $("#region2").on("change", function() {
                  selectedRegion = this.options[this.selectedIndex].text;
                  // Populate country select box from battuta API
                  countryCode = $("#country2").val();
                  region = $("#region2").val();
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
                    $("#city2 option").remove();
                    $('#city2').append('<option value="">Please select your city</option>');
                    $.each(data, function(index, value) {
                      // APPEND OR INSERT DATA TO SELECT ELEMENT.
                      $("#city2").append(
                        '<option value="' + value.city + '">' + value.city + "</option>"
                      );
                    });
                  });
                });
                // city selected --> update location string
                $("#city2").on("change", function() {
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
          
        </script>