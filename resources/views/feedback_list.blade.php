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

<h2>Feedback List:</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Message</th>
    <th>Delete the feedback</th>

  </tr>



    @foreach($show as $key => $shw)
   <tr>     
   
    <td>{{ $shw->id }}</td>
    <td>{{ $shw->name }}</td>
    <td>{{ $shw->phone }}</td>
    <td>{{ $shw->email }}</td>
    <td>{{ $shw->message }}</td>
    <td><a href="{{ route('delete' , $shw->id) }}">Delete</a></td>
</tr>  
     @endforeach



</table>
    <a href="{{ route('deleteall') }}">Delete the all feedbacks</a>
    <a href="{{ url('createp') }}">Back to the feedback form</a>
</body>
</html>

