<div>
    <!-- {{print_r($users)}} -->
     <table border="1">
     <tr>
        <th>name</th>
        <th>email</th>
        <th>pass</th>
        <th>created_at</th>
        <th>updated_at</th>
     </tr>
    @foreach ($users as $user)
    <tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->password}}</td> 
    <td>{{$user->created_at}}</td>
    <td>{{$user->updated_at}}</td>  
    </tr>
    @endforeach
    </table>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>
