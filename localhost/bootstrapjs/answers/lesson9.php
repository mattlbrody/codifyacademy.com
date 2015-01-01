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
          <div class="col-sm-12 col-md-6">
              <h3>Some Sweet info is hidden below, check it out</h3>
              <button type="button" class="btn btn-info btn_reveal" data-toggle="button">Hidden info</button>
              <div class="hidden">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div> 
          </div>
          <div class="col-sm-12 col-md-4">
              <h3>Things You Enjoy</h3>
              <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary active">
                  <input type="checkbox"> Beaches
                </label>
                <label class="btn btn-primary">
                  <input type="checkbox"> Mountains
                </label>
                <label class="btn btn-primary">
                  <input type="checkbox"> Cities
                </label>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-sm-6 col-md-6">
              <h3>Favorite Fruit</h3>
              <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-danger active">
                  <input type="radio"> Apples
                </label>
                <label class="btn btn-warning">
                  <input type="radio"> Oranges
                </label>
                <label class="btn btn-primary">
                  <input type="radio"> Blueberries
                </label>
              </div>
          </div>
          <!-- <div class="col-sm-6 col-md-8">
              <h3>Loading State Button</h3>
              <button type="button" id="loading_btn" data-loading-text="loading..." class="btn btn-default btn-lg btn-block">
                  Loading state button
              </button>
          </div> -->
      </div>
    </div>
    <div class="col-md-12">
      <img src="../img/answer9a.jpg" class="">
      <img src="../img/answer9b.jpg" class="">
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
        $(".btn_reveal").on('click', function(){
          $(this).closest("div").find(".hidden").removeClass("hidden");
        });
        // var btn = $('#loading_btn').click(function () {
        //   btn.button('loading');

        //   setTimeout(function () {
        //       btn.button('reset')
        //     }, 3000);
        //   });
        // });
    </script>

  </body>
</html>

