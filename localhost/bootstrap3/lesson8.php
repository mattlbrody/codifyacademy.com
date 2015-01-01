<div class="tab-pane" id="tab8">
  <article class="lesson8">

    <div class="lesson_title">
      <h4>Lesson 8</h4>
      <h1>Including Labels & Badges</h1>
    </div>

    <!-- labels -->
    <div class="labels">
      <h2>Labels</h2>
      <hr>

      <!-- default -->
      <div class="col-md-12">
        <h3>
          Default Labels
        </h3>
        <p>
          
        </p>
        <div class="table_example">
          <h1>Example heading <span class="label label-default">New</span></h1>
          <h2 class="lowercase">Example heading <span class="label label-default">New</span></h2>
          <h3>Example heading <span class="label label-default">New</span></h3>
          <h4>Example heading <span class="label label-default">New</span></h4>
          <h5>Example heading <span class="label label-default">New</span></h5>
          <h6>Example heading <span class="label label-default">New</span></h6>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson8/label_default.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Available variations -->
      <div class="col-md-12">
        <h3>
          Available Variations
        </h3>
        <p>
          Add any of the below mentioned modifier classes to change the appearance of a label.
        </p>
        <div class="table_example">
          <span class="label label-default">Default</span>
          <span class="label label-primary">Primary</span>
          <span class="label label-success">Success</span>
          <span class="label label-info">Info</span>
          <span class="label label-warning">Warning</span>
          <span class="label label-danger">Danger</span>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson8/label_variations.php'); ?>
          </code>     
        </div>
      </div>


    </div>

    <!-- badges -->
    <div class="badges">
      <h2>Badges</h2>
      <p class="lead">
        Easily highlight new or unread items by adding a
        <code>&lt;span class="badge"&gt;</code>
        to links, Bootstrap navs, and more.
      </p>
      <hr>

      <!-- basic -->
      <div class="col-md-12">
        <h3>
          Basic Example
        </h3>
        <div class="table_example">
          <a href="#">Inbox <span class="badge">42</span></a>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson8/badge_default.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Adapts to active nav states -->
      <div class="col-md-12">
        <h3>
          Active nav states & Stacked
        </h3>
        <p>
          Built-in styles are included for placing badges in active states in pill navigations.
        </p>
        <div class="table_example">
          <ul class="nav nav-pills">
            <li class="active">
              <a href="#">
                Home
                <span class="badge">42</span>
              </a>
            </li>
            <li>
              <a href="#">Profile</a>
            </li>
            <li>
              <a href="#">
                Messages
                <span class="badge">3</span>
              </a>
            </li>
          </ul>
          <br>
          <ul class="nav nav-pills nav-stacked" style="max-width: 260px;">
            <li class="active">
              <a href="#">
                <span class="badge pull-right">42</span>
                Home
              </a>
            </li>
            <li>
              <a href="#">Profile</a>
            </li>
            <li>
              <a href="#">
                <span class="badge pull-right">3</span>
                Messages
              </a>
            </li>
          </ul>
          <br>
          <button class="btn btn-primary" type="button">
          Messages
          <span class="badge">4</span>
          </button>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson8/badge_active.php'); ?>
          </code>     
        </div>
      </div>


    </div>


    <!-- lesson task -->
    <div class="task">
      <div class="task1">
        <div class="col-md-8">
          <h3>Lets Jump right into writing some <code>CODE</code> to make some labels & badges.</h3>
          <p class="lead">Open our project folder we have been using the past few days</p>
          <ol>
            <li>Lets start by creating a new div with class of <code>container-fluid</code>.</li>
            <li>Add another div with a class of <code>row</code> & a 3rd div inside the row with a class of <code>col-xs-6 col-md-8</code>.</li>
            <li>Lets add an <code>h1</code> with the text of Example Heading 1 add a space next to the text & add a <code>span</code> tag.</li>
            <li>Give this span a class of <code>label label-default</code> and a text of Default Label</li>
            <li>Add an <code>h2</code> below our <code>h1</code> with the text of Example Heading 2 add a space next to the text & add a <code>span</code> tag.</li>
            <li>Attach a class of <code>label label-primary</code> to this span and a text of Primary Label</li>
            <li>Lets add an <code>h3</code> tag below our <code>h2</code> with the text of Example Heading 3 add a space next to the text & add a <code>span</code> tag.</li>
            <li>Give this span a class of <code>label label-primary</code> and a text of Primary Label.</li>
            <li>Below our header tags lets make 2 <code>a</code> tags with a text of the 1st as Inbox and 2nd as Messages.</li>
            <li>Add 1 space next to our text inside our anchors and create a span in each, with a class of <code>badge</code> & any number between each of the open and close span tags.</li>
            <li>Sweet little badges we just made, Lets finish with a stacked navigation.</li>
            <li>Add 2 <code>&lt;br&gt;</code> to add a little space between our elements. Next create a <code>ul</code> with a class of <code>nav nav-pills nav-stacked</code>.</li>
            <li>Inside lets add 2 <code>li</code> with <code>a</code> tags inside each, so we can link them if we wanted to.</li>
            <li>Set our 1st <code>li</code> to have a class of <code>active</code>. Add a span in each <code>a</code> with a class of <code>badge pull-right</code> and a number before the closing span tag.</li>
            <li>Finally Label ou Nav items, on the next line after each span, designate names i.e. Home, Profile, Email, Contacts.</li>
          </ol>
          <p>Open this file in our browser to see what we just did!</p>
          <br>
          <a href="answers/lesson8.php" target="_blank" class="text-danger">Check out how our new file should look</a>
          <p>EXCELLENT!!! We just built some bootstrap sweet labels & badges, those will come in handy down the road!</p>
          <p>Check out <a href="http://getbootstrap.com/components/#labels" target="_blank">Bootstrap Labels</a> & <a href="http://getbootstrap.com/components/#badges" target="_blank">Bootstrap Badges</a> to learn even more!</p>
          <div class="next1">
            <a href="#tab9" data-toggle="tab" class="btn btn-default btn-lg tabs"><i class="fa fa-child fa-2x"></i>Next section up, Bootstrap ALERTS & Progressbars! <i class="fa fa-2x fa-child"></i></a>
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