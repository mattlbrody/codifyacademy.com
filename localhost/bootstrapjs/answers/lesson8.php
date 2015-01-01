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
      .alert {
        margin-top:10px;
      }
    </style>
  </head>
  <body>   

    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-6 col-md-offset-3">
          <h1>This is Heading Dummy Text</h1>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <button class="btn btn-success btn-block alert_button">Alert Button</button>     
          <div class="alert alert-success fade">
            <button class="close" data-dismiss="alert">
              <span>&times;</span>
              <span class="sr-only">Close</span>
            </button>
            <strong>Success!</strong>
            Best check yo self, before your better then the rest!
          </div>
        </div>
        <div class="col-sm-4 col-md-8">
            <h2>Some More Dummy Text Heading</h2>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            <button class="btn btn-warning btn-lg alert_button">Click Here to Alert Us</button>
            <div class="alert alert-warning fade">
              <strong>Oh Snap It's a Warning</strong>
              The end of the era is among us, or so they say, they are probably wrong anyway.
            </div>
        </div>         
        <div class="col-sm-4 col-md-12">
          <h2>Even More Dummy Text Headlines</h2>
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
          <button class="btn btn-danger btn-sm alert_button">DONT CLICK THIS</button>
          <div class="alert alert-danger fade">
            <strong>DANGER!</strong>
            Watch our back, everyone is out to get you, get protection asap before it's to late.
            <br>
            <a class="btn btn-primary" href="#">Action 1</a>
            <a class="btn btn-danger" href="#">Action 2</a>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="alert alert-success fade in">
          Check out this sweet alert, its really important!
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <img src="../img/answer8.jpg" class="">
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap Javascript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- Our Added JS -->
    <script type="text/javascript" src="../js/scripts.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".alert_button").on('click', function(){
          $(this).closest("div").find(".alert").addClass("in");
        });
      });
    </script>

  </body>
</html>
