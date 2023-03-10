@extends('LTS.layouts.main')
@section('content-header')

<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Leave</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Add Leave</h2>
                                 </div>
                              </div>
<!--Add Leave form start-->
                              
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
                     <input  type="search"  name="search" id="" class="form-control" placeholder="Search leave"  value= "{{$search}}">
                           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                     </form>
                           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                              + Add Leave
                           </button>
               </div>
                               <!--table start-->
               <div class="card-body">
                  <table class="table table-bordered">
                  <thead class="thead-dark ">
                           <tr>
                              <th><b>S.No.</b></th>
                              <th><b>Emp Name</b></th> 
                              <th><b>Leave Type</b></th>
                              <th><b>Leave Date</b></th> 
                              <th><b>Leave Status</b></th>
                              <th style="width:150px">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                         @if(!empty($leaves))
                        @foreach($leaves as $leave_emp)
                       <tr> 
                        <th>{{$leave_emp->id}}</th>
                        <th>{{$leave_emp->name}}</th>
                        <th>{{$leave_emp->leave_status}}</th>
                        <th>{{$leave_emp->fromdate}}</th>
                        <th>{{$leave_emp->select_type}}</th>
                        
                        <td>
                        <button type="button"  value="{{$leave_emp->id}}" class="btn btn-primary editbtn btn-sm">Edit</button> ||
                        <button type="button"  value="{{$leave_emp->id}}" class="btn btn-danger deleteleaveBtn">Delete</button>
                      </tr>      
                        @endforeach
                        @endif
                        </tbody>
                     </table>
                  </div>
             
                  
            </div>
</div>
</div>
</div></div></div>

  <!-- Edit Modal HTML -->                   
  <div id="EditModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <Form    action="{{url('/leave/update/')}}" method="POST"  id="editForm">
            @method('PUT')  
               @csrf 
               <input type="hidden" name="leave_id" id="leave_id">
                  <div class="modal-header">						
                        <h4 class="modal-title"  id="EditModal">Edit Leave</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                        <div class="modal-body">			
                           <div class="form-group">
                              <div class="row g-3">
                                 <div class="col">
                                    <label for="inputtext" class="form-label">Leave Type <span style="color: red">*</span></label>
                                    <select name="select_type"  class="select_type  form-control" required>
                                    <option value="">Select</option>
                                    <option value="Casual">Casual</option>
                                    <option value="Sick">Sick</option>
                                    <option value="Earned">Earned</option>
                                   </select>
                                 </div>  
                              </div>                      
                                                </br>

                              <div class="row g-3">
                                 <div class="col">
                                    <label for="inputDate" class="form-label">From <span style="color: red">*</span></label>
                                    <input type="date" class="fromdate  form-control" name="fromdate"  required >
                                 </div>
                                                   

                                 <div class="col">
                                    <label for="inputDate" class="form-label" >To <span style="color: red">*</span></label>
                                    <input type="date" class="todate  form-control" name="todate" required > 
                                 </div>
                              </div>
                                                         </br>
                              <div class="row g-3">
                                 <div class="col-12">
                                       <label for="inputtext" class="form-label">Status <span style="color: red">*</span></label>
                                       <select name="leave_status"  class="leave_status form-control"  id="leave_status" required>
                                              <option value="none" selected disabled hidden>Select an Option</option>
                                              <option value="Approved">Approved</option>
                                              <option value="Pending">Pending</option>
                                              <option value="Reject">Reject</option>
                                    </select>
                                 </div>
                              </div>
                              </br>
                              <div class="row g-3">
                                 <div class=" col">
                                    <label for="floatingInput">Reason for Leave <span style="color: red">*</span></label>
                                    <input type="textarea" class="reason  form-control" name="reason" required >                   
                                 </div>
                              </div>          
                           </div>
                  </div>

                        <div class="modal-footer">
                           <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Close">
                           <button type="submit" id="submit"  value="Submit"   class="btn btn-primary add_leave">Update</button>

                        </div>
               </form>
            </div>
         </div>
      </div>

   
   <!-- Delete Modal HTML -->
            <div id="deleteModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                  <form  action="{{ url('/leave/destroy/')}}"  method="POST">
                      @csrf
                        <div class="modal-header">						
                           <h4 class="modal-title"  id="deleteModalLabel">Delete Leave</h4>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="form-group">					
                           <p>Are you sure you want to delete these Records?</p>
                           <input type="hidden" name="id" id="id">
                           <p class="text-warning"><small>This action cannot be undone.</small></p>
                        </div>
                     </div>
                        <div class="modal-footer">
                           <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
                           <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                     </form>
                  </div>
               </div>
            </div>
   <!-- The Modal -->
<!-- Modal -->
      <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <Form  action="{{route('leavestore')}}" method="post" >
                  @csrf
                  <div class="modal-header">
                  <h5 class="modal-title" id="myModalLabel">Add Leave</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">

                      <div class="row g-3">

                           <div class="col-6">
                                <label for="select" class="form-label">Department <span style="color: red">*</span></label>
                                <select name="department" class="department   form-control"  id="department" data-live-search="true"  data-size="8" tabindex="null">
                                 <option value='0'>-- Select department --</option>
                                  @foreach($DeparmenttmList['data']  as $department)
                                  <option value="{{$department->department}}">{{$department->department }}</option>
                                 @endforeach
                                 </select>
                            </div>
                        
                            <div class="col-6">
                                 <label for="text" class="form-label">Employee <span style="color: red">*</span></label>
                                 <select name="name" class="name form-control"  id="name" data-live-search="true"  data-size="8" tabindex="null" required/>
                                 <option value='0'>-- Select Employee --</option> 
                                 </select>
                             </div>
                         </div></br>
                         
                         <div class="row g-3">
                           <div class="col">
                                 <label for="inputtext" class="form-label">Leave Type <span style="color: red">*</span></label>
                                 <select name="select_type"  class="select_type  form-control" required>
                                 <option value="">Select</option>
                                    <option value="Casual">Casual</option>
                                    <option value="Sick">Sick</option>
                                    <option value="Earned">Earned</option>
                                 </select>
                           </div>  
                        </div>                      
                     </br>
                         <div class="row g-3">
                              <div class="col">
                                 <label for="inputDate" class="form-label">From <span style="color: red">*</span></label>
                                 <input type="date" class="fromdate  form-control" name="fromdate"  required >
                              </div>
                                               

                              <div class="col">
                                 <label for="inputDate" class="form-label" >To <span style="color: red">*</span></label>
                                 <input type="date" class="todate  form-control" name="todate" required > 
                              </div>
                           </div>
                                                     </br>
                        <div class="row g-3">
                              <div class="col-12">
                                    <label for="inputtext" class="form-label">Status <span style="color: red">*</span></label>
                                    <select name="leave_status"  class="leave_status form-control"  id="leave_status" required>
                                              <option value="none" selected disabled hidden>Select an Option</option>
                                              <option value="Approved">Approved</option>
                                              <option value="Pending">Pending</option>
                                              <option value="Reject">Reject</option>
                                    </select>
                              </div>                                                
                            </div>
                                                           </br>
                            <div class="row g-3">
                              <div class=" col">
                                 <label for="floatingInput">Reason for Leave <span style="color: red">*</span></label>
                                    <input type="textarea" class="reason  form-control" name="reason" required >                
                              </div>
                           </div>
                           
                                                        </br>
                        </div>
                     </div>
                     
                     <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Close">
                        <button type="submit" id="submit"  value="Submit"   class="btn btn-primary add_leave">Add</button>
                     </div>
               </form>
            </div>
         </div>
      </div>
        
 <!-- footer -->
 
 @endsection
 @section('scripts')

<script type="text/javascript">

 $(document).ready(function(){ 

// Department Change
$('#department').change(function(){

   // Department id
   var id = $(this).val();

   // Empty the dropdown
   $('#name').find('option').not(':first').remove();
   $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
   // AJAX request 
   $.ajax({
     url: '/leave/departmenchangeEmp/'+id,
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
             var name = response['data'][i].name;
             var idname = id+'_'+name;
             var option = "<option value='"+name+"'>"+name+"</option>";
             $("#name").append(option); 
             
          }
       }

     }
   });
});

      $('.deleteleaveBtn').click(function (e) {
                e.preventDefault();
               var id = $(this).val();
                $('#id').val(id);
                $('#deleteModal').modal('show');

              });

          $(document).on('click', '.editbtn', function(){
              var leave_id = $(this).val();

              $('#EditModal').modal('show');
              
              $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                    type: "GET",
                    url: "/leave/edit/"+leave_id,
                      success: function (response){
                   //nsole.log(response);
                      $('#leave_id').val(response.leaves.id);
                      $('#reason1').val(response.leaves.reason);
                      $('#leave_status1').val(response.leaves.leave_status);
                      $('#fromdate1').val(response.leaves.fromdate);
                      $('#todate1').val(response.leaves.todate);
                      $('#select_type1').val(response.leaves.select_type);
                    
                 

                      
                    

}



});

      });
                });
                

</script>
@endsection