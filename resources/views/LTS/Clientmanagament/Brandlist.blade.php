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
                      <h2>Brand List</h2>
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
            <input  type="search"  name="search" id="" class="form-control" placeholder="Search Client" >
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
                     <th><b>Client Name<b></th> 
                     <th><b>Brand Name<b></th>
                     <th><b>Status<b></th>
                     <th style="text-align: center;"><b> Action<b></th>
                  </tr>
    </thead>
       <tbody>

                           <tr role="row" class="odd">
         
                                   @if(!empty($clientmanagement))
                                    @foreach($clientmanagement as $clien_id)
                                    
                                    <tr> 
                                    <th>{{$clien_id->id}}</th>
                                    <th>{{$clien_id->client_name}}</th>
                                    <th></th>
                                   </th></th>
                                    <td>
                                        <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                        <li>
                                        <button type="button"  value="{{$clien_id->id}}" class="btn btn-primary editbtn btn-sm">Update</button>&nbsp;
                                        <button type="button"   data-url="{{ url('/clientlist/view', $clien_id->id) }}" id="show-user"   class="btn btn-danger  showbtn btn-sm">View</button>&nbsp;<br>                  
                                        <button type="button"  value="{{$clien_id->id}}" class="btn btn-danger sharebtn btn-sm">Deactive</button> &nbsp;
                                        </ul>
                                        </div>
                                    </td>   
                                    @endforeach
                                    @endif
       </tr>
    </tbody>
 </table>
 <div class="clearfix">
    <div class="hint-text ms-2">Showing <b>5</b> out of <b>25</b> entries</div>
       <ul class="pagination">
          <li class="page-item "><a href="#">Previous</a></li>
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