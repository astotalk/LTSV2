
<div id="dvPassport"> 
  <center><h3>Update Remark</h3></center>

  <form action="{{url('/closedreport/update/')}}" method="POST">
        <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
        <table class="table table-striped table-bordered">
            <tr>
                <td>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Next Follow up Date <span style="color: red">*</span></label>
                        <input type="date" class="form-control" id="NFD" name="NFD" required="">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="Remark" name="Remark" placeholder="Remark" required="">
                    </div>
                </td>
            </tr>
           
        </table>
        <button type="submit" class="btn btn-primary mb-2" name="UpdateRemark" id="UpdateRemark" >Submit</button>
    </form>
</div>
  <center><h3>Update Part-Pending</h3></center>
  <form action="{{url('/closedreport/PartPending/')}}" method="post">
    <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
    <table class="table table-striped table-bordered">
        <tbody><tr>
            <td>
                <div class="form-group">
                    <label for="formGroupExampleInput">Part Name <span style="color: red">*</span></label>
                    <select class="form-control" id="PartName" name="PartName" required="required" fdprocessedid="oeza9">
                        <option value="">Select</option>
                                                        <option value="186">WOOFER</option>
                                                        <option value="187">IC 2030</option>
                                                        <option value="190">POWER CORD</option>
                                                        <option value="193">BT CARD</option>
                                                        <option value="195">TRANSFORMER (TYPE A)</option>
                                                        <option value="197">AMLIFIRE CARD</option>
                                                        <option value="203">VOLUME CONTROL PCB </option>
                                                        <option value="207">SPEAKER</option>
                                                        <option value="211">USB PCB</option>
                                                        <option value="216">BT CARD 1101</option>
                                                </select>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Qty <span style="color: red">*</span></label>
                    <input type="number" class="form-control" id="Qty" name="Qty" placeholder="QTY" required="" fdprocessedid="wxae9d">
                </div>
            </td>
        </tr>
        <tr>
  
            <td>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Purchase Type <span style="color: red">*</span></label>
                    <select class="form-control" id="PurType" name="PurType" required="required" fdprocessedid="5orp9i">
                        <option selected="" disabled="">Select</option>
                        <option value="COURIER">COURIER</option>
                        <option value="LOCAL">LOCAL</option>
                    </select>
                </div>
            </td>
  
            <td>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="Remark" name="Remark" required="" fdprocessedid="u602oc">
                </div>
            </td>
        </tr>
    </tbody></table>
    <button type="submit" class="btn btn-primary mb-2" name="PartPending" id="PartPending" fdprocessedid="4hd3me">Submit</button>
  </form>

  <center><h3>Update Part Not Available </h3></center>
    <form method="post">
        <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
        <table class="table table-striped table-bordered">
            <tbody><tr>
                <td>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="Remark" name="Remark" placeholder="Remark" required="" fdprocessedid="lomisq">
                    </div>
                </td>
            </tr>
        </tbody></table>
        <button type="submit" class="btn btn-primary mb-2" name="PartNotAvailable" id="PartNotAvailable" fdprocessedid="urnq3g">Submit</button>
    </form>

 <center><h3>Update Allot To SF</h3></center>
        <form method="post">
            <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
            <table class="table table-striped table-bordered">
                <tbody><tr>
                    <td>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Service Center <span style="color: red">*</span></label>
                            <input class="form-control" type="text" list="text_editors" id="ServiceCenterID" name="ServiceCenterID" fdprocessedid="cmcu58">
                            <datalist id="text_editors">
                                                            <option value="238"> ARIF SHAIKH-BALRAMPUR<strong>/</strong>BALRAMPUR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="231"> J C ELECTONICS-PATIYALA<strong>/</strong>PATIYALA<strong>/</strong>PUNJAB                                                            </option><option value="282"> MOBILE SERVICES-CHORASI<strong>/</strong>SURAT<strong>/</strong>GUJARAT                                                            </option><option value="188"> SANDEEP ELECTRIC &amp; MOTAR REMAINING VISHNIYA-NEEMUCH<strong>/</strong>NEEMUCH<strong>/</strong>MADHYA PRADESH                                                            </option><option value="102"> SANJEEV ELECTRONICS-DELHI<strong>/</strong>NORTH WEST DELHI<strong>/</strong>DELHI                                                            </option><option value="221">A B ELECTRONIC -HAZARAPAR<strong>/</strong>SONITPUR<strong>/</strong>ASSAM                                                            </option><option value="114">A S ELECTRONICS-ITANAGAR<strong>/</strong>PAPUM PARE<strong>/</strong>ARUNACHAL PRADESH                                                            </option><option value="109">AADITYA ELECTRONICS-SALTLAKE<strong>/</strong>NORTH 24 PARGANAS<strong>/</strong>WEST BENGAL                                                            </option><option value="318">AARADHYA TELECOM-BASSEIN<strong>/</strong>THANE<strong>/</strong>MAHARASHTRA                                                            </option><option value="237">ABHAY ELECTRONIC-HARODI<strong>/</strong>HARDOI<strong>/</strong>UTTAR PRADESH                                                            </option><option value="160">ABHIJIT PAUL-NA<strong>/</strong>WEST TRIPURA<strong>/</strong>TRIPURA                                                            </option><option value="334">AHUJA RADIO SERVICES-DAUND<strong>/</strong>PUNE<strong>/</strong>MAHARASHTRA                                                            </option><option value="219">AJAY HYD SF-TIRUMALAGIRI<strong>/</strong>HYDERABAD<strong>/</strong>TELANGANA                                                            </option><option value="175">AJIT ELECTRONICS -LUDHIANA<strong>/</strong>LUDHIANA<strong>/</strong>PUNJAB                                                            </option><option value="323">AKASH ELECTRONICS-SATARA<strong>/</strong>SATARA<strong>/</strong>MAHARASHTRA                                                            </option><option value="285">AMBEY ELECTRONIC-JAIPUR<strong>/</strong>JAIPUR<strong>/</strong>RAJASTHAN                                                            </option><option value="101">AMIT ELECTRONICS-JAGDISHPUR<strong>/</strong>BHAGALPUR<strong>/</strong>BIHAR                                                            </option><option value="169">AMJAD@KAREEMNAGAR-NA<strong>/</strong>KARIM NAGAR<strong>/</strong>TELANGANA                                                            </option><option value="264">ANANYA SERVICE CENTER-LUDHIANA<strong>/</strong>LUDHIANA<strong>/</strong>PUNJAB                                                            </option><option value="229">ANEES COIMBATORE-COIMBATORE NORTH<strong>/</strong>COIMBATORE<strong>/</strong>TAMIL NADU                                                            </option><option value="68">ANIL ELECTRONICS-BHIWANI<strong>/</strong>BHIWANI<strong>/</strong>HARYANA                                                            </option><option value="280">ANMOL ENTERPRISES -<strong>/</strong><strong>/</strong>                                                            </option><option value="41">ANSARI ENTERPRISES		-DONGARGAON<strong>/</strong>RAJNANDGAON<strong>/</strong>CHATTISGARH                                                            </option><option value="205">ANU ELECTRONIC -<strong>/</strong><strong>/</strong>                                                            </option><option value="81">ANUP ELECTRICALS-JAMURIA<strong>/</strong>BARDHAMAN<strong>/</strong>WEST BENGAL                                                            </option><option value="119">APNASERVICECENTRE-ROHAK<strong>/</strong>ROHTAK<strong>/</strong>HARYANA                                                            </option><option value="192">ARJUN BHATNAGAR -NA<strong>/</strong>AGRA<strong>/</strong>UTTAR PRADESH                                                            </option><option value="350">ARS SERVICE CENTER-<strong>/</strong><strong>/</strong>                                                            </option><option value="313">ARTHAV ELECTRONIC &amp; ELECTRICAL -CHAKUR<strong>/</strong>LATUR<strong>/</strong>MAHARASHTRA                                                            </option><option value="223">ARUN STORE PERSON -VISAKHAPATNAM<strong>/</strong>VISAKHAPATNAM<strong>/</strong>ANDHRA PRADESH                                                            </option><option value="187">ASHISH KUMAR GUPTA-GYANPUR<strong>/</strong>SANT RAVIDAS NAGAR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="10">ASHISH PAUL-KARIMGANJ<strong>/</strong>KARIMGANJ<strong>/</strong>ASSAM                                                            </option><option value="141">ASHISH PAUL-SILCHAR<strong>/</strong>CACHAR<strong>/</strong>ASSAM                                                            </option><option value="105">AYANSHI ENTERPRISES HOME APPLAICENCE SERVICE-BHOPAL<strong>/</strong>BHOPAL<strong>/</strong>MADHYA PRADESH                                                            </option><option value="295">AZAD REFRIGERATION -FIROZEPUR<strong>/</strong>FIROZPUR<strong>/</strong>PUNJAB                                                            </option><option value="61">B.S. ELECTRONICS-MUKTSAR<strong>/</strong>MUKTSAR<strong>/</strong>PUNJAB                                                            </option><option value="202">BAINS ENTERPRISES-JALANDHAR - I<strong>/</strong>JALANDHAR<strong>/</strong>PUNJAB                                                            </option><option value="133">BHARAT ELECTRONICS-STN. JADCHERLA<strong>/</strong>MAHABUB NAGAR<strong>/</strong>TELANGANA                                                            </option><option value="147">BHARAT ELECTRONICS SERVICES-KASHIPUR<strong>/</strong>UDHAM SINGH NAGAR<strong>/</strong>UTTARAKHAND                                                            </option><option value="65">BHIM ELECTRONICS-NA<strong>/</strong>CHANDIGARH<strong>/</strong>CHANDIGARH                                                            </option><option value="348">BIKKU SERVICE CENTER-PHULWARI<strong>/</strong>PATNA<strong>/</strong>BIHAR                                                            </option><option value="122">BISHT ENTERPRISES SOLAN -PANCHKULA<strong>/</strong>PANCHKULA<strong>/</strong>HARYANA                                                            </option><option value="156">BISWANATH SERVICE CENTER-MIJIKAJAN<strong>/</strong>SONITPUR<strong>/</strong>ASSAM                                                            </option><option value="342">CARE AND CURE -FATEHPUR<strong>/</strong>FATEHPUR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="140">CARE IT -MUSHAHARI<strong>/</strong>MUZAFFARPUR<strong>/</strong>BIHAR                                                            </option><option value="311">CLIMET SCREW-SIWAN<strong>/</strong>SIWAN<strong>/</strong>BIHAR                                                            </option><option value="126">COMPUTER LAB-KOKRAJHAR<strong>/</strong>KOKRAJHAR<strong>/</strong>ASSAM                                                            </option><option value="20">COMPUTER PALACE -KICHHA<strong>/</strong>UDHAM SINGH NAGAR<strong>/</strong>UTTARAKHAND                                                            </option><option value="306">COOCH BEHAR SERVICES-COOCH BEHAR - I<strong>/</strong>COOCH BEHAR<strong>/</strong>WEST BENGAL                                                            </option><option value="272">D B A TECHNOLOGY -DUMRA<strong>/</strong>SITAMARHI<strong>/</strong>BIHAR                                                            </option><option value="209">DAILY NEEDS -LUCKNOW<strong>/</strong>LUCKNOW<strong>/</strong>UTTAR PRADESH                                                            </option><option value="136">DAKSH ELECTRONICS WORLD-THANESAR<strong>/</strong>KURUKSHETRA<strong>/</strong>HARYANA                                                            </option><option value="27">DAVINDER-FIROZEPUR<strong>/</strong>FIROZPUR<strong>/</strong>PUNJAB                                                            </option><option value="245">DAY TO DAY SERVICES -SASARAM<strong>/</strong>ROHTAS<strong>/</strong>BIHAR                                                            </option><option value="159">DEHRA ELECTRONICS-DEHRADUN<strong>/</strong>DEHRADUN<strong>/</strong>UTTRAKHAND                                                            </option><option value="261">DG AIRCON-BORIVLAI EAST<strong>/</strong>MUMBAI<strong>/</strong>MAHARASHTRA                                                            </option><option value="67">DINESH ELECTRICALS-B B ASHRAM<strong>/</strong>REWARI<strong>/</strong>HARYANA                                                            </option><option value="228">DIXTH KUTCH -BHUJ<strong>/</strong>KACHCHH<strong>/</strong>GUJARAT                                                            </option><option value="17">EASY LIFE ENTERPRISE-RAMPUR<strong>/</strong>RAMPUR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="262">EK OMKAR ENTERPRISES -FATEHGARH SAHIB<strong>/</strong>FATEHGARH SAHIB<strong>/</strong>PUNJAB                                                            </option><option value="168">EKRAMUL ISLAM-GOALPARA<strong>/</strong>GOALPARA<strong>/</strong>ASSAM                                                            </option><option value="248">ELECTRONIC GALLERY-GHAZIPUR<strong>/</strong>GHAZIPUR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="274">ESCORT SERVICE-PHULWARI<strong>/</strong>PATNA<strong>/</strong>BIHAR                                                            </option><option value="129">EXCELLENT INFOSYS-KATNI<strong>/</strong>KATNI<strong>/</strong>MADHYA PRADESH                                                            </option><option value="49">F STAR ELECTRONIC -RAMPUR<strong>/</strong>RAMPUR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="346">FRIENDS SERVICE -VARANASI<strong>/</strong>VARANASI<strong>/</strong>NA                                                            </option><option value="40">FRINDES ELECTRIC WORKS SHOP-JALPAIGURI<strong>/</strong>JALPAIGURI<strong>/</strong>WEST BENGAL                                                            </option><option value="251">G.K. ELECTRONIC SERVICE POINT-NOIDA<strong>/</strong>GAUTAM BUDDHA NAGAR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="252">GANESH ENTERPRISES-NA<strong>/</strong>JUNAGADH<strong>/</strong>GUJARAT                                                            </option><option value="107">GAURAV ELECTRONICS-DEPALPUR<strong>/</strong>INDORE<strong>/</strong>MADHYA PRADESH                                                            </option><option value="145">GAURAV JHA-FIROZABAD<strong>/</strong>FIROZABAD<strong>/</strong>UTTAR PRADESH                                                            </option><option value="9">GCT SAMEER ELECTRONIC-JODHPUR<strong>/</strong>JODHPUR<strong>/</strong>RAJASTHAN                                                            </option><option value="30">GEO ELECTRONICS-KOCHI<strong>/</strong>ERNAKULAM<strong>/</strong>KERALA                                                            </option><option value="66">GOURAV KUMAR ELECTRONIC-KARNAL<strong>/</strong>KARNAL<strong>/</strong>HARYANA                                                            </option><option value="118">GURU NANAK ELECTRIC SERVICE-JAGADHRI<strong>/</strong>YAMUNA NAGAR<strong>/</strong>HARYANA                                                            </option><option value="13">H N SOLUTIONS -NALBARI<strong>/</strong>NALBARI<strong>/</strong>ASSAM                                                            </option><option value="211">HABIBUR RAHMAN(NALBARI)-<strong>/</strong><strong>/</strong>                                                            </option><option value="328">HANS ENTERPRISES-KANKAVLI<strong>/</strong>SINDHUDURG<strong>/</strong>MAHARASHTRA                                                            </option><option value="21">HOME SERVICES-ARJUN NAGAR<strong>/</strong>GURGAON<strong>/</strong>HARYANA                                                            </option><option value="120">INDER ELECTRICAL AND REFRIGREATER -PAONTA<strong>/</strong>SIRMAUR<strong>/</strong>HIMACHAL PRADESH                                                            </option><option value="155">INDER ELECTRONIC-KALKA<strong>/</strong>PANCHKULA<strong>/</strong>HARYANA                                                            </option><option value="241">INDO RAJ KUMAR SERVICE CENTER -NA<strong>/</strong>CHANDIGARH<strong>/</strong>CHANDIGARH                                                            </option><option value="18">J K VAID ELECTRONICS-UDHAMPUR<strong>/</strong>UDHAMPUR<strong>/</strong>JAMMU &amp; KASHMIR                                                            </option><option value="258">JAGDEEP ELECTRONIC -LUDHIANA<strong>/</strong>LUDHIANA<strong>/</strong>PUNJAB                                                            </option><option value="225">JAI DURGA ENTERPRISES-LUDHIANA<strong>/</strong>LUDHIANA<strong>/</strong>PUNJAB                                                            </option><option value="73">JASPREET ELECTRONICS-PANCHKULA<strong>/</strong>PANCHKULA<strong>/</strong>HARYANA                                                            </option><option value="351">JETCOOL INDIA-DELHI<strong>/</strong>NORTH WEST DELHI<strong>/</strong>DELHI                                                            </option><option value="352">JETCOOL INDIA-DELHI<strong>/</strong>NORTH WEST DELHI<strong>/</strong>DELHI                                                            </option><option value="195">JUBER ANSARI -CHHATARPUR<strong>/</strong>CHHATARPUR<strong>/</strong>MADHYA PRADESH                                                            </option><option value="207">JUMDE ELEC &amp; ELETRANICS-CHANDRAPUR HO<strong>/</strong>CHANDRAPUR<strong>/</strong>MAHARASHTRA                                                            </option><option value="278">KAILAS SANDEEP SHINGARE-AURANGABAD<strong>/</strong>AURANGABAD<strong>/</strong>MAHARASHTRA                                                            </option><option value="203">KALYAN THANE SERVICE CENTRE -NA<strong>/</strong>MUMBAI<strong>/</strong>MAHARASHTRA                                                            </option><option value="88">KAMAL ELECTRONICS-HARDWAR<strong>/</strong>HARIDWAR<strong>/</strong>UTTARAKHAND                                                            </option><option value="243">KARTIK CHOUDHURY-DHARMANAGAR<strong>/</strong>NORTH TRIPURA<strong>/</strong>TRIPURA                                                            </option><option value="213">KESHAV KUMAR ADEP-PUNE CITY<strong>/</strong>PUNE<strong>/</strong>MAHARASHTRA                                                            </option><option value="333">KOLHAPUR SF -KARVEER<strong>/</strong>KOLHAPUR<strong>/</strong>MAHARASHTRA                                                            </option><option value="45">KOLLA TECHNO SERVICES-BANGALORE NORTH<strong>/</strong>BANGALORE<strong>/</strong>KARNATAKA                                                            </option><option value="104">KRISHNA GUPTA-HATA<strong>/</strong>KUSHINAGAR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="165">L N ELECTRONICS-MAHBUBNAGAR<strong>/</strong>MAHABUB NAGAR<strong>/</strong>TELANGANA                                                            </option><option value="161">LADDI ELECTRONIC-CHANDIGARH<strong>/</strong>CHANDIGARH<strong>/</strong>CHANDIGARH                                                            </option><option value="87">LATU DEV ELECTRICALS-JORHAT<strong>/</strong>JORHAT<strong>/</strong>ASSAM                                                            </option><option value="33">LOKESH ELECTRONICS-ALIGARH<strong>/</strong>ALIGARH<strong>/</strong>UTTAR PRADESH                                                            </option><option value="131">LOKNATH ELECTRONICS-NAGAON<strong>/</strong>KARBI ANGLONG<strong>/</strong>ASSAM                                                            </option><option value="190">LOVELY COMMUNICATION-BETTIAH<strong>/</strong>WEST CHAMPARAN<strong>/</strong>BIHAR                                                            </option><option value="242">M/S ANAM ELECTRONICS-MUZAFFARNAGAR<strong>/</strong>MUZAFFARNAGAR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="216">M/S.COMPLETE BUSINESS SOLUTIONS-ERODE<strong>/</strong>ERODE<strong>/</strong>TAMIL NADU                                                            </option><option value="304">MAA CHINMASTIKA MOBILE -BHARWAIN<strong>/</strong>UNA<strong>/</strong>HIMACHAL PRADESH                                                            </option><option value="111">MADAV ELECTRONIC-<strong>/</strong><strong>/</strong>                                                            </option><option value="96">MAHEE  ENTERPRISES-JAIPUR<strong>/</strong>JAIPUR<strong>/</strong>RAJASTHAN                                                            </option><option value="174">MAHTAB ALAM-HAZARIBAGH<strong>/</strong>HAZARIBAG<strong>/</strong>JHARKHAND                                                            </option><option value="316">MALDA SERVICE CENTER(WEST BENGAL)-<strong>/</strong><strong>/</strong>                                                            </option><option value="173">MALHAR ASSOCIATION-KATNI<strong>/</strong>KATNI<strong>/</strong>MADHYA PRADESH                                                            </option><option value="224">MAMTA STORE PERSON -SAROORNAGAR<strong>/</strong>K.V.RANGAREDDY<strong>/</strong>TELANGANA                                                            </option><option value="163">MANISH KUMAR -RAMGARH CHOWK<strong>/</strong>LAKHISARAI<strong>/</strong>BIHAR                                                            </option><option value="124">MANOHAR ELECTRONICS-HUZUR<strong>/</strong>REWA<strong>/</strong>MADHYA PRADESH                                                            </option><option value="80">MANOJ ELECTRIC -DAMOH<strong>/</strong>DAMOH<strong>/</strong>MADHYA PRADESH                                                            </option><option value="60">MANOJ ELECTRONICS-AJMER<strong>/</strong>AJMER<strong>/</strong>RAJASTHAN                                                            </option><option value="239">MANSI ELECTRONIC -DHAR<strong>/</strong>DHAR<strong>/</strong>MADHYA PRADESH                                                            </option><option value="249">MAU@SF-SADAR<strong>/</strong>MAU<strong>/</strong>UTTAR PRADESH                                                            </option><option value="189">MERTO PLAZA -PURNEA<strong>/</strong>PURNIA<strong>/</strong>BIHAR                                                            </option><option value="16">MIKU ELECTRONICS -GOLAGHAT<strong>/</strong>GOLAGHAT<strong>/</strong>ASSAM                                                            </option><option value="92">MITILESH ELECTRONICS-ARRAH<strong>/</strong>BHOJPUR<strong>/</strong>BIHAR                                                            </option><option value="315">MOBILE SERVICE (SANJAY)-CHORASI<strong>/</strong>SURAT<strong>/</strong>GUJARAT                                                            </option><option value="197">MODERN COOL-RAE BARELI <strong>/</strong>RAEBARELI<strong>/</strong>UTTAR PRADESH                                                            </option><option value="317">MOHAMMAD JUNAID-HAMIRPUR<strong>/</strong>HAMIRPUR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="193">MP AUDIO LALBAG-<strong>/</strong><strong>/</strong>                                                            </option><option value="151">MS TELECOM-SIWAN<strong>/</strong>SIWAN<strong>/</strong>BIHAR                                                            </option><option value="29">MUKHATAR ELECTRICAL -KASIA<strong>/</strong>KUSHINAGAR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="153">MULTIFIX ELECTRO INDIA PVT LTD,-<strong>/</strong><strong>/</strong>                                                            </option><option value="210">MUSKAN ELECTRONIC -BIKANER<strong>/</strong>BIKANER<strong>/</strong>RAJASTHAN                                                            </option><option value="71">MUZAFFAR PATRKAAR-SIRATHU<strong>/</strong>KAUSHAMBI<strong>/</strong>UTTAR PRADESH                                                            </option><option value="176">NAGENDERA COMMUNICATION-ETAWAH<strong>/</strong>ETAWAH<strong>/</strong>UTTAR PRADESH                                                            </option><option value="331">NAMRATA ELECTRICALS &amp; ELECTRONICS -SHIRUR<strong>/</strong>PUNE<strong>/</strong>MAHARASHTRA                                                            </option><option value="34">NANAO ELECTRICAL &amp; ELECTRONIC-NIL<strong>/</strong>IMPHAL WEST<strong>/</strong>MANIPUR                                                            </option><option value="344">NARENDER SINGH -LAJPAT NAGAR<strong>/</strong>KANPUR NAGAR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="170">NATIONAL COMPUTERS-SANGRUR<strong>/</strong>SANGRUR<strong>/</strong>PUNJAB                                                            </option><option value="70">NATIONAL TV CENTRE-<strong>/</strong><strong>/</strong>                                                            </option><option value="220">NAVEEN SF-WARANGAL<strong>/</strong>WARANGAL<strong>/</strong>TELANGANA                                                            </option><option value="312">NAVYA ENTERPRISES -PANCHKULA<strong>/</strong>PANCHKULA<strong>/</strong>HARYANA                                                            </option><option value="235">NEERAJ KUMAR-SADAR MADHUBANI<strong>/</strong>MADHUBANI<strong>/</strong>BIHAR                                                            </option><option value="90">NETAI DAS-DHARMANAGAR<strong>/</strong>NORTH TRIPURA<strong>/</strong>TRIPURA                                                            </option><option value="337">NEW KOLKATA SERVICE CENTER -KOLKATA<strong>/</strong>KOLKATA<strong>/</strong>WEST BENGAL                                                            </option><option value="177">NICE SERVICE CENTRE-BILASPUR<strong>/</strong>BILASPUR(CGH)<strong>/</strong>CHATTISGARH                                                            </option><option value="184">NK ELECTRICAL -RANCHI<strong>/</strong>RANCHI<strong>/</strong>JHARKHAND                                                            </option><option value="58">OJASVI ENTERPRISES-MEERUT<strong>/</strong>MEERUT<strong>/</strong>UTTAR PRADESH                                                            </option><option value="292">OM ELECTRICAL -<strong>/</strong><strong>/</strong>                                                            </option><option value="3">OM MOBILE REPAIR-HAMIRPUR<strong>/</strong>HAMIRPUR(HP)<strong>/</strong>HIMACHAL PRADESH                                                            </option><option value="143">OM SAI  SERVICE CENTRE -FIROZABAD<strong>/</strong>FIROZABAD<strong>/</strong>UTTAR PRADESH                                                            </option><option value="19">OM SAI ELECTRICAL -NALAGARH<strong>/</strong>SOLAN<strong>/</strong>HIMACHAL PRADESH                                                            </option><option value="215">OM SHREE SAI SERVICE-CHANDRAPUR HO<strong>/</strong>CHANDRAPUR<strong>/</strong>MAHARASHTRA                                                            </option><option value="26">OMM SERVICES-JAJPUR<strong>/</strong>JAJAPUR<strong>/</strong>ODISHA                                                            </option><option value="260">PANASONIC SERVICE CENTER -MOGA<strong>/</strong>MOGA<strong>/</strong>PUNJAB                                                            </option><option value="157">PANDIT JEE ELECTRONIC-NA<strong>/</strong>MUZAFFARPUR<strong>/</strong>BIHAR                                                            </option><option value="4">PANJAK - SAUMO ENGINEER-LUCKNOW<strong>/</strong>LUCKNOW<strong>/</strong>UTTAR PRADESH                                                            </option><option value="100">PANJAK-ASHADEEP ENTERPRISE -JAUNPUR<strong>/</strong>JAUNPUR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="287">PANJAK-AZAD ELECTRONIC  -KAISERGANJ<strong>/</strong>BAHRAICH<strong>/</strong>UTTAR PRADESH                                                            </option><option value="266">PANJAK-GANESH ENTERPRISES -KARCHHANA <strong>/</strong>ALLAHABAD<strong>/</strong>UTTAR PRADESH                                                            </option><option value="268">PANJAK-GANESH ENTERPRISES -SADAR<strong>/</strong>AZAMGARH<strong>/</strong>UTTAR PRADESH                                                            </option><option value="269">PANJAK-GANESH ENTERPRISES -BASTI<strong>/</strong>BASTI<strong>/</strong>UTTAR PRADESH                                                            </option><option value="253">PANJAK-GANESH ENTERPRISES -COD<strong>/</strong>KANPUR NAGAR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="267">PANJAK-GANESH ENTERPRISES ,JAVED KHAN-<strong>/</strong><strong>/</strong>                                                            </option><option value="198">PANJAK-HASAN ELECTRONIC-ORAI<strong>/</strong>JALAUN<strong>/</strong>UTTAR PRADESH                                                            </option><option value="134">PANJAK-HB INFO -BAREILLY <strong>/</strong>BAREILLY<strong>/</strong>UTTAR PRADESH                                                            </option><option value="7">PANJAK-KRISHNA TYPEWRITER CO.-RAMPUR<strong>/</strong>RAMPUR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="38">PANJAK-M H ELECTRONICS -MORADABAD<strong>/</strong>MORADABAD<strong>/</strong>UTTAR PRADESH                                                            </option><option value="281">PANJAK-M.K.ELECTRIC-SALEMPUR<strong>/</strong>DEORIA<strong>/</strong>UTTAR PRADESH                                                            </option><option value="179">PANJAK-MAHALAXMI ENTERPRISES-BAHRAICH<strong>/</strong>BAHRAICH<strong>/</strong>UTTAR PRADESH                                                            </option><option value="181">PANJAK-MAHI SERVICE CENTRE-BANDA<strong>/</strong>BANDA<strong>/</strong>UTTAR PRADESH                                                            </option><option value="290">PANJAK-MANNAT ENTERPRISES/GANESH PANKAJ-ORAI<strong>/</strong>JALAUN<strong>/</strong>UTTAR PRADESH                                                            </option><option value="270">PANJAK-MOBILE NO: -9936703784 M S MOBILE ZONE-NAWABGANJ <strong>/</strong>BARABANKI<strong>/</strong>UTTAR PRADESH                                                            </option><option value="273">PANJAK-MOBILE WORLD -FIROZABAD<strong>/</strong>FIROZABAD<strong>/</strong>UTTAR PRADESH                                                            </option><option value="226">PANJAK-NADIM MIRZAPUR-MIRZAPURSADAR<strong>/</strong>MIRZAPUR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="259">PANJAK-NEW AMAN ELECTRONIC -GOLA<strong>/</strong>KHERI<strong>/</strong>UTTAR PRADESH                                                            </option><option value="250">PANJAK-RAM PRAKASH ELECTRONICS-BALLIA<strong>/</strong>BALLIA<strong>/</strong>UTTAR PRADESH                                                            </option><option value="78">PANJAK-S.S. ELECTRONICS-MULTIBRAND SERVICE PROVIDE-MATHURA<strong>/</strong>MATHURA<strong>/</strong>UTTAR PRADESH                                                            </option><option value="191">PANJAK-SAMEER ELECTRONICS -BIJNOR<strong>/</strong>BIJNOR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="265">PANJAK-SAMRIDHI ENTERPRISES -MEERUT<strong>/</strong>MEERUT<strong>/</strong>UTTAR PRADESH                                                            </option><option value="196">PANJAK-SINGH ELECTRONIC-JALALABAD<strong>/</strong>SHAHJAHANPUR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="289">PANJAK-SURESH KUMAR-HAMIRPUR<strong>/</strong>HAMIRPUR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="5">PANKAJ ----A&amp;A SERVICES-SADAR<strong>/</strong>GORAKHPUR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="246">PANKAJ KANPUR /RIYA ENTERPRIES-RAE BARELI <strong>/</strong>RAEBARELI<strong>/</strong>UTTAR PRADESH                                                            </option><option value="94">PANKAJ-----ARVI. SERVICES -VARANASI<strong>/</strong>VARANASI<strong>/</strong>UTTAR PRADESH                                                            </option><option value="53">PANKAJ-----ASHOK KUMAR RUHELA-BAREILLY <strong>/</strong>BAREILLY<strong>/</strong>UTTAR PRADESH                                                            </option><option value="52">PANKAJ-----KARAN KUMAR-CSA<strong>/</strong>KANPUR NAGAR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="296">PANKAJ----AMIT TELECOM -<strong>/</strong><strong>/</strong>                                                            </option><option value="320">PANKAJ----SHRI RAM JANKI IMPEX-LUCKNOW<strong>/</strong>LUCKNOW<strong>/</strong>UTTAR PRADESH                                                            </option><option value="294">PANKAJ---ADITYA SERVICE CENTRE-KHAGARIA<strong>/</strong>KHAGARIA<strong>/</strong>BIHAR                                                            </option><option value="54">PANKAJ---BABLU PATRA ENTERPRISE-SILIGURI<strong>/</strong>DARJILING<strong>/</strong>WEST BENGAL                                                            </option><option value="300">PANKAJ---DEV ENTERPRISES ALIGARH-ALIGARH<strong>/</strong>ALIGARH<strong>/</strong>UTTAR PRADESH                                                            </option><option value="299">PANKAJ---OM ELECTRONIC-RAIPUR<strong>/</strong>RAIPUR<strong>/</strong>CHATTISGARH                                                            </option><option value="234">PANKAJ---OM SAI ELECTRICALS-DEHRADUN<strong>/</strong>DEHRADUN<strong>/</strong>UTTARAKHAND                                                            </option><option value="149">PANKAJ---SANDEEP KUMAR C/O OM SAI SERVICE-SONIPAT<strong>/</strong>SONIPAT<strong>/</strong>HARYANA                                                            </option><option value="297">PANKAJ---SHRADDHA ELECTRONIC-GONDA<strong>/</strong>GONDA<strong>/</strong>UTTAR PRADESH                                                            </option><option value="293">PANKAJ---VIR YADAV /SUBAH MOBILE-HAMIRPUR<strong>/</strong>HAMIRPUR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="298">PANKAJ--MOBIL CARE -FARRUKHABAD<strong>/</strong>FARRUKHABAD<strong>/</strong>UTTAR PRADESH                                                            </option><option value="309">PANKAJ-JINDAL ELECTRICALS AND MOBILE POINT-MATHURA<strong>/</strong>MATHURA<strong>/</strong>UTTAR PRADESH                                                            </option><option value="329">PANKAJ// ASHISH MIRZAPUR -MIRZAPURSADAR<strong>/</strong>MIRZAPUR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="321">PANKAJ// BAGPAT-BARAUT<strong>/</strong>BAGPAT<strong>/</strong>UTTAR PRADESH                                                            </option><option value="338">PANKAJ// BANDA SERVICES -BANDA<strong>/</strong>BANDA<strong>/</strong>UTTAR PRADESH                                                            </option><option value="324">PANKAJ// GAURAV -HARDOI<strong>/</strong>HARDOI<strong>/</strong>UTTAR PRADESH                                                            </option><option value="330">PANKAJ// MANOJ KUMAR-DOMARIAGANJ<strong>/</strong>SIDDHARTHNAGAR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="339">PANKAJ// UTTARPRADESH -VARANASI<strong>/</strong>VARANASI<strong>/</strong>UTTAR PRADESH                                                            </option><option value="335">PANKAJ//AJAY YADAV KHUSHINAGAR -NA<strong>/</strong>DEORIA<strong>/</strong>UTTAR PRADESH                                                            </option><option value="325">PANKAJ//ANIKET SERVICE CENTER -BANDA<strong>/</strong>CHITRAKOOT<strong>/</strong>UTTAR PRADESH                                                            </option><option value="322">PANKAJ//SAURABH SAHRANPUR -SAHARANPUR H.O.<strong>/</strong>SAHARANPUR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="326">PANKAJ//SHANTANU -FAIZABAD<strong>/</strong>FAIZABAD<strong>/</strong>UTTAR PRADESH                                                            </option><option value="327">PANKAJ//VIJAY SINGH KANPUR -VIKAS NAGAR<strong>/</strong>KANPUR NAGAR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="116">PARVEZ-SAHKUND<strong>/</strong>BHAGALPUR<strong>/</strong>BIHAR                                                            </option><option value="206">PATRA ELECTRONIC -RAURKELA (M)<strong>/</strong>SUNDERGARH<strong>/</strong>ODISHA                                                            </option><option value="44">PERFECT DEAL SERVICE-JAMMU<strong>/</strong>JAMMU<strong>/</strong>JAMMU &amp; KASHMIR                                                            </option><option value="349">POOJA SERVICES-VARANASI<strong>/</strong>VARANASI<strong>/</strong>UTTAR PRADESH                                                            </option><option value="288">PRADEEP ENGINEER -SANGAMNER<strong>/</strong>AHMED NAGAR<strong>/</strong>MAHARASHTRA                                                            </option><option value="244">PRASAD ELETRONIC -CUDDAPAH<strong>/</strong>CUDDAPAH<strong>/</strong>ANDHRA PRADESH                                                            </option><option value="218">PRASHANT (BHIMAVARAM SPENCER)-NA<strong>/</strong>WEST GODAVARI<strong>/</strong>ANDHRA PRADESH                                                            </option><option value="50">PRASHANT ELECTRONICS-NAGPUR<strong>/</strong>NAGPUR<strong>/</strong>MAHARASHTRA                                                            </option><option value="208">PRESTIGE SERVICE CENTER ARA-ARRAH<strong>/</strong>BHOJPUR<strong>/</strong>BIHAR                                                            </option><option value="303">PROMPT SERVICE -BALLY JAGACHHA<strong>/</strong>HOWRAH<strong>/</strong>WEST BENGAL                                                            </option><option value="130">PUJA ENTERPRIES  -AJMER<strong>/</strong>AJMER<strong>/</strong>RAJASTHAN                                                            </option><option value="110">R B ELECTRONICS-MORIGAON<strong>/</strong>MARIGAON<strong>/</strong>ASSAM                                                            </option><option value="204">R S SERVICES -NAGPUR<strong>/</strong>NAGPUR<strong>/</strong>MAHARASHTRA                                                            </option><option value="43">R.E.S WORKS ELECTRONIC REPAIR &amp; SERVICING UNIT		-GMC<strong>/</strong>KAMRUP<strong>/</strong>ASSAM                                                            </option><option value="341">R.K SONI - SONI ENTERPRISES / LUCKNOW-<strong>/</strong><strong>/</strong>                                                            </option><option value="97">RAHUL ELECTRONICS-<strong>/</strong><strong>/</strong>                                                            </option><option value="307">RAJ MOBILE SERVICE CENTER -JUNAGADH<strong>/</strong>JUNAGADH<strong>/</strong>GUJARAT                                                            </option><option value="125">RAJESH ELECTRONIC-EAST SINGHBHUM<strong>/</strong>EAST SINGHBHUM<strong>/</strong>JHARKHAND                                                            </option><option value="74">RAJESH ELECTRONICS-AMRITSAR<strong>/</strong>AMRITSAR<strong>/</strong>PUNJAB                                                            </option><option value="36">RAJPAL CHAUDHARY-BASTI<strong>/</strong>BASTI<strong>/</strong>UTTAR PRADESH                                                            </option><option value="99">RAKESH ELECTRICS-KOTA<strong>/</strong>KOTA<strong>/</strong>RAJASTHAN                                                            </option><option value="123">RANA SERVICE CENTER -TINSUKIA<strong>/</strong>TINSUKIA<strong>/</strong>ASSAM                                                            </option><option value="275">RANKAWAT INFO SERVICE-JAIPUR<strong>/</strong>JAIPUR<strong>/</strong>RAJASTHAN                                                            </option><option value="150">RAPID CASH CALL-DELHI<strong>/</strong>NORTH WEST DELHI<strong>/</strong>DELHI                                                            </option><option value="127">RAVI RADIOS -NA<strong>/</strong>AMBALA<strong>/</strong>HARYANA                                                            </option><option value="135">RAZVI SOUND SERVICE &amp; REPAIRS-HALDWANI<strong>/</strong>NAINITAL<strong>/</strong>UTTARAKHAND                                                            </option><option value="6">RELIANT INDIA SERVICE-DHANBAD<strong>/</strong>DHANBAD<strong>/</strong>JHARKHAND                                                            </option><option value="201">RINKU ELECTRONIC -LUDHIANA<strong>/</strong>LUDHIANA<strong>/</strong>PUNJAB                                                            </option><option value="46">ROHIT COMPUTER -NA<strong>/</strong>KUSHINAGAR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="233">RUPESH ELECTRONIC -DEOLI<strong>/</strong>WARDHA<strong>/</strong>MAHARASHTRA                                                            </option><option value="284">S G MOBILE SERVICE CENTRE-KALYAN<strong>/</strong>THANE<strong>/</strong>MAHARASHTRA                                                            </option><option value="14">S K SHAH ELECTRONIC-SIBSAGAR<strong>/</strong>SIBSAGAR<strong>/</strong>ASSAM                                                            </option><option value="308">S S ELECTRONICS -GANDHIDHAM<strong>/</strong>KACHCHH<strong>/</strong>GUJARAT                                                            </option><option value="286">S.G MOBILE SERVICE CENTER -AMBARNATH<strong>/</strong>THANE<strong>/</strong>MAHARASHTRA                                                            </option><option value="152">S.G. ELECTRONICS REPAIR CENTER-NAWANSHAHAR<strong>/</strong>NAWANSHAHR<strong>/</strong>PUNJAB                                                            </option><option value="257">S.K ENTERPRISES-VASAI<strong>/</strong>THANE<strong>/</strong>MAHARASHTRA                                                            </option><option value="279">S.S ENTERPRISES-MUMBAI<strong>/</strong>MUMBAI<strong>/</strong>MAHARASHTRA                                                            </option><option value="212">SACHIN ASIEN MUMBAI-BHIWANDI<strong>/</strong>THANE<strong>/</strong>MAHARASHTRA                                                            </option><option value="142">SACHIN ELECTRONIC-RANCHI<strong>/</strong>RANCHI<strong>/</strong>JHARKHAND                                                            </option><option value="167">SAI KEERTHI ELECTRONICS-NA<strong>/</strong>KARIM NAGAR<strong>/</strong>TELANGANA                                                            </option><option value="171">SAI THE ELECTRONICS-NA<strong>/</strong>GURGAON<strong>/</strong>HARYANA                                                            </option><option value="183">SAMEER ELECTRONICS AND ELECTRIC REPAIRING CENTER-FAIZABAD<strong>/</strong>FAIZABAD<strong>/</strong>UTTAR PRADESH                                                            </option><option value="158">SANDEEP HARDIYA-INDORE<strong>/</strong>INDORE<strong>/</strong>MADHYA PRADESH                                                            </option><option value="128">SANDHYA ELECTRICAL AND ELECTRONIC -INDORE<strong>/</strong>INDORE<strong>/</strong>MADHYA PRADESH                                                            </option><option value="75">SANJIV ELECTRICALS-PATHANKOT<strong>/</strong>GURDASPUR<strong>/</strong>PUNJAB                                                            </option><option value="85">SANTOSH ELECTRONICS-PARDI<strong>/</strong>VALSAD<strong>/</strong>GUJARAT                                                            </option><option value="230">SARAN SINGH -SRIPERUMBUDUR<strong>/</strong>KANCHIPURAM<strong>/</strong>TAMIL NADU                                                            </option><option value="263">SARDARENTERPRISES -RUPNAGAR<strong>/</strong>RUPNAGAR<strong>/</strong>PUNJAB                                                            </option><option value="319">SATISH BANGLORE -BANGALORE NORTH<strong>/</strong>BANGALORE<strong>/</strong>KARNATAKA                                                            </option><option value="77">SATISH ELECTRONICS-UJJAIN<strong>/</strong>UJJAIN<strong>/</strong>MADHYA PRADESH                                                            </option><option value="217">SATWINDER SINGH -S.A.S.NAGAR (MOHALI)<strong>/</strong>RUPNAGAR<strong>/</strong>PUNJAB                                                            </option><option value="255">SATYA ELECTRONIC -KAKINADA (URBAN)<strong>/</strong>EAST GODAVARI<strong>/</strong>ANDHRA PRADESH                                                            </option><option value="277">SAUMYA ENTERPRISES-MOTIHARI<strong>/</strong>EAST CHAMPARAN<strong>/</strong>BIHAR                                                            </option><option value="148">SEEMA ENTERPRISE-BALURGHAT<strong>/</strong>SOUTH DINAJPUR<strong>/</strong>WEST BENGAL                                                            </option><option value="138">SHABAZ KHAN/MONU-<strong>/</strong><strong>/</strong>                                                            </option><option value="178">SHAMA ELECTRONICS-SALCETE<strong>/</strong>SOUTH GOA<strong>/</strong>GOA                                                            </option><option value="276">SHAN ELECTRONICS-<strong>/</strong><strong>/</strong>                                                            </option><option value="113">SHANKAR ELECTRONICS-CHHINDWARA<strong>/</strong>CHHINDWARA<strong>/</strong>MADHYA PRADESH                                                            </option><option value="86">SHIV SHANKAR ELECTRIC -PHULWARI<strong>/</strong>PATNA<strong>/</strong>BIHAR                                                            </option><option value="35">SHIVAM ELECTRONIC-GWALIOR<strong>/</strong>GWALIOR<strong>/</strong>MADHYA PRADESH                                                            </option><option value="247">SHRADDHA ELECTRONIC -<strong>/</strong><strong>/</strong>                                                            </option><option value="305">SHREE BALAJI ENTERPRISE -BANGALORE SOUTH<strong>/</strong>BANGALORE<strong>/</strong>KARNATAKA                                                            </option><option value="172">SHREE SAI MOBILE SHOP-HUZUR<strong>/</strong>REWA<strong>/</strong>MADHYA PRADESH                                                            </option><option value="301">SHREE SAMARATH  ELECTRICALS -NA<strong>/</strong>AMRAVATI<strong>/</strong>MAHARASHTRA                                                            </option><option value="185">SHREE SHYAM ELECTRONICS-BATHINDA<strong>/</strong>BATHINDA<strong>/</strong>PUNJAB                                                            </option><option value="24">SHUBHAM ELECTRONICS-DEWAS<strong>/</strong>DEWAS<strong>/</strong>MADHYA PRADESH                                                            </option><option value="25">SHUBHAM ELECTRONICS-DEWAS<strong>/</strong>DEWAS<strong>/</strong>MADHYA PRADESH                                                            </option><option value="166">SHWETHA COMMUNUICATIONS-NA<strong>/</strong>KARIM NAGAR<strong>/</strong>TELANGANA                                                            </option><option value="2">SIDHARTHA SALE&amp;SERVICE-ANGUL<strong>/</strong>ANGUL<strong>/</strong>ODISHA                                                            </option><option value="37">SK ELECTRONIC -JHANSI<strong>/</strong>JHANSI<strong>/</strong>UTTAR PRADESH                                                            </option><option value="63">SK ELECTRONIC  DARSHNIYA-DEOGHAR<strong>/</strong>DEOGHAR<strong>/</strong>JHARKHAND                                                            </option><option value="93">SK ENTERPRIES -KOLKATA<strong>/</strong>KOLKATA<strong>/</strong>WEST BENGAL                                                            </option><option value="139">SK. PANKAJ GUPTA ENGINEER-CHANDIGARH<strong>/</strong>CHANDIGARH<strong>/</strong>CHANDIGARH                                                            </option><option value="23">SL SHARMA-SHIMLA<strong>/</strong>SHIMLA<strong>/</strong>HIMACHAL PRADESH                                                            </option><option value="1">SMART HOME CARE-SADAR<strong>/</strong>AZAMGARH<strong>/</strong>UTTAR PRADESH                                                            </option><option value="199">SNAP SOLUTIONS,-AHMADABAD CITY<strong>/</strong>AHMEDABAD<strong>/</strong>GUJARAT                                                            </option><option value="144">SOFIYA ELECTRONIC REPAIRING CENTER-HOJAI<strong>/</strong>NAGAON<strong>/</strong>ASSAM                                                            </option><option value="343">SONA AGENCIES - AJAY-FAIZABAD<strong>/</strong>FAIZABAD<strong>/</strong>UTTAR PRADESH                                                            </option><option value="8">SONEBHADRA REFERATION SERVICE CENTRE-SONBHADRA<strong>/</strong>SONBHADRA<strong>/</strong>UTTAR PRADESH                                                            </option><option value="79">SONU ELECTRONICS-BULANDSHAHR<strong>/</strong>BULANDSHAHR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="59">SOUMODIP ELECTRONICS-NA<strong>/</strong>SOUTH 24 PARGANAS<strong>/</strong>WEST BENGAL                                                            </option><option value="164">SRI SAI SURYA ENTERPRISES-KAKINADA (URBAN)<strong>/</strong>EAST GODAVARI<strong>/</strong>ANDHRA PRADESH                                                            </option><option value="132">STAR ELECTRONIC -BUXAR<strong>/</strong>BUXAR<strong>/</strong>BIHAR                                                            </option><option value="240">SUBHANI STORE PERSON.-KURNOOL<strong>/</strong>KURNOOL<strong>/</strong>ANDHRA PRADESH                                                            </option><option value="137">SUBODH KUMAR-LAKHIMPUR<strong>/</strong>KHERI<strong>/</strong>UTTAR PRADESH                                                            </option><option value="84">SUDHAKAR ELECTRONICS-BALASORE<strong>/</strong>BALESWAR<strong>/</strong>ODISHA                                                            </option><option value="227">SUKHWINDER SINGH-SUB TEHSIL DHARIWAL<strong>/</strong>GURDASPUR<strong>/</strong>PUNJAB                                                            </option><option value="72">SUMIT ELECTRONICS-ETAWAH<strong>/</strong>ETAWAH<strong>/</strong>UTTAR PRADESH                                                            </option><option value="22">SUVANKAR PATRA-CHANDITALA - II<strong>/</strong>HOOGHLY<strong>/</strong>WEST BENGAL                                                            </option><option value="182">SYED REHAN-<strong>/</strong><strong>/</strong>                                                            </option><option value="42">TARIK KHAN ELECTRONICS-BULANDSHAHR<strong>/</strong>BULANDSHAHR<strong>/</strong>UTTAR PRADESH                                                            </option><option value="28">THE MILKSHAKES FACTORY-HIMAYATHNAGAR<strong>/</strong>HYDERABAD<strong>/</strong>TELANGANA                                                            </option><option value="345">THE SPACE ELECTRONIC-MIDNAPORE<strong>/</strong>WEST MIDNAPORE<strong>/</strong>WEST BENGAL                                                            </option><option value="146">UJJWAL DAS AGARTLA-SADAR<strong>/</strong>WEST TRIPURA<strong>/</strong>TRIPURA                                                            </option><option value="291">UMESH - PANKAJ-<strong>/</strong><strong>/</strong>                                                            </option><option value="222">UNIVERSAL SERVICES-ALWAR<strong>/</strong>ALWAR<strong>/</strong>RAJASTHAN                                                            </option><option value="121">US ELECTRICALS-HAZARIBAGH<strong>/</strong>HAZARIBAG<strong>/</strong>JHARKHAND                                                            </option><option value="347">USMANIYAH REFRIGERATION-TONDIARPET FORT ST GEORGE<strong>/</strong>CHENNAI<strong>/</strong>TAMIL NADU                                                            </option><option value="186">VALI GARU-RAJAHMUNDRY (URBAN)<strong>/</strong>EAST GODAVARI<strong>/</strong>ANDHRA PRADESH                                                            </option><option value="302">VANSH ELECTRIC &amp; MECHANIC WORKS-SURAT CITY<strong>/</strong>SURAT<strong>/</strong>GUJARAT                                                            </option><option value="256">VASAI ELECTRONIC -KURNOOL<strong>/</strong>KURNOOL<strong>/</strong>ANDHRA PRADESH                                                            </option><option value="340">VASU INFOTECH-MATHURA<strong>/</strong>MATHURA<strong>/</strong>UTTAR PRADESH                                                            </option><option value="336">VIDEOCON MITASHI GEM SERVICE CENTER-PATHANKOT<strong>/</strong>GURDASPUR<strong>/</strong>PUNJAB                                                            </option><option value="76">VIDYA ELECTRONICS-ARRAH<strong>/</strong>BHOJPUR<strong>/</strong>BIHAR                                                            </option><option value="232">VILAS NAGPUR -HINGNA<strong>/</strong>NAGPUR<strong>/</strong>MAHARASHTRA                                                            </option><option value="112">VIPIN ELECTRONICS-KANGRA<strong>/</strong>KANGRA<strong>/</strong>HIMACHAL PRADESH                                                            </option><option value="332">VIRENDRA SHARMA -FAIZABAD<strong>/</strong>FAIZABAD<strong>/</strong>UTTAR PRADESH                                                            </option><option value="115">VISHAL ELECTRICALS-SONAPUR BLOCK<strong>/</strong>KAMRUP<strong>/</strong>ASSAM                                                            </option><option value="103">VISHAL ELECTRONICS-PUNE CITY<strong>/</strong>PUNE<strong>/</strong>MAHARASHTRA                                                            </option><option value="108">VISHAL ELECTRONICS-PHULWARI<strong>/</strong>PATNA<strong>/</strong>BIHAR                                                            </option><option value="200">VISHAL ENTERPRIES -<strong>/</strong><strong>/</strong>                                                            </option><option value="310">VISHAL KAMLE -PUNE CITY<strong>/</strong>PUNE<strong>/</strong>MAHARASHTRA                                                            </option><option value="194">VISNATH SARKAR ELETRIC MOTOR -NA<strong>/</strong>SURGUJA<strong>/</strong>CHATTISGARH                                                            </option><option value="106">VIVEK ELECTRONICS-ARRAH<strong>/</strong>BHOJPUR<strong>/</strong>BIHAR                                                            </option><option value="214">VIVEK TIWARI -KATNI<strong>/</strong>KATNI<strong>/</strong>MADHYA PRADESH                                                            </option><option value="254">YAJIO SERVICES -DIGHA<strong>/</strong>THANE<strong>/</strong>MAHARASHTRA                                                            </option><option value="314">YASH ELECTORINCS -NASHIK<strong>/</strong>NASHIK<strong>/</strong>MAHARASHTRA                                                            </option><option value="271">YASHIKA ENTERPRISES-DEHRADUN<strong>/</strong>DEHRADUN<strong>/</strong>UTTARAKHAND                                                            </option><option value="283">ZIA INFOTECH-JAMURIA<strong>/</strong>BARDHAMAN<strong>/</strong>WEST BENGAL                                                        </option></datalist>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="SFRemark" name="SFRemark" placeholder="Remark" required="" fdprocessedid="dlnmqx">
                        </div>
                    </td>
                </tr>
            </tbody></table>
            <button type="submit" class="btn btn-primary mb-2" name="Alloted" id="Alloted" fdprocessedid="rpvpwa">Submit</button>
        </form>

<center><h3>Update Appointment</h3></center>
    <form method="post">
        <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
        <table class="table table-striped table-bordered">
            <tbody><tr>
                <td>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Appointment Date <span style="color: red">*</span></label>
                        <input type="date" class="form-control" id="AppointmentDate" name="AppointmentDate" required="">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="Remark" name="Remark" placeholder="Remark" required="" fdprocessedid="rbjcbv">
                    </div>
                </td>
            </tr>
        </tbody></table>
        <button type="submit" class="btn btn-primary mb-2" name="Appointment" id="Appointment" fdprocessedid="bznaa">Submit</button>
    </form>

   <center><h3>Update Part Dispatch</h3></center>
    <form method="post">
        <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
        <table class="table table-striped table-bordered" border="1">
            <tbody><tr>
                <td>Check</td>
                <td>S.NO</td>
                <td>Part Name</td>
                <td>QTY</td>
                <td>Type</td>
            </tr>
                            <tr>
                    <td><input type="checkbox" name="PartsID[]" value="8319" checked=""></td>
                    <td>1</td>
                    <td>AMLIFIRE CARD</td>
                    <td>1</td>
                    <td>COURIER</td>
                </tr>
                    </tbody></table>
        <table class="table table-striped table-bordered">
            <tbody><tr>
                <td>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Dispatch To<span style="color: red">*</span></label>
                        <select class="form-control" id="DispatchTo" name="DispatchTo" required="" fdprocessedid="dxomd9">
                            <option selected="" disabled="">Select</option>
                                                            <option value="150">RAPID CASH CALL/NORTH WEST DELHI-DELHI</option>
                                                    </select>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Dispatch By <span style="color: red">*</span></label>
                        <select class="form-control" id="DispatchBy" name="DispatchBy" required="required" fdprocessedid="zth7">
                            <option selected="" disabled="">Select</option>
                                                            <option value="1">VIJAY SHARMA</option>
                                                            <option value="6">HIMANSHI </option>
                                                            <option value="7">GEETIKA SACHDEVA</option>
                                                            <option value="11">MR.KHAN</option>
                                                            <option value="12">MR SURESH KUMAR</option>
                                                    </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Docket No <span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="DocketNo" name="DocketNo" placeholder="Docket NO" required="" fdprocessedid="msrfrfb">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="Remark" name="Remark" placeholder="Remark" required="" fdprocessedid="u3y4yj">
                    </div>
                </td>
            </tr>
        </tbody></table>

        <button type="submit" class="btn btn-primary mb-2" name="PartDispatch" id="PartDispatch" fdprocessedid="xxd6vf">Submit</button>
    </form>
  <center><h3>Update Part Not Available </h3></center>
    <form method="post">
        <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
        <table class="table table-striped table-bordered">
            <tbody><tr>
                <td>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="Remark" name="Remark" placeholder="Remark" required="" fdprocessedid="y02hl">
                    </div>
                </td>
            </tr>
        </tbody></table>
        <button type="submit" class="btn btn-primary mb-2" name="PartNotAvailable" id="PartNotAvailable" fdprocessedid="4k27e">Submit</button>
    </form>

   <center><h3>Update Part Received By SF</h3></center>
        <form method="post">
            <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
            <table class="table table-striped table-bordered">
                <tbody><tr>
                    <td>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="Remark" name="Remark" placeholder="Remark" required="" fdprocessedid="c6clw">
                        </div>
                    </td>
                </tr>
            </tbody></table>
            <button type="submit" class="btn btn-primary mb-2" name="PartReceviedBySF" id="PartReceviedBySF" fdprocessedid="up2y5m">Submit</button>
        </form>

  <center><h3>Update Product Taken By SF</h3></center>
            <form method="post">
                <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
                <table class="table table-striped table-bordered">
                    <tbody><tr>
                        <td>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="Remark" name="Remark" placeholder="Remark" required="" fdprocessedid="4qzlts">
                            </div>
                        </td>
                    </tr>
                </tbody></table>
                <button type="submit" class="btn btn-primary mb-2" name="ProductTakenBySF" id="ProductTakenBySF" fdprocessedid="qigezg">Submit</button>
            </form>

       <center><h3>Update Customer Not Response</h3></center>
            <form method="post">
                <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
                <table class="table table-striped table-bordered">
                    <tbody><tr>
                        <td>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="Remark" name="Remark" placeholder="Remark" required="" fdprocessedid="ulz4gr">
                            </div>
                        </td>
                    </tr>
                </tbody></table>
                <button type="submit" class="btn btn-primary mb-2" name="CustomerNoResponse" id="CustomerNoResponse" fdprocessedid="rhg6ij">Submit</button>
            </form>
      

       <center><h3>Update Cancelled</h3></center>
            <form method="post">
                <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
                <table class="table table-striped table-bordered">
                    <tbody><tr>
                        <td>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="Remark" name="Remark" placeholder="Remark" required="" fdprocessedid="jjfa2h">
                            </div>
                        </td>
                    </tr>
                </tbody></table>
                <button type="submit" class="btn btn-primary mb-2" name="Cancelled" id="Cancelled" fdprocessedid="lq9lij">Submit</button>
            </form>
   

      <center><h3>Update Re-Open</h3></center>
            <form method="post">
                <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
                <table class="table table-striped table-bordered">
                    <tbody><tr>
                        <td>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="Remark" name="Remark" placeholder="Remark" required="" fdprocessedid="3vnis2j">
                            </div>
                        </td>
                    </tr>
                </tbody></table>
                <button type="submit" class="btn btn-primary mb-2" name="ReOpen" id="ReOpen" fdprocessedid="55p3e4">Submit</button>
            </form>
        </div>

    <center><h3>Update Physical Damage</h3></center>
            <form method="post">
                <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
                <table class="table table-striped table-bordered">
                    <tbody><tr>
                        <td>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="Remark" name="Remark" placeholder="Remark" required="" fdprocessedid="1w8tg">
                            </div>
                        </td>
                    </tr>
                </tbody></table>
                <button type="submit" class="btn btn-primary mb-2" name="PhysicalDamage" id="PhysicalDamage" fdprocessedid="7x44yf">Submit</button>
            </form>

         <center><h3>Update Closer</h3></center>
                <form method="post">
                    <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
                    <table class="table table-striped table-bordered">
                        <tbody><tr>
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Serial No <span style="color: red"></span></label>
                                    <input type="text" class="form-control" id="SerialNo" name="SerialNo" placeholder="Serial No" fdprocessedid="189648">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Happy Code <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="HappyCode" name="HappyCode" placeholder="Happy Code" required="" fdprocessedid="b8ks1a">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Faulty Code <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="FaultyCode" name="FaultyCode" placeholder="Faulty Code" required="" fdprocessedid="82ugn">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Repair Code <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="RepairCode" name="RepairCode" placeholder="Repair Code" required="" fdprocessedid="q28tlo">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Engineer Remark <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="EngineerRemark" name="EngineerRemark" value="NA" required="" fdprocessedid="qodtxo">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Voltage <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="Voltage" name="Voltage" placeholder="Voltage" required="" fdprocessedid="8iog6g">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Problem <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="Problem" name="Problem" placeholder="Problem" required="" fdprocessedid="qyv8rp">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="Remark" name="Remark" placeholder="Remark" required="" fdprocessedid="rx6sl">
                                </div>
                            </td>
            
            
                        </tr>
                        <tr>
            
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Local Purchase Amount <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="LocalPurchaseAmount" name="LocalPurchaseAmount" value="0" required="" fdprocessedid="9d9jj">
                                </div>
                            </td>
            
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Travelling Conveyance Amount <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="TravellingConveyanceAmount" name="TravellingConveyanceAmount" value="0" required="" fdprocessedid="gvqaio">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Cash Call Amount<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="CashCallAmount" name="CashCallAmount" value="0" required="" fdprocessedid="8k8w0m">
                                </div>
                            </td>
                            <td>
                            </td>
            
                        </tr>
            
                    </tbody></table>
                    <button type="submit" class="btn btn-primary mb-2" name="Closed" id="Closed" fdprocessedid="660j7">Submit</button>
                </form>
            </div>
   <center><h3>Update Escalation</h3></center>
                <form method="post">
                    <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
                    <table class="table table-striped table-bordered">
                        <tbody><tr>
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="Remark" name="Remark" placeholder="Remark" required="" fdprocessedid="milbx9">
                                </div>
                            </td>
                        </tr>
                    </tbody></table>
                    <button type="submit" class="btn btn-primary mb-2" name="Escalation" id="Escalation" fdprocessedid="ap8pa">Submit</button>
                </form>
            </div>

            <center><h3>Update Door Lock</h3></center>
                <form method="post">
                    <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
                    <table class="table table-striped table-bordered">
                        <tbody><tr>
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="Remark" name="Remark" placeholder="Remark" required="" fdprocessedid="yd4em">
                                </div>
                            </td>
                        </tr>
                    </tbody></table>
                    <button type="submit" class="btn btn-primary mb-2" name="DoorLock" id="DoorLock" fdprocessedid="jyjwo">Submit</button>
                </form>
            </div>

            <center><h3>Update Visit Done</h3></center>
                <form method="post">
                    <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
                    <table class="table table-striped table-bordered">
                        <tbody><tr>
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Engineer Name <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="EngineerName" name="EngineerName" placeholder="Engineer Name" required="" fdprocessedid="atwbdg">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">One Side KM <span style="color: red">*</span></label>
                                    <input type="number" class="form-control" id="OneSideKM" name="OneSideKM" required="" fdprocessedid="xuc4g8">
                                </div>
                            </td>
                        </tr>
                        <tr>
            
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="Remark" name="Remark" placeholder="Remark" required="" fdprocessedid="3eti8o">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Customer Conformation <span style="color: red">*</span></label>
                                    <select class="form-control" id="CustomerConformation" name="CustomerConformation" required="" fdprocessedid="un2hfe">
                                        <option selected="" disabled="">Select</option>
                                        <option value="YES">YES</option>
                                        <option value="NO">NO</option>
            
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </tbody></table>
                    <button type="submit" class="btn btn-primary mb-2" name="VisitDone" id="VisitDone" fdprocessedid="3fbgw">Submit</button>
                </form>
            </div>

           <center><h3>Update NO SF</h3></center>
                <form method="post">
                    <input type="text" id="ComplaintID" name="ComplaintID" value="18601" hidden="hidden">
                    <table class="table table-striped table-bordered">
                        <tbody><tr>
                            <td>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Remark <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="Remark" name="Remark" placeholder="Remark" required="" fdprocessedid="20xfr">
                                </div>
                            </td>
                        </tr>
                    </tbody></table>
                    <button type="submit" class="btn btn-primary mb-2" name="NoSF" id="NoSF" fdprocessedid="zl39um">Submit</button>
                </form>
            </div>

          