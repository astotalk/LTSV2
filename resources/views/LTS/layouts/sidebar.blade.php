
<body class="dashboard dashboard_1">
   <div class="full_container">
     <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar" class="ps ps--active-y">
               
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        
                        <a href="#"><img class="logo_icon img-responsive" src="{{url('lts_assets/images/layout_img/latech.jfif')}}" alt="#" /></a>
                     </div>
                    
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="{{url('lts_assets/images/layout_img/latech.jfif')}}" alt="#" /></div>
                        <div class="user_info">
                           <h6>Latech</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                       
               </div>
                     <div class="sidebar_blog_2" style="margin-left: -35px;">
                        
                    
                          
               <h4>General</h4>
               
             
               <ul>
                     <li class="active">
                        <a href="#Dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard grey_color"></i> <span>Dashboard</span></a>
                        <ul class="collapse list-unstyled" id="Dashboard">
                           <li>
                              <a href="{{route('dashboard')}}"><i class="fa fa-circle-o"></i><span>Dashboard</span></a>
                           </li>
                        </ul>
                     </li>

                     <li class="active">
                        <a href="#Company" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-building-o" aria-hidden="true"></i> <span>Company Info</span></a>
                        <ul class="collapse list-unstyled" id="Company">
                           <li>
                              <a href="{{route('company')}}"><i class="fa fa-circle-o"></i> <span>Company Details</span></a>
                           </li>
                           <li>
                              <a href="{{route('designation')}}"><i class="fa fa-circle-o"></i> <span>Designation</span></a>
                           </li>
                           <li>
                              <a href="{{route('department')}}"><i class="fa fa-circle-o"></i> <span>Department</span></a>
                           </li>
                        </ul>
                     </li>


                     <li class="active">
                        
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone grey_color"></i> <span>HR Management</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                          
                        <a href="{{route('employee')}}"><i class="fa fa-circle-o"></i><span>Employee</span></a>
                              
                           </li>
                           <li>
                              <a href="Attendance.php"><i class="fa fa-circle-o"></i> <span>Attendance</span></a>
                           </li>
                           <li>
                              <a href="{{route('leavelts')}}"><i class="fa fa-circle-o"></i> <span>Leave Management</span></a>
                           </li>
                           <li>
                              <a href="payroll.php"><i class="fa fa-circle-o"></i> <span>Payroll Management</span></a>
                           </li>
                           
                           <li>
                              <a href="{{route('holiday')}}"><i class="fa fa-circle-o"></i> <span>Holiday</span></a>
                           </li>
                           
                        
                        </ul>
                     </li>
                     
                     <li class="active">
                        
                        <a href="#Call_center" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-phone grey_color"></i> <span>Call Center Management</span></a>
                        <ul class="collapse list-unstyled" id="Call_center">
                           <li>
                          
                              <a href="{{route('complaintsearch')}}"><i class="fa fa-circle-o"></i> <span>Add Complaint</span></a>
                            
                           </li>
                           <li>
                              <a href="{{route('uploadcomplaint')}}"><i class="fa fa-circle-o"></i> <span>Upload Complaint</span></a>
                           </li>
                          
                        
                        </ul>
                     </li>


                     <li class="active">
                        
                        <a href="#Complaint" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-edit" style="font-size:24px"></i> <span>Complaint Management</span></a>
                        <ul class="collapse list-unstyled" id="Complaint">
                           <li>
                          
                              <a href="{{route('pendingcalls')}}"><i class="fa fa-circle-o"></i> <span>Pending calls</span></a>
                              
                           </li>
                           <li>
                              <a href="{{route('pendingcallreport')}}"><i class="fa fa-circle-o"></i> <span>Pending call report</span></a>
                           </li>
                           <li>
                          
                              <a href="{{route('searchcomplaint')}}"><i class="fa fa-circle-o"></i> <span>Search Complaint</span></a>
                              
                           </li>
                           <li>
                              <a href="{{route('addescalation')}}"><i class="fa fa-circle-o"></i> <span>Add Escalation</span></a>
                           </li> <li>
                          
                          <a href="{{route('closedreport')}}"><i class="fa fa-circle-o"></i> <span>Closed Report</span></a>
                          
                       </li>
                       <li>
                          <a href="{{route('registrationreport')}}"><i class="fa fa-circle-o"></i> <span>Registration Report</span></a>
                       </li>
                     
                        
                        </ul>
                     </li>


                     <li class="active">
                        
                        <a href="#Bill" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='fa fa-money' style='font-size:24px'></i> <span>Bill Management</span></a>
                        <ul class="collapse list-unstyled" id="Bill">
                           <li>
                          
                              <a href="{{ route('Sfbillreport') }}"><i class="fa fa-circle-o"></i> <span>SF Bill Report</span></a>
                              
                           </li>
                           <li>
                              <a href="{{ route('Invoicebill') }}"><i class="fa fa-circle-o"></i> <span>SF Bill </span></a>
                           </li>
                           <li>
                              <a href="{{ route('Sfbill') }}"><i class="fa fa-circle-o"></i> <span>Invoice Bill </span></a>
                           </li>
                        
                        </ul>
                     </li>

                    

                     <li class="active">
                        
                        <a href="#Inventory" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-codiepie" style="font-size:24px"></i><span>Inventory Management</span></a>
                        <ul class="collapse list-unstyled" id="Inventory">
                           <li>
                          
                              <a href="{{ route('Stocklist') }}"><i class="fa fa-circle-o"></i> <span>Stock List</span></a>
                              
                           </li>
                           <li>
                              <a href="{{ route('Addpart') }}"><i class="fa fa-circle-o"></i> <span>Add Parts</span></a>
                           </li>
                           <li>
                              <a href="{{ route('Partslist') }}"><i class="fa fa-circle-o"></i> <span>Parts List</span></a>
                           </li>
                           
                           <li>
                          
                              <a href="{{ route('partsmapping') }}"><i class="fa fa-circle-o"></i> <span>Parts Mapping</span></a>
                              
                           </li>
                           <li>
                              <a href="{{ route('partsmappinglist') }}"><i class="fa fa-circle-o"></i> <span>Parts Mapping List</span></a>
                           </li>
                           <li>
                              <a href="{{ route('stockentry') }}"><i class="fa fa-circle-o"></i> <span>Stock Entry</span></a>
                           </li>
                           <li>
                              <a href="{{ route('Stockentrylist') }}"><i class="fa fa-circle-o"></i> <span>Stock Entry List</span></a>
                           </li>
                        </ul>
                     </li>

                     <li class="active">
                        <a href="#Product" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-shopping-basket" style="font-size:24px; color:white"></i><span>Product Management</span></a>
                        <ul class="collapse list-unstyled" id="Product">
                           <li>
                              <a href="{{ route('category') }}"><i class="fa fa-circle-o"></i> <span>Category</span></a>
                           </li>
                           <li>
                              <a href="{{ route('product') }}"><i class="fa fa-circle-o"></i> <span>Products</span></a>
                           </li>
                         </ul>
                     </li>

                     <li class="active">
                        <a href="#Addservicecenter" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-recycle" style="font-size:24px; color:white"></i><span>Service Center Management</span></a>
                        <ul class="collapse list-unstyled" id="Addservicecenter">
                           <li>
                              <a href="{{ route('Addservicecenter') }}"><i class="fa fa-circle-o"></i> <span>Add SF</span></a>
                           </li>

                           <li>
                              <a href="{{ route('Servicenterlist') }}"><i class="fa fa-circle-o"></i> <span>SF List</span></a>
                           </li>

                           <li>
                              <a href="{{ route('Addservicecenterpricelist') }}"><i class="fa fa-circle-o"></i> <span>Add SF Price List</span></a>
                           </li>

                           <li>
                              <a href="{{ route('Servicecenterpricelist') }}"><i class="fa fa-circle-o"></i> <span>SF Price List</span></a>
                           </li>

                           <li>
                              <a href="{{ route('Servicecenterlinkcity') }}"><i class="fa fa-circle-o"></i> <span>SF Link City</span></a>
                           </li>
                        </ul>
                     </li>

                     <li class="active">
                        <a href="#Client" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users" style="font-size:24px; color:white" ></i><span>Client Management</span></a>
                        <ul class="collapse list-unstyled" id="Client">
                           <li>
                              <a href="{{ route('addclient') }}"><i class="fa fa-circle-o"></i> <span>Add Client</span></a>
                           </li>

                           <li>
                              <a href="{{ route('clientlist') }}"><i class="fa fa-circle-o"></i> <span>Client List</span></a>
                           </li>
                           <li>
                              <a href="{{ route('Addbrand') }}"><i class="fa fa-circle-o"></i> <span>Add Brand</span></a>
                           </li>
                           <li>
                              <a href="{{ route('Addmodal') }}"><i class="fa fa-circle-o"></i> <span>Add Modal-No</span></a>
                           </li>

                           <li>
                              <a href="{{ route('Modallist') }}"><i class="fa fa-circle-o"></i> <span>Modal-No List</span></a>
                           </li>
                        </ul>
                     </li>

                     <li class="active">
                        <a href="#Expense" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='fa fa-dollar' style='font-size:24px'></i><span>Expense Management</span></a>
                        <ul class="collapse list-unstyled" id="Expense">
                           <li>
                              <a href="{{ route('addexpense') }}"><i class="fa fa-circle-o"></i> <span>Add Expense</span></a>
                           </li>
                           <li>
                              <a href="{{ route('expensehistory') }}"><i class="fa fa-circle-o"></i> <span>Expense History</span></a>
                           </li>
                          
                         </ul>
                     </li>


                     <li class="active">
                        <a href="#Challan" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='fa fa-dollar' style='font-size:24px'></i><span>Delivery Challan</span></a>
                        <ul class="collapse list-unstyled" id="Challan">
                           <li>
                              <a href="{{ route('Addcallan') }}"><i class="fa fa-circle-o"></i> <span>Add Challan</span></a>
                           </li>
                           <li>
                              <a href="{{ route('listcallan') }}"><i class="fa fa-circle-o"></i> <span>Challan List</span></a>
                           </li>
                          
                           <li>
                              <a href="{{ route('Challanreport') }}"><i class="fa fa-circle-o"></i> <span>Challan Report</span></a>
                           </li>
                          
                         </ul>
                     </li>



                     <li class="active">
                        <a href="#RTO" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='fa fa-drivers-license' style='font-size:20px'></i><span>RTO</span></a>
                        <ul class="collapse list-unstyled" id="RTO">
                           <li>
                              <a href="{{ route('addrto') }}"><i class="fa fa-circle-o"></i> <span>Add RTO</span></a>
                           </li>
                           <li>
                              <a href="{{ route('rtoreport') }}"><i class="fa fa-circle-o"></i> <span>RTO Report</span></a>
                           </li>
                          
                         </ul>
                     </li>

                     <li class="active">
                        <a href="#Report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="material-icons" style="font-size:24px">report</i><span>Report</span></a>
                        <ul class="collapse list-unstyled" id="Report">
                           <li>
                              <a href="Callstatus.php"><i class="fa fa-circle-o"></i> <span>Call Status</span></a>
                           </li>
                         </ul>
                     </li>
                  </ul>
               </div>
               
               </div>
            </div>
            </nav>
           
<div id="content">
@yield('content')
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.php"><img class="img-responsive" src="{{asset('lts_assets/images/layout_img/latech.jfif')}}" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="notification.php"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="help.php"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{url('lts_assets/images/layout_img/latech.jfif')}}" alt="#" /><span class="name_user">Latech</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.php">My Profile</a>
                                       <a class="dropdown-item" href="settings.php">Settings</a>
                                       <a class="dropdown-item" href="help.php">Help</a>
                                       <a class="dropdown-item" href="{{ route('registration') }}">Register</a>
                                       <a class="dropdown-item" href="{{route('logout')}}"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           
                           </div>
                           
                           </div> 
                           </div> 
                        </nav>
                  </div>
               
           
               <!-- end topbar -->  
 