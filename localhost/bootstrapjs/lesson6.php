<div class="tab-pane" id="tab6">
  <article class="lesson6">

    <div class="lesson_title">
      <h4>Lesson 6</h4>
      <h1>Understanding the use of Tooltips!</h1>
    </div>    

    <!-- Tooltips -->
    <div id="#" class="#">
      <h2>Tooltips <small>tooltip.js</small></h2>
      <hr>

      <!-- Examples -->
      <div class="col-md-12">
        <h3>
          Examples
        </h3>
        <p>
          Inspired by the excellent jQuery.tipsy plugin written by Jason Frame; Tooltips are an updated version, which don't rely on images, use CSS3 for animations, and data-attributes for local title storage.
        </p>
        <p>Hover over the links below to see tooltips:</p>
        <div class="table_example">
          <p class="muted" style="margin-bottom: 0;">
          Tight pants next level keffiyeh
          <a class="tooltips" title="" data-toggle="tooltip" href="#" data-original-title="Default tooltip">you probably</a>
          haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel
          <a class="tooltips" title="" data-toggle="tooltip" href="#" data-original-title="Another tooltip">have a</a>
          terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan
          <a class="tooltips" title="" data-toggle="tooltip" href="#" data-original-title="Another one here too">whatever keytar</a>
          , scenester farm-to-table banksy Austin
          <a class="tooltips" title="" data-toggle="tooltip" href="#" data-original-title="The last tip!">twitter handle</a>
          freegan cred raw denim single-origin coffee viral.
          </p>
        </div>
      </div>

      <!-- Four Tooltip Directions -->
      <div class="col-md-12">
        <h3>
          Four Tooltip Directions
        </h3>
        <div class="table_example">
          <button style="margin-left:25%;" type="button" class="btn btn-default tooltips" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
          <button type="button" class="btn btn-default tooltips" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
          <button type="button" class="btn btn-default tooltips" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
          <button type="button" class="btn btn-default tooltips" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson6/directions.php'); ?>
          </code>     
        </div>
        <div class="panel panel-success">
          <div class="panel-heading">Requires Opt-in functionality</div>
          <div class="panel-body">
            For performance reasons, the Tooltip and Popover data-apis are opt-in, meaning
            <strong>you must initialize them yourself</strong>
            <br>
            Include the script below if we want to use tooltips!
          </div>
        </div>
        <div class="well well-sm">
          <code>
            <?php include('code/lesson6/required.php'); ?>
          </code>
        </div>
      </div>

      <!-- markup -->
      <div class="col-md-12">
        <h3>Markup</h3>
        <p>
          The required markup for a tooltip is only a
          <code>data</code>
          attribute and
          <code>title</code>
          on the HTML element you wish to have a tooltip. The generated markup of a tooltip is rather simple, though it does require a position (by default, set to
          <code>top</code>
          by the plugin).
        </p>
        <div class="table_example">
          <a class="btn btn-danger tooltips" href="#" data-toggle="tooltip" title="Some tooltip text!">Hover over me</a> 
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson6/markup.php'); ?>
          </code>     
        </div>
      </div>

      <!-- options -->
      <div class="col-md-12">
        <h3>Options</h3>
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
              <td>Apply a CSS fade transition to the tooltip</td>
              </tr>
              <tr>
              <td>container</td>
              <td>string | false</td>
              <td>false</td>
              <td>
              <p>
              Appends the tooltip to a specific element. Example:
              <code>container: 'body'</code>
              . This option is particularly useful in that it allows you to position the tooltip in the flow of the document near the triggering element - which will prevent the tooltip from floating away from the triggering element during a window resize.
              </p>
              </td>
              </tr>
              <tr>
              <td>delay</td>
              <td>number | object</td>
              <td>0</td>
              <td>
              <p>Delay showing and hiding the tooltip (ms) - does not apply to manual trigger type</p>
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
              Insert HTML into the tooltip. If false, jQuery's
              <code>text</code>
              method will be used to insert content into the DOM. Use text if you're worried about XSS attacks.
              </td>
              </tr>
              <tr>
              <td>placement</td>
              <td>string | function</td>
              <td>'top'</td>
              <td>
              How to position the tooltip - top | bottom | left | right | auto.
              <br>
              When "auto" is specified, it will dynamically reorient the tooltip. For example, if placement is "auto left", the tooltip will display to the left when possible, otherwise it will display right.
              </td>
              </tr>
              <tr>
              <td>selector</td>
              <td>string</td>
              <td>false</td>
              <td>
              If a selector is provided, tooltip objects will be delegated to the specified targets. In practice, this is used to enable dynamic HTML content to have tooltips added. See
              <a href="https://github.com/twbs/bootstrap/issues/4215" target="_blank">this</a>
              and
              <a href="http://jsfiddle.net/fScua/" target="_blank">an informative example</a>
              .
              </td>
              </tr>
              <tr>
              <td>template</td>
              <td>string</td>
              <td>
              <code>'&lt;div class="example tooltip" role="tooltip"&gt;&lt;div class="tooltip-arrow"&gt;&lt;/div&gt;&lt;div class="tooltip-inner"&gt;&lt;/div&gt;&lt;/div&gt;'</code>
              </td>
              <td>
              <p>Base HTML to use when creating the tooltip.</p>
              <p>
              The tooltip's
              <code>title</code>
              will be injected into the
              <code>.tooltip-inner</code>
              .
              </p>
              <p>
              <code>.tooltip-arrow</code>
              will become the tooltip's arrow.
              </p>
              <p>
              The outermost wrapper element should have the
              <code>.tooltip</code>
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
              <td>'hover focus'</td>
              <td>How tooltip is triggered - click | hover | focus | manual. You may pass multiple triggers; separate them with a space.</td>
              </tr>
              <tr>
              <td>viewport</td>
              <td>string | object</td>
              <td>{ selector: 'body', padding: 0 }</td>
              <td>
              <p>
              Keeps the tooltip within the bounds of this element. Example:
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

      <!-- methods -->
      <div class="col-md-12">
        <h3>Methods</h3>
        <h4>$().tooltip(options)</h4>
        <p>Attaches a tooltip handler to an element collection.</p>
        <h4>.tooltip('show')</h4>
        <p>Reveals an element's tooltip.</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson6/show.php'); ?>
          </code>     
        </div>
        <h4>.tooltip('hide')</h4>
        <p>Hides an element's tooltip.</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson6/hide.php'); ?>
          </code>     
        </div>
        <h4>.tooltip('toggle')</h4>
        <p>Toggles an element's tooltip..</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson6/toggle.php'); ?>
          </code>     
        </div>
        <h4>.tooltip('destroy')</h4>
        <p>Hides and destroys an element's tooltip.</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson6/destroy.php'); ?>
          </code>     
        </div>
      </div>

      <!-- events -->
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
            <td>show.bs.tooltip</td>
            <td>
            This event fires immediately when the
            <code>show</code>
            instance method is called.
            </td>
            </tr>
            <tr>
            <td>shown.bs.tooltip</td>
            <td>This event is fired when the tooltip has been made visible to the user (will wait for CSS transitions to complete).</td>
            </tr>
            <tr>
            <td>hide.bs.tooltip</td>
            <td>
            This event is fired immediately when the
            <code>hide</code>
            instance method has been called.
            </td>
            </tr>
            <tr>
            <td>hidden.bs.tooltip</td>
            <td>This event is fired when the tooltip has finished being hidden from the user (will wait for CSS transitions to complete).</td>
            </tr>
            </tbody>
            </table>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson6/events.php'); ?>
          </code>     
        </div>
      </div>


    </div>

    <!-- lesson task 6-->
    <div class="task">
      <div class="task1">
        <div class="col-md-8">
          <h3>Tooltips are a great way to add small bits of information to links.</h3>
          <p class="lead">Open our project folder we have been using the past few days</p>
          <ol>
            <li>Lets Get right into making some tooltips. Begin with a new <code>container</code> div, inside lets create 2 new <code>buttons</code> give them both a type attribute of <code>button</code>. Give our 1st button a class of <code>btn btn-default</code> & our 2nd a class of <code>btn btn-primary</code>.</li>
            <li>Next lets give both buttons a data-toggle attribute and set it equal to <code>tooltip</code>. Add a data-placement attribute to each, the 1st set to <code>bottom</code> & the second to <code>left</code>.</li>
            <li>Time to add text to our tooltip, we need to add a title attribute to our buttons to do this i.e. <code>title="Tooltip Left"</code> & <code>title="Tooltip Bottom"</code>.</li>
            <li>Now we can name our buttons, between the open and clsoe tags add some text i.e. "Tooltip on bottom" & "Tooltip on Left" one to each button accordingly.  To our 2nd button lets add one more attribute, the data-trigger attribute and set it equal to equal <code>focus</code>, so our sencond button's tooltip will only active when we focus on our button.</li>
            <li>Finally we need to add a little javascript to make our Bootstrap Tooltips work, so inside our personal js file i.e. "main.js", "scripts.js" start with a <code>document to ready function</code>, and inside lets add the necessary code <code>$('').tooltip('hide');</code>.</li>
            <li>Lets decide on a class name we can attach to each tooltip so our jquery code will work, i.e. "tooltips".  Once we decide add it to our jquery call i.e. $(".tooltips"). Then we need to add this class to each button that we have a tooltip attached too.</li>
            <li>Nice, Got through our first tooltips! lets add a div below our 2nd button and give it a class of <code>clearfix</code>, below this div add a line break <code>&lt;br&gt;</code> to add a little space.</li>
            <li>Now its time to make a button group with tooltips, start with a new div below our line break and give it a class of <code>btn-group</code>, inside create 4 new buttons and set each type equal to <code>button</code>.</li>
            <li>Add some bootstrap classes next, to our first add <code>btn btn-primary tooltips</code>, to our second add <code>btn-info tooltips</code>, to our third add <code>btn-warning tooltips</code> & to our forth button add a class of <code>btn-danger tooltips</code>.</li>
            <li>Set each button's data-toggle attribute equal to <code>tooltip</code>, then add <code>data-placement</code> to each button, the 1st set it to <code>top</code>, the 2nd set it to <code>left</code>, the 3rd set it to <code>right</code> & the 4th set it to <code>bottom</code>.</li>
            <li>Give a title attribute to each, and set it to equal the data-placement attribute i.e. <code>title="Tooltip on Top"</code>, <code>title="Tooltip on Right"</code> and name each button between the open and close tag with the same text.</li>
            <li>Pretty Nifty Button Group! lets add another div with a class of <code>clearfix</code> and add another line break below this. Let finish with one more tooltip. Create a new div below our line break and give it a class of <code>col-md-12</code>.</li>
            <li>Inside add another <code>button</code> and set the type to equal <code>button</code>, again add the bootstrap classes <code>btn btn-success btn-block tooltips</code> to our button. Set the data-toggle attribute to <code>tooltip</code>, also add a data-placement of <code>top</code>.</li>
            <li>Lets give our button a title attribute <code>Tooltip Top</code> and again add the same text between our open and close button tags to name our button.</li>
            <li>Lastly, lets try out one more data-attribute - the delay attribute, try setting the delay-attribute of our button to <code>500</code> this will display and hide our tooltip on a 500ms timeframe!</li>
          </ol>
          <p>Save it & Open this file in our browser to see our new tooltips!</p>
          <br>
          <a href="answers/lesson6.php" target="_blank" class="text-danger">Check out how our file turned out!</a>
          <p>Learn more about <a href="http://getbootstrap.com/javascript/#tooltips" target="_blank">Bootstrap Tooltips</a> here.</p>
          <div class="next1">
            <a href="#tab7" data-toggle="tab" class="btn btn-success btn-lg tabs"><i class="fa fa-child fa-2x"></i>Next Section, Using Bootstrap Popovers<i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <a class="btn btn-danger btn-lg btn_task"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Tooltip</Strong> Task Before Moving On!</a>
      </div>
    </div>

    
  </article>
</div>