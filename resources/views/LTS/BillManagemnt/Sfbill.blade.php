@extends('LTS.layouts.main')
@section('content-header')
<div id="SearchData">

<div id="printableArea" style="border:thin">
    <hr>
    <div class="invoice-box">
        <center>
           <strong>
               Bill Period : March / 2023<p>
                   Date : 2023-03-07<br>
                   Bill ID :RAPSF/2023-03-07/238<br>
               </p>
           </strong>
        </center>
        <table width="100%">
            <tbody>
               
                
                <tr>
                <td>
                    @foreach($company as $master_com)
                    <tr>
                       To
                       <p>{{$master_com->company_name}}</p>
                       <p>{{$master_com->register_address}} , {{$master_com->region}} , 
                        {{$master_com->city}} - {{$master_com->pin_code}}<br>
                        {{$master_com->phone}} , {{$master_com->email}}</p>
                       
                       </tr>
               </td>
               @endforeach
                    
                <td align="right" style="margin-top: -96px;">

                    From
                    <p> ARIF SHAIKH<br>
                        AMBEDKAR TERAHA BALRAMPUR PIN CODE_ 271201 JILA_ BALRAMPUR</p>


                </td>
            </tr>
             
        </tbody></table>
        <hr>

        <table cellpadding="0" cellspacing="0" border="1" width="100%">

            <tbody><tr class="heading">
                <td>S.NO</td>
                <td>CALL DETAIL</td>
                <td>PART DETAIL</td>
                <td>CALL CHARGE</td>
                <td>LOCAL PURCHASE</td>
                <td>VISIT CHARGE</td>
                <td>NET AMOUNT</td>

            </tr>

                    
        </tbody></table>

        <table cellpadding="0" cellspacing="0" border="0" width="100%">
            <tbody><tr class="total">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Total Payable Amount:</td>
                <td></td>
                <td></td>
                <td></td>
                <td>Rs </td>
            </tr>
        </tbody></table>
        <hr>

        <table width="100%">

            <tbody>
                @foreach($expense as $expensed)
                <tr>
                <td>Paid Date:</td>
                <td>{{ $expensed->expesce_date }}</td>
                 <td>Paid Mode</td>
                <td>{{$expensed->paid_through}}</td>
                <td>Transaction ID:</td>
                <td>{{$expensed->transaction}}</td>
                <td>Check By:</td>
                <td>{{$expensed->paid_by}}</td>
                <td>Remark </td>
                <td>{{$expensed->remark}}</td>
                <td>Amount </td>
                <td>{{$expensed->amount}}</td>
            </tr>
            @endforeach
        </tbody></table>
    </div>
</div>
<hr>
<center>
    <button type="button" onclick="printDiv('printableArea')" name="view" class="btn btn-success" fdprocessedid="zi409">Print</button>
</center>

<script>
    function printDiv(printableArea) {
        var printContents = document.getElementById(printableArea).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        window.location.href = 'http://127.0.0.1:8000/BillManagemnt/Sfbill';

    }
</script></div>

@endsection