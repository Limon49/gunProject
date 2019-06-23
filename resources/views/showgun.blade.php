<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Gun data</title>
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
 <h2 align="center"><i>Gun Show</h2>
       
<div class="container">
         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Gun ID</th>
        <th>Gun Catagory</th>
        <th>Gun Price</th>
      </tr>
    </thead>
    <tbody>
      @foreach($gun as $e)
      <tr>
        <td>{{$e->gun_id}}</td>
        <td>{{$e->gun_catagory}}</td>
         
        <td>{{$e->gun_price}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
 
</body>
</html>