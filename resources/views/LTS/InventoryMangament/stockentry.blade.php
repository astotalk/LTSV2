@extends('LTS.layouts.main')
@section('content-header')

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

                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Add Parts </h2>
                   </div>
                </div>
                   <div class="container py-5">
                      <div class="row">
                         <div class="col-md-12">
                            <div id="success_message"></div>
                            <div class="card mt-3">
                               <div class="card-header">
                                  <nav class="navbar navbar-light bg-light">
                                  <form method="get"  class="form-inline">
                                    <a class="btn btn-danger text-white" href="dashboard.php" role="button">Back</a> &nbsp;&nbsp;
                                    <input type="2112" class="search  form-control mr-sm-2"  name="search_empid" id="search_empid"   placeholder="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                  </form>
                               </div>

                               <Form    action="{{route('stockentryaddstore')}}" method="post" id="savefrom_errList">
                                @csrf
                               <div class="card-body"> 
                 
                   
                        <div class="form-group">
                            <label for="inlineFormCustomSelect">Client <span style="color: red">*</span></label>
                            <select class="client_name form-control" id="client_name1" name="client_name" required>
                                <option value='0'>-- Select Client --</option>
                                @foreach($clientmanagement  as $clientmanagement)
                                <option value="{{$clientmanagement->client_name}}">{{$clientmanagement->client_name }}</option>
                                @endforeach
                               </select>
                        </div>



               <table id="empTable" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="empTable_info">
                     <thead>
                       <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="empTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S.NO: activate to sort column descending" style="width: 88.9219px;">S.NO</th>
                           <th class="sorting" tabindex="0" aria-controls="empTable" rowspan="1" colspan="1" aria-label="Part Name: activate to sort column ascending" style="width: 372.734px;">Part Name</th>
                              <th class="sorting" tabindex="0" aria-controls="empTable" rowspan="1" colspan="1" aria-label="Stock: activate to sort column ascending" style="width: 301.531px;">Stock</th>
                               <th class="sorting" tabindex="0" aria-controls="empTable" rowspan="1" colspan="1" aria-label="QTY: activate to sort column ascending" style="width: 300.812px;">QTY</th>
                                 </tr>
                               </thead>
                              <tbody>
    
  
                              <tr role="row" class="odd">
                                 @foreach($addpart_link as $partlist)
                                 <td>{{$partlist->id}}</td>
                                 
                                 <td>
                                    <div class="form-group">
                                          <input type="part_name" class="part_name form-control" id="part_name" name="part_name" value="{{$partlist->part_name}}" readonly="">
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                          <input type="number" class="stock form-control" id="stock" name="stock" value="{{$partlist->part_cost}}" readonly="">
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                          <input type="number" class="quantity form-control" id="quantity" name="quantity" value="0" required="">
                                    </div>
                                 </td>
                              </tr>


                              @endforeach
                              </tbody>
                              </table>

                  <div class="form-group">
                        <label for="formGroupExampleInput2">Stock Received Date <span style="color: red">*</span></label>
                        <input type="date" class="ReceivedDate form-control" id="ReceivedDate" name="ReceivedDate" required="">
                  </div>
                  <div class="form-group">
                        <label for="formGroupExampleInput2">Stock Received By <span style="color: red">*</span></label>
                        <input type="text" class="ReceivedBy form-control" id="ReceivedBy" name="ReceivedBy" required="" fdprocessedid="ssf55a">
                  </div>



                           <input type="submit" class="btn btn-info" value="Submit">
                           </form>
                           </div>
                            </div>
                            <!--------Card close-->
                         </div>

                      </div>
                   </div>

                   <!--------Container close-->
             </div>
          </div>
       </div>
       <!--row close-->

    </div>
 </div>

@endsection