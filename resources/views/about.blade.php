<!-- <x-header  class="header" data-="Header View"></x-header> -->
@include('header')
<h1>About Page</h1>
@include('inner')

@foreach($users as $user)
<li>{{$user}}</li>
@endforeach</h1>

@include('footer')

@csrf
<script>
    // var data=@json($users);
    // console.log(data[3]);
</script>

<style scoped>
    body{
        margin: 0;
        padding: 0;

    }
    h1{
        text-align: center;
        align-items: center;
    }
    li{
        list-style-type: none;
    }
</style>


