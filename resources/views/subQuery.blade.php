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
  <h2>Striped Rows Query</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Gun id</th>
        <th>User Nid</th>
        
        <th>Gun Catagory</th>
        <th>Brand Name</th>
        <th>Gun Price</th>
     
        
      </tr>
    </thead>
    <tbody>
      @foreach($sub as $e)
      <tr>
        <td>{{$e->gun_id}}</td>
        <td>{{$e->user_nid}}</td>
        
        <td>{{$e->gun_catagory}}</td>
        <td>{{$e->brand_name}}</td>
        <td>{{$e->gun_price}}</td>
       
       
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>