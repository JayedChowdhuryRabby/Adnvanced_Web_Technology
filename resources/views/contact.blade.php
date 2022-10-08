@extends('layouts.app')
<br>
@section('content')
<h2>Contact Us</h2>
<form action="{{route('PagesController.Validate_contact')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Date of Birth</span>
        <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
        @error('dob')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Phone Number</span>
        <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
    <div class="col-md-4 form-group">
        <span>Subject</span>
        <input type="text" name="subject" value="{{old('subject')}}"class="form-control">
        @error('subject')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    
    <div class="col-md-4 form-group">
        <span>Messege</span>
        <input type="text" name="messege"  value="{{old('messege')}}"class="form-control">
        @error('messege')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <input type="submit" class="btn btn-success" value="Submit" >                  
</form>


@endsection