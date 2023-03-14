@extends('LTS.layouts.main')
@section('content-header')
<nav>
<div id="SFDETAIl">    
    <table id="empTable" class="table table-striped table-bordered">
    <tbody><tr>
        <td>SF NAME :  ARIF SHAIKH ||  ARIF SHAIKH</td>
        <td>SF PHONE : 7408897554, NA</td>
    </tr>
    <tr>
        <td>SF ADDRESS : AMBEDKAR TERAHA BALRAMPUR PIN CODE_ 271201 JILA_ BALRAMPUR, 271201</td>
        <td>SF CITY/STATE : BALRAMPUR / UTTAR PRADESH</td>
    </tr>
</tbody></table>
<hr>
<table id="empTable" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>S.NO</th>
        <th>PART NAME</th>
        <th>CODE</th> 
        <th>QTY</th>
        <th>Amount</th>
    </tr>
    </thead>
    <tbody>
                <tr>
            <td>1</td>
            <td>IC 2030</td>
            <td>NA</td>
            <td>10</td>
            <td>150</td>
        </tr>
                <tr>
            <td>2</td>
            <td>DISPLAY PCB 403 AISEN</td>
            <td>NA</td>
            <td>2</td>
            <td>300</td>
        </tr>
            </tbody>
    <tfoot>
    <tr>
        <th>S.NO</th>
        <th>PART NAME</th>
        <th>CODE</th>
        <th>QTY</th>
        <th>Amount</th>
    </tr>
    </tfoot>
</table>
</div>    

@endsection