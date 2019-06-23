<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Gun ID</th>
        <th>Brand Name</th>
       
        <th>Cart Item Id</th>
      
      </tr>
    </thead>
    <tbody>
      @foreach($un as $e)
      <tr>
        <td>{{$e->gun_id}}</td>
        <td>{{$e->brand_name}}</td>
      
        <td>{{$e->cart_item_id}}</td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
 
</body>
</html>