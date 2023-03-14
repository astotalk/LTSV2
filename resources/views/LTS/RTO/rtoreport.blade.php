@extends('LTS.layouts.main')
@section('content-header')
<div class="container-fluid">
    <div class="row column_title">
       <div class="col-md-12">
          <div class="page_title">
             <h2>RTO Management</h2>
          </div>
       </div>
    </div>
    <!-- row -->
<div class="row column1">
  <div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
      <div class="full graph_head">
         <div class="heading1 margin_0">
          <h2>Challan History</h2>
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
                                <div class="form-group mt-3">
                                <div class="col-12">
                                <label for="Date" class="form-label">To Date <span style="color: red">*</span></label>
                                    <input type="date" class="form-control" placeholder="" required>
                                    </div></br>
                                    <div class="col-12">
                                    <label for="Date" class="form-label">From Date <span style="color: red">*</span></label>
                                    <input type="date" class="form-control" placeholder="" required>
                                    </div>
                                    </div>
                                <div class="col-4">
                            <input type="Button" class="btn btn-info" value="Search">
                        </div></br>
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