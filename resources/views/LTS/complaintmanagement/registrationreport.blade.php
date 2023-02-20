@extends('LTS.layouts.main')
@section('content-header')
<div class="row column1">
   <div class="col-md-12">
      <div class="white_shd full margin_bottom_30">
         <div class="full graph_head ">
            <div class="heading1 margin_0">
               <h3>Registration Report</h3>
           </div>
       </div>
      </div>
   </div>
</div>
<section class="content">
   <div class="container-scroller">
       <div class="container-fluid page-body-wrapper full-page-wrapper">
           <div class="col-md-12 grid-margin stretch-card">
               <div class="card">
                   <div class="card-body">
                     <form method="get"  class="form-inline">
                        <a class="btn btn-danger text-white" href="dashboard.php" role="button">Back</a> &nbsp;&nbsp;
                         <input  type="search"  name="search" id=""  class="form-control" placeholder="Search Year"  value= "{{$search}}">
                         <button type="submit"  class="btn btn-primary">Search</button>
                   </form>  
                      
                       
         <div id="EditModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
               <div class="modal-content">
               <Form    action="{{url('/registrationreport/update/')}}" method="POST"  id="editForm">
                  @method('PUT')  
                        @csrf      
                  <input type="hidden" id="id" name="id"/>
            
                     <div class="modal-header">						
                        <h4 class="modal-title"  id="EditModal">Complaint update</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                                    @csrf
                                    <div class="col-12">
                                    <label for="text" class="form-label">Complaint Id <span style="color: red">*</span></label>
                                       <input type="text" class="complaint_id form-control" name="complaint_id"  id="complaint_id1" required>
                                 </div>
                                 <div class="col-12">
                                    <label for="text" class="form-label">Customer Name <span style="color: red">*</span></label>
                                       <input type="text" class="custom_name form-control" name="custom_name"  id="custom_name1" required>
                                 </div>
                                 <div class="col-12">
                                    <label for="text" class="form-label">Customer Phone no. <span style="color: red">*</span></label>
                                       <input type="text" class="custom_mobile form-control"  maxlength="10" name="custom_mobile" id="custom_mobile1"   required>
                                 </div>
      
                                 <div class="col-12">
                                    <label for="text" class="form-label">Other Phone no. <span style="color: red">*</span></label>
                                       <input type="text" class="other_mobile form-control"  maxlength="10"name="other_mobile" id="other_mobile1"  required>
                                 </div>
      
                                 <div class="col-12">
                                    <label for="text" class="form-label">Customer Address<span style="color: red">*</span></label>
                                       <input type="text" class="custom_address form-control" name="custom_address" id="custom_address1" required>
                                 </div>
      
                                 <div class="col-12">
                                 <label for="formGroupExampleInput2">Pin-Code<span style="color: red">*</span></label>
                                    <table width="100%">
                                       <tbody>
                                          <tr>  &nbsp;
                                             <td align="center">
                                             <input type="text" class="pin_code form-control" name="pin_code" id="pin_code1" required>
                                             </td>
                                             <td>Block:*</td>
                                             <td align="center">
                                             <input type="text" class="block form-control"  name="block"  id="block1">
                                             </td><br>
                                             <td>District:*</td>
                                             <td align="center">
                                             <input type="text" class="district form-control" name="district"    id="district1">
                                             </td><br>
                                             <td>State:*</td>
                                             <td align="center">
                                             <input type="text" class="state form-control" name="state"  id="state1">
                                             </td>
                                          
                                             <td align="center">
                                             <button type="button" class="btn btn-primary" onclick="Pincode()" >Search</button> 
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div><br>
                                 <div class="col-12"> 
                                    <label for="country" class="form-label">Type of Complaint<span style="color: red">*</span></label></br>
                                    <select name="type_complaint" class="type_complaint  form-control select_type" id="type_complaint1" >
                                                <option value="MaCustomer Complaintle">Customer Complaint</option>
                                                <option value="Stock Comlaint">Stock Comlaint</option>
                                                </select>
                                 </div>
      
                                 <div class="col-12">
                                       <label for="text" class="form-label">Date of Purchase<span style="color: red">*</span></label>
                                       <input type="date" class="date form-control" name="date" id="date1" placeholder="" required>
                                 </div>
      
                                 <div class="col-12"> 
                                    <label for="country" class="form-label">Brand<span style="color: red">*</span></label></br>
                                    <select name="type_brand" class="type_brand  form-control type_brand" id="type_brand1" >
                                       
                                       <option value="samsung">samsung</option>
                                       <option value="Tata Group">Tata Group</option>
                                       <option value="Colgate">Colgate</option>
                                       <option value="Lux">Lux</option>
                                       <option value="Amul">Amul</option>
                                       <option value="Life Boy">Life Boy</option>
                                       <option value="Horlics">Horlics</option>
                                       <option value="Pesodent">Pesodent</option>
                                       <option value="Britannia">Britannia</option>
                                       <option value="Close up">Close up</option>
                                    </select>
                                 </div>
      
                                 <div class="col-12"> 
                                    <label for="country" class="form-label">Modal No.<span style="color: red">*</span></label></br>
                                    <input type="text" class="type_model form-control"  name="type_model" id="type_model1" required>
                                 </div>
      
                                 <div class="col-12"> 
                                    <label for="country" class="form-label">Warrenty Status<span style="color: red">*</span></label></br>
                                    <select name="warrenty_number" class="warrenty_number  form-control warrenty_number" id="warrenty_number1" >
                                       <option selected>select</option>
                                       <option value="Prduct In Warrenty">Prduct In Warrenty</option>
                                       <option value="Product Out of Warrenty">Product Out of Warrenty</option>
                                    </select>
                                 </div>
      
      
                                 <div class="col-12"> 
                                    <label for="country" class="form-label">Product Location<span style="color: red">*</span></label></br>
                                    <select name="product_type" class="product_type  form-control product_type" id="product_type1" >
                                       <option selected>select</option>
                                       <option value="Customer End">Customer End</option>
                                       <option value="Store End">Store End</option>
                                    </select>
                                 </div>
      
                                 <div class="col-12"> 
                                    <label for="country" class="form-label">Visit Type<span style="color: red">*</span></label></br>
                                    <select name="visit_type" class="visit_type  form-control visit_type" id="visit_type1" >
                                       <option selected>select</option>
                                       <option value="Service">Service</option>
                                       <option value="Installation">Installation</option>
                                    </select>
                                 </div>
                                       
                                 <div class="col-12">
                                    <label for="text" class="form-label">Company Detail<span style="color: red">*</span></label>
                                       <input type="text" class="company_detail form-control"  name="company_detail" id="company_detail1"  required>
                                 </div>
      
                                 <div class="col-12">
                                    <label for="text" class="form-label">Remark<span style="color: red">*</span></label>
                                       <input type="text" class="remark form-control"   name="remark" id="remark1"  required>
                                 </div><br>
                                    <div class="col-12">
                                 <label for="">Status *</label>
                                 <select name="status" class="status  form-control select_type" id="status1">
                                    <option value="CLOSED">CLOSED</option>
                                    <option value="ALLOTTED">ALLOTTED</option>
                                 </select>
                                 </div><br>
                                 
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
   <div id="ViewModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ViewModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">

            <Form    action="{{url('/registrationreport/show/')}}" method="POST"  id="editForm">
               @method('GET')  
                     @csrf      
               <input type="hidden" id="cmp_id" name="cmp_id"/>
      
               <div class="modal-header">						
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
                              <div class="bg-light p-4 rounded">
                              <h1>Show Complaint</h1>
                              <div class="lead">
                              </div>
                        <table>
                        <tbody>
                           @if(!empty($addcomplaits))
                           @foreach ($addcomplaits as $addcom)
                           
                                 @endforeach
                                 @endif
                        </tbody>
                        </table>

                        <div class="card">
                        <div class="card-header">Complaint Page</div>
                        <div class="card-body">
                              <div class="card-body">
                              <h5 class="card-title">Name:{{ $addcom->custom_name}}</h5>
                              <p class="card-text">Compalint ID: {{ $addcom->complaint_id}}</p>
                              <p class="card-text">Mobile : {{ $addcom->custom_mobile}}</p>
                              <p class="card-text">Type Of Model: {{$addcom->type_model}}</p>
                              <p class="card-text">Other mobile: {{$addcom->other_mobile}}</p>
                              <p class="card-text">Mobile: {{$addcom->custom_mobile}}</p>
                              <p class="card-text">Block: {{$addcom->block}}</p>
                              <p class="card-text">District: {{$addcom->district}}</p>
                              <p class="card-text">State: {{$addcom->state}}</p>
                              <p class="card-text">Address: {{$addcom->custom_address}}</p>
                              <p class="card-text">Pin Code: {{$addcom->pin_code}}</p>
                              <p class="card-text">Type Complaint: {{$addcom->type_complaint}}</p>
                              <p class="card-text">Date: {{$addcom->date}}</p>
                              <p class="card-text">Brand: {{$addcom->type_brand}}</p>
                              <p class="card-text">Warrenty number: {{$addcom->warrenty_number}}</p>
                              <p class="card-text">Product Type: {{$addcom->product_type}}</p>
                              <p class="card-text">Visit Type: {{$addcom->visit_type}}</p>
                              <p class="card-text">Company Details: {{$addcom->company_detail}}</p>
                              <p class="card-text">Remark: {{$addcom->remark}}</p>
                              <p class="card-text"> Status: {{$addcom->status}}</p>
                           </div>
                           </div>
                        </div>      
                     </div>    
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
               </div>
            </form>
         </div>
         </div>
      </div>
   </div>
   </div>
</div>
                           <table id="example" class="table table-condensed table-bordered ">
                              <thead class="thead-dark ">
                              <tr> 
                                 <th><b>S.No.</b></th>
                                 <th><b>Complaint Id</b></th> 
                                 <th><b>Customer</b></th> 
                                 <th><b>City</b></th>
                                 <th><b>State</b></th>
                                 <th><b>Brand</b></th>
                                 <th><b>Model</b></th>
                                 <th><b>Product Type</b></th>
                                 <th><b>Status</b></th>
                                 <th><b>O-CRM ID</b></th>
                               
                                 <th style="text-align: center;"> <b>Action</b></th>
                              </tr>
                           </thead>
                           <tbody>
                           @if(!empty($addcomplaits))
                           @foreach($addcomplaits as $addcomp)
                           <tr>
                              <td>{{$addcomp->id}}</td>
                              <th>{{$addcomp->complaint_id}}</th>
                              <th>{{$addcomp->custom_name}}</th>
                              <th>{{$addcomp->district}}</th>
                              <th>{{$addcomp->state}}</th>
                              <th>{{$addcomp->type_brand}}</th>
                              <th>{{$addcomp->type_model}}</th>
                              <th>{{$addcomp->product_type}}</th>
                              <th>{{$addcomp->status}}</th>
                              <th></th>
                              <td>
                              <div class="dropdown">
                                 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                    <span class="caret"></span></button>
                                      <ul class="dropdown-menu">
                                        <button type="button"  value="{{$addcomp->id}}" class="btn btn-primary editbtn btn-sm">Update</button>&nbsp;
                                        <button type="button"  value="{{$addcomp->id}}" class="btn btn-danger  showbtn btn-sm">View</button>&nbsp;<br>                  
                                        <button type="button"  value="{{$addcomp->id}}" class="btn btn-danger sharebtn btn-sm">Share</button> &nbsp;                    
                                     </ul>
                                   </div>
                                 </td>
                              </tr>
                              @endforeach
                              @endif
                           </tbody>
                           {{ csrf_field() }}
                            </table>
                          
                        </div>
                        
                     </form>
                  </div>
               </div>
           </div>
       <!-- content-wrapper ends -->
      </div>
   <!-- page-body-wrapper ends -->
   </section>
  </div>
</div>
<!--------Container close-->
@endsection
@section('scripts')
 <script> 
 
  $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $(document).on('click', '.editbtn', function(){
              
              var id = $(this).val();
           
               $('#EditModal').modal('show');
           
                        var id = $(this).val();
          
                        $('#EditModal').modal('show');
        $.ajax({
                type: "GET",
                 url: "/pendingcalls/edit/"+id,
                    success: function (response){
                     //connsole.log(response);
                    $('#id').val(response.addcomplaits.id);
                    $('#complaint_id1').val(response.addcomplaits.complaint_id);
                    $('#custom_name1').val(response.addcomplaits.custom_name);
                    $('#custom_mobile1').val(response.addcomplaits.custom_mobile);
                    $('#other_mobile1').val(response.addcomplaits.other_mobile);
                    $('#custom_address1').val(response.addcomplaits.custom_address);
                    $('#pin_code1').val(response.addcomplaits.pin_code);
                    $('#block1').val(response.addcomplaits.block);
                    $('#district1').val(response.addcomplaits.district);
                    $('#state1').val(response.addcomplaits.state);  
                    $('#type_complaint1').val(response.addcomplaits.type_complaint);  
                    $('#date1').val(response.addcomplaits.date);    
                    $('#type_brand1').val(response.addcomplaits.type_brand);
                    $('#type_model1').val(response.addcomplaits.type_model);
                    $('#warrenty_number1').val(response.addcomplaits.warrenty_number);
                    $('#product_type1').val(response.addcomplaits.product_type);
                    $('#visit_type1').val(response.addcomplaits.visit_type);
                    $('#company_detail1').val(response.addcomplaits.company_detail);  
                    $('#type_complaint1').val(response.addcomplaits.type_complaint);  
                    $('#remark1').val(response.addcomplaits.remark);   
                    $('#status1').val(response.addcomplaits.status);          
                  }
               });
                $(document).on('click', '.showbtn', function(){
               var cmp_id = $(this).val();
                $('#ViewModal').modal('show');
                 var cmp_id = $(this).val();
                   $('#ViewModal').modal('show');
                     $.ajax({
                     type: "GET",
                     url: "/registrationreport/show/"+cmp_id,
                     success: function (response){
                    //connsole.log(response);
                    $('#cmp_id').val(response.addcomplaits.cmp_id);
                    $('#complaint_id').val(response.addcomplaits.complaint_id);
                    $('#custom_name').val(response.addcomplaits.custom_name);
                    $('#custom_mobile').val(response.addcomplaits.custom_mobile);
                    $('#other_mobile').val(response.addcomplaits.other_mobile);
                    $('#custom_address').val(response.addcomplaits.custom_address);
                    $('#pin_code1').val(response.addcomplaits.pin_code);
                    $('#block').val(response.addcomplaits.block);
                    $('#district').val(response.addcomplaits.district);
                    $('#state').val(response.addcomplaits.state);  
                    $('#type_complaint').val(response.addcomplaits.type_complaint);  
                    $('#date').val(response.addcomplaits.date);    
                    $('#type_brand').val(response.addcomplaits.type_brand);
                    $('#type_model').val(response.addcomplaits.type_model);
                    $('#warrenty_number').val(response.addcomplaits.warrenty_number);
                    $('#product_type').val(response.addcomplaits.product_type);
                    $('#visit_type').val(response.addcomplaits.visit_type);
                    $('#company_detail').val(response.addcomplaits.company_detail);  
                    $('#type_complaint').val(response.addcomplaits.type_complaint);  
                    $('#remark').val(response.addcomplaits.remark);    
                    $('#status').val(response.addcomplaits.status);       
                  }
               });
            });
         });
</script>
@endsection
