<h1>User Login Page</h1>

<form action="req" method="POST">
    {{method_field('DELETE')}}
    @csrf
    <input type="text" name="username" id="" placeholder="enter your username"> <br>
    <span style="color: red"> @error('username') {{$message}} @enderror</span>
    <br>
    <input type="password" name="password" id="" placeholder="enter your password"> <br> 
    <span style="color: red"> @error('password') {{$message}} @enderror</span>

    <br>
    <button type="submit">Login</button>
</form>