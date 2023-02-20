@extends('LTS.layouts.main')
@section('content-header')
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
                   <h2>Add Service Center Price List</h2>
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
                     <a class="btn btn-danger text-white" href="dashboard.php" role="button">Back</a>
                   </div>     
                    </div>
</br>
                <Form action="{{route('addpricestore')}}"  method="POST">
                    @csrf
            <div class="card-body">
                <div class="form-group ms-2 me-2">
                   <label for="inlineFormCustomSelect">&nbsp;&nbsp;Service Center <span style="color: red">*</span></label>
                     <select class="service_center_name form-control" id="service_center_name" name="service_center_name" required="">
                       @foreach($addservice as $service_center_name)
                        <option value="{{$service_center_name->service_center_name}}">{{$service_center_name->service_center_name }}</option>
                         @endforeach   
                        </select>
                        </div>

                            <table id="empTable" class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <th>Product Type</th>
                                    <th>Call Charge</th>
                                </tr>
                                
                                <tr>
                                    <td>
                                        @if(!empty($product))
                                        @foreach($product as $product_id)
                                        <tr>
                                            <th>{{$product_id->product_type}}<input type="text" class="product_type form-control " id="product_type" name="product_type" value="1" hidden=""></th>    
                                                        
                                        </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="CallCharge" name="CallCharge" value="0" required="">
                                        </div>
                                    </td>
                                </tr>
                                
                                @endforeach
                                @endif
                                
                            </tbody>
                            </table>

                            <div class="form-group ms-2 me-2">
                                    <label for="formGroupExampleInput2">&nbsp;&nbsp;Free KM <span style="color: red">*</span></label>
                                    <input type="text" class="FreeKM form-control" id="FreeKM" name="FreeKM"  placeholder="KM" required="">
                            </div>
                            <div class="form-group ms-2 me-2">
                                <label for="formGroupExampleInput2">&nbsp;&nbsp;Amount After Free KM <span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="AmountAfterFreeKM" name="AmountAfterFreeKM" placeholder="Per KM Charge">
                            </div>
                                <div class="col-4">                
                                    <button type="submit" id="submit"   class="btn btn-primary add_price">Add</button>
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