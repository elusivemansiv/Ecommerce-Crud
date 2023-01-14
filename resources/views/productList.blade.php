<?php
use Illuminate\Support\Facades\Request;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>n</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>Category</th>
      <th>Price</th>
      <th>Pic</th>
    </tr>
  </thead>

  <tbody>
  @foreach ($plist as $plist)
    <tr>
      <td>
        <div class="d-flex align-items-center">



        <p class="fw-bold mb-1">{{$plist->productname}}</p>


      </td>
      <td>
      <p class="text-muted mb-0">{{$plist->productcategory}}</p>

      </td>

      <td>
      <p class="text-muted mb-0">{{$plist->price}}</p>

      </td>

      <td>
      <p class="text-muted mb-0"> <img src="{{asset('pro_images/'.$plist->pp)}}"  width="100" height="100"> </p>

      </td>


      </div>
    </tr>

    @endforeach
  </tbody>
</table>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
</html>