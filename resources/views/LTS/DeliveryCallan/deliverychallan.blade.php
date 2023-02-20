
@extends('LTS.layouts.main')
@section('content-header')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="col-md-12 grid-margin stretch-card">
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
                                                        <p class="serif">Rapid Assured Pvt Ltd.</p>
                                                        <p class="serif"><strong>Address: </strong>Agarwal prestige Mall</p>
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
            </div>

        </div>
        <!-- content-wrapper ends -->
    </div>

    @endsection