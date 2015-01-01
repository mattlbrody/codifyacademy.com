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
      html {
        overflow-x: hidden; 
      }
      h1, p {
        text-align: center;
      }
      img {
        margin: 0 20%;
      }
      #affix2 {
        padding:2%;
      }
      #affix1 {
        position: fixed; 
        top: 5px; 
        left: 25px;
      }
      #affix1.affix { 
        top: 125px; 
        left: 175px;
        z-index:0;
        transition: all 1s ease-in-out;
      }
      #affix2.affix { 
        top: 0px; 
        width: 100%;
        padding: 0%;
        z-index:1;
        transition: all 0.5s ease;
      }
    </style>
  </head>
  <body>   

    <div class="container">
        <img src="../img/placeholder2.jpg">
    </div>
    <div id="affix1" data-spy="affix" data-offset-top="50">
      <h3>Sweet Affix'd List</h3>
      <ul class="list-unstyled">
        <li><i class="glyphicon glyphicon-user"></i> List Item One <i class="glyphicon glyphicon-user"></i></li>
        <li><i class="glyphicon glyphicon-info-sign"></i> List Item Two <i class="glyphicon glyphicon-info-sign"></i></li>
        <li><i class="glyphicon glyphicon-tree-deciduous"></i> List Item Three <i class="glyphicon glyphicon-tree-deciduous"></i></li>
      </ul>
    </div>
    <div id="affix2" class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="300">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="col-md-4 col-md-offset-4">
        <h1>Our Main Content!</h1>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
        </p>
        <p>  
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in aliquam risus, a pellentesque mi. Donec orci dolor, facilisis ac dui non, fringilla pellentesque tellus. Morbi ut elementum leo. Sed sed aliquam ipsum. Donec metus justo, egestas ultrices ligula non, porttitor tristique est. Donec non erat purus. Aliquam nisi libero, rutrum et ultrices ac, lobortis nec eros. In ornare nunc at dolor aliquam, sed malesuada est pretium.

          Pellentesque tempor lacus vitae fringilla laoreet. Suspendisse varius ut tellus sed euismod. Nullam eu neque in erat volutpat scelerisque sed quis nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent sit amet pharetra sem. Nulla tincidunt lectus eget tincidunt accumsan. Praesent eleifend tincidunt quam nec fringilla.

          Donec semper sit amet dolor vitae lacinia. Aliquam eros risus, mattis at ullamcorper et, viverra sed urna. Integer euismod, ligula vel volutpat ultrices, diam velit tincidunt nibh, id dapibus felis magna a augue. Donec consequat libero quis consequat elementum. Mauris ut metus pellentesque, condimentum leo eu, eleifend leo. Cras molestie, odio ut cursus luctus, nulla eros fermentum mauris, vitae facilisis sem nunc sed ligula. Aenean tortor leo, rutrum faucibus metus sit amet, lobortis congue diam. Aliquam ac erat quis diam blandit placerat. In pulvinar, orci ac fermentum ultrices, sapien sapien gravida odio, ac sagittis purus justo sit amet mauris. Maecenas vitae sollicitudin ligula. Quisque porttitor dolor nulla, eget laoreet augue tempus eu. Fusce mattis ut nisi vel congue. Quisque semper tempus orci quis ultrices.

          Suspendisse rutrum placerat libero, in sagittis ligula aliquet pharetra. Suspendisse id lectus accumsan, sodales augue non, interdum ipsum. Aenean quis risus sit amet augue sodales varius fermentum quis enim. Phasellus vehicula neque vitae dolor pretium faucibus. In enim erat, interdum eu sem non, condimentum tristique quam. Maecenas tristique eleifend elit auctor euismod. Maecenas semper sem in neque elementum, id porttitor ipsum consequat. Aenean vitae felis posuere, imperdiet leo a, porta ipsum. Nunc venenatis fermentum convallis. Maecenas bibendum eleifend dui. In nec congue libero. Pellentesque eget euismod lacus. Fusce at sapien vitae dui fermentum imperdiet et et enim. Duis dolor tellus, interdum sollicitudin libero vitae, tempor euismod lacus. Donec non lectus lobortis, hendrerit tortor in, lobortis est. Aliquam congue lacus eget metus commodo scelerisque.

          In mattis sit amet ante ac tempor. Integer mollis dolor ipsum, a varius sem ultrices sed. Nulla eu eros accumsan nisi fringilla rhoncus nec eu leo. Nullam dapibus velit non faucibus fringilla. Maecenas in leo mattis, sagittis tortor sit amet, porta arcu. Vestibulum consequat, sem ut ultricies semper, velit arcu faucibus eros, at lacinia risus nisi a massa. Aenean ornare ante nibh, ut elementum mi elementum fermentum. Sed bibendum dui urna, vel pretium dui suscipit at. Donec ullamcorper eros nec nisi cursus, ut pulvinar ante pellentesque. Sed eu massa et diam tempus ultrices in ut est. Praesent eget pretium ligula, in gravida erat. Nulla elementum orci ut bibendum mollis. Curabitur sit amet porttitor eros. 
        </p>
        <button class="btn btn-primary btn-lg btn-block">Click Me</button>
      </div>
    </div>


    <div class="col-md-12">
      <img src="../img/answer12a.jpg" class="">
      <img src="../img/answer12b.jpg" class="">
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap Javascript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- Our Added JS -->
    <script type="text/javascript" src="../js/scripts.js"></script>

  </body>
</html>
