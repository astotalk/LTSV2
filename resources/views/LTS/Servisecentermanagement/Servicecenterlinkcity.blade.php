@extends('LTS.layouts.main')
@section('content-header')

   <!-- Start dashboard inner -->
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
                <div class="full graph_head ">
                   <div class="heading1 margin_0">
                      <h2>Service Center Link City</h2>
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
    <form   action="" class="form-inline col-md-9">
        <a class="btn btn-danger text-white" href="{{ route('dashboard') }}" role="button">Back</a> &nbsp;&nbsp;
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Add Status
           </button>&nbsp;&nbsp;
       <input  type="search"  name="search" id="" class="form-control" placeholder="Search name"  value= "{{$search}}">
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
 </form>  
</div>
<!--table start-->
<div class="card-body">
<table id="myDataTable" class="table table-condensed table-bordered ">
 <thead class="thead-light">
       <tr>
          
          <th>S.No.</th>
          <th>SF/Engg Name</th> 
          <th>Phone No.</th>
          <th>O-City</th> 
          <th>O-State</th> 
          <th>L-City</th> 
          <th>L-State</th> 
          <th style="width:154px">Action</th>
       </tr>
 </thead>
 <tbody>
                            
    @if(!empty($AddServicenter))
                @foreach($AddServicenter as $addservice)
                <tr>
                    <td>{{$addservice->id}}</td>
                    <th>{{$addservice->service_center_name}},{{$addservice->eng_name}}</th>
                    <th>{{$addservice->phone}}</th>
                    <th>{{$addservice->district}}</th>
                    <th>{{$addservice->state}}</th>
                    <th>{{$addservice->district}}</th>
                    <th>{{$addservice->state}}</th>
                   
                    
                    <td>
                    <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                        <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                            <button type="button"  value="{{$addservice->id}}" class="btn btn-primary editbtn btn-sm">Update</button>&nbsp;
                           
                            
                        </ul>
                        </div>
                    </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
                </table>
                  
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
<!--Modal Start-->  

                  <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                      <form action="{{ route('addlinkstore') }}" method="POST">
                        @csrf
                          <div class="modal-header bg-info">
                            <h5 class="modal-title" id="myModalLabel">Add SF Link</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="form-group">
                                 <div class="col ms-1 me-2 mt-3">
                                     <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="selectbasic">Pin-Code</label>
                                                <div class="col-md-8">
                                                    <table width="100%">
                                                    
                                                        <tbody>
                                                            <tr>
                                                            <td align="center">
                                                                <input type="text" class="pin_code form-control" name="pin_code" id="pin_code" required>

                                                            </td>
                                                            <td align="center">
                                                                <button type="button" class="btn btn-primary" onclick="Pincode()" >Search</button>
                                                            </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                                <div id="StateCity">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="selectbasic">SF</label>
                                                    <select type="hidden" name="service_center_name" class="service_center_name   form-control"  id="service_center_name" data-live-search="true"  data-size="8" tabindex="null">
                                                        @foreach($AddServicenter as $service_center_name)
                                                        <option value="{{$service_center_name->service_center_name}}">{{$service_center_name->service_center_name }}</option>
                                                            @endforeach
                                                            </select>
                                                    </datalist>
                                                    </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput2">Taluka <span style="color: red">*</span></label>
                                                        <input type="text" class="block form-control"  name="block"  id="block">
                                                        </div>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput2">City <span style="color: red">*</span></label>
                                                        <input type="text" class="district form-control" name="district"    id="district">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput2">State <span style="color: red">*</span></label>
                                                        <input type="text" class="state form-control" name="state"  id="state">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          
                            <div class="modal-footer bg-info">
                                <input type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" value="Close">
                                <input type="submit" class="btn btn-outline-primary" value="Submit">
                            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editServiceModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editServiceModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
     <div class="modal-content">
       <Form action="{{url('/Servicecenterlinkcity/update/')}}" method="POST"  id="editForm">
      @method('PUT')  
         @csrf 
         <input type="hidden" name="id" id="id">
        <div class="modal-header">
        <h5 class="modal-title" id="editServiceModal">Edit Service</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-12"><br>
                <label for="text">Service Center Name </label>
                <input type="text" class="service_center_name form-control" name="service_center_name"  id="service_center_name1" placeholder="Service Center Name" required>
             </div><br>
          
             <div class="col-12">
                <label for="text" class="form-label">Phone no.</label>
                <input type="text" class="phone form-control" name="phone"  id="phone1"  maxlength="10"  placeholder="Phone no." required>
             </div><br>
            
             <div class="col-12">
                <label for="text" class="form-label">O-City</label>
                <input type="text" class="district form-control" name="district"  id="district1">
             </div><br>
             <div class="col-12">
                <label for="text" class="form-label">O-State</label>
                <input type="text" class="state form-control" name="state"  id="state1">
             </div><br>
       
             <div class="col-12">
                <label for="text" class="form-label">L-City</label>
                <input type="text" class="district form-control" name="district"    id="district2">
             </div><br>

             <div class="col-12">
                <label for="text" class="form-label">L-State</label>
                <input type="text" class="state form-control" name="state"  id="state2">
               </div><br>
               <div class="d-grid gap-2 d-md-flex justify-content-md-end">
               <button type="submit" id="submit"   class="btn btn-primary add_price">Update</button>
            </div>
          </div>
        </form>
      </div>
     </div>
   </div>
 </div>
 
@endsection
@section('scripts')

 <script>
  
  $(document).ready(function() {
    $('#myDataTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
  
 function Pincode(){
   var pin = document.getElementById('pin_code').value;
   if(pin != '') { 

  $.ajax({
   
           url:"/Servicecenterlinkcity/pincodesearch/"+pin,
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

      
$(document).on('click', '.editbtn', function(){
         var id = $(this).val();
          $('#editServiceModal').modal('show');
              
      $.ajaxSetup({
               headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
            });

            $.ajax({
            type: "GET",
            url: "/Servicecenterlinkcity/edit/"+id,
               success: function (response){
               //console.log("Hello world!");
               $('#id').val(response.AddServicenter.id);
               $('#service_center_name1').val(response.AddServicenter.service_center_name)     
               $('#phone1').val(response.AddServicenter.phone);
               $('#district1').val(response.AddServicenter.district)
               $('#state1').val(response.AddServicenter.state)     
               $('#district2').val(response.AddServicenter.district)   
               $('#state2').val(response.AddServicenter.state)    
               }
            });
                  
         });    
          
</script>
@endsection
