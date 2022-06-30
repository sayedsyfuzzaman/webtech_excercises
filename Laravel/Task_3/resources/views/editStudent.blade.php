<form action="/student/edit/{{$std->id}}" method = "post">
    {{csrf_field()}}


    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="{{$std->name}}"><br>

    <label for="pass">Password:</label><br>
    <input type="text" id="pass" name="pass" value="{{$std->password}}"><br>

    <input type="submit" value="Update">
</form>