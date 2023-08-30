<h1>Member List</h1>
<table border="1">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['address']}}</td>
    </tr>
        
    @endforeach
    
</table>
<span>
    {{$users->links()}}
</span>
<style scoped>
    .w-5{
        display: none;
    }
</style>