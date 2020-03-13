@extends('master')

@section('maintext')
    <div class="team-body">
        <h1>Team Players</h1>
        <div class="first">
            <img src="{{asset('image/bird.jpg')}}" alt="">
            <h3>HOSSAIN M. REZWAN</h3>
            <h6>Web Designer</h6>
        </div>
        <div class="first">
            <img src="{{asset('image/executive.png')}}" alt="">
            <h3>Belayet HOSSAIN</h3>
            <h6>Graphic Designer</h6>
        </div>
        <div class="first">
            <img src="{{asset('image/laptopman.jpg')}}" alt="">
            <h3>Iqbal Khan</h3>
            <h6>UI Designer</h6>
        </div>
    </div>
@endsection
