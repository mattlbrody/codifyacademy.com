<div class="tab-pane" id="tab9">
  <article class="lesson9">

    <div class="lesson_title">
      <h4>Lesson 9</h4>
      <h1>How to use Alerts & Progress Bars</h1>
    </div>

    <!-- Alerts -->
    <div class="alerts">
      <h2>Alerts!</h2>
      <p>Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</p>
      <hr>

      <!-- examples -->
      <div class="col-md-12">
        <h3>
          Basic Examples
        </h3>
        <p>
          Wrap any text and an optional dismiss button in
            <code>.alert</code>
            and one of the four contextual classes (e.g.,
          <code>.alert-success</code>
          ) for basic alert messages.
        </p>
        <div class="table_example">
          <div class="alert alert-success" role="alert">Well done! You successfully read this important alert message.</div>
          <div class="alert alert-info" role="alert">Heads up! This alert needs your attention, but it's not super important.</div>
          <div class="alert alert-warning" role="alert">Warning! Better check yourself, you're not looking too good.</div>
          <div class="alert alert-danger" role="alert">Oh snap! Change a few things up and try submitting again. </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/alert_basic.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Dismissible alerts -->
      <div class="col-md-12">
        <h3>
          Dismissible Alerts
        </h3>
        <p>
          Build on any alert by adding an optional
          <code>.alert-dismissible</code>
          and close button.
        </p>
        <div class="table_example">
          <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong>Warning!</strong> Better check yourself, you're not looking too good.
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/alert_dismissible.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Links in alerts -->
      <div class="col-md-12">
        <h3>
          Links in alerts
        </h3>
        <p>
          Use the
          <code>.alert-link</code>
          utility class to quickly provide matching colored links within any alert.
        </p>
        <div class="table_example">
          <div class="alert alert-success" role="alert">
            <strong>Well done!</strong>
            You successfully read
            <a class="alert-link" href="#">this important alert message</a>
            .
          </div>
          <div class="alert alert-info" role="alert">
            <strong>Heads up!</strong>
            This
            <a class="alert-link" href="#">alert needs your attention</a>
            , but it's not super important.
          </div>
          <div class="alert alert-warning" role="alert">
            <strong>Warning!</strong>
            Better check yourself, you're
            <a class="alert-link" href="#">not looking too good</a>
            .
          </div>
          <div class="alert alert-danger" role="alert">
            <strong>Oh snap!</strong>
            <a class="alert-link" href="#">Change a few things up</a>
            and try submitting again.
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/alert_links.php'); ?>
          </code>     
        </div>
      </div>

    </div>

    <!-- progress bars -->
    <div class="alerts">
      <h2>Progress Bars</h2>
      <p>Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars.</p>
      <hr>

      <!-- Basic example -->
      <div class="col-md-12">
        <h3>
          Basic example
        </h3>
        <p>
          Default progress bar
        </p>
        <div class="table_example">
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/progress_basic.php'); ?>
          </code>     
        </div>
      </div>

      <!-- With label -->
      <div class="col-md-12">
        <h3>
          Progress bar with a label
        </h3>
        <p>
          Remove the
          <code>.sr-only</code>
          class from within the progress bar to show a visible percentage. For low percentages, consider adding a
          <code>min-width</code>
          to ensure the label's text is fully visible.
        </p>
        <div class="table_example">
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
              60%
            </div>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/progress_label.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Low percentages -->
      <div class="col-md-12">
        <h3>
          Low percentage progress bars
        </h3>
        <p>
          Progress bars representing low single digit percentages, as well as 0%, include a
          <code>min-width: 20px;</code>
          for legibility.
        </p>
        <div class="table_example">
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
              0%
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
              2%
            </div>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/progress_precent.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Contextual alternatives -->
      <div class="col-md-12">
        <h3>
          Contextual Alternatives
        </h3>
        <p>
          Progress bars use some of the same button and alert classes for consistent styles.
        </p>
        <div class="table_example">
          <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
              <span class="sr-only">40% Complete (success)</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
              <span class="sr-only">20% Complete</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
              <span class="sr-only">60% Complete (warning)</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
              <span class="sr-only">80% Complete</span>
            </div>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/progress_context_alt.php'); ?>
          </code>     
        </div>
      </div>

      <!--Striped -->
      <div class="col-md-12">
        <h3>
          Striped progress bars
        </h3>
        <p>
          Uses a gradient to create a striped effect. <strong>Not available in IE8.</strong>
        </p>
        <div class="table_example">
          <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
              <span class="sr-only">40% Complete (success)</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
              <span class="sr-only">20% Complete</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
              <span class="sr-only">60% Complete (warning)</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
              <span class="sr-only">80% Complete (danger)</span>
            </div>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/progress_striped.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Animated -->
      <div class="col-md-12">
        <h3>
          Animated progress bars
        </h3>
        <p>
          Add
          <code>.active</code>
          to
          <code>.progress-bar-striped</code>
          to animate the stripes right to left.
        </p>
        <div class="table_example">
          <div class="progress">
            <div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
              <span class="sr-only">45% Complete</span>
            </div>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/progress_animated.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Stacked -->
      <div class="col-md-12">
        <h3>
          Stacked progress bars
        </h3>
        <p>
          Place multiple bars into the same
          <code>&lt;div class="progress"&gt;</code>
          to stack them.
        </p>
        <div class="table_example">
          <div class="progress">
            <div class="progress-bar progress-bar-success" style="width: 35%">
              <span class="sr-only">35% Complete (success)</span>
            </div>
            <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 20%">
              <span class="sr-only">20% Complete (warning)</span>
            </div>
            <div class="progress-bar progress-bar-danger" style="width: 10%">
              <span class="sr-only">10% Complete (danger)</span>
            </div>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/progress_stacked.php'); ?>
          </code>     
        </div>
      </div>


    <!-- lesson task -->
    <div class="task">
      <div class="task1">
        <div class="col-md-8">
          <h3>Alerts & Progress Bars are Extremely helpful, lets div right in to writing <code>CODE</code> for these!</h3>
          <p class="lead">Open our project folder we have been using the past few days</p>
          <ol>
            <li>Lets start with a new div with a class of <code>container</code>. No row's or grid-columns this time!</li>
            <li>Create a div with a class of <code>alert alert-success</code>, also set its <code>role="alert"</code>.</li>
            <li>Add some text between our div tags, something like: Well done! You successfully read this important alert message.</li>
            <li>Excellent! 1 Bootstrap Alert quickly built! but lets make it so they can dismiss the next alert!</li>
            <li>Start with a new div in our <code>container</code> giving it a class of <code>alert alert-warning alert-dismissible</code> and again set this alerts <code>role="alert"</code>.</li>
            <li>Lets make this alert have the ability to be closed or "hidden" to a user, when a user clicks the X on the right hand side of our alert, to do this start by adding a button tag inside our <code>&lt;div class="alert alert-warning alert-dismissible"&gt;</code> and set the buttons' class to <code>close</code>, next set its type attribute to <code>button</code> and finally to make our alert dismiss we need to add the <code>data-dismiss="alert"</code> attribute to our button.</li>
            <li>Next we need 2 spans inside our button, set the 1st to  have a <code>aria-hidden="true"</code> and add an <strong><code>x</code></strong> between our 1st open and close span tag.</li>
            <li>In our second span lets set our class to <code>sr-only</code> and add the text of <strong><code>close</code></strong> in between our 2nd open and close span tags.</li>
            <li>Now lets add some text to our alert, anything you'd like, we want to make part of our new text link to somewhere else, so wrap some of it in <code>a</code> tag, and attach a class of <code>alert-link</code> to this anchor.</li>
            <li>Sweet Alerts are an amazing bootstrap tool! Now lets make some progress bars to show a user where they are in any process.</li>
            <li>Lets start basic, with a div with a class of <code>progress</code>, inside add another div with a class of <code>progress-bar progress-bar-striped active</code>, to give our bar a striped and animated look!</li>
            <li>We need to set this divs role attribute to <code>progressbar</code>, and we will add <code>aria-valuenow="85"</code>, set our min value with<code>aria-valuemin="0"</code> & our max value of our bar to <code>aria-valuemax="100"</code>. Now add inline style and set our progress bar width to 85%.</li>
            <li>Add and Finally add a little text of 85% in between our open and closing <code>progress-bar</code> div, to have a label of 85% show on our progress bar.</li>
            <li>Last, lets create a stacked progress bar, to begin create a new div with a class of <code>progress</code>, add 3 new divs inside all getting a class of <code>progress-bar</code> added to it, also add a class of <code>alert-parimry alert-warning alert-danger</code>, one to each div we just made.</li>
            <li>Let make our 3 progress bars total 100% width, add <code>style="width: ;"</code> & add 3 widths inside that total 100% i.e. 25%, 35%, 40%</li>
            <li>Add 1 span inside each div with a <code>class="sr-only"</code> add text that will only be seen by screen readers i.e. 25% Complete, 35% Complete</li>
            <li>To our last div add 2 more classes to make it striped & animated <code>progress-bar-striped active</code>.</li>
          </ol>
          <p>Open this file in our browser to see View our new Bootstrap Alerts & Progress Bars!</p>
          <br>
          <a href="answers/lesson9.php" target="_blank" class="text-danger">Check out how our new file looked</a>
          <p>EXCELLENT!!! you just hand built your first bootstrap alerts & some progress bars. Inspect some of the elements to see exactly what Bootstrap's Css is doing to our tags!</p>
          <p>Check out more on <a href="http://getbootstrap.com/components/#alerts" target="_blank">Bootstrap Alerts</a> & <a href="http://getbootstrap.com/components/#progress" target="_blank">Bootstrap Progressbars</a>!</p>
          <div class="next1">
            <a href="#tab10" data-toggle="tab" class="btn btn-default btn-lg tabs"><i class="fa fa-child fa-2x"></i>Next section up, Bootstrap Headers, Thumbnails & Jumbotron! <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <a class="btn btn-danger btn-lg btn_task"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Labels & Badges</Strong> Task Before Moving On!</a>
      </div>
    </div>

  </article>
</div>