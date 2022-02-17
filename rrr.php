<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>to do list</title>
  </head>
  <body>

<form method="post">
  <div class="container">
    <div class="card mt-5" style="width: 18rem; margin: auto;">
      <div class="card-body">

      <h5 class="card-title text-center">To Do List</h5>

      <div class="row">
          <div class="col">
              <input type="date" name="date" class="form-control" placeholder="date" required="">
          </div>
        </div><br>

       <div class="row">
          <div class="col">
              <input type="text" name="itm" class="form-control" placeholder="Item Name" required="">
          </div>
        </div><br>

        <div class="row">
          <div class="col">
              <input type="text" name="qty" class="form-control" placeholder="Item Qty" required="">
          </div>
        </div>

         <div class="row">
          <div class="col mt-3">
             <center><button class="btn btn-success" name="btnsuccess">Save</button></center>
          </div>
        </div>


      </div>
    </div>   
</div>
   
</form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>