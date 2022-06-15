<style>

.container{
  background-color:rgb(235,234,234);
  height:900px;
  width:300px;
  margin-top:0;
}
.listofbottle{
  background-color:#f8f9fa;;
  height:auto;
  width:auto;
  margin-left:10px;
  display:flex;
  justify-content: space-between;

}
img{
  width:150px;
  margin-top:10px;
  background-color:#11ff00;

 

}
img:hover{
  background-color:cyan;
  
}
.dataofbt{
  margin-left:20px;
  
}
.flex{
    
}
.onup:hover{
  background-color:yellow;
  height:30px;
  opacity: 5px;
  border-radius:20px;
}
.onup2:hover{
  background-color:orange;
  height:30px;
  opacity: 5px;
  border-radius:20px;
}
p
{
  justify-content: center;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoppage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
    crossorigin="anonymous">

</head>
<body>

<br>



<section class="listofbottle">
 
       @foreach($data as $item)
     <img src="{{ asset('storage/'.$item->Product_image) }}" alt="" title="Product Image">
     </section>        
    
     
     <section class="listofbottle">
  
     <p>Product id:-{{$item['Product_id']}}</p>
     <p>Product Name:-{{$item['Product_name']}}</p>
     <p>Description:-{{$item['Product_details']}}</p>
     <b>Best Price={{$item['Product_price']}}</b>
     <br>
     <a href="/BuyNow/{{$item['Product_id']}}"><button class="onup">Buy Now</button><a>
     <a href="/AddintoBucket/{{$item['Product_id']}}"><button class="onup2">Add Bucket</button></a>
</section>  
    
     @endforeach





<br>

 @if(session('success'))
   <span style="color:green">{{session('success')}}</span>
 @endif  
  


  </div>
</div>
</body>
</html>