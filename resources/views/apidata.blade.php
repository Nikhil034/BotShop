<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work with Api</title>
</head>
<body>
    <table border=2>
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Street</td>
            <td>Zipcode</td>
        </tr> 
        @foreach($collections as $item) 
         <tr>
            <td>{{$item["id"]}}</td>
            <td>{{$item["name"]}}</td>
            <td>{{$item["email"]}}</td>
            <td>{{$item["address"]["street"]}}</td>
            <td>{{$item["address"]["zipcode"]}}</td>

            
         </tr>
        @endforeach     
    </table>   
          
    
</body>
</html>