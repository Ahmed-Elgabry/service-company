@extends('front.master')


@section('title', __("messages.service"))

@section('title_breadcrumb', __("messages.service"))
@section('css')
    <style>
        /* Start Services */
.services.dark {
  background-color: #191e3a;
  color: #ffffff;
  margin-bottom: 100px;
}
.services.dark .main-title::after {
  background-color: #a5a5a5;
}
.services .box{
  width: 100% !important;
}
.services .box .card {
  background-color: #fff !important;
  background-clip: border-box !important;
  height: 100% !important;
  padding-bottom: 60px !important;
}
.services .box:hover .card {
  background-color: #191e3a !important;
  color: #ffffff !important;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.25);
  border-radius: 12.5px;
  transform: scale(1.02);
}
.services .box .card-text {
  font-weight: 400;
  font-size: 19px;
}

.services .box .card {
  transition:  0.3s ease-in-out;
  overflow: hidden;
}
.services .box .card-title {
  font-size: 20px;
  font-weight: 500;
  margin: 0 10px
}

.services .service-btn {
  border: 1px solid #282f59;
  border-radius: 10px;
  padding: 5px 10px;
  cursor: pointer;
  transform: translateY(120%);
  color: #282f59;
  background-color: transparent;
  display: block;
  transition:  0.3s ease-in-out;
}
.services .box:hover .service-btn {
  border: 1px solid #ffffff;
  color: #ffffff;
}
.services .box .service-btn {
  transform: translateY(0);
}
.services .all-offer a {
  color: #ffffff !important;
}
.services .all-offer i,
.services .all-offer svg,
.services .all-offer path {
  color: #ffffff !important;
}

.postion_customize{
  position: absolute !important;
  bottom: 5px;
  right: 0;
  left: 0;
}

/* End Services */
    </style>
@endsection
@section('content')

@include("front.vendor.service")
@endsection
