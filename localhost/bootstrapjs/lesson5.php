<div class="tab-pane" id="tab5">
  <article class="lesson3">

    <div class="lesson_title">
      <h4>Lesson 5</h4>
      <h1>Sweet Usable Bootstrap Tabs!</h1>
    </div>    

    <!-- Togglable tabs -->
    <div id="#" class="#">
      <h2>Togglable tabs<small> tab.js</small></h2>
      <hr>

      <!-- Example tabs -->
      <div class="col-md-12">
        <h3>
          Example tabs
        </h3>
        <p>
          Add quick, dynamic tab functionality to transition through panes of local content, even via dropdown menus.
        </p>
        <div class="table_example">
          <ul id="myTab" class="nav nav-tabs" role="tablist">
            <li class="active">
            <a data-toggle="tab" role="tab" href="#home">Home</a>
            </li>
            <li>
            <a data-toggle="tab" role="tab" href="#profile">Profile</a>
            </li>
            <li class="dropdown">
              <a id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" href="#">
                Dropdown
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="myTabDrop1" role="menu">
                <li>
                  <a data-toggle="tab" role="tab" tabindex="-1" href="#dropdown1">@fat</a>
                </li>
                <li>
                  <a data-toggle="tab" role="tab" tabindex="-1" href="#dropdown2">@mdo</a>
                </li>
              </ul>
            </li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div id="home" class="tab-pane fade active in">
              <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
            </div>
            <div id="profile" class="tab-pane fade">
              <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
            </div>
            <div id="dropdown1" class="tab-pane fade">
              <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
            </div>
            <div id="dropdown2" class="tab-pane fade">
              <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Usage -->
      <div class="col-md-12">
        <h3>
          Usage
        </h3>
        <p>
          Enable tabbable tabs via JavaScript (each tab needs to be activated individually):
        </p>
        <div class="well well-sm">
          <code>
            <?php include('code/lesson5/usage_js.php'); ?>
          </code>
        </div>
        <p>You can activate individual tabs in several ways:</p>
        <div class="well well-sm">
          <code>
            <?php include('code/lesson5/usage_examples.php'); ?>
          </code>
        </div>
      </div>

      <!-- markup -->
      <div class="col-md-12">
        <h3>
          Markup
        </h3>
        <p>
          You can activate a tab or pill navigation without writing any JavaScript by simply specifying
          <code>data-toggle="tab"</code>
          or
          <code>data-toggle="pill"</code>
          on an element. Adding the
          <code>nav</code>
          and
          <code>nav-tabs</code>
          classes to the tab
          <code>ul</code>
          will apply the Bootstrap tab styling, while adding the
          <code>nav</code>
          and
          <code>nav-pills</code>
          classes will apply bootstrap pill styling.
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson5/markup.php'); ?>
          </code>     
        </div>
      </div>

      <!-- fade effect -->
      <div class="col-md-12">
        <h3>
          Fade Effects
        </h3>
        <p>
          To make tabs fade in, add
          <code>.fade</code>
          to each
          <code>.tab-pane</code>
          . The first tab pane must also have
          <code>.in</code>
          to properly fade in initial content.
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson5/fade.php'); ?>
          </code>     
        </div>
      </div>

      <!-- methods -->
      <div class="col-md-12">
        <h3>
          Methods
        </h3>
        <h4>$().tab</h4>
        <p>
          Activates a tab element and content container. Tab should have either a
          <code>data-target</code>
          or an
          <code>href</code>
          targeting a container node in the DOM.
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson5/methods.php'); ?>
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
            <td>show.bs.tab</td>
            <td>
            This event fires on tab show, but before the new tab has been shown. Use
            <code>event.target</code>
            and
            <code>event.relatedTarget</code>
            to target the active tab and the previous active tab (if available) respectively.
            </td>
            </tr>
            <tr>
            <td>shown.bs.tab</td>
            <td>
            This event fires on tab show after a tab has been shown. Use
            <code>event.target</code>
            and
            <code>event.relatedTarget</code>
            to target the active tab and the previous active tab (if available) respectively.
            </td>
            </tr>
            </tbody>
            </table>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson5/events.php'); ?>
          </code>     
        </div>
      </div>

    </div>

    <!-- lesson task 5-->
    <div class="task">
      <div class="task1">
        <div class="col-md-8">
          <h3>Tabs are a great way to display tons of info w.o wasting a ton of space</h3>
          <p class="lead">Start by Opening our project folder we have been using the past few days</p>
          <ol>
            <li>To begin lets create a new <code>container</code> div below everything - Inside lets add two new tags a <code>ul</code> & a <code>div</code>. To our ul add a class of <code>nav nav-tabs</code>, & a class of <code>tab-content</code> to our div.</li>
            <li>Inside our <code>ul</code> lets add a few links to link to our tab content, add 4 new <code>li</code> tags with a <code>a</code> tag inside each li tag. Give each anchor a data-toggle attribute equal to <code>"tab"</code>, set our 1st <code>li</code> to have a class of <code>active</code>.</li>
            <li>Moving into our div add 4 new <code>div</code> tags and give each a class of <code>tab-pane fade</code>.  In each div add a <code>p</code> tag, fill these tags using <a href="http://www.lipsum.com/" target="_blank">Lorem Ipsum</a>.</li>
            <li>We need to add id attributes to each div so we can link to them in our ul above.  Set our 1st div id to "home", our 2nd div id to "profile", the 3rd div id to "contact" & our last to "business".</li>
            <li>Now to connect these we set our <code>a href="#"</code> in our ul above. Our first should match our first div id i.e. <code>&lt;a href="#home" data-toggle"tab"&gt;</code>, add text between our anchor tags i.e. "Home" to name our link, do the same for the remaining 3 links setting our 2nd to <code>#profile</code>, our 3rd to <code>#contact</code> and our 4th should match our "#business" div.</li>
            <li>Finally we need to add 2 more classes to our <code>#home</code>, add the classes of <code>active</code> & <code>in</code> to display our first tab and content with in.</li>
          </ol>
          <p>Open this file in our browser to see what we just did!</p>
          <br>
          <a href="answers/lesson5.php" target="_blank" class="text-danger">Check out how our new file turned out!</a>
          <p>Learn more about Bootstrap <a href="http://getbootstrap.com/javascript/#tabs" target="_blank">Tabs</a> here to get more indepth with tabs.</p>
          <div class="next1">
            <a href="#tab6" data-toggle="tab" class="btn btn-success btn-lg tabs"><i class="fa fa-child fa-2x"></i>Next Section, Easy Bootstrap Tooltips!<i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <a class="btn btn-danger btn-lg btn_task"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Tabs</Strong> Task Before Moving On!</a>
      </div>
    </div>

    
  </article>
</div>