@extends('LTS.layouts.main')
@section('content-header')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <blockquote class="blockquote bq-success">
        <h3>SF Bill</h3>
        <a href="{{ route('dashboard') }}"  class="btn btn-danger">Back</a> <!--Grid column-->
    </blockquote>

        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('FetchSearch')}}" method="POST">
                                @csrf
                            <div class="form-group">
                                <label for="inlineFormCustomSelect">Year <span style="color: red">*</span></label>
                                <select class="form-control" id="Year" name="Year">
                                    <option value="">Select</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                     </select>
                            </div>
                            <div class="form-group">
                                <label for="inlineFormCustomSelect">Month <span style="color: red">*</span></label>
                                <select class="form-control" id="Month" name="Month">
                                    <option value="">Select</option>
                                    <option value='2'>February</option>
                                    <option value='3'>March</option>
                                    <option value='4'>April</option>
                                    <option value='5'>May</option>
                                    <option value='6'>June</option>
                                    <option value='7'>July</option>
                                    <option value='8'>August</option>
                                    <option value='9'>September</option>
                                    <option value='10'>October</option>
                                    <option value='11'>November</option>
                                    <option value='12'>December</option>
                                    <option value='1'>January</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="formGroupExampleInput">Service Center <span style="color: red">*</span></label>
                                    <select name="service_center_name" class="service_center_name form-control"  id="service_center_name" data-live-search="true"  data-size="8" tabindex="null">
                                    @foreach($addservicenter  as $row)
                                    <option value="{{$row->service_center_name}}">{{$row->service_center_name}}</option>
                                     @endforeach
                                </select>
                                <datalist id="text_editors">
                                </div>                                                                    
                              <button><a class="btn" href="http://127.0.0.1:8000/BillManagemnt/Sfbill"  type="button"  name="Search" id="Search" onclick="FetchSearchData();">Search</button required></a> 
                            <hr>
                        <div id="SearchData"></div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->



@endsection
@section('scripts')
<script type="text/javascript">

    function FetchSearchData(){
        var YearSelect = document.getElementById("Year");
        var Year = YearSelect.options[YearSelect.selectedIndex].value;
        if(Year != null && Year != ''){
            var MonthSelect = document.getElementById("Month");
            var Month = MonthSelect.options[MonthSelect.selectedIndex].value;
            if(Month != null && Month != ''){
                var SF = document.getElementById('service_center_name').value;
                if(SF != null && SF != ''){
                $.ajax({
                    type: "GET",
                    url: "/Invoicebill/FetchSearch/",
                    beforeSend: function () {
                        $("#SearchData").html("Please Wait Loading....");
                    },
                    data: {
                        'Year': Year,
                        'Month': Month,
                        'SF': SF
                    },
                    success: function (msg) {
                        $("#SearchData").html(msg);
                    }
                });
                } else {
                    alert("Please Select SF !!")
                }

            } else {
                alert("Please Select Month !!")
            }

        } else {
            alert("Please Select Year !!")
        }
    }
</script>
</script>
@endsection