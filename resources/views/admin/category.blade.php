<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        input[type= 'text']
        {
            width: 300px;
            height: 40px;
        }

        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }

        .cat_txt{
            border: 1px solid;
            border-radius: 5px;
            margin-right: 10px;
        }

        .add_cat_h1{
            font-size: 40px;
            color: #ffffff;
        }

        .table_deg{
          text-align: center;
          margin: auto;
          border: 2px solid yellowgreen;
          margin-top: 50px;
          width: 600px;
        }

        th{
          background-color: skyblue;
          padding: 15px;
          font-size: 20px;
          font-weight: bold; 
          color: white;
        }

        td{
          color: white;
          padding: 10px;
          border: 1px solid red;
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
            <h1 class="add_cat_h1">Add Category</h1>
            <div class="div_deg">
                <form action="{{url('add_category')}}" method="post">
                  @csrf
                    <div>
                        <input class="cat_txt" type="text" name="category">
                    
                        <input class="btn btn-primary" type="submit" value="Add Category">
                    </div>
                </form>
            </div>

            <div>
              <table class="table_deg">
                <tr>
                  <th>Category Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                @foreach($data as $data)
                <tr>
                  <td>{{$data->category_name}}</td>
                  <td>
                    <a class="btn btn-success" href="{{url('edit_category',$data->id)}}">Edit</a>
                  </td>
                  <td><a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category',$data->id)}}">Delete</a></td>
                </tr>
                @endforeach
              </table>
            </div>
        </div>
      </div>
    </div>

    <!-- JavaScript files-->

      @include('admin.js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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