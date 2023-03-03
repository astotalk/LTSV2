@extends('LTS.layouts.main')
@section('content')
        <div id="topnavbar">
            <div class="topnav mb-3">
                <div class="d-flex px-1"> <a href="#home" class="active">merchants</a> 
                 <a href="#">users</a> 
                 <a href="{{ route('employee') }}">Employee</a> 
                 
                 <a href="#contact">company<span class="px-1">&</span>mid</a>
                  <a href="#contact">account</a> </div>
            </div>
            <div class="d-flex align-items-center mb-3 px-md-3 px-2"> <span class="text-uppercase fs13 fw-bolder pe-3">search<span class="ps-1">by</span></span>
                <form class="example d-flex align-items-center"> <input type="text" placeholder="Type in Company Name Or Mid id" name="search"> <button type="submit"><i class="fa fa-search"></i></button> </form>
            </div>
            <div class="table-responsive px-2">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">COMPANY<span>ID</span></th>
                            <th scope="col">COMPANY</th>
                            <th scope="col">GST</th>
                            <th class="text-center" scope="col">Pan card</th>
                            <th scope="col">BANK<span class="ps-1">NAME</span></th>
                            <th scope="col">Address</th>
                            <th class="text-center" scope="col">State</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($company))
                          @foreach($company as $master_com)
                           <tr>
                           <th>{{$master_com->id}}</th>
                           <th>{{ucfirst($master_com->company_name)}}</th>
                           <th>{{$master_com->gst}}</th>
                           <th>{{$master_com->pan_card}}</th>
                           <th>{{$master_com->bank_name}}</th>
                           <th>{{$master_com->register_address}}</th>
                           <th>{{ $master_com->region }}</th>
                            
                           </tr>
                           @endforeach
                          @endif
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex align-items-center justify-content-between px-3 mt-3">
                <div class="bg-bdark fs13"> <span>Page</span> <input class="input-10 text-center" type="text" value="1"> <span><span class="px-1">of</span>1</span> </div>
                <div class="d-flex justify-content-end bg-bdark fs13"> <span class="pe-1">Show</span> <input class="input-10" type="number" value="25"> <span class="ps-2"><span class="pe-2">/</span>Page</span> </div>
            </div>
<!-- /.row (main row) -->
@endsection