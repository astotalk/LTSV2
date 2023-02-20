
@extends('LTS.layouts.main')
@section('content-header')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2>Expense Management</h2>
             </div>
          </div>
       </div>
       <!-- row -->
       <div class="row column1">
          <div class="col-md-12">
             <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Add Expense </h2>
                   </div>
                </div>
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
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                        + Add Employee
                                    </button>   
                                </div>
                                <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <Form  action="{{route('addexpescestore')}}" method="post" id="savefrom_errList">
                                            @csrf
                                              <div class="modal-header">
                                                          <h5 class="modal-title" id="myModalLabel">Add Employee</h5>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="model-body">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="col ms-1 me-2 mt-3">  
                                                    <div class="row g-3">
                                                      
                                                        <div class="col-12">
                                                            <label for="Date" class="form-label">Expense Date <span style="color: red">*</span></label>
                                                            <input type="date" class="form-control" name="expesce_date"  placeholder="" required>
                                                        </div>
                
                                                        <div class="col-12">
                                                                <label for="formGroupExampleInput2">Category <span style="color: red">*</span></label>
                                                                
                                                                    <select name="PaidCat[]" multiple="multiple" class="PaidCat form-control">
                                                                    <option value="">Select Category</option>
                                                                    <option value="Service Center">Service Center</option>
                                                                    <option value="Costumer">Costumer</option>
                                                                    <option value="Office Expense">Office Expense</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="text" class="form-label">Amount <span style="color: red">*</span></label>
                                                                <input type="text" class="form-control" name="amount"  placeholder="Please Enter Amount" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="text" class="form-label">Paid Through<span style="color: red">*</span></label>
                                                                <input type="text" class="paid_through form-control" name="paid_through"  placeholder="Paid Through-Medium" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="text" class="form-label">Enter Mobile No On Which Payment Done<span style="color: red">*</span></label>
                                                                <input type="text" class="enter_mobile form-control"  maxlength="10"  name="enter_mobile"  placeholder="Please Enter Mobile no." required>
                                                            </div>
                                                          
                                                            <div class="col-12">
                                                                <label for="text" class="form-label">Transaction ID<span style="color: red">*</span></label>
                                                                <input type="text" class="transaction form-control" name="transaction" placeholder="Please Enter Transaction Id" required>
                                                            </div>                      
                                                            <div class="col-12">
                                                                <label for="text" class="form-label">Paid By<span style="color: red">*</span></label>
                                                                <input type="text" class="paid_by form-control" name="paid_by"  placeholder="Please Enter Name"  required>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="text" class="form-label">Remark<span style="color: red">*</span></label>
                                                                <input type="text" class="remark form-control" name="remark" placeholder="Remark" required>
                                                             </div>
                                                       <div class="col-4">
                                                        <input type="submit" class="btn btn-info" value="Submit">
                                                    </div>
                                                 </div>
                                                </form>
                                                </div>
                                               </div>
                                            </div>
                                          </div>
                <!---card close-->
                                      </div>
                                     </div>
                                  </div>
                <!---contaioner close-->
                             </div>
                           </div>
                       </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
                               

@endsection