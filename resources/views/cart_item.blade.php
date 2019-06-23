


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
 
<div class="container">
   
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add cart item Data</h3>
  <br />
  

  <form method="post" action="{{url('cart_item')}}">
   
   <div class="form-group">
    <input type="text" name="cart_item_id" class="form-control" placeholder="Enter cart item id" />
   </div>
   <div class="form-group">
    <input type="text" name="quantity" class="form-control" placeholder="Enter quantity" />
   </div>
  <div class="form-group">
    <input type="text" name="gun_id" class="form-control" placeholder="Enter gun id" />
   </div>
   <div class="form-group">
    <input type="text" name="user_nid" class="form-control" placeholder="Enter user nid" />
   </div>
   <div class="form-group">
    <input type="number" name="cost" class="form-control" placeholder="Enter cost" />
   </div>
   
    
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
  @csrf
  </form>
 </div>
</div>

</div>
 
</body>
</html>