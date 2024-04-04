@extends('LTS.layouts.main')
@section('content-header')
<style>
   .card {
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
     max-width: 300px;
     margin: auto;
     text-align: center;
     font-family: arial;
   }
   
   .title {
     color: grey;
     font-size: 18px;
   }
   
   #conts{
      padding: 14px;
      height: 53px;
      padding-left: 61px;
      padding-right: 49px;
      color: brown
   }
   
   a {
     text-decoration: none;
     font-size: 22px;
     color: black;
   }
   
   button:hover, a:hover {
     opacity: 0.7;
   }
   </style>
<section class="content">
<div class="container-fluid">
    <div class="row column_title">
       <div class="col-md-12">
          <div class="page_title">
             <h2>Profile CRM</h2>
          </div>
       </div>
    </div>

         <!-- row -->
         <div class="row column1">
            <div class="col-md-12">
               <div class="white_shd full margin_bottom_30">
                  <div class="full graph_head">
                     <div class="heading1 margin_0">
                        <h2>CRM</h2>
                     </div>
                  </div>
                  
                  <div class="card">
                     <h2 style="text-align:center">CEO Profile</h2>
                  <img src="{{asset('lts_assets/images/layout_img/yogesh.jpeg')}}" alt="yogesh" style="width:100%;height:258px;">
                   <h1>Yogesh Kumar</h1>
                   <p class="title">CEO & Founder</p>
                   <p>PloutOne.com</p>
                   <div style="margin: 24px 0;">
                     <a href="#"><i class="fa fa-dribbble"></i></a> 
                     <a href="#"><i class="fa fa-twitter"></i></a>  
                     <a href="https://www.linkedin.com/home"><i class="fa fa-linkedin"></i></a>  
                     <a href="#"><i class="fa fa-facebook"></i></a> 
                   </div>
                  {{-- <p><button id="conts">Contact</button></p> --}}
                  </div>
                </div>
            </div>
        </div>
      </div>
     @endsection
