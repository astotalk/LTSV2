@extends('LTS.layouts.main')
@section('content-header')

<div class="midde_cont">
       <div class="container-fluid"> 
       <div class="row column1">
          <div class="col-md-12">
             <div class="white_shd full margin_bottom_30">
                <div class="full graph_head ">
                   <div class="heading1 margin_0">
                      <h2>Part List</h2>
                  </div>
              </div><br>

              <br>
              <br>
              <br>
              
             <div class="container py-5">
               <div class="row">
                  @if(session('status'))
                  <div class="alert alert-success">{{session('status')}}</div>
                  @endif   
               <div class="col-12">
                 <div id="success_message"></div>
                   <div class="card mt-3">
                     <div class="card-header">
                      <!-- SEARCH BY TASK START -->
                     <nav class="navbar navbar-light bg-light">
                        <form method="get"  class="form-inline">
                           <a class="btn btn-danger text-white" href="dashboard.php" role="button">Back</a> &nbsp;&nbsp;
                           <input type="2112" class="search  form-control mr-sm-2"  name="search_empid" id="search_empid"   placeholder="Search">
                           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                     </div>
                  <!--table start-->
                     <div class="card-body">
                         <table id="example" class="table table-condensed table-bordered">
                           <thead class="thead-dark ">
                              <tr>
                                 <th ><b>S.No.</b></th>
                                 <th><b>Client Name</b></th> 
                                 <th ><b>Product Type</b></th>
                                 <th ><b>Part Name</b></th>
                                 <th ><b>Part Cost</b></th>
                                 <th ><b>Part Code</b></th>
                                 <th ><b>Status</b></th>
                                 <th style="text-align: center;"> Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr role="row" class="odd">
                                 @if(!empty($addpart_link))
                                 @foreach($addpart_link as $partlist)
                                    <tr>
                                    <th>{{$partlist->id}}</th>
                                    <th>{{$partlist->client_name}}</th>
                                    <th>{{$partlist->product_type}}</th>
                                    <th>{{$partlist->part_name}}</th>
                                    <th>{{$partlist->part_cost}}</th>
                                    <th>{{$partlist->part_code}}</th>
                                    <th>
                                    <?php if($partlist->status == '1'){ ?>
                                       <label for=""  class="btn btn-success">Active</label>
                                       <?php }else { ?>
                                          <label for=""  class="btn btn-warning">De-active</label>
                                          <?php  } ?>
                                    </th>
                                     <td>
                                    <div class="dropdown">
                                       <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                          <span class="caret"></span></button>
                                       <ul class="dropdown-menu">
                                          <button type="button"  value="{{$partlist->id}}" class="btn btn-primary editbtn btn-sm">Update</button>&nbsp;
                                       </ul>
                                    </div>
                                    </td>                     
                                  </tr>
                                 @endforeach
                                 @endif
                               </tbody>
                              </table>
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

                     <div id="EditModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="form-group">
                             <div class="col ms-1 me-2 mt-3">  
                                <div class="row g-3">
                                  <Form    action="{{url('/Partslist/update/')}}" method="POST"  id="editForm">
                                    @method('PUT')  
                                       @csrf  
                                       <input type="hidden" name="id" id="id">
                                       <div class="col-12">
                                       <label for="formGroupExampleInput">Client <span style="color: red">*</span></label>
                                       <select class="client_name form-control" id="client_name1" name="client_name" required="">
                                          <option value='0'>-- Select category --</option>
                                          @foreach($clientmanagement  as $clientmanagement)
                                          <option value="{{$clientmanagement->client_name}}">{{$clientmanagement->client_name }}</option>
                                          @endforeach
                                          </select>
                                       </div>
                                      </div>
                                      <div class="form-group">
                                      <div class="col-12">
                                          <label for="formGroupExampleInput">Product Type <span style="color: red">*</span></label>
                                          <select name="product_type" class="product_type form-control"  id="product_type1" data-live-search="true"  data-size="8" tabindex="null">
                                             <option value='0'>--Brand Name--</option>
                                             @foreach($product  as $product_type)
                                             <option value="{{$product_type->product_type}}">{{$product_type->product_type}}</option>
                                             @endforeach
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="col-12">
                                          <label for="formGroupExampleInput2">Part Name <span style="color: red">*</span></label>
                                          <input type="text" class="part_name form-control" id="part_name1" name="part_name"  placeholder="Part name" required="">
                                       </div> 
                                    </div>  
                                    <div class="form-group">
                                       <div class="col-12">
                                          <label for="formGroupExampleInput2">Part Cost <span style="color: red">*</span></label>
                                          <input type="text" class="part_cost form-control" id="part_cost1" name="part_cost"  placeholder="Part cost" required="">
                                       </div> 
                                    </div>    
                                    <div class="form-group">
                                       <div class="col-12">
                                          <label for="formGroupExampleInput2">Part Code <span style="color: red">*</span></label>
                                          <input type="text" class="part_code form-control" id="part_code1" name="part_code"  placeholder="Part code" required="">
                                       </div> 
                                    </div>   
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




@endsection
@section('scripts')
<script>
$(document).ready(function(){
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy',
        ]
    });
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
            url: "/Partslist/edit/"+id,
               success: function (response){
               //console.log("Hello world!");
               $('#id').val(response.addpart_link.id);
               $('#client_name1').val(response.addpart_link.client_name)   
               $('#part_name1').val(response.addpart_link.part_name)    
               $('#part_code1').val(response.addpart_link.part_code);
               $('#part_cost1').val(response.addpart_link.part_cost)   
               $('#product_type1').val(response.addpart_link.product_type)   
               }
            });
         });
    
         </script>
  @endsection