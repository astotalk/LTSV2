@extends('LTS.layouts.main')
@section('content-header')
      <div class="container-fluid">
         <div class="row column_title">
            <div class="col-md-12">
               <div class="page_title">
                  <h2>Call Center Management</h2>
               </div>
            </div>
         </div>
         <!-- row -->
         <div class="row column1">
            <div class="col-md-12">
               <div class="white_shd full margin_bottom_30">
                  <div class="full graph_head">
                     <div class="heading1 margin_0">
                        <h2>Search Complaint </h2>
                     </div>
                  </div>
               <div class="container py-5">
                  <div class="row">
                  <div class="col-md-12  mt-3">
                  <div class="card ms-3 me-3">
                     <div class="card-header">
                     <nav class="navbar navbar-light bg-light">
                     <div class="d-grid gap-2 d-md-flex">
                        <a class="btn btn-danger text-white" href="{{ route('complaintsearch') }}" role="button">Back</a>
                     </div>     
                  </div>
                     <div class="card-body">
                        <div id="PastComplaints">
                         <div id="example_wrapper" class=" dataTables_wrapper">
                           <table id="example" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="example_info">
                              <thead>
                                 <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S.NO: activate to sort column descending" style="width: 55.3281px;">S.NO</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Complaint Id: activate to sort column ascending" style="width: 118.984px;">Complaint Id</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending" style="width: 143.453px;">Customer Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Phone No: activate to sort column ascending" style="width: 92.4062px;">Phone No</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="State: activate to sort column ascending" style="width: 56.7656px;">State</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="City: activate to sort column ascending" style="width: 47.2344px;">City</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Brand: activate to sort column ascending" style="width: 63.4219px;">Brand</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Model: activate to sort column ascending" style="width: 64.2812px;">Model</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Product Type: activate to sort column ascending" style="width: 122.266px;">Product Type</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 65.8594px;">Status</th>
                                 </tr>
                                 <tbody>
                              </thead>
                                 @if(!empty($addcomplaits))
                                 @foreach($addcomplaits as $addcomp)
                                 <tr>
                                    <td> {{$addcomp->id}}</td>
                                    <th>{{$addcomp->complaint_id}}</th>
                                    <th>{{$addcomp->custom_name}}</th>
                                    <th>{{$addcomp->custom_mobile}}</th>
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
                              </table>
                                 <center>
                                    <a href="{{route('addnewcomplaint')}}" class="btn btn-success">Add New Complaint</a>
                                 </center>
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
 </div>
@endsection
@section('scripts')
<script type="text/javascript">
   $(document).ready(function() {
       $('#example').DataTable();
   } );
</script>

@endsection