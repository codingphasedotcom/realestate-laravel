@extends('layouts.main')
@section('page-title', '23 Grand ave - Smith Realty')

@section('content')
<div class="single-listing-page">
  <div class="listing-top">
    <img class="listing-top__img" src="https://images.dwell.com/photos/6405098978284392448/6466705949096243200/large.jpg">
    <div class="listing-top__form-wrapper">
      <div class="container">
        <form class="listing-top__form">
          <label class="listing-top__form-label">Schedule A Tour</label>
          <div class="listing-top__form-group listing-top__form-group--horz">
            <div class="listing-top__form-option">In-Person</div>
            <div class="listing-top__form-option">Video</div>
          </div>
          <label class="listing-top__form-label">Date</label>
          <div class="listing-top__form-group listing-top__form-group--horz">
            <div class="listing-top__form-option">February 22</div>
          </div>
          <label class="listing-top__form-label">Time</label>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">11 AM</div>
          </div>
          <label class="listing-top__form-label">Personal Info</label>
          <div class="listing-top__form-group ">
            <div class="listing-top__form-option">Enter Phone</div>
          </div>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">Enter Email</div>
          </div>
          <div class="listing-top__form-group">
            <button type="submit" class="listing-top__form-button">Schedule A Tour</button>
          </div>
          
        </form>
      </div>
      
    </div>
  </div>
</div>
@endsection