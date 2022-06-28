<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>password</th>
  </tr>
  @foreach ($students as $student)
  <tr>
    <td>{{$student->id}}</td>
    <td>{{$student->name}}</td>
    <td>{{$student->password}}</td>
  </tr>
  @endforeach
</table>