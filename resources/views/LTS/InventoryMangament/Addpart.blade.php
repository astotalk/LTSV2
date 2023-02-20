@extends('LTS.layouts.main')
@section('content-header')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
                <div class="page_title">
                   <h2>Inventory Management</h2>
                </div>
          </div>
       </div>
   <!-- row -->
       <div class="row column1">
          <div class="col-md-12">
             <div class="white_shd full margin_bottom_30">

                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Add Parts </h2>
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
                                  <div class="d-grid gap-2 d-md-flex">
                                     <a class="btn btn-danger text-white" href="dashboard.php" role="button">Back</a>
                                  </div>     
                               </div>
                               <Form    action="{{route('addpartstore')}}" method="post" id="savefrom_errList">
                                 @csrf
                               <div class="card-body">
                                  <div class="form-group">
                                     <div class="col-12">
                                        <label for="formGroupExampleInput">Client <span style="color: red">*</span></label>
                                        <select class="client_name form-control" id="client_name1" name="client_name" required="">
                                          <option value='0'>-- Select Client --</option>
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
                                        <input type="text" class="part_name form-control" id="part_name" name="part_name" id="part_name1"  placeholder="Part name" required="">
                                     </div> 
                                  </div>  
                                  
                                  <div class="form-group">
                                     <div class="col-12">
                                        <label for="formGroupExampleInput2">Part Cost <span style="color: red">*</span></label>
                                        <input type="text" class="part_cost form-control" id="part_cost" name="part_cost"  id="part_cost1"  placeholder="Part cost" required="">
                                     </div> 
                                  </div>    

                                  <div class="form-group">
                                     <div class="col-12">
                                        <label for="formGroupExampleInput2">Part Code <span style="color: red">*</span></label>
                                        <input type="text" class="part_code form-control" id="part_code" name="part_code"  id="part_code1"   placeholder="Part code" required="">
                                     </div> 
                                  </div>   
                                  <div class="form-group">
                                    <div class="col-12">
                                  <select name="status" class="status  form-control " id="status">
                                    <option value="1">Active</option>
                                    <option value="0">De-Active</option>
                                  </select>
                                 </div> 
                              </div>  

                                        <div class="col-4">
                                           <input type="submit" class="btn btn-info" value="Submit">
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
       </div>
       <!--row close-->

    </div>
 </div>

</div>
</div>
<!-- end dashboard inner -->
</div>
</div>
@endsection