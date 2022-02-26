@extends('layouts.admin')

@section('page-title', 'Create a Listing')

@section('content')
<div id="mainContent">
  <div class="col-md-6">
    <div class="bgc-white p-20 bd">
      <h1>Create a Listing</h1>
      <div class="mT-30">
        <form method="POST" action="{{ route('admin.listings.store') }}">
          @csrf
          <div class="mb-3"><label class="form-label" for="Address">Address</label> <input type="text"
              class="form-control" name="address" id="Address" placeholder="1234 Main St"
              style=""
              autocomplete="off" value="{{old('address')}}"></div>
          <div class="mb-3"><label class="form-label" for="address2">Address 2</label> <input type="text"
              class="form-control" name="address2" id="address2" placeholder="Apartment, studio, or floor"
              style=""
              autocomplete="off" value="{{old('address2')}}"></div>
          <div class="row">
            <div class="mb-3 col-md-6"><label class="form-label" for="city">City</label> <input type="text"
                class="form-control" name="city" id="city"
                style=""
                autocomplete="off" value="{{old('city')}}"></div>
            <div class="mb-3 col-md-4">
              <label class="form-label" for="state">State</label> 
              <select name="state" id="state"
                class="form-control">
                <option value="FL" @selected(old('version') == 'FL')>Florida</option>
                <option value="NY" @selected(old('version') == 'NY')>New York</option>
              </select></div>
            <div class="mb-3 col-md-2"><label class="form-label" for="zipcode">Zip</label> <input type="text"
                class="form-control" name="zipcode" id="zipcode"
                autocomplete="off" value="{{old('zipcode')}}"></div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="bedrooms">Bedrooms</label> <input type="text"
                class="form-control" name="bedrooms" id="bedrooms" placeholder="4"
                autocomplete="off" value="{{old('bedrooms')}}"></div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="bathrooms">Bathrooms</label> <input type="text"
                class="form-control" name="bathrooms" id="bathrooms" placeholder="2"
                autocomplete="off" value="{{old('bathrooms')}}"></div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="squarefootage">SQFT</label> <input type="text"
                class="form-control" name="squarefootage" id="squarefootage" placeholder="2000"
                autocomplete="off" value="{{old('squarefootage')}}"></div>
          </div>
          <button type="submit" class="btn btn-primary btn-color">Create Listing</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection