<div class="tab-pane" id="tab8">
  <article class="lesson8">

    <div class="lesson_title">
      <h4>Lesson 8</h4>
      <h1>Messing with More Bootstrap Alerts</h1>
    </div>    

    <!-- # -->
    <div id="#" class="#">
      <h2>Alert messages <small>alert.js</small></h2>
      <hr>

      <!-- Example alerts -->
      <div class="col-md-12">
        <h3>
          Example alerts
        </h3>
        <p>
          Add dismiss functionality to all alert messages with this plugin.
        </p>
        <div class="table_example">
          <div class="alert alert-warning fade in" role="alert">
            <button class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
            </button>
            <strong>Holy guacamole!</strong>
            Best check yo self, you're not looking too good.
          </div>
          <div class="alert alert-danger fade in" role="alert">
            <button class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
            </button>
            <h4>Oh snap! You got an error!</h4>
            <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
            <p>
            <button class="btn btn-danger" type="button">Take this action</button>
            <button class="btn btn-default" type="button">Or do this</button>
            </p>
          </div>
        </div>
      </div>

      <!-- usage -->
      <div class="col-md-12">
        <h3>
          Usage
        </h3>
        <p>
          Usage
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson8/usage.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Mark Up -->
      <div class="col-md-12">
        <h3>
          Markup
        </h3>
        <p>
          Just add
          <code>data-dismiss="alert"</code>
          to your close button to automatically give an alert close functionality.
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson8/markup.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Methods -->
      <div class="col-md-12">
        <h3>
          Methods
        </h3>
        <h4>$().alert()</h4>
        <p>
        Wraps all alerts with close functionality. To have your alerts animate out when closed, make sure they have the
        <code>.fade</code>
        and
        <code>.in</code>
        class already applied to them.
        </p>
        <h4>.alert('close')</h4>
        <p>Closes an alert.</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson8/methods.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Events -->
      <div class="col-md-12">
        <h3>
          Events
        </h3>
        <p>
          Bootstrap's alert class exposes a few events for hooking into alert functionality.
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
              <tbody
                <tr>
                  <td>close.bs.alert</td>
                  <td>
                  This event fires immediately when the
                  <code>close</code>
                  instance method is called.
                  </td>
                </tr>
                <tr>
                  <td>closed.bs.alert</td>
                  <td>This event is fired when the alert has been closed (will wait for CSS transitions to complete).</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson8/events.php'); ?>
          </code>     
        </div>
      </div>


    </div>

    <!-- lesson task 8-->
    <div class="task">
      <div class="task1">
        <div class="col-md-8">
          <h3>Alerts are one of the coolest Bootstrap Javascript plugins, lets create a few alerts that we can activate from buttons as well as alerts that are always visible!</h3>
          <p class="lead">Open our project folder we have been using the past few days</p>
          <ol>
            <li>Lets begin be creating a new div below are other code-snip-its and give it a class of <code>container</code>, inside make another div with a class of <code>row</code>. </li>
            <li>Next we need some grid column divs inside our <code>row</code>, 3 in total, give our 1st div a class of <code>col-sm-4 col-md-6 col-md-offset-3</code>, our 1st div a class of <code>col-sm-4 col-md-8</code> & our 3rd div a class of <code>col-sm-4 col-md-12</code>. </li>
            <li>Now we can give our new divs some tags, our first should get a <code>h1</code>, <code>p</code>, <code>button</code> & a <code>div</code> tag. Fill out our <code>h1</code> and <code>p</code> tags with some dummy text from <a href="http://www.lipsum.com/" target="_blank">Lipsum</a>.</li>
            <li>Our second div should get a <code>h2</code>, <code>p</code>, <code>button</code> & a <code>div</code> tag. We should also fill out our <code>h2</code> & <code>p</code> tags with more dummy text from <a href="http://www.lipsum.com/" target="_blank">Lipsum</a>.</li> 
            <li>And our the third div needs a <code>h3</code>, <code>p</code>, <code>button</code> & 3 <code>div</code> tags. Again We should need dummy text from <a href="http://www.lipsum.com/" target="_blank">Lipsum</a> for our <code>h2</code> & <code>p</code> tags.</li>
            <li>Great we have the basic structure now we can add a few bootstrap classes to bring this to life! Inside our <code>col-md-6</code> div lets give our button a class of <code>btn btn-success btn-block</code> name our button between our button tags i.e. "Alert Button".</li>
            <li>To our 1st div inside our col-md-6 attach a class of <code>alert</code>, <code>alert-success</code> & <code>fade</code>.  In our <code>alert</code> div lets add a <code>button</code> that we will dismiss our alert when clicked and some text below our button that will be our alert message i.e. "&lt;strong&gt;Success! &lt;/strong&gt; Best check yo self, before your better then the rest!".</li>
            <li>For our new button give a class of <code>close</code> and set the data-dismiss attribute to <code>alert</code>.</li>
            <li>Inside the button add 2 <code>span</code> tags, to our first span add a <code>& times ;</code> between the opening and closing tags. This makes our closing X<br><span class="text-primary">We <strong>MUST</strong> remove the space between the <code>"&"</code> and <code>"t"</code> as well as between the <code>"s"</code> and <code>";"</code> to make the X properly appear.</span></li>
            <li>To the second span add a class of <code>sr-only</code> and between the open and close tags add the text "Close". If we wanted this alert to work when we load our page we only need to add the class of <code>in</code> to the div with a class of <code>alert alert-success fade</code>.  For now leave it off we will make our button above display it in a minute.</li>
            <li>Lets move into our <code>col-md-8</code> div and give our button the classes <code>btn btn-warning btn-lg</code> and some text between the tags "Click Here to Alert Us".</li>
            <li>The div below our button needs some alert classes to make it wokr as an alert so add the classes <code>alert alert-warning fade</code> to the div and insert some text for our alert inside our div i.e. "&lt;strong&gt;Oh Snap It's a Warning&lt;/strong&gt; The end of the era is among us, or so they say, they are probably wrong anyway."</li>
            <li>Finally into our last div <code>col-md-12</code>, lets give our button a few bootstrap classes <code>btn btn-danger btn-sm</code> and add some text between our button tags i.e. "DONT CLICK THIS".  For the div below our button give this a few alert classes <code>alert alert-danger fade</code>.</li>
            <li>Inside our alert div lets add some text i.e "&lt;strong&gt;DANGER!&lt;/strong&gt; Watch our back, everyone is out to get you, get protection asap before it's to late." and a line break below our text <code>&lt;br&gt;</code>, add 2 <code>a</code> tags below our line break.</li>
            <li>Add a few class to our anchors, our first the classes <code>btn btn-primary</code> and some text between our tags i.e "Action 1", & for our second the classes of <code>btn btn-danger</code> and some text between our tags i.e "Action 2"</li>
            <li>Nicely Done, lets make one more alert and then a little jQuery to display our alerts when we click the nearest button! start with a <code>clearfix</code> div below our <code>col-md-12</code> and a div below this clearfix.</li>
            <li>Give this div a few alert classes like we did before <code>alert alert-success fade</code> but this time we want this one always displayed so we need to give this div one more class of <code>in</code>. Last we need some alert message inside our alert div i.e. "Check out this sweet alert, its really important!".</li>
            <li>OK, we have our alerts done but 3 still don't show up so lets make a quick jQuery script to fix this! In our main.js lets start by calling the <code>alert_button</code> class, this is a completely arbitrary class name we will attach to our buttons right above our hidden alerts, to reveal them on click. <code>$(".alert_button")</code>.</li>
            <li>Follow this buy jQuery on "click" function so we can next find our closest alert div and display it, instead of just displaying all 3 alerts at once. <code>.on('click', function(){});</code>.</li>
            <li>Now inside our function lets us <code>$(this)</code> to get our closest div to our .alert_button, <code>$(this).closest('div')</code>. So we have the closet div when we click a button with a class of <code>alert_button</code>. We now need to find are alert divs inside our new "div" DOM object. <code>.find('.alert')</code>.</li>
            <li>Finally lets add the class that will display our alert using the sweet addClass() jQuery property! <code>.addClass('in');</code>, Excellent, Now we just need to add a few classes to the buttons we want this code snipit to be applied to, so back in our index.html add a class of <code>alert_button</code> to the 3 buttons inside our columns that are right below our <code>p</code> tags.</li>
          </ol>
          <a href="#" type="button" class="revealer">Check the full jQuery script</a>
          <div class="hidden reveal_answer">
            <code>
              <br>
              $(".alert_button").on('click', function(){
              <br>
                <span class="form_padding">$(this).closest("div").find(".alert").addClass("in");</span>
              <br>
              });
              <br>
            </code>
          </div>
          <p>Open this file in our browser to see what we just did!</p>
          <br>
          <a href="answers/lesson8.php" target="_blank" class="text-danger">Check out how our file turned out</a>
          <p>Woohoo Alerts are super awesome good job getting through that task!</p>
          <p>More about <a href="http://getbootstrap.com/javascript/#alerts" target="_blank">Bootstrap Alerts Here!</a></p>
          <div class="next1">
            <a href="#tab9" data-toggle="tab" class="btn btn-success btn-lg tabs"><i class="fa fa-child fa-2x"></i>Next Section, Even More on Bootstrap Buttons <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <a class="btn btn-danger btn-lg btn_task"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Alert</Strong> Task Before Moving On!</a>
      </div>
    </div>

    
  </article>
</div>