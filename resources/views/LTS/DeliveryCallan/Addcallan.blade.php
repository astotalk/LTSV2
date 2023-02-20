@extends('LTS.layouts.main')
@section('content-header')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
                <div class="page_title">
                   <h2>Add Challan</h2>
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
                            @if(session('status'))
                            <div class="alert alert-success">{{session('status')}}</div>
                            @endif
                            <div id="success_message"></div>
                            <div class="card mt-3">
                               <div class="card-header">
                                  <nav class="navbar navbar-light bg-light">
                                  <div class="d-grid gap-2 d-md-flex">
                                     <a class="btn btn-danger text-white" href="{{ route('dashboard') }}" role="button">Back</a>
                                  </div>     
                               </div>

                                <div class="card-body">
                                    <Form  action="{{route('addcallanstore')}}" method="post" id="savefrom_errList">
                                        @csrf
                                        <div class="form-group">
                                            <div class="col-12">
                                                <label for="formGroupExampleInput">Service Center <span style="color: red">*</span></label>
                                                <select class="service_center_name form-control"   id="service_center_name" name="service_center_name" required>
                                                    <option value='0'>-- Select Client --</option>
                                                    @foreach($addservicenter   as $service_center_name)
                                                    <option value="{{$service_center_name->service_center_name}}">{{$service_center_name->service_center_name}}
                                                         || {{$service_center_name->district}}  || {{$service_center_name->state}}</option>
                                                    @endforeach
                                                 </select>
                                             </div>
                                          </div><br>
                                          <div class="form-group">
                                            <div class="col-12">
                                                <label for="formGroupExampleInput">Callan Date <span style="color: red">*</span></label>
                                                <input type="date" class="callan_date form-control" name="callan_date"  id="callan_date">
                                             </div>
                                          </div><br>
                                         <div id="SFDETAIl">
                                        </div>
                                        <div class="box-body">
                                        <div>
                                    <div><br><br>
                                    <table border="1" width="100%" class="table table-striped table-bordered">
                                       <tbody>
                                           <tr>
                                                <td align="center"></td>
                                                <td align="center" width="10%">Part Name</td>
                                                <td align="center" width="10%">Remark</td>
                                                <td align="center">Unit Price</td>
                                                <td align="center">QTY</td>
                                                <td align="center">GST</td>
                                                <td align="center">Total Value</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table id="dataTable" width="100%" border="1" class="table table-striped table-bordered">
                                      <tbody>
                                        <tr>
                                            <td><input type="checkbox" id="chk" name="chk"></td>

                                               <td width="15%"> <select class="part_name form-control" id="part_name" name="part_name[]"   onchange="getid(this.value+id);" placeholder="Select Product" name="v"  required>
                                                <datalist id="PartID">
                                                    @foreach($addpart_link   as $part_name)
                                                    <option value="{{$part_name->part_name}}">{{$part_name->part_name}}</option>
                                                    @endforeach
                                                </datalist>   
                                                 </select>
                                            </td>
                                            <td><input type="text" id="Remark_0" name="remark[]" class="form-control" placeholder="Remark" required="" fdprocessedid="j9shgb"></td>
                                            <td><input type="text" id="UnitRate_0" name="unitrate[]" class="form-control" placeholder="UNIT PRICE" onchange="updatevalue(this.value+id)" required="" fdprocessedid="gt7tat"></td>
                                            <td><input type="text" id="qty_0" name="quantity[]" class="form-control" placeholder="QTY" onchange="updatevalue(this.value+id)" required="" fdprocessedid="l25udu"></td>
                                            <td><input type="text" id="gst_0" name="gst[]" class="form-control" value="18" onclick="updatevalue(this.value+id)" readonly="" fdprocessedid="ss7uyn"></td>
                                            <td><input type="text" id="value_0" name="value[]" class="form-control" placeholder="VALUE" onclick="updatevalue(this.value+id)" fdprocessedid="ij0hhr"></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                </div>
                                <input type="button" class="btn btn-primary" value="Add Product" onclick="addRow('dataTable')" fdprocessedid="jfb1d8">
                                <input type="button" class="btn btn-danger" value="Delete Product" onclick="deleteRow('dataTable')" fdprocessedid="9s2t7">
                            </div>
                        </div>           
                         <br>
                        <button type="submit" class="btn btn-primary mb-2" name="AddChallan" id="AddChallan" fdprocessedid="w15e0o">Submit</button>
                      </form>
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

@section('scripts')


<script language="javascript">
    function addRow(tableID) {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var colCount = table.rows[0].cells.length;
        for(var i=0; i<colCount; i++) {
            var newcell = row.insertCell(i);
            newcell.innerHTML = table.rows[0].cells[i].innerHTML;
            //alert(newcell.childNodes);
            switch(newcell.childNodes[0].name) {
                case "UnitRate[]":
                    newcell.childNodes[0].value = "";
                    newcell.childNodes[0].id = "UnitRate_" + rowCount ;
                    break;
                case "qty[]":
                    newcell.childNodes[0].value = "";
                    newcell.childNodes[0].id = "qty_" + rowCount ;
                    break;
                case "value[]":
                    newcell.childNodes[0].value = "";
                    newcell.childNodes[0].id = "value_" + rowCount ;
                    break;
                case "checkbox[]":
                    newcell.childNodes[0].checked = true;
                    newcell.childNodes[0].id = "checkbox" + rowCount ;
                    break;
                case "PartID[]":
                    newcell.childNodes[0].value = "";
                    newcell.childNodes[0].id = "PartID_" + rowCount ;
                    break;
                case "Remark[]":
                    newcell.childNodes[0].value = "";
                    newcell.childNodes[0].id = "Remark_" + rowCount ;
                    break;
                case "gst[]":
                    newcell.childNodes[0].value = "";
                    newcell.childNodes[0].id = "gst" + rowCount ;
                    break;
            }
        }
    }


    function deleteRow(tableID) {
        try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;

            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];

                if(null != chkbox && true == chkbox.checked) {
                    if(rowCount <= 1) {
                        alert("Atleast One Product Should be Added.");
                        break;
                    }
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
            }
        }catch(e) {
            alert(e);
        }
    }

    function getid(val){
        $.ajax({
            type: 'get',
            url: "phpScript/GetPartData.php",
            data : "part_name[]="+val,

            success: function(value){
                var data = value.split(",");
                $('#UnitRate_'+data[3]).val(data[0]);
                $('#qty_'+data[3]).val(data[2]);
                $('#value_'+data[3]).val(data[1]);

//
            }

        });
    }

    $.ajaxSetup({
               headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
            });
    function GetSfDetail(val){
        $.ajax({
            type: 'get',
            url: "/Addcallan/GetSfDetail/"+val,
            data : "SFID="+val,

            success: function(data){
                $("#SFDETAIl").html(data);
            }

        }); 
    }

    function updatevalue(x){

        var fields = x.split('_');
        var valueRow = fields[0];
        var idRow = fields[1];
        var ValueId='value_'+idRow;

        var UnitRateId='UnitRate_'+idRow;
        var UnitRate = document.getElementById(UnitRateId).value;
        var QtyId='qty_'+idRow;
        var Qty = document.getElementById(QtyId).value;
        var NetAmount = UnitRate * Qty;
        var GstAmount = (NetAmount*18)/100;
        var TotalAmount = NetAmount+GstAmount;
        document.getElementById(ValueId).value = +TotalAmount ;

    }

</script>
@endsection