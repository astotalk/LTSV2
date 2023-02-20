@extends('LTS.layouts.main')
@section('content-header')
<div id="SearchData">

<div id="printableArea" style="border:thin">
    <hr>
    <div class="invoice-box">
        <center>
           <strong>
               Bill Period : February / 2022<p>
                   Date : 2023-02-07<br>
                   Bill ID :RAPSF/2023-02-07/238<br>
               </p>
           </strong>
        </center>
        <table width="100%">
            <tbody>
               
                
                <tr>
                <td>
                    To
                    <p>Rapid Assured Pvt. Ltd</p>
                    <p>273, Rajdhani Enclave, Pitampura<br>
                        New Delhi - 110034<br>
                        +91- 8448344155<br>
                        Info@rapidassured.com
                    </p>
                </td>
                <td align="right">

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
                <td>Total Payable Amount:
                </td><td>Rs </td>
            </tr>
        </tbody></table>
        <hr>

        <table width="100%">

            <tbody><tr>
                <td>Paid Date:</td>
                <td>.........................</td>
                <td>Paid Mode</td>
                <td>.........................</td>
            </tr>
            <tr>
                <td>Transaction ID:</td>
                <td>.........................</td>
                <td>Balance Amount If Any</td>
                <td>.........................</td>
            </tr>
            <tr>
                <td>Check By:</td>
                <td>.........................</td>
                <td>Remark </td>
                <td>.........................</td>
            </tr>
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
        window.location.href = 'crm?pageName=SfBillInvoice';

    }
</script></div>

@endsection