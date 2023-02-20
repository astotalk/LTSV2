@extends('LTS.layouts.main')
@section('content-header')

<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
                <div class="page_title">
                   <h2>Inventory Management</h2>
                </div>
          </div>
       </div>
                       <!-- row -->
       <div class="row column1">
          <div class="col-md-12">
             <div class="white_shd full margin_bottom_30">

                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Part Mapping</h2>
                   </div>
                </div>
                   <div class="container py-5">
                      <div class="row">
                         <div class="col-md-12">
                            <div id="success_message"></div>
                            <div class="card mt-3">
                               <div class="card-header">
                                  <nav class="navbar navbar-light bg-light">
                                  <div class="d-grid gap-2 d-md-flex">
                                     <a class="btn btn-danger text-white" href="dashboard.php" role="button">Back</a>
                                  </div>     
                               </div>

                               <div class="card-body">
                               <form method="post">
                               <form method="post">
        <div class="form-group">
            <div class="col-12">
                <label for="formGroupExampleInput">Brand <span style="color: red">*</span></label>
                <select class="form-control" id="BrandID" name="BrandID" required="" onclick="FetchModel(this.value);">
                    <option selected="" disabled="" value="">Select</option>
                                                    <option value="1">TECNIA</option>
                                                    <option value="3">VIBRA</option>
                                                    <option value="4">TANDEM</option>
                                                    <option value="5">GLIDER</option>
                                                    <option value="6">AISEN</option>
                                                    <option value="7">BESSER</option>
                                                    <option value="10">Brand</option>
                                                    <option value="11">CROWNLINE</option>
                                                    <option value="12">UBON</option>
                                                    <option value="13">VINGAJOY</option>
                                                    <option value="14">NOUVETTA</option>
                                                    <option value="15">FABINO </option>
                                                    <option value="16">ARU</option>
                                                    <option value="17"></option>
                                            </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-12">
                <label for="formGroupExampleInput">Model NO <span style="color: red">*</span></label>
                <select class="form-control" id="ModelNOID" name="ModelNOID" required="" onclick="FetchParts(this.value);"><option value="">Select</option>    <option value="12">VIBRA-S60</option>
</select>
            </div>
        </div>

        <div id="PartDetail">    <table id="empTable" class="table table-striped table-bordered">
<thead class="thead-dark">
<tr>
    <th><b>S.NO<b></th>
    <th><b>Part Name<b></th>
    <th><b>Remark<b></th>
    <th><b>Model No<b></th>
    <th><b>Link<b></th>
</tr>
</thead>
<tbody>
            <tr>
        <td>1</td>
        <td>MAIN PCB(1106)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>1106</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID1" name="LinkID1" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>2</td>
        <td>MAIN PCB(6590)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID2" name="LinkID2" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>3</td>
        <td>MAIN PCB(3912)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID3" name="LinkID3" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>4</td>
        <td>MAIN PCB(4455)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID4" name="LinkID4" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>5</td>
        <td>DISPLAY PCB(1106)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID5" name="LinkID5" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>6</td>
        <td>DISPLAY PCB(1107)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID6" name="LinkID6" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>7</td>
        <td>DISPLAY PCB(6590)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID7" name="LinkID7" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>8</td>
        <td>DISPLAY PCB(3912)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID8" name="LinkID8" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>9</td>
        <td>4 INCH SPEAKER(1107)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID9" name="LinkID9" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>10</td>
        <td>4 INCH SPEAKER(1106)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID10" name="LinkID10" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>11</td>
        <td>3 INCH SPEAKER(6590)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID11" name="LinkID11" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>12</td>
        <td>3 INCH SPEAKER(3912)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID12" name="LinkID12" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>13</td>
        <td>3 INCH SPEAKER(2019)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID13" name="LinkID13" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>14</td>
        <td>WOOFER(6590)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID14" name="LinkID14" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>15</td>
        <td>WOOFER(3912)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID15" name="LinkID15" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>16</td>
        <td>TRANSFORMER(1106)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID16" name="LinkID16" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>17</td>
        <td>TRANSFORMER(6590)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID17" name="LinkID17" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>18</td>
        <td>TRANSFORMER(3912)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID18" name="LinkID18" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>19</td>
        <td>TRANSFORMER(2019)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID19" name="LinkID19" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>20</td>
        <td>CONTROL PCB(6590)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID20" name="LinkID20" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>21</td>
        <td>CONTROL PCB(1107)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID21" name="LinkID21" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>22</td>
        <td>CONTROL PCB(3912)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID22" name="LinkID22" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>23</td>
        <td>CONTROL PCB(4455)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID23" name="LinkID23" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>24</td>
        <td>FM MODULE(1107)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>WITHOUT DISPLAY</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID24" name="LinkID24" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>25</td>
        <td>MIC PCB(1107)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID25" name="LinkID25" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>26</td>
        <td>MIC TONE CARD(1107)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID26" name="LinkID26" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>27</td>
        <td>TONE CARD(2019)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID27" name="LinkID27" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>28</td>
        <td>TONE CARD(1106)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>WITH 2 TONE</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID28" name="LinkID28" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>29</td>
        <td>AUDIO JACK <br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>4 PIN</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID29" name="LinkID29" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>30</td>
        <td>AUDIO JACK<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>6 PIN</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID30" name="LinkID30" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>31</td>
        <td>WOOFER(1106)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>5.25 INCH SILVER </td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID31" name="LinkID31" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>32</td>
        <td>IC 2030(4455)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID32" name="LinkID32" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>33</td>
        <td>DISPLAY MODULE (VIBRA S60)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID33" name="LinkID33" required="">
                                            <option value="1">YES</option>
                    <option value="2">NO</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>34</td>
        <td>IC 2050(3912)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID34" name="LinkID34" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>35</td>
        <td>POWER CORD<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID35" name="LinkID35" required="">
                                            <option value="1">YES</option>
                    <option value="2">NO</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>36</td>
        <td>SPEAKER WIRE (3912)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID36" name="LinkID36" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>37</td>
        <td>WOOFER (2019)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID37" name="LinkID37" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>38</td>
        <td>REMOTE<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID38" name="LinkID38" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>39</td>
        <td>IC 7265(6590)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID39" name="LinkID39" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>40</td>
        <td>SPEAKER<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>0</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID82" name="LinkID82" required="">
                                            <option value="1">YES</option>
                    <option value="2">NO</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>41</td>
        <td>MAIN PCB (4015)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID83" name="LinkID83" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>42</td>
        <td>BATTERY SET (VIBRA S60)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID84" name="LinkID84" required="">
                                            <option value="1">YES</option>
                    <option value="2">NO</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>43</td>
        <td>DISPLAY PCB (2019)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID85" name="LinkID85" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>44</td>
        <td>VOLUME KNOB (FSS1107)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID91" name="LinkID91" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>45</td>
        <td>VOLUME KNOB (TA6590)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID92" name="LinkID92" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>46</td>
        <td>FRONT PANEL(6590)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID94" name="LinkID94" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>47</td>
        <td>BACK COVER(6590)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID95" name="LinkID95" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>48</td>
        <td>FRONT PANEL(1107)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID96" name="LinkID96" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>49</td>
        <td>MAIN PCB(ATOM 5.1)<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID97" name="LinkID97" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>50</td>
        <td>ENCODER<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID103" name="LinkID103" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>51</td>
        <td>MAIN PCB 403 AISEN<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID121" name="LinkID121" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>52</td>
        <td>DISPLAY PCB 403 AISEN<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID122" name="LinkID122" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>53</td>
        <td>TRANSFORMER 403 AISEN<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID123" name="LinkID123" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>54</td>
        <td>WOOFER 403 AISEN<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID124" name="LinkID124" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>55</td>
        <td>DISPLAY PCB 404 AISEN<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID125" name="LinkID125" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>56</td>
        <td>IC 7805<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID126" name="LinkID126" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>57</td>
        <td>TRANSFORMER 1107<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID127" name="LinkID127" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>58</td>
        <td>FRONT PANEL 1107<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID128" name="LinkID128" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>59</td>
        <td>SATELLITE SPEAKER 6590<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID129" name="LinkID129" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>60</td>
        <td>SATELLITE SPEAKER 2019<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID130" name="LinkID130" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>61</td>
        <td>SATELLITE SPEAKER BODY SET 2019<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID131" name="LinkID131" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>62</td>
        <td>BACK COVER 6590<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID132" name="LinkID132" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>63</td>
        <td>FRONT PANEL 2019<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID133" name="LinkID133" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>64</td>
        <td>VOLUME KNOB 1107<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID134" name="LinkID134" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>65</td>
        <td>MAIN PCB BMMS 001<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID136" name="LinkID136" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>66</td>
        <td>DISPLAY PCB BMMS 001<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID137" name="LinkID137" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
            <tr>
        <td>67</td>
        <td>CONTROL PANEL BMMS 001<br>M/S MALIK CHAND KRISHAN LAL</td>
        <td>NA</td>
        <td>VIBRA-S60</td>
        <td>
            <select class="form-control" id="LinkID138" name="LinkID138" required="">
                                            <option value="2">NO</option>
                    <option value="1">YES</option>
                    
            </select>
        </td>
    </tr>
        </tbody>

</table>

</div>
        <button type="submit" class="btn btn-primary mb-2" name="AddMapping" id="AddMapping">Add Mapping</button>
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