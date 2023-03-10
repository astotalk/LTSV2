@extends('LTS.layouts.main')
@section('content-header')

<div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Holiday</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Add Holiday</h2>
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
                     <a class="btn btn-danger text-white" href="dashboard.php" role="button">Back</a> &nbsp;&nbsp;
                     <input  type="search"  name="search" id="" class="form-control" placeholder="Search Holiday"  value= "{{$search}}">
                           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                     </form>
                           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                              + Add Holiday
                           </button>
               </div>
         <!--table start-->
               <div class="card-body">
                  <table class="table table-bordered">
                  <thead class="thead-dark ">
                           <tr>
                              <th><b>S.No.</b></th>
                              <th><b>Date</b></th> 
                              <th><b>Occassion</b></th>
                              <th style="width:150px">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                        @if(!empty($holidays))
                       @foreach($holidays as $holiday_data)
                          <tr>
                          <th>{{$holiday_data->id}}</th>
                          <th>{{$holiday_data->date}}</th>
                          <th>{{ucfirst($holiday_data->occasion)}}</th>
             
                          <td>
                          <button type="button"  value="{{$holiday_data->id}}" class="btn btn-primary editbtn btn-sm">Edit</button> |
                          <button type="button"  value="{{$holiday_data->id}}" class="btn btn-danger deleteholidayBtn">Delete</button>
                           </tr>
                        @endforeach
                        @endif
                        </tbody>
                     </table>
                  
                  </div>
                  </div></div>
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
  <div id="EditModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
            <Form    action="{{url('/holiday/update/')}}" method="POST"  id="editForm">
               @method('PUT')  
                        @csrf 
                  <input type="hidden" id="id" name="id"/>
                  <div class="modal-header">						
                        <h4 class="modal-title"  id="EditModalLabel">Edit Holiday</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">			
                     <div class="form-group">
                     <div class="row g-3">
                              <div class="col-12">
                                 <label for="inputDate" class="form-label">Date <span style="color: red">*</span></label>
                                 <input type="date" class="date form-control" name="date" id="date1" placeholder="Date" required/>
                              </div>
                            <span class="text-danger">
                           @if ($errors->has('date'))
                           <small class="error">{{ $errors->first('date') }}</small>
                           @endif
                           </span>
                             </br>
                              <div class="col-12">
                                 <label for="inputtext" class="form-label" >Occassion <span style="color: red">*</span></label>
                                 <input type="text" class="occasion form-control" name="occasion" id="occasion1"  placeholder="Occasion" required/>
                              </div>
                              <span class="text-danger">
                              @if ($errors->has('occasion'))
                              <small class="error">{{ $errors->first('occasion') }}</small>
                              @endif
                              </span>
                           </div>
                     </div>
                  </div>

                  <div class="modal-footer">
                           <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Close">
                           <button type="submit" id="submit"   class="btn btn-primary add_holiday">Update</button>
                  </div>
               </form>
            </div>
         </div>
      </div>

   
   <!-- Delete Modal HTML -->
            <div id="DeleteModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                  <form  action="{{ url('/holiday/destroy/')}}"  method="POST">
                       @csrf
                        <div class="modal-header">						
                           <h4 class="modal-title"  id="DeleteModalLabel">Delete Holiday</h4>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="form-group">					
                           <p>Are you sure you want to delete these Records?</p>
                           <input type="hidden" name="occasion" id="occasion">
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
         <div class="modal-dialog">
            <div class="modal-content">
            <Form   action="{{route('holystore')}}"   method="post" >
             @csrf
                  <div class="modal-header">
                  <h5 class="modal-title" id="myModalLabel">Add Holiday</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                         <div class="row g-3">
                              <div class="col-12">
                                 <label for="inputDate" class="form-label">Date <span style="color: red">*</span></label>
                                 <input type="date" class="date form-control" name="date" id="date" placeholder="Date" required/>
                              </div>
                              <span class="text-danger">
                                @if ($errors->has('date'))
                                <small class="error">{{ $errors->first('date') }}</small>
                                @endif
                                </span>
                               </br>          

                              <div class="col-12">
                                 <label for="inputtext" class="form-label" >Occassion <span style="color: red">*</span></label>
                                 <input type="text" class="occasion form-control" name="occasion" id="occasion"  placeholder="Occasion" required/>
                              </div>
                              <span class="text-danger">
                                @if ($errors->has('occasion'))
                                <small class="error">{{ $errors->first('occasion') }}</small>
                                @endif
                                </span>

                           </div>
                     </div>
                  </div>                         
         
                     
                  <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Close">
                        <button type="submit" id="submit"   class="btn btn-primary add_holiday">Add</button>
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
    $('.deleteholidayBtn').click(function (e) {
                e.preventDefault();
               var occasion = $(this).val();
                $('#occasion').val(occasion);
                $('#DeleteModal').modal('show');

              });

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
                    url: "/holiday/edit/"+id,
                      success: function (response){
          console.log(response);
                      $('#id').val(response.holidays.id);
                      $('#date1').val(response.holidays.date);
                      $('#occasion1').val(response.holidays.occasion);
            }
          });
        });
    });
   </script>
@endsection