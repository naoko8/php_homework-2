<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body>
<h2>Create your post</h2>

<form action="{{route('post.create')}}">
    <label for="fname">Post title:</label><br>
    <input type="text" id="fname" name="fname" ><br>
    <br>
    <label for="lname">Post text:</label><br>
    <input type="text" id="lname" name="lname" ><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
