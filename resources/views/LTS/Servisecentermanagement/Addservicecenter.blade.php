@extends('LTS.layouts.main')
@section('content-header')
<div class="midde_cont">
  <div class="container-fluid">
     <div class="row column_title">
      <div class="col-md-12">
         <div class="page_title">
            <h2>Service Center Management</h2>
         </div>
      </div>
   </div>
      <!-- row -->
<div class="row column1">
   <div class="col-md-12">
      <div class="white_shd full margin_bottom_30">
         <div class="full graph_head">
            <div class="heading1 margin_0">
               <h2>Add Service Center </h2>
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
                  <form   action="" class="form-inline col-md-9">
                     <a class="btn btn-danger text-white" href="{{ route('dashboard') }}" role="button">Back</a> &nbsp;&nbsp;
                    <input  type="search"  name="search" id="" class="form-control" placeholder="Search name" >
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
               + Add Service
               </button>
               </div>    
               </div>


<div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModal" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <Form    action="{{route('servicestore')}}" method="post" id="savefrom_errList">
            @csrf
             <div class="modal-header">
               <h5 class="modal-title" id="myModal">Add Service</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                     <div class="modal-body">
                        <div class="form-group">
                           <div class="form-group">
                           <label for="text" class="form-label">Service Center Name <span style="color: red">*</span></label>
                           <input type="text" class="service_center_name form-control" name="service_center_name"  id="service_center_name" placeholder="Service Center Name" required>
                        </div>
                        <div class="form-group">
                           <label for="text" class="form-label">Engineer Name <span style="color: red">*</span></label>
                           <input type="text" class="eng_name form-control" name="eng_name"  id="eng_name"  placeholder="Engineer Name" required>
                        </div>
                        <div class="form-group">
                           <label for="text" class="form-label">Phone no. <span style="color: red">*</span></label>
                           <input type="text" class="phone form-control" name="phone"  id="phone"  maxlength="10"  placeholder="Phone no." required>
                        </div>
                        <div class="form-group">
                           <label for="text" class="form-label">Other Phone no. </label>
                           <input type="text" class="other_number form-control" name="other_number" id="other_number" maxlength="10"  placeholder="Other Phone no." required>
                        </div>
                        <div class="form-group"">
                           <label for="text" class="form-label">Address<span style="color: red">*</span></label>
                           <input type="text" class="address form-control" placeholder="Address" name="address"  required>
                        </div><br>                    
                        <div class="col-12">
                           <label for="formGroupExampleInput2">Pin-Code<span style="color: red">*</span></label>
                              <table width="100%">
                                 <tbody>
                                    <tr>&nbsp;
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
                                       <button type="button" class="btn btn-primary" onclick="Pincode()" >Search</button>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div><br>

                                 <div class="form-group">
                                    <label for="text" class="form-label">Remark<span style="color: red">*</span></label>
                                    <input type="text" class="remark form-control"  placeholder="Remark" name="remark" required>
                                 </div>

                                 <div class="form-group">
                                    <label for="text" class="form-label">GST No.</label>
                                    <input type="text" class="form-control"   placeholder="GST"  name="gst" required>
                                 </div>
                              
                                 <div class="form-group"> 
                                    <label for="text" class="form-label">SF Approved BY<span style="color: red">*</span></label></br>
                                    <select class="sf_approved_by form-select" name="sf_approved_by" aria-label="Default select example">
                                       <option selected>Select</option>
                                       <option value="Vijay Sharma">Vijay Sharma</option>
                                       <option value="Himanshi">Himanshi</option>
                                       <option value="Geetika Sachdeva">Geetika Sachdeva</option>
                                       <option value="Mr. Khan">Mr. Khan</option>
                                       <option value="Mr. Suresh Kumar">Mr. Suresh Kumar</option>
                                    </select>
                                 </div>

                                 <div class="form-group"> 
                                    <label for="text" class="form-label">User Name</label></br>
                                    <input type="text" class="form-control"   placeholder="User Name" name="user_name" required>
                                 </div>

                                 <div class="form-group"> 
                                    <label for="password" class="form-label">Password</label></br>
                                    <input type="password" class="form-control"   placeholder="Password"  name="password" required>
                                 </div>

                                 <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-info" value="Add">
                                    </div>
                                    </form>
                              </div>
                           </form>
                           </div>
                        </div>
                        </div>
                      </div>
                     </div>
                    </div>
<!---card close-->
                 </div>
               </div>
             </div>
<!---contaioner close-->
          </div>
       </div>
     </div>
  </div>
</div>
@endsection
@section('scripts')

 <script>
   
 function Pincode(){
   var pin = document.getElementById('pin_code').value;
   if(pin != '') { 

  $.ajax({
   
           url:"/Addservicecenter/pincodesearchid/"+pin,
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
</script>
@endsection


