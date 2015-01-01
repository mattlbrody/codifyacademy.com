<div class="tab-pane" id="tab9">
  <article class="lesson9">

    <div class="lesson_title">
      <h4>Lesson 9</h4>
      <h1>Even More on Bootstrap Buttons</h1>
    </div>    

    <!-- Buttons -->
    <div id="#" class="#">
      <h2>Buttons <small>button.js</small></h2>
      <hr>

      <!-- examples -->
      <div class="col-md-12">
        <h2>
          Example uses
        </h2>
        <p>
          Do more with buttons. Control button states or create groups of buttons for more components like toolbars.
        </p>
      </div>
     
      <!-- Single toggle -->
      <div class="col-md-12">
        <h3>
          Single toggle
        </h3>
        <p>
          Add
          <code>data-toggle="button"</code>
          to activate toggling on a single button.
        </p>
        <div class="table_example">
          <button type="button" class="btn btn-primary" data-toggle="button">Single toggle</button>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/single.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Checkbox -->
      <div class="col-md-12">
        <h3>
          Checkbox
        </h3>
        <p>
          Add
          <code>data-toggle="buttons"</code>
          to a group of checkboxes for checkbox style toggling on btn-group.
        </p>
        <div class="table_example">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary active">
              <input type="checkbox" checked> Option 1 (pre-checked)
            </label>
            <label class="btn btn-primary">
              <input type="checkbox"> Option 2
            </label>
            <label class="btn btn-primary">
              <input type="checkbox"> Option 3
            </label>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/checkbox.php'); ?>
          </code>     
        </div>
        <div class="panel panel-warning">
          <div class="panel-heading">
            Pre-checked options need
            <code>.active</code>
          </div>
          <div class="panel-body">
            For pre-checked options, you must add the
            <code>.active</code>
            class to the input's
            <code>label</code>
            yourself.
          </div>
        </div>
      </div>

      <!-- Radio -->
      <div class="col-md-12">
        <h3>
          Radio
        </h3>
        <p>
          Add
          <code>data-toggle="buttons"</code>
          to a group of radio inputs for radio style toggling on btn-group
        </p>
        <div class="table_example">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary active">
              <input type="radio" name="options" id="option1" checked> Option 1 (preselected)
            </label>
            <label class="btn btn-primary">
              <input type="radio" name="options" id="option2"> Option 2
            </label>
            <label class="btn btn-primary">
              <input type="radio" name="options" id="option3"> Option 3
            </label>
          </div>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/radio.php'); ?>
          </code>     
        </div>
        <div class="panel panel-danger">
          <div class="panel-heading">
            Pre-checked options need
            <code>.active</code>
          </div>
          <div class="panel-body">
            For pre-checked options, you must add the
            <code>.active</code>
            class to the input's
            <code>label</code>
            yourself.
          </div>
        </div>
      </div>

      <!-- Usage -->
      <div class="col-md-12">
        <h3>
          Usage
        </h3>
        <p>
          Enable buttons via JavaScript:
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/usage.php'); ?>
          </code>     
        </div>
      </div>

      <!-- Markup -->
      <div class="col-md-12">
        <h3>
          Markup
        </h3>
        <p>
          Data attributes are integral to the button plugin. Check out the example code below for the various markup types.
        </p>
      </div>

      <!-- Methods -->
      <div class="col-md-12">
        <h3>Methods</h3>
        <!-- toggle -->
        <h4>$().button('toggle')</h4>
        <p>Toggles push state. Gives the button the appearance that it has been activated.</p>
        <div class="panel panel-info">
          <div class="panel-heading">Auto toggling</div>
          <div class="panel-body">
            You can enable auto toggling of a button by using the
            <code>data-toggle</code>
            attribute.
          </div>
        </div>
        <div class="table_example">
          <button class="btn btn-primary" type="button" data-toggle="button"> Loading state </button>
        </div>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/toggle.php'); ?>
          </code>     
        </div>
        <!-- loading -->
        <h4>$().button('toggle')</h4>
        <p>
          Sets button state to loading - disables button and swaps text to loading text. Loading text should be defined on the button element using the data attribute
          <code>data-loading-text</code>
          . 
        </p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/loading.php'); ?>
          </code>     
        </div>
        <!-- reset -->
        <h4>$().button('reset')</h4>
        <p>Resets button state - swaps text to original text.</p>
        <!-- loading -->
        <h4>$().button(string)</h4>
        <p>Resets button state - swaps text to any data defined text state.</p>
        <div class="well well-sm">    
          <code>
            <?php include('code/lesson9/string.php'); ?>
          </code>     
        </div>
      </div>


    </div>

    <!-- lesson task 9-->
    <div class="task">
      <div class="task1">
        <div class="col-md-8">
          <h3>Sweet, multiple states of buttons, very fun. Lets dive right into our <code>CODE</code>.</h3>
          <p class="lead">Open our project folder we have been using fovever it feels like</p>
          <ol>
            <li>Strat below everything we have done before with a div and give it a class of <code>container</code>, with 2 <code>row</code> divs inside of it.</li>
            <li>Inside our first row lets add 2 divs, the first with a class of <code>col-sm-12 col-md-6</code>, the second div should get a class of <code>col-sm-12 col-md-4</code>.</li>
            <li>In our 2nd row lets again add two more divs, the 1st with a class of <code>col-sm-6 col-md-6</code> & the 2nd with a class of <code>col-sm-6 col-md-8</code>.</li>
            <li>Lets get inside our first column div lets make a button that displays info on click, but 1st add a <code>h3</code>, <code>button</code> & <code>div</code> with a <code>p</code> tag inside.  Insert some text into our h3 i.e. "Some Sweet info is hidden below, check it out".</li>
            <li>Add some classes to out button <code>btn btn-info</code>, set the data-toggle attribute to <code>button</code> and add some text between our button tags "Hidden info".</li>
            <li>Give our div with a p tag inside a class of <code>hidden</code> to hide our content, and fill our <code>p</code> tag with some dummy text from <a href="http://www.lipsum.com/" target="_blank">Lorem Lipsum</a>.</li>
            <li>Lets write a litel script to make our info display when a user clicks our button inside our main.js, lets start by first finding a arbitrary class "btn_reveal", we will add to our button in a minute. <code>$(".btn_reveal")</code>.</li>
            <li>Next we want a on click function to find our hidden div and remove the class to reveal the content! <code>.on('click', function(){});</code>. Inside our click function lets start with "this" <code>$(this)</code>.</li>
            <li>We need to get the closest div to this and this find our hidden div. <code>.closest('div').find('.hidden')</code>. Finally we can use jQuery removeClass to get rid of our hidden class and reveal our conent. <code>.removeClass('hidden')</code>.</li>
            <li>Last we need to add the class of <code>btn_reveal</code> to our button inside our <code>col-sm-12 col-md-6</code> div, and now it will work!</li>
            <li>Moving on to our <code>col-md-4</code> div lets make a checkbox group that can have all items selected at once. Start with a <code>h3</code> tag inside our div with some text i.e. "Things You Enjoy".</li>
            <li>Next add a div below our h3 with a class of <code>btn-group</code> set our data-toggle to equal <code>button</code> to give the impression our buttons are clicked!, add 3 <code>labels</code> inside our btn-group div, with a <code>input</code> inside each.</li>
            <li>To our 1st label give it a class of <code>btn btn-primary active</code>, for our 2nd label give a class of <code>btn btn-primary</code> and our third label a class of <code>btn btn-primary</code>.</li>
            <li>Give our inputs a type of <code>checkbox</code> and add some text after each input i.e. "Beaches", "Mountains", "Cities", and check it out our selectable btn-group!</li>
            <li>On to our 2nd row lets go inside our <code>col-md-6</code> div and make a radio btn-group so we can only choose 1 option at a time, First add a <code>h3</code> tag with some text i.e. "Favorite Fruit".</li>
            <li>Again we need to create a <code>btn-group</code> div, with 3 <code>labels</code> inside, all with 1 <code>input</code> inside.  Also add a data-toggle attribute of <code>button</code> to our btn-group.</li>
            <li>For our 1st label add the classes of <code>btn btn-danger active</code> and give our input a type equal to <code>radio</code> and some text after our input i.e. "Apples", to our 2nd label add the classes of <code>btn btn-warning active</code> and give our input a type equal to <code>radio</code> and again text after our input i.e. "Oranges".</li>
            <li>To our last label lets add the class of <code>btn btn-primary</code> and set our input a type of <code>radio</code> and some text after our input i.e. "Blueberries". Phew! Got through that, lets check it out!</li>
          </ol>
          <p>Open this file in our browser to see our new buttons!</p>
          <br>
          <a href="answers/lesson9.php" target="_blank" class="text-danger">This is how our new file came out</a>
          <p>Check out <a href="http://getbootstrap.com/javascript/#buttons" target="_blank">More on Bootstrap Buttons Here!</a></p>
          <div class="next1">
            <a href="#tab10" data-toggle="tab" class="btn btn-success btn-lg tabs"><i class="fa fa-child fa-2x"></i>Next Section Up, Working with Collapsible Bootstrap<i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <a class="btn btn-danger btn-lg btn_task"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Button</Strong> Task Before Moving On!</a>
      </div>
    </div>

    
  </article>
</div>