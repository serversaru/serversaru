<div id="content">
	<!-- if you want active dragable panel, you should add #sortable-panel. handler drag-drop configured on .panel -->
	<div  class="">

		<div id="titr-content" class="col-md-12">
			<h2>Image Crop</h2>
			<h5>easy way to add image cropping functionality to your web application...</h5>
			<div class="actions">
				<button class="btn btn-success ">Add new</button>
				<button class="btn btn-default ">Options</button>
			</div>
		</div>

		<div class="col-md-12 ">
			<div class="panel with-nav-tabs panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="bars pull-right">
							<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
							<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
							<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>
						</div>
					</div>
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#tab1crop" data-toggle="tab">
								<i class="fa fa-home success"></i>
								Basic Image Crop
							</a>
						</li>
						<li>
							<a href="#tab2crop" data-toggle="tab">
								<i class="fa fa-crop primary"></i>
								Feature Panel
							</a>
						</li>
						<li>
							<a href="#tab3crop" data-toggle="tab">
								<i class="fa fa-circle-o danger"></i>
								Circles

							</a>
						</li>

					</ul>
				</div>
				<div class="panel-body">
					<div class="tab-content">
						<div class="tab-pane fade in active" id="tab1crop">

							<div class="alert alert-info">
								<p>
									<b>An example with a basic event handler.</b> Here we've tied
									several form values together with a simple event handler invocation.
									The result is that the form values are updated in real-time as
									the selection is changed using Jcrop's <em>onChange</em> handler.
								</p>
								<p>
									That's how easily Jcrop can be integrated into a traditional web form!
								</p>
							</div>
							<div id="interface" class="page-interface col-md-6">
								<img  id="target-basic" src="../assets/img/gallery/a2-small.jpg" alt="sample" class="img-responsive" width="600">
							</div>
							<div class="col-md-6">
								<form  class="form-inline">
									<label class="input-group"><b>X</b>
										<input type="text" name="cx" id="crop-x" size="8" class="span1">
									</label>
									<label class="input-group"><b>Y</b>
										<input type="text" name="cy" id="crop-y" size="8" class="span1">
									</label>
									<label class="input-group"><b>W</b>
										<input type="text" name="cw" id="crop-w" size="8" class="span1">
									</label>
									<label class="input-group"><b>H</b>
										<input type="text" name="ch" id="crop-h" size="8" class="span1">
									</label>
								</form>
							</div>
						</div>

						<div class="tab-pane fade" id="tab2crop">

							<div class="col-md-5">
								<img  id="target" src="../assets/img/gallery/b1.jpg" alt="example" height="339" width="604" class="img-responsive">
							</div>
							<div class="col-md-7">

								<div class="row-fluid">
									<div class="col-md-4">
										<h5>Selection Properties</h5>
										<div id="selection-options">
											<div class="checkbox">
												<input data-filter-toggle="canDrag" id="can_drag" type="checkbox" >
												<label for="can_drag">
													Draggable
												</label>
											</div>
											<div class="checkbox">
												<input type="checkbox" data-filter-toggle="canResize" id="can_size" >
												<label for="can_size">
													Resizable
												</label>
											</div>
											<div class="checkbox">
												<input type="checkbox" data-filter-toggle="canDelete" id="can_delete" >
												<label for="can_delete">
													Deletable
												</label>
											</div>
										</div>
										<div class="checkbox">
											<input type="checkbox" data-action="set-bounds" id="set_bounds" >
											<label for="set_bounds">
												Enable boundary
											</label>
										</div>
										<div class="checkbox">
											<input type="checkbox" data-action="set-minsize" id="set_minsize" >
											<label for="set_minsize">
												Minimum Size
											</label>
										</div>
										<div class="checkbox">
											<input type="checkbox" data-action="set-maxsize" id="set_maxsize" >
											<label for="set_maxsize">
												Maximum Size
											</label>
										</div>
									</div>
									<div class="col-md-4">
										<h5>Aspect Ratio</h5>
										<div class="btn-toolbar">
											<span id="ar-links" class="btn-group">
												<a href="#" data-action="set-ar" data-value="0" id="ar-free" class="btn btn-default  active btn-sm">Free</a>
												<a href="#" data-action="set-ar" data-value="lock" id="ar-lock" class="btn btn-default  btn-sm">Lock</a>
												<a href="#" data-action="set-ar" data-value="1.4" class="btn btn-default  btn-sm">Wide</a>
												<a href="#" data-action="set-ar" data-value=".8" class="btn btn-default  btn-sm">Tall</a>
											</span>
										</div>
										<h5>Shading</h5>
										<div id="shading-tools" class="btn-toolbar">
											<a href="#" data-action="color-cycle" class="btn btn-sm">Color</a>
											<span class="btn-group">
												<a href="#" data-action="set-opacity" data-opacity=".35" class="btn btn-default active btn-sm">Light</a>
												<a href="#" data-action="set-opacity" data-opacity=".55" class="btn btn-default btn-sm">Medium</a>
												<a href="#" data-action="set-opacity" data-opacity=".75" class="btn btn-default btn-sm">Dark</a>
											</span>
										</div>
										<h5>Animation</h5>
										<div class="checkbox">
											<input type="checkbox" id="anim_mode">
											<label for="anim_mode">
												Enable Animation
											</label>
										</div>
										<select data-action="update-easing" id="easing" class="select">
											<option>linear</option>
											<option>swing</option>
											<option>easeInOutQuad</option>
											<option>easeInQuad</option>
											<option>easeOutQuad</option>
											<option>easeInOutExpo</option>
											<option>easeInExpo</option>
											<option>easeOutExpo</option>
											<option>easeInOutSine</option>
											<option>easeInSine</option>
											<option>easeOutSine</option>
											<option>easeOutBounce</option>
											<option>easeInOutCirc</option>
											<option>easeInCirc</option>
											<option>easeOutCirc</option>
											<option>easeInOutCubic</option>
											<option>easeInCubic</option>
											<option>easeOutCubic</option>
											<option>easeOutElastic</option>
											<option>easeInOutBack</option>
											<option>easeInBack</option>
											<option>easeOutBack</option>
											<option>easeInOutQuart</option>
											<option>easeInQuart</option>
											<option>easeOutQuart</option>
											<option>easeInOutQuint</option>
											<option>easeInQuint</option>
											<option>easeOutQuint</option>
										</select>
									</div>
									<div class="col-md-4">
										<h5>Current Selection</h5>
										<div class="checkbox">
											<input type="checkbox" data-filter-toggle="ratio" id="islinked">
											<label for="islinked">
												Linked Selection
											</label>
										</div>
										<div class="btn-toolbar">
											<a href="#" data-action="random-move" id="moveselection" class="btn btn-default  btn-sm">Move</a>
											<a href="#" data-action="cleanup-all" class="btn btn-default  btn-sm">Cleanup</a>
										</div>
										<h5>New Selections</h5>
										<div class="btn-toolbar">
											<span class="btn-group">
												<a href="#" data-action="set-selmode" data-mode="none" class="btn btn-default  btn-sm">None</a>
												<a href="#" data-action="set-selmode" data-mode="single" class="btn btn-default  btn-sm">Single</a>
												<a href="#" data-action="set-selmode" data-mode="multi" class="btn btn-default  active btn-sm">Multi</a>
											</span>
										</div>
										<h5>Test Image</h5>
										<div class="btn-toolbar">
											<span class="btn-group">
												<a href="#" data-action="set-image" data-image="sierra" class="btn btn-default  btn-sm">Sierra1</a>
												<a href="#" data-action="set-image" data-image="sierra2" class="btn btn-default  active btn-sm">Sierra2</a>
												<a href="#" data-action="set-image" data-image="market" class="btn btn-default  btn-sm">Market</a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="tab3crop">
							<div class="col-md-6">
								<img id="target-circle" src="../assets/img/gallery/full-small.jpg" alt="full small" height="339" width="604" class="jcrop">
							</div>
							<div class="col-md-6">

								<div class="page-interface">
									<div class="btn-toolbar">
										<a href="#" data-action="random-move" id="moveselection2" class="btn btn-default btn-sm">Move</a>
										<span class="btn-group">
											<a href="#" data-setting="aspectRatio" data-value="1" class="btn btn-default active btn-sm">Circle</a>
											<a href="#" data-setting="aspectRatio" data-value="0" class="btn btn-default btn-sm">Ellipse</a>
										</span>
										<span class="btn-group">
											<a href="#" data-setting="multi" data-value="0" class="btn btn-default active btn-sm">Single </a>
											<a href="#" data-setting="multi" data-value="1" class="btn btn-default btn-sm">Multi</a>
										</span>
									</div>
									<h3>About This Demo</h3><p><strong>And you thought Jcrop could only do rectangles!</strong> Well, that&#39;s still
									mostly true. This demo implements a custom <code>Selection</code> object that
									uses CSS properties to create the appearance of circles and ellipses.</p>

									<h4>Custom CSS and Shading</h4>

									<p>By setting the CSS property <code>border-radius: 50%</code>, we can give the
									selection an appearance of a circle or an ellipse. The built-in
									shader filter has been disabled, and a semi-opaque <code>&lt;div&gt;</code> has been
									inserted over the image to give the appearance of shading.</p>

									<h4>Cropping Irregular Selections</h4>

									<p>If you actually want to <em>crop</em> a circle or an ellipse, you&#39;re on
									your own. Jcrop will provide the rectangular coordinates for these
									crops, and further processing can be done to extract the circle
									or ellipse from the image.</p>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div><!-- end panel -->
		</div><!-- end .col-md-12 -->

	</div><!-- end col-md-12 -->
</div>