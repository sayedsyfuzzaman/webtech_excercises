@if ($errors->any())
     @foreach ($errors->all() as $error)
         <li>{{$error}}</li>
     @endforeach
 @endif

<h3>{{$message}}</h3>


<form action="{{route('StudentRegistrationSubmitted')}}" method = "post">
    {{csrf_field()}}


    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>

    <label for="pass">Password:</label><br>
    <input type="password" id="pass" name="pass"><br>

    <input type="submit" value="Submit">
</form>