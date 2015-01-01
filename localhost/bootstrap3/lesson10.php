<div class="tab-pane" id="tab10">
  <article class="lesson10">
    
    <div class="lesson_title">
      <h4>Lesson 10</h4>
      <h1>Page Headers, Nice Thumbnails, and The "Jumbotron"</h1>
    </div>

    <!-- page headers -->
    <div class="page_headers">
      <h2>Page Headers</h2>
      <p class="lead">
        A simple shell for an
        <code>h1</code>
        to appropriately space out and segment sections of content on a page. It can utilize the
        <code>h1</code>
        's default
        <code>small</code>
        element, as well as most other components (with additional styles).
      </p>
      <hr>

      <!-- basic -->
      <div class="col-md-12">
        <h3>
          Basic Page Header
        </h3>
        <div class="table_example">
          <div class="page-header">
            <h1>Example page header <small>Subtext for header</small></h1>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/page_header.php'); ?>
          </code>     
        </div>
      </div>

    </div>

    <!-- thumbnails -->
    <div class="page_headers">
      <h2>Thumbnails</h2>
      <p class="lead">Extend Bootstrap's grid system with the thumbnail component to easily display grids of images, videos, text, and more.</p>
      <hr>

      <!-- Default example -->
      <div class="col-md-12">
        <h3>
          Default Example
        </h3>
        <p>
          By default, Bootstrap's thumbnails are designed to showcase linked images with minimal required markup.
        </p>
        <div class="table_example">
          <div class="row">

            <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img alt="100%x180" src="img/171x180.jpg" style="height: 180px; width: 100%; display: block;">
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="img/171x180.jpg" alt="..." style="height: 180px; width: 100%; display: block;">
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="img/171x180.jpg" alt="..." style="height: 180px; width: 100%; display: block;">
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="img/171x180.jpg" alt="..." style="height: 180px; width: 100%; display: block;">
              </a>
            </div>

          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/thumbnail_default.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Custom content -->
      <div class="col-md-12">
        <h3>
          Custom Content
        </h3>
        <p>
          With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.
        </p>
        <div class="table_example">
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="img/260x180.jpg" alt="...">
                <div class="caption">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="img/260x180.jpg" alt="...">
                <div class="caption">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="img/260x180.jpg" alt="...">
                <div class="caption">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="img/260x180.jpg" alt="...">
                <div class="caption">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/thumbnail_custom.php'); ?>
          </code>     
        </div>
      </div>

    </div>

    <!-- jumbotron -->
    <div class="jumbotrons">
      <h2>Jumboptron</h2>
      <p class="lead">A lightweight, flexible component that can optionally extend the entire viewport to showcase key content on your site.</p>
      <hr>

      <!-- Basic -->
      <div class="col-md-12">
        <h3>
          Basic Jumbotron
        </h3>
        <div class="table_example">
          <div class="clearfix"></div>
          <div class="container" style="max-width:700px;">
            <div class="jumbotron">
              <h1>Hello, world!</h1>
              <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
              <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/jumbotron_full.php'); ?>
          </code>     
        </div>
        <h3>Jumbotron inside a container</h3>
        <p>
          To make the jumbotron full width, and without rounded corners, place it outside all
          <code>.container</code>
          s and instead add a
          <code>.container</code>
          within.
        </p>
        <div class="table_example">
          <div class="jumbotron">
            <div class="container">
              <h1>Hello, world!</h1>
              <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
              <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/jumbotron_contained.php'); ?>
          </code>     
        </div>
      </div>

    </div>

    <!-- lesson task -->
    <div class="task">
      <div class="task1">
        <div class="col-md-8">
          <h3>Adding Jumbotrons, Page Headers & Thumbnails to any website is a breeze now...so lets write some more of your own <code>CODE</code> to master these!</h3>
          <p class="lead">Open your project folder we have been using the past few days</p>
          <ol>
            <li>Lets Create 3 new divs below everything, give a class of <code>jumbtron</code> to the 1st, a class of <code>clearfix</code> to the 2nd & <code>container</code> to your 3rd new div.</li>
            <li>Inside your jumbotron div, add another div with a class of <code>container</code>. Inside here, add an <code>h1</code> tag with some words, i.e. Awesome Bootstrap Jumbrotron!</li>
            <li>Add a <code>p</code> and fill it with a line of random text from <a href="http://www.lipsum.com" target="_blank">Lorem Ipsum</a>, also add 1 <code>a</code> tag with the class of <code>btn btn-primary btn-lg</code> and its role attribute equal to <code>button</code>. Name the anchor: Learn More</li>
            <li>Below add a div with a class of <code>clearfix</code> here and a line break <code>&lt;br&gt;</code>, followed by another div with a class of <code>row</code>. We need 4 more divs inside this row with a class of <code>col-xs-6 col-md-3</code>.</li>
            <li>Inside each new <code>&lt;div="col-md-3"&gt;</code> add 1 anchor tag with a class of <code>thumbnail</code> and a <code>img</code> tag inside each anchor with a class of <code>thumb_img</code>, we'll use the same image we used before <a href="http://img1.wikia.nocookie.net/__cb20100519113307/mafiawars/images/8/8d/7-eleven_logo-250x250.gif.png" target="_blank">This Sweet 7Eleven Logo</a>.</li>
            <li>Set each img src to your 7.11 logo <code>src="img/711.jpg"</code>. <strong>Alternatively</strong> you can set each img <code>src="http://img1.wikia.nocookie.net/__cb20100519113307/mafiawars/images/8/8d/7-eleven_logo-250x250.gif.png"</code>, the images file location, rendering the image without saving it.</li>
            <li>Move into your 3rd original div with the class of <code>container</code>, add 3 new divs inside here, the 1st with a class of <code>jumbotron</code>, the 2nd div give a class of <code>page-header</code> and your 3rd div a class of <code>row</code>.</li>
            <li>In the interior of your container lets again add a <code>h1</code> with some text i.e.: Bootstraps Jumbotron! Add a <code>p</code> below and fill a line of text with <a href="http://www.lipsum.com" target="_blank">Lorem Ipsum</a>, And finally add a <code>a</code> tag with a class of <code>btn btn-success btn-lg</code> and a <code>role="button"</code>. Name the anchor. i.e. Learn More</li>
            <li>In your <code>page=header</code> div add a <code>h1</code>tag and add some text i.e. Example Bootstrap Page Header - Nice!</li>
            <li>Next inside your <code>row</code> div, we need to add four new divs with a class of <code>col-sm-6 col-md-3</code>. Add a new div inside each grid div with a class of <code>thumbnail</code>.</li>
            <li>Add a <code>img</code> & a <code>div</code> with a class of <code>caption</code> in your thumbnail div. Again link your img src to <a href="http://img1.wikia.nocookie.net/__cb20100519113307/mafiawars/images/8/8d/7-eleven_logo-250x250.gif.png" target="_blank">This Sweet 7Eleven Logo</a>.</li>
            <li>We need to add <code>h3</code>, <code>p</code> & 2 <code>a</code>tags inside your caption div. Add the text of "Thumbnail label" to your <code>h3</code>. Fill your <code>p</code> in with some dummy <a href="http://www.lipsum.com" target="_blank">Lorem Ipsum</a> text.</li>
            <li>Add the text of "button" in between both of your open and close <code>a</code> tags, & attach a role of <code>button</code> to each.</li>
            <li>Give the 1st anchor a class of <code>btn btn-success</code> & the 2nd anchor a class of <code>btn btn-danger</code>.</li>
          </ol>
          <p>Open this file in your browser to see your Thumbs, Page-header & JUMBOTRON!</p>
          <br>
          <a href="answers/lesson10.php" target="_blank" class="text-danger">Compare yours to ours</a>
          <p>Jumbotrons, Thumbnails & Page Headers are great Bootstrap CSS elements that you can utilize anytime now!</p>
          <p>Check out <a href="http://getbootstrap.com/components/#page-header" target="_blank">Bootstrap Page Headers</a>, <a href="http://getbootstrap.com/components/#thumbnails" target="_blank">Bootstrap Thumbnails</a> & <a href="http://getbootstrap.com/components/#jumbotron" target="_blank">Bootstrap's Jumbotrons</a> to learn even more!</p>
          <div class="next1">
            <a href="#tab11" data-toggle="tab" class="btn btn-default btn-lg tabs"><i class="fa fa-child fa-2x"></i>Second to last section, Bootstrap Panels, Wells & List-Groups! <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <a class="btn btn-danger btn-lg btn_task"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Header, Thumbnails & Jumbotron</Strong> Task Before Moving On!</a>
      </div>
    </div>

  </article>
</div>