<table>
  <tr>
    <th>name</th>
    <th>password</th>
    <th>action</th>
  </tr>
  @foreach ($students as $student)
  <tr>
    <td>{{$student->name}}</td>
    <td>{{$student->password}}</td>
    <td>
      <a href="/student/edit/{{$student->id}}">Edit</a>
    </td>
  </tr>
  @endforeach
</table>