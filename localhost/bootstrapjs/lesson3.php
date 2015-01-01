<div class="tab-pane" id="tab3">
  <article class="lesson3">
    
    <div class="lesson_title">
      <h4>Lesson 3</h4>
      <h1>Learning More on Bootstrap Dropdowns</h1>
    </div>    

    <!-- dropdowns -->
    <div id="#" class="#">
      <h2>Dropdowns <small>dropdown.js</small></h2>
      <hr>

      
      <div class="col-md-12">
        <h3>
          Examples
        </h3>
        <p>
          Add dropdown menus to nearly anything with this simple plugin, including the navbar, tabs, and pills.
        </p>
        <h3>Within a navbar</h3>
        <div class="table_example">
          <nav id="navbar-example" class="navbar navbar-default navbar-static" role="navigation">
            <div class="container-fluid">
            <div class="navbar-header">
            <button class="navbar-toggle" data-target=".bs-example-js-navbar-collapse" data-toggle="collapse" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project Name</a>
            </div>
            <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
            <ul class="nav navbar-nav">
            <li class="dropdown">
            <a id="drop1" class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">
            Dropdown
            <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="drop1" role="menu">
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Action</a>
            </li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Another action</a>
            </li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Something else here</a>
            </li>
            <li class="divider" role="presentation"></li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Separated link</a>
            </li>
            </ul>
            </li>
            <li class="dropdown">
            <a id="drop2" class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">
            Dropdown 2
            <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="drop2" role="menu">
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Action</a>
            </li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Another action</a>
            </li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Something else here</a>
            </li>
            <li class="divider" role="presentation"></li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Separated link</a>
            </li>
            </ul>
            </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li id="fat-menu" class="dropdown">
            <a id="drop3" class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">
            Dropdown 3
            <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="drop3" role="menu">
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Action</a>
            </li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Another action</a>
            </li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Something else here</a>
            </li>
            <li class="divider" role="presentation"></li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Separated link</a>
            </li>
            </ul>
            </li>
            </ul>
            </div>
            </div>
          </nav>
        </div> 
        <h3>Within pills</h3>
        <div class="table_example">
          <ul class="nav nav-pills">
            <li class="active">
            <a href="#">Regular link</a>
            </li>
            <li class="dropdown">
            <a id="drop4" href="#" data-toggle="dropdown" role="button">
            Dropdown
            <span class="caret"></span>
            </a>
            <ul id="menu1" class="dropdown-menu" aria-labelledby="drop4" role="menu">
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Action</a>
            </li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Another action</a>
            </li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Something else here</a>
            </li>
            <li class="divider" role="presentation"></li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Separated link</a>
            </li>
            </ul>
            </li>
            <li class="dropdown">
            <a id="drop5" href="#" data-toggle="dropdown" role="button">
            Dropdown 2
            <span class="caret"></span>
            </a>
            <ul id="menu2" class="dropdown-menu" aria-labelledby="drop5" role="menu">
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Action</a>
            </li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Another action</a>
            </li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Something else here</a>
            </li>
            <li class="divider" role="presentation"></li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Separated link</a>
            </li>
            </ul>
            </li>
            <li class="dropdown">
            <a id="drop6" href="#" data-toggle="dropdown" role="button">
            Dropdown 3
            <span class="caret"></span>
            </a>
            <ul id="menu3" class="dropdown-menu" aria-labelledby="drop6" role="menu">
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Action</a>
            </li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Another action</a>
            </li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Something else here</a>
            </li>
            <li class="divider" role="presentation"></li>
            <li role="presentation">
            <a href="#" tabindex="-1" role="menuitem">Separated link</a>
            </li>
            </ul>
            </li>
          </ul>
        </div>         
      </div>

      <!-- usage -->
      <div class="col-md-12">
        <h2>
          Usage
        </h2>
        <p>
          Via data attributes or JavaScript, the dropdown plugin toggles hidden content (dropdown menus) by toggling the
          <code>.open</code>
          class on the parent list item. When opened, the plugin also adds
          <code>.dropdown-backdrop</code>
          as a click area for closing dropdown menus when clicking outside the menu. Note: The
          <code>data-toggle=dropdown</code>
          attribute is relied on for closing dropdown menus at an application level, so it's a good idea to always use it.
        </p>
        <h3>Via data attributes</h3>
        <p>
          Add
          <code>data-toggle="dropdown"</code>
          to a link or button to toggle a dropdown.
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson3/toggle.php'); ?>
          </code>     
        </div>
        <p>
          To keep URLs intact, use the
          <code>data-target</code>
          attribute instead of
          <code>href="#"</code>
          .
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson3/urls.php'); ?>
          </code>     
        </div>
        <h3>Via JavaScript</h3>
        <p>Call the dropdowns via JavaScript:</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson3/script.php'); ?>
          </code>     
        </div>
      </div>

      <div class="clearfix"></div>

      <!-- method -->
      <div class="col-md-12">
        <h3>Methods</h3>
        <h4>$().dropdown('toggle')</h4>
        <p>Toggles the dropdown menu of a given navbar or tabbed navigation.</p>
      </div>

      <!-- Events -->
      <div class="col-md-12">
        <h3>Events</h3>
        <p>
          All dropdown events are fired at the
          <code>.dropdown-menu</code>
          's parent element.
        </p>
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
          <td>show.bs.dropdown</td>
          <td>
          This event fires immediately when the show instance method is called. The toggling anchor element is available as the
          <code>relatedTarget</code>
          property of the event.
          </td>
          </tr>
          <tr>
          <td>shown.bs.dropdown</td>
          <td>
          This event is fired when the dropdown has been made visible to the user (will wait for CSS transitions, to complete). The toggling anchor element is available as the
          <code>relatedTarget</code>
          property of the event.
          </td>
          </tr>
          <tr>
          <td>hide.bs.dropdown</td>
          <td>
          This event is fired immediately when the hide instance method has been called. The toggling anchor element is available as the
          <code>relatedTarget</code>
          property of the event.
          </td>
          </tr>
          <tr>
          <td>hidden.bs.dropdown</td>
          <td>
          This event is fired when the dropdown has finished being hidden from the user (will wait for CSS transitions, to complete). The toggling anchor element is available as the
          <code>relatedTarget</code>
          property of the event.
          </td>
          </tr>
          </tbody>
          </table>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson3/events.php'); ?>
          </code>     
        </div>
      </div>

    </div>

    <!-- lesson task 3-->
    <div class="task">
      <div class="task1">
        <div class="col-md-8">
          <h3>Dropdowns will be very useful in web development.</h3>
          <p class="lead">Open our project folder we have been using.</p>
          <ol>
            <li>Begin below our last container-fluid div from lesson 2, and create a new div tag & give it a class of <code>dropdown</code>, this will house the 2 things we need for a dropdown.</li>
            <li>Add a <code>button</code> tag and a <code>ul</code> tag inside our new div. For our button we need a class of <code>btn btn-danger</code> to add some style & to make our dropdown work we must set our <code>data-toggle="dropdown"</code>.</li>
            <li>Inside our <code>button</code> lets add some text i.e. "Danger Dont Click Me", and a <code>span</code>on the following line with a class of <code>caret</code>.</li>
            <li>Now we can make our dropdown items inside our <code>ul</code> but first we need a class of <code>dropdown-menu</code> add to our ul.</li>
            <li>Finally add a few <code>li</code> tags with <code>a</code> tags inside each one, & text between our open and closing anchor tags with some text i.e. "Dropdown link", "Dangerous Link". And here we have our most basic bootstrap dropdown button!</li>
            <li>Lets move on and make a basic nav bar with a drop down to the right side of our nav, start with a new <code>nav</code> tag outside our <code>&lt;div class="dropdown"&gt;</code> & give it a class of <code>navbar navbar-default</code>.</li>
            <li>Create 2 new divs inside ou nav, give the 1st a class of <code>navbar-header</code> and the 2nd div a class of <code>collapse navbar-collapse</code>.</li>
            <li>Inside our 1st new div add a <code>button</code> with a class of <code>navbar-toggle</code>, set our <code>data-toggle="collapse"</code>. Add a <code>a</code> tag below our button with a class of navbar-brand & some text i.e. "Project Brand".</li>
            <li>Add 4 spans inside our new button tag, give our 1st span a class of <code>sr-only</code> and some text between the tags i.e. "Toggle navigation", "Navigation toggle".  To our outher 3 spans add a class of <code>icon-bar</code>.</li>
            <li>Moving to ou 2nd new div with a class of <code>collapse</code>, create a <code>ul</code> inside add give the class of <code>nav navbar-nav navbar-right</code> to it.</li>
            <li>Add a <code>li</code> with a class of <code>dropdown</code>, and inside this add 1 <code>a</code> & <code>ul</code> tag, give our anchor a class of <code>dropdown-toggle</code> and set the data-toggle attribute to "dropdown".</li>
            <li>Inside our anchor tags name our anchor i.e. "Dropdown", "Button Dropdown", also add a <code>span</code> on the next line and give this a class of <code>caret</code>.</li>
            <li>Again give our <code>ul</code> a class of <code>dropdown-menu</code> and add 2 <code>li</code> tags with <code>a</code> tags inside. Name both i.e. "Link 1", "Link 2", "Action", "Another Action".</li>
            <li>We forgot to add our <code>data-target</code> to our button to link our collaspe to our button - this takes effect on XS screens. To do this, we need to give our div with a class of <code>collapse</code> a ID, i.e. "collapsed_nav". & correspond it to our data-target i.e. <code>data-target=".collapsed_nav"</code>.</li>
            <li>Lets o one more dropdown, start with a new <code>container</code> div, add a <code>row</code> div inside & a <code>col-md-6</code> div inside our row. Add one more div inside here with a class of <code>dropdown</code>.</li>
            <li>As we did before lets add a <code>button</code> & <code>ul</code> inside our dropdown div.  Add a class <code>btn btn-primary btn-block</code> to our button & add a data-toggle attribute of <code>dropdown</code>. Name our button i.e. "Dropdown Button", and on our next line add a span with a class of <code>caret</code>.</li>
            <li>Give our <code>ul</code> a class of <code>dropdown-menu</code>.  Add a few <code>li</code> tags with <code>a</code> tags inside each li. Name each anchor between our open and closing <code>a</code> tags i.e. "Action", "Link 1".</li>
          </ol>
          <p>Open this file in our browser to see what we just did!</p>
          <br>
          <a href="answers/lesson3.php" target="_blank" class="text-danger">Check out how our new file looks</a>
          <p>Learn more about <a href="http://getbootstrap.com/javascript/#dropdowns" target="_blank">Bootstrap Dropdowns Here!</a></p>
          <div class="next1">
            <a href="#tab4" data-toggle="tab" class="btn btn-success btn-lg tabs"><i class="fa fa-child fa-2x"></i>Next Section, using Bootstrap Scrollspy <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <a class="btn btn-danger btn-lg btn_task"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Dropdown</Strong> Task Before Moving On!</a>
      </div>
    </div>

    
  </article>
</div>