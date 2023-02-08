@extends('layout.app')
@section('content')

@include('side_bar')

<div class="center_content">
    @if (session('status_a'))
        <div style="text-align: center ; width:70% " class="alert-success text-sm border ml-5"  >
            {{ session('status_a') }}
        </div>
        @endif
    <div class="center_title_bar">Contact Us

       @auth
       <a href="{{ route('message_admin') }}" class="contact">Send Message</a>
       @endauth
    </div>
    <div class="prod_box_big" >
      <div class="top_prod_box_big"></div>
      <div class="center_prod_box_big">
        <div class="contact_form" >

         <div style="text-align: center" class="mb-5">
            <div id="logo"> <a href="#"><img src="images/logo.png" alt="" border="0" width="237" height="140" /></a> </div>
           <p>bazeletronic@gmail <span class="text-info">+2344673832861</span></p>
           <p>3 Ade Osun Close Ashiribo , Ijanikin Lagos state Nigeria</p>
         </div>


        </div>
      </div>
      <div class="bottom_prod_box_big"></div>
    </div>
  </div>
  <!-- end of center content -->


  @include('right_bar')
  @endsection
