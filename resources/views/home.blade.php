@extends('layouts.app')

@section('main')
<div class="card-container">
  @foreach($trips as $trip)
  <div class="card">
    <div class="image">
      <span>{{$trip->name}}</span>
    </div>
    <div class="info">
      <h3>{{$trip->destination}}</h3>
      <p class="mb-10">{{$trip->description}}</p>
      <p class="mb-10">Hotel: {{$trip->hotel}}</p>
      <p>Departure: {{$trip->departure}}</p>
      <p>Return: {{$trip->return}}</p>
    </div>
  </div>
  @endforeach
</div>
@endsection
