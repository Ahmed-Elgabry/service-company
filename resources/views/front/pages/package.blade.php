@extends('front.master')


@section('title', __("messages.package"))

@section('title_breadcrumb', __("messages.package"))
@section('css')
    <style>
    /* Start packages */
.packages.dark {
  background-color: #191e3a !important;
  color: #212529 !important;
  margin-bottom: 100px !important;
}
.packages.dark .main-title::after {
  background-color: #a5a5a5 !important;
}
.all-offer a {
  transition: 0.5s ease-in-out !important;
  color: #25d4e3 !important;
  opacity: 0.5 !important;
  text-decoration: none !important;
  font-size: 25px !important;
  font-weight: 500 !important;
  transition: 0.5s ease-in-out !important;
}
.all-offer a {
  opacity: 1 !important;
}
.all-offer a i,
.all-offer a svg,
.all-offer a path {
  transform: translateX(-20px) !important;
}
.all-offer a i,
.all-offer a svg,
.all-offer a path {
  transition: 0.5s ease-in-out !important;
  color: #25d4e3 !important;
}

.packages .item .card {
  overflow: hidden !important;
  box-shadow: 0 0 12px rgba(0, 0, 0, 0.25) !important;
  transition: 0.5s ease-in-out !important;
  background-color: #fff !important;
  background-clip: border-box !important;
  height: 100%;
  padding-bottom: 60px !important;
}
.packages .item:hover .card {
  background-color: #191e3a !important;
  color: #f5f7fb !important;
}

.packages .card-img-top {
  width: 30% !important;
  display: none !important;
}
.packages .item .container-card-img {
  transition: 0.2s ease-in-out !important;
  height: 100% !important;
  display: none !important;
  align-items: center !important;
  justify-content: center !important;
}
/* .packages .item .container-card-img {
  height: 0 !important;
} */
.packages .item .card-img-top {
  transition: 0.1s ease-in-out !important;
}
/* .packages .item .card-img-top {
  display: none !important;
} */
.packages .item {
  position: relative !important;
}
.packages .item .card p {
  vertical-align: middle !important;
  height: auto !important;
  color: #282f59 !important;
  margin-bottom: 15px !important;
  opacity: 1 !important;
}
.packages .item .card p {
  /* opacity: 0;
  height: 0; */
  padding: 2px 0 !important;
}

.packages .item:hover .card p{
  color: #fff !important;
}

.packages .name-service {
  display: none !important;
  justify-content: center !important;
  flex-wrap: wrap !important;
  transition: 0.3s ease-in-out !important;
}

.packages .item .name-service {
  display: flex !important;
}
.packages .name-service li {
  display: flex !important;
  align-items: center !important;
  justify-content: flex-start !important;
}
.packages .item .icon {
  transition: 0.5s ease-in-out !important;
  background-color: #191e3a !important;
  color: #f5f7fb !important;
  margin-left: 10px !important;
  flex-basis: 23.33px !important;
  padding: 5px !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  border-radius: 50% !important;
}
.packages .item .icon {
  background-color: #f5f7fb !important;
  color: #191e3a !important;
}
.footer-card {
  display: flex !important;
  align-items: center !important;
  justify-content: space-between !important;
  position: relative !important;
  padding: 0 10px !important;
  padding-bottom: 5px !important;
}
.footer-card .icons {
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
}
.packages .footer-card .bonus {
  transition: 0.3s ease-in-out !important;
  position: absolute !important;
  top: 0 !important;
  left: calc(50% - 5%) !important;
  transform: translate(-50%, 0) !important;
}
.packages .item .footer-card .bonus {
  position: absolute !important;
  top: 50% !important;
  transform: translate(-50%, -200%) !important;
}
.packages .item .footer-card .icons {
  display: none !important;
}
.packages .footer-card .show-service {
  display: none !important;
  border: 1px solid #191e3a !important;
  border-radius: 10px !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
  color: #191e3a !important;
  background-color: transparent !important;
}
.packages .item .footer-card .show-service {
  display: flex !important;
}
.packages .item:hover .footer-card .show-service {
  display: flex !important;
  color: #f5f7fb !important;
  border: 1px solid #f5f7fb !important;
}

.postion_customize{
  position: absolute !important;
  bottom: 5px;
  right: 0;
  left: 0;
}

/* Packages page */
/* End packages */
    </style>
@endsection
@section('content')

@include("front.vendor.package")
@endsection
