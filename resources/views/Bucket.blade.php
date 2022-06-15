<style>
img{
    width:90px;
    float:right;
    margin-top:-70px;
    background-color:cyan;
}  
table td
{
    padding:7px;
}  
button
{
    background-color:#aaa7e1;
    color:white;
    padding:6px;
    width:100px;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucket of Your shopping</title>
</head>
<body>
    <div class="container">
        <fieldset>
            <legend>Your Bucket List</legend>
            <table border=2>
                <tr>
                    <td>Product id</td>
                    <td>Product Name</td>
                    <td>Product Price</td>
                    <td>Buy</td>
                </tr>   
                  @php $total =0 @endphp
                  @if(session('cart'))

                    @foreach(session('cart') as $id=>$details)
                      <tr>
                         
                          <td>{{$details['Pro_id']}}</td>
                          <td>{{$details['Pro_name']}}</td>
                          <td>{{$details['Pro_price']}}</td>
                          <td><a href="/BuyNow/{{$details['Pro_id']}}"><button>Buy🎉</button></a></td>
                      </tr>    
                    @endforeach  


                  @endif

            
        </fieldset>    
    </div>
    
</body>
</html>