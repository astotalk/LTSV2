@extends('LTS.layouts.main')
@section('content-header')
<div class="container-fluid">
    <div class="row column_title">
       <div class="col-md-12">
          <div class="page_title">
             <h2>Bill Management</h2>
          </div>
       </div>
    </div>
    <!-- row -->
    <div class="row column1">
       <div class="col-md-12">
          <div class="white_shd full margin_bottom_30">
            
                 <div class="container py-5">
                    <div class="row">
                     <div class="col-md-12">
                      <div id="success_message"></div>
                       <div class="card mt-3">
                        <div class="card-header">
                         <nav class="navbar navbar-light bg-light">

                           <div class="d-grid gap-2 d-md-flex">
                            <a class="btn btn-danger text-white" href="{{ route('dashboard') }}" role="button">Back</a>
                            </div>     
                         </div>
                         <form action="{{route('getdatareport')}}" method="POST">
                            @csrf
                      <div class="form-group mt-3">
                   <div class="col-12">
                        <label for="Date" class="form-label">From Date <span style="color: red">*</span></label>
                        <input type="date" class="form-control" id="dateForm"   placeholder="dd-mm-yyyy"  name="dateForm" required="">
                        </div><br>
                            <div class="col-12">
                            <label for="Date" class="form-label">To Date <span style="color: red">*</span></label>
                            <input type="date" class="form-control" id="dateTo"    placeholder="dd-mm-yyyy" name="dateTo" required="">
                            </div>
                        </div>
                         <div class="col-4">
                            <input type="submit" value="Submit" class="btn btn-warning">
                            </div><br>
                          </div>
                        </form><br>
                        <div class="row">
                            <table id="example" class="table table-condensed table-bordered">
                              <thead  class="white_shd  margin_bottom">
                                          <tr> 
                                             <th ><b>S.No.</b></th>
                                             <th><b>Complaint Id</b></th> 
                                             <th><b>Reg-Date</b></th>
                                             <th><b>Escalation</b></th> 
                                             <th><b>TAT</b></th>
                                             <th><b>Status</b></th>
                                             <th><b>Customer</b></th> 
                                             <th><b>Phone No.</b></th>
                                             <th><b>Block</b></th> 
                                             <th><b>City</b></th>
                                             <th><b>State</b></th>
                                             <th><b>Product Type</b></th>
                                             <th><b>Brand</b></th>
                                             <th><b>Model</b></th>
                                             <th><b>Date</b></th>
                                             <th style="width:154px">Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        @if(!empty($addcomplaits))
                                          @foreach($addcomplaits as $addcomp)
                                          <tr> 
                                             <td>{{$addcomp->id}}</td>
                                             <th>{{$addcomp->complaint_id}}</th>
                                             <th>{{$addcomp->date}}</th>
                                             <th></th>
                                             <th>{{$addcomp->tat}}</th>
                                             <th>{{$addcomp->status}}</th>
                                             <th>{{$addcomp->custom_name}}</th>
                                             <th>{{$addcomp->custom_mobile}}</th>
                                             <th>{{$addcomp->block}}</th>
                                             <th>{{$addcomp->district}}</th>
                                             <th>{{$addcomp->state}}</th>
                                             <th>{{$addcomp->product_type}}</th>
                                             <th>{{$addcomp->brand_name}}</th>
                                             <th>{{$addcomp->model_no}}</th> 
                                          
                                             <td>{{ date('M d, Y h:i A', strtotime($addcomp->created_at)) }}</td>
                                             <td>
                                                <div class="dropdown">
                                                   <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                                      <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                       
                                                          <button type="button"   data-url="{{ url('/closedreport/view', $addcomp->id) }}" id="show-view"   class="btn btn-danger  showbtn btn-sm">View</button><br>
                                                        
                                                       </ul>
                                                     </div>
                                                   </td>
                                                 </tr>
                                               @endforeach
                                               @endif
                                             </tbody> 
                                             <tfoot>
                                                <tr>
                                                    <th ><b>S.No.</b></th>
                                                    <th><b>Complaint Id</b></th> 
                                                    <th><b>Reg-Date</b></th>
                                                    <th><b>Escalation</b></th> 
                                                    <th><b>TAT</b></th>
                                                    <th><b>Status</b></th>
                                                    <th><b>Customer</b></th> 
                                                    <th><b>Phone No.</b></th>
                                                    <th><b>Block</b></th> 
                                                    <th><b>City</b></th>
                                                    <th><b>State</b></th>
                                                    <th><b>Product Type</b></th>
                                                    <th><b>Brand</b></th>
                                                    <th><b>Model</b></th>
                                                    <th><b>Date</b></th>
                                                    <th style="width:154px">Action</th>
                                                  
                                                </tr>
                                            </tfoot>     
                                           </table>
                                        
                                    
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
   $(document).ready(function() {
       $('#example').DataTable();
   } );
</script>

@endsection