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
              class="form-control" name="address" id="Address" placeholder="ex: 1234 Main St"
              style=""
              autocomplete="off" value="{{old('address')}}">
              @error('address')
                <div class="error-sub-text">
                    {{$message}}
                </div>
              @enderror
            </div>
          <div class="mb-3"><label class="form-label" for="address2">Address 2</label> <input type="text"
              class="form-control" name="address2" id="address2" placeholder="ex: Apartment, studio, or floor"
              style=""
              autocomplete="off" value="{{old('address2')}}">
              @error('address2')
                <div class="error-sub-text">
                    {{$message}}
                </div>
              @enderror  
            </div>
          <div class="row">
            <div class="mb-3 col-md-6"><label class="form-label" for="city">City</label> <input type="text"
                class="form-control" name="city" id="city"
                style=""
                autocomplete="off" placeholder="ex: new york" value="{{old('city')}}">
                @error('city')
                <div class="error-sub-text">
                    {{$message}}
                </div>
              @enderror
              </div>
            <div class="mb-3 col-md-4">
              <label class="form-label" for="state">State</label> 
              <select name="state" id="state"
                class="form-control">
                <option value="FL" @selected(old('state') == 'FL')>Florida</option>
                <option value="NY" @selected(old('state') == 'NY')>New York</option>
              </select>
              @error('state')
                <div class="error-sub-text">
                    {{$message}}
                </div>
              @enderror
              </div>
            <div class="mb-3 col-md-2"><label class="form-label" for="zipcode">Zip</label> <input type="text"
                class="form-control" name="zipcode" id="zipcode"
                autocomplete="off" placeholder="ex: 11234" value="{{old('zipcode')}}">
                @error('zipcode')
                <div class="error-sub-text">
                    {{$message}}
                </div>
              @enderror
                </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="bedrooms">Bedrooms</label> <input type="text"
                class="form-control" name="bedrooms" id="bedrooms" placeholder="ex: 4"
                autocomplete="off" value="{{old('bedrooms')}}">
                @error('bedrooms')
                <div class="error-sub-text">
                    {{$message}}
                </div>
              @enderror
              </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="bathrooms">Bathrooms</label> <input type="text"
                class="form-control" name="bathrooms" id="bathrooms" placeholder="ex: 2"
                autocomplete="off" value="{{old('bathrooms')}}">
                @error('bathrooms')
                <div class="error-sub-text">
                    {{$message}}
                </div>
              @enderror</div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="squarefootage">SQFT</label> <input type="text"
                class="form-control" name="squarefootage" id="squarefootage" placeholder="ex: 2000"
                autocomplete="off" value="{{old('squarefootage')}}">
                @error('squarefootage')
                <div class="error-sub-text">
                    {{$message}}
                </div>
              @enderror</div>
          </div>
          <button type="submit" class="btn btn-primary btn-color">Create Listing</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection