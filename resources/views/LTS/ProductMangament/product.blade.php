@extends('LTS.layouts.main')
@section('content-header')

       <!-- Start dashboard inner -->
       <div class="midde_cont">
         <div class="container-fluid">
            <!-- row -->
            <div class="row column1">
               <div class="col-md-12">
                  <div class="white_shd full margin_bottom_30">
                     <div class="full graph_head ">
                        <div class="heading1 margin_0">
                           <h2>Manage Product</h2>
                           </div>
                     </div>
<div class="container py-5">
                  <div class="row">
                        <div class="col-md-12 mt-3">
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
                                 <input  type="search"  name="search" id="" class="form-control" placeholder="Search name"  value= "{{$search}}">
                                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                           </form>
                                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                 + Add Product Details
                                 </button>
                                    </div>
                                       <div class="card-body">
                                          <table class="table table-bordered">      
                                                   <thead class="thead-dark">
                                                   <tr>
                                                   <th><b>S.No.</b></th>
                                                   <th><b>Product Name / Model Number</b></th> 
                                                   <th><b>Category</b></th>
                                                   <th><b>Brand Name</b></th> 
                                                   <th><b>Price</b></th>
                                                   <th><b>Status</b></th>
                                                      <th><b>Image</b></th>
                                                      <th style="width:150px">Action</th>
                                                   </tr>
                                                   </thead>
                                                   <tbody>
                                                   @if(!empty($product))
                                                   @foreach($product as $product_id)
                                                   <tr>
                                                   
                                                         <td>{{$product_id->id}}</td>
                                                         <th>{{$product_id->product_model_name}}</th>
                                                         <th>{{$product_id->category_name}}</th>
                                                         <th>{{$product_id->brand_name}}</th>
                                                         <th>{{$product_id->price}}</th>
                                                      <th>
                                                         <?php if($product_id->status == '1'){ ?>
                                                            <label for=""  class="btn btn-success">Active</label>
                                                            <?php }else { ?>
                                                               <label for=""  class="btn btn-warning">De-active</label>
                                                               <?php  } ?>
                                                      </th>

                                                         <td>
                                                            <img src="{{ asset('lts_assets/images/landing_page/'.$product_id->upload_image)}}" width="70px" alt="Image">
                                                         </td>
                                                         <td>
                                                            <button type="button"   data-url="{{ url('/product/show', $product_id->id) }}" id="show-user"  class="btn btn-success showbtn btn-sm">View</button>                 
                                                         <button type="button"  value="{{$product_id->id}}" class="btn btn-primary editbtn btn-sm">Edit</button><br>
                                                         
                                                      
                                                         
                                                         </tr>
                                                   @endforeach
                                                   @endif 
                                                   </tbody>
                                                </table>
                                                   {{$product->links()}}
                                     </div>
                                 </div>
                              </div>
                           </div>
                      </div>
                  </div>
             </div>
          </div>
      </div>
  </div>
<!-- The Modal -->

<div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModal" aria-hidden="true">
   <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <Form    action="{{route('productstore')}}" method="post" id="savefrom_errList">
         @csrf
       <div class="modal-header">
       <h5 class="modal-title" id="myModal">Add Product</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
          <div class="form-group">
               <label for="inputproduct" class="form-label">Category</label>
               <select name="category_name" class="category_name form-control"  id="category_name" data-live-search="true"  data-size="8" tabindex="null">
                  <option value='0'>-- Select category --</option>
                  @foreach($categorylist['data']   as $category_name)
                   <option value="{{$category_name->category_name}}">{{$category_name->category_name}}</option>
                  @endforeach
                  </select>
           </div><br>
           <div class="form-group">
            <label for="formGroupExampleInput">Brand <span style="color: red">*</span></label>
            <select name="brand_name" class="brand_name form-control"  id="brand_name" data-live-search="true"  data-size="8" tabindex="null" required/>
            <option value='0'>-- Select Brand --</option>
            </select>
          </div><br>
       
          <div class="form-group">
             <label for="inputprice" class="form-label"> Product Name/ Model Number</label>
             <input type="text" class="product_model_name form-control" name="product_model_name"   required>
          </div>
   
          <div class="form-group">
            <label for="inputprice" class="form-label">Product Type</label>
            <input type="text" class="product_type form-control" name="product_type"   required>
         </div>

          <div class="form-group">
             <label for="inputprice" class="form-label"> Price</label>
             <input type="text" class="price form-control" name="price" required>
          </div>
   
          <div class="form-group">
             <label for="inputinventory" class="form-label"> Inventory</label>
             <input type="text" class="inventory form-control" name="inventory" id="inventory" required>
          </div>
          
          <div class="form-group">
          <label for="inputtax" class="form-label"> HSN</label>
             <input type="text" class="form-control" name="hsn" required>
          </div>
   
          <div class="form-group">
             <label for="inputtax" class="form-label"> GST</label>
             <input type="text" class="form-control" name="gst" required>
          </div>
   
       <div class="form-group">
             <label for="inputTextarea" class="form-label">  Description</label>
             <textarea class="form-control" placeholder="" name="description" row="3" id="inputTextarea"></textarea>
          </div>
          <div class="col-12">
            <label for="">Status *</label>
             <select name="status" class="status  form-control select_type" id="status">
               <option value="1">Active</option>
               <option value="0">Deactive</option>
             </select>
            </div><br>
          <div class="row">
             <div class="col-12 ">
                <div class="input-group ">
                  <input type="file"  class="upload_image form-control" name="upload_image" id="upload_image">   
                      <button type="submit" id="submit"   class="btn btn-primary add_product">Add</button>
                </div>
             </div>
          </div>
       </div>
   
       <div class="modal-footer">
       <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
       <input type="submit" class="btn btn-info" value="Add">
       </div>
    </form>
    </div>
   </div>
   </div>

   <div class="modal fade" id="userShowModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="userShowModal" aria-hidden="true">
               <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="userShowModal">Show Product</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  
                  <div class="card-body">
                     <p><strong>Product Name/ Model Number:</strong> <span id="product_name"></span></p>
                     <p><strong>Category:</strong> <span id="name"></span></p>
                     <p><strong>Brand Name:</strong> <span id="brand_name1"></span></p>
                     <p><strong>Price:</strong> <span id="price"></span></p>
                     <p><strong>Inventory:</strong> <span id="inventory1"></span></p>
                     <p><strong>HSN:</strong> <span id="hsn"></span></p>
                     <p><strong>GST:</strong> <span id="gst"></span></p>
                     <p><strong>Description:</strong> <span id="description"></span></p>
                     <img src="{{ asset('lts_assets/images/landing_page/'.$product_id->upload_image)}}" width="70px" alt="Image">
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                  </div>
               </div>
            </div>   
         </div> 
     <!-- Edit Modal HTML --> 
     <div class="modal fade" id="editProductModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editProductModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
       <div class="modal-content">
         <Form action="{{url('/product/update/')}}" method="POST"  id="editForm">
        @method('PUT')  
           @csrf 
           <input type="hidden" name="pro_id" id="pro_id">
          <div class="modal-header">
          <h5 class="modal-title" id="editProductModal">Edit Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
             <div class="form-group">
                  <label for="inputproduct" class="form-label">Category</label>
                  <select name="category_name" class="category_name form-control"  id="category_name1" data-live-search="true"  data-size="8" tabindex="null">
                     <option value='0'>-- Select category --</option>
                        @foreach($categorylist['data'] as $category_name)
                          <option value="{{$category_name->category_name}}">{{$category_name->category_name}}</option>
                         @endforeach
                     </select>
              </div>
           
      
              <div class="form-group">
               <label for="formGroupExampleInput">Brand <span style="color: red">*</span></label>
                  <select name="brand_name" class="brand_name form-control"  id="brand_name" data-live-search="true"  data-size="8" tabindex="null" required/>
                   <option value='0'>-- Select Brand --</option>
                  </select>
               </div><br>
          
             <div class="form-group">
                <label for="inputprice" class="form-label"> Product Name/ Model Number</label>
                <input type="text" class="product_name form-control" name="product_model_name" id="product_model_name1"   required>
             </div>
      
             <div class="form-group">
                <label for="inputprice" class="form-label"> Price</label>
                <input type="text" class="price form-control" name="price" id="price1" required>
             </div>
      
             <div class="form-group">
                <label for="inputinventory" class="form-label"> Inventory</label>
                <input type="text" class="inventory form-control" name="inventory" id="inventory1" required>
             </div>
             
             <div class="form-group">
             <label for="inputtax" class="form-label"> HSN</label>
                <input type="text" class="hsn form-control" name="hsn" id="hsn1" required>
             </div>

             <div class="form-group">
                <label for="inputtax" class="form-label"> GST%</label>
                <input type="text" class="gst form-control" name="gst" id="gst1" required>
             </div>
      
             <div class="form-group">
               <label for="">Status *</label>
                <select name="status" class="status  form-control select_type" id="status1">
                  <option value="1">Active</option>
                  <option value="0">Deactive</option>
                </select>
               </div><br>

          <div class="form-group">
                <label for="inputTextarea" class="form-label">Description</label>
                <textarea class="description form-control" id="description1" name="description" row="3" id="inputTextarea"></textarea>
             </div>
          
             <div class="row">
                <div class="col-12 ">
                   <div class="input-group ">
                     <input type="file"  class="upload_image form-control" name="upload_image" id="upload_image1">   
                         <button type="submit" id="submit"   class="btn btn-primary add_product">Add</button>
                   </div>
                </div>
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
       
 @endsection
 @section('scripts')
<script type="text/javascript">
$(document).ready(function(){ 



   $('#category_name').change(function(){

// Client id
var id = $(this).val();

// Empty the dropdown
$('#brand_name').find('option').not(':first').remove();
$.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
// AJAX request 
$.ajax({
   url: '/product/categorychangedata/'+id,
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
                var brand_name = response['data'][i].brand_name;
                var idbrand_name = id+'_'+brand_name;
                var option = "<option value='"+brand_name+"'>"+brand_name+"</option>";
      
          $("#brand_name").append(option); 
          
       }
    }

  }
});
});


/* When click show user */
$('body').on('click', '#show-user', function () {
          var userURL = $(this).data('url');
          $.get(userURL, function (data) {
              $('#userShowModal').modal('show');
              $('#id').text(data.id);
              $('#product_model_name').text(data.product_model_name);
              $('#category_name1').text(data.category_name);
              $('#brand_name1').text(data.brand_name);
              $('#price').text(data.price);
              $('#inventory1').text(data.inventory);
              $('#hsn').text(data.hsn);
              $('#gst').text(data.gst);
              $('#description').text(data.description);
              $('#upload_image1').text(data.upload_image); 
          })
       });


 $(document).on('click', '.editbtn', function(){
      var pro_id = $(this).val();
        $('#editProductModal').modal('show');
              
      $.ajaxSetup({
               headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
            });
            $.ajax({
            type: "GET",
            url: "/product/edit/"+pro_id,
               success: function (response){
               // console.log($response);
               $('#pro_id').val(response.product.id);
               $('#product_model_name1').val(response.product.product_model_name)   
               $('#category_name1').val(response.product.category_name)    
               $('#brand_name1').val(response.product.brand_name);
               $('#price1').val(response.product.price)   
               $('#inventory1').val(response.product.inventory)   
               $('#hsn1').val(response.product.hsn)    
               $('#gst1').val(response.product.gst);
               $('#status1').val(response.product.status);
               $('#description1').val(response.product.description)  
               }
            });
                  
         });  
      });
 </script>
  @endsection