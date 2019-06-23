
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
  <h3 aling="center">Add Gun Data</h3>
  <br />
  

  <form method="post" action="{{url('gun')}}">
   
   <div class="form-group">
    <input type="text" name="gun_id" class="form-control" placeholder="Enter gun id" />
   </div>
   <div class="form-group">
    <input type="text" name="user_nid" class="form-control" placeholder="Enter user nid" />
   </div>
  <div class="form-group">
    <input type="text" name="gun_catagory" class="form-control" placeholder="Enter gun catagory" />
   </div>
      <div class="form-group">
    <input type="text" name="brand_name" class="form-control" placeholder="Enter brand name" />
   </div>
      <div class="form-group">
    <input type="text" name="gun_price" class="form-control" placeholder="Enter gun price" />
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