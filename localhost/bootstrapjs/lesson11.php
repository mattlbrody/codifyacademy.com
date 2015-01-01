<div class="tab-pane" id="tab11">
  <article class="lesson11">

    <div class="lesson_title">
      <h4>Lesson 11</h4>
      <h1>The Most Desired Twitter Carousel</h1>
    </div>    

    <!-- Carousel -->
    <div id="#" class="#">
      <h2>Carousel <small>carousel.js</small></h2>
      <hr>

      <!-- Examples -->
      <div class="col-md-12">
        <h3>
          Examples
        </h3>
        <p>
          The slideshow below shows a generic plugin and component for cycling through elements like a carousel.
        </p>
        <div class="table_example">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/answer5.jpg" alt="...">
                <div class="carousel-caption">
                  Image1
                </div>
              </div>
              <div class="item">
                <img src="img/answer5.jpg" alt="...">
                <div class="carousel-caption">
                  Image2
                </div>
              </div>
              <div class="item">
                <img src="img/answer5.jpg" alt="...">
                <div class="carousel-caption">
                  Image3
                </div>
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/example.php'); ?>
          </code>     
        </div>
      </div>


      <!-- Optional captions -->
      <div class="col-md-12">
        <h3>
          Optional captions
        </h3>
        <p>
          Add captions to your slides easily with the
          <code>.carousel-caption</code>
          element within any
          <code>.item</code>
          . Place just about any optional HTML within there and it will be automatically aligned and formatted.
        </p>
        <div class="table_example">
          <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li class="" data-slide-to="0" data-target="#carousel-example-captions"></li>
              <li class="" data-slide-to="1" data-target="#carousel-example-captions"></li>
              <li class="active" data-slide-to="2" data-target="#carousel-example-captions"></li>
            </ol>
            <div class="carousel-inner">
              <div class="item">
                <img src="img/answer5.jpg" alt="900x500">
                <div class="carousel-caption">
                  <h3>First slide label</h3>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="item">
                <img src="img/answer5.jpg" alt="900x500">            
                <div class="carousel-caption">
                  <h3>Second slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="item active">
                <img src="img/answer5.jpg" alt="900x500">
                <div class="carousel-caption">
                  <h3>Third slide label</h3>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="left carousel-control" data-slide="prev" role="button" href="#carousel-example-captions">
            <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" data-slide="next" role="button" href="#carousel-example-captions">
            <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/optional.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Multiple carousels -->
      <div class="col-md-12">
        <h3>
          Multiple carousels
        </h3>
        <p>
          Carousels require the use of an
          <code>id</code>
          on the outermost container (the
          <code>.carousel</code>
          ) for carousel controls to function properly. When adding multiple carousels, or when changing a carousel's
          <code>id</code>
          , be sure to update the relevant controls.
        </p>
      </div>

      <!-- Via data attributes -->
      <div class="col-md-12">
        <h3>
          Via Data Attributes
        </h3>
        <p>
          Use data attributes to easily control the position of the carousel.
          <code>data-slide</code>
          accepts the keywords
          <code>prev</code>
          or
          <code>next</code>
          , which alters the slide position relative to its current position. Alternatively, use
          <code>data-slide-to</code>
          to pass a raw slide index to the carousel
          <code>data-slide-to="2"</code>
          , which shifts the slide position to a particular index beginning with
          <code>0</code>
          .
        </p>
        <p>
          The
          <code>data-ride="carousel"</code>
          attribute is used to mark a carousel as animating starting at page load.
          <strong class="text-danger">It cannot be used in combination with (redundant and unnecessary) explicit JavaScript initialization of the same carousel.</strong>
        </p>
      </div>

      <!-- Via Javascript -->
      <div class="col-md-12">
        <h3>
          Via Javascript
        </h3>
        <p>
          Call carousel manually with:
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/javascript.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Options -->
      <div class="col-md-12">
        <h3>
          Options
        </h3>
        <p>
          Options can be passed via data attributes or JavaScript. For data attributes, append the option name to
          <code>data-</code>
          , as in
          <code>data-interval=""</code>
          .
        </p>
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width: 100px;">Name</th>
                <th style="width: 50px;">type</th>
                <th style="width: 50px;">default</th>
                <th>description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>interval</td>
                <td>number</td>
                <td>5000</td>
                <td>The amount of time to delay between automatically cycling an item. If false, carousel will not automatically cycle.</td>
              </tr>
              <tr>
                <td>pause</td>
                <td>string</td>
                <td>"hover"</td>
                <td>Pauses the cycling of the carousel on mouseenter and resumes the cycling of the carousel on mouseleave.</td>
              </tr>
              <tr>
                <td>wrap</td>
                <td>boolean</td>
                <td>true</td>
                <td>Whether the carousel should cycle continuously or have hard stops.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Methods -->
      <div class="col-md-12">
        <h3>
          Methods
        </h3>
        <h4>.carousel(options)</h4>
        <p>
        Initializes the carousel with an optional options
        <code>object</code>
        and starts cycling through items.
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/methods.php'); ?>
          </code>     
        </div>
        <h4>.carousel('cycle')</h4>
        <p>Cycles through the carousel items from left to right.</p>
        <h4>.carousel('pause')</h4>
        <p>Stops the carousel from cycling through items.</p>
        <h4>.carousel(number)</h4>
        <p>Cycles the carousel to a particular frame (0 based, similar to an array).</p>
        <h4>.carousel('prev')</h4>
        <p>Cycles to the previous item.</p>
        <h4>.carousel('next')</h4>
        <p>Cycles to the next item.</p>
      </div>

      <!-- Events -->
      <div class="col-md-12">
        <h3>
          Events
        </h3>
        <p>Bootstrap's carousel class exposes two events for hooking into carousel functionality.</p>
        <p>Both events have the following additional properties:</p>
        <ul>
          <li>
            <code>direction</code>
            : The direction in which the carousel is sliding (either
            <code>"left"</code>
            or
            <code>"right"</code>
            ).
          </li>
          <li>
            <code>relatedTarget</code>
            : The DOM element that is being slid into place as the active item.
          </li>
        </ul>
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width: 150px;">Event Type</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>slide.bs.carousel</td>
                <td>
                  This event fires immediately when the
                  <code>slide</code>
                  instance method is invoked.
                </td>
              </tr>
              <tr>
                <td>slid.bs.carousel</td>
                <td>This event is fired when the carousel has completed its slide transition.</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/events.php'); ?>
          </code>     
        </div>
      </div>


    </div>

    <!-- lesson task #-->
    <div class="task">
      <div class="task1">
        <div class="col-md-10">
          <h3>Bootstrap Carousels require little code and are super easy to make!</h3>
          <p class="lead">Open our project folder we have been using <underline>forever</underline> now!</p>
          <ol>
            <li>Begin below everything we have done so far and start with a 3 new divs, with the class of <code>container</code> for the 1st, <code>row</code> for the 2nd & <code>col-md-8 col-md-offset-2</code> for the 3rd.</li>
            <li>Inside our col-md-8, we need a div for our carousel, give it the classes <code>carousel slide</code>. Add 2 tags inside a <code>ol</code> with a class of <code>carousel-indicators</code> and <code>div</code> with a class of <code>carousel-inner</code>.</li>
            <li>Our ordered list will serve as a way to scroll through this carousel.  Add 3 <code>li</code> inside, give a data-slide-to attribute to each li <code>data-slide-to="0"</code>, <code>data-slide-to="1"</code>, <code>data-slide-to="2"</code> as well as a class of active for our 1st li.</li>
            <li>We need to add a arbitrary id to our carousel div to link our li tags to. add one i.e. "myCarousel1", then give a data-target attribute to our li tags equal to this id. <code>data-target="#myCarousel1"</code>.</li>
            <li>Good so we have our buttons to switch slides, lets go into our carousel-inner div, and add 3 new divs which will serve as our slide divs, give each a class of <code>item</code>, and the first item div an additional class of <code>active</code>.</li>
            <li>In each item div lets add a <code>img</code> tag and a <code>div</code> below our image with a class of <code>carousel-caption</code>. Add a <code>h3</code>, <code>p</code> & <code>a</code> inside each carousel-caption div.</li>
            <li>For our images make sure we are using the same resolution size for each, otherwise our carousel will auto resize when switching slides. If you need an image <a href="http://albums.mouseplanet.com/guideicons/BCG103.jpg">Use This One</a>.</li>
            <li>Add some dummy text to our carousel-caption tags, insert text to our 1st h3 tag i.e. "Example Headline", our 2nd h3 tag add some text i.e. "Another Example Headline", & our 3rd h3 tag some more text "One more for good measure." </li>
            <li>Give our <code>p</code> tags some <a href="http://www.lipsum.com/" target="_blank">Lorem Lipsum</a> text, just a few lines not to many or our carousel will look weird. Finally lets add a few classes to our <code>a</code> tags <code>btn btn-lg btn-primary</code> and some text between each anchor "Learn More", "Browse More".</li>
            <li>Excellent! one nice carousel with indicator controls, lets create one more with chevrons for directional controls.  Start a new div with a class of <code>container-fluid</code>, add a div inside with a class of <code>carousel slide</code>, lets also set the data-ride attribute to carousel <code>data-ride="carousel"</code>, this will start our carousel when our site loads.</li>
            <li>Lets add a new div inside here with a class of <code>carousel-inner</code>. Add 5 new divs inside here that will house our images for this slider, add the class of <code>item</code> to each one, as well as <code>active</code> to our 1st item div.</li>
            <li>Add some images to our img tags, again making sure they are the same resolution so our slider does not resize on its own.</li>
            <li>Finally we need our carousel controls, add 2 <code>a</code> tags just below our carousel-inner div. Give our 1st the classes of <code>left carousel-control</code>, and our 2nd the classes of <code>right carousel-control</code>.</li>
            <li>Next set the data-slide attributes to each anchor, the first set to prev and the second to next. <code>data-slide="prev"</code>, <code>data-slide="next"</code>. Create a <code>span</code> tag inside each anchor.</li>
            <li>Add a few glyph classes to get our chevron controls, our first needs the classes of <code>glyphicon glyphicon-chevron-left</code> & our second the classes of <code>glyphicon glyphicon-chevron-right</code> </li>
            <li>Last but not least we need to add a arbitrary id to our carousel div so we can link our a href's to this.  Set the id first i.e "myCarousel2' and the anchor href's equal to the same id <code>href="#myCarousel2"</code>.</li>
            <li>Sometimes our carousel images don't fit the full width of the carousel div, to fix this we can add a css selector and set our width to 100%; call the first carousels images using the .carousel-inner and img selectors <code>.carousel-inner img{}</code> and give this the css property: width of 100%.</li>
            <li>If you used our carousel image we need to change the height so its not stretched out, call the id and img selector first <code>#mycarousel1 img{}</code> and add the height property of 300px.</li>
            <li>One last thing, lets modify our 2nd carousel so the slides change ever 1.5s and will stop when we hover.  It's easier then you'd think, in our main.js file start by calling the 2nd carousel id and calling the carousel event <code>$("#myCarousel2").carousel({});</code>.</li>
            <li>On the next line lets call the interval property and set it to 1500, this number is written in milliseconds, <code>interval: 1500,</code> follow this with a comma so we can add another property on the next line add the pause property and set the string value to hover <code>pause: "hover"</code>.</li>
          </ol>
          <p>Save our file and open it in our browser to see our work!</p>
          <br>
          <a href="answers/lesson11.php" target="_blank" class="text-danger">Check out how our file looks</a>
          <p>More on <a href="http://getbootstrap.com/javascript/#carousel" target="_blank">Twitter Bootstrap's Carousel</a></p>
          <div class="next1">
            <a href="#tab12" data-toggle="tab" class="btn btn-success btn-lg tabs"><i class="fa fa-child fa-2x"></i>Next Section, Affix'N Elements with Bootstrap!<i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <a class="btn btn-danger btn-lg btn_task"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Carousel</Strong> Task Before Moving On!</a>
      </div>
    </div>

    
  </article>
</div>