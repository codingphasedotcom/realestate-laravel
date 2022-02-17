@extends('layouts.account')

@section('page-title', 'User Saved Listings - Smith Realty')
@section('page-bg', 'https://images.pexels.com/photos/842682/pexels-photo-842682.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260')
@section('content')
  <div class="listings-properties">
      <div class="row">
        <div class="col-sm-12 col-lg-4 col-xl-4">
          <div class="listings-properties__item">
            <img src="https://images.dwell.com/photos/6405098978284392448/6466705949096243200/large.jpg">
            <div class="listings-properties__saved ">
              <i class="fa-solid fa-heart"></i>
            </div>

            <span class="listings-properties__item-price">$250,000</span>
            <span class="listings-properties__item-details"><i class="fa-solid fa-bed"></i> 4 <i class="fa-solid fa-bath"></i> 3 <i class="fa-solid fa-ruler"></i> 2440 SQFT</span>
            <span class="listings-properties__item-address">
              2135 Grand St,<br>
              Miami Beach, FL 23456
            </span>
            <div class="listings-properties__item-line"></div>
            <span class="listings-properties__item-owner">
              Bryant Realty
            </span>
          </div>
        </div>
        
        
      </div>
  </div>
@endsection