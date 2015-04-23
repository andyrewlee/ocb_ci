<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Posts</title>
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
           <li><a href="http://builtwithbootstrap.com/" target="_blank">Register</a></li>
           <li><a href="https://wrapbootstrap.com/?ref=bsw" target="_blank">Log In</a></li>
         </ul>
       </div>
     </div>
   </div>
   <!-- end of navbar -->

   <div class="container">
     <div class="row">
       <div class="col-sm-8">
<?php
        foreach($posts as $post)
        { ?>
          <div class="row post">
            <div class="col-md-4">
              <img class="img-responsive" src="http://lorempixel.com/300/300">
            </div>
            <p><?= $post['content'] ?></p>
            <a class="btn" href="/posts/show/<?= $post['id']?>">Read More</a>
          </div>
<?php
        } ?>
       </div>
       <div class="col-sm-4">
         <div class="well bs-component">
           <h1>Tags</h1>
           <ul class="list-group">
             <li class="list-group-item">HTML</li>
             <li class="list-group-item">CSS</li>
             <li class="list-group-item">Angular</li>
             <li class="list-group-item">PHP</li>
             <li class="list-group-item">Coding Dojo</li>
             <li class="list-group-item">Cool</li>
             <li class="list-group-item">Random</li>
           </ul>
         </div>
         <div class="well bs-component">
           <h1>Users</h1>
           <ul class="list-group">
             <li class="list-group-item">Denise</li>
             <li class="list-group-item">Meg</li>
             <li class="list-group-item">Marika</li>
             <li class="list-group-item">Mason</li>
             <li class="list-group-item">Andrew</li>
           </ul>
         </div>
       </div>

     </div>
   </div>
  </body>
</html>
