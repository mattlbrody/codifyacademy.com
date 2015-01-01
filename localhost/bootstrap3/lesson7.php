<div class="tab-pane" id="tab7">
  <article class="lesson7">

    <div class="lesson_title">
      <h4>Lesson 7</h4>
      <h1>Navbars, Breadcrumbs and Pagination</h1>
    </div>

    <!-- Navs -->
   	<div class="navs">
   		<h2>Navs</h2>
   		<p class="lead">
		Navs available in Bootstrap have shared markup, starting with the base
		<code>.nav</code>
		class, as well as shared states. Swap modifier classes to switch between each style.
		</p>
   		<hr>
   		<!-- tabs -->
	    <div class="col-md-12">
	    	<h3>Tabs</h3>
	    	<p>
	    		Note the
				<code>.nav-tabs</code>
				class requires the
				<code>.nav</code>
				base class.
			</p>
	    	<div class="table_example">
				<ul class="nav nav-tabs" role="tablist">
				  <li class="active"><a href="#">Home</a></li>
				  <li><a href="#">Profile</a></li>
				  <li><a href="#">Messages</a></li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/tab.php'); ?>
				</code>			
			</div>
	    </div>

	    <!-- Pills -->
	    <div class="col-md-12">
	    	<h3>Pills</h3>
	    	<p>
	    		Take that same HTML, but use
				<code>.nav-pills</code>
				instead:
			</p>
	    	<div class="table_example">
				<ul class="nav nav-pills">
				  <li class="active"><a href="#">Home</a></li>
				  <li><a href="#">Profile</a></li>
				  <li><a href="#">Messages</a></li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/pills.php'); ?>
				</code>			
			</div>
			<p>
				Pills are also vertically stackable. Just add
				<code>.nav-stacked</code>
				.
			</p>
			<div class="table_example">
				<ul class="nav nav-pills nav-stacked">
				  <li class="active"><a href="#">Home</a></li>
				  <li><a href="#">Profile</a></li>
				  <li><a href="#">Messages</a></li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/pills_stacked.php'); ?>
				</code>			
			</div>
	    </div>

	    <!-- Justified nav-->
		<div class="col-md-12">
	    	<h3>Justified Nav</h3>
	    	<p>
	    		Easily make tabs or pills equal widths of their parent at screens wider than 768px with
				<code>.nav-justified</code>
				. On smaller screens, the nav links are stacked.
	    	</p>
	    	<div class="table_example">
	    		<ul class="nav nav-tabs nav-justified" role="tablist">
					<li class="active">
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">Profile</a>
					</li>
					<li>
						<a href="#">Messages</a>
					</li>
				</ul>
				<br>
				<ul class="nav nav-pills nav-justified">
					<li class="active">
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">Profile</a>
					</li>
					<li>
						<a href="#">Messages</a>
					</li>
				</ul>
	    	</div>
	    	<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/nav_justified.php'); ?>
				</code>			
			</div>
	    </div>
	</div>

	<div class="row"></div>

	<!-- lesson task 1 -->
    <div class="task">
      <div class="task1">
        <div class="col-md-8">
          <h3>Lets Create a few nav-tabs that will work in mere seconds!</h3>
          <p class="lead">Open our project folder we have been using the past few days</p>
          <ol>
          	<li>Start with a new <code>container</code> div, create a <code>ul</code> with a class of <code>nav nav-tabs nav-justified</code> & and a <code> role="tablist"</code> attribute.</li>
          	<li>Add 3 li tags with anchor tags inside each one. Set our 1st li class to <code>active</code>. Name each anchor i.e. Tab One, Tab Two & Tab Three.</li>
          	<li>Outside of our <code>ul</code> create a new div with a class of <code>tab-content</code>.  Inside 3 more divs with a class of <code>tab-pane</code>, since we have 3 list items we will link to above.  To the 1st <code>tab-pane</code> add an additional class of active, to correlate with our active<code>li</code>.</li>
          	<li>Set each tap-pane div's id to <code>id="tab1"</code>, <code>id="tab2"</code> & <code>id="tab3"</code> in order, then in the anchor href's above add the id #tab1, #tab2, #tab3, which will correlate the tabs: 
          		<code><br>&lt;a href="#tab1"&gt; = &lt;div id="tab1" class="tab-pane active"&gt;<br> &lt;a href="#tab2"&gt; = &lt;div id="tab2" class="tab-pane"&gt; <br> &lt;a href="#tab3"&gt; = &lt;div id="tab3" class="tab-pane"&gt;</code>
          	</li>
          	<li>Finally Lets add some content into our tabs and then check it out.  Add a <code>h1 & p</code> to our first div with a class of <code>tab-pane active</code>, a <code>h2 & p</code> to our second div with a class of <code>tab-pane</code> & a <code>h3 & p</code> to our third div with a class of <code>tab-pane</code>.</li>
          	<li>Fill out our new HTML tags using <a href="" target="_blank">Lorem Lipsum</a></li>
          	<li>Last but certainly not least, Actually probably the most important thing to make these work is adding our <code>data-toggle="tab"</code> to all of our anchor tags in our <code>ul</code>. With this, browsers will now know to toggle between tabs!</li>
          </ol>
          <p>Open this file in our browser to see the magic you just made!</p>
          <br>
          <a href="answers/lesson7a.php" target="_blank" class="text-danger">Check out how our new file should look</a>
          <p>AMAZING!!! Tabs are a very difficult concept to wrap our heads around, Way to get through it with ease!</p>
          <p>Check out more on <a href="http://getbootstrap.com/components/#nav" target="_blank">Bootstrap Navs</a></p>
          <div class="next1">
            <a href="#navbars" class="btn btn-default btn-lg tabs"><i class="fa fa-child fa-2x"></i>Below we have Easy Navbars! <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <a class="btn btn-danger btn-lg btn_task btn-block"><i class="fa fa-terminal"></i> Complete The <Strong>Bootstrap Nav</Strong> Task Before Moving On!</a>
      </div>
    </div>

    <div class='row'></div>


	<!-- Nav Bar -->
	<div id="navbars" class="nav_bar">
		<h2>Navbar</h2>
		<hr>

		<!-- default nav -->
		<div class="col-md-12">
			<h3>Default Navigation</h3>
			<p>Navbars are responsive meta components that serve as navigation headers for your application or site. They begin collapsed (and are toggleable) in mobile views and become horizontal as the available viewport width increases.</p>
			<div class="table_example">
				<nav class="navbar navbar-default" role="navigation">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#">Brand</a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="active"><a href="#">Link</a></li>
				        <li><a href="#">Link</a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				            <li class="divider"></li>
				            <li><a href="#">One more separated link</a></li>
				          </ul>
				        </li>
				      </ul>
				      <form class="navbar-form navbar-left" role="search">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search">
				        </div>
				        <button type="submit" class="btn btn-default">Submit</button>
				      </form>
				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="#">Link</a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				          </ul>
				        </li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/default_navbar.php'); ?>
				</code>			
			</div>
		</div>

		<!-- Component Alignment -->
		<div class="col-md-6">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4>Component Alignment</h4>
				</div>
				<div class="panel-body">
					<p>
						Align nav links, forms, buttons, or text, using the
						<code>.navbar-left</code>
						or
						<code>.navbar-right</code>
						utility classes. Both classes will add a CSS float in the specified direction. For example, to align nav links, put them in a separate
						<code>&lt;ul&gt;</code>
						with the respective utility class applied.
					</p>
					<p>
						These classes are mixin-ed versions of
						<code>.pull-left</code>
						and
						<code>.pull-right</code>
						, but they're scoped to media queries for easier handling of navbar components across device sizes.
					</p>
				</div>
			</div>
		</div>
		
		<!-- Fixed to top -->
		<div class="col-md-12">
			<h3>Navigation Fixed to Top</h3>
			<p>
				Add
				<code>.navbar-fixed-top</code>
				and include a
				<code>.container</code>
				or
				<code>.container-fluid</code>
				to center and pad navbar content.
			</p>
			<div class="table_example">
				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-6" data-toggle="collapse" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Brand</a>
					</div>
					<div id="bs-example-navbar-collapse-6" class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
						</ul>
					</div>
				</nav>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/fix_top.php'); ?>
				</code>			
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-danger" style="padding-bottom:10px;">
				<div class="panel-heading">
					<h4>Body padding required when using <code>navbar-fixed-top</code> Navigation Bars</h4>
				</div>
				<div class="panel-body">
					<p class="text-muted">
						The fixed navbar will overlay your other content, unless you add
						<code>padding</code>
						to the top of the
						<code>&lt;body&gt;</code>
						. <strong>Tip:</strong> By default, the bootstrap navbar is 50px high.
						<div class="well well-sm">	
							<code>
								<?php include('code/lesson7/body_pad.php'); ?>
							</code>	
						</div>
					</p>
				</div>
			</div>
		</div>

		<!-- Fixed to bottom -->
		<div class="col-md-12">
			<h3>Navigation Fixed to Bottom</h3>
			<p>
				Add
				<code>.navbar-fixed-bottom</code>
				and include a
				<code>.container</code>
				or
				<code>.container-fluid</code>
				to center and pad navbar content.
			</p>
			<div class="table_example">
				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-6" data-toggle="collapse" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Brand</a>
					</div>
					<div id="bs-example-navbar-collapse-6" class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/fix_bottom.php'); ?>
				</code>			
			</div>
		</div>

		<div class="col-md-6">
			<div class="panel panel-danger" style="padding-bottom:10px;">
				<div class="panel-heading">
					<h4>Body padding required for navbar-fixed-bottom Navigation Bars</h4>
				</div>
				<div class="panel-body">
					<p class="text-muted">
						The fixed navbar will overlay your other content, unless you add
						<code>padding</code>
						to the bottom of the
						<code>&lt;body&gt;</code>
						. <strong>Tip:</strong> By default, the bootstrap navbar is 50px high.
						<div class="well well-sm">	
							<code>
								<?php include('code/lesson7/body_pad_bottom.php'); ?>
							</code>	
						</div>
					</p>
				</div>
			</div>
		</div>

		<!-- Navigation Static Top -->
		<div class="col-md-12">
			<h3>Navigation Static Top</h3>
			<p>
				Create a full-width navbar that scrolls away with the page by adding
				<code>.navbar-static-top</code>
				and include a
				<code>.container</code>
				or
				<code>.container-fluid</code>
				to center and pad navbar content.
				</p>
				<p>
				Unlike the
				<code>.navbar-fixed-*</code>
				classes, you do not need to change any padding on the
				<code>body</code>
				.
			</p>
			<div class="table_example">
				<nav class="navbar navbar-default navbar-static-top" role="navigation">
					<div class="navbar-header">
						<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-6" data-toggle="collapse" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Brand</a>
					</div>
					<div id="bs-example-navbar-collapse-6" class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/static_top.php'); ?>
				</code>			
			</div>
		</div>

		<!-- Inverted Navigation -->
		<div class="col-md-12">
			<h3>Inverted Navigation</h3>
			<p>
				Modify the look of the navbar by adding
				<code>.navbar-inverse</code>
				.
			</p>
			<div class="table_example">
				<nav class="navbar navbar-inverse" role="navigation">
					<div class="navbar-header">
						<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-6" data-toggle="collapse" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Brand</a>
					</div>
					<div id="bs-example-navbar-collapse-6" class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/inverted_navbar.php'); ?>
				</code>			
			</div>
		</div>

	</div>

	<div class="row"></div>

	<!-- lesson task 2 -->
    <div class="task">
      <div class="task1">
        <div class="col-md-8">
          <h3>Time to build our own Bootstrap navigation that will collapse on smaller viewports!</h3>
          <p class="lead">Open our project folder we have been using the past few days</p>
          <ol>
          	<li>Lets start at the top of our index.html just below our opening <code>body</code> tag. Create two new <code>nav</code> tags, one will be for a fixed-top nav and the other a fixed-bottom navbar.</li>
          	<li>Add a class of <code>navbar navbar-default navbar-fixed-top</code> and a role of <code>navigation</code> to our 1st nav tag.  For our second nav tag Add a class of <code>navbar navbar-inverse navbar-fixed-bottom</code> and a role of <code>navigation</code>.</li>
          	<li>Create two new div's inside each <code>nav</code> the 1st with a class of <code>navbar-header</code> & and 2nd with the class of <code>collapse</code> & <code>navbar-collapse</code>.</li>
          	<li>Add a <code>button</code> and <code>a</code> tag inside each <code>&lt;div class="navbar-header"&gt;...&lt;/div&gt;</code> the button will serve as our button that appears when our nav collapses at smaller screens, & our <code>a</code> will serve as our Brand Name!</li>
          	<li>Give our 2 anchor tags a class of <code>navbar-brand</code> and name them Brand Name, between the opening and closing tags.</li>
          	<li>To our buttons we need to add a class of <code>navbar-toggle</code>, set its <code>type="button"</code> and to make them actually work we need to add <code>data-toggle="collapse"</code> and finally set its target <code>data-target="#"</code>, we will match this later to our next closest div!</li>
          	<li>We need to add 4 span's inside our button tags, the 1st with a class of <code>sr-only</code> and label it Toggle navigation in between the open and close span tag.</li>
          	<li>To out 2nd, 3rd & 4th span we can set their class to <code>icon-bar</code>, doing this will give us a nice looking toggle button when we are view at smaller viewports.</li>
          	<li>So we have our collapse button set no lets match it to our correct div, we do this by setting our id's on our <code>&lt;div class="collapse navbar-collapse"&gt;</code> to anything i.e. nav-collapse-1, nav-collapse-2.  We need to copy these names into the respective <code>data-target="#"</code>, Ensure the "#" is kept, remember we are calling an ID here so we need the #.</li>
          	<li>Finally we can create our actual Nav Items. Start with a <code>ul</code> with a class of <code>nav navbar-nav</code>inside our 2 <code>navbar-collapse</code> divs.</li>
          	<li>Create at least three <code>li</code> tags with <code>a</code>'s inside. set our 1st <code>li</code> class to active. And Last we will name our 6 links whatever you would like i.e. Home, Profile, Link 1, Link 2.</li>
          </ol>
          <p>Open this file in our browser to see what we just did!</p>
          <br>
          <a href="answers/lesson7b.php" target="_blank" class="text-danger">Check out how our new file looks</a>
          <p>Great Job. Navigation is essential in all websites and webapps, With Bootstrap all our worries can be put at ease!</p>
          <p>More on <a href="http://getbootstrap.com/components/#navbar" target="_blank">Bootstrap Navigation Bars</a> can be found here!</p>
          <div class="next1">
            <a href="#breads" class="btn btn-default btn-lg tabs"><i class="fa fa-child fa-2x"></i>Next section up, Bootstrap Breadcrumbs & Pagination! <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <a class="btn btn-danger btn-lg btn_task btn-block"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Navigation Bars</Strong> Task Before Moving On!</a>
      </div>
    </div>

    <div class='row'></div>

	<!-- breadcrumbs -->
	<div id="breads" class="bread">
		<h2>Breadcrumbs</h2>
		<hr>

		<!-- breadcrumbs -->
		<div class="col-md-12">
			<p class="lead">
				Indicate the current page's location within a navigational hierarchy.
			</p>	
			<p> Separators are automatically added in CSS through
				<code>:before</code>
				and
				<code>content</code>
				.
			</p>
			<div class="table_example">
				<ol class="breadcrumb">
					<li class="active">Home</li>
				</ol>
				<ol class="breadcrumb">
					<li>
						<a href="#">Home</a>
					</li>
					<li class="active">Library</li>
				</ol>
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li><a href="#">Library</a></li>
				  <li class="active">Data</li>
				</ol>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/breadcrumb.php'); ?>
				</code>			
			</div>
		</div>

	</div>

	<!-- Pagination -->
	<div class="pagination">
		<h2>Pagination</h2>
		<p class="lead">
			Provide pagination links for your site or app with the multi-page pagination component, or the simpler
			<a href="#pager">pager alternative</a>
			.
		</p>
		<hr>

		<!-- default -->
		<div class="col-md-12">
			<h3>
				Default Pagination
			</h3>
			<p>
				Simple pagination inspired by Rdio, great for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.
			</p>
			<div class="table_example">
				<ul class="pagination">
				  <li><a href="#">&laquo;</a></li>
				  <li><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/dafault_pagination.php'); ?>
				</code>			
			</div>
		</div>

		<!-- disabled vs active -->
		<div class="col-md-12">
			<h3>
				Disabled and Active states
			</h3>
			<p>
				Links are customizable for different circumstances. Use
				<code>.disabled</code>
				for unclickable links and
				<code>.active</code>
				to indicate the current page.
			</p>
			<div class="table_example">
				<ul class="pagination">
				  <li class="disabled"><a href="#">&laquo;</a></li>
				  <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/active_pagination.php'); ?>
				</code>			
			</div>
		</div>

		<!-- sizing -->
		<div class="col-md-12">
			<h3>
				Pagination Sizing
			</h3>
			<p>
				Fancy larger or smaller pagination? Add
				<code>.pagination-lg</code>
				or
				<code>.pagination-sm</code>
				for additional sizes.
			</p>
			<div class="table_example">
				<ul class="pagination pagination-lg">
				  <li><a href="#">&laquo;</a></li>
				  <li><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
				</ul>
				<br>
				<ul class="pagination">
				  <li><a href="#">&laquo;</a></li>
				  <li><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
				</ul>
				<br>
				<ul class="pagination pagination-sm">
				  <li><a href="#">&laquo;</a></li>
				  <li><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/sizing_pagination.php'); ?>
				</code>			
			</div>
		</div>

	</div>

	<!-- Pager -->
	<div id="pager">
		<h2>Pager</h2>
		<p class="lead">Quick previous and next links for simple pagination implementations with light markup and styles. It's great for simple sites like blogs or magazines.</p>
		<hr>

		<!-- default -->
		<div class="col-md-12">
			<h3>
				Default example
			</h3>
			<p>
				By default, the pager centers links.
			</p>
			<div class="table_example">
				<ul class="pager">
				  <li><a href="#">Previous</a></li>
				  <li><a href="#">Next</a></li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/default_pager.php'); ?>
				</code>			
			</div>
		</div>

		<!-- Aligned links -->
		<div class="col-md-12">
			<h3>
				Aligned links
			</h3>
			<p>
				Alternatively, you can align each link to the sides. <strong>Note:</strong> Create left and right arrows using <code>&laar;</code> for a Left Arrow & <code>&raar;</code> for a Right Arrow.
			</p>
			<div class="table_example">
				<ul class="pager">
					<li class="previous">
						<a href="#">← Older</a>
					</li>
					<li class="next">
						<a href="#">Newer →</a>
					</li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/aligned.php'); ?>
				</code>			
			</div>
		</div>

		<!-- Optional disabled state -->
		<div class="col-md-12">
			<h3>
				Disabled state
			</h3>
			<p>
				Pager links also use the general
				<code>.disabled</code>
				utility class from the pagination.
			</p>
			<div class="table_example">
				<ul class="pager">
				  <li class="previous disabled"><a href="#">&larr; Older</a></li>
				  <li class="next"><a href="#">Newer &rarr;</a></li>
				</ul>
			</div>
			<div class="well well-sm">		
				<code>
					<?php include('code/lesson7/disabled_pager.php'); ?>
				</code>			
			</div>
		</div>

	</div>

	<!-- lesson task 3 -->
    <div class="task">
      <div class="task1">
        <div class="col-md-8">
          <h3>Woot!!! More Tools To Make Navigation Easier!!</h3>
          <p class="lead">Open our project folder we have been using the past few days</p>
          <ol>
          	<li>Start with a new <code>container-fluid</code> div, with another <code>row</code> div inside</li>
          	<li>Next lets add 3 new divs in here with a class of <code>col-xs-6 col-md-12</code> for the first, <code>col-xs-6 col-md-8</code> for the second & <code>col-xs-12 col-md-4</code> for the third.</li>
          	<li>In our first new div we will make some bootstrap breadcrumbs, add a <code>ol</code> with a class of <code>breadcrumb</code>, add 3 li tags in here, with the 1st & 2nd getting <code>a</code> tags inside the <code>li</code>. This way we can link to our previous pages and our third is our current location.</li>
          	<li>Give our 3rd <code>li</code> a class of <code>active</code> and finally we can name our breadcrumbs, 1st as Home, 2nd as Contact & 3rd as Business Address.</li>
          	<li>In our 2nd new div lets create some pagination, add a <code>ul</code> with a class of <code>pagination</code>.  Lets add 7 <code>li</code> with <code>&lt;a href="#"&gt;</code> inside.</li>
          	<li>Between our 1st <code>a</code> tag add <code>&laquo ;</code> without the space between the o & ; and the same for our 7th <code>a</code> but change it to <code>&raquo ;</code> again with out the space between the ; and the o. These will produce two nice double arrows</li>
          	<li>Lets Number the Rest of the anchors 1 thru 5. And we have built our first bootstrap pagination!!</li>
          	<li>On to the Final Task, building a Bootstrap Pager. Start in our 3rd div by creating a <code>ul</code> with a class of <code>pager</code>,</li>
          	<li>Add two <code>li</code> tags with <code>&lt;a href=""&gt;...&lt;/a&gt;</code> inside each.  Give our 1st li a class of <code>previous</code> and our 2nd li a class of <code>next</code>.</li>
          	<li>Between our 1st anchor start with <code>&larr ; Older</code> again remove the space between the last r and ; to create a arrow left, Finally between our 2nd anchor start with <code>&rarr ; Newer</code> again remove the space between the last r and ; to create a arrow right</li>
          </ol>
          <p>Open this file in our browser to see check our our new creations!</p>
          <br>
          <a href="answers/lesson7c.php" target="_blank" class="text-danger">Check out how our new file should look</a>
          <p>Great Job working with Bootstrap breadcrumbs & paginations</p>
          <p>Check out more on <a href="http://getbootstrap.com/components/#breadcrumbs" target="_blank">Bootstrap Breadcrumbs</a>, <a href="http://getbootstrap.com/components/#pagination" target="_blank">Bootstrap Pagination</a> & <a href="http://getbootstrap.com/components/#pagination-pager" target="_blank">Bootstrap Pagers</a>!</p>
          <div class="next1">
            <a href="#tab8" data-toggle="tab" class="btn btn-default btn-lg tabs"><i class="fa fa-child fa-2x"></i>Next section up, Bootstrap Labels & Badges! <i class="fa fa-2x fa-child"></i></a>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12">
        <a class="btn btn-danger btn-lg btn_task"><i class="fa fa-terminal"></i> Complete The Bootstrap <Strong>Breadcrumbs & Pagination</Strong> Task Before Moving On!</a>
      </div>
    </div>

  </article>
</div>