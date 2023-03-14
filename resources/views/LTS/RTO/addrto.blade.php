
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
 <section class="content">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="col-md-12 grid-margin stretch-card">
       <div class="card">
         <div class="card-body">
           <form action="{{ route('addrto') }}" method="post" >
             <div class="form-group">
                <div class="col-12">
                   <label for="formGroupExampleInput">Service Center <span style="color: red">*</span></label>
                     <select class="form-control" id="SFID" name="SFID" required="" onchange="GetSfDetail(this.value);">
                       <option selected disabled>Select</option>
                          @foreach($addservicenterprice  as $service_center_name)
                             <option value="{{$service_center_name->service_center_name}}">
                              {{$service_center_name->service_center_name }} || {{$service_center_name->address}} || {{$service_center_name->state}}</option>
                               @endforeach
                     </select>                                                      
                    </div>
                    </div>  
                     <div id="SFDETAIl"></div>
                                <button type="submit" class="btn btn-primary mb-2" name="AddChallan" id="AddChallan" >Submit</button>
                            </form>
                         </div>
                      </div>
                  </div>
             <!-- content-wrapper ends -->
         </div>
      <!-- page-body-wrapper ends -->
   </section>
</div>
@endsection
@section('scripts')
<SCRIPT language="javascript">
    function GetSfDetail(val){
        $.ajax({
              type: 'POST',
              url: "/RTO/GetRtoDetail/",
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              data : "SFID="+val,
              success: function(data){
                 $("#SFDETAIl").html(data);
             }

        });
    }

</script>
@endsection