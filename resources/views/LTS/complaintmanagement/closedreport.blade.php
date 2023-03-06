@extends('LTS.layouts.main')
@section('content-header')


<div class="container-fluid">
    <div class="row column_title">
       <div class="col-md-12">
          <div class="page_title">
             <h2>Closed Report</h2>
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
            <form action="{{route('getdata')}}" method="POST">
                @csrf
            <div class="form-group mt-3">
               <div class="col-12">
                  <label for="Date" class="form-label"><b>From Date </b><span style="color: red">*</span></label>
                  
                  <input type="date" class="form-control" id="dateForm"   placeholder="dd-mm-yyyy"  name="dateForm" required="">
                  </div><br>
                     <div class="col-12">
                        <label for="Date" class="form-label"><b>To Date </b><span style="color: red">*</span></label>
                        <input type="date" class="form-control" id="dateTo"    placeholder="dd-mm-yyyy" name="dateTo" required="">
                        </div>
                     </div>
                   <div class="col-4">
                <input type="submit" value="Submit" class="btn btn-warning">
                  </div><br>
                  </div>
               </div>  

<!--------Card close-->               
           </div>

         </form>
       </div>
      </div>  
<div class="modal top fade"id="userVIEWModal"tabindex="-1"aria-labelledby="userVIEWModalLabel"aria-hidden="true"data-mdb-backdrop="true"data-mdb-keyboard="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
           <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <!-- Main content -->
              <section class="content">
                  <div class="container-scroller">
                      <div class="container-fluid page-body-wrapper full-page-wrapper">
                          <div class="col-md-12 grid-margin stretch-card">
                              <div class="card">
                                <form action="{{ url('/closedreport/view/') }}" method="POST">
                                   @csrf
                                  <div class="card-body">
                                      <div style="overflow-x:auto;">
                                          <center>
                                              <input type="text" id="id" name="id"  value="12450" hidden="hidden">
                                              <input type="text" id="ModelNO" name="ModelNO" value="161" hidden="hidden">
                                                                                  <div class="position-static">
                                                  <TABLE id="id" class="table table-striped table-bordered">
                                                      <TBODY>
                                                      <TR>
                                                          <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                                  <tr>
                                                                      <td width="15%" bgcolor="#f08080">
                                                                          <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">CUSTOMER INFO</font></b></td>
                                                                      <td width="15%">&nbsp;</td>
                                                                      <td width="14%">&nbsp;</td>
                                                                      <td width="14%">&nbsp;</td>
                                                                      <td width="14%">&nbsp;</td>
                                                                      <td width="14%">&nbsp;</td>
                                                                      <td width="14%">&nbsp;</td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td width="100%" colspan="7">
                                                                          <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                                                                              <tr>
                                                                                  <td width="100%" align="center">
                                                                                      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="auto">
                                                                                          <tr>
                                                                                              <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt" <b>&nbsp;Rapid Service ID :</b></td>
                                                                                              <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><b><font face="Verdana" color="#800000" style="font-size: 9pt" id="complaint_id" ></font></b></td>
                                                                                              <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Status:</b></td>
                                                                                              <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" id="status" style="font-size: 9pt; font-weight: 700" color="#800000"></font><font face="Verdana" style="font-size: 9pt; font-weight: 700" color="#FF9900"> </td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Other CRM ID :</b></td>
                                                                                              <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><b><font face="Verdana" color="#800000" style="font-size: 9pt">NA&nbsp;</font></b></td>
                                                                                              <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Other CRM Job:</b></td>
                                                                                              <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" color="#800000" style="font-size: 9pt"><a href="http://49.206.29.41/vmm/zone/view.asp?pid=NA" target="_blank">View Job</a>&nbsp;</br><a href="http://49.206.29.41/vmm/zone/supdt.asp?pid=NA" target="_blank">Update Job</a></font></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td width="159" bgcolor="#FFFFFF" height="18" ><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Customer Name:</b></td>
                                                                                              <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" color="#800000" style="font-size: 9pt"id="custom_name">;</td></font>
                                                                                              <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Phone NO</b></td>
                                                                                              <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt"  id="custom_mobile"></br>&nbsp;</font></td>
                                                                                          </tr>
          
                                                                                          <tr>
                                                                                              <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Address&nbsp;</b></td>
                                                                                              <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt"  id="custom_address">&nbsp;</td></font>
                                                                                              <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Block :</b></td>
                                                                                              <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt"  id="block">&nbsp;</td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;City:</b></td>
                                                                                              <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt"id="district">&nbsp;</td>
                                                                                              <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt" ><b>State :</b></td>
                                                                                              <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="state">&nbsp;</td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Pin-Code :</b></td>
                                                                                              <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="pin_code">&nbsp;</td>
                                                                                              <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Country :</b></td>
                                                                                              <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt"  id="state">&nbsp;</td>
                                                                                          </tr>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                          </table>
                                                                      </td>
                                                                  </tr>
                                                              </table>
                                                          </TD>
                                                      </TR>
                                                      </TBODY>
                                                  </TABLE>
                                              </div>
                                                                                  <TABLE class="table table-striped table-bordered">
                                                  <TBODY>
                                                  <TR>
                                                      <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                          <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                              <tr>
                                                                  <td width="15%" bgcolor="#f08080">
                                                                      <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">PRODUCT INFO</font></b></td>
                                                                  <td width="15%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                              </tr>
                                                              <tr>
                                                                  <td width="100%" colspan="7">
                                                                      <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                                                                          <tr>
                                                                              <td width="100%" align="center">
                                                                                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="">
                                                                                      <tr>
                                                                                          <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Complaint Type:</b></td>
                                                                                          <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="type_complaint">&nbsp;</td></font>
                                                                                          <td width="159" bgcolor="#FFFFFF" height="18"><b><font face="Verdana" style="font-size: 9pt"></font></b><font face="Verdana" style="font-size: 9pt"><b>Date OF Purchase :</b></td>
                                                                                          <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="date">&nbsp;</td>
                                                                                      </tr>
                                                                                      <tr>
                                                                                          <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Brand:</b></td>
                                                                                          <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="type_brand">&nbsp;</td></font>
                                                                                          <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Model NO:</b></td>
                                                                                          <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="type_model">&nbsp;</td>
                                                                                      </tr>
                                                                                      <tr>
                                                                                          <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Product Type:</b></td>
                                                                                          <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="product_type" >&nbsp;</td></font>
                                                                                          <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt" ><b>Warranty Status:</b></td>
                                                                                          <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="warrenty_number">&nbsp;</td>
                                                                                      </tr>
                                                                                      <tr>
          
                                                                                          <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Product Location:</b></td>
                                                                                          <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt">CUSTOMER END&nbsp;</td>
                                                                                          <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Visit Type</b></td>
                                                                                          <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="visit_type">&nbsp;</font></td></font>
                                                                                      </tr>
          
                                                                                      <tr>
                                                                                          <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Complaint Detail:</b></td>
                                                                                          <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt">SOUND PROBLEM&nbsp;</td></font>
                                                                                          <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Remarks:</b></td>
                                                                                          <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="remark">&nbsp;</td>
                                                                                      </tr>
          
          
                                                                                      <tr>
                                                                                          <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Date Of Registration:</b></td>
                                                                                          <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt">2022-10-27&nbsp;</td></font>
                                                                                          <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Time Of Registration :</b></td>
                                                                                          <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt">14:30:21&nbsp;</td>
                                                                                      </tr>
                                                                                      <tr>
                                                                                          <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Registry By:</b></td>
                                                                                          <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt">SHEETAL MEENA&nbsp;</td></font>
                                                                                          <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>IP :</b></td>
                                                                                          <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt">2405:201:5806:e8ad:f9b1:3e84:8e44:ca04&nbsp;</td>
                                                                                      </tr>
                                                                                      <tr>
                                                                                          <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Last Update By:</b></td>
                                                                                          <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt">MR.KHAN&nbsp;</td></font>
                                                                                          <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Last Update :</b></td>
                                                                                          <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt">2022-12-03</br>10:33:01&nbsp;</font></td>
                                                                                      </tr>
                                                                                  </table>
                                                                              </td>
                                                                          </tr>
                                                                      </table>
                                                                  </td>
                                                              </tr>
                                                          </table>
                                                      </TD>
                                                  </TR>
                                                  </TBODY>
                                              </TABLE>
                                                                                  <TABLE class="table table-striped table-bordered">
                                                  <TBODY>
                                                  <TR>
                                                      <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                          <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                              <tr>
                                                                  <td width="15%" bgcolor="#f08080">
                                                                      <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">ASF INFO</font></b></td>
                                                                  <td width="15%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                              </tr>
                                                              <tr>
                                                                  <td width="100%" colspan="7">
                                                                      <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                                                                          <tr>
                                                                              <td width="100%" align="center">
                                                                                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="">
          
                                                                                      <tr>
                                                                                          <table width="100%" border="1" >
                                                                                          
                                                                                              <thead>
                                                                                               <tr>  <td align="center"><strong>S.NO  </strong></td>
                                                                                                   <td align="center"><strong>SF Name</strong></td>
                                                                                                 
                                                                                                   <td align="center"><strong>Phone NO</strong></td>
                                                                                                   <td align="center"><strong>Address</strong></td>
                                                                                                   <td align="center"><strong>Pin-Code</strong></td>
                                                                                                   <td align="center"><strong>Assign Date/Time</strong></td></tr>
                                                                                            
                                                                                              </thead>
                                                                                            
                                                                                                        <tbody>
                                                                                                
                                                                                                          

                                                                                                           <tr>
                                                                                                             
                                                                                                           
                                                                                                              
                                                                                                      
                                                                                                          

                                                                                                           </tr>

                                                                                                          
                                                                                                        </tbody>
                                                                                                                  
                                                                                                    
                                                                                                      
                                                                                         </table>
                                                                                        
                                                                                      </tr>
                                                                                  </table>
                                                                              </td>
                                                                          </tr>
                                                                      </table>
                                                                  </td>
                                                              </tr>
                                                          </table>
                                                      </TD>
                                                  </TR>
                                                  </TBODY>
                                              </TABLE>
                                                <TABLE class="table table-striped table-bordered">
                                                  <TBODY>
                                                  <TR>
                                                      <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                          <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                              <tr>
                                                                  <td width="15%" bgcolor="#f08080">
                                                                      <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">JOB CLOSER INFO</font></b></td>
                                                                  <td width="15%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                              </tr>
                                                              <tr>
                                                                  <td width="100%" colspan="7">
                                                                      <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                                                                          <tr>
                                                                              <td width="100%" align="center">
                                                                                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="">
                                                                                      <table width="100%" border="1" >
                                                                                          <thead>
                                                                                          <td align="center"><strong>S.NO</strong></td>
                                                                                          <td align="center"><strong>Serial NO</strong></td>
                                                                                          <td align="center"><strong>Faulty/Repair Code</strong></td>
                                                                                          <td align="center"><strong>Engineer Remark</strong></td>
                                                                                          <td align="center"><strong>Voltage </strong></td>
                                                                                          <td align="center"><strong>Problem </strong></td>
                                                                                          <td align="center"><strong>Close Date </strong></td>
                                                                                          <td align="center"><strong>Happy Code</strong></td>
                                                                                          </thead>
                                                                                                                                                                              <tr>
                                                                                                  <td align="center">1</td>
                                                                                                  <td align="center">NA</td>
                                                                                                  <td align="center">MAIN PCB</br>MAIN PCB CHANGED</td>
                                                                                                  <td align="center">MAIN PCB CHANGED</td>
                                                                                                  <td align="center">NA</td>
                                                                                                  <td align="center">MAIN PCB ISSUE</td>
                                                                                                  <td align="center">2022-12-03</td>
                                                                                                  <td align="center" ><font color="red"><bold>FALSE</bold></font></td>
                                                                                              </tr>
                                                                                                                                                                      </table>
                                                                                  </table>
                                                                              </td>
                                                                          </tr>
                                                                      </table>
                                                                  </td>
                                                              </tr>
                                                          </table>
                                                      </TD>
                                                  </TR>
                                                  </TBODY>
                                              </TABLE>
                                              <TABLE class="table table-striped table-bordered">
                                                  <TBODY>
                                                  <TR>
                                                      <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                          <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                              <tr>
                                                                  <td width="15%" bgcolor="#f08080">
                                                                      <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">PART INFO</font></b></td>
                                                                  <td width="15%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                              </tr>
                                                              <tr>
                                                                  <td width="100%" colspan="7">
                                                                      <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                                                                          <tr>
                                                                              <td width="100%" align="center">
                                                                                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="">
          
                                                                                      <tr>
                                                                                          <table width="100%" border="1" >
                                                                                              <thead>
                                                                                              <td align="center"><strong>S.NO</strong></td>
                                                                                              <td align="center"><strong>Part Name</strong></td>
                                                                                              <td align="center"><strong>Qty</strong></td>
                                                                                              <td align="center"><strong>Type</strong></td>
                                                                                              </thead>
                                                                                                                                                                                      <tr>
                                                                                                      <td align="center">1</td>
                                                                                                      <td align="center">AMLIFIRE CARD</td>
                                                                                                      <td align="center">1</td>
                                                                                                      <td align="center">COURIER</td>
                                                                                                      </td>
                                                                                                  </tr>
                                                                                                                                                                              </table>
                                                                                      </tr>
                                                                                  </table>
                                                                              </td>
                                                                          </tr>
                                                                      </table>
                                                                  </td>
                                                              </tr>
                                                          </table>
                                                      </TD>
                                                  </TR>
                                                  </TBODY>
                                              </TABLE>
                                           <TABLE class="table table-striped table-bordered">
                                                  <TBODY>
                                                  <TR>
                                                      <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                          <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                              <tr>
                                                                  <td width="15%" bgcolor="#f08080">
                                                                      <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">DISPATCH INFO</font></b></td>
                                                                  <td width="15%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                              </tr>
                                                              <tr>
                                                                  <td width="100%" colspan="7">
                                                                      <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                                                                          <tr>
                                                                              <td width="100%" align="center">
                                                                                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="">
          
                                                                                      <tr>
                                                                                          <table width="100%" border="1" >
                                                                                              <thead>
                                                                                              <td align="center"><strong>S.NO</strong></td>
                                                                                              <td align="center"><strong>Part Name</strong></td>
                                                                                              <td align="center"><strong>Qty</strong></td>
                                                                                              <td align="center"><strong>Docket No</strong></td>
                                                                                              <td align="center"><strong>Dispatch Date</strong></td>
                                                                                              <td align="center"><strong>Dispatch To</strong></td>
                                                                                              <td align="center"><strong>Dispatch By</strong></td>
                                                                                              </thead>
                                                                                                                                                                                      <tr>
                                                                                                      <td align="center">1</td>
                                                                                                      <td align="center">AMLIFIRE CARD</td>
                                                                                                      <td align="center">1</td>
                                                                                                      <td align="center">
                                                                                                          <a href=" https://tracking.dtdc.com/ctbs-tracking/customerInterface.tr?submitName=showCITrackingDetails&cnNo=NA&cType=Consignment" target="_blank">NA</a>
                                                                                                      </td>
                                                                                                      <td align="center">2022-12-03</td>
                                                                                                      <td align="center">RAPID CASH CALL</td>
                                                                                                      <td align="center">MR.KHAN</td>
                                                                                                  </tr>
          
                                                                                                                                                                              </table>
                                                                                      </tr>
                                                                                  </table>
                                                                              </td>
                                                                          </tr>
                                                                      </table>
                                                                  </td>
                                                              </tr>
                                                          </table>
                                                      </TD>
                                                  </TR>
                                                  </TBODY>
                                              </TABLE>
                                            <TABLE class="table table-striped table-bordered">
                                                  <TBODY>
                                                  <TR>
                                                      <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                          <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                              <tr>
                                                                  <td width="15%" bgcolor="#f08080">
                                                                <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">VISIT DETAIL</font></b></td>
                                                                  <td width="15%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                              </tr>
                                                              <td width="100%" colspan="7">
                                                                  <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                                                                      <tr>
                                                                          <td width="100%" align="center">
                                                                              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="">
          
                                                                                  <tr>
                                                                                      <table width="100%" border="1" >
                                                                                          <thead>
                                                                                          <td align="center"><strong>S.NO</strong></td>
                                                                                          <td align="center"><strong>Engg Name</strong></td>
                                                                                          <td align="center"><strong>Visit Date</strong></td>
                                                                                          <td align="center"><strong>KM</strong></td>
                                                                                          <td align="center"><strong>Conformation</strong></td>
                                                                                          </thead> 
                                                                                          <tbody>
                                                                                            <tr></tr>
                                                                                        
                                                                                        </tbody>                                                                                                                                                                          <tr>
                                                                                                  <td align="center">1</td>
                                                                                                  <td align="center">SURAJ</td>
                                                                                                  <td align="center">2022-12-03</td>
                                                                                                  <td align="center">36</td>
                                                                                                  <td align="center">YES</td>
                                                                                              </tr>                                                                                                                                                                    </table>
                                                                                  </tr>
                                                                              </table>
                                                                          </td>
                                                                      </tr>
                                                                  </table>
                                                              </td>
                                                          </table>
                                                      </TD>
                                                  </TR>
                                                  </TBODY>
                                              </TABLE>
                                            <TABLE class="table table-striped table-bordered">
                                              <TBODY>
                                                  <TR>
                                                      <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                          <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                              <tr>
                                                                  <td width="15%" bgcolor="#f08080">
                                                                <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">ESCALATION DETAIL</font></b></td>
                                                                  <td width="15%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                              </tr>
                                                              <td width="100%" colspan="7">
                                                                  <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                                                                      <tr>
                                                                          <td width="100%" align="center">
                                                                              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="">
          
                                                                                  <tr>
                                                                                      <table width="100%" border="1" >
                                                                                          <thead>
                                                                                          <td align="center"><strong>COUNT</strong></td>
                                                                                          <td align="center"><strong>DATE</strong></td>
                                                                                          <td align="center"><strong>REMARK</strong></td>
                                                                                          <td align="center"><strong>USER</strong></td>
                                                                                          </thead>
                                                                                                                                                                      </table>
                                                                                  </tr>
                                                                              </table>
                                                                          </td>
                                                                      </tr>
                                                                  </table>
                                                              </td>
                                                          </table>
                                                      </TD>
                                                  </TR>
                                                  </TBODY>
                                              </TABLE>
                                                                                  <TABLE class="table table-striped table-bordered">
                                                  <TBODY>
                                                  <TR>
                                                      <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                          <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                              <tr>
                                                                  <td width="15%" bgcolor="#f08080">
                                                                      <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">JOB LOG</font></b></td>
                                                                  <td width="15%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                                  <td width="14%">&nbsp;</td>
                                                              </tr>
                                                              <tr>
                                                                  <td width="100%" colspan="7">
                                                                      <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                                                                          <tr>
                                                                              <td width="100%" align="center">
                                                                                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="">
          
                                                                                      <tr>
                                                                                          <table width="100%" border="1" >
                                                                                              <thead>
                                                                                              <td align="center"><strong>S.NO</strong></td>
                                                                                              <td align="center"><strong>Status</strong></td>
                                                                                              <td align="center"><strong>Remark-1</strong></td>
                                                                                              <td align="center"><strong>Remark-2</strong></td>
                                                                                              <td align="center"><strong>Update By</strong></td>
                                                                                              <td align="center"><strong>Date/Time</strong></td>
                                                                                              </thead>
                                                                                                                                                                                      <tr>
                                                                                                      <td align="center">1</td>
                                                                                                      <td align="center">ALLOTTED</td>
                                                                                                      <td align="center">ALLOTTED TO-RAPID CASH CALL</td>
                                                                                                      <td align="center">CALL ALLOTTED TO SF (SURAJ CHOUDHARY PATNA SF +91 93863 36520)</td>
                                                                                                      <td align="center">MR.KHAN</td>
                                                                                                      <td align="center">2022-11-01</br>10:57:16</td>
                                                                                                  </tr>
                                                                                                                                                                                      <tr>
                                                                                                      <td align="center">2</td>
                                                                                                      <td align="center">VISIT DONE</td>
                                                                                                      <td align="center">SURAJ ,KM-36</td>
                                                                                                      <td align="center">ENGINEER VISIT ,  MAIN PCB ISSUE</td>
                                                                                                      <td align="center">MR.KHAN</td>
                                                                                                      <td align="center">2022-12-03</br>10:31:24</td>
                                                                                                  </tr>
                                                                                                                                                                                      <tr>
                                                                                                      <td align="center">3</td>
                                                                                                      <td align="center">PART PENDING</td>
                                                                                                      <td align="center">PART-ENTRY - PART PENDING </td>
                                                                                                      <td align="center">PART PENDING </td>
                                                                                                      <td align="center">MR.KHAN</td>
                                                                                                      <td align="center">2022-12-03</br>10:31:58</td>
                                                                                                  </tr>
                                                                                                                                                                                      <tr>
                                                                                                      <td align="center">4</td>
                                                                                                      <td align="center">PART DISPATCH</td>
                                                                                                      <td align="center">PART-DISPATCH-NA - AMLIFIRE CARD</td>
                                                                                                      <td align="center">PART DISPATCHED</td>
                                                                                                      <td align="center">MR.KHAN</td>
                                                                                                      <td align="center">2022-12-03</br>10:32:23</td>
                                                                                                  </tr>
                                                                                                                                                                                      <tr>
                                                                                                      <td align="center">5</td>
                                                                                                      <td align="center">CLOSED</td>
                                                                                                      <td align="center">COMPLAINT CLOSED</td>
                                                                                                      <td align="center">MAIN PCB  CHANGED , PRODUCT WORKING</td>
                                                                                                      <td align="center">MR.KHAN</td>
                                                                                                      <td align="center">2022-12-03</br>10:33:01</td>
                                                                                                  </tr>
                                                                                                                                                                              </table>
                                           </tr>
                                       </table>
                                   </td>
                               </tr>
                           </table>
                       </td>
                   </tr>
               </table>
           </TD>
           </TR>
       </TBODY>
   </TABLE>

                                          </center>
                                      </div>
                                  </div>
                              </div>
                          </div>
                       </div>
                   </div>
               </section>
            </div>
         </form>
     </div>
  </div>
</div>


       <!-- Modal -->
       <div class="modal top fade"id="userShowModal"tabindex="-1"aria-labelledby="userShowModalLabel"aria-hidden="true"data-mdb-backdrop="true"data-mdb-keyboard="true">
         <div class="modal-dialog modal-xl">
           <div class="modal-content">
            <div class="content-wrapper">
               <!-- Content Header (Page header) -->
               <!-- Main content -->
               <section class="content">
                   <div class="container-scroller">
                       <div class="container-fluid page-body-wrapper full-page-wrapper">
                           <div class="col-md-12 grid-margin stretch-card">
                               <div class="card">
                                 <form action="{{ url('/closedreport/FetchJobStatus/') }}" method="POST">
                                    @csrf
                                    @method('PUT')  
                                   <div class="card-body">
                                       <div style="overflow-x:auto;">
                                           <center>
                                               <input type="text" id="ComplaintID" name="ComplaintID" value="12450" hidden="hidden">
                                               <input type="text" id="ModelNO" name="ModelNO" value="161" hidden="hidden">
                                                  <div class="position-static">
                                                   <TABLE id="ComplaintID" class="table table-striped table-bordered">
                                                       <TBODY>
                                                       <TR>
                                                           <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                               <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                                   <tr>
                                                                       <td width="15%" bgcolor="#f08080">
                                                                           <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">CUSTOMER INFO</font></b></td>
                                                                       <td width="15%">&nbsp;</td>
                                                                       <td width="14%">&nbsp;</td>
                                                                       <td width="14%">&nbsp;</td>
                                                                       <td width="14%">&nbsp;</td>
                                                                       <td width="14%">&nbsp;</td>
                                                                       <td width="14%">&nbsp;</td>
                                                                   </tr>
                                                                   <tr>
                                                                       <td width="100%" colspan="7">
                                                                           <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                                                                               <tr>
                                                                                   <td width="100%" align="center">
                                                                                       <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="auto">
                                                                                           <tr>
                                                                                               <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt" <b>&nbsp;Rapid Service ID :</b></td>
                                                                                               <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><b><font face="Verdana" color="#800000" style="font-size: 9pt" id="complaint_id1" ></font></b></td>
                                                                                               <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Status:</b></td>
                                                                                               <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" id="status1" style="font-size: 9pt; font-weight: 700" color="#800000"></font><font face="Verdana" style="font-size: 9pt; font-weight: 700" color="#FF9900"> </td>
                                                                                           </tr>
                                                                                           <tr>
                                                                                               <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Other CRM ID :</b></td>
                                                                                               <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><b><font face="Verdana" color="#800000" style="font-size: 9pt">NA&nbsp;</font></b></td>
                                                                                               <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Other CRM Job:</b></td>
                                                                                               <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" color="#800000" style="font-size: 9pt"><a href="http://49.206.29.41/vmm/zone/view.asp?pid=NA" target="_blank">View Job</a>&nbsp;</br><a href="http://49.206.29.41/vmm/zone/supdt.asp?pid=NA" target="_blank">Update Job</a></font></td>
                                                                                           </tr>
                                                                                           <tr>
                                                                                               <td width="159" bgcolor="#FFFFFF" height="18" ><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Customer Name:</b></td>
                                                                                               <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" color="#800000" style="font-size: 9pt"id="custom_name1">;</td></font>
                                                                                               <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Phone NO</b></td>
                                                                                               <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt"  id="custom_mobile1"></br>&nbsp;</font></td>
                                                                                           </tr>
           
                                                                                           <tr>
                                                                                               <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Address&nbsp;</b></td>
                                                                                               <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt"  id="custom_address1">&nbsp;</td></font>
                                                                                               <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Block :</b></td>
                                                                                               <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt"  id="block1">&nbsp;</td>
                                                                                           </tr>
                                                                                           <tr>
                                                                                               <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;City:</b></td>
                                                                                               <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt"id="district1">&nbsp;</td>
                                                                                               <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt" ><b>State :</b></td>
                                                                                               <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="state1">&nbsp;</td>
                                                                                           </tr>
                                                                                           <tr>
                                                                                               <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Pin-Code :</b></td>
                                                                                               <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="pin_code1">&nbsp;</td>
                                                                                               <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Country :</b></td>
                                                                                               <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt"  id="state1">&nbsp;</td>
                                                                                           </tr>
                                                                                       </table>
                                                                                   </td>
                                                                               </tr>
                                                                           </table>
                                                                       </td>
                                                                   </tr>
                                                               </table>
                                                           </TD>
                                                       </TR>
                                                       </TBODY>
                                                   </TABLE>
                                               </div>
                                                                                   <TABLE class="table table-striped table-bordered">
                                                   <TBODY>
                                                   <TR>
                                                       <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                           <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                               <tr>
                                                                   <td width="15%" bgcolor="#f08080">
                                                                       <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">PRODUCT INFO</font></b></td>
                                                                   <td width="15%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                               </tr>
                                                               <tr>
                                                                   <td width="100%" colspan="7">
                                                                       <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                                                                           <tr>
                                                                               <td width="100%" align="center">
                                                                                   <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="">
                                                                                       <tr>
                                                                                           <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Complaint Type:</b></td>
                                                                                           <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="type_complaint">&nbsp;</td></font>
                                                                                           <td width="159" bgcolor="#FFFFFF" height="18"><b><font face="Verdana" style="font-size: 9pt"></font></b><font face="Verdana" style="font-size: 9pt"><b>Date OF Purchase :</b></td>
                                                                                           <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="date1">&nbsp;</td>
                                                                                       </tr>
                                                                                       <tr>
                                                                                           <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Brand:</b></td>
                                                                                           <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="type_brand1">&nbsp;</td></font>
                                                                                           <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Model NO:</b></td>
                                                                                           <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="type_model1">&nbsp;</td>
                                                                                       </tr>
                                                                                       <tr>
                                                                                           <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Product Type:</b></td>
                                                                                           <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="product_type1" >&nbsp;</td></font>
                                                                                           <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt" ><b>Warranty Status:</b></td>
                                                                                           <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="warrenty_number1">&nbsp;</td>
                                                                                       </tr>
                                                                                       <tr>
           
                                                                                           <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Product Location:</b></td>
                                                                                           <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt">CUSTOMER END&nbsp;</td>
                                                                                           <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Visit Type</b></td>
                                                                                           <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="visit_type1">&nbsp;</font></td></font>
                                                                                       </tr>
           
                                                                                       <tr>
                                                                                           <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Complaint Detail:</b></td>
                                                                                           <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt">SOUND PROBLEM&nbsp;</td></font>
                                                                                           <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Remarks:</b></td>
                                                                                           <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt" id="remark1">&nbsp;</td>
                                                                                       </tr>
           
           
                                                                                       <tr>
                                                                                           <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Date Of Registration:</b></td>
                                                                                           <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt">2022-10-27&nbsp;</td></font>
                                                                                           <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Time Of Registration :</b></td>
                                                                                           <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt">14:30:21&nbsp;</td>
                                                                                       </tr>
                                                                                       <tr>
                                                                                           <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Registry By:</b></td>
                                                                                           <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt">SHEETAL MEENA&nbsp;</td></font>
                                                                                           <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>IP :</b></td>
                                                                                           <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt">2405:201:5806:e8ad:f9b1:3e84:8e44:ca04&nbsp;</td>
                                                                                       </tr>
                                                                                       <tr>
                                                                                           <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Last Update By:</b></td>
                                                                                           <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt">MR.KHAN&nbsp;</td></font>
                                                                                           <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>Last Update :</b></td>
                                                                                           <td width="320" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt">2022-12-03</br>10:33:01&nbsp;</font></td>
                                                                                       </tr>
                                                                                   </table>
                                                                               </td>
                                                                           </tr>
                                                                       </table>
                                                                   </td>
                                                               </tr>
                                                           </table>
                                                       </TD>
                                                   </TR>
                                                   </TBODY>
                                               </TABLE>
                                                                                   <TABLE class="table table-striped table-bordered">
                                                   <TBODY>
                                                   <TR>
                                                       <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                           <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                               <tr>
                                                                   <td width="15%" bgcolor="#f08080">
                                                                       <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">ASF INFO</font></b></td>
                                                                   <td width="15%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                               </tr>
                                                               <tr>
                                                                   <td width="100%" colspan="7">
                                                                       <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                                                                           <tr>
                                                                               <td width="100%" align="center">
                                                                                   <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="">
           
                                                                                       <tr>
                                                                                           <table width="100%" border="1" >
                                                                                           
                                                                                               <thead>
                                                                                                <tr>  <td align="center"><strong>S.NO  </strong></td>
                                                                                                    <td align="center"><strong>SF Name</strong></td>
                                                                                                  
                                                                                                    <td align="center"><strong>Phone NO</strong></td>
                                                                                                    <td align="center"><strong>Address</strong></td>
                                                                                                    <td align="center"><strong>Pin-Code</strong></td>
                                                                                                    <td align="center"><strong>Assign Date/Time</strong></td></tr>
                                                                                             
                                                                                               </thead>
                                                                                             
                                                                                               <tbody>
                                                                                                <tr>
                                                                                                    @if(!empty($addservicenter))
                                                                                                    @foreach($addservicenter as $visit)
                                                                                                    <tr>
                                                                                                        <td>{{$visit->id}}</td>
                                                                                                        <th>{{$visit->eng_name}}</th>
                                                                                                        <th>{{ $visit->phone }}</th>
                                                                                                        <th>{{$visit->address}}</th>
                                                                                                        <th>{{$visit->pin_code}}</th>
                                                                                                        
                                                                                                        <th>{{$visit->created_at}}</th>
                                                                                                        </tr>  
                                                                                                      </tr>
                                                                                                 <tr>
                                                                                                @endforeach
                                                                                                @endif
                                                                                            </table>
                                                                                         
                                                                                       </tr>
                                                                                   </table>
                                                                               </td>
                                                                           </tr>
                                                                       </table>
                                                                   </td>
                                                               </tr>
                                                           </table>
                                                       </TD>
                                                   </TR>
                                                   </TBODY>
                                               </TABLE>
                                                                                   <TABLE class="table table-striped table-bordered">
                                                   <TBODY>
                                                   <TR>
                                                       <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                           <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                               <tr>
                                                                   <td width="15%" bgcolor="#f08080">
                                                                       <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">JOB CLOSER INFO</font></b></td>
                                                                   <td width="15%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                               </tr>
                                                               <tr>
                                                                   <td width="100%" colspan="7">
                                                                       <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                                                                           <tr>
                                                                               <td width="100%" align="center">
                                                                                   <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="">
                                                                                       <table width="100%" border="1" >
                                                                                           <thead>
                                                                                           <td align="center"><strong>S.NO</strong></td>
                                                                                           <td align="center"><strong>Serial NO</strong></td>
                                                                                           <td align="center"><strong>Faulty/Repair Code</strong></td>
                                                                                           <td align="center"><strong>Engineer Remark</strong></td>
                                                                                           <td align="center"><strong>Voltage </strong></td>
                                                                                           <td align="center"><strong>Problem </strong></td>
                                                                                           <td align="center"><strong>Close Date </strong></td>
                                                                                           <td align="center"><strong>Happy Code</strong></td>
                                                                                           </thead>
                                                                                                                                                                               <tr>
                                                                                                   <td align="center">1</td>
                                                                                                   <td align="center">NA</td>
                                                                                                   <td align="center">MAIN PCB</br>MAIN PCB CHANGED</td>
                                                                                                   <td align="center">MAIN PCB CHANGED</td>
                                                                                                   <td align="center">NA</td>
                                                                                                   <td align="center">MAIN PCB ISSUE</td>
                                                                                                   <td align="center">2022-12-03</td>
                                                                                                   <td align="center" ><font color="red"><bold>FALSE</bold></font></td>
                                                                                               </tr>
                                                                                                                                                                       </table>
                                                                                   </table>
                                                                               </td>
                                                                           </tr>
                                                                       </table>
                                                                   </td>
                                                               </tr>
                                                           </table>
                                                       </TD>
                                                   </TR>
                                                   </TBODY>
                                               </TABLE>
          
           <div class="modal modal-primary fade" id="modal-PartPending">
               <div class="modal-dialog">
                   <form method="post">
                       <div class="modal-content">
                           <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span></button>
                               <h4 class="modal-title">Update Part Pending</h4>
                           </div>
                           <div class="" >
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="box box-solid">
                                           <!-- /.box-header -->
                                           <table id="empTable" class="table table-striped table-bordered">
                                                <thead>
                                                <td align="center"><strong>S.NO</strong></td>
                                                <td align="center"><strong>Part Name</strong></td>
                                                <td align="center"><strong>Qty</strong></td>
                                                <td align="center"><strong>Type</strong></td>
                                                <td align="center"><strong>Amount</strong></td>
                                                <td align="center"><strong>Delete</strong></td>
                                                </thead>
                                                    <tr>
                                                        <td align="center">1</td>
                                                        <td align="center">AMLIFIRE CARD</td>
                                                        <td align="center">1</td>
                                                        <td align="center">COURIER</td>
                                                        <td align="center"></td>
                                                        <td align="center"><button type="submit" id="DeletePart" name="DeletePart" value="8319"  class="btn btn-success">DELETE</button></td>
                                                        </td>
                                                    </tr>
                                    </table>
                                <!-- /.box-body -->
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- ./col -->
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- Select Basic -->
             <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
    <!-- /.modal-content -->
</div>
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-PartPending">Update Part Pending</button>
           
                                               <TABLE class="table table-striped table-bordered">
                                                   <TBODY>
                                                   <TR>
                                                       <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                           <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                               <tr>
                                                                   <td width="15%" bgcolor="#f08080">
                                                                       <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">PART INFO</font></b></td>
                                                                   <td width="15%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                               </tr>
                                                               <tr>
                                                                   <td width="100%" colspan="7">
                                                                       <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                                                                           <tr>
                                                                               <td width="100%" align="center">
                                                                                   <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="">
           
                                                                                       <tr>
                                                                                           <table width="100%" border="1" >
                                                                                               <thead>
                                                                                               <td align="center"><strong>S.NO</strong></td>
                                                                                               <td align="center"><strong>Part Name</strong></td>
                                                                                               <td align="center"><strong>Qty</strong></td>
                                                                                               <td align="center"><strong>Type</strong></td>
                                                                                               </thead>
                                                                                            </tr>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    @if(!empty($stockentry))
                                                                                                    @foreach($stockentry as $partname)
                                                                                                    <tr>
                                                                                                        <td>{{$partname->id}}</td>
                                                                                                        <th>{{$partname->part_name}}</th>
                                                                                                        <th>{{ $partname->quantity }}</th>
                                                                                                       
                                                                                                       <th></th>
                                                                                                        </tr>  
                                                                                                       
                                                                                                    </tr>
                                                                                                @endforeach
                                                                                                @endif
                                                                                            </table>
                                                                               </td>
                                                                           </tr>
                                                                       </table>
                                                                   </td>
                                                               </tr>
                                                           </table>
                                                       </TD>
                                                   </TR>
                                                   </TBODY>
                                               </TABLE>
                                            <TABLE class="table table-striped table-bordered">
                                                   <TBODY>
                                                   <TR>
                                                       <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                           <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                               <tr>
                                                                   <td width="15%" bgcolor="#f08080">
                                                                       <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">DISPATCH INFO</font></b></td>
                                                                   <td width="15%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                               </tr>
                                                               <tr>
                                                                   <td width="100%" colspan="7">
                                                                       <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                                                                           <tr>
                                                                               <td width="100%" align="center">
                                                                                   <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="">
           
                                                                                       <tr>
                                                                                           <table width="100%" border="1" >
                                                                                               <thead>
                                                                                               <td align="center"><strong>S.NO</strong></td>
                                                                                               <td align="center"><strong>Part Name</strong></td>
                                                                                               <td align="center"><strong>Qty</strong></td>
                                                                                               <td align="center"><strong>Docket No</strong></td>
                                                                                               <td align="center"><strong>Dispatch Date</strong></td>
                                                                                               <td align="center"><strong>Dispatch To</strong></td>
                                                                                               <td align="center"><strong>Dispatch By</strong></td>
                                                                                               </thead>
                                                                                                <tr>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        @if(!empty($stockentry))
                                                                                                        @foreach($stockentry as $partname)
                                                                                                        <tr>
                                                                                                            <td>{{$partname->id}}</td>
                                                                                                            <th>{{$partname->part_name}}</th>
                                                                                                            <th>{{ $partname->quantity }}</th>
                                                                                                            <td align="center">
                                                                                                                <a href=" https://tracking.dtdc.com/ctbs-tracking/customerInterface.tr?submitName=showCITrackingDetails&cnNo=NA&cType=Consignment" target="_blank">NA</a>
                                                                                                            </td>
                                                                                                            
                                                                                                      
                                                                                                          
                                                                                                            <th>{{ $partname->ReceivedDate }}</th>
                                                                                                            <th></th>
                                                                                                            <th>{{ $partname->ReceivedBy }}</th>
                                                                                                            </tr>  
                                                                                                            
                                                                                                        </tr>
                                                                                                    @endforeach
                                                                                                    @endif
                                                                                                </table>
                                                                                              </td>
                                                                           </tr>
                                                                       </table>
                                                                   </td>
                                                               </tr>
                                                           </table>
                                                       </TD>
                                                   </TR>
                                                   </TBODY>
                                               </TABLE>
                                                                                   <TABLE class="table table-striped table-bordered">
                                                   <TBODY>
                                                   <TR>
                                                       <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                           <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                               <tr>
                                                                   <td width="15%" bgcolor="#f08080">
                                                                       <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">VISIT DETAIL</font></b></td>
                                                                   <td width="15%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                               </tr>
                                                               <td width="100%" colspan="7">
                                                                   <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                                                                       <tr>
                                                                           <td width="100%" align="center">
                                                                               <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="">
           
                                                                                   <tr>
                                                                                       <table width="100%" border="1" >
                                                                                           <thead>
                                                                                           <td align="center"><strong>S.NO</strong></td>
                                                                                           <td align="center"><strong>Engg Name</strong></td>
                                                                                           <td align="center"><strong>Visit Date</strong></td>
                                                                                           <td align="center"><strong>KM</strong></td>
                                                                                           <td align="center"><strong>Conformation</strong></td>
                                                                                           </thead>
                                                                                          
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    @if(!empty($visitstore))
                                                                                                    @foreach($visitstore as $visit)
                                                                                                    <tr>
                                                                                                        <td>{{$visit->id}}</td>
                                                                                                        <th>{{$visit->EngineerName}}</th>
                                                                                                        <th>{{$visit->created_at }}</th>
                                                                                                        <th>{{$visit->OneSideKM}}</th>
                                                                                                        <th>{{$visit->CustomerConformation}}</th>
                                                                                                        </tr>  
                                                                                                      </tr>
                                                                                                 <tr>
                                                                                                @endforeach
                                                                                                @endif
                                                                                            </table>
                                                                            </tr>
            </tr>
                                                                                    </table>
                                                                                   </tr>
                                                                               </table>
                                                                           </td>
                                                                       </tr>
                                                                   </table>
                                                               </td>
                                                           </table>
                                                       </TD>
                                                   </TR>
                                                   </TBODY>
                                               </TABLE>
                                                                                   <TABLE class="table table-striped table-bordered">
                                                   <TBODY>
                                                   <TR>
                                                       <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                           <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                               <tr>
                                                                   <td width="15%" bgcolor="#f08080">
                                                                       <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">ESCALATION DETAIL</font></b></td>
                                                                   <td width="15%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                               </tr>
                                                               <td width="100%" colspan="7">
                                                                   <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                                                                       <tr>
                                                                           <td width="100%" align="center">
                                                                               <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="">
           
                                                                                   <tr>
                                                                                       <table width="100%" border="1" >
                                                                                           <thead>
                                                                                           <td align="center"><strong>COUNT</strong></td>
                                                                                           <td align="center"><strong>DATE</strong></td>
                                                                                           <td align="center"><strong>REMARK</strong></td>
                                                                                           <td align="center"><strong>USER</strong></td>
                                                                                           </thead>
                                                                                                                                                                       </table>
                                                                                   </tr>
                                                                               </table>
                                                                           </td>
                                                                       </tr>
                                                                   </table>
                                                               </td>
                                                           </table>
                                                       </TD>
                                                   </TR>
                                                   </TBODY>
                                               </TABLE>
                                                                                   <TABLE class="table table-striped table-bordered">
                                                   <TBODY>
                                                   <TR>
                                                       <TD align=middle colspan="2" bgcolor="#FFFFFF">
                                                           <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                                                               <tr>
                                                                   <td width="15%" bgcolor="#f08080">
                                                                       <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">JOB LOG</font></b></td>
                                                                   <td width="15%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                                   <td width="14%">&nbsp;</td>
                                                               </tr>
        <tr>
            <td width="100%" colspan="7">
                <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                    <tr>
                        <td width="100%" align="center">
                            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="">

                                <tr>
                                    <table width="100%" border="1" >
                                        <thead>
                                        <td align="center"><strong>S.NO</strong></td>
                                        <td align="center"><strong>Status</strong></td>
                                        <td align="center"><strong>Remark-1</strong></td>
                                        <td align="center"><strong>Remark-2</strong></td>
                                        <td align="center"><strong>Update By</strong></td>
                                        <td align="center"><strong>Date/Time</strong></td>
                                        </thead>
                                        <tr>
                                                <td align="center">1</td>
                                                <td align="center">ALLOTTED</td>
                                                <td align="center">ALLOTTED TO-RAPID CASH CALL</td>
                                                <td align="center">CALL ALLOTTED TO SF (SURAJ CHOUDHARY PATNA SF +91 93863 36520)</td>
                                                <td align="center">MR.KHAN</td>
                                                <td align="center">2022-11-01</br>10:57:16</td>
                                            </tr>
                                            <tr>
                                                <td align="center">2</td>
                                                <td align="center">VISIT DONE</td>
                                                <td align="center">SURAJ ,KM-36</td>
                                                <td align="center">ENGINEER VISIT ,  MAIN PCB ISSUE</td>
                                                <td align="center">MR.KHAN</td>
                                                <td align="center">2022-12-03</br>10:31:24</td>
                                            </tr>
                                            <tr>
                                                <td align="center">3</td>
                                                <td align="center">PART PENDING</td>
                                                <td align="center">PART-ENTRY - PART PENDING </td>
                                                <td align="center">PART PENDING </td>
                                                <td align="center">MR.KHAN</td>
                                                <td align="center">2022-12-03</br>10:31:58</td>
                                            </tr>
                                            <tr>
                                                <td align="center">4</td>
                                                <td align="center">PART DISPATCH</td>
                                                <td align="center">PART-DISPATCH-NA - AMLIFIRE CARD</td>
                                                <td align="center">PART DISPATCHED</td>
                                                <td align="center">MR.KHAN</td>
                                                <td align="center">2022-12-03</br>10:32:23</td>
                                            </tr>
                                              <tr>
                                                <td align="center">5</td>
                                                <td align="center">CLOSED</td>
                                                <td align="center">COMPLAINT CLOSED</td>
                                                <td align="center">MAIN PCB  CHANGED , PRODUCT WORKING</td>
                                                <td align="center">MR.KHAN</td>
                                                <td align="center">2022-12-03</br>10:33:01</td>
                                            </tr>
                                             </table>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </TD>
            </TR>
        </TBODY>
    </TABLE>
<TABLE class="table table-striped table-bordered">
    <TBODY>
    <TR>
        <TD align=middle colspan="2" bgcolor="#FFFFFF">
            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9">
                <tr>
                    <td width="15%" bgcolor="#f08080">
                    <p align="center"><b><font size="2" face="Verdana" color="#FFFFFF">UPDATE SECTION</font></b></td>
                    <td width="15%">&nbsp;</td>
                    <td width="14%">&nbsp;</td>
                    <td width="14%">&nbsp;</td>
                    <td width="14%">&nbsp;</td>
                    <td width="14%">&nbsp;</td>
                    <td width="14%">&nbsp;</td>
                </tr>
                <tr>
                    <td width="100%" colspan="7">
                        <table border="2" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="red" width="999" id="AutoNumber10">
                            <tr>
                                <td width="100%" align="center">
                                    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber11" height="">
                                        <tr>
                                     
                                <td width="159" bgcolor="#FFFFFF" height="18"><font face="Verdana" style="font-size: 9pt"><b>&nbsp;Status * :</b></td>
                                <td width="318" bgcolor="#FFFFFF" height="18" colspan="2"><font face="Verdana" style="font-size: 9pt">
                                
                                    <select  id="ProductLocation" name="ProductLocation" required=""   onclick="JobStatus(this.value)">
                                            
                                                                                        <option selected disabled>Select</option>
                                                                                        <option value="updateremark">Update Remark</option>
                                                                                        <option  hidden="hidden" value="1">Open</option>
                                                                                        <option value="Allotted">Allotted</option>
                                                                                        <option value ="Appointment">Appointment</option>
                                                                                        <option value="4">Part Pending</option>
                                                                                        <option value="5">Part Dispatch</option>
                                                                                        <option value="6">Part Not Available</option>
                                                                                        <option value="7">Part Received By SF</option>
                                                                                        <option value="8">Product Taken By SF</option>
                                                                                        <option value="9">Customer Not Response</option>
                                                                                        <option value="10">Cancelled</option>
                                                                                        <option value="11" disabled>Re-Allotted</option>
                                                                                        <option value="12">Re-Open</option>
                                                                                        <option value="13">Physical Damage</option>
                                                                                        <option value="14">Closed</option>
                                                                                        <option value="15">Escalation</option>
                                                                                        <option value="16">Door Lock</option>
                                                                                        <option value="visit">Visit Done</option>
                                                                                        <option value="18">No SF</option>
                                                                                        <option value="19">Set Call Back To Store</option>
                                                                                        <option value="20">Pending</option>
                                                                                        <option value="21">Conveyance Request</option>
                                                                                        <option value="22">Conveyance Approved</option>
                                                                                        <option value="23">Request To Client</option>
                                                                                        <option value="26">Update DOP</option>
                                                                                        <option value="27">Update Closer Date</option>
                                                                                        <option value="29">PDI Closed</option>
                                                                                    </select>
                                                                                    &nbsp;</td>
                                                                                       </tr>
                                                                                   </table>
                                                                               </td>
                                                                           </tr>
                                                                       </table>
                                                                   </td>
                                                               </tr>
                                                           </table>
                                                           </TD>
                                                            </TR>
                                                            </TBODY>    
                                                            <tfoot>
                                                                <tr>
                                                                    <td>
                                                                        <div class="updateremark" id="result"  > 
                                                                            <center><h3>Update Visit Done</h3></center>
                                                                            <form action="{{route('visitdonestore')}}"  method="post">
                                                                               @csrf
                                                                                <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
                                                                                <table class="table table-striped table-bordered">
                                                                                    <tbody><tr>
                                                                                        <td>
                                                                                            <div class="form-group">
                                                                                                <label for="formGroupExampleInput2">Engineer Name <span style="color: red">*</span></label>
                                                                                                <input type="text" class="EngineerName form-control" id="EngineerName" name="EngineerName" placeholder="Engineer Name" required="" fdprocessedid="atwbdg">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-group">
                                                                                                <label for="formGroupExampleInput2">One Side KM <span style="color: red">*</span></label>
                                                                                                <input type="number" class="OneSideKM form-control" id="OneSideKM" name="OneSideKM" required="" fdprocessedid="xuc4g8">
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="form-group">
                                                                                                <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                                                                                                <input type="text" class="Remark form-control" id="Remark" name="Remark" placeholder="Remark" required="" fdprocessedid="3eti8o">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-group">
                                                                                                <label for="formGroupExampleInput">Customer Conformation <span style="color: red">*</span></label>
                                                                                                <select class="CustomerConformation form-control" id="CustomerConformation" name="CustomerConformation" required="" fdprocessedid="un2hfe">
                                                                                                    <option selected="" disabled="">Select</option>
                                                                                                    <option value="YES">YES</option>
                                                                                                    <option value="NO">NO</option>
                                                                        
                                                                                              </select>
                                                                                           </div>  
                                                                                         </td>
                                                                                       </tr>
                                                                                    </tbody></table>
                                                                                 <button type="submit" class="btn btn-primary mb-2" name="VisitDone" id="VisitDone" fdprocessedid="3fbgw">Submit</button>
                                                                             </form>
                                                                         </div>
                                                                         <div class="result" id="Allotted" > 
                                                                            <center><h3>Update Visit Done</h3></center>
                                                                            <form action="{{route('visitdonestore')}}"  method="post">
                                                                               @csrf
                                                                                <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
                                                                                <table class="table table-striped table-bordered">
                                                                                    <tbody><tr>
                                                                                        <td>
                                                                                            <div class="form-group">
                                                                                                <label for="formGroupExampleInput2">Engineer Name <span style="color: red">*</span></label>
                                                                                                <input type="text" class="EngineerName form-control" id="EngineerName" name="EngineerName" placeholder="Engineer Name" required="" fdprocessedid="atwbdg">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-group">
                                                                                                <label for="formGroupExampleInput2">One Side KM <span style="color: red">*</span></label>
                                                                                                <input type="number" class="OneSideKM form-control" id="OneSideKM" name="OneSideKM" required="" fdprocessedid="xuc4g8">
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="form-group">
                                                                                                <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                                                                                                <input type="text" class="Remark form-control" id="Remark" name="Remark" placeholder="Remark" required="" fdprocessedid="3eti8o">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-group">
                                                                                                <label for="formGroupExampleInput">Customer Conformation <span style="color: red">*</span></label>
                                                                                                <select class="CustomerConformation form-control" id="CustomerConformation" name="CustomerConformation" required="" fdprocessedid="un2hfe">
                                                                                                    <option selected="" disabled="">Select</option>
                                                                                                    <option value="YES">YES</option>
                                                                                                    <option value="NO">NO</option>
                                                                        
                                                                                              </select>
                                                                                           </div>  
                                                                                         </td>
                                                                                       </tr>
                                                                                    </tbody></table>
                                                                                 <button type="submit" class="btn btn-primary mb-2" name="VisitDone" id="VisitDone" fdprocessedid="3fbgw">Submit</button>
                                                                             </form>
                                                                         </div>
                                                                         <div class="result" id = "Appointment" style ="display:none;">
                                                                            <li class ="bigfield"><input placeholder="Agent1" type="text"
                                                                                 name="name" id="name" disabled="disabled"/></li>
                                                                       </div>
                                                                      </td>
                                                                    </tr>
                                                                </tfoot>
                                                            </TABLE>
                                                         </center>
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
      </div>  
</div>
</div>
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
                        @foreach($addcomplaits as $addcomplait)
                        <tr> 
                           <td>{{$addcomplait->id}}</td>
                           <th>{{$addcomplait->complaint_id}}</th>
                           <th>{{$addcomplait->date}}</th>
                           <th></th>
                           <th>{{$addcomplait->tat}}</th>
                           <th>{{$addcomplait->status}}</th>
                           <th>{{$addcomplait->custom_name}}</th>
                           <th>{{$addcomplait->custom_mobile}}</th>
                           <th>{{$addcomplait->block}}</th>
                           <th>{{$addcomplait->district}}</th>
                           <th>{{$addcomplait->state}}</th>
                           <th>{{$addcomplait->product_type}}</th>
                           <th>{{$addcomplait->brand_name}}</th>
                           <th>{{$addcomplait->model_no}}</th> 
                        
                           <td>{{date('M d, Y h:i A', strtotime($addcomplait->created_at)) }}</td>
                           <td>
                              <div class="dropdown">
                             
                                 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                    <span class="caret"></span></button>
                                      <ul class="dropdown-menu">
                                        <button type="button"  value="{{$addcomplait->id}}" class="btn btn-primary editbtn btn-sm">Edit</button>&nbsp;
                                        <button type="button"   data-url="{{ url('/closedreport/view', $addcomplait->id) }}" id="show-view"   class="btn btn-danger  showbtn btn-sm">View</button><br>
                                        <button type="button"   data-url="{{ url('/closedreport/jobcard', $addcomplait->id) }}"  id="show-user"  class="btn btn-danger  showbtn btn-sm">JobCard</button>                                                       
                                     </ul>
                                     
                                   </div>
                                 </td>
                               </tr>
                             @endforeach
                             @endif
                           </tbody>     
                         </table>
                       
                    
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
<script>
     $(document).ready(function() {
       $('#example').DataTable();
   } );
      $.ajaxSetup({
               headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
            });

            $(document).ready(function () {
            
            /* When click show user */
            $('body').on('click', '#show-user', function () {
               var userURL = $(this).data('url');
               $.get(userURL, function (data) {
                  $('#userShowModal').modal('show');
                  $('#id').text(data.id);
                  $('#complaint_id1').text(data.complaint_id);
                  $('#custom_name1').text(data.custom_name);
                  $('#custom_mobile1').text(data.custom_mobile);
                  $('#block1').text(data.block);
                  $('#district1').text(data.district);
                  $('#state1').text(data.state);
                  $('#pin_code1').text(data.pin_code);
                  $('#custom_address1').text(data.custom_address);
                  $('#state1').text(data.state);
                  $('#date1').text(data.date);
                  $('#type_brand1').text(data.type_brand);
                  $('#type_model1').text(data.type_model);
                  $('#warrenty_number1').text(data.warrenty_number);
                  $('#product_type1').text(data.product_type);
                  $('#visit_type1').text(data.visit_type);
                  $('#type_complaint1').text(data.type_complaint);
                  $('#remark1').text(data.remark);
                  $('#status1').text(data.status);
                  $('#id').text(data.id);
                  $('#eng_name1').text(data.eng_name);
                  $('#phone').text(data.phone);
                  $('#address').text(data.address);
                  $('#pin_code').text(data.pin_code);
                  $('#created_at').text(data.created_at);
               })
            }); 
         });

       function JobStatus(Status) {
        $("div.result").hide();
             $("select#ProductLocation").change(function(){
                var selectedVal = $(this).val();
                   $("div.result").hide();
                    $("div#"+selectedVal).show(); 
                    });
       
    }
    // function JobStatus(Status){
    //     var ComplaintID = document.getElementById('ComplaintID').value;
    //     var ModelNO = document.getElementById('ModelNO').value;
    //     $.ajax({
    //         type: "POST",
    //         url: "/closedreport/FetchJobStatus/"+ComplaintID,
        
    //         beforeSend: function () {
    //             $("#AddPartDiv").html("Please Wait Loading....");
    //         },
    //         data: {
    //             'Status': Status,
    //             'ComplaintID': ComplaintID,
    //             'ModelNO': ModelNO
    //         },
    //         success: function (msg) {
    //             $("#AddPartDiv").html(msg);
    //         }
    //     });
    // }
    
</script>
@endsection