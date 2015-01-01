<!-- Lesson 3 - Helper Classes & Responsive Utilites -->
<div class="tab-pane" id="tab3">
  <article class="lesson3">

  	<!-- lesson title -->
    <div class="lesson_title">
      <h4>Lesson 3</h4>
      <h1>Bootstrap Helper Classes & Responsive Utilities</h1>
    </div>

    <!-- Helper Classes -->
    <div class="helper_classes">
    	<h2>HELPER CLASSES</h2>
    	<hr>
    	<div class="col-md-6">
    		<!-- contextual colors -->
	    	<h3>Contextual Colors</h3>
	    	<p>Convey meaning through color with a handful of emphasis utility classes. These may also be applied to links and will darken on hover just like our default link styles.</p>
	    	<div class="well well-sm help_well">
	    		<p class="text-muted">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
				<p class="text-primary">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
				<p class="text-success">Etiam porta sem malesuada magna mollis euismod.</p>
				<p class="text-info">Donec ullamcorper nulla non metus auctor fringilla.</p>
				<p class="text-warning">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
				<p class="text-danger">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	    	</div>
	    	<pre>
	    		<code>
<span class="div_color">&lt;p</span><span class="class_color"> class=</span><span class="container_color">"text-muted"</span><span class="div_color">&gt;</span><span class="content_color">...</span><span class="div_color">&lt;/p&gt;</span>
<span class="div_color">&lt;p</span><span class="class_color"> class=</span><span class="container_color">"text-primary"</span><span class="div_color">&gt;</span><span class="content_color">...</span><span class="div_color">&lt;/p&gt;</span>
<span class="div_color">&lt;p</span><span class="class_color"> class=</span><span class="container_color">"text-success"</span><span class="div_color">&gt;</span><span class="content_color">...</span><span class="div_color">&lt;/p&gt;</span>
<span class="div_color">&lt;p</span><span class="class_color"> class=</span><span class="container_color">"text-info"</span><span class="div_color">&gt;</span><span class="content_color">...</span><span class="div_color">&lt;/p&gt;</span>
<span class="div_color">&lt;p</span><span class="class_color"> class=</span><span class="container_color">"text-warning"</span><span class="div_color">&gt;</span><span class="content_color">...</span><span class="div_color">&lt;/p&gt;</span>
<span class="div_color">&lt;p</span><span class="class_color"> class=</span><span class="container_color">"text-danger"</span><span class="div_color">&gt;</span><span class="content_color">...</span><span class="div_color">&lt;/p&gt;</span>
	    		</code>
	    	</pre>
	    </div>

	    <div class="col-md-6">
	    	<!-- contextual backgrounds -->
	    	<h3>Contextual backgrounds</h3>
	    	<p>We easily set the background of an element to any contextual class. Anchor components darken on hover, just like the text classes.</p>
	    	<div class="background_padding well help_well">
		    	<p class="bg-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				<p class="bg-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
				<p class="bg-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
				<p class="bg-warning">Etiam porta sem malesuada magna mollis euismod.</p>
				<p class="bg-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
			</div>
			<pre>
	    		<code>
<span class="div_color">&lt;p</span><span class="class_color"> class=</span><span class="container_color">"bg-primary"</span><span class="div_color">&gt;</span>...<span class="div_color">&lt;/p&gt;</span>
<span class="div_color">&lt;p</span><span class="class_color"> class=</span><span class="container_color">"bg-success"</span><span class="div_color">&gt;</span>...<span class="div_color">&lt;/p&gt;</span>
<span class="div_color">&lt;p</span><span class="class_color"> class=</span><span class="container_color">"bg-info"</span><span class="div_color">&gt;</span>...<span class="div_color">&lt;/p&gt;</span>
<span class="div_color">&lt;p</span><span class="class_color"> class=</span><span class="container_color">"bg-warning"</span><span class="div_color">&gt;</span>...<span class="div_color">&lt;/p&gt;</span>
<span class="div_color">&lt;p</span><span class="class_color"> class=</span><span class="container_color">"bg-danger"</span><span class="div_color">&gt;</span>...<span class="div_color">&lt;/p&gt;</span>
	    		</code>
	    	</pre>
	    </div>

	    <div class="row"></div>

	    <div class="col-sm-6 col-md-6">
	    	<!-- Quick Floats -->
	    	<h3>Quick Floats</h3>
	    	<p>
			Float an element to the left or right with a class.
			<code>!important</code>
			is included to avoid specificity issues. Classes can also be used as mixins.
			</p>
			<pre>
<code>
<div class="pull-left">
<span class="div_color">&lt;div</span> <span class="class_color">class=</span><span class="container_color">"pull-left"</span><span class="div_color">&gt;</span>
<span class="content_padding">...</span>
<span class="div_color">&lt;/div&gt;</span>

//Bootstrap CSS
.pull-left {
  float: left !important;
}</div>

<div class="pull-right" style="position: relative;top: -35px;">
<span class="div_color">&lt;div</span> <span class="class_color">class=</span><span class="container_color">"pull-right"</span><span class="div_color">&gt;</span>
<span class="content_padding">...</span>
<span class="div_color">&lt;/div&gt;</span>

//Bootstrap CSS
.pull-right {
  float: right !important;
}</div>
</code>
</pre>
	    </div>

	    <div class="col-md-6">
	    	<!-- .center-block -->
	    	<h3>Center content blocks</h3>
	    	<p>
			Set an element to
			<code>display: block</code>
			and center via
			<code>margin</code>
			.
			</p>
			<br>
<pre>
<code>
<div class="center-block">
<span class="div_color">&lt;div</span> <span class="class_color">class=</span><span class="container_color">"center-block"</span><span class="div_color">&gt;</span>
<span class="content_padding">...
<span class="div_color">&lt;/div&gt;</span>
<div class="pull-right" style="position: relative;top: -75px;">
//Bootstrap CSS
.center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</div>
</div>
</code>
</pre>
	    </div>

	    <div class="row"></div>

	    <div class="col-md-4">
	    	<!-- .clear-fix -->
	    	<h3>Clear Fix</h3>
	    	<p>
			Easily clear
			<code>float</code>s by adding
			<code>.clearfix</code>
			<strong>to the parent element</strong>
			. Utilizes
			<a href="http://nicolasgallagher.com/micro-clearfix-hack/" target="_blank">the micro clearfix</a>
			as popularized by Nicolas Gallagher.
			</p>
			<pre>
<code>
<span class="div_color">&lt;div</span><span class="class_color">class=</span><span class="container_color">"clearfix"</span><span class="div_color">&gt;</span>
<span class="content_padding">...</span>
<span class="div_color">&lt;/div&gt;</span>

//Bootstrap CSS
.clearfix() {
  &:before,
  &:after {
    content: " ";
    display: table;
  }
  &:after {
    clear: both;
  }
}
</code>
			</pre>

	    </div>

	    <div class="col-md-8">
	    	<h3>Showing and hiding content</h3>
	    	<p>
			Force an element to be shown or hidden (
			<strong>including for screen readers</strong>
			) with the use of
			<code>.show</code>
			and
			<code>.hidden</code>
			classes. These classes use
			<code>!important</code>
			to avoid specificity conflicts, just like the quick floats
			. They are only available for block level toggling.
			</p>
			<p>
			<code>.hide</code>
			is available, but it does not always affect screen readers and is
			<strong>deprecated</strong>
			as of v3.0.1. Use
			<code>.hidden</code>
			or
			<code>.sr-only</code>
			instead.
			</p>
			<p>
			Furthermore,
			<code>.invisible</code>
			can be used to toggle only the visibility of an element, meaning its
			<code>display</code>
			is not modified and the element can still affect the flow of the document.
			</p>
			<pre>
<code>
<div class="pull-left">
<span class="div_color">&lt;div</span> <span class="class_color">class=</span><span class="container_color">"show"</span><span class="div_color">&gt;</span>
<span class="content_padding">...</span>
<span class="div_color">&lt;/div&gt;</span>
<br>
<span class="div_color">&lt;div</span> <span class="class_color">class=</span><span class="container_color">"hidden"</span><span class="div_color">&gt;</span>
<span class="content_padding">...</span>
<span class="div_color" style="clear:after;">&lt;/div&gt;</span>
<br>
<span class="div_color">&lt;div</span> <span class="class_color">class=</span><span class="container_color">"invisible"</span><span class="div_color">&gt;</span>
<span class="content_padding">...</span>
<span class="div_color" style="clear:after;">&lt;/div&gt;</span></div>
<div class="pull-right" style="position: relative;top:;">
//Bootstrap CSS

.show {
  display: block !important;
}
.hidden {
  display: none !important;
  visibility: hidden !important;
}
.invisible {
  visibility: hidden;
}</div>
</code>
</pre>

	    </div>

    </div>

    <div class="row"></div>

    <div class="responsive_utilities">
    	<div class="col-md-12">
	    	<h2>Responsive Utilities</h2>
	    	<p class="lead">For faster mobile-friendly development, use these utility classes for showing and hiding content by device via media query. Also included are utility classes for toggling content when printed.</p>
			<p>Try to use these on a limited basis and avoid creating entirely different versions of the same site. Instead, we use them to complement each device's presentation.</p>
			<hr>
			<div class="available_classes">
				<h3>Available Classes</h3>
				<p>Use a single or combination of the available classes for toggling content across viewport breakpoints.</p>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th/>
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
							<th>
								<code>.visible-xs-*</code>
							</th>
							<td class="is_visible">Visible</td>
							<td class="is_hidden">Hidden</td>
							<td class="is_hidden">Hidden</td>
							<td class="is_hidden">Hidden</td>
						</tr>
						<tr>
							<th>
								<code>.visible-sm-*</code>
							</th>
							<td class="is_hidden">Hidden</td>
							<td class="is_visible">Visible</td>
							<td class="is_hidden">Hidden</td>
							<td class="is_hidden">Hidden</td>
						</tr>
						<tr>
							<th>
								<code>.visible-md-*</code>
							</th>
							<td class="is_hidden">Hidden</td>
							<td class="is_hidden">Hidden</td>
							<td class="is_visible">Visible</td>
							<td class="is_hidden">Hidden</td>
						</tr>
						<tr>
							<th>
								<code>.visible-lg-*</code>
							</th>
							<td class="is_hidden">Hidden</td>
							<td class="is_hidden">Hidden</td>
							<td class="is_hidden">Hidden</td>
							<td class="is_visible">Visible</td>
						</tr>
					</tbody>
					<tbody>
						<tr>
							<th>
								<code>.hidden-xs</code>
							</th>
							<td class="is_hidden">Hidden</td>
							<td class="is_visible">Visible</td>
							<td class="is_visible">Visible</td>
							<td class="is_visible">Visible</td>
						</tr>
						<tr>
							<th>
								<code>.hidden-sm</code>
							</th>
							<td class="is_visible">Visible</td>
							<td class="is_hidden">Hidden</td>
							<td class="is_visible">Visible</td>
							<td class="is_visible">Visible</td>
						</tr>
						<tr>
							<th>
								<code>.hidden-md</code>
							</th>
							<td class="is_visible">Visible</td>
							<td class="is_visible">Visible</td>
							<td class="is_hidden">Hidden</td>
							<td class="is_visible">Visible</td>
						</tr>
						<tr>
							<th>
								<code>.hidden-lg</code>
							</th>
							<td class="is_visible">Visible</td>
							<td class="is_visible">Visible</td>
							<td class="is_visible">Visible</td>
							<td class="is_hidden">Hidden</td>
						</tr>
					</tbody>
				</table>
				<h3>Print Classes</h3>
				<p>Similar to the regular responsive classes, use these for toggling content for print.</p>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Classes</th>
							<th>Browser</th>
							<th>Print</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>
							<code>.visible-print-block</code>
							<br/>
							<code>.visible-print-inline</code>
							<br/>
							<code>.visible-print-inline-block</code>
							</th>
							<td class="is_hidden">Hidden</td>
							<td class="is_visible">Visible</td>
						</tr>
						<tr>
							<th>
							<code>.hidden-print</code>
							</th>
							<td class="is_visible">Visible</td>
							<td class="is_hidden">Hidden</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
    </div>

    <div class="row"></div>

	<!-- lesson task -->
	<div class="task">
		<div class="task1">
			<div class="col-md-8">
				<h3>Helper classes & Responsive classes come in handy!</h3>
				<p class="lead">Lets open our project folder again in sublime.</p>
				<ol>
					<li>Start with a new <code>.container-fluid</code> for first div after the <code>body</code> again.</li>
					<li>Next add a class of <code>row</code> to our next <code>div</code></li>
					<li>Create 3 new divs with varying columns <code>col-xs-12 col-md-6</code>, <code>col-xs-6 col-md-6</code> and <code>col-xs-6 col-md-12</code></li>
					<li>Create an <code>h1</code> tag, an <code>h3</code> tag and a <code>p</code> tag in each <code>div</code> and using <a href="http://www.lipsum.com/" target="_blank">Lorem Ipsum</a> fill these tags in with dummy text.</li>
					<li>In our 1st column div set the h1 to have a class of <code>text-primary</code> & <code>hidden-xs</code>, attach a class of <code>text-danger</code> & <code>hidden-md</code> to our h3, and finally <code>bg-info</code> to our p</li>
					<li>In our 2nd column div add the class of <code>bg-danger</code> & <code>hidden-md</code> to our h1, attach a class of <code>text-warning</code> & <code>hidden-md</code> to our h3, and a <code>text-info</code> & <code>hidden-xs</code> to the p tag</li>
					<li>In our final div set our h1 to have a class of <code>bg-info</code>, a class of <code>text-muted</code> for our h3 and <code>bg-success</code> & <code>visible-md</code> to our p tag</li>
				</ol>
				<p>Open this new file in our browser, and try resizing the browser. You should notice alot of stuff disappearing and appearing like MAGIC! You can officially do magic. CONGRATULATIONS</p>
				<br>
				<a href="answers/lesson3.php" target="_blank" class="text-danger">Check out how our new file should look</a>
				<p>GOOD JOB!!! You now have a firmer grasp on how to use these helper and responsive classes.</p>
				<p>Check out <a href="http://getbootstrap.com/css/#helper-classes" target="_blank">Bootstrap Helper classes</a> & 
								  <a href="http://getbootstrap.com/css/#responsive-utilities" target="_blank">Bootstrap Responsive</a> for a look at a few more of these classes that bootstrap provides.
				</p>
				<div class="next1">
					<a href="#tab4" data-toggle="tab" class="btn btn-default btn-lg tabs"><i class="fa fa-child fa-2x"></i> NEXT UP BOOTSTRAP TABLES & FORMS <i class="fa fa-2x fa-child"></i></a>
				</div>
			</div>
		</div>
		<br>
		<div class="col-md-6">
			<a class="btn btn-danger btn-lg btn_task"><i class="fa fa-terminal"></i> Complete This Bootstrap <strong>Helper & Responsive</strong> Class Task Before Moving On!</a>
		</div>
	</div>

	<br>

  </article>
</div>