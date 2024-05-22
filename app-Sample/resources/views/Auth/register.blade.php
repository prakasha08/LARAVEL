@if ($errors->any())
<ul>
{!!implode('', $errors->all('<li>:message</li>')) !!}
</ul>
@endif
<form method="POST" action="/store">
<label for="">Email <input type="text" name="email" id="email"> </label><br>
<label for="">Password <input type="password" name="password" id="password"> </label>
<!-- <label for="">Confirm Password <input type="password" name="password_confirmation"></label> -->
<input type="submit" value="Register"> 
@csrf
</form>