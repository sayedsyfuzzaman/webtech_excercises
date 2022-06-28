@if ($errors->any())
     @foreach ($errors->all() as $error)
         <li>{{$error}}</li>
     @endforeach
 @endif

<form action = "{{route('StudentLoginSubmitted')}}" method = "post">
{{csrf_field()}}

  <label for="id">ID:</label><br>
  <input type="text" id="id" name="id"><br>
  <label for="pass">Password:</label><br>
  <input type="password" id="pass" name="pass">
  <input type="submit" value="Login">
</form>