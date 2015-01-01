<?php require_once('header.php') ?>

  <body>
    <div id="course" class="">
      <div class="">

        <!-- Side bar Course Content -->
    
        <div class="sidebar">
          <!-- Course Logo -->
          <div class="primary_logo">
            <a href="http://getbootstrap.com/javascript/" target="_blank">
              <strong><h3>Learn to Code</h3></strong>
              <h2>Twitter Bootstrap Javascript</h2>
            </a>
          </div> 
          <!-- course navigation -->
          <nav>
            <ul class="course_materials">

              <!-- Lesson 1 - Bootstrap Javascript Overview - Sidebar Link -->
              <li class="">
                <a href="#tab1" data-toggle="tab" class="tabs">
                  <strong>Lesson 1</strong>
                  <h4>Bootstrap Javascript Overview</h4>
                </a>
              </li>

              <!-- Lesson 2 - Using Bootstrap Javascript Modals - Sidebar Link -->
              <li class="">
                <a href="#tab2" data-toggle="tab" class="tabs">
                  <strong>Lesson 2</strong>
                  <h4>Using Bootstrap Javascript Modals</h4>
                </a>
              </li>

              <!-- Lesson 3 - Bootstrap's Dropdown.js - Sidebar Link -->
              <li class="">
                <a href="#tab3" data-toggle="tab" class="tabs">
                  <strong>Lesson 3</strong>
                  <h4>Bootstrap's Dropdown.js</h4>
                </a>
              </li>



              <!-- Lesson 4 - Scrollspy'N with Twitter Bootstrap - Sidebar Link -->
              <li class="">
                <a href="#tab4" data-toggle="tab" class="tabs">
                  <strong>Lesson 4</strong>
                  <h4>Scrollspy'N with Twitter Bootstrap</h4>
                </a>
              </li>

              <!-- Lesson 5 - Sweet Usable Bootstrap Tabs! - Sidebar Link -->
              <li class="">
                <a href="#tab5" data-toggle="tab" class="tabs">
                  <strong>Lesson 5</strong>
                  <h4>Sweet Usable Bootstrap Tabs!</h4>
                </a>
              </li>

              <!-- Lesson 6 - Understanding the use of Tooltips! - Sidebar Link -->
              <li class="">
                <a href="#tab6" data-toggle="tab" class="tabs">
                  <strong>Lesson 6</strong>
                  <h4>Understanding the use of Tooltips!</h4>
                </a>
              </li>
              <!-- Lesson 7 - Adding Bootstrap.js Popovers - Sidebar Link -->
              <li class="">
                <a href="#tab7" data-toggle="tab" class="tabs">
                  <strong>Lesson 7</strong>
                  <h4>Adding Bootstrap.js Popovers</h4>
                </a>
              </li>
              <!-- Lesson 8 - Messing with more Bootstrap Alerts - Sidebar Link -->
              <li class="">
                <a href="#tab8" data-toggle="tab" class="tabs">
                  <strong>Lesson 8</strong>
                  <h4>Messing with more Bootstrap Alerts</h4>
                </a>
              </li>
              <!-- Lesson 9 - Even More on Bootstrap Buttons - Sidebar Link -->
              <li class="">
                <a href="#tab9" data-toggle="tab" class="tabs">
                  <strong>Lesson 9</strong>
                  <h4>Even More on Bootstrap Buttons</h4>
                </a>
              </li>
              <!-- Lesson 10 - Working with collapsible Bootstrap groups - Sidebar Link -->
              <li class="">
                <a href="#tab10" data-toggle="tab" class="tabs">
                  <strong>Lesson 10</strong>
                  <h4>Working Collapsible Bootstrap Groups</h4>
                </a>
              </li>
              <!-- Lesson 11- The Most Desired Twitter Carousel - Sidebar Link -->
              <li class="">
                <a href="#tab11" data-toggle="tab" class="tabs">
                  <strong>Lesson 11</strong>
                  <h4>The Most Desired Twitter Carousel</h4>
                </a>
              </li>
              <!-- Lesson 12 - Affix'n elements with Bootstrap - Sidebar Link -->
              <li class="">
                <a href="#tab12" data-toggle="tab" class="tabs">
                  <strong>Lesson 12</strong>
                  <h4>Affix'n Elements with Bootstrap</h4>
                </a>
              </li>
               
            </ul>
          </nav> 
        </div> <!-- /sidebar -->

        
        <div class="">
          <div class="main_content">
            <!-- Main Content Tabs -->
            <div class="tab-content">
              <!-- Course Overview -->
              <div class="tab-pane active" id="opening_tab">

                <div class="main">
                  <header class="header center">
                    <h1>Coding with Twitter Bootstrap 3</h1>
                    <h3>Front End CSS & Javascript Framework</h3>
                  </header>
                </div>

                <div class="course_overview col-md-6">
                  <ol class="course_overview_lessons">
                    <li><a href="#tab1" data-toggle="tab" title="Bootstrap Javascript Overview" class="tabs">Bootstrap Javascript Overview</a></li>
                    <li><a href="#tab2" data-toggle="tab" title="Using Bootstrap Javascript Modals" class="tabs">Using Bootstrap Javascript Modals</a></li>
                    <li><a href="#tab3" data-toggle="tab" title="Bootstrap's Dropdown.js" class="tabs">Bootstrap's Dropdown.js</a></li>
                    <li><a href="#tab4" data-toggle="tab" title="Scrollspy'N with Twitter Bootstrap" class="tabs">Scrollspy'N with Twitter Bootstrap</a></li>
                    <li><a href="#tab5" data-toggle="tab" title="Sweet Usable Bootstrap Tabs!" class="tabs">Sweet Usable Bootstrap Tabs!</a></li>
                    <li><a href="#tab6" data-toggle="tab" title="Understanding the use of Tooltips!" class="tabs">Understanding the use of Tooltips!</a></li>              
                  </ol>
                </div>

                <div class="course_overview col-md-6">
                  <ol class="tabs course_overview_lessons course_overview_lessons_2">                  
                    <li><a href="#tab7" data-toggle="tab" title="Adding Bootstrap.js Popovers" class="tabs">Adding Bootstrap.js Popovers</a></li>
                    <li><a href="#tab8" data-toggle="tab" title="Messing with more Bootstrap Alerts" class="tabs">Messing with more Bootstrap Alerts</a></li>
                    <li><a href="#tab9" data-toggle="tab" title="Even More on Bootstrap Buttons" class="tabs">Even More on Bootstrap Buttons</a></li>
                    <li><a href="#tab10" data-toggle="tab" title="Working with collapsible Bootstrap groups" class="tabs tab_circle">Working Collapsible Bootstrap Groups</a></li>
                    <li><a href="#tab11" data-toggle="tab" title="The Most Desired Twitter Carousel" class="tabs tab_circle">The Most Desired Twitter Carousel</a></li>
                    <li><a href="#tab12" data-toggle="tab" title="Affix'n elements with Bootstrap" class="tabs tab_circle">Affix'n Elements with Bootstrap</a></li>
                  </ol>
                </div>

                <!-- Get started Now -->
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                    <a href="#tab1" class="start_button btn btn-lg btn-primary btn-group-justified" data-toggle="tab">
                      Get Started with Bootstrap Now
                    </a>
                  </div>
                </div>

              </div> <!-- /Course Overview -->

              <!-- tab 1 - Content - Bootstrap Javascript Overview -->
              <?php include('lesson1.php');?>
              
              <!-- tab 2 - Content - Using Bootstrap Javascript Modals -->
              <?php include('lesson2.php');?>

              <!-- tab 3 - Content - Bootstrap's Dropdown.js -->
              <?php include('lesson3.php');?>
              
              <!-- tab 4 - Content - Scrollspy'N with Twitter Bootstrap -->
              <?php include('lesson4.php');?>
              
              <!-- tab 5 - Content - Sweet Usable Bootstrap Tabs! -->
              <?php include('lesson5.php');?>
              
              <!-- tab 6 - Content - Understanding the use of Tooltips! -->
              <?php include('lesson6.php');?>
              
              <!-- tab 7 - Content - Adding Bootstrap.js Popovers  -->
              <?php include('lesson7.php');?>
              
              <!-- tab 8 - Content - Messing with more Bootstrap Alerts -->
              <?php include('lesson8.php');?>
              
              <!-- tab 9 - Content - Even More on Bootstrap Buttons -->
              <?php include('lesson9.php');?>
              
              <!-- tab 10 - Content - Working with collapsible Bootstrap groups  -->
              <?php include('lesson10.php');?>
              
              <!-- tab 11 - Content - The Most Desired Twitter Carousel -->
              <?php include('lesson11.php');?>

              <!-- tab 12 - Content - Affix'n elements with Bootstrap -->
              <?php include('lesson12.php');?>

            </div> <!-- /Main Content Tabs -->
          </div>
        </div> <!-- /col-sm-9 col-md-9 col-lg-9 -->
<?php require_once('footer.php') ?>