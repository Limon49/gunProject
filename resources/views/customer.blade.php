
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
  <h3 aling="center">Add customer Data</h3>
  <br />
  

  <form method="post" action="{{url('customer')}}">
   
   <div class="form-group">
    <input type="text" name="user_nid" class="form-control" placeholder="Enter nid" />
   </div>
   <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="Enter name" />
   </div>
  <div class="form-group">
    <input type="text" name="address" class="form-control" placeholder="Enter address" />
   </div>
      <div class="form-group">
    <input type="text" name="phn_num" class="form-control" placeholder="Enter phn_num" />
   </div>
      <div class="form-group">
    <input type="text" name="lisence_num" class="form-control" placeholder="Enter lisence" />
   </div>
      <div class="form-group">
    <input type="text" name="mail" class="form-control" placeholder="Enter mail" />
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