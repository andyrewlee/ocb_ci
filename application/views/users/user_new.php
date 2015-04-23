<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link href="https://bootswatch.com/simplex/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="/assets/stylesheets/style.css" rel="stylesheet">
  </head>
  <body>

    <!-- start of navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand">OCB</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="posts.html">Posts</a></li>
            <li><a href="registration.html">Register</a></li>
            <li><a href="signin.html">Log In</a></li>
          </ul>
        </div>
      </div>
    </div>
   <!-- end of navbar -->

   <div class="container">
     <div class="row">
       <div class="col-md-4 col-md-offset-4">
         <h2 class="page-header">Registration</h2>
         <div class="well bs-component">
           <form action="/users/create" method="post">
             <div class="form-group">
               <input name="email" class="form-control" type="text" placeholder="Email or username">
             </div>
             <div class="form-group">
               <input name="password" class="form-control" type="password" placeholder="Password">
             </div>
             <div class="form-group">
               <input name="password_confirmation" class="form-control" type="password" placeholder="Confirm Password">
             </div>
             <input class="btn btn-default" type="submit" value="Join">
           </form>
         </div>
         <a class="pull-right" href="/users/login_page">Already have account?</a>
       </div>
     </div>
   </div>
  </body>
</html>
