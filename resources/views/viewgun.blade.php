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
            <h3 aling="center">View Gun</h3>
            <br />
            @if(isset($gun))
                <table class="table table-hover table-dark">
                    <thead>
                    <th scope="col">Gun Category</th>
                    <th scope="col">Brand Name</th>
                    <th scope="col">Price</th>
                    </thead>
                    <tbody>
                    @foreach($gun as $gg)
                        <tr>
                            <td>{{ $gg->gun_catagory }}</td>
                            <td>{{ $gg->brand_name }}</td>
                            <td>{{ $gg->gun_price }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr/>
            @endif
        </div>
    </div>

</div>

</body>
</html>
