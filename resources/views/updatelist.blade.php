<?php
use Illuminate\Support\Facades\Request;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
  <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-image: url();
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>

    
    <!-- Navbar -->

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              <form action="{{route('updatelistSubmit')}}" method="post" class="bg-white  rounded-5 shadow-5-strong p-5"  enctype="multipart/form-data">
              @if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif

                  {{@csrf_field()}}
              <div class="form-outline mb-4">
            
              <input type="hidden" name="id"  value="{{ $plist->id }}" class="form-control" />
              <label class="form-label" for="form1Example1">Product Name</label>
              <input type="text" name="productname" id="form1Example1" class="form-control" value="{{ $plist->productname }}">
                 
                  <span class="text-danger">@error('productname') {{$message}} @enderror</span>
                </div>
              <div class="form-outline mb-4">

              <label class="form-label" for="form1Example1">Product Category</label>    
              
              <select class="form-select" name="productcategory" value="{{ $plist->productcategory }}" >
                <option value="">{{ $plist->productcategory }}</option>
                <option value="Accessories"@if(Request::old('car_color')=="Accessories") selected @endif>Accessories</option>
                <option value="Televisions"@if(Request::old('car_color')=="Televisions") selected @endif>Televisions</option>
                <option value="Laptops"@if(Request::old('car_color')=="Laptops") selected @endif>Laptops</option>
                </select>
              <span class="text-danger">@error('productcategory') {{$message}} @enderror</span>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  
                <label class="form-label" for="form1Example1">Price</label>
                <input type="text" name="price" id="form1Example1" class="form-control" value="{{ $plist->price }}">
                  
                  <span class="text-danger">@error('price') {{$message}} @enderror</span>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  
                <label class="form-label" for="form1Example1">Set Product Pic</label>
                <input type="file" name="pp"   value="{{asset('pro_images/'.$plist->pp)}}"></input>
                  
                  <span class="text-danger">@error('pp') {{$message}} @enderror</span>
                </div>

        

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

  <!--Footer-->
  <footer class="bg-light text-lg-start">
 

    <hr class="m-0" />

    

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href=""></a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">

    </script>
</html>
