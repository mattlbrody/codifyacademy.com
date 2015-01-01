<div class="tab-pane" id="tab7">
  <article class="lesson7">
  
    <div class="lesson_title">
      <h4>Lesson 7</h4>
      <h1>Adding Bootstrap.js Popovers</h1>
    </div>    

    <!-- Popovers -->
    <div id="#" class="#">
      <h2>Popovers <small>popover.js</small></h2>
      <hr>

      <!-- Examples -->
      <div class="col-md-12">
        <h3>
          Examples
        </h3>
        <p>
          Add small overlays of content, like those on the iPad, to any element for housing secondary information.
        </p>
        <div class="panel panel-success">
          <div class="panel-heading">Requires Opt-in functionality</div>
          <div class="panel-body">
            For performance reasons, the Tooltip and Popover data-apis are opt-in, meaning
            <strong>you must initialize them yourself</strong>
            .
            <br>
            Include the script below if we want to use popovers!
          </div>
        </div>
        <div class="well well-sm">
          <code>
            <?php include('code/lesson7/required.php'); ?>
          </code>
        </div>
      </div>

      <!-- Static popover -->
      <div class="col-md-12">
        <h3>
          Static popover
        </h3>
        <p>
          Four options are available: top, right, bottom, and left aligned.
        </p>
        <div class="">
          <div class="popover top show popovers">
            <div class="arrow"></div>
              <h3 class="popover-title">Popover top</h3>
              <div class="popover-content">
                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
              </div>
            </div>
            <div class="popover right show popovers">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover right</h3>
            <div class="popover-content">
            <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
            </div>
            <div class="popover bottom show popovers">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover bottom</h3>
            <div class="popover-content">
            <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
            </div>
            <div class="popover left show popovers">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover left</h3>
            <div class="popover-content">
            <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Live demo -->
      <div class="col-md-12">
        <h3>
          Live demo
        </h3>
        <div class="table_example">
          <button class="btn btn-lg btn-danger pop_active" data-content="And here's some amazing content. It's very engaging. Right?" title="" data-toggle="popover" type="button" data-original-title="Popover title" data-trigger="cl">Click to toggle popover</button>
          <div id="popover709967" class="popover fade" role="tooltip">
            <div class="arrow"></div>
            <h3 class="popover-title">Popover title</h3>
            <div class="popover-content">And here's some amazing content. It's very engaging. Right?</div>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson7/live.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Four directions -->
      <div class="col-md-12">
        <h3>Four directions</h3>
        <div class="table_example">
          <button  style="margin-left:25%;" type="button" class="btn btn-default pop_active" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Popover on left
          </button>
          <button type="button" class="btn btn-default pop_active" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Popover on top
          </button>

          <button type="button" class="btn btn-default pop_active" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
          sagittis lacus vel augue laoreet rutrum faucibus.">
            Popover on bottom
          </button>

          <button type="button" class="btn btn-default pop_active" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Popover on right
          </button>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson7/directions.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Dismiss on next click -->
      <div class="col-md-12">
        <h3>
          Dismiss on next click
        </h3>
        <p>
          Use the
          <code>focus</code>
          trigger to dismiss popovers on the next click that the user makes.
        </p>
        <div class="table_example">
          <button type="button" class="btn btn-lg btn-danger popover-dismiss pop_active" data-toggle="popover" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</button>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson7/dismiss.php'); ?>
          </code>     
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson7/dismiss_js.php'); ?>
          </code>     
        </div>
      </div>


      <!-- Usage -->
      <div class="col-md-12">
        <h3>
          Usage
        </h3>
        <p>
          Enable popovers via JavaScript:
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson7/usage.php'); ?>
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
          <code>data-animation=""</code>
          .
        </p>
        <div class="table_example">    
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 100px;">Name</th>
                  <th style="width: 100px;">Type</th>
                  <th style="width: 50px;">Default</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>animation</td>
                  <td>boolean</td>
                  <td>true</td>
                  <td>Apply a CSS fade transition to the popover</td>
                </tr>
                <tr>
                  <td>container</td>
                  <td>string | false</td>
                  <td>false</td>
                  <td>
                  <p>
                  Appends the popover to a specific element. Example:
                  <code>container: 'body'</code>
                  . This option is particularly useful in that it allows you to position the popover in the flow of the document near the triggering element - which will prevent the popover from floating away from the triggering element during a window resize.
                  </p>
                  </td>
                </tr>
                <tr>
                  <td>content</td>
                  <td>string | function</td>
                  <td>''</td>
                  <td>
                  <p>
                  Default content value if
                  <code>data-content</code>
                  attribute isn't present.
                  </p>
                  <p>If a function is given, it will be called with 1 argument, which is the element that the popover is attached to.</p>
                  </td>
                </tr>
                <tr>
                  <td>delay</td>
                  <td>number | object</td>
                  <td>0</td>
                  <td>
                  <p>Delay showing and hiding the popover (ms) - does not apply to manual trigger type</p>
                  <p>If a number is supplied, delay is applied to both hide/show</p>
                  <p>
                  Object structure is:
                  <code>delay: { show: 500, hide: 100 }</code>
                  </p>
                  </td>
                </tr>
                <tr>
                  <td>html</td>
                  <td>boolean</td>
                  <td>false</td>
                  <td>
                  Insert HTML into the popover. If false, jQuery's
                  <code>text</code>
                  method will be used to insert content into the DOM. Use text if you're worried about XSS attacks.
                  </td>
                </tr>
                <tr>
                  <td>placement</td>
                  <td>string | function</td>
                  <td>'right'</td>
                  <td>
                  How to position the popover - top | bottom | left | right | auto.
                  <br>
                  When "auto" is specified, it will dynamically reorient the popover. For example, if placement is "auto left", the popover will display to the left when possible, otherwise it will display right.
                  </td>
                </tr>
                <tr>
                  <td>selector</td>
                  <td>string</td>
                  <td>false</td>
                  <td>
                  If a selector is provided, popover objects will be delegated to the specified targets. In practice, this is used to enable dynamic HTML content to have popovers added. See
                  <a href="https://github.com/twbs/bootstrap/issues/4215" target="_blank">this</a>
                  and
                  <a href="http://jsfiddle.net/fScua/"  target="_blank">an informative example</a>
                  .
                  </td>
                </tr>
                <tr>
                  <td>template</td>
                  <td>string</td>
                  <td>
                  <code>'&lt;div class="popover" role="tooltip"&gt;&lt;div class="arrow"&gt;&lt;/div&gt;&lt;h3 class="popover-title"&gt;&lt;/h3&gt;&lt;div class="popover-content"&gt;&lt;/div&gt;&lt;div&gt;'</code>
                  </td>
                  <td>
                  <p>Base HTML to use when creating the popover.</p>
                  <p>
                  The popover's
                  <code>title</code>
                  will be injected into the
                  <code>.popover-title</code>
                  .
                  </p>
                  <p>
                  The popover's
                  <code>content</code>
                  will be injected into the
                  <code>.popover-content</code>
                  .
                  </p>
                  <p>
                  <code>.arrow</code>
                  will become the popover's arrow.
                  </p>
                  <p>
                  The outermost wrapper element should have the
                  <code>.popover</code>
                  class.
                  </p>
                  </td>
                </tr>
                <tr>
                  <td>title</td>
                  <td>string | function</td>
                  <td>''</td>
                  <td>
                  Default title value if
                  <code>title</code>
                  attribute isn't present
                  </td>
                </tr>
                <tr>
                  <td>trigger</td>
                  <td>string</td>
                  <td>'click'</td>
                <td>How popover is triggered - click | hover | focus | manual. You may pass multiple triggers; separate them with a space.</td>
                </tr>
                <tr>
                  <td>viewport</td>
                  <td>string | object</td>
                  <td>{ selector: 'body', padding: 0 }</td>
                  <td>
                  <p>
                  Keeps the popover within the bounds of this element. Example:
                  <code>viewport: '#viewport'</code>
                  or
                  <code>{ selector: '#viewport', padding: 0 }</code>
                  </p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Methods -->
      <div class="col-md-12">
        <h3>Methods</h3>
        <h4>$().popover(options)</h4>
        <p>Initializes popovers for an element collection.</p>
        <h4>.popover('show')</h4>
        <p>Reveals an elements popover.</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson7/show.php'); ?>
          </code>
        </div>
        <h4>.popover('hide')</h4>
        <p>Hides an elements popover.</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson7/hide.php'); ?>
          </code>
        </div>
        <h4>.popover('toggle')</h4>
        <p>Toggles an elements popover.</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson7/toggle.php'); ?>
          </code>
        </div>
        <h4>.popover('destroy')</h4>
        <p>Hides and destroys an element's popover.</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson7/destroy.php'); ?>
          </code>
        </div>
      </div>

      <!-- Events -->
      <div class="col-md-12">
        <h3>
          Events
        </h3>
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
                <td>show.bs.popover</td>
                <td>
                This event fires immediately when the
                <code>show</code>
                instance method is called.
                </td>
                </tr>
                <tr>
                <td>shown.bs.popover</td>
                <td>This event is fired when the popover has been made visible to the user (will wait for CSS transitions to complete).</td>
                </tr>
                <tr>
                <td>hide.bs.popover</td>
                <td>
                This event is fired immediately when the
                <code>hide</code>
                instance method has been called.
                </td>
                </tr>
                <tr>
                <td>hidden.bs.popover</td>
                <td>This event is fired when the popover has finished being hidden from the user (will wait for CSS transitions to complete).</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson7/events.php'); ?>
          </code>     
        </div>
      </div>


    </div>

    <!-- lesson task 7-->
    <div class="task">
      <div class="task1">
        <div class="col-md-8">
          <h3>Popovers are great if you need / want to display some extra hidden content on click or hover.</h3>
          <p class="lead">Open our project folder we have been using the past few days</p>
          <ol>
            <li>Lets get right into our popovers, Start with a new div with a class of <code>container</code>, lets create one more div and give it a class of <code>popover_margin</code>, and lets add some margin to this div, <code>margin-top:100px</code> & a <code>margin-left:25%;</code>.</li>
            <li>Inside lets add 4 new buttons and set each type attribute to <code>button</code>, add a data-toggle attribute of <code>popover</code> to each button. Give them all a the classes of <code>btn btn-default</code>.</li>
            <li>Decide on where we want the popovers displayed, using data-placement attribute just as we did with our tooltips, we can set them to "top", "bottom", "right" & "left".  Add text between our open and close button tags, match the data-placement i.e. "Popover Left", "Popover Top".</li>
            <li>Before going any further we need to write 1 line of jquery to make our popovers work, just like we had to for tooltips.  You guessed it, it exactl the same as tooltip <code>$('').popover("hide");</code>.</li>
            <li>Again we need to decide on a class name we an give all our buttons that are popovers just as with tooltips i.e. "pop_active" then add this class to our jquery call. <code>$('.pop_active').popover("hide");</code>.</li>
            <li>Great now we can add some classes to our buttons, give them all the classes of <code>btn btn-default pop_active</code>, and finall add a data-content attribute to each button and add some dummy text i.e. <code>data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."</code>.</li>
            <li>Check out our sweet new popovers, easy enough to work with! Lets do one more before moving on, create another <code>clearfix</code> div below of our <code>popover_margin</code> div.</li>
            <li>Create a line break below our clearfix div to add a little space, then add another div below with a class of <code>col-md-12</code>.  Inside add another <code>button</code> with a type attribute of <code>button</code>.</li>
            <li>Time to add a few classes to make this one shine! add the classes of <code>btn btn-lg btn-danger btn-block popover-dismiss pop_active</code> to our button.  Set our data-toggle attribute to <code>popover</code>.</li>
            <li>Lets give it a data-placement attribute of <code>bottom</code>, and some text between our two button tags "Dismissible popover".</li>
            <li>Finally lets add the popover content, give our button two more data attributes the 1st is title have this equal <code>Dismissible popover</code> and our data-content attribute again with some more dummy text i.e. "And here's some amazing content. It's very engaging."</li>
          </ol>
          <p>Open this file in our browser to see our work!</p>
          <br>
          <a href="answers/lesson7.php" target="_blank" class="text-danger">Check out how our file looks!</a>
          <p>Learn more about <a href="http://getbootstrap.com/javascript/#popovers" target="_blank">Bootstrap Popovers</a></p>
          <div class="next1">
            <a href="#tab8" data-toggle="tab" class="btn btn-success btn-lg tabs"><i class="fa fa-child fa-2x"></i>Next Section, Bootstrap Alerts!<i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <a class="btn btn-danger btn-lg btn_task"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Popover</Strong> Task Before Moving On!</a>
      </div>
    </div>

    
  </article>
</div>