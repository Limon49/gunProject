<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show CArt Item data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



</head>
<body>
 <h2 align="center"> <i class="glyphicon glyphicon-user"style="font-size:80px;color:blue;"></i></h2>
 <h2 align="center"><i>Cart Item Data Show</h2>
       
<div class="container">
         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Cart Item ID</th>
        <th>Quantity</th>
        
         
        <th>User Nid </th>
          <th>Cost</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cart_item as $e)
      <tr>
        <td>{{$e->cart_item_id}}</td>
        <td>{{$e->quantity}}</td>
         
        <td>{{$e->user_nid}}</td>
        <td>{{$e->cost}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
 
</body>
</html>
