<div class="tab-pane" id="tab11">
  <article class="lesson11">

    <div class="lesson_title">
      <h4>Lesson 11</h4>
      <h1>The Use Of Panels, Wells & List Groups</h1>
    </div>

    <!-- Panels -->
    <div class="panels">
      <h2>Panels</h2>
      <p class="lead">While not always necessary, sometimes you need to put your content in a box. For these situations, try the panel component.</p>
      <hr>
        <!-- basic panel -->
        <div class="col-md-4">
          <h3>
            Basic Panel
          </h3>
          <p>
            By default, all the
            <code>.panel</code>
            does is apply some basic border and padding to contain some content.
          </p>
          <div class="table_example">
            <div class="panel panel-default">
              <div class="panel-body">
                Basic panel example
              </div>
            </div>
          </div>
          <div class="well well-sm">    
            <code>
              <?php include('code/lesson11/panel_basic.php'); ?>
            </code>     
          </div>
        </div>
        <!-- Panel with footer -->
        <div class="col-md-8">
          <h3>
            Panel with footer
          </h3>
          <p>
            Wrap buttons or secondary text in
            <code>.panel-footer</code>
            . Note that panel footers
            <strong class="text-danger">do not</strong>
            inherit colors and borders when using contextual variations. They are not meant to be in the foreground.
          </p>
          <div class="table_example">
            <div class="panel panel-default">
              <div class="panel-body">
                Panel content
              </div>
              <div class="panel-footer">Panel footer</div>
            </div>
          </div>
          <div class="well well-sm">    
            <code>
              <?php include('code/lesson11/panel_footer.php'); ?>
            </code>     
          </div>
        </div>
        <!-- panel with heading -->
        <div class="col-md-12">
          <h3>
            Panel with heading
          </h3>
          <p>
            Easily add a heading container to your panel with
            <code>.panel-heading</code>
            . You may also include any
            <code>&lt;h1&gt;</code>
            -
            <code>&lt;h6&gt;</code>
            with a
            <code>.panel-title</code>
            class to add a pre-styled heading.
          </p>
          <div class="table_example">
            <div class="panel panel-default">
              <div class="panel-heading">Panel heading without title</div>
              <div class="panel-body">
                Panel content
              </div>
            </div>
            <br>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
              </div>
              <div class="panel-body">
                Panel content
              </div>
            </div>
          </div>
          <div class="well well-sm">    
            <code>
              <?php include('code/lesson11/panel_heading.php'); ?>
            </code>     
          </div>
        </div>

        

        <!-- Contextual alternatives -->
        <div class="col-md-12">
          <h3>
            Contextual Alternatives
          </h3>
          <p>
            Like other components, easily make a panel more meaningful to a particular context by adding any of the contextual state classes.
          </p>
          <div class="table_example">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
              </div>
              <div class="panel-body"> Panel content </div>
            </div>
            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
              </div>
              <div class="panel-body"> Panel content </div>
            </div>
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
              </div>
              <div class="panel-body"> Panel content </div>
            </div>
            <div class="panel panel-warning">
              <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
              </div>
              <div class="panel-body"> Panel content </div>
            </div>
            <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
              </div>
              <div class="panel-body"> Panel content </div>
            </div>
          </div>
          <div class="well well-sm">    
            <code>
              <?php include('code/lesson11/panel_alt.php'); ?>
            </code>     
          </div>
        </div>

    </div>

    <div class="row"></div>

    <!-- Wells -->
    <div class="wells">
      <h2>Wells</h2>
      <hr>

      <!-- Default -->
      <div class="col-md-12">
        <h3>
          Default Well
        </h3>
        <p>
          Use the well as a simple effect on an element to give it an inset effect.
        </p>
        <div class="table_example">
          <div class="well"> Look, I'm in a well! </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/well_basic.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Large Well -->
      <div class="col-md-12">
        <h3>
          Large Well
        </h3>
        <p>
          A large well adds additional padding to increase the size of your well.
        </p>
        <div class="table_example">
          <div class="well well-lg"> Look, I'm in a large well! </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/well_lg.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Small Well -->
      <div class="col-md-12">
        <h3>
          Small Well
        </h3>
        <p>
          A small well adds additional padding to increase the size of your well.
        </p>
        <div class="table_example">
          <div class="well well-sm"> Look, I'm in a small well! </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/well_sm.php'); ?>
          </code>     
        </div>
      </div>


    </div>

    <!-- lesson task 11a-->
    <div class="task">
      <div class="task1">
        <div class="col-md-12">
          <h3>Wells can be very usful drawing a user's attention...so lets write some more of your own <code>CODE</code> to check them out!</h3>
          <ol>
            <li>We'll start with a new <code>container</code> div, add 3 more divs inside here, with a class of <code>well</code>. To the 1st <code>well</code> and another class of <code>well-sm</code> & To the 2nd <code>well</code> and another class of <code>well-lg</code>.</li>
            <li>In your <code>well-sm</code> lets add a new div with a class of <code>panel panel-default</code> add a <code>h2</code> tag below your div, with some text i.e. "Basic Bootstrap Panel".</li>
            <li>Inside your <code>panel-default</code> div create one more div with a class of <code>panel-body</code> and add some text between your open and close div tags. i.e. "Basic panel example".</li>
            <li>Lets move into your 2nd <code>well</code> div, and again we want to add a new div with a class of <code>panel panel-success</code> add a <code>h2</code> tag below your div, with some text i.e. "Bootstrap Success Panel with Header!".</li>
            <li>We need 2 new divs in <code>panel-success</code> div, the 1st with a class of <code>panel-heading</code> & the 2nd with a class of <code>panel-body</code>.</li>
            <li>Add a <code>h3</code> inside your <code>panel-heading</code> with some text i.e. "Success Panel Title" & a class of <code>panel-title</code>.</li>
            <li>Next we need to add a little <code>panel-body</code> content, i.e. "Success Panel content". <strong>NOTE:</strong> we could use more <code>HTML</code> tags inside here, but we wont for this instance.</li>
            <li>Inside your 3rd <code>well</code> div, we want to add a new div with a class of <code>panel panel-danger</code> and again a <code>h2</code> tag below your div, with some text i.e. "Here we have some more well text!".</li>
            <li>Make 3 new divs inside your <code>panel-danger</code> div, the 1st with a class of <code>panel-heading</code>, the 2nd with a class of <code>panel-body</code> & the 3rd with a class of <code>panel-footer</code>.</li>
            <li>Add a new <code>h3</code> tag inside your <code>panel-heading</code> with a class of <code>panel-title</code> & some text i.e. "Danger Panel Title".</li>
            <li>We need to add a little <code>panel-body</code> content, i.e. "Danger Panel content". between your open and closing div. And the same for your <code>panel-footer</code> and some text. i.e. "Danger Panel footer".</li>
          </ol>
          <p>Open this file in your browser to see what we just did!</p>
          <br>
          <a href="answers/lesson11a.php" target="_blank" class="text-danger">Check out how the new file should look</a>
          <p>EXCELLENT!!! Building wells is pretty easy, as are panels, just adding a class or two to a div or two. Inspect some of the elements to see what Bootstrap's CSS is doing to your tags!</p>
          <p>Check out <a href="http://getbootstrap.com/components/#panels" target="_blank">Bootstrap Panels</a> & <a href="http://getbootstrap.com/components/#wells" target="_blank">Bootstrap Wells</a> to learn even more!</p>
          <div class="next1">
            <a href="#lists" class="btn btn-default btn-lg tabs"><i class="fa fa-child fa-2x"></i>Continue on to List Groups next! <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <a class="btn btn-danger btn-lg btn_task btn-block"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Panels & Wells</Strong> Task Before Moving On!</a>
      </div>
    </div>

    <div class="clearfix"></div>

    <!-- List Groups -->
    <div id="lists" class="lists">
      <h2>List Groups</h2>
      <p>List groups are a flexible and powerful component for displaying not only simple lists of elements, but complex ones with custom content.</p>
      <hr>

      <!-- Basic Example -->
      <div class="col-md-6">
        <h3>
          Basic Example
        </h3>
        <p>
          The most basic list group is simply an unordered list with list items, and the proper classes. Build upon it with the options that follow, or your own CSS as needed.
        </p>
        <div class="table_example">
          <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/list_basic.php'); ?>
          </code>     
        </div>
      </div>

      <!-- List group with badges -->
      <div class="col-md-6">
        <h3>
          List group with badges
        </h3>
        <p>
          Add the badges component to any list group item and it will automatically be positioned on the right.
        </p>
        <div class="table_example">
          <ul class="list-group">
            <li class="list-group-item">
              <span class="badge">14</span>
              Cras justo odio
            </li>
            <li class="list-group-item">
              <span class="badge">2</span>
              Dapibus ac facilisis in
            </li>
            <li class="list-group-item">
              <span class="badge">1</span>
              Morbi leo risus
            </li>
          </ul>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/list_badges.php'); ?>
          </code>     
        </div>
      </div>

      <div class="row"></div>

      <!-- Linked -->
      <div class="col-md-6">
        <h3>
          Linked items
        </h3>
        <p>
          Link list group items using anchor tags instead of li (that also means using parent
          <code>&lt;div&gt;</code>
          instead of an
          <code>&lt;ul&gt;</code>
          ). 
        </p>
        <div class="table_example">
          <div class="list-group">
            <a href="#" class="list-group-item active">
              Cras justo odio
            </a>
            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item">Morbi leo risus</a>
            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item">Vestibulum at eros</a>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/list_links.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Disabled items -->
      <div class="col-md-6">
        <h3>
          Disabled items
        </h3>
        <p>
          Add
          <code>.disabled</code>
          to a
          <code>.list-group-item</code>
          to gray it out to appear disabled.
        </p>
        <br>
        <div class="table_example">
          <div class="list-group">
            <a href="#" class="list-group-item disabled">
              Cras justo odio
            </a>
            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item">Morbi leo risus</a>
            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item">Vestibulum at eros</a>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/list_disabled.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Contextual classes -->
      <div class="col-md-12">
        <h3>
          Contextual classes
        </h3>
        <p>
          Use contextual classes to style list items, default or linked. Also includes
          <code>.active</code>
          state.
        </p>
        <div class="table_example">
          <ul class="list-group">
            <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
            <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
            <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
            <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
          </ul>
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a>
            <a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/list_alt.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Custom content -->
      <div class="col-md-12">
        <h3>
          Custom Content
        </h3>
        <p>
          Add nearly any HTML within, even for linked list groups like the one below.
        </p>
        <div class="table_example">
          <div class="list-group">
            <a href="#" class="list-group-item active">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius </p>
            </a>
          </div>
          <div class="list-group">
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius </p>
            </a>
          </div>
          <div class="list-group">
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius </p>
            </a>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson11/list_custom.php'); ?>
          </code>     
        </div>
      </div>


    </div>

    <!-- lesson task 11b-->
    <div class="task">
      <div class="task1">
        <div class="col-md-8">
          <h3>Creating buttons and adjusting the look of your images is a breeze now...so lets write some more of your own <code>CODE</code>.</h3>
          <ol>
            <li>This time we will add on to what we did with Bootstrap Wells & Panels. Lets add a <code>ul</code> after your 1st <code>h2</code> inside your <code>well-sm</code> div.</li>
            <li>Add a <code>&lt;div class="list-group"&gt;&lt;/div&gt;</code> below your 2nd <code>well</code> div & another <code>ul</code> under your 3rd <code>h2</code> tag inside your <code>well-lg</code>.</li>
            <li>Attach a class of <code>list-group</code> to each <code>ul</code>. In your 1st <code>ul</code> lets add 3 <code>li</code> tags with a class of <code>list-group-item</code>.</li>
            <li>Inside each <code>li</code> add a <code>span</code> with a class of <code>badge</code> and add 3 random numbers between your open & close span tags. i.e. 42, 13, 2</li>
            <li>We want to add some text after each span, on the line after each span add some dummy text. i.e. "Cras justo odio", "Dapibus ac facilisis in", "Cras justo odio"</li>
            <li>Moving into your div with a class of <code>list-group</code>, we want to add 5 <code>a</code> tags, each with a class of <code>list-group-item</code>.  Add dummy text between each anchor tag. i.e. "Cras justo odio", "Vestibulum at eros", "Porta ac consectetur ac"</li>
            <li>To your 1st <code>a</code> add another class of <code>active</code>.</li>
            <li>For your 2nd anchor add another class of <code>list-group-item-success</code>, to your 3rd anchor a class of <code>list-group-item-info</code>.</li>
            <li>To your 4th <code>a</code> add another class of <code>list-group-item-warning</code> & the 5th anchor another class of <code>list-group-item-danger</code>.</li>
            <li>In your second <code>ul</code> we'll do the same we did for your <code>&lt;div class="list-group"&gt;</code> list-group, we want to add 5 <code>li</code> tags, each with a class of <code>list-group-item</code>.  Add some more dummy text to your anchor tag. i.e. "Porta ac consectetur ac", "Vestibulum at eros", "Cras justo odio" </li>
            <li>To your 1st <code>li</code> a class of <code>active</code>.</li>
            <li>For your 2nd anchor add a class of <code>list-group-item-success</code>, to your 3rd anchor a additional class of <code>list-group-item-info</code>.</li>
            <li>To your 4th <code>li</code> add a class of <code>list-group-item-warning</code> & the 5th anchor another class of <code>list-group-item-danger</code>.</li>
          </ol>
          <p>Open this file in our browser to see what we just did!</p>
          <br>
          <a href="answers/lesson11b.php" target="_blank" class="text-danger">Compare what you've built to ours</a>
          <p>WooHoo! You can make really nice looking list-groups that can link if you want them too! A nice addition I must say Bootstrap!</p>
          <p>Learn more about <a href="http://getbootstrap.com/components/#list-group" target="_blank">Bootstrap List Groups</a>!</p>
          <div class="next1">
            <a href="#tab12" data-toggle="tab" class="btn btn-default btn-lg tabs"><i class="fa fa-child fa-2x"></i>Final Section, Bootstrap Gylphicons & Fontawesome Icons! <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <a class="btn btn-danger btn-lg btn_task"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>List Groups</Strong> Task Before Moving On!</a>
      </div>
    </div>

    
  </article>
</div>