@extends('LTS.layouts.main')
@section('content-header')

<div class="container-fluid">
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Add New Complaint </h2>
                                 </div>
                              </div>
                              
<div class="container py-5">
  <div class="row">
    <div class="col-md-12">
      <div id="success_message"></div>
         <div class="card mt-3">
         <div class="card-header">
               <nav class="navbar navbar-light bg-light">
            
                  <div class="d-grid gap-2 d-md-flex">
                     <a class="btn btn-danger text-white" href=" {{route('complaintsearch')}}"role="button">Back</a>
                  </div>     
            </div>
            <div class="card-body">
              <div class="form-group">
                <div class="col ms-1 me-2 mt-3">  
                  <div class="row g-3">
                  <Form    action="{{route('addstore')}}"  method="POST" >
                      @csrf
                      
                     <div class="col-12">
                        <label for="text" class="form-label">Customer Name <span style="color: red">*</span></label>
                         <input type="text" class="custom_name form-control" name="custom_name"  required>
                     </div><br>
                     <div class="col-12">
                        <label for="text" class="form-label">Customer Phone no. <span style="color: red">*</span></label>
                         <input type="text" class="custom_mobile form-control"  maxlength="10" name="custom_mobile"   required>
                     </div><br>

                     <div class="col-12">
                        <label for="text" class="form-label">Other Phone no. <span style="color: red">*</span></label>
                         <input type="text" class="other_mobile form-control"  maxlength="10"name="other_mobile"  required>
                     </div><br>

                     <div class="col-12">
                        <label for="text" class="form-label">Customer Address<span style="color: red">*</span></label>
                         <input type="text" class="custom_address form-control" name="custom_address" required>
                     </div><br>
                   
                  <div class="col-12">
                     <label for="formGroupExampleInput2">Pin-Code<span style="color: red">*</span></label>
                        <table width="100%">
                           <tbody>
                              <tr>  &nbsp;
                                 <td align="center">
                                <input type="text" class="pin_code form-control" name="pin_code" id="pin_code" required>
                                 </td>
                                 <td>Block:*</td>
                                 <td align="center">
                                 <input type="text" class="block form-control"  name="block"  id="block">
                                 </td><br>
                                 <td>District:*</td>
                                 <td align="center">
                                 <input type="text" class="district form-control" name="district"    id="district">
                                 </td><br>
                                 <td>State:*</td>
                                 <td align="center">
                                 <input type="text" class="state form-control" name="state"  id="state">
                                 </td>
                             
                                 <td align="center">
                                 <button type="button" class="btn btn-primary" onclick="Pincode()">Search</button>
                                    
                                 
                                 </td>
                                
                              </tr>
                           </tbody>
                        </table>
                     </div><br>
                     <div class="col-12"> 
                        <label for="country" class="form-label">Type of Complaint<span style="color: red">*</span></label></br>
                        <select name="type_complaint" class="type_complaint  form-control select_type" id="type_complaint" >
                                    <option value="MaCustomer Complaintle">Customer Complaint</option>
                                    <option value="Stock Comlaint">Stock Comlaint</option>
                                  </select>
                     </div><br>

                     <div class="col-12">
                           <label for="text" class="form-label">Date of Purchase<span style="color: red">*</span></label>
                           <select name="dates" class="dates   form-control"  id="dates" data-live-search="true"  data-size="8" tabindex="null">
                           @foreach($company as $row)
                           <option value="{{$row->dates}}">{{$row->dates}}</option>
                            @endforeach
                            </select>
                     </div><br>

                     <div class="col-12">
                        <label for="text" class="form-label">Date of Purchase<span style="color: red">*</span></label>
                        <input type="date" class="date form-control" name="date" id="date" placeholder="" required>
                  </div><br>

                     <div class="col-12"> 
                        <label for="country" class="form-label">Brand<span style="color: red">*</span></label></br>
                        <select name="brand_name" class="brand_name form-control"  id="brand_name" data-live-search="true"  data-size="8" tabindex="null">
                           @foreach($addbrandlist['data'] as $row)
                           <option value="{{$row->brand_name}}">{{$row->brand_name}}</option>
                            @endforeach
                            </select>
                        
                     </div><br>

                     <div class="col-12"> 
                        <label for="country" class="form-label">Modal No.<span style="color: red">*</span></label></br>
                        <select name="model_no" class="model_no form-control"  id="model_no" data-live-search="true"  data-size="8" tabindex="null" required/>
                        <option value='0'>-- Select Brand --</option>
                     </select>
                  </div><br>
                     <div class="col-12"> 
                        <label for="country" class="form-label">Warrenty Status<span style="color: red">*</span></label></br>
                        <select name="warrenty_number" class="warrenty_number  form-control warrenty_number" id="warrenty_number" >
                           <option selected>select</option>
                           <option value="Prduct In Warrenty">Product In Warrenty</option>
                           <option value="Product Out of Warrenty">Product Out of Warrenty</option>
                        </select>
                     </div><br>
                     <div class="col-12"> 
                        <label for="country" class="form-label">Product Location<span style="color: red">*</span></label></br>
                        <select name="product_type" class="product_type  form-control product_type" id="product_type" >
                           <option selected>select</option>
                           <option value="Customer End">Customer End</option>
                           <option value="Store End">Store End</option>
                        </select>
                     </div><br>

                     <div class="col-12"> 
                        <label for="country" class="form-label">Visit Type<span style="color: red">*</span></label></br>
                        <select name="visit_type" class="visit_type  form-control visit_type" id="visit_type" >
                           <option selected>select</option>
                           <option value="Service">Service</option>
                           <option value="Installation">Installation</option>
                        </select>
                     </div><br>
                           
                     <div class="col-12">
                        <label for="text" class="form-label">Company Detail<span style="color: red">*</span></label>
                         <input type="text" class="company_detail form-control"  name="company_detail"  required>
                     </div><br>

                     <div class="col-12">
                        <label for="text" class="form-label">Remark<span style="color: red">*</span></label>
                         <input type="text" class="remark form-control"   name="remark"  required>
                     </div><br>
                      <div class="col-12">
                     <label for="">Status *</label>
                     <select name="status" class="status  form-control select_type" id="status">
                       <option value="CLOSED">CLOSED</option>
                       <option value="ALLOTTED">ALLOTTED</option>
                     </select>
                  </div><br>
                     <div class="col-12">
                     <button type="submit" id="submit"   class="btn btn-danger add_complaint">Add</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </form>
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

 function Pincode(){
   var pin = document.getElementById('pin_code').value;
    if(pin != '') { 
  $.ajax({
           url:"/addcomplaint/pincodesearchcompalaint/"+pin,
           type: "GET",
           datatype: {pin},
           success:function(response){ 
            if(response != 'no'){
           
                 var getData = $.parseJSON(response);

                 document.getElementById('block').value = getData.block;
                 document.getElementById('district').value = getData.district;    
                 document.getElementById('state').value = getData.state;
                }else{
                  alert('wrong Pin code');
                }
            }
            });
         }else{       
         alert('Please Enter pin code');   
       }
      }


// Client Change
$('#brand_name').change(function(){

   // Client id
   var id = $(this).val();

   // Empty the dropdown
   $('#model_no').find('option').not(':first').remove();
   $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
   // AJAX request 
   $.ajax({
     url: '/addcomplaint/addchangebrand/'+id,
     type: "GET",
     dataType: 'json',
     success:function(response){
              
       var len = 0;
       if(response['data'] != null){
          len = response['data'].length;
       }



       if(len > 0){
          // Read data and create <option >
          for(var i=0; i<len; i++){

                   var id = response['data'][i].id;
                   var model_no = response['data'][i].model_no;
                   var idmodel_no = id+'_'+model_no;
                   var option = "<option value='"+model_no+"'>"+model_no+"</option>";
         
             $("#model_no").append(option); 
             
          }
       }

     }
   });
});

</script>
@endsection
