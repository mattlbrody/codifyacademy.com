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
      <button type="button" class="btn btn-default tooltips" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
      <button type="button" class="btn btn-primary tooltips" data-toggle="tooltip" data-placement="left" data-trigger="focus" title="Tooltip on left">Tooltip on left</button>
      <div class="clearfix"></div>
      <br>
      <div class="btn-group">
        <button type="button" class="btn btn-primary tooltips" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
        <button type="button" class="btn btn-info tooltips" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
        <button type="button" class="btn btn-warning tooltips" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
        <button type="button" class="btn btn-danger tooltips" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
      </div>
      <div class="clearfix"></div>
      <br>
      <div class='col-md-12'>
        <button type="button" class="btn btn-success btn-block tooltips" data-toggle="tooltip" data-placement="top" data-delay="500" title="Tooltip on top">Tooltip on top</button>
      </div>
    </div>

    <div class="col-md-12">
      <img src="../img/answer6.jpg" class="">
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap Javascript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- Our Added JS -->
    <script type="text/javascript" src="../js/scripts.js"></script>
    <script type="text/javascript">
      $('.tooltips').on('hidden.bs.tooltip', function () {
        console.log("tooltip hidden");
      });
    </script>

  </body>
</html>
