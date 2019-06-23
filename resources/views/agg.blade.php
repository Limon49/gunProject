<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aggrigate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <h2 align="center">Aggregate</h2>
            
  <table class="table table-striped">
    <thead>
      <tr>
        <!-- <th>Gun Id</th> -->
        <th>Gun Price</th>

     
      
      </tr>
    </thead>
    <tbody>
      @foreach($ag as $e)
      <tr>
       
         <td>{{$e->gun_price}}</td>
     
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
 
</body>
</html>