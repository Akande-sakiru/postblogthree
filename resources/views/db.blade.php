<h1>User Unit</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>LName</th>
        <th>Email</th>
        <th>Profile Photo</th>
    </tr>
    @foreach ($collection as $item )
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['first_name']}}</td>
        <td>{{$item['last_name']}}</td>
        <td>{{$item['email']}}</td>
        <td><img src={{$item['avatar']}} /></td>
    </tr>
    @endforeach
</table>