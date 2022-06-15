<style>
.incorrect
{
    width:190px;
    height:40px;
    background-color:orange;

}    
</style>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Bottle</title>
</head>
<body>
   
    @if($AdminToken=="34ff11")
       <form method="post" action="/addproduct" enctype="multipart/form-data">
    @csrf
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Product Id</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="" name="prdid" required="">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Product Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" name="prdnam" required="" >
    </div>
  </div>

  <div class="row mb-3">
    <label for="" class="col-sm-2 col-form-label">Product Details</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" name="prdit" required="">
    </div>
  </div>

  <div class="row mb-3">
    <label for="" class="col-sm-2 col-form-label">Product Price</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="" name="prdpr" required="">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Product Image</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="" name="prdimg" required="">
    </div>
  </div>


  <button type="submit" class="btn btn-success">Add</button>
</form>
    @else
        <div class="incorrect">
        <b>Token is incorrect!</b> 
        </div>
        
    @endif
    
   



    
</body>
</html>