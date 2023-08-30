{{-- <h1>Add Member</h1>

<form action="savedb" method="POST">
    @csrf
        <input type="text" name="name" id="" placeholder="enter your username"> <br>
        <span style="color: red"> @error('username') {{$message}} @enderror</span>
        <br>
        <input type="text" name="address" id="" placeholder="enter your address"> <br> 
        <span style="color: red"> @error('address') {{$message}} @enderror</span>
    
        <br>
        <input type="email" name="email" id="" placeholder="enter your email"> <br> 
        <span style="color: red"> @error('email') {{$message}} @enderror</span>
        <br>
        <button type="submit">Add Member</button>
    
</form>  --}}

<h1>Member List</h1>

<table border="1">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['address']}}</td>
        <td> 
            <a href={{"delete/".$user['id']}}>Delete</a> 
            <a href={{"edit/".$user['id']}}>Edit</a> 
        </td>
    </tr>
    @endforeach
</table>

