<!DOCTYPE html>
<meta charset="utf-8">
<meta name="description" content="OCB new blog post">
<head>
  <title>New Post</title>
  <link href="https://bootswatch.com/simplex/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/assets/stylesheets/new_post.css">
  <link rel="stylesheet" type="text/css" href="/assets/stylesheets/style.css">
</head>
<body>
  <!--navbar-->
  <div id="container">
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
            <li><a href="https://wrapbootstrap.com/?ref=bsw" target="_blank">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!--end navbar-->
    <div class="row">
      <div class="col-md-2"></div>
      <h3>New Post</h3>
      <a href="#" class="btn btn-success">Publish</a>
      
      <br>
      <div class="col-md-8">
        <form>
          Post Title: <input type="text" name="title" size="75"><br/>
          Images: <input type="text" name="images" size="40">
          <input type="submit" name="submit">
          <img src="images/bold.png" alt="bold" width="30px" height="30px">
          <img src="images/italic.png" alt="italic" width="30px" height="30px"><br>
          <br>
          <textarea rows="17" cols="100"></textarea>
        </div>
      </div>
    </div>
  </form>
</div>
</body>
</html>
