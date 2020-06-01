@extends('master')

@section('maintext')
    <div class="portfolio-container">
        <h1>Portfolio of Graphics</h1>
        <div class="business_card graphic">
            <img src="{{asset('portfolio/business.jpg')}}" alt="">
            <h6>Red Corporate Business Card</h6>
        </div>

        <div class="logo graphic">
            <img src="{{asset('portfolio/home.jpg')}}" alt="">
            <h6>Logo of House Building Company</h6>
        </div>

        <div class="flyer graphic">
            <img src="{{asset('portfolio/flyer.png')}}" alt="">
            <h6>Family Flyer</h6>
        </div>

        <div class="letterhead graphic">
            <img src="{{asset('portfolio/letterhead.jpg')}}" alt="">
            <h6>Red Letter Head</h6>
        </div>
    </div>
@endsection
