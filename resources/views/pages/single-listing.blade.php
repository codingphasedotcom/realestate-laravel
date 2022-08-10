@extends('layouts.main')
@section('page-title', '23 Grand ave - Smith Realty')

@section('content')
<div class="single-listing-page">
  <div class="listing-top">
    @foreach ($photos as $photo)
      @if($photo->featured)
      <img class="listing-top__img" src="http://localhost:8080/img/{{$photo->name}}">
      @endif
    @endforeach
    
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
  <section class="listing-info">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>{{$listing->address}} {{$listing->address2}}<br>
            {{$listing->city}}, {{$listing->state}} {{$listing->zipcode}}
          </h1>
          <div class="listing-info__details">
            <span class="listing-info__details-text"><i class="fa-solid fa-bed"></i> {{$listing->bedrooms}}</span>
            <span class="listing-info__details-text"><i class="fa-solid fa-bath"></i> {{$listing->bathrooms}}</span>
            <span class="listing-info__details-text"><i class="fa-solid fa-ruler"></i> {{$listing->squarefootage}} SQFT</span>
          </div>
        </div>
        <div class="col-md-5">
          <span class="listing-info__agent-title">Agent</span>
          <span class="listing-info__agent-name">{{$listing->user->name}}</span>
          {{-- <p class="listing-info__agent-profile">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, nostrum hic voluptates enim delectus iusto sequi veritatis commodi ipsa tempore quam dolorem ex, dolorum earum quod aliquam. Itaque, modi quod.</p> --}}
        </div>
      </div>
    </div>
  </section>

  <section class="listing-extras">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="listing-extras__details">
            <h2>More Info</h2>
            <p>{{$listing->description}}</p>
            {{-- <h3>Details</h3>
            <ul>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
            </ul> --}}
          </div>
          
        </div>
        <div class="col-md-5">
          <div class="listing-extras__gallery">
            <h2>Images</h2>
            @foreach ($photos as $photo)
              @if(!$photo->featured)
                <img src="http://localhost:8080/img/{{$photo->name}}">
              @endif
            @endforeach
            
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection