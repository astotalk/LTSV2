@extends('LTS.layouts.main')
@section('content-header')
   <!-- Start dashboard inner -->
   <div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2>Client Management</h2>
             </div>
          </div>
       </div>
       <!-- row -->
       <div class="row column1">
          <div class="col-md-12">
             <div class="white_shd full margin_bottom_30">
                <div class="full graph_head ">
                   <div class="heading1 margin_0">
                      <h2>Model-No. List</h2>
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

                     <form method="get"  class="form-inline">
                        <a class="btn btn-danger text-white" href="{{ route('dashboard') }}" role="button">Back</a> &nbsp;&nbsp;
                          <input  type="search"  name="search" id="" class="form-control" placeholder="Search Client" value= "{{$search}}">
                              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>

                        <div class="d-grid gap-2 d-md-flex">
                        <a class="btn btn-outline-success" tabindex="0" aria-controls="empTable" href="#"><span>Copy</span></a>
                        <a class="btn btn-outline-success" tabindex="0" aria-controls="empTable" href="#"><span>CSV</span></a>
                        <a class="btn btn-outline-success" tabindex="0" aria-controls="empTable" href="#"><span>Excel</span></a>
                        <a class="btn btn-outline-success" tabindex="0" aria-controls="empTable" href="#"><span>PDF</span></a>
                        <a class="btn btn-outline-success" tabindex="0" aria-controls="empTable" href="#"><span>Print</span></a>
                        </div>
                    </div>
                              <!--table start-->
                              <div class="card-body">

                              <table class="table table-condensed table-bordered ">
                              <thead class="thead-dark ">
                                    <tr>
                                       
                                       <th><b>S.No.</b></th>
                                       <th><b>Client Name</b></th> 
                                       <th><b>Brand Name</b></th>
                                       <th><b>Product Type</b></th> 
                                       <th><b>Modal No.</b></th>
                                       <th><b>Status</b></th>
                                       <th style="text-align: center;"> <b>Action</b></th>
                                    </tr>
                              </thead>
                              <tbody>
                                 
                                                             @if(!empty($addmodelno))
                                                              @foreach($addmodelno as $model)
                                                              <tr> 
                                                              <th>{{$model->id}}</th>
                                                              <th>{{$model->client_name}}</th>
                                                              <th>{{$model->brand_name}}</th>
                                                              <th>{{$model->product_type}}</th>
                                                              <th>{{$model->model_no}}</th>
                                                              <th>
                                                               <?php if($model->status == '1'){ ?>
                                                                  <label for=""  class="btn btn-success">Active</label>
                                                                   <?php }else { ?>
                                                                     <label for=""  class="btn btn-warning">De-active</label>
                                                                     <?php  } ?>
                                                              </th>
                                                              <td>
                                                                  <div class="dropdown">
                                                                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button>
                                                                  <ul class="dropdown-menu">
                                                                  <li>               
                                                                  <button type="button"  value="{{$model->id}}" class="btn btn-warning  sharebtn btn-sm">De-active</button> &nbsp;
                                                                  </li>
                                                                   </ul>
                                                                  </div>
                                                              </td>
                                                              @endforeach
                                                              @endif
                                                         </tr>
                                                      </tbody>
                                                      </table>
                                             
                                </div>
                                {{$addmodelno->links()}}
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

@endsection