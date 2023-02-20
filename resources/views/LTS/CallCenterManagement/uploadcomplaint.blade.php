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
                                    <h2>Upload Complaint </h2>
                                 </div>
                              </div>
<div class="container py-5">
   <div class="row">
      <div class="col-md-12  mt-3">
      <div class="card mt-3">
      <div class="card-header">
               <nav class="navbar navbar-light bg-light">
            
                  <div class="d-grid gap-2 d-md-flex">
                     <a class="btn btn-danger text-white" href="{{route('dashboard')}}" role="button">Back</a>
                  </div>     
            </div>
        <section class="content mt-5">
          <h4 align="center">How to Import Registration Data from CSV File</h4><br>
            <form method="post" enctype="multipart/form-data">
              <div align="center">
                <input type="file" name="file">
                <input type="submit" name="submit" value="Import" class="btn btn-info">
              </div>
            </form></br>
        </section>
      </div></div>
   </div>
</div>
 <!--------Container close-->
 </div>
 </div>
</div>
 <!--row close-->
   </div>
   </div>
</br>
@endsection