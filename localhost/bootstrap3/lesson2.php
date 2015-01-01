<!-- Lesson 2 - Understanding the Bootstrap Grid -->
<div class="tab-pane" id="tab2">
  <article class="lesson2">

  	<!-- lesson title -->
    <div class="lesson_title">
      <h4>Lesson 2</h4>
      <h1>Understanding The Bootstrap Grid, Containers & Rows!</h1>
    </div>
    <!-- lesson paragraph -->
    <div>
    	<p class="lead">Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options.</p>
    </div>

	<!-- containers -->
    <div class="containers">
    	<div class="">
			<h2>CONTAINERS</h2>
			<p>Bootstrap requires a containing element to wrap site content and house our grid system. You may choose one of two containers to use in your projects. Note that, due to padding and more, neither container is nestable.</p>
			<p><strong>Use the .container class for a responsive fixed width container.</strong></p>
			<div class="well well-sm">
				<span class="div_color">&lt;div</span> 
				<span class="class_color">class=</span><span class="container_color">"container"</span><span class="div_color">&gt;</span>
				<br>
				<span class="div_color form_padding">&lt;div</span> 
				<span class="class_color">class=</span><span class="container_color">"row"</span><span class="div_color">&gt;</span>
				<br>
				<span class="div_color extra_content_padding">&lt;div</span> 
				<span class="class_color">class=</span><span class="container_color">"col-md-4"</span><span class="div_color">&gt;</span>
				<br>
				<span class="extreme_padding">content here</span>
				<br>
				<span class="div_color extra_content_padding">&lt;/div&gt;</span>
				<br>
				<span class="div_color form_padding">&lt;/div&gt;</span>
				<br>
				<span class="div_color">&lt;/div&gt;</span>
			</div>
			<p><strong>Use the .container-fluid class for a full width container, spanning the entire width of your viewport.</strong></p>
			<div class="well well-sm">
				<span class="div_color">&lt;div</span> 
				<span class="class_color">class=</span><span class="container_color">"container-fluid"</span><span class="div_color">&gt;</span>
				<br>
				<span class="div_color form_padding">&lt;div</span> 
				<span class="class_color">class=</span><span class="container_color">"row"</span><span class="div_color">&gt;</span>
				<br>
				<span class="div_color extra_content_padding">&lt;div</span> 
				<span class="class_color">class=</span><span class="container_color">"col-md-4"</span><span class="div_color">&gt;</span>
				<br>
				<span class="extreme_padding">content here</span>
				<br>
				<span class="div_color extra_content_padding">&lt;/div&gt;</span>
				<br>
				<span class="div_color form_padding">&lt;/div&gt;</span>
				<br>
				<span class="div_color">&lt;/div&gt;</span>
			</div>
    	</div>
    </div>
    
    <!-- Introduction to the Grid -->
    <div class="intro">
    	<div class="col-xs-12 col-md-6">
    		<h2>Introduction</h2>
    		
    		<p>Grid systems are used for creating page layouts through a series of rows and columns that house your content. Here's how the Bootstrap grid system works:</p>
		    <ul>
		    	<li class="text-primary">Rows must be placed within a <code>.container</code> (fixed-width) or <code>.container-fluid</code> (full-width) for proper alignment and padding.</li>
		    	<li class="text-success">Use rows to create horizontal groups of columns.</li>
		    	<li class="text-warning">Content should be placed within columns, and only columns may be immediate children of rows.</li>
		    	<li class="text-info">Predefined grid classes like <code>.row</code> and <code>.col-xs-4</code> are available for quickly making grid layouts.</li>
		    	<li class="text-muted">Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three <code>.col-xs-4</code>.</li>
		    	<li class="text-danger">If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</li>
		    	<li class="text-primary">Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Applying any <code>.col-md-</code> class to an element will not only affect its styling on medium devices but also on large devices if a <code>.col-lg-</code> class is not present.</li>
		    </ul>
		</div>
		<div class="col-xs-12 col-md-6">
			<!-- grid options -->
			<h2>Grid System</h2>
			<p>How the Bootstrap grid system works across multiple devices.</p>
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th></th>
							<th>
							Extra small devices
							<small>Phones (&lt;768px)</small>
							</th>
							<th>
							Small devices
							<small>Tablets (≥768px)</small>
							</th>
							<th>
							Medium devices
							<small>Desktops (≥992px)</small>
							</th>
							<th>
							Large devices
							<small>Desktops (≥1200px)</small>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="text-nowrap">Grid behavior</th>
							<td>Horizontal at all times</td>
							<td colspan="3">Collapsed to start, horizontal above breakpoints</td>
						</tr>
						<tr>
							<th class="text-nowrap">Container width</th>
							<td>None (auto)</td>
							<td>750px</td>
							<td>970px</td>
							<td>1170px</td>
						</tr>
						<tr>
							<th class="text-nowrap">Class prefix</th>
							<td>
								<code>.col-xs-</code>
							</td>
							<td>
								<code>.col-sm-</code>
							</td>
							<td>
								<code>.col-md-</code>
							</td>
							<td>
								<code>.col-lg-</code>
							</td>
						</tr>
						<tr>
							<th class="text-nowrap"># of columns</th>
							<td colspan="4">12</td>
						</tr>
						<tr>
							<th class="text-nowrap">Column width</th>
							<td class="text-muted">Auto</td>
							<td>~62px</td>
							<td>~81px</td>
							<td>~97px</td>
						</tr>
						<tr>
							<th class="text-nowrap">Gutter width</th>
							<td colspan="4">30px (15px on each side of a column)</td>
						</tr>
						<tr>
							<th class="text-nowrap">Nestable</th>
							<td colspan="4">Yes</td>
						</tr>
						<tr>
							<th class="text-nowrap">Offsets</th>
							<td colspan="4">Yes</td>
						</tr>
							<tr>
							<th class="text-nowrap">Column ordering</th>
							<td colspan="4">Yes</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="row"></div>

	<!-- stacked to horizontal -->
	<div class="stacked_to_horizontal">
		<!-- stacked-to-horizontal examples -->
		<h3><code>Example:</code>Stacking to Horizontal Columns</h3>
		<p>
			Using a single set of
			<code>.col-md-*</code>
			grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any
			<code>.row</code>
			.
		</p>
		<div class="row show_grid">
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
		</div>
		<div class="row show_grid">
		  <div class="col-md-8">.col-md-8</div>
		  <div class="col-md-4">.col-md-4</div>
		</div>
		<div class="row show_grid">
		  <div class="col-md-4">.col-md-4</div>
		  <div class="col-md-4">.col-md-4</div>
		  <div class="col-md-4">.col-md-4</div>
		</div>
		<div class="row show_grid">
		  <div class="col-md-6">.col-md-6</div>
		  <div class="col-md-6">.col-md-6</div>
		</div>
		<br>
		<a href="http://getbootstrap.com/css/#grid-example-basic" target="_blank" class="btn btn-success">Check Out This Grids Code Here</a>
	</div>

	<div class="row"></div>

	<!-- mobile and desktop -->
	<div class="mobile_desktop">
		<h3><code>Example:</code>Mobile and desktop</h3>
		<p>
		Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding
		<code>.col-xs-*</code>
		<code>.col-md-*</code>
		to your columns.
		</p>
		<div class="table_example">
			<div class="row show_grid">
				<div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
				<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
			</div>
			<div class="row show_grid">
				<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
				<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
				<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
			</div>
			<div class="row show_grid">
				<div class="col-xs-6">.col-xs-6</div>
				<div class="col-xs-6">.col-xs-6</div>
			</div>
		</div>
		<div class="well well-sm code_margin">		
			<code>
				<?php include('code/lesson2/m_d.php'); ?>
			</code>			
		</div>
	</div>

	<div class="row"></div>

	<!-- mobile, tablet and desktop -->
	<div class="mobile_tablet_desktop">
		<h3><code>Example:</code>Mobile, tablet, desktops</h3>
		Build on the previous example by creating even more dynamic and powerful layouts with tablet
		<code>.col-sm-*</code>
		classes.
		</p>
		<div class="table_example">
			<div class="row show_grid">
				<div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
				<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
				</div>
				<div class="row show_grid">
				<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
				<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
				<div class="clearfix visible-xs-block"></div>
				<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
			</div>
		</div>
		<div class="well well-sm code_margin">		
			<code>
				<?php include('code/lesson2/m_t_d.php'); ?>
			</code>			
		</div>
	</div>

	<div class="row"></div>

	<!-- column wrapping -->
	<div class="col_wrapping">
		<h3><code>Example:</code>Column wrapping</h3>
		<p>If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</p>
		<div class="table_example">	
			<div class="row show_grid">
				<div class="col-xs-9">.col-xs-9</div>
				<div class="col-xs-4">
				.col-xs-4
				<br>
				Since 9 + 4 = 13 > 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.
				</div>
				<div class="col-xs-6">
				.col-xs-6
				<br>
				Subsequent columns continue along the new line.
				</div>
			</div>
		</div>
		<div class="well well-sm code_margin">		
			<code>
				<?php include('code/lesson2/wrapping.php'); ?>
			</code>			
		</div>
	</div>

	<div class="row"></div>

	<!-- responsive column resets -->
	<div class="col_resets">
		<h3><code>Example:</code>Responsive column resets</h3>
		<p>
		With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a
		<code>.clearfix</code>
		and our responsive utility classes</a>
		.
		</p>
		<div class="table_example">
			<div class="row show_grid">
				<div class="col-xs-6 col-sm-3">
				.col-xs-6 .col-sm-3
				<br>
				Resize your viewport or check it out on your phone for an example.
				</div>
				<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
				<div class="clearfix visible-xs-block"></div>
				<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
				<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
			</div>
		</div>
		<div class="well well-sm code_margin">		
			<code>
				<?php include('code/lesson2/responsive.php'); ?>
			</code>			
		</div>
	</div>

	<div class="row"></div>

	<!-- offsetting columns -->
	<div class="offest_col">
		<h3><code>Example:</code>Offsetting columns</h3>
		<p>
		Move columns to the right using
		<code>.col-md-offset-*</code>
		classes. These classes increase the left margin of a column by
		<code>*</code>
		columns. For example,
		<code>.col-md-offset-4</code>
		moves
		<code>.col-md-4</code>
		over four columns.
		</p>
		<div class="table_example">
			<div class="row show_grid">
				<div class="col-md-4">.col-md-4</div>
				<div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
			</div>
			<div class="row show_grid">
				<div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
				<div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
			</div>
				<div class="row show_grid">
				<div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
			</div>
		</div>
		<div class="well well-sm">		
			<code>
				<?php include('code/lesson2/offset.php'); ?>
			</code>			
		</div>
	</div>

	<div class="row"></div>

	<!-- nesting columns -->
	<div class="nest_col">
		<h3><code>Example:</code>Nesting columns</h3>
		<p>
		To nest your content with the default grid, add a new
		<code>.row</code>
		and set of
		<code>.col-sm-*</code>
		columns within an existing
		<code>.col-sm-*</code>
		column. Nested rows should include a set of columns that add up to 12 or less (it is not required that you use all 12 available columns).
		</p>
		<div class="table_example">
			<div class="row show_grid">
				<div class="col-sm-9">
					Level 1: .col-sm-9
					<div class="row show_grid">
						<div class="col-xs-8 col-sm-6"> Level 2: .col-xs-8 .col-sm-6 </div>
						<div class="col-xs-4 col-sm-6"> Level 2: .col-xs-4 .col-sm-6 </div>
					</div>
				</div>
			</div>
		</div>
		<div class="well well-sm code_margin">		
			<code>
				<?php include('code/lesson2/nesting.php'); ?>
			</code>			
		</div>
	</div>

	<div class="row"></div>

	<!-- column ordering -->
	<div class="col_order">
		<h3><code>Example:</code>Column ordering</h3>
		<p>
		Easily change the order of our built-in grid columns with
		<code>.col-md-push-*</code>
		and
		<code>.col-md-pull-*</code>
		modifier classes.
		</p>
		<div class="table_example">
			<div class="show_grid">
				<div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
				<div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
			</div>
			<br>
		</div>
		<div class="well well-sm">		
			<code>
				<?php include('code/lesson2/ordering.php'); ?>
			</code>			
		</div>
	</div>
	
	<div class="row"></div>

	<br><br>

	<!-- lesson task -->
	<div class="task">
		<div class="task1">
			<div class="col-md-8">
				<h3>Now we understand the grid a bit...so lets dig in and solidify what we learned!</h3>
				<p class="lead">Start with a new boiler plate.</p>
				<ol>
					<li>Add either a <code>container</code> or <code>container-fluid</code> to the first div after the <code>body</code></li>
					<li>Now lets add a <code>row</code> to our next <code>div</code></li>
					<li>Add the classes <code>col-xs-12 col-sm-6 col-md-12</code> to our 3rd <code>div</code></li>
					<li>Create an <code>h1</code> tag and a <code>p</code> tag inside the 3rd <code>div</code>. Use <a href="http://www.lipsum.com/" target="_blank">Lorem Ipsum</a> to fill these two tags in with content</li>
					<li>Create 3 new divs after the 3rd div, all with the following grid classes <code>col-xs-12 col-sm-6 col-md-4</code></li>
					<li>Add a few html elements inside each new div, an <code>h3</code>, <code>p class="lead"</code> & <code>h6</code></li>
					<li>Again using <a href="http://www.lipsum.com/" target="_blank">Lorem Ipsum</a> fill these 9 new HTML tags with different amounts of text.</li>
				</ol>
				<p>Open this new file in our browser, and try resizing the browser. You should notice alot of stacking effects going on.</p>
				<br>
				<a href="answers/lesson2.php" target="_blank" class="text-danger">Check out how our new file should look</a>
				<p>GREAT JOB!!! you just hand built your first bootstrap grid, positioning will be a breeze from here on out, using our NEW 12 Column Grid System.</p>
				<p>Check out <a href="http://getbootstrap.com/css/#grid" target="_blank">Bootstrap Grid</a> for even more in-depth talk about the GRID</p>
				<div class="next1">
					<a href="#tab3" data-toggle="tab" class="btn btn-default btn-lg tabs"><i class="fa fa-child fa-2x"></i> NEXT UP BOOTSTRAP HELPER CLASSES & RESPONSIVBE UTILITIES <i class="fa fa-2x fa-child"></i></a>
				</div>
			</div>
		</div>
		<br>
		<div class="col-md-6">
			<a class="btn btn-danger btn-lg btn_task"><i class="fa fa-terminal"></i> Complete This Bootstrap <strong>GRID</strong> Task Before Moving On!</a>
		</div>
	</div>

	<br>

  </article>
</div>