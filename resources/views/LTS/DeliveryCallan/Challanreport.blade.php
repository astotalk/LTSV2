@extends('LTS.layouts.main')
@section('content-header')

<div class="midde_cont"><br><br><br>
    <div class="container-fluid">
       <div class="row column1">
          <div class="col-md-12">
             <div class="white_shd full margin_bottom_30">

                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Challan Report History</h2>
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
                            <div class="card-body">
                                <form action="{{route('getdatasearch')}}" method="POST">
                                    @csrf
                            <div class="form-group mt-3">
                            <div class="col-12">
                                <label for="Date" class="form-label">To Date <span style="color: red">*</span></label>
                                <input type="date" class="todate form-control" name="todate" id="todate" placeholder="" required>
                            </div></br>
                            <div class="col-12">
                                <label for="Date" class="form-label">From Date <span style="color: red">*</span></label>
                                <input type="date" class="fromdate form-control" name="fromdate" id="fromdate" placeholder="" required>
                            </div>
                            </div>


                            <div class="col-4">
                                <input type="submit" value="Submit" class="btn btn-warning">
                            </div><br>
                      
                            <div id="PartDetail"> 
                                <table id="table" class="table table-striped table-condensed table-bordered">
                                    <thead  class="table-warning">
                                <tr>
                                        <th><b>S.NO<b></th>
                                        <th><b>Challan Date<b></th>
                                        <th><b>Challan No<b></th>
                                        <th><b>SF Name<b></th>
                                        <th><b>Status<b></th>
                                        <th><b>Part Name<b></th>
                                        <th><b>Qty<b></th>
                                        <th><b>Amount<b></th>
                                        <th><b>Docket No<b></th>
                                        <th style="text-align: center;"><b> Action<b></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      
                                            @if(!empty($deliverycallan))
                                            @foreach($deliverycallan as $addcallan)
                                            <tr>
                                              
                                            <td>{{$addcallan->id}}</td>
                                            <th>{{$addcallan->callan_date}}</th>
                                            <th></th>
                                            <th>{{$addcallan->service_center_name}}</th>
                                            <th>{{$addcallan->remark}}</th>
                                            <th>{{$addcallan->part_name}}</th>
                                            <th>{{$addcallan->quantity}}</th>
                                           
                                            <th></th>
                                            <th></th>
                                            
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                                    <span class="caret"></span></button>
                                                    <ul class="dropdown-menu">
                                                    <li>   <button type="button"   data-url="{{ url('/Challanreport/view', $addcallan->id) }}" id="show-user"   class="btn btn-danger  showbtn btn-sm">View</button>&nbsp;<br></li>                                                            
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody> 
                                    <tfoot  class="table-warning">
                                        <tr>
                                           
                                                <th><b>S.NO<b></th>
                                                <th><b>Challan Date<b></th>
                                                <th><b>Challan No<b></th>
                                                <th><b>SF Name<b></th>
                                                <th><b>Status<b></th>
                                                <th><b>Part Name<b></th>
                                                <th><b>Qty<b></th>
                                                <th><b>Amount<b></th>
                                                <th><b>Docket No<b></th>
                                                <th><b>Action</b></th>
                                        </tr>
                                    </tfoot>
                                    </table>
                                    </div>
                                 
                                </form>
                                </div>
                                <!--------Card close-->
                            </div>

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
    <div class="modal fade" id="userShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Challan Report</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="card">

                <div class="card-body">

                    <div id="printableArea">
                        <div class="box-body">
                            <table width="100%" border="1">
                                <tr>
                                    <td align="center">
                                        <h3>DELIVERY CHALLAN</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table id="empTable" class="table table-striped table-bordered">
                                            <tbody>

                                            <tr>
                                                <td width="50%">
                                                    <p class="serif"><span id="service_center_name"></span></p>
                                                    <p class="serif"><strong>Address: </strong><span id="address"></span></p>
                                                    <p><strong></strong>Unit 312, 3rd Floor, Saint Nagar,</p>
                                                    <p><strong></strong>Pitampura, New Delhi , 110034</p>
                                                    <p><strong>Phone No:  </strong>011-47505763 / 8448344155</p>
                                                    <p><strong>Email Id:  </strong>info@rapidassured.com</p>
                                                </td>
                                                <td align="center" width="50%">
                                                    <div><img src="./images/logo.png" alt="" width="30%" height="" /></div></br>
                                                    <p><strong>GST NO :- 07AAICR6106R1ZT</strong></p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table id="empTable" class="table table-striped table-bordered">
                                            <tbody>
                                            <tr>
                                                <td WIDTH="60%"><strong>TO,</strong>
                                                    <p class="serif">RAPID CASH CALL</p>
                                                    <p class="serif"><strong>Address: </strong>273 RAJDHANI ENCLAVE   2 ND FLOOR , 110034 </BR> NORTH WEST DELHI / DELHI</p>
                                                    <p><strong>Phone No:  </strong>9205522558</p>
                                                    <p><strong>Mobile No:  </strong>9205522558</p>
                                                </td>
                                                <td align="center">
                                                        <p><strong>Challan No:  </strong>RAPL-CH/13022023-001145</p>
                                                    <p><strong>Docket No:  </strong>Z92662359</p>
                                                        <p><strong>Date / Time:  </strong></p>
                                                    <p> 2022-11-10</p>
                                                        <p>16:34:00</p>
                                                </td>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4><center> Parts Details :</center></h4>
                                        <table id="empTable" border="1" width="100%">
                                            <tbody>
                                            <tr>
                                                <td><center><strong>S.NO</strong></center></td>
                                                <td><center><strong>Part Name</strong></center></td>
                                                <td><center><strong>Remark</strong><center></td>
                                                <td><center><strong>GST</strong></center></td>
                                                <td><center><strong>QTY</strong></center></td>
                                                <td><center><strong>U.RATE(Rs)</strong></center></td>
                                                <td><center><strong>Net.RATE(Rs)</strong></center></td>
                                            </tr>
                                            
                                                    <tr>
                                                        <td align="center">1</td>
                                                        <td align="center">DISPLAY PCB(1106)</td>
                                                        <td align="center">TANDEM(74226) LUCKNOW</td>
                                                        <td align="center">18</td>
                                                        <td align="center">1</td>
                                                        <td align="center">160</td>
                                                        <td align="center" width="10%">Rs 188.8</td>
                                                    </tr>
                                                
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <center>  <strong>TOTAL</strong> </center>
                                                </td>

                                                <td></td>
                                                <td></td>
                                                <td ALIGN="CENTER"><strong>Rs 189</strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <h4 style="text-align: right;"><strong>For Rapid Assured Pvt Ltd.</strong></h4>
                            <br>
                            <p style="text-align: center;"><strong>All Disputes Are Subject To Delhi Jurisdiction.<strong></p>
                            <p style="text-align: center;"><strong>System Generated Challan  Signature Not Required.<strong></p>



                        </div>

                    </div>
                    <div id="Label">
                        <h2>To</h2>
                        <h3>RAPID CASH CALL</h3>
                        <h3>
                            273 RAJDHANI ENCLAVE   2 ND FLOOR </BR>
                            NORTH WEST DELHI / DELHI</BR>
                            110034</br>
                            9205522558 , 9205522558                                </h3>
                        <hr>
                        <h2>From</h2>
                        <h3>Rapid Assured Pvt Ltd.</h3>
                        <h3>
                            Agarwal prestige Mall, Unit 312, 3rd Floor, Saint Nagar,</BR>
                            Pitampura, New Delhi , 110034</BR>
                            011-47505763 / 8448344155</br>
                        </h3>



                    </div>
                    <hr>
                    <center>
                        <input type="button" onclick="printDiv('printableArea')" value="Print" class="btn btn-success"/>

                        <input type="button" onclick="printDiv('Label')" value="Print Label" class="btn btn-info"/>
                    </center>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>     

    

@endsection
@section('scripts')
<script>
    $(document).ready(function() {
    $('#table').DataTable();



$(document).ready(function () {
       
       /* When click show user */
        $('body').on('click', '#show-user', function () {
          var userURL = $(this).data('url');
          $.get(userURL, function (data) {
              $('#userShowModal').modal('show');
              $('#id').text(data.id);
              $('#service_center_name').text(data.service_center_name);
              $('#address').text(data.address);
              
          })
        });
        });
    } );
</script>
@endsection