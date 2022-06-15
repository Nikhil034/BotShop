<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register of User</title>
</head>
<body>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="/saveuser">
    @csrf
    <fieldset>
        <legend>Plese fill all details</legend>

        <br>
        <label>Email</lable>
        <input type="email" name="ademl" required="">
        <br><br>
        <label>Password</lable>
        <input type="password" name="adpwd" required="">
        <br><br>
        <label>Contact</lable>
        <input type="number" name="adpn" required="">
        <br><br>
        <label>Address</lable>
        <textarea name="adadr" required=""></textarea>
        <br><br>
        <hr>

        <input type="submit" value="Register">

</form>
<br>
@if(session('msg'))
 <b style="color:green">{{session('msg')}}</b>
 @endif
    
</body>
</html>