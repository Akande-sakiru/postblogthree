<h1>Add Member</h1>

@if (session('useAdd'))
<h3 style="color: green">{{session('useAdd')}} added</h3>
    
@endif
<form action="addMember" method="POST">
    @csrf
        <input type="text" name="username" id="" placeholder="enter your username"> <br>
        <span style="color: red"> @error('username') {{$message}} @enderror</span>
        <br>
        <input type="password" name="password" id="" placeholder="enter your password"> <br> 
        <span style="color: red"> @error('password') {{$message}} @enderror</span>
    
        <br>
        <input type="email" name="email" id="" placeholder="enter your email"> <br> 
        <span style="color: red"> @error('email') {{$message}} @enderror</span>
        <br>
        <button type="submit">Add Member</button>
    
</form>