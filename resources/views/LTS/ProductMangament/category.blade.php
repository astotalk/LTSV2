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
                      <h2> Category</h2>
                   </div>
                </div>
<div class="container py-5">
<div class="row">
<div class="col-md-12  mt-3">
   @if(session('status'))
   <div class="alert alert-success">{{session('status')}}</div>
   @endif
<div id="success_message"></div>
<div class="card">
<div class="card-header">
<!-- SEARCH BY TASK START -->
<nav class="navbar navbar-light bg-light">
   <form   action="" class="form-inline col-md-9">
      <a class="btn btn-danger text-white" href="{{ route('dashboard') }}" role="button">Back</a> &nbsp;&nbsp;
      <input  type="search"  name="search" id="" class="form-control" placeholder="Search Category"  value= "{{$search}}">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  + Add Category
 </button>
</div>
<!--table start-->
<div class="card-body">
   <table class="table table-bordered">
      <thead>
        <tr >
       
        <th>S.No</th>
        <th>Caterory Name</th>
        <th style="width:154px">Action</th>
         </tr></thead>
      <tbody>
   
        @if(!empty($category))
        @foreach($category as $cate_product)
               <tr> 
              <th>{{$cate_product->id}}</th>
              <th>{{$cate_product->name}}</th>
                <td>
                <button type="button"  value="{{$cate_product->id}}" data-bs-toggle="modal" class="btn btn-warning editbtn btn-sm">Edit</button> ||
                <button type="button"  value="{{$cate_product->id}}"   class="btn btn-danger deleteemployeeBtn">Delete</button></td>
               
            </tr>
        @endforeach
        @endif
      </tbody>
     </table>
   
      {{$category->links()}}

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
   <Form    action="{{url('/category/update/')}}" method="POST"  id="editForm">
 
      @method('PUT')  
                @csrf 
                <input type="hidden" id="cate_id" name="cate_id"/>
       <div class="modal-header">						
          <h4 class="modal-title"  id="editEmployeeModalLabel">Edit Category </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">			
             <div class="form-group">
                   <label>Category <span style="color: red">*</span></label>
                   <input type="text" name="name" id="name" class="form-control" placeholder="Enter Category" required>
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
      <form  action="{{ url('/category/destroy/')}}"  method="POST">
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




<!-- Modal -->
<div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
   <Form  action="{{route('addcategory')}}" method="POST" id="emp_form">
      @csrf
      
    <div class="modal-header">
    <h5 class="modal-title" id="myModalLabel">Add Category </h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
          <div class="form-group">
                <label>Category <span style="color: red">*</span></label>
                <input type="text" class="name form-control" name="name" id="name" value="{{old('name')}}" required/> 
             </div>
             <span class="text-danger">
               @if ($errors->has('name'))
               <small class="error">{{ $errors->first('name') }}</small>
               @endif
                     </span>
    </div>
    <div class="modal-footer">
    <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
    <button type="submit" id="submit"   class="btn btn-primary add_category">Add</button>
    </div>
 </form>
</div>
</div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">

  $(document).ready(function (){
   $('.deleteemployeeBtn').click(function (e) {
                e.preventDefault();
               var id = $(this).val();
                $('#id').val(id);
                $('#deleteModal').modal('show');

              });    
      $(document).on('click', '.editbtn', function(){
              

              var cate_id = $(this).val();

              $('#editEmployeeModal').modal('show');
              $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                    type: "GET",
                    url: "/category/edit/"+cate_id,
                      success: function (response){
                        //console.log("Hello world!");
                      $('#cate_id').val(response.category.id);
                      $('#name').val(response.category.name);          

}



});
           

             

});
});    
   
   </script>
@endsection