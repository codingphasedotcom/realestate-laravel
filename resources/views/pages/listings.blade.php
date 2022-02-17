@extends('layouts.main')
@section('page-title', 'All Properties - Smith Realty')

@section('content')
<div class="listings-page">
  <div class="listings-city">
    <img class="lisitings-city__img" src="https://images.dwell.com/photos/6405098978284392448/6466705949096243200/large.jpg">
    <h1 class="listings-city__title">South Beach</h1>
  </div>
  <div class="listings-filter">
    <div class="listings-filter__wrapper">
      <div class="listings-filter__option">
        Any Price <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__option">
        All Beds <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__option">
        Home type <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__option">
        More <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__button">
        Search
      </div>
    </div>
  </div>
  <div class="listings-properties">
    <div class="container">
      <div class="row">
        @for ($i = 1; $i <= 12; $i++)
          <div class="col-sm-6 col-lg-4 col-xl-3">
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
        @endfor
        
        
        
      </div>
    </div>
    
    
    
  </div>
</div>
@endsection