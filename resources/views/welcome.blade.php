{{-- <h1>Welcome Page</h1>
<a href="/about">About Us</a> <br>
<a href="/contact">contact Us</a> --}}

<h1>Login Page</h1>
<form action="myc" method="POST">
    @csrf
    <input type="text" name="username" id="" placeholder="enter your username"> <br>
    <span style="color: red"> @error('username') {{$message}} @enderror</span>
    <br>
    <input type="password" name="password" id="" placeholder="enter your password"> <br> 
    <span style="color: red"> @error('password') {{$message}} @enderror</span>

    <br>
    <button type="submit">Login</button>
</form>
