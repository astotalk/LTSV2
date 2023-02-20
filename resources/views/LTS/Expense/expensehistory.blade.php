@extends('LTS.layouts.main')
@section('content-header')
 

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"><br><br>
        <blockquote class="blockquote bq-success">
            <h3>Expense History</h3>
            <a href="{{ route('dashboard') }}"  class="btn btn-danger">Back</a> <!--Grid column-->
        </blockquote>
       
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="col-md-12 grid-margin stretch-card">
                    <form action="{{route('getdatasearch')}}" method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                              <div class="form-group">
                                    <label for="inlineFormCustomSelect">Year <span style="color: red">*</span></label>
                                    <input type="date" class="form-control" id="dateForm"   placeholder="dd-mm-yyyy"  name="dateForm" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inlineFormCustomSelect">Month <span style="color: red">*</span></label>
                                    <input type="date" class="form-control" id="dateTo"    placeholder="dd-mm-yyyy" name="dateTo" required="">
                                </div>
                                <input type="submit" value="Submit" class="btn btn-warning">
                                <hr>

                               

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </section>

</div><br>

<div class="row">
        
    <table id="example" class="table table-condensed table-bordered">
      <thead  class="white_shd  margin_bottom">
                  <tr> 
                     <th ><b>S.No.</b></th>
                     <th><b>Expence Date</b></th> 
                     <th><b>Paid Cat</b></th>
                     <th><b>Amount</b></th> 
                     <th><b>Transaction ID</b></th> 
                     <th><b>Enter Mobile No On Which Payment</b></th>
                     <th><b>Paid Through</b></th>
                     <th><b>Paid By</b></th> 
                     <th><b>Remark</b></th>
                    
                  </tr>
               </thead>
               <tbody>
                  @if(!empty($expense))
                  @foreach($expense as $expene)
                  <tr> 
                     <td>{{$expene->id}}</td>
                     <th>{{$expene->expesce_date}}</th>
                     <th>{{$expene->PaidCat}}</th>
                     <th>{{$expene->amount}}</th>
                     <th>{{$expene->transaction}}</th>
                     <th>{{$expene->enter_mobile}}</th>
                     <th>{{$expene->paid_through}}</th>
                     <th>{{$expene->paid_by}}</th>
                     <th>{{$expene->remark}}</th>
                 
                     
                         </tr>
                       @endforeach
                       @endif
                     </tbody>     
                   </table>
            </div>             

@endsection
@section('scripts')
<script>
     $(document).ready(function() {
       $('#example').DataTable();
   } );

</script>
@endsection