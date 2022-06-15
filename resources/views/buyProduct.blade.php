<style>

body
{
    width:100%;
    height:100%;
    background-color:#f1f1f1;;
}
.table-container
{
    margin-left:460px;
 
   
}
.table-container td
{
    padding: 15px;
}
button
{
    margin-left:110px;
    margin-top:20px;
    height:40px;
    width: 140px;
    background-color:orange;
    color:white;
}
input
{
    border: 0px none;
    background-color:#f1f1f1;
}
input:hover
{
    border: 0px none;
    background-color:#f1f1f1;
}
.test
{
    border: 0px none;
    background-color:#f1f1f1;
}

  
</style>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Product Process</title>
</head>
<body>
    @if(isset($customer->Email))
    <div class="table-container">
    <form method="post" action="/PlaceOrder">
        <input type="hidden" value="{{$OrderDate=date('Y-m-d')}}" name="OrderDate" >
        <input type="hidden" value="{{date('Y-m-d', strtotime($OrderDate. ' + 6 days'))}}" name="DeliveryDate" >
       
            @csrf
        <table border=2>
          
            <tr>
                <td>Product id</td>
                <td><input type="text" value="{{$Product->Product_id}}" name="pro_id" readonly=""></td>
            </tr>    
            <tr>
                <td>Customer Email</td>
                <td><input type="text" value="{{$customer->Email}}" name="cust_name" readonly=""></td>
            
            </tr>
            <tr>    
                <td>Customer Phone</td>
                <td><input type="text" value="{{$customer->Contanct}}" name="cust_con" readonly=""></td>
            </tr>    
            <tr>            
                <td>Customer Address</td>
                <td><input type="text" value="{{$customer->Address}}" name="cust_add" readonly=""></td>
            </tr>    
            <tr>
                <td>Product Name</td>
                <td><input type="text" value="{{$Product->Product_name}}" name="pro_name" readonly=""></td>
            </tr>  
            <tr>
                <td>Payment Type</td>
                <td>Cash on Delivery</td>
            </tr> 
            <tr>              
                <td>Product Price</td>    
                <td><input type="text" value="{{$Product->Product_price}}INR" name="pro_price" readonly=""></td>          
            </tr>     
            <tr>
                
                <td>Delivery Charge</td>
                <td>{{floor(($price=$Product->Product_price*10)/100)}} INR</td>
            </tr> 

            <tr style="background-color:#57cb49;color:white;border:0px none;">
             <td>Total amount you pay</td>
             <td class="test"><input type="text" value="{{$Product->Product_price+floor(($price=$Product->Product_price*10)/100)}}INR" name="total_pay" readonly=""></td>
            </tr>

        </table>  
        <button>Place Order</button>  
     </form>   
    </div>
    @else
       <div class="table-container">
           <table border=2>
               <tr>
                   <td>Plese register or login <a href="/Profile"><button>Go to Profile</button></a> </td>
                </tr
            </table>       
       </div>
    @endif

  

    
    
</body>
</html>