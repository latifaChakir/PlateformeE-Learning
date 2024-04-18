<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- site metas -->
      <title>Access Denied - Pluto</title>
      <meta name="description" content="Access Denied Error Page">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <!-- custom css -->
      <link rel="stylesheet" href="css/style.css" />
   </head>
   <body class="inner_page error_404">
      <div class="container">
         @if(session()->has('error'))
         <div class="alert alert-danger mt-3">
             {{ session()->get('error') }}
         </div>
         @endif
         <div class="row justify-content-center align-items-center full_height">
            <div class="col-md-6 text-center">
               <img class="img-fluid" src="/images/error.png" alt="Error Icon">
               <h3 class="mt-4">Access Denied !</h3>
               <p>YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
               <a class="btn btn-primary" href="/">Go To Home Page</a>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </body>
</html>
