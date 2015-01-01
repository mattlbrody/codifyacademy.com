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
    <style type="text/css">
      .popover_margin {
        margin-top:100px;
        margin-left:25%;
      }
    </style>
  </head>
  <body>   

    <div class="cointainer">

      <div class="popover_margin">
        <!-- Popover on the Left -->
        <button type="button" class="btn btn-default pop_active" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on left</button>

        <!-- Popover on the Top -->
        <button type="button" class="btn btn-default pop_active" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on top</button>

        <!-- Popover on the Bottom -->
        <button type="button" class="btn btn-default pop_active" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on bottom</button>

        <!-- Popover on the Right -->
        <button type="button" class="btn btn-default pop_active" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on right</button> 
      </div> 

      <div class="clearfix"></div>
      <br>
      <div class="col-md-12">
        <button type="button" class="btn btn-lg btn-danger btn-block popover-dismiss pop_active" data-toggle="popover" data-placement="bottom" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</button>
      </div> 

    </div>
    
    <div class="col-md-12">
      <img src="../img/answer7.jpg" class="">
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap Javascript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- Our Added JS -->
    <script type="text/javascript" src="../js/scripts.js"></script>
    <script type="text/javascript">
      // popovers
      $('.pop_active').popover("hide");
    </script>

  </body>
</html>
