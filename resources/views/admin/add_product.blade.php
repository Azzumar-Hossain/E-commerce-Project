<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        .add_product_h1{
            font-size: 40px;
            color: #ffffff;
        }

        label{
            display: inline-block;
            width: 250px;
            font-size: 15px !important;
            color: white !important;
        }

        input[type='text']
        {
            width: 350px;
            height: 50px;
        }

        .input_area{
          border-radius: 5px;
        }

        textarea{
            width: 350px;
            height: 80px;
        }
        .input_deg{
          padding: 15px;
        }
    </style>

  </head>
  <body>
    <!-- Header Start-->
    @include('admin.header')
    <!-- Header End-->
     
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <h1 class="add_product_h1">Add Product</h1>

          <div class="div_deg">
            <form action="{{url('upload_product')}}" method="Post" enctype="multipart/form-data">

              @csrf
                <div class="input_deg">
                    <label for="">Product Title</label>
                    <input class="input_area" type="text" name="title">
                </div>

                <div class="input_deg">
                    <label for="">Description</label>
                    <textarea class="input_area" name="description" required id=""></textarea>
                </div>

                <div class="input_deg">
                    <label for="">Price</label>
                    <input class="input_area" type="text" name="price">
                </div>

                <div class="input_deg">
                    <label for="">Quantity</label>
                    <input class="input_area" type="number" name="qty">
                </div>

                <div class="input_deg">
                    <label for="">Product Category</label>
                    <select name="category" id="" required>
                        <option value="">Select a Option</option>
                        
                        @foreach($category as $category)

                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                        @endforeach

                    </select>
                </div>

                <div class="input_deg">
                    <label for="">Product Image</label>
                    <input class="input_area" type="file" name="image">
                </div>

                <div class="input_deg">
                    <input class="btn btn-success" type="submit" value="Add Product">
                </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>