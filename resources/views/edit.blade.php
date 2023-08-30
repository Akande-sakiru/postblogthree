<h1>Edit Member</h1>

<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
        <input type="text" name="name" id=""  value="{{$data['name']}}"> <br>
        <br>
        <input type="text" name="address" id="" value="{{$data['address']}}"> <br> 
    
        <br>
        <input type="email" name="email" id="" value="{{$data['email']}}" > <br> 
        <br>
        <button type="submit">Edit Member</button>
    
</form> 