<style>
   
.container-fluid1 {
      position: relative;
      min-height: 100vh; /* Set minimum height to the viewport height */
      padding-bottom: 60px; /* Set padding bottom to accommodate the fixed footer */
  }
  .footer {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: #372656; /* Set your desired background color */
      padding: 10px 0;
      text-align: center;
      color: white;
  }

</style>

<!-- footer -->

<div class="container-fluid1">
  <!-- Your content here -->
</div>
<div class="footer">
  <p style="color:white;margin-left:91px;">
      Copyright <?php $year = date("Y",strtotime("-1 year")); echo $year; ?>-<?php $year = date("Y"); echo $year; ?> Designed by Latech All rights reserved.<br>Distributed By:Yogesh 
  </p>
</div>
            

          
     <!-- jQuery -->
     <script src="{{url('lts_assets/js/jquery.min.js')}}"></script>
     <script src="{{url('lts_assets/js/popper.min.js')}}"></script>
     <script src="{{url('lts_assets/js/bootstrap.min.js')}}"></script>
     <!-- wow animation -->
     <script src="{{url('lts_assets/js/animate.js')}}"></script>
     <!-- select country -->
     <script src="{{url('lts_assets/js/bootstrap-select.js')}}"></script>
     <!-- owl carousel -->
     <script src="{{url('lts_assets/js/owl.carousel.js')}}"></script> 
     <!-- chart js -->
     <script src="{{url('lts_assets/js/Chart.min.js')}}"></script>
     <script src="{{url('lts_assets/js/Chart.bundle.min.js')}}"></script>
     <script src="{{url('lts_assets/js/utils.js')}}"></script>
     <script src="{{url('lts_assets/js/analyser.js')}}"></script>
     <!-- nice scrollbar -->
     <script src="{{url('lts_assets/js/perfect-scrollbar.min.js')}}"></script>
    
     <!-- custom js -->
     <script src="{{url('lts_assets/js/custom.js')}}"></script>
     <script src="{{url('lts_assets/js/chart_custom_style1.js')}}"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/d3js/7.8.0/d3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>

<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>





<script type="text/javascript">
    // To make Pace works on Ajax calls
         $(document).ajaxStart(function() {
         Pace.restart();
         });

</script>
@yield('scripts')
  </body>
</html>  