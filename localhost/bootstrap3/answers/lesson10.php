<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Codify Academy's Learning Bootstrap</title>
<!--     <link rel="shortcut icon" href="favicon.ico"> -->
    <meta charset="UTF-8">
    <meta name="description" content="Codify Academy's Bootstrap Learning">
    <meta name="keywords" content="Codify Academy, Learn Bootstrap, Twitter Bootstrap learning, HTML, CSS, Javascript">
    <meta name="author" content="Chris Brody - Codify Academy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Our Added CSS-->
    <link rel="stylesheet" href="../css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
      <script src="/js/respond.min.js"></script>
    <![endif]-->
    <style>
      img.thumb_img {
        height: 250px;
        width: 100%;
      }
      .btn-group-justified a.btn:first-child {
        border-radius: 4px 0 0 4px;
      }

      .btn-group-justified a.btn:last-child {
        border-radius:  0 4px 4px 0;
      }
    </style>
  </head>
  <body>

    <div class="jumbotron">
      <div class="container">
        <h1>Bootstrap Jumbotron!</h1>
        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <a class="btn btn-primary btn-lg" role="button">Learn more</a>
        <div class="clearfix"></div>
        <br>
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img class="thumb_img" src="../img/7.jpg" alt="image place holder1">
            </a>
          </div>

          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img class="thumb_img" src="../img/7.jpg" alt="image place holder2">
            </a>
          </div>

          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img class="thumb_img" src="../img/7.jpg" alt="image place holder3">
            </a>
          </div>

          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img class="thumb_img" src="../img/7.jpg" alt="image place holder4">
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="container">
      <div class="jumbotron">
        <h1>Rounded Corner Jumbotron!</h1>
        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <a href="#" class="btn btn-success btn-lg" role="button">Learn more</a>
      </div> 

      <div class="page-header">
        <h1>Example page header <small>Subtext for header</small></h1>
      </div> 

      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="../img/7.jpg" alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          
                <a href="#" class="btn btn-success" role="button">Button</a>
                <a href="#" class="btn btn-danger" role="button">Button</a>
        
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="../img/7.jpg" alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <div>
                <a href="#" class="btn btn-success" role="button">Button</a>
                <a href="#" class="btn btn-danger" role="button">Button</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="../img/7.jpg" alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <div>
                <a href="#" class="btn btn-success" role="button">Button</a>
                <a href="#" class="btn btn-danger" role="button">Button</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="../img/7.jpg" alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <div class="btn-group-justified">
                <a href="#" class="btn btn-success" role="button">Button</a>
                <a href="#" class="btn btn-danger" role="button">Button</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  	

    <!-- image answer -->
    <div class="col-md-12">
      <img src="../img/answer10.jpg">
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap Javascript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- Our Added JS -->
    <script type="text/javascript" src="../js/scripts.js"></script>

  </body>
</html>
