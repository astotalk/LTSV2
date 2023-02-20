@extends('LTS.layouts.main')
@section('content-header')

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
             <div class="full graph_head">
                <div class="heading1 margin_0">
                   <h2>Add Brand</h2>
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
                                 <a class="btn btn-danger text-white" href="{{ route('dashboard') }}" role="button">Back</a>
                                 </div>     
                              </div>
                              <Form    action="{{route('addbrandstore')}}" method="post" id="savefrom_errList">
                                 @csrf
                              <div class="form-group">
                                <div class="col ms-1 me-2 mt-3">  
                                  <div class="row g-3">
                              <div class="col-12">
                                 <label for="inputState" class="form-label">Client<span style="color: red">*</span></label>
                                 <select class="client_name form-control" id="client_name" name="client_name" required="">
                                    <option value='0'>-- Select Client --</option>
                                    @foreach($clientmanagement  as $clientmanagement)
                                    <option value="{{$clientmanagement->client_name}}">{{$clientmanagement->client_name }}</option>
                                    @endforeach
                                   </select>
                                 </div>
                              <div class="col-12">
                                 <label for="text" class="form-label"> Brand Name <span style="color: red">*</span></label>
                                 <input type="text" class="form-control" name="brand_name"  id="	brand_name" placeholder="Brand name"  required>
                              </div>
                              <div class="col-4">
                                 <input type="submit" class="btn btn-info" value="Submit">
                              </div>
                              </div>
                         </div>
                        </form>
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