<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>name</th>
    <th>surname</th>
    <th>email</th>
    <th>subject</th>
    <th>message</th>
    <th>Action</th>
  </tr>
@foreach ($requests as $request)
<tr>
    <td>{{$request->name}}</td>
    <td>{{$request->surname}}</td>
    <td>{{$request->email}}</td>
    <td>{{$request->subject}}</td>
    <td>{{$request->message}}</td>
    <td><a href="{{route('editinfo' , $request->id)}}" class="btn btn-primary">Edit</a></td>
  </tr>

@endforeach
</table>

</body>
</html>

