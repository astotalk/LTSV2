@extends('LTS.layouts.main')
@section('content-header')
     <br><br>   
        <!-- Start dashboard inner -->
    <div class="midde_cont">
      <div class="container-fluid">
        <!-- row -->
    <div class="row column1">
        <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
            <div class="full graph_head ">
                <div class="heading1 margin_0">
                    <h2>Pending Complaint List</h2>
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
                <input  type="search"  name="search" id="" class="form-control" placeholder="Search "  value= "{{$search}}">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

    <div  id="example" class="d-grid gap-2 d-md-flex">
        <a class="btn btn-outline-success" tabindex="0" aria-controls="example" href="#"><span>Copy</span></a>
           <a class="btn btn-outline-success" tabindex="0" aria-controls="example" href="#"><span>CSV</span></a>
             <a class="btn btn-outline-success" tabindex="0" aria-controls="example" href="#"><span>Excel</span></a>
               <a class="btn btn-outline-success" tabindex="0" aria-controls="example" href="#"><span>PDF</span></a>
                 <a class="btn btn-outline-success" tabindex="0" aria-controls="example" href="#"><span>Print</span></a>
           </div>
        </div>
        <!--table start-->
<div class="card-body">
        <div style="overflow-x:auto;">
          <table id="example" class="table table-condensed table-bordered ">
             <thead class="thead-dark ">
                <tr>
                <th><b>S.No.</b></th>
                <th><b>Complaint Id</b></th> 
                <th><b>Reg-Date</b></th>
                <th><b>Escalation</b></th> 
                <th><b>TAT</b></th>
                <th><b>Status</b></th>
                <th><b>Customer</b></th> 
                <th><b>Phone No.</b></th>
                <th><b>Address</b></th>
                <th><b>Block</b></th> 
                <th><b>City</b></th>
                <th><b>State</b></th>
                <th><b>Pincode</b></th>
                <th><b>Product Type</b></th>
                <th><b>Brand</b></th>
                <th><b>Model</b></th>
                <th><b>Problem</b></th> 
                <th><b>SF Name</b></th>
                <th><b>SF Phone</b></th>
                <th><b>Update Date</b></th> 
                <th><b>Update By</b></th>
                <th><b>Remark</b></th>
                <th><b>Update Age</b></th>
                <th><b>O-CRM</b></th>
                <th><b>Assign</b></th>
                </tr>
                    </thead>
                    <tbody>
                        @if(!empty($addcomplaits))
                        @foreach($addcomplaits as $addcomp)
                        <tr>
                        <td>{{$addcomp->id}}</td>
                        <th>{{$addcomp->complaint_id}}</th>
                        <th>{{$addcomp->date}}</th>
                        <th>{{$addcomp->escalation}}</th>
                        <th>{{$addcomp->tat}}</th>
                        <th>{{$addcomp->status}}</th>
                        <th>{{$addcomp->custom_name}}</th>
                        <th>{{$addcomp->custom_mobile}}</th>
                        <th>{{$addcomp->custom_address}}</th>
                        <th>{{$addcomp->block}}</th>
                        <th>{{$addcomp->district}}</th>
                        <th>{{$addcomp->state}}</th>
                        <th>{{$addcomp->pin_code}}</th>
                        <th>{{$addcomp->product_type}}</th>
                        <th>{{$addcomp->brand_name}}</th>
                        <th>{{$addcomp->model_no}}</th>
                        <th></th>
                        <th>{{$addcomp->EngineerName}}</th>  
                        <th>{{$addcomp->custom_mobile}}</th>  
                        
                        <th>{{ $addcomp->date}}</th>
                        <th>{{ $addcomp->dates}}</th>
                        <th>{{$addcomp->remark}}</th>
                            <th></th>
                        <th></th>  

                        @endforeach
                        @endif
                      </tr>
                        </tbody>
                        </table>
                        
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
 @section('scripts')
 <script type="text/javascript">

         $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
         // AJAX request 
         $.ajax({
           url: '/pendingcallreport/index/',
           type: "GET",
           dataType: 'json',
           success:function(response){
                    
           

           }
         });
   
       
   </script>
@endsection
