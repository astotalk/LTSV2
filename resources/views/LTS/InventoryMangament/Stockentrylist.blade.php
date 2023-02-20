@extends('LTS.layouts.main')
@section('content-header')

     <!-- Start dashboard inner -->
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
                    <div class="full graph_head ">
                       <div class="heading1 margin_0">
                          <h2>Stock Entry List</h2>
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
<a class="btn btn-danger text-white" href="dashboard.php" role="button">Back</a> &nbsp;&nbsp;
  <input type="2112" class="search  form-control mr-sm-2"  name="search_empid" id="search_empid"   placeholder="Search">
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
              
              <th ><b>S.No.</b></th>
              <th ><b>Stock Date</b></th>
              <th><b>Client </b></th> 
              <th ><b>Received By</b></th>
              <th ><b>Entry By</b></th>
              <th style="text-align: center;"> Action</th>
           </tr>
     </thead>
     <tbody>
      <tr role="row" class="odd">
    @foreach($stockentry as $partlist)
     
      <td>{{$partlist->id}}</td>
      <th>{{$partlist->ReceivedDate}}</th>
      <th>{{$partlist->client_name}}</th>
      <th>{{$partlist->ReceivedBy}}</th>
      <th></th>
    
      
    
   
   <td>
                 <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                       <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                    <a class="btn btn-info text-white" href="updatepricelist.php" role="button">View</a> 
                    </ul>
                 </div>
           </td>                     
        </tr>
        @endforeach
     </tbody>
</table>
</div>
</div>
</br>

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