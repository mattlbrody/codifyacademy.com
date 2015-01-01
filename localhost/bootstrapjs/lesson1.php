<!-- Lesson 1 - Getting Stared With Bootstrap -->
<div class="tab-pane" id="tab1">
  	<article class="lesson1">

		<div class="lesson_title">
			<h4>Lesson 1</h4>
			<h1>Learning to use Bootstrap Javascript</h1>
		</div>

		<!-- Overview of Bootstrap Javascript -->
	    <div id="#" class="#">
	        <h2>Overview of Bootstrap Javascript</h2>
	        <hr>

	        <!-- Individual vs compiled bootstrap.js -->
	        <div class="col-md-12">
		        <h3>
		          Individual vs compiled bootstrap.js
		        </h3>
		        <p>
			        Plugins can be included individually (using Bootstrap's individual
					<code>*.js</code>
					files), or all at once (using
					<code>bootstrap.js</code>
					or the minified
					<code>bootstrap.min.js</code>
				).
		        </p>
		        <div class="col-md-4">
			        <div class="panel panel-danger">
					    <div class="panel-heading">Using the compiled JavaScript</div>
						<div class="panel-body">
						    Both
							<code>bootstrap.js</code>
							and
							<code>bootstrap.min.js</code>
							contain all plugins in a single file. <strong>Make sure to use only one.</strong>
						</div>
					</div>
				</div>
				<div class="col-md-8">
			        <div class="panel panel-success">
					    <div class="panel-heading">Component data attributes</div>
						<div class="panel-body">
						    Don't use data attributes from multiple plugins on the same element. For example, a button cannot both have a tooltip and toggle a modal. To accomplish this, use a wrapping element.
						</div>
					</div>
				</div>
	        </div>
	        <!-- attributes -->
	        <div class="col-md-12">
		        <h3>
		          Data attributes
		        </h3>
		        <p>
		        	You can use all Bootstrap plugins purely through the markup API without writing a single line of JavaScript. This is Bootstrap's first-class API and should be your first consideration when using a plugin.
		        </p>
				<p>
					That said, in some situations it may be desirable to turn this functionality off. Therefore, we also provide the ability to disable the data attribute API by unbinding all events on the document namespaced with
					<code>data-api</code>
					. This looks like this:
				</p>
		        <div class="well well-sm">    
		          <code>
		            <?php include('code/lesson1/data_atr1.php'); ?>
		          </code>     
		        </div>
		        <p>Alternatively, to target a specific plugin, just include the plugin's name as a namespace along with the data-api namespace like this:</p>
		        <div class="well well-sm">    
		          <code>
		            <?php include('code/lesson1/data_atr2.php'); ?>
		          </code>     
		        </div>
	        </div>
	        <!-- apis -->
	        <div class="col-md-12">
	        	<h3>Programmatic API</h3>
	        	<p>
	        		We also believe you should be able to use all Bootstrap plugins purely through the JavaScript API. All public APIs are single, chainable methods, and return the collection acted upon.
	        	</p>
	        	<div class="well well-sm">    
		          <code>
		            <?php include('code/lesson1/program_api1.php'); ?>
		          </code>     
		        </div>
		        <p>
		        	All methods should accept an optional options object, a string which targets a particular method, or nothing (which initiates a plugin with default behavior):
		        </p>
		        <div class="well well-sm">    
		          <code>
		            <?php include('code/lesson1/program_api2.php'); ?>
		          </code>     
		        </div>
		        <p>
		        	Each plugin also exposes its raw constructor on a
					<code>Constructor</code>
					property:
					<code>$.fn.popover.Constructor</code>
					. If you'd like to get a particular plugin instance, retrieve it directly from an element:
					<code>$('[rel="popover"]').data('popover')</code>
				</p>
	        </div>
	        <!-- events -->
	        <div class="col-md-12">
	        	<h3>Events</h3>
	        	<p>
	        		Bootstrap provides custom events for most plugins' unique actions. Generally, these come in an infinitive and past participle form - where the infinitive (ex.
					<code>show</code>
					) is triggered at the start of an event, and its past participle form (ex.
					<code>shown</code>
					) is triggered on the completion of an action.
	        	</p>
	        	<p>
					All infinitive events provide
					<code>preventDefault</code>
					functionality. This provides the ability to stop the execution of an action before it starts.
				</p>
	        	<div class="well well-sm">    
		          <code>
		            <?php include('code/lesson1/event.php'); ?>
		          </code>     
		        </div>		
		        <div class="panel panel-warning">
				    <div class="panel-heading">THIRD-PARTY LIBRARIES</div>
					<div class="panel-body">
						<strong>Bootstrap does not officially support third-party JavaScript libraries</strong>
						like Prototype or jQuery UI. Despite
						<code>.noConflict</code>
						and namespaced events, there may be compatibility problems that you need to fix on your own.    
					</div>
				</div>   
	        </div>
	    </div>

		<!-- next section -->
		<div class="">
			<a href="#tab2" data-toggle="tab" class="btn btn-success btn-lg tabs"><i class="fa fa-child fa-2x"></i> LETS GET MOVIN ON TO THE BOOTSTRAP MODALS<i class="fa fa-2x fa-child"></i></a>
		</div>

  	</article>
</div>