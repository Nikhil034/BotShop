<style>
    .table-container
{
    margin-left:460px;
 
   
}
.table-container td
{
    padding: 15px;
}

.dif
{
    margin-left:110px;
    margin-top:20px;
    height:40px;
    width: 140px;
    background-color:orange;
    color:white; 
}

.sp
{
    padding: 10px;
    width: 200px;
    text-align:center;
    margin-left:170px;
    background-color:orange;
    

}
.order-container td
{
    padding: 10px;
}


</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>
<body>

    
    
   <div class="container">
      <fieldset>
          <legend>Choose Option</legend>


        @if(session('AuthUser'))
           <span style="color:green">Welcome,{{session('AuthUser')}}</span><br><br>
           

           <!-- <a href="/Shop"><button>Start Shopping Now</button></a> -->
           <br><br>

           <div class="order-container">
                <table border=2>
                    <span class="sp">Your Orders</span><br><br>
                    <tr>
                        <td>Email</td>
                        <td>Contact</td>
                        <td>Address</td>
                        <td>Orderdate</td>
                        <td>Deliverydate</td>
                        <td>Pay</td>
                     </tr>
                   
                     @foreach($orderdata as $item)
                     <tr>
                        <td>{{$item->Buyer_Email}}</td>
                        <td>{{$item->Buyer_Phone}}</td>
                        <td>{{$item->Buyer_Address}}</td>
                        <td>{{$item->Order_date}}</td>
                        <td>{{$item->Delivery_date}}</td>
                        <td>{{$item->Total_Pay}}</td>
                       
                     </tr>
                     @endforeach
                </table>        
            </div>
               

          @else
            <form method="post" action="Profile/login">
               @csrf
               <label>Email</label>
               <input type="email" name="txeml" required="">
               <br><br>
               <label>Password</label>
               <input type="password" name="txpw" required="">
               <br><br><hr>
               <input type="submit" value="Login">

            <br><br>
             </form>

            <a href="/Register"><button class="dif">Register</button></a><hr>
            @if(session('notvalid'))
            <span style="color:red">{{session('notvalid')}}</span>
            @endif 

           
        @endif
         
          

    </div>   
    @if(session('orderdone'))
    <div class="table-container">
           <table border=2>
               <tr>
                   <td>{{session('orderdone')}}<a href="/Shop"><button class="dif">Continue Shopping</button></a> </td>
                </tr
            </table>       
       </div>
@endif   
          
    
    
    


    
</body>
</html>