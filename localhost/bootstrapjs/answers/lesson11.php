<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Codify Academy's Learning Bootstrap</title>
    <!-- <link rel="shortcut icon" href="favicon.ico"> -->
    <meta charset="UTF-8">
    <meta name="description" content="Codify Academy's Bootstrap Learning">
    <meta name="keywords" content="Codify Academy, Learn Bootstrap, Twitter Bootstrap learning, HTML, CSS, Javascript">
    <meta name="author" content="Chris Brody - Codify Academy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Our Added CSS-->
    <link rel="stylesheet" href="../css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
      <script src="/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>   
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div id="myCarousel1" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel1" data-slide-to="1"></li>
                  <li data-target="#myCarousel1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="http://albums.mouseplanet.com/guideicons/BCG103.jpg" alt="First slide">                      
                    <div class="carousel-caption">
                      <h3>Example headline.</h3>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>   
                      <a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a>
                    </div>
                  </div>
                  <div class="item">
                    <img src="http://albums.mouseplanet.com/guideicons/BCG103.jpg" alt="Second slide">
                    <div class="carousel-caption">
                      <h3>Another example headline.</h3>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                      <a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a>
                    </div>
                  </div>
                  <div class="item">
                    <img src="http://albums.mouseplanet.com/guideicons/BCG103.jpg" alt="Third slide">
                    <div class="carousel-caption">
                      <h3>One more for good measure.</h3>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                      <a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <br>
            <div class="col-md-12">
              <img src="../img/answer11a.jpg" alt="Answer 11a">
            </div>
            <div class="clearfix"></div>
            <br>
          </div>
        </div>
        <div class="container-fluid">
          <div id="myCarousel2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="item active">
                <img src="../img/answer5.jpg" alt="First slide">
              </div>
              <div class="item">
                <img src="../img/answer5.jpg" alt="Second slide">
              </div>
              <div class="item">
                <img src="../img/answer5.jpg" alt="Third slide">
              </div>
              <div class="item">
                <img src="../img/answer5.jpg" alt="Forth slide">
              </div>
              <div class="item">
                <img src="../img/answer5.jpg" alt="Fifth slide">
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel2" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
          </div>
        </div>
        
        <div class="clearfix"></div>
        <br>
        <div class="col-md-12">
          <img src="../img/answer11b.jpg"  alt="Answer 11b">
        </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap Javascript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- Our Added JS -->
    <script type="text/javascript" src="../js/scripts.js"></script>
    <script type="text/javascript">
      $('#myCarousel2').carousel({
        interval: 1000,
        pause: "hover"
      });
    </script>

  </body>
</html>
