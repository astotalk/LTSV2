@extends('LTS.layouts.main')
@section('content-header')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="container py-5">
          <div class="row">
           <div class="col-12">
             <div id="success_message"></div>
                <div class="card mt-3">
                  <div class="card-header">
<!-- SEARCH BY TASK START -->
<div class="container-scroller">
   <div class="container-fluid page-body-wrapper full-page-wrapper">
       <div class="col-md-12 grid-margin stretch-card">
           <div class="card">
            <div class="card-body">
               <form method="get"  class="form-inline">
                  <a class="btn btn-danger text-white" href="{{ route('dashboard') }}" role="button">Back</a> &nbsp;&nbsp;
              <input  type="search"  name="search" id=""  class="form-control" placeholder="Search Complaint"  value= "{{$search}}">
              
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
         </div> 

                  
                     <table id="myDataTable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                           <th>S.NO</th>
                           <th>Complaint Id</th>
                           <th>Customer</th>
                           <th>State</th>
                           <th>City</th>
                           <th>Brand</th>
                           <th>Model</th>
                           <th>Product Type</th>
                           <th>Status</th>
                           <th>O-CRM ID</th>
                          
                        </tr>
                        </thead>
                     
                        <tbody>
                           @if(!empty($addcomplaits))
                           @foreach($addcomplaits as $addcomp)
                           <tr>
                              <td> {{$addcomp->id}}</td>
                              <th>{{$addcomp->complaint_id}}</th>
                              <th>{{$addcomp->custom_name}}</th>
                              <th>{{$addcomp->state}}</th>
                              <th>{{$addcomp->district}}</th>
                              <th>{{$addcomp->type_brand}}</th>
                              <th>{{$addcomp->type_model}}</th>
                              <th>{{$addcomp->product_type}}</th>
                              <th>{{$addcomp->status}}</th>  
                           </tr>
                           @endforeach
                           @endif
                        </tbody>      
                        <tfoot>
                        <tr>
                           <th>S.NO</th>
                           <th>Complaint Id</th>
                           <th>Customer</th>
                           <th>State</th>
                           <th>City</th>
                           <th>Brand</th>
                           <th>Model</th>
                           <th>Product Type</th>
                           <th>Status</th>
                           <th>O-CRM ID</th>
                          
                        </tr> 
                     </table>
                  </div>
                 </div>
               </div>
           </div>
       </div>
   </div>
   <!-- content-wrapper ends -->
</div>
<!--row close-->
</div>
</div>

@endsection

@section('scripts')

 <script>
  
  $(document).ready(function() {
    $('#myDataTable').DataTable( {
        
       
    } );
} );
</script>
@endsection


