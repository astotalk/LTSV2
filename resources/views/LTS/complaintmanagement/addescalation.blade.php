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
                     <h2>Add Escalation</h2>
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
                  </form>
                  </div>
               <!--table start-->
                     <div class="card-body">
                        <div class="row g-3">
                        <div class="col ms-1 me-2 mt-3">  
                        <label for="text" class="form-label">Complaint ID</span></label>
                        <form   action="" class="form-inline col-md-9">
                           <a class="btn btn-danger text-white" href="{{ route('dashboard') }}" role="button">Back</a> &nbsp;&nbsp;
                           <input  type="search"  name="search" id="" class="form-control" placeholder="Search Complaint"  value= "{{$search}}">
                           <button type="submit" class="btn btn-primary "  name="search" id="search" onclick="FetchSearchData();">Search</button>
                     </form>
                   
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
   function FetchSearchData(){
       var id = document.getElementById('search').value;
       if (id == "") {
           alert("Please Enter At Least One Parameter !!")
       } else {
           $.ajax({
               type: "GET",
               url: "/addescalation/FetchSearchData/"+id,
               beforeSend: function () {
                   $("#search").html("Please Wait Loading....");
               },
               data: {
                   'search': search
               },
               success: function (msg) {
                   $("#search").html(msg);
               }
           });
       }
   }
</script>

@endsection