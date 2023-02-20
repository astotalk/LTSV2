@extends('LTS.layouts.main')
@section('content-header')

     <!-- Start dashboard inner -->
     <div class="midde_cont">
        <div class="container-fluid">
           <div class="row column_title">
              <div class="col-md-12">
                 <div class="page_title">
                    <h2>Product Details</h2>
                 </div>
              </div>
           </div>
           <!-- row -->
           <div class="row column1">
              <div class="col-md-12">
                 <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head ">
                       <div class="heading1 margin_0">
                          <h2>Products Sub Category</h2>
                          </div>
                    </div>
<div class="container py-5">
<div class="row">
<div class="col-md-12  mt-3">
<div id="success_message"></div>
<div class="card">
<div class="card-header">
    <!-- SEARCH BY TASK START -->
   <nav class="navbar navbar-light bg-light">
      <form   action="" class="form-inline col-md-9">
         <a class="btn btn-danger text-white" href="{{ route('dashboard') }}" role="button">Back</a> &nbsp;&nbsp;
         <input  type="search"  name="search" id="" class="form-control" placeholder="Search Subcategory"  value= "{{$search}}">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
   </form>
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
     + Add Sub Category
     </button>
</div>
<!--table start-->
<div class="card-body">
   <table class="table table-bordered">
      <thead>
        <tr role="row">
       
        <th>S.No</th>
        <th>Category</th>
        <th>Sub Category Name</th>

             
      

       
        <th style="margin-left: center;">Action</th>
         </tr></thead>
      <tbody>
        @if(!empty($subcategory))
        @foreach($subcategory as $sub_category)
        <tr> 
         <th>{{$sub_category->id}}</th>
         <th>{{$sub_category->category}}</th>
         <th>{{$sub_category->name}}</th>


                <td>
                  <button type="button"  value="{{$sub_category->id}}" class="btn btn-primary editbtn btn-sm">Edit</button><br>
                  <button type="button"  value="{{$sub_category->id}}" class="btn btn-danger deleteemployeeBtn">Delete</button></td>
            
            
            </tr>
            
        @endforeach
        @endif

      </tbody>
     </table>

</div>

<div class="clearfix">
      <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
          <ul class="pagination">
              <li class="page-item disabled"><a href="#">Previous</a></li>
              <li class="page-item"><a href="#" class="page-link">1</a></li>
              <li class="page-item"><a href="#" class="page-link">2</a></li>
              <li class="page-item active"><a href="#" class="page-link">3</a></li>
              <li class="page-item"><a href="#" class="page-link">4</a></li>
              <li class="page-item"><a href="#" class="page-link">5</a></li>
              <li class="page-item"><a href="#" class="page-link">Next</a></li>
          </ul>
      </div>
</div>
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
<!-- Edit Modal HTML -->     
 
  <div id="editEmployeeModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editEmployeeModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
         <Form action="{{url('/subcategory/update/')}}" method="POST"  id="editForm">
            @method('PUT')  
                      @csrf 
                      <input type="hidden" id="sub_id" name="sub_id"/>
              <div class="modal-header">						
                 <h4 class="modal-title"  id="editEmployeeModalLabel">Edit Sub Category</h4>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">			
                    <div class="form-group">
                    <label>Category <span style="color: red">*</span></label>
                    <select name="category" class="category  form-control"  id="category" data-live-search="true"  data-size="8" tabindex="null">
                     @foreach($List as $row)
                     <option value="{{$row->category}}">{{$row->category}}</option>
                      @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                          <label>Sub Category <span style="color: red">*</span></label>
                          <input type="text" class="name form-control" name="name" id="name1" required>
                       </div>
                       
              </div>
              <div class="modal-footer">
                 <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
                 <input type="submit" class="btn btn-info" value="Update">
              </div>
           </form>
        </div>
     </div>
  </div>




<!-- Delete Modal HTML -->



  <div id="deleteModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
        <form  action="{{ url('/subcategory/destroy/')}}"  method="POST">
           @csrf 
            <div class="modal-header">						
               <h4 class="modal-title"  id="deleteModalLabel">Delete Category</h4>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="form-group">					
               <p>Are you sure you want to delete these Records?</p>
               <p class="text-warning"><small>This action cannot be undone.</small></p>
               <input type="hidden" name="id" id="id">
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

  <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
         <Form  action="{{route('aadsubcategory')}}" method="POST" id="sub_form" >
            @csrf
               <!-- <pre>
                   @php
                        print_r($errors->all());
                   @endphp
                  </pre> -->
              <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Add Sub Category</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">
                 <div class="form-group">
                  <label for="">Caterogy *</label>
                  <select name="category" class="category  form-control"  id="category" data-live-search="true"  data-size="8" tabindex="null">
                       @foreach($List as $row)
                       <option value="{{$row->category}}">{{$row->category}}</option>
                        @endforeach
                        </select>
                       
                         <span class="text-danger">
                          @if ($errors->has('category'))
                          <small class="error">{{ $errors->first('category') }}</small>
                          @endif
                          </span>
                 </div>

                 <div class="form-group">
                  <label for="">SubCategory *</label>
                  <input type="text" class="name form-control" name="name" id="name" required>
                 </div>
                 <span class="text-danger">
                  @if ($errors->has('name'))
                  <small class="error">{{ $errors->first('name') }}</small>
                  @endif
                  </span>
              </div>

              <div class="modal-footer">
                 <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
                 <button type="submit" id="submit"   class="btn btn-primary add_subcategory">Add</button>
              </div>
           </form>
        </div>
     </div>
  </div>



@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function (){
   $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
   $('.deleteemployeeBtn').click(function (e) {
                e.preventDefault();
               var id = $(this).val();
                $('#id').val(id);
                $('#deleteModal').modal('show');

              }); 

            $(document).on('click', '.editbtn', function(){
              

              var sub_id = $(this).val();

              $('#editEmployeeModal').modal('show');
              
              $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                    type: "GET",
                    url: "/subcategory/edit/"+sub_id,
                      success: function (response){
                        //console.log("Hello world!");
                      $('#sub_id').val(response.subcategory.id);
                      $('#name1').val(response.subcategory.name)  
                      $('#category1').val(response.subcategory.category)     

}



});

      });
          
   });
         </script>
@endsection