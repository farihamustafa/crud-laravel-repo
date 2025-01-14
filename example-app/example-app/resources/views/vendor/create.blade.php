<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   
        <h1>Create Vendors</h1>

        <form method="post" action="{{route('vendor.store')}}">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Name</label>
                <input name="name" type="text" class="form-control" required>

              </div>

              <div class="mb-3">
                <label  class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>

              <div class="mb-3">
                <label  class="form-label">Address</label>
                <textarea class="form-control" name="address" required></textarea>
              </div>
            
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>