<!-- Lesson 4 - Bootstrap's Tables & Forms -->
<div class="tab-pane" id="tab4">
  <article class="lesson4">
    <div class="lesson_title">
      <h4>Lesson 4</h4>
      <h1>Bootstrap Tables & Forms</h1>
    </div>

    <div class="tables">
    	<h2>TABLES</h2>
    	<hr>

    	<!-- basic table -->
    	<div class="col-md-6">
    		<h3>Basic Example</h3>
    		<p>
	    		Light padding and only horizontal dividers—add the base class 
	    		<code>.table</code> 
	    		to any 
	    		<code>&lt;table&gt;</code>. 
    		</p>
    		<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
				</tbody>
			</table>
			<div class="well well-sm code_margin">		
				<code>
					<?php include('code/lesson4/basic.php'); ?>
				</code>			
			</div>
    	</div>

    	<!-- striped table -->
    	<div class="col-md-6">
    		<h3>Striped Rows Table</h3>
    		<p>
				Use
				<code>.table-striped</code>
				to add zebra-striping to any table row within the
				<code>&lt;tbody&gt;</code>
				.
			</p>
    		<table class="table table-striped">
    			<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
				</tbody>
    		</table>
    		<div class="well well-sm code_margin">
    			<code>
    				<?php include('code/lesson4/striped.php'); ?>
    			</code>
    		</div>
    	</div>

    	<!-- Bordered table -->
    	<div class="col-md-12">
    		<h3>Bordered Tables</h3>
    		<p>
				Add
				<code>.table-bordered</code>
				for borders on all sides of the table and cells.
			</p>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td rowspan="2">1</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<td>Mark</td>
						<td>Otto</td>
						<td>@TwBootstrap</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<td>3</td>
						<td colspan="2">Larry the Bird</td>
						<td>@twitter</td>
					</tr>
				</tbody>
			</table>
			<div class="well well-sm code_margin">
    			<code>
    				<?php include('code/lesson4/bordered.php'); ?>
    			</code>
    		</div>
    	</div>

    	<!-- Hover rows -->
    	<div class="col-md-6">
    		<h3>Hover Rows</h3>
    		<p>
				Add
				<code>.table-hover</code>
				to enable a hover state on table rows within a
				<code>&lt;tbody&gt;</code>
				.
    		</p>
    		<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
				</tbody>
			</table>
    		<div class="well well-sm code_margin">
    			<code>
    				<?php include('code/lesson4/hover.php'); ?>
    			</code>
    		</div>
    	</div>

    	<!-- Condensed table -->
    	<div class="col-md-6">
    		<br>
    		<h3>Condensed table</h3>
    		<p>
    			Add
				<code>.table-condensed</code>
				to make tables more compact by cutting cell padding in half.
    		</p>
    		<table class="table table-condensed">
				<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
				</tbody>
			</table>
    		<div class="well well-sm code_margin">
    			<code>
    				<?php include('code/lesson4/condensed.php'); ?>
    			</code>
    		</div>
    	</div>

    	<!-- Contextual classes -->
    	<div class="col-md-12">
    		<h3>Contextual classes</h3>
    		<p>Use contextual classes to color table rows or individual cells.</p>
    		<table class="table table-bordered table-striped">
				<colgroup>
					<col class="col-xs-1">
					<col class="col-xs-7">
				</colgroup>
				<thead>
					<tr>
						<th>Class</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<code>.active</code>
						</td>
						<td>Applies the hover color to a particular row or cell</td>
					</tr>
					<tr>
						<td>
							<code>.success</code>
						</td>
						<td>Indicates a successful or positive action</td>
					</tr>
					<tr>
						<td>
							<code>.info</code>
						</td>
						<td>Indicates a neutral informative change or action</td>
					</tr>
					<tr>
						<td>
							<code>.warning</code>
						</td>
						<td>Indicates a warning that might need attention</td>
					</tr>
					<tr>
						<td>
							<code>.danger</code>
						</td>
						<td>Indicates a dangerous or potentially negative action</td>
					</tr>
				</tbody>
			</table>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Column heading</th>
						<th>Column heading</th>
						<th>Column heading</th>
					</tr>
				</thead>
				<tbody>
					<tr class="active">
						<td>1</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="success">
						<td>3</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="info">
						<td>5</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr>
						<td>6</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="warning">
						<td>7</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr>
						<td>8</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="danger">
						<td>9</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
				</tbody>
			</table>
    		<div class="well well-sm code_margin">
    			<code>
    				<?php include('code/lesson4/contextual.php'); ?>
    			</code>
    		</div>
    	</div>

    	<!-- Responsive tables -->
    	<div class="col-md-12">
    		<h3>Responsive tables</h3>
    		<p>
    			Create responsive tables by wrapping any
				<code>.table</code>
				in
				<code>.table-responsive</code>
				to make them scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.
    		</p>
    		<div class="table_example">
	    		<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Table heading</th>
								<th>Table heading</th>
								<th>Table heading</th>
								<th>Table heading</th>
								<th>Table heading</th>
								<th>Table heading</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Table heading</th>
								<th>Table heading</th>
								<th>Table heading</th>
								<th>Table heading</th>
								<th>Table heading</th>
								<th>Table heading</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
								<td>Table cell</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="well well-sm code_margin">
    			<code>
    				<?php include('code/lesson4/responsive.php'); ?>
    			</code>
    		</div>
    	</div>

    	
	</div>

	<div class="row"></div>



	<!-- lesson task -->
	<div class="task">
		<div class="task1">
			<div class="col-md-8">
				<h3>Sweet building tables with basic styles is easy now...so lets write some more of our own <code>CODE</code>.</h3>
				<ol>
					<li>Create either a new <code>container</code> or <code>container-fuild</code> div outside our previous div.
					</li>
					<li>Again we will add a <code>row</code> inside our <code>.contaier</code> or <code>container-fluid</code> div.</li>
					<li>Create a div inside our <code>.row</code>  with a class of <code>col-xs-8</code> which will limit our table size to span 8 columns on all devices.</li>
					<li>Now we can create our <code>&lt;table class="table"&gt;...&lt;/table&gt;</code> and lets include all these table classes <code>table-striped table-bordered table-hover table-condensed</code> to our <code>&lt;table&gt;</code> tag.
					</li>
					<li>Add the <code>&lt;thead&gt;...&lt;/thead&gt;</code> inside your table tag</li> 
					<li>nest one table row with any contextual color you want <code>&lt;tr class="active"&gt;...&lt;/tr&gt;</code> inside <code>&lt;thead&gt;...&lt;/thead&gt;</code>.</li> 
					<li>Add 3 <code>&lt;th&gt;...&lt;/th&gt;</code>elements inside your <code>&lt;thead&gt;...&lt;/thead&gt;</code>. Add the text of "Name" in the first <code>&lt;th&gt;</code>,
						the text of "Email" in the second <code>&lt;th&gt;</code>,
						and the text of "Phone Number" in the third <code>&lt;th&gt;</code>
					</li>
					<li>After the closing <code>&lt;thead&gt;...&lt;/thead&gt;</code> tag, add your <code>&lt;tbody&gt;</code> element and include 3 table rows <code>&lt;tr&gt;...&lt;/tr&gt;</code></li>
					<li>Inside each <code>&lt;tr&gt;...&lt;/tr&gt;</code> add 3 table defines <code>&lt;td&gt;...&lt;td&gt;...</code>, and add a few more contextual classes to our new <code>tr</code> and <code>td</code> tags.</li>
					<li>Finally lets fill out our table with some fake information & see how it looks.</li>
				</ol>
				<p>Open this new file in your browser to see how you did!</p>
				<br>
				<a href="answers/lesson4a.php" target="_blank" class="text-danger">Check out how your new file should look</a>
				<p>GREAT JOB!!! you just hand built your first bootstrap table, looks pretty funky with all those table classes, maybe next time we'll use less, like we're supposed to.</p>
				<p>Check out <a href="http://getbootstrap.com/css/#tables" target="_blank">Bootstrap Tables</a> to get even more in-depth knowledge of Bootstrap Tables!</p>
				<div class="next1">
					<a href="#forms" class="btn btn-default btn-lg tabs"><i class="fa fa-child fa-2x"></i> Alright on to FORMS we go! <i class="fa fa-2x fa-child"></i></a>
				</div>
			</div>
		</div>
		<br>
		<div class="col-md-12">
			<a class="btn btn-danger btn-lg btn-group-justified btn_task"><i class="fa fa-terminal"></i> Complete The Bootstrap <strong>TABLES</strong> Task Before Moving On!</a>
		</div>
	</div>

	<br>

	<div class="row row_pad"></div>
    
    <!-- FORMS -->
    <div id="forms">
    	<h2>FORMS</h2>
    	<hr>

    	<!-- basic form -->
    	<div class="col-md-12">
    		<h3>Basic Form</h3>
    		<p>
    			Form controls automatically receive some global styling. All textual
				<code>&lt;input&gt;</code>
				,
				<code>&lt;textarea&gt;</code>
				, and
				<code>&lt;select&gt;</code>
				elements with
				<code>.form-control</code>
				are set to
				<code>width: 100%;</code>
				by default. If we wrap our labels and controls in
				<code>.form-group</code>
				we are simply adding <code>margin-bottom: 15px;</code> to the form elements, giving a nice padding between each element.
    		</p>
    		<div class="table_example">
	    		<form role="form">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputFile">File input</label>
				    <input type="file" id="exampleInputFile">
				    <p class="help-block">Example block-level help text here.</p>
				  </div>
				  <div class="checkbox">
				    <label>
				      <input type="checkbox"> Check me out
				    </label>
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			<div class="well well-sm">
    			<code>
    				<?php include('code/lesson4/basic.php'); ?>
    			</code>
    		</div>
    		<!-- <div class="col-md-6">
    			<div class="panel panel-danger">
	    			<div class="panel-heading">
	    				<h4>Don't mix form groups with input groups</h4>
	    			</div>
	    			<div class="panel-body">
	    				<p class="text-muted">Do not mix form groups directly with input groups, this can cause a lot of unneeded stress. So, nest the input group inside of the form group!</p>
	    			</div>
	    		</div>
    		</div>
    		<div class="col-md-6">
    			<div class="panel panel-warning">
	    			<div class="panel-heading">
	    				<h4>Always use Labels for every <code>input</code> tag</h4>
	    			</div>
	    			<div class="panel-body">
	    				<p class="text-muted">
	    					Screen readers will have trouble with our forms if we don't include a label for each input. We can hide the labels, if desired using the
							<code>sr-only</code>
							class.
						</p>
	    			</div>
	    		</div>
    		</div> -->

    	</div>

    	<!-- inline form -->
    	<div class="col-md-12">
    		<h3>Inline Form</h3>
    		<p>
    			Add
				<code>.form-inline</code>
				to your
				<code>&lt;form&gt;</code>
				for left-aligned and inline-block controls.
				<strong>This only applies to forms within viewports that are at least 768px wide, Otherwise it will be 100%</strong>
    		</p>
    		<div class="col-md-6">
    			<div class="panel panel-success">
	    			<div class="panel-heading">
	    				<h4>Inline requires custom widths</h4>
	    			</div>
	    			<div class="panel-body">
	    				<p class="text-muted">Inputs, selects, and textareas are 100% wide by default in Bootstrap. Inline widths are set to auto, as long as we use the <code>form-inline</code> class for our form & set our input class to <code>form-control</code>. We can also adjust the width by add class to the specific tag if needed.</p>
	    			</div>
	    		</div>
    		</div>
    		<div class="col-md-6">
    			<div class="panel panel-info">
	    			<div class="panel-heading">
	    				<h4>Always add labels for Accessibility</h4>
	    			</div>
	    			<div class="panel-body">
	    				<p class="text-muted">
		    				Screen readers will have trouble with your forms if you don't include a label for every input. For these inline forms, you can hide the labels using the
							<code>.sr-only</code>
							class.
						</p>
	    			</div>
	    		</div>
    		</div>
    		<div class="row"></div>
    		<div class="table_example">
				<form class="form-inline" role="form">
				  <div class="form-group">
				    <label class="sr-only" for="exampleInputEmail2">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
				  </div>
				  <div class="form-group">
				    <div class="input-group">
				      <div class="input-group-addon">@</div>
				      <input class="form-control" type="email" placeholder="Enter email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="sr-only" for="exampleInputPassword2">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
				  </div>
				  <div class="checkbox">
				    <label>
				      <input type="checkbox"> Remember me
				    </label>
				  </div>
				  <button type="submit" class="btn btn-default">Sign in</button>
				</form>
    		</div>
    		<div class="well well-sm">
    			<code>
    				<?php include('code/lesson4/inline.php'); ?>
    			</code>
    		</div>
    	</div>

    	<!-- horizontal form -->
    	<div class="col-md-12">
    		<h3>Horizontal Form</h3>
    		<p>
    			Use Bootstrap's predefined grid classes to align labels and groups of form controls in a horizontal layout by adding
				<code>.form-horizontal</code>
				to the form. Doing so changes
				<code>.form-group</code>
				s to behave as grid rows, so no need for
				<code>.row</code>
				.
    		</p>
    		<div class="table_example">
    			<form class="form-horizontal" role="form">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-10">
				      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox"> Remember me
				        </label>
				      </div>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Sign in</button>
				    </div>
				  </div>
				</form>
    		</div>
    		<div class="well well-sm">
    			<code>
    				<?php include('code/lesson4/horizontal.php'); ?>
    			</code>
    		</div>
    	</div>

    	<!-- supported controls -->
    	<div class="col-md-12">
    		<h3>Supported Controls</h3>
    		<p>Examples of standard form controls supported in an example form layout.</p>
    		<!-- inputs -->
    		<div class="col-md-6">
	    		<h4>Inputs</h4>
	    		<p>
	    			Most common form control, text-based input fields. Includes support for all HTML5 types:
					<code>text</code>
					,
					<code>password</code>
					,
					<code>datetime</code>
					,
					<code>datetime-local</code>
					,
					<code>date</code>
					,
					<code>month</code>
					,
					<code>time</code>
					,
					<code>week</code>
					,
					<code>number</code>
					,
					<code>email</code>
					,
					<code>url</code>
					,
					<code>search</code>
					,
					<code>tel</code>
					, and
					<code>color</code>
					.
	    		</p>
	    		<div class="table_example">
	    			<input type="text" class="form-control" placeholder="Text input">
	    		</div>
	    		<div class="well well-sm">
	    			<code>
	    				<?php include('code/lesson4/inputs.php'); ?>
	    			</code>
	    		</div>
	    	</div>
    		<!-- textarea -->
    		<div class="col-md-6">
	    		<h4>Textarea</h4>
	    		<p>
	    			Form control which supports multiple lines of text. Change
					<code>rows</code>
					attribute as necessary.
	    		</p>
	    		<div class="table_example">
	    			<textarea class="form-control" rows="3"></textarea>
	    		</div>
	    		<div class="well well-sm">
	    			<code>
	    				<?php include('code/lesson4/textarea.php'); ?>
	    			</code>
	    		</div>
	    	</div>

    		<!-- checkboxes and radios -->
    		<div class="col-md-12">
	    		<h4>Checkboxes and Radios</h4>
	    		<p>Checkboxes are for selecting one or several options in a list, while radios are for selecting one option from many.</p>
				<p>
					A checkbox or radio with the
					<code>disabled</code>
					attribute will be styled appropriately. To have the
					<code>&lt;label&gt;</code>
					for the checkbox or radio also display a "not-allowed" cursor when the user hovers over the label, add the
					<code>.disabled</code>
					class to your
					<code>.radio</code>
					,
					<code>.radio-inline</code>
					,
					<code>.checkbox</code>
					,
					<code>.checkbox-inline</code>
					, or
					<code>&lt;fieldset&gt;</code>
					.
	    		</p>
	    		<div class="table_example">
	    			<div class="checkbox">
					  <label>
					    <input type="checkbox">
					    Option one is this and that&mdash;be sure to include why it's great
					  </label>
					</div>
					<div class="checkbox disabled">
					  <label>
					    <input type="checkbox" disabled>
					    Option two is disabled
					  </label>
					</div>

					<div class="radio">
					  <label>
					    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					    Option one is this and that&mdash;be sure to include why it's great
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
					    Option two can be something else and selecting it will deselect option one
					  </label>
					</div>
					<div class="radio disabled">
					  <label>
					    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
					    Option three is disabled
					  </label>
					</div>
	    		</div>
	    		<div class="well well-sm">
	    			<code>
	    				<?php include('code/lesson4/checkbox_and_radios.php'); ?>
	    			</code>
	    		</div>
	    	</div>
    		<!-- inline checkboxes and radios -->
    		<div class="col-md-12">
	    		<h3>Inline Checkboxes and Radios</h3>
	    		<p>
	    			Use the
					<code>.checkbox-inline</code>
					or
					<code>.radio-inline</code>
					classes on a series of checkboxes or radios for controls that appear on the same line.
	    		</p>
	    		<div class="table_example">
	    			<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
					</label>

					<label class="radio-inline" style="margin-left:50px;">
					  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
					</label>
					<label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
					</label>
					<label class="radio-inline">
					  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
					</label>
	    		</div>
	    		<div class="well well-sm">
	    			<code>
	    				<?php include('code/lesson4/inline_checkbox_and_radios.php'); ?>
	    			</code>
	    		</div>
	    	</div>
    		<!-- selects -->
    		<div class="col-md-6">
	    		<h3>Selects</h3>
	    		<p>
	    			Use the default option, or add
					<code>multiple</code>
					to show multiple options at once.
	    		</p>
	    		<div class="table_example">
	    			<select class="form-control">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
					<br>
					<select multiple class="form-control">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
	    		</div>
	    		<div class="well well-sm">
	    			<code>
	    				<?php include('code/lesson4/selects.php'); ?>
	    			</code>
	    		</div>
	    	</div>
	    	

	    	<!-- sizing form -->
	    	<div class="col-md-6">
	    		<h3>Control Form Size</h3>
	    		<p>
	    			Set heights using classes like
					<code>.input-lg</code>
					, and set widths using grid column classes like
					<code>.col-lg-*</code>
					.
	    		</p>
	    		<div class="table_example">
	    			<input class="form-control input-lg" type="text" placeholder=".input-lg">
	    			<br>
					<input class="form-control" type="text" placeholder="Default input">
					<br>
					<input class="form-control input-sm" type="text" placeholder=".input-sm">
					<br>
					<select class="form-control input-lg">
						<option value="1">.input-lg</option>
					</select>
					<br>
					<select class="form-control">
						<option value="1">Bootstrap Default</option>
					</select>
					<br>
					<select class="form-control input-sm">
						<option value="1">.input-sm</option>
					</select>
	    		</div>
	    		<div class="well well-sm">
	    			<code>
	    				<?php include('code/lesson4/control.php'); ?>
	    			</code>
	    		</div>
	    	</div>
	    </div>
    	<!-- column sizing -->
    	<div class="col-md-12">
    		<h3>Column Sizing</h3>
    		<p>Wrap inputs in grid columns, or any custom parent element, to easily enforce desired widths.</p>
    		<div class="table_example">
    			<form role="form">
					<div class="row">
						<div class="col-xs-2">
							<input class="form-control" type="text" placeholder=".col-xs-2">
						</div>
						<div class="col-xs-3">
							<input class="form-control" type="text" placeholder=".col-xs-3">
						</div>
						<div class="col-xs-4">
							<input class="form-control" type="text" placeholder=".col-xs-4">
						</div>
					</div>
				</form>
    		</div>
    		<div class="well well-sm">
    			<code>
    				<?php include('code/lesson4/column_sizing.php'); ?>
    			</code>
    		</div>
    	</div>

    	<!-- help form -->
    	<div class="col-md-12">
    		<h3>Help Form</h3>
    		<p>
    			Block level help text for form controls.
    		</p>
    		<div class="table_example">
    			<input type="text" class="form-control" placeholder="helper text below this input...very nice!">
    			<span class="help-block">A block of <strong>text</strong> that beaks to a new line while implying meaning to the above input.</span>
    		</div>
    		<div class="well well-sm">
    			<code>
    				<?php include('code/lesson4/help.php'); ?>
    			</code>
    		</div>
    	</div>
	
    </div>

    <div class="row"></div>


	<!-- lesson task -->
	<div class="task">
		<div class="task1">
			<div class="col-md-8">
				<h3>Now that you understand how to style form components, It's time to do some coding to solidify what you've learned!</h3>
				<p class="lead">Open the project folder you created earlier</p>
				<ol>
					<li>Start by creating a new div with a class of <code>container</code>.</li>
					<li>Add a <code>row</code> inside your <code>container</code> div.</li>
					<li>Create a div inside your <code>row</code> with a class of <code>col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4</code>, which will limit your forms size.</li>
					<li>nest the <code>&lt;form role="form"&gt;...&lt;/form&gt;</code> tags inside that div</li>
					<li>nest 4 <code>div</code> tags with the class of <code>form-group</code> inside your form tags.</li>
					<li>Inside each  of the first 3 <code>form-group</code>s, create a <code>&lt;label&gt;...&lt;/label</code>, an <code>&lt;input &gt;</code> and a <code>&lt;p class="help-block"...&lt;/p&gt;</code></li>
					<li>Inside the 4th <code>form-group</code> create a textarea with <code>&lt;textarea rows="5"&gt;...&lt;/textarea&gt;</code></li>
					<li>Next, you need to include the nice looking bootstrap css to your inputs and the textarea by adding <code>class="form-control"</code> to all 4 of them. Otherwise they wont look pretty!</li>
					<li>Now you need to assign some text to your labels by putting it between the opening and closing tags. Set your first label to say: Full Name, your second label should say: Email & the third: Subject</li>
					<li>Add type="text" to the 1st & 3rd <code>input</code> and type="email" in your 2nd <code>input</code></li>
					<li>Finally lets add a little dummy text to your <code>&lt;p&gt;</code> tags with <a href="http://www.lipsum.com" target="_blank">Lurem Ipsum</a> again, add as many words as you'd like into each one.</li>
				</ol>
				<p>Open this new file in your browser, and try resizing the browser. You should notice the form resizing automatically. Grid columns for the win!</p>
				<br>
				<a href="answers/lesson4b.php" target="_blank" class="text-danger">Compare what you built to ours</a>
				<p>GREAT JOB!!! you just hand built your first bootstrap form.</p>
				<p>Check out <a href="http://getbootstrap.com/css/#forms" target="_blank">Bootstrap Forms</a> for even more info about forms</p>
				<div class="next">
					<a href="#tab5" data-toggle="tab" class="btn btn-default btn-lg tabs"><i class="fa fa-child fa-2x"></i> NEXT UP, BOOTSTRAP BUTTONS & IMAGES <i class="fa fa-2x fa-child"></i></a>
				</div>
			</div>
		</div>
		<br>
		<div class="col-md-6">
			<a class="btn btn-danger btn-lg btn_task"><i class="fa fa-terminal"></i> Complete This Bootstrap <Strong>FORMS</Strong> Task Before Moving On!</a>
		</div>
	</div>

	<br>

  </article>
</div>