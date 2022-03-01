@extends('layouts.admin')

@section('page-title', 'Show All Listings')

@section('content')

  <div id="mainContent">
    <h1>Show All Listings</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="bgc-white bd bdrs-3 p-20 mB-20">
          
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Address</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($listings as $listing)
              <tr>
                <th scope="row">{{$listing->id}}</th>
                <td>{{$listing->address}} {{$listing->address2}}<br>
                  {{$listing->city}}, {{$listing->state}} {{$listing->zipcode}}</td>
                <td>Active</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$listings->links()}} 
        </div>
      </div>
    </div>
  </div>
  
  
@endsection