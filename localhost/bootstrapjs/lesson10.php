<div class="tab-pane" id="tab10">
  <article class="lesson10">
  
    <div class="lesson_title">
      <h4>Lesson 10</h4>
      <h1>Working with Collapsible Bootstrap Groups</h1>
    </div>    

    <!-- Collapse -->
    <div id="#" class="#">
      <h2>Collapse <small>collapse.js</small></h2>
      <hr>

      <!-- about -->
      <div class="col-md-12">
        <h3>
          About
        </h3>
        <p>
          Get base styles and flexible support for collapsible components like accordions and navigation.
        </p>
      </div>

      <!-- Example accordion -->
      <div class="col-md-12">
        <h3>
          Example Accordion
        </h3>
        <p>
          Using the collapse plugin, we built a simple accordion by extending the panel component.
        </p>
        <div class="table_example">
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    Collapsible Group Item #1
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    Collapsible Group Item #2
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    Collapsible Group Item #3
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/example.php'); ?>
          </code>     
        </div>
        <p>You can also use the plugin without the accordion markup. Make a button toggle the expanding and collapsing of another element.</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/other_element.php'); ?>
          </code>     
        </div>
      </div>

      <!-- usage-->
      <div class="col-md-12">
        <h3>
          Usage
        </h3>
        <ul>
          <li>
            <code>.collapse</code>
            hides the content
          </li>
          <li>
            <code>.collapse.in</code>
            shows the content
          </li>
          <li>
            <code>.collapsing</code>
            is added when the transition starts, and removed when it finishes
          </li>
        </ul>
        <p>
          These classes can be found in
          <code>component-animations.less</code>
          .
        </p>
      </div>

      <!-- Via data attributes -->
      <div class="col-md-12">
        <h3>
          Via Data Attributes
        </h3>
        <p>
          Just add
          <code>data-toggle="collapse"</code>
          and a
          <code>data-target</code>
          to element to automatically assign control of a collapsible element. The
          <code>data-target</code>
          attribute accepts a CSS selector to apply the collapse to. Be sure to add the class
          <code>collapse</code>
          to the collapsible element. If you'd like it to default open, add the additional class
          <code>in</code>
          .
          </p>
          <p>
          To add accordion-like group management to a collapsible control, add the data attribute
          <code>data-parent="#selector"</code>
          . Refer to the demo to see this in action.
        </p>
      </div>

      <!-- Via Javascript -->
      <div class="col-md-12">
        <h3>
          Via Javascript
        </h3>
        <p>
          Enable manually with:
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/javascript.php'); ?>
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
          <code>data-parent=""</code>
          .
        </p>
        <div class="table_example">
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
                  <td>parent</td>
                  <td>selector</td>
                  <td>false</td>
                  <td>
                    If selector then all collapsible elements under the specified parent will be closed when this collapsible item is shown. (similar to traditional accordion behavior - this dependent on the
                    <code>panel</code>
                    class)
                  </td>
                </tr>
                <tr>
                  <td>toggle</td>
                  <td>boolean</td>
                  <td>true</td>
                  <td>Toggles the collapsible element on invocation</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Methods -->
      <div class="col-md-12">
        <h3>
          Methods
        </h3>
        <h4>.collapse(options)</h4>
        <p>
          Activates your content as a collapsible element. Accepts an optional options
          <code>object</code>
          .
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/methods.php'); ?>
          </code>     
        </div>
        <h4>.collapse('toggle')</h4>
        <p>Toggles a collapsible element to shown or hidden.</p>
        <h4>.collapse('show')</h4>
        <p>Shows a collapsible element.</p>
        <h4>.collapse('hide')</h4>
        <p>Hides a collapsible element.</p>
      </div>

      <!-- Events -->
      <div class="col-md-12">
        <h3>
          Events
        </h3>
        <p>
          Bootstrap's collapse class exposes a few events for hooking into collapse functionality.
        </p>
        <div class="table_example">
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
                  <td>show.bs.collapse</td>
                  <td>
                    This event fires immediately when the
                    <code>show</code>
                    instance method is called.
                  </td>
                </tr>
                <tr>
                  <td>shown.bs.collapse</td>
                  <td>This event is fired when a collapse element has been made visible to the user (will wait for CSS transitions to complete).</td>
                </tr>
                <tr>
                  <td>hide.bs.collapse</td>
                  <td>
                    This event is fired immediately when the
                    <code>hide</code>
                    method has been called.
                  </td>
                </tr>
                <tr>
                  <td>hidden.bs.collapse</td>
                  <td>This event is fired when a collapse element has been hidden from the user (will wait for CSS transitions to complete).</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson10/events.php'); ?>
          </code>     
        </div>
      </div>



    </div>

    <!-- lesson task 10-->
    <div class="task">
      <div class="task1">
        <div class="col-md-8">
          <h3>Time to make some sweet collapsible groups.</h3>
          <p class="lead">Open our project folder we have been using the past few days</p>
          <ol>
            <li>Lets start by creating a new div below what we have done so far, and add a class of <code>container-fluid</code>, followed by a div with a class of <code>row</code> inside.</li>
            <li>Inside lets make 2 new divs and add grid columns to each one, set the 1st div class to <code>col-sm-6 col-md-4</code> & to our 2nd div give a class to <code>col-sm-6 col-md-8</code>.</li>
            <li>In our <code>col-md-4</code> lets make a new div and give it a class of <code>panel-group</code>. Inside lets make 3 new divs which will serve as our collapsible groups, our 1st set a class of <code>panel panel-primary</code>, our 2nd a class of <code>panel panel-success</code> & our 3rd a class of <code>panel panel-info</code>.</li>
            <li>Moving to our panel-primary, we need to make 2 new divs inside the 1st will serve as a heading and the 2nd as content for our collapse. Our first div needs a class of <code>panel-heading</code>, and our second div a class of <code>panel-collapse collapse in</code>.</li>
            <li>Add a <code>h4</code> into our panel-heading with a class of <code>panel-title</code>, and inside the heading tag add a <code>a</code> tag and set its data-toggle attribute to <code>collapse</code>, add some text to our anchor i.e. "Collapsible Group Item #1".</li>
            <li>For our <code>panel-collapse</code> div, lets add a div with the classes of <code>panel-body text-primary</code> inside here, then fill this with a good amount of <a href="http://www.lipsum.com/" target="_blank">Lorem Lipsum</a> text.</li>
            <li>Last to make these link up correctly we need a few more attributes on a few divs. First give our panel a id i.e. "collapseOne", then set the anchor tag above in the panel div to this id. i.e.<code>#collapseOne</code>.</li>
            <li>Excellent! we have our first collapse panel, lets finish the next two that will associate with our 1st collapse group. Inside our panel-success lets do as we did above and add a new div inside with a class of <code>panel-heading</code>.</li>
            <li>Again add <code>h4</code> in the panel-heading div with a class of <code>panel-title</code>, and inside the heading tag add a <code>a</code> tag and give it a data-toggle attribute of <code>collapse</code>, also add text to our anchor i.e. "Collapsible Group Item #2".</li>
            <li>In to our <code>panel-collapse</code> div, add a div with the classes of <code>panel-body text-success</code>, then fill this again with <a href="http://www.lipsum.com/" target="_blank">Lorem Lipsum</a>.</li>
            <li>We now can link our <code>a</code> and <col>collapse</col> div, add a id to our <code>&lt;div class="collapse"&gt;</code> i.e "collapseTwo" and then set the anchor href to this id i.e. <code>#collapseTwo</code>.</li>
            <li>Panel #2 is done, lets finish our 3rd, into our <code>panel-info</code> div, and you guessed it, add 2 more divs inside this the 1st with a classes of <code>panel-heading</code> & the 2nd with the classes of <code>panel-collapse collapse</code>.</li>
            <li>Lets add a <code>h4</code> tag into our panel-heading div with a class of <code>panel-title</code>,  add a <code>a</code> tag inside with a data-toggle attribute set to <code>collapse</code>, add text to our anchor i.e. "Collapsible Group Item #3".</li>
            <li>Moving along our <code>panel-collapse</code> div, add a div with the classes of <code>panel-body text-info</code>, and fill the div with <a href="http://www.lipsum.com/" target="_blank">Lorem Lipsum</a> dummy text.</li>
            <li>It's time to link our <code>a</code> and <col>collapse</col> divs, give a id to our <code>&lt;div class="collapse"&gt;</code> i.e "collapseThree" and then set the anchor href to this id i.e. <code>#collapseThree</code>.</li>
            <li>Finally to make our collaspse work we need to give our panel-group div a id and set the data-parent attribute of our anchor tags to that id, just like an href attribute, 1st give the id to our panel-body i.e. "accordion1". Then to each anchor set the data-parent attribute equal to this id. i.e. <code>data-attribute="#accordion1"</code>.</li>
            <li>Great looking first collapse group! Lets move on to making our second, into our <code>col-md-8</code> div. Add a new div with a class of <code>panel-group</code> and inside add 3 new divs each with the class of <code>panel</code> & <code>panel-danger</code>, these will be our collapse panels.</li>
            <li>In <strong>each</strong> panel-danger we will again add two new divs, the 1st with a class of <code>panel-heading</code> and the 2nd div a class of <code>panel-collapse</code> & <code>collapse</code>.  Also choose one to add an additional class of <code>in</code>, setting this to our active panel!</li>
            <li>Time for our panel-title & panel-body, In each panel-heading div add a <code>h4</code> tag with a class of <code>panel-title</code>. Also add a <code>a</code> tag inside each h4 with its data-toggle attribute set to <code>collapse</code>. Finally add a <code>panel-body</code> div inside each of our 3 new <code>panel-collapse</code> divs.</li>
            <li>To our 1st <code>a</code> add some text between our tags i.e. "Collapsible Group Item #4",  our 2nd <code>a</code> needs some text between our tags as well i.e. "Collapsible Group Item #5",  & our 3rd <code>a</code> also could use text between the open and close tags i.e. "Collapsible Group Item #6"</li>
            <li>Add some <a href="http://www.lipsum.com/" target="_blank">Lorem Lipsum</a> dummy text to our 3 <code>panel-body</code> divs. Finally we can link our panels to our panel group and our anchors to the right panel-collapse div.</li>
            <li>Give our <code>panel-group</code> div an id we can match to our panel's i.e "accordion2", then assign the data-parent attribute to each of our anchor tags and set it equal to this id. <code>data-parent="accordion2"</code>.</li>
            <li>Last give our 1st panel-collapse div an id of <code>collapseFour</code> and match this to the anchor above i.e. <code>href="#collapseFour"</code>, for the 2nd panel-collapse div an id i.e. <code>collapseFive</code> and again match the anchor tag above i.e. <code>href="#collapseFive"</code>.</li>
            <li>To our 3rd panel-collapse div give it a id, i.e. "collapseSix" and link our 3rd anchor tag to this div i.e. <code>href="collapseSix"</code>.  Made It!! Making two sweet collapse groups along the way.</li>
          </ol>
          <p>Open this file in our browser to see what we just did!</p>
          <br>
          <a href="answers/lesson10.php" target="_blank" class="text-danger">This is how our file came out</a>
          <p>Find out more about <a href="http://getbootstrap.com/javascript/#collapse" target="_blank">Bootstrap Collapse Groups Here!</a></p>
          <div class="next1">
            <a href="#tab11" data-toggle="tab" class="btn btn-success btn-lg tabs"><i class="fa fa-child fa-2x"></i>Next Section, The Bootstrap Carousel - Enjoy!<i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <a class="btn btn-danger btn-lg btn_task"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Collapse</Strong> Task Before Moving On!</a>
      </div>
    </div>

    
  </article>
</div>