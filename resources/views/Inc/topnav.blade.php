@guest
<a class="btn btn-primary" href="{{route('login')}}">Login</a>
<a class="btn btn-primary" href="{{route('registration')}}">Registration</a>
@else
<a class="btn btn-primary" href="{{route('home')}}">Home</a>
<a class="btn btn-primary" href="{{route('product')}}">Product</a>
<a class="btn btn-primary" href="{{route('teams')}}">Our Teams</a>
<a class="btn btn-primary" href="{{route('about')}}">About us</a>
<a class="btn btn-primary" href="{{route('contact')}}">Contact us</a>
<a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
@endguest