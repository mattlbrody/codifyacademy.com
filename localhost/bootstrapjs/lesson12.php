<div class="tab-pane" id="tab12">
  <article class="lesson12">

    <div class="lesson_title">
      <h4>Lesson 12</h4>
      <h1>Affix'n Elements with Bootstrap</h1>
    </div>    

    <!-- Affix -->
    <div id="#" class="#">
      <h2>Affix <small>affix.js</small></h2>
      <hr>

      <!-- Example -->
      <div class="col-md-12">
        <h3>
          Example
        </h3>
        <p>
          The subnavigation on the right is a live demo of the affix plugin.
        </p>
      </div>

      <!-- Usage -->
      <div class="col-md-12">
        <h3>
          Usage
        </h3>
        <p>
          Use the affix plugin via data attributes or manually with your own JavaScript.
          <strong class="text-danger">In both situations, you must provide CSS for the positioning and width of your affixed content.</strong>
        </p>
      </div>

      <!-- Positioning via CSS -->
      <div class="col-md-12">
        <h3>
          Positioning via CSS
        </h3>
        <p>
          The affix plugin toggles between three classes, each representing a particular state:
          <code>.affix</code>
          ,
          <code>.affix-top</code>
          , and
          <code>.affix-bottom</code>
          . You must provide the styles for these classes yourself (independent of this plugin) to handle the actual positions.
        </p>
        <p>Here's how the affix plugin works:</p>
        <ol>
          <li>
            To start, the plugin adds
            <code>.affix-top</code>
            to indicate the element is in its top-most position. At this point no CSS positioning is required.
          </li>
          <li>
            Scrolling past the element you want affixed should trigger the actual affixing. This is where
            <code>.affix</code>
            replaces
            <code>.affix-top</code>
            and sets
            <code>position: fixed;</code>
            (provided by Bootstrap's code CSS).
          </li>
          <li>
            If a bottom offset is defined, scrolling past that should replace
            <code>.affix</code>
            with
            <code>.affix-bottom</code>
            . Since offsets are optional, setting one requires you to set the appropriate CSS. In this case, add
            <code>position: absolute;</code>
            when necessary. The plugin uses the data attribute or JavaScript option to determine where to position the element from there.
          </li>
        </ol>
        <p>Follow the above steps to set your CSS for either of the usage options below.</p>
      </div>

      <!-- Via data attributes -->
      <div class="col-md-12">
        <h3>
          Via data attributes
        </h3>
        <p>
          To easily add affix behavior to any element, just add
          <code>data-spy="affix"</code>
          to the element you want to spy on. Use offsets to define when to toggle the pinning of an element.
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson12/data.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Via JavaScript -->
      <div class="col-md-12">
        <h3>
          Via JavaScript
        </h3>
        <p>
          Call the affix plugin via JavaScript:
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson12/javascript.php'); ?>
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
          <code>data-offset-top="200"</code>
          .
        </p>
        <div class="table_example">
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 100px;">Name</th>
                  <th style="width: 100px;">type</th>
                  <th style="width: 50px;">default</th>
                  <th>description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>offset</td>
                  <td>number | function | object</td>
                  <td>10</td>
                  <td>
                  Pixels to offset from screen when calculating position of scroll. If a single number is provided, the offset will be applied in both top and bottom directions. To provide a unique, bottom and top offset just provide an object
                  <code>offset: { top: 10 }</code>
                  or
                  <code>offset: { top: 10, bottom: 5 }</code>
                  . Use a function when you need to dynamically calculate an offset.
                  </td>
                </tr>
                <tr>
                  <td>target</td>
                  <td>selector | node | jQuery element</td>
                  <td>
                  the
                  <code>window</code>
                  object
                  </td>
                  <td>Specifies the target element of the affix.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Events -->
      <div class="col-md-12">
        <h3>
          Events
        </h3>
        <p>
          Bootstrap's affix class exposes a few events for hooking into affix functionality.
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
                  <td>affix.bs.affix</td>
                  <td>This event fires immediately before the element has been affixed.</td>
                </tr>
                <tr>
                  <td>affixed.bs.affix</td>
                  <td>This event is fired after the element has been affixed.</td>
                </tr>
                <tr>
                  <td>affix-top.bs.affix</td>
                  <td>This event fires immediately before the element has been affixed-top.</td>
                </tr>
                <tr>
                  <td>affixed-top.bs.affix</td>
                  <td>This event is fired after the element has been affixed-top.</td>
                </tr>
                <tr>
                  <td>affix-bottom.bs.affix</td>
                  <td>This event fires immediately before the element has been affixed-bottom.</td>
                </tr>
                <tr>
                  <td>affixed-bottom.bs.affix</td>
                  <td>This event is fired after the element has been affixed-bottom.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>


    </div>

    <!-- lesson task 12 -->
    <div class="task">
      <div class="task1">
        <div class="col-md-10">
          <h3>The final bootstrap js addition easy, Affix to html tags, using HTML5 & a little css3 fun.</h3>
          <p class="lead">For this one lets start a new <a href="http://www.initializr.com/" target="_blank"><i class="fa fa-html5"></i> boiler plate</a> project.</p>
          <ol>
            <li>To begin lets create a div and give it a class of <code>container</code>, inside add a <code>img</code> tag and add a img with a height of 300px; <a href="http://www.codifyacademy.com/bootstrapjs/answers/placeholder.php" target="_blank">Here is the one we are using</a>.</li>
            <li>Time to style our <code>img</code> tag so it is centered, add a margin of 0 to the top & button, and 20% to the left and right. to our img tag in our main.css.</li>
            <li>Next lets add 3 new divs below our container div, give the 3rd new div a class of <code>container</code>, ignore the other two above for the time being. Inside our new container add one more div with a class of <code>col-md-4 col-md-offset-4</code>.</li>
            <li>Inside lets add a <code>h1</code> tag with some text i.e. "Our Main Content!" and follow this with a few paragraph tags, and fill these with about 10 paragraphs worth of dummy text from <a href="http://www.lipsum.com/" target="_blank">Lorem Lipsum</a>.</li>
            <li>Good now that will give us room to scroll, which we kind of need for affixing...anyways lets go into our 1st of 3 divs we just made, assign the data-spy attribute and set it equal to <code>affix</code>.</li> 
            <li>Lets also offset this div when a user scrolls more then 50px, set the data-offset-top attribute to 50 <code>data-offset-top="50"</code>. Inside lets add a <code>h3</code> & <code>ul</code> tags.</li>
            <li>Add some text to our h3 tag i.e. "Sweet Affix'd List" and a class of <code>list-unstyled</code> to our ul tag, a nice bootstrap class!</li>
            <li>Move into the ul and lets add a 3 list items, add some text to each one as well i.e. "List Item One", "List Item Two".</li>
            <li>Lets animate our new affix div, attach a id to this div i.e. "affix1" and lets style this in our main.css, first set the <code>position</code> to fixed, <code>top</code> to 5px & <code>left</code> set to 25px.</li>
            <li>When a user scrolls down our affix class will become active so lets style it to see some solid affix action! Declare our id followed by the affix class in our main.css <code>#affix1.affix</code>, set our <code>top</code> to top: 125px.</li>
            <li>Set <code>left</code> to 175px, set the <code>z-index</code> property to 0, last give our <code>transition</code> property the values of 1s all ease-in-out, so our transition will happen over 1s and will cover all of the transitions.</li>
            <li>Great! First affix complete, lets move into our last lonely div and add the classes of <code>navbar navbar-default</code>, again we need <code>data-spy</code> set to affix, for this affix to work, and lets have it happen after 300px, since thats the size of our image, <code>data-offset-top-300</code>.</li>
            <li>Inside lets add a div with a class of <code>container</code>, inside this div, add two more divs, the 1st with a class of <code>navbar-header</code> & the 2nd the classes of <code>avbar-collapse collapse</code>.</li>
            <li>We should add a collapse button inside our navbar-header, add a <code>button</code> inside with a class of <code>navbar-toggle</code>. Set the data-toggle attribute to <code>toggle</code> & we can set our data-target attribute to <code>.navbar-collapse</code>. (matching our div with a class of <code>navbar-collapse</code>)</li>
            <li>Add 4 spans inside our button, the 1st with a class of <code>sr-only</code> and some text between our tags "Toggle navigation". The next 3 spans give a class of <code>icon-bar</code>, so we get a nice button when we collapse our menu.</li>
            <li>Below our button add a <code>a</code> tag and give it a class of <code>navbar-brand</code>, add some text between our tags "Project name".</li>
            <li>Moving into our navbar-collapse div, lets create a <code>ul</code> with a few classes of <code>nav navbar-nav navbar-right</code>.</li>
            <li>Finally add a few <code>li</code> tags and give our 1st ona class of active. Add some text for each link, "Link". Last we can give our navbar div a arbitrary class so we can style it a bit, give it a id of <code>affix2</code>.</li>
            <li>Into our main.css, first lets give a our <code>#affix2</code> a padding of 2% all around. Next lets call our id when it gets the class of scroll when a user scrolls past 300px that we set earlier. <code>#affix2.affix</code>.</li>
            <li>Time for a few properties and we will have some nice affix'n going on. First set the <code>top</code> to 0, our <code>width</code> to 100%, otherwise some funky stuff happens to it. Next set the <code>padding</code> to 0%, the <code>z-index</code> to 1 and our <code>transition</code> property to 0.5s all ease-in-out.</li>
          </ol>
          <p>Save & Open in our browser to see our excellent creation!</p>
          <br>
          <a href="answers/lesson12.php" target="_blank" class="text-danger">Check out how our new looks</a>
          <p>Learn more about <a href="http://getbootstrap.com/javascript/#affix" target="_blank">Bootstrap Affix'n Elements!</a></p>
          <p class="lead">Well Done! You have arrived at the end with a great knowledge of the bootstrap docs. As always we can check out the full documentation @ <a href="http://getbootstrap.com/" target="_blank">getbootstrap.com</a> & don't be afraid to Google bootstrap stuff, a lot of stuff out there!</p>
        </div>
      </div>
      <div class="col-md-12">
        <a class="btn btn-danger btn-lg btn_task"><i class="fa fa-terminal"></i> Complete The Final Bootstrap <Strong>Affix</Strong> Task!</a>
      </div>
    </div>

    
  </article>
</div>