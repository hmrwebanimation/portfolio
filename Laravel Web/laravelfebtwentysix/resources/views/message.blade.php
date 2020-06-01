@extends('master')

@section('maintext')

    <div class="contact">
        <h1 class="contact-here">Contact Form</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="name">
                <label for="">Name*</label>
                <input type="text" name="name" placeholder="Name">
            </div>
            <div class="email">
                <label for="">Email*</label>
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="web">
                <label for="">Website</label>
                <input type="text" name="website" placeholder="Website Link">
            </div>
            <div class="phone">
                <label for="">Phone</label>
                <input type="text" name="phone" placeholder="Phone Number">
            </div>
            <div class="file">
                <label for="">Attachment</label>
                <input type="file" name="file">
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
@endsection
