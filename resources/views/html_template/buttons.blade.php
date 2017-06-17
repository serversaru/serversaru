<div id="content">
	<!-- if you want active dragable panel, you should add #sortable-panel. handler drag-drop configured on .panel -->
	<div class="">

		<div id="titr-content" class="col-md-12">
			<h2>Buttons & icons</h2>
			<h5>buttons, icons, dropdowns and more ...</h5>
			<div class="actions">
				<button class="btn btn-success ">Add new</button>
				<button class="btn btn-default ">Options</button>
			</div>
		</div>

		<div class="col-md-6 layout no-padding">

			<div class="col-md-12 ">
				<div  class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<i class="fa fa-cube"></i>
							Drop Down buttons
							<div class="bars pull-right">
								<div class="dropdown ">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-cog"></i>
									</a>
									<ul class="dropdown-menu yep-panel-menu">
										<li>
											<a href="#">Daily<span class="badge pull-right"></span></a>
										</li>
										<li>
											<a href="#">Monthly<span class="badge pull-right"></span></a>
										</li>
										<li>
											<a href="#">Yearly<span class="badge pull-right"> 42 </span></a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">All time<span class="badge pull-right">56</span></a>
										</li>
									</ul>
								</div>
								<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
								<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
								<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>
							</div>
						</div>
					</div>
					<div class="panel-body">

						<p>
							Button group with dropup/dropdown toggle
							<code>
								.btn-group
							</code>
						</p>

						<div class="btn-group">
							<button class="btn btn-primary">
								Drop Down
							</button>
							<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li>
									<a href="javascript:void(0);">Action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Another action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Something else here</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="javascript:void(0);">Separated link</a>
								</li>
							</ul>
						</div>
						<div class="btn-group dropup">
							<button class="btn btn-default">
								Drop Up
							</button>
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li>
									<a href="javascript:void(0);">Action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Another action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Something else here</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="javascript:void(0);">Separated link</a>
								</li>
							</ul>
						</div>

						<hr class="simple">

						<p>
							Default button dropdowns
							<code>
								.dropdown-toggle
							</code>
						</p>

						<div class="btn-group">
							<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								Action <span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li>
									<a href="javascript:void(0);">Action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Another action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Something else here</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="javascript:void(0);">Separated link</a>
								</li>
							</ul>
						</div>
						<div class="btn-group">
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								Action <span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li>
									<a href="javascript:void(0);">Action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Another action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Something else here</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="javascript:void(0);">Separated link</a>
								</li>
							</ul>
						</div>
						<hr class="simple">
						<p>
							Smaller button dropdowns
							<code>
								.btn-sm .dropdown-toggle
							</code>
						</p>
						<div class="btn-group">
							<button class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
								Action <span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li>
									<a href="javascript:void(0);">Action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Another action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Something else here</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="javascript:void(0);">Separated link</a>
								</li>
							</ul>
						</div>
						<div class="btn-group">
							<button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
								Action <span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li>
									<a href="javascript:void(0);">Action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Another action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Something else here</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="javascript:void(0);">Separated link</a>
								</li>
							</ul>
						</div>
						<hr class="simple">

						<p>
							Extra small button dropdowns
							<code>
								.btn-xs .dropdown-toggle
							</code>
						</p>
						<div class="btn-group">
							<button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
								Action <span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li>
									<a href="javascript:void(0);">Action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Another action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Something else here</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="javascript:void(0);">Separated link</a>
								</li>
							</ul>
						</div>
						<div class="btn-group">
							<button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
								Action <span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li>
									<a href="javascript:void(0);">Action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Another action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Something else here</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="javascript:void(0);">Separated link</a>
								</li>
							</ul>
						</div>

						<hr class="simple">
						<h3>Multiple Level Dropdown <small><span class="label label-warning">New!</span></small></h3>
						<p>
							Custom created Multiple Level dropdown that works with ease! Simply use the class
							<code>
								.dropdown-menu .multi-level
							</code>
						</p>
						<div class="dropdown">
							<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="javascript:void(0);"> Multi Level <span class="caret"></span> </a>
							<ul class="dropdown-menu multi-level" role="menu">
								<li>
									<a href="javascript:void(0);">Some action</a>
								</li>
								<li>
									<a href="javascript:void(0);">Some other action</a>
								</li>
								<li class="divider"></li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="javascript:void(0);">Hover me for more options</a>
									<ul class="dropdown-menu">
										<li>
											<a tabindex="-1" href="javascript:void(0);">Second level</a>
										</li>
										<li class="dropdown-submenu">
											<a href="javascript:void(0);">Even More..</a>
											<ul class="dropdown-menu">
												<li>
													<a href="javascript:void(0);">3rd level</a>
												</li>
												<li>
													<a href="javascript:void(0);">3rd level</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0);">Second level</a>
										</li>
										<li>
											<a href="javascript:void(0);">Second level</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>


					</div>
				</div><!-- end panel -->
			</div><!-- end .col-md-12 -->

			<div class="col-md-12 ">
				<div  class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<i class="fa fa-cube"></i>
							Block Buttons
							<div class="bars pull-right">
								<div class="dropdown ">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-cog"></i>
									</a>
									<ul class="dropdown-menu yep-panel-menu">
										<li>
											<a href="#">Daily<span class="badge pull-right"></span></a>
										</li>
										<li>
											<a href="#">Monthly<span class="badge pull-right"></span></a>
										</li>
										<li>
											<a href="#">Yearly<span class="badge pull-right"> 42 </span></a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">All time<span class="badge pull-right">56</span></a>
										</li>
									</ul>
								</div>
								<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
								<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
								<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

							</div>
						</div>
					</div>
					<div class="panel-body">

						<p>
							Block buttons
							<code>
								.btn .btn-block
							</code>
						</p>

						<div class="well">
							<button type="button" class="btn btn-primary btn-lg btn-block">
								Block level button
							</button>
							<button type="button" class="btn btn-default btn-sm btn-block">
								Block level small button
							</button>
							<button type="button" class="btn btn-default btn-xs btn-block">
								Block level extra small button
							</button>
						</div>

						<hr class="simple">

						<p>
							Block group buttons
							<code>
								.btn-group .btn-group-justified
							</code>
						</p>

						<div class="well">

							<div class="btn-group btn-group-justified">
								<a href="javascript:void(0);" class="btn btn-default">Left</a>
								<a href="javascript:void(0);" class="btn btn-default">Middle</a>
								<a href="javascript:void(0);" class="btn btn-default">Right</a>
							</div>

						</div>

					</div>
				</div><!-- end panel -->
			</div><!-- end .col-md-12 -->

			<div class="col-md-12 ">
				<div  class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<i class="fa fa-cube"></i>
							Circle Button
							<div class="bars pull-right">
								<div class="dropdown ">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-cog"></i>
									</a>
									<ul class="dropdown-menu yep-panel-menu">
										<li>
											<a href="#">Daily<span class="badge pull-right"></span></a>
										</li>
										<li>
											<a href="#">Monthly<span class="badge pull-right"></span></a>
										</li>
										<li>
											<a href="#">Yearly<span class="badge pull-right"> 42 </span></a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">All time<span class="badge pull-right">56</span></a>
										</li>
									</ul>
								</div>
								<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
								<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
								<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

							</div>
						</div>
					</div>
					<div class="panel-body">

						<p>
							Default round buttons
							<code>
								.btn-circle
							</code>
						</p>
						<button type="button" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-list"></i></button>
						<button type="button" class="btn btn-default btn-circle"><i class="glyphicon glyphicon-ok"></i></button>
						<p></p>
						<p>
							Large round buttons
							<code>
								.btn-circle .btn-lg
							</code>
						</p>
						<button type="button" class="btn btn-primary btn-circle btn-lg"><i class="glyphicon glyphicon-list"></i></button>
						<button type="button" class="btn btn-default btn-circle btn-lg"><i class="glyphicon glyphicon-ok"></i></button>
						<p></p>
						<p>
							Extra Large round buttons
							<code>
								.btn-circle .btn-xl
							</code>
						</p>
						<button type="button" class="btn btn-primary btn-circle btn-xl"><i class="glyphicon glyphicon-list"></i></button>
						<button type="button" class="btn btn-default btn-circle btn-xl"><i class="glyphicon glyphicon-ok"></i></button>
					</div>
				</div><!-- end panel -->
			</div><!-- end .col-md-12 -->

			<div class="col-md-12 ">
				<div  class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<i class="fa fa-cube"></i>
							Buttons with loading indicator
							<div class="bars pull-right">
								<div class="dropdown ">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-cog"></i>
									</a>
									<ul class="dropdown-menu yep-panel-menu">
										<li>
											<a href="#">Daily<span class="badge pull-right"></span></a>
										</li>
										<li>
											<a href="#">Monthly<span class="badge pull-right"></span></a>
										</li>
										<li>
											<a href="#">Yearly<span class="badge pull-right"> 42 </span></a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">All time<span class="badge pull-right">56</span></a>
										</li>
									</ul>
								</div>
								<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
								<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
								<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<p class="alert alert-info">
							To use this button import css and js:<code>ladda-themeless.min.css</code>,<code>ladda.min.js</code>,<code>spin.min.js</code>
						</p>

						<p>
							<button class="btn btn-primary ladda-button" data-style="expand-left"><span class="ladda-label">expand-left</span></button>
							<button class="btn btn-primary ladda-button" data-style="expand-right"><span class="ladda-label">expand-right</span></button>
							<button class="btn btn-primary ladda-button" data-style="expand-up"><span class="ladda-label">expand-up</span></button>
							<button class="btn btn-primary ladda-button" data-style="expand-down"><span class="ladda-label">expand-down</span></button>
							<br>
							Default buttons <code>.ladda-button</code> & 	<code>data-style="expand-*"</code>
						</p>

						<p>
							<button class="btn btn-info ladda-button" data-style="zoom-in"><span class="ladda-label">zoom-in</span></button>
							<button class="btn btn-info ladda-button" data-style="zoom-out"><span class="ladda-label">zoom-out</span></button>
							<br>
							Zoom buttons <code>.ladda-button</code> & 	<code>data-style="zoom-*"</code>
						</p>

						<p>
							<button class="btn btn-danger ladda-button" data-style="slide-left"><span class="ladda-label">slide-left</span></button>
							<button class="btn btn-danger ladda-button" data-style="slide-right"><span class="ladda-label">slide-right</span></button>
							<button class="btn btn-danger ladda-button" data-style="slide-up"><span class="ladda-label">slide-up</span></button>
							<button class="btn btn-danger ladda-button" data-style="slide-down"><span class="ladda-label">slide-down</span></button>
							<br>
							Slide buttons <code>.ladda-button</code> & 	<code>data-style="slide-*"</code>
						</p>

						<div class="row">
							<div class="col-md-12 progress-btn">

								<p>
									<button class="btn btn-success ladda-button" data-style="expand-right"><span class="ladda-label">expand-right</span></button>
									<button class="btn btn-success ladda-button" data-style="expand-left"><span class="ladda-label">expand-left</span></button>
									<button class="btn btn-success ladda-button" data-style="contract"><span class="ladda-label">contract</span></button>
									<br>
									Built-in progress bar use <code>div</code> container with <code>.progress-btn</code> css class
								</p>
							</div>
						</div>


						<p>
							<button class="btn btn-primary btn-xs ladda-button" data-style="expand-right" data-size="xs"><span class="ladda-label">extra small</span></button>
							<button class="btn btn-primary btn-sm ladda-button" data-style="expand-right" data-size="s"><span class="ladda-label">small</span></button>
							<button class="btn btn-primary btn-lg ladda-button" data-style="expand-right" data-size="l"><span class="ladda-label">large</span></button>
							<br>
							Size buttons <code>.btn-xs</code>,<code>.btn-sm</code>,<code>.btn-lg</code>
						</p>

					</div>
				</div><!-- end panel -->
			</div><!-- end .col-md-12 -->

			<div class="col-md-12 ">
				<div  class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<i class="fa fa-cube"></i>
							Icon Picker
							<div class="bars pull-right">
								<div class="dropdown ">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-cog"></i>
									</a>
									<ul class="dropdown-menu yep-panel-menu">
										<li>
											<a href="#">Daily<span class="badge pull-right"></span></a>
										</li>
										<li>
											<a href="#">Monthly<span class="badge pull-right"></span></a>
										</li>
										<li>
											<a href="#">Yearly<span class="badge pull-right"> 42 </span></a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">All time<span class="badge pull-right">56</span></a>
										</li>
									</ul>
								</div>
								<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
								<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
								<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

							</div>
						</div>
					</div>
					<div class="panel-body">
						<p class="alert alert-info">
							To use iconpicker in a form just add attribute <code class="code-default">name=""</code> in button tag or div tag.
						</p>
						<p>
							For glyphicon picker <code>data-icon="glyphicon-camera" data-iconset="glyphicon" role="iconpicker"</code>
						</p>
						<div class="input-group">
							<span class="input-group-btn">
								<button class="btn btn-default iconpicker" data-icon="glyphicon-camera" data-iconset="glyphicon" role="iconpicker"></button>
							</span>
							<input type="text" class="form-control" placeholder="Link URL for Glyphicon">
						</div>
						<hr>
						<p>
							For font awesome picker <code>data-icon="fa-wifi" data-iconset="fontawesome" role="iconpicker"</code>
						</p>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Link URL for font awesome icon">
							<span class="input-group-btn">
								<button class="btn btn-default iconpicker" data-icon="fa-wifi" data-iconset="fontawesome" role="iconpicker"></button>
							</span>
						</div>
						<hr>
						<p></p>
						<div class="row text-center">
							<div class="col-md-3">
								<p><code>data-placement="left"</code></p>
								<button class="btn btn-default iconpicker" data-icon="glyphicon-arrow-left" data-placement="left" role="iconpicker"  data-original-title="" title=""><i class="glyphicon glyphicon-arrow-left"></i><input type="hidden" value="glyphicon-arrow-left"><span class="caret"></span></button>
							</div>
							<div class="col-md-3">
								<p><code>data-placement="top"</code></p>
								<button class="btn btn-default iconpicker" data-icon="glyphicon-arrow-up" data-placement="top" role="iconpicker"  data-original-title="" title=""><i class="glyphicon glyphicon-arrow-up"></i><input type="hidden" value="glyphicon-arrow-up"><span class="caret"></span></button>
							</div>
							<div class="col-md-3">
								<p><code>data-placement="bottom"</code></p>
								<button class="btn btn-default iconpicker" data-icon="glyphicon-arrow-down" data-placement="bottom" role="iconpicker" ><i class="glyphicon glyphicon-arrow-down"></i><input type="hidden" value="glyphicon-arrow-down"><span class="caret"></span></button>
							</div>
							<div class="col-md-3">
								<p><code>data-placement="right"</code></p>
								<button class="btn btn-default iconpicker" data-icon="glyphicon-arrow-right" data-placement="right" role="iconpicker" ><i class="glyphicon glyphicon-arrow-right"></i><input type="hidden" value="glyphicon-arrow-right"><span class="caret"></span></button>
							</div>
						</div>
						<hr>

						<div class="col-md-6">
							<h5>Other Options:</h5>
							<code>data-arrow-class="btn-success"</code><br><br>
							<code>data-arrow-prev-icon-class="glyphicon glyphicon-chevron-left"</code><br><br>
							<code>data-arrow-next-icon-class="glyphicon glyphicon-chevron-right"</code><br><br>
							<code>data-cols="10"</code><br>
							<code>data-rows="4"</code>
						</div>
						<div class="col-md-6">
							<div data-search="true" data-search-text="Search..." data-arrow-class="btn-success" data-arrow-prev-icon-class="glyphicon glyphicon-chevron-left" data-arrow-next-icon-class="glyphicon glyphicon-chevron-right" data-selectedClass="btn-success" data-cols="5" role="iconpicker"></div>
						</div>


					</div>
				</div><!-- end panel -->
			</div><!-- end .col-md-12 -->
		</div><!-- end .col-md-6 -->

		<div class="col-md-6 layout no-padding">
			<div class="col-md-12 ">
				<div  class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<i class="fa fa-cube"></i>
							Buttons
							<div class="bars pull-right">
								<div class="dropdown ">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-cog"></i>
									</a>
									<ul class="dropdown-menu yep-panel-menu">
										<li>
											<a href="#">Daily<span class="badge pull-right"></span></a>
										</li>
										<li>
											<a href="#">Monthly<span class="badge pull-right"></span></a>
										</li>
										<li>
											<a href="#">Yearly<span class="badge pull-right"> 42 </span></a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">All time<span class="badge pull-right">56</span></a>
										</li>
									</ul>
								</div>
								<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
								<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
								<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

							</div>
						</div>
					</div>
					<div class="panel-body">

						<p class="alert alert-info">
							The icons below are the most basic ones, without any icons or additional css applied to it
						</p>

						<p>
							Buttons come in 6 different default color sets
							<code>
								.btn .btn-*
							</code>
							<code>
								.btn-default, .btn-primary, .btn-success... etc
							</code>
						</p>
						<a href="javascript:void(0);" class="btn btn-default">Default</a>
						<a href="javascript:void(0);" class="btn btn-primary">Primary</a>
						<a href="javascript:void(0);" class="btn btn-success">Success</a>
						<a href="javascript:void(0);" class="btn btn-info">Info</a>
						<a href="javascript:void(0);" class="btn btn-warning">Warning</a>
						<a href="javascript:void(0);" class="btn btn-danger">Danger</a>
						<a href="javascript:void(0);" class="btn btn-default disabled">Disabled</a>
						<a href="javascript:void(0);" class="btn btn-link">Link</a>

					</div>
				</div><!-- end panel -->
			</div><!-- end .col-md-12 -->

			<div class="col-md-12 ">
				<div  class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<i class="fa fa-cube"></i>
							Button Sizing
							<div class="bars pull-right">
								<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
								<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
								<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>
							</div>
						</div>
					</div>
					<div class="panel-body">

						<p>
							Large buttons to attract call to action
							<code>
								.btn .btn-lg
							</code>
						</p>
						<a href="javascript:void(0);" class="btn btn-primary btn-lg">Large button</a>&nbsp;<a href="javascript:void(0);" class="btn btn-default btn-lg">Large button</a>
						<hr class="simple">

						<p>
							The Default button
							<code>
								.btn .btn-default
							</code>
						</p>
						<a href="javascript:void(0);" class="btn btn-primary">Default button</a>&nbsp;<a href="javascript:void(0);" class="btn btn-default">Default button</a>
						<hr class="simple">

						<p>
							Small button for elegance
							<code>
								.btn .btn-sm
							</code>
						</p>
						<a href="javascript:void(0);" class="btn btn-primary btn-sm">Small button</a>&nbsp;<a href="javascript:void(0);" class="btn btn-default btn-sm">Small button</a>
						<hr class="simple">

						<p>
							Extra small button for added info
							<code>
								.btn .btn-xs
							</code>
						</p>
						<a href="javascript:void(0);" class="btn btn-primary btn-xs">Mini button</a>&nbsp;<a href="javascript:void(0);" class="btn btn-default btn-xs">Mini button</a>


					</div>
				</div><!-- end panel -->
			</div><!-- end .col-md-12 -->

			<div class="col-md-12 ">
				<div  class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<i class="fa fa-cube"></i>
							Button Groups
							<div class="bars pull-right">
								<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
								<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
								<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>
							</div>
						</div>
					</div>
					<div class="panel-body">

						<p>
							Group a series of buttons together on a single line with the button group. Wrap a series of buttons with
							<code>
								.btn
							</code>
							in
							<code>
								.btn-group
							</code>
							.
						</p>

						<div class="row">
							<div class="col-md-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th style="width:25%">Horizontal Group</th>
											<th style="width:25%">With Icons</th>
											<th style="width:50%">Multiple Button Groups</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
											<div class="btn-group">
												<button type="button" class="btn btn-default">
													Left
												</button>
												<button type="button" class="btn btn-default">
													Middle
												</button>
												<button type="button" class="btn btn-default">
													Right
												</button>
											</div></td>
											<td>
											<div class="btn-group">
												<button type="button" class="btn btn-default">
													<i class="fa fa-align-left"></i>
												</button>
												<button type="button" class="btn btn-default">
													<i class="fa fa-align-center"></i>
												</button>
												<button type="button" class="btn btn-default">
													<i class="fa fa-align-right"></i>
												</button>
												<button type="button" class="btn btn-default">
													<i class="fa fa-align-justify"></i>
												</button>
											</div></td>
											<td>
											<div class="btn-toolbar">
												<div class="btn-group">
													<button type="button" class="btn btn-default">
														1
													</button>
													<button type="button" class="btn btn-default">
														2
													</button>
													<button type="button" class="btn btn-default">
														3
													</button>
													<button type="button" class="btn btn-default">
														4
													</button>
												</div>
												<div class="btn-group">
													<button type="button" class="btn btn-default">
														5
													</button>
													<button type="button" class="btn btn-default">
														6
													</button>
													<button type="button" class="btn btn-default">
														7
													</button>
												</div>
												<div class="btn-group">
													<button type="button" class="btn btn-default">
														8
													</button>
												</div>
											</div></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<hr class="simple">
						<p>
							Make a set of buttons appear vertically stacked rather than horizontally by putting it in
							<code>
								.btn-group-vertical
							</code>
							.
						</p>

						<div class="row">
							<div class="col-md-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th style="width:25%">Vertical Group</th>
											<th style="width:25%">With Dropdown</th>
											<th style="width:25%">With Icons</th>
											<th style="width:25%">Multiple Button Groups</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
											<div class="btn-group-vertical">
												<button type="button" class="btn btn-default">
													Top
												</button>
												<button type="button" class="btn btn-default">
													Middle
												</button>
												<button type="button" class="btn btn-default">
													Bottom
												</button>
											</div></td>
											<td>
											<div class="btn-group-vertical">
												<button type="button" class="btn btn-primary">
													Button 1
												</button>
												<button type="button" class="btn btn-primary">
													Button 2
												</button>
												<button type="button" class="btn btn-primary">
													Button 3
												</button>
												<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
													Dropdown
													<i class="fa fa-caret-down"></i>
												</button>
												<ul class="dropdown-menu">
													<li>
														<a href="javascript:void(0);">Dropdown link</a>
													</li>
													<li>
														<a href="javascript:void(0);">Dropdown link</a>
													</li>
												</ul>
											</div></td>
											<td>
											<div class="btn btn-group-vertical">
												<a class="btn btn-default" href="javascript:void(0);"><i class="fa fa-align-left"></i></a>
												<a class="btn btn-default" href="javascript:void(0);"><i class="fa fa-align-center"></i></a>
												<a class="btn btn-default" href="javascript:void(0);"><i class="fa fa-align-right"></i></a>
												<a class="btn btn-default" href="javascript:void(0);"><i class="fa fa-align-justify"></i></a>
											</div></td>
											<td>
											<div class="btn-toolbar">
												<div class="btn-group-vertical">
													<button type="button" class="btn btn-primary">
														Page 1
													</button>
													<button type="button" class="btn btn-primary">
														Page 2
													</button>
													<button type="button" class="btn btn-primary">
														Page 3
													</button>
													<button type="button" class="btn btn-primary">
														Page 4
													</button>
												</div>

											</div></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

					</div>
				</div><!-- end panel -->
			</div><!-- end .col-md-12 -->

			<div class="col-md-12 ">
				<div  class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<i class="fa fa-cube"></i>
							Label Buttons
							<div class="bars pull-right">
								<div class="dropdown ">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-cog"></i>
									</a>
									<ul class="dropdown-menu yep-panel-menu">
										<li>
											<a href="#">Daily<span class="badge pull-right"></span></a>
										</li>
										<li>
											<a href="#">Monthly<span class="badge pull-right"></span></a>
										</li>
										<li>
											<a href="#">Yearly<span class="badge pull-right"> 42 </span></a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">All time<span class="badge pull-right">56</span></a>
										</li>
									</ul>
								</div>
								<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
								<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
								<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

							</div>
						</div>
					</div>
					<div class="panel-body">

						<button type="button" class="btn btn-labeled btn-default">
							<span class="btn-label"><i class="glyphicon glyphicon-calendar"></i></span>
							Calc
						</button>

						<button type="button" class="btn btn-labeled btn-primary">
							<span class="btn-label"><i class="glyphicon glyphicon-camera"></i></span>
							Shot
						</button>

						<a class="btn btn-success btn-labeled" href="http://www.jquery2dotnet.com" role="button">
							<span class="btn-label"><i class="glyphicon glyphicon-floppy-save"></i></span>
							Save
						</a>

						<button type="button" class="btn btn-labeled btn-info">
							<span class="btn-label"><i class="glyphicon glyphicon-refresh"></i></span>
							Load
						</button>

						<button type="button" class="btn btn-labeled btn-warning">
							<span class="btn-label"><i class="glyphicon glyphicon-barcode"></i></span>
							Code
						</button>

						<button type="button" class="btn btn-labeled btn-danger">
							<span class="btn-label"><i class="glyphicon glyphicon-ban-circle"></i></span>
							Band
						</button>

						<button type="button" class="btn btn-labeled btn-default disabled">
							<span class="btn-label"><i class="glyphicon glyphicon-book"></i></span>
							Book
						</button>




						<p>
							Use Label Buttons with <code>.btn-label</code>
						</p>

					</div>
				</div><!-- end panel -->
			</div><!-- end .col-md-12 -->

			<div class="col-md-12 ">
				<div  class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							<i class="fa fa-cube"></i>
							Outline Buttons
						</h3>
					</div>
					<div class="panel-body">
						<p>Add the class <code>.btn-outline</code> to button style.</p>
						<a class="btn btn-primary btn-outline">Primary Button</a>
						<a class="btn btn-success btn-outline">Success Button</a>
						<a class="btn btn-warning btn-outline">Warning Button</a>
						<a class="btn btn-danger btn-outline">Danger Button</a>
						<a class="btn btn-default btn-outline">Default Button</a>
					</div>
				</div><!-- end panel -->
			</div><!-- end .col-md-12 -->

			<div class="col-md-12 ">
				<div  class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
						<i class="fa fa-cube"></i>
						Buttons with icon
						<div class="bars pull-right">
							<div class="dropdown ">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-cog"></i>
								</a>
								<ul class="dropdown-menu yep-panel-menu">
									<li>
										<a href="#">Daily<span class="badge pull-right"></span></a>
									</li>
									<li>
										<a href="#">Monthly<span class="badge pull-right"></span></a>
									</li>
									<li>
										<a href="#">Yearly<span class="badge pull-right"> 42 </span></a>
									</li>
									<li class="divider">
									</li>
									<li>
										<a href="#">All time<span class="badge pull-right">56</span></a>
									</li>
								</ul>
							</div>
							<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
							<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
							<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

						</div>
						</div>
					</div>
					<div class="panel-body">
						<p>
							Examples to use buttons with font awesome icons.
						</p>
						<p>
							<a class="btn btn-primary" href="#"><i class="fa fa-share"></i></a>
							<a class="btn btn-bricky" href="#"><i class="fa fa-times fa fa-white"></i></a>
							<a class="btn btn-blue" href="#"><i class="fa fa-arrow-circle-right"></i></a>
							<a class="btn btn-green" href="#"><i class="fa fa-user fa fa-white"></i></a>
							<a class="btn btn-purple"> <i class="fa fa-headphones"></i> </a>
						</p>
						<p>
							Examples to use buttons with glyphicon halflings icons.
						</p>
						<p>
							<a class="btn btn-primary" href="#"><i class="glyphicon glyphicon-log-in"></i></a>
							<a class="btn btn-bricky" href="#"><i class="glyphicon glyphicon-remove-circle"></i></a>
							<a class="btn btn-blue" href="#"><i class="glyphicon glyphicon-thumbs-up"></i></a>
							<a class="btn btn-green" href="#"><i class="glyphicon glyphicon-ok-sign"></i></a>
							<a class="btn btn-purple"> <i class="glyphicon glyphicon-ok-sign"></i> </a>
						</p>

						<p>
							Toolbar icon example
						</p>
						<div class="space12">
							<div class="btn-group">
								<button class="btn btn-primary">
									<i class="fa fa-step-backward"></i>
								</button>
								<button class="btn btn-primary hidden-xs">
									<i class="fa fa-fast-backward"></i>
								</button>
								<button class="btn btn-primary">
									<i class="fa fa-backward"></i>
								</button>
								<button class="btn btn-primary">
									<i class="fa fa-play"></i>
								</button>
								<button class="btn btn-primary">
									<i class="fa fa-stop"></i>
								</button>
								<button class="btn btn-primary">
									<i class="fa fa-forward"></i>
								</button>
								<button class="btn btn-primary hidden-xs">
									<i class="fa fa-fast-forward"></i>
								</button>
								<button class="btn btn-primary">
									<i class="fa fa-step-forward"></i>
								</button>
							</div>
						</div>

					</div>
				</div><!-- end panel -->
			</div><!-- end .col-md-12 -->

			<div class="col-md-12 ">
				<div  class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<i class="fa fa-cube"></i>
							App Icons Buttons
							<div class="bars pull-right">
								<div class="dropdown ">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-cog"></i>
									</a>
									<ul class="dropdown-menu yep-panel-menu">
										<li>
											<a href="#">Daily<span class="badge pull-right"></span></a>
										</li>
										<li>
											<a href="#">Monthly<span class="badge pull-right"></span></a>
										</li>
										<li>
											<a href="#">Yearly<span class="badge pull-right"> 42 </span></a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">All time<span class="badge pull-right">56</span></a>
										</li>
									</ul>
								</div>
								<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
								<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
								<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

							</div>
						</div>
					</div>
					<div class="panel-body">

						<div class="row">
							<div class="col-sm-2">
								<button class="btn btn-app btn-block">
									<i class="fa fa-group"></i>
									Users <span class="badge badge-primary"> 4 </span>
								</button>
							</div>
							<div class="col-sm-4">
								<button class="btn btn-app btn-block">
									<i class="fa fa-comments-o"></i>
									Comments <span class="badge badge-danger"> 4 </span>
								</button>
							</div>
							<div class="col-sm-3">
								<button class="btn btn-app btn-block">
									<i class="fa fa-shopping-cart"></i>
									Orders <span class="badge badge-danger"> 4 </span>
								</button>
							</div>
							<div class="col-sm-3">
								<button class="btn btn-app btn-block">
									<i class="fa fa-barcode"></i>
									Products <span class="badge badge-warning"> 4 </span>
								</button>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<button class="btn btn-app btn-block">
									<i class="fa fa-calendar"></i>
									Calendar <span class="badge badge-success"> 4 </span>
								</button>
							</div>
							<div class="col-sm-3">
								<button class="btn btn-app btn-block">
									<i class="fa fa-heart-o"></i>
									Favorites <span class="badge badge-danger"> 4 </span>
								</button>
							</div>
							<div class="col-sm-2">
								<button class="btn btn-app btn-block">
									<i class="fa fa-thumbs-up"></i>
									Likes <span class="badge badge-warning"> 4 </span>
								</button>
							</div>
							<div class="col-sm-4">
								<button class="btn btn-app btn-block">
									<i class="fa fa-exclamation-triangle"></i>
									Warning <span class="badge badge-success"> 4 </span>
								</button>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2">
								<button class="btn btn-app btn-block">
									<i class="fa fa-tasks"></i>
									Tasks <span class="badge badge-danger"> 4 </span>
								</button>
							</div>
							<div class="col-sm-2">
								<button class="btn btn-app btn-block">
									<i class="fa fa-check"></i>
									To Do <span class="badge badge-success"> 4 </span>
								</button>
							</div>
							<div class="col-sm-2">
								<button class="btn btn-app btn-block">
									<i class="fa fa-list"></i>
									Tickets <span class="badge badge-warning"> 4 </span>
								</button>
							</div>
							<div class="col-sm-2">
								<button class="btn btn-app btn-block">
									<i class="fa fa-picture-o"></i>
									Pictures <span class="badge badge-danger"> 4 </span>
								</button>
							</div>
							<div class="col-sm-2">
								<button class="btn btn-app btn-block">
									<i class="fa fa-upload"></i>
									Upload <span class="badge badge-success"> 4 </span>
								</button>
							</div>
							<div class="col-sm-2">
								<button class="btn btn-app btn-block">
									<i class="fa fa-tags"></i>
									Tags <span class="badge badge-danger"> 4 </span>
								</button>
							</div>
						</div>
<pre>
&lt;div class="col-sm-4"&gt;
&lt;button class="btn btn-app btn-block"&gt;
&lt;i class="fa fa-comments-o"&gt;&lt;/i&gt;
Comments &lt;span class="badge badge-danger"&gt; 4 &lt;/span&gt;
&lt;/button&gt;
&lt;/div&gt;
</pre>

					</div>
				</div><!-- end panel -->
			</div><!-- end .col-md-12 -->

		</div><!-- end .col-md-6 -->

		<div class="col-md-12 ">
			<div  class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
					<i class="fa fa-cube"></i>

					Scalable FontAwesome Icons
					<span>
						<a href="http://fontawesome.io/icons/" target="_blank">
							(see all icons
							<i class="fa fa-external-link"></i>)
						</a>
					</span>
					<div class="bars pull-right">
						<div class="dropdown ">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-cog"></i>
							</a>
							<ul class="dropdown-menu yep-panel-menu">
								<li>
									<a href="#">Daily<span class="badge pull-right"></span></a>
								</li>
								<li>
									<a href="#">Monthly<span class="badge pull-right"></span></a>
								</li>
								<li>
									<a href="#">Yearly<span class="badge pull-right"> 42 </span></a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">All time<span class="badge pull-right">56</span></a>
								</li>
							</ul>
						</div>
						<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
						<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
						<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

					</div>
					</div>
				</div>
				<div class="panel-body">

					<div class="row">

						<div class="col-xs-6 col-sm-3">
							<ul class="list-unstyled">
								<li>
									<i class=" fa fa-adjust"></i>
									fa-adjust
								</li>

								<li>
									<i class=" fa fa-asterisk"></i>
									fa-asterisk
								</li>

								<li>
									<i class=" fa fa-ban"></i>
									fa-ban
								</li>

								<li>
									<i class=" fa fa-bar-chart-o"></i>
									fa-bar-chart-o
								</li>

								<li>
									<i class=" fa fa-barcode"></i>
									fa-barcode
								</li>

								<li>
									<i class=" fa fa-flask"></i>
									fa-flask
								</li>

								<li>
									<i class=" fa fa-beer"></i>
									fa-beer
								</li>

								<li>
									<i class=" fa fa-bell-o"></i>
									fa-bell-o
								</li>

								<li>
									<i class=" fa fa-bell"></i>
									fa-bell
								</li>

								<li>
									<i class=" fa fa-bolt"></i>
									fa-bolt
								</li>

								<li>
									<i class=" fa fa-book"></i>
									fa-book
								</li>

								<li>
									<i class=" fa fa-bookmark"></i>
									fa-bookmark
								</li>

								<li>
									<i class=" fa fa-bookmark-o"></i>
									fa-bookmark-o
								</li>

								<li>
									<i class=" fa fa-briefcase"></i>
									fa-briefcase
								</li>

								<li>
									<i class=" fa fa-bullhorn"></i>
									fa-bullhorn
								</li>

								<li>
									<i class=" fa fa-calendar"></i>
									fa-calendar
								</li>

								<li>
									<i class=" fa fa-camera"></i>
									fa-camera
								</li>

								<li>
									<i class=" fa fa-camera-retro"></i>
									fa-camera-retro
								</li>

								<li>
									<i class=" fa fa-certificate"></i>
									fa-certificate
								</li>
							</ul>
						</div>

						<div class="col-xs-6 col-sm-3">
							<ul class="list-unstyled">
								<li>
									<i class=" fa fa-check-square-o"></i>
									fa-check-square-o
								</li>

								<li>
									<i class=" fa fa-square-o"></i>
									fa-square-o
								</li>

								<li>
									<i class=" fa fa-circle"></i>
									fa-circle
								</li>

								<li>
									<i class=" fa fa-circle-o"></i>
									fa-circle-o
								</li>

								<li>
									<i class=" fa fa-cloud"></i>
									fa-cloud
								</li>

								<li>
									<i class=" fa fa-cloud-download"></i>
									fa-cloud-download
								</li>

								<li>
									<i class=" fa fa-cloud-upload"></i>
									fa-cloud-upload
								</li>

								<li>
									<i class=" fa fa-coffee"></i>
									fa-coffee
								</li>

								<li>
									<i class=" fa fa-cog"></i>
									fa-cog
								</li>

								<li>
									<i class=" fa fa-cogs"></i>
									fa-cogs
								</li>

								<li>
									<i class=" fa fa-comment"></i>
									fa-comment
								</li>

								<li>
									<i class=" fa fa-comment-o"></i>
									fa-comment-o
								</li>

								<li>
									<i class=" fa fa-comments"></i>
									fa-comments
								</li>

								<li>
									<i class=" fa fa-comments-o"></i>
									fa-comments-o
								</li>

								<li>
									<i class=" fa fa-credit-card"></i>
									fa-credit-card
								</li>

								<li>
									<i class=" fa fa-tachometer"></i>
									fa-tachometer
								</li>

								<li>
									<i class=" fa fa-desktop"></i>
									fa-desktop
								</li>

								<li>
									<i class=" fa fa-arrow-circle-o-down"></i>
									fa-arrow-circle-o-down
								</li>

								<li>
									<i class=" fa fa-download"></i>
									fa-download
								</li>
							</ul>
						</div>

						<div class="col-xs-6 col-sm-3">
							<ul class="list-unstyled">
								<li>
									<i class=" fa fa-pencil-square-o"></i>
									fa-pencil-square-o
								</li>

								<li>
									<i class=" fa fa-envelope"></i>
									fa-envelope
								</li>

								<li>
									<i class=" fa fa-envelope-o"></i>
									fa-envelope-o
								</li>

								<li>
									<i class=" fa fa-exchange"></i>
									fa-exchange
								</li>

								<li>
									<i class=" fa fa-exclamation-circle"></i>
									fa-exclamation-circle
								</li>

								<li>
									<i class=" fa fa-external-link"></i>
									fa-external-link
								</li>

								<li>
									<i class=" fa fa-eye-slash"></i>
									fa-eye-slash
								</li>

								<li>
									<i class=" fa fa-eye"></i>
									fa-eye
								</li>

								<li>
									<i class=" fa fa-video-camera"></i>
									fa-video-camera
								</li>

								<li>
									<i class=" fa fa-fighter-jet"></i>
									fa-fighter-jet
								</li>

								<li>
									<i class=" fa fa-film"></i>
									fa-film
								</li>

								<li>
									<i class=" fa fa-filter"></i>
									fa-filter
								</li>

								<li>
									<i class=" fa fa-fire"></i>
									fa-fire
								</li>

								<li>
									<i class=" fa fa-flag"></i>
									fa-flag
								</li>

								<li>
									<i class=" fa fa-folder"></i>
									fa-folder
								</li>

								<li>
									<i class=" fa fa-folder-open"></i>
									fa-folder-open
								</li>

								<li>
									<i class=" fa fa-folder-o"></i>
									fa-folder-o
								</li>

								<li>
									<i class=" fa fa-folder-open-o"></i>
									fa-folder-open-o
								</li>

								<li>
									<i class=" fa fa-cutlery"></i>
									fa-cutlery
								</li>
							</ul>
						</div>

						<div class="col-xs-6 col-sm-3">
							<ul class="list-unstyled">
								<li>
									<i class=" fa fa-gift"></i>
									fa-gift
								</li>

								<li>
									<i class=" fa fa-glass"></i>
									fa-glass
								</li>

								<li>
									<i class=" fa fa-globe"></i>
									fa-globe
								</li>

								<li>
									<i class=" fa fa-users"></i>
									fa-users
								</li>

								<li>
									<i class=" fa fa-hdd-o"></i>
									fa-hdd-o
								</li>

								<li>
									<i class=" fa fa-headphones"></i>
									fa-headphones
								</li>

								<li>
									<i class=" fa fa-heart"></i>
									fa-heart
								</li>

								<li>
									<i class=" fa fa-heart-o"></i>
									fa-heart-o
								</li>

								<li>
									<i class=" fa fa-home"></i>
									fa-home
								</li>

								<li>
									<i class=" fa fa-inbox"></i>
									fa-inbox
								</li>

								<li>
									<i class=" fa fa-info-circle"></i>
									fa-info-circle
								</li>

								<li>
									<i class=" fa fa-key"></i>
									fa-key
								</li>

								<li>
									<i class=" fa fa-leaf"></i>
									fa-leaf
								</li>

								<li>
									<i class=" fa fa-laptop"></i>
									fa-laptop
								</li>

								<li>
									<i class=" fa fa-gavel"></i>
									fa-gavel
								</li>

								<li>
									<i class=" fa fa-lemon-o"></i>
									fa-lemon-o
								</li>

								<li>
									<i class=" fa fa-lightbulb-o"></i>
									fa-lightbulb-o
								</li>

								<li>
									<i class=" fa fa-lock"></i>
									fa-lock
								</li>

								<li>
									<i class=" fa fa-unlock"></i>
									fa-unlock
								</li>
							</ul>
						</div>
					</div>



				</div>
			</div><!-- end panel -->
		</div><!-- end .col-md-12 -->

		<div class="col-md-12 ">
			<div  class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
					<i class="fa fa-cube"></i>
					Scalable Glyphicons
					<span>
						<a href="http://getbootstrap.com/components/#glyphicons" target="_blank">
							(see all icons
							<i class="         fa fa-external-link"></i>)
						</a>
					</span>
					<div class="bars pull-right">
						<div class="dropdown ">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-cog"></i>
							</a>
							<ul class="dropdown-menu yep-panel-menu">
								<li>
									<a href="#">Daily<span class="badge pull-right"></span></a>
								</li>
								<li>
									<a href="#">Monthly<span class="badge pull-right"></span></a>
								</li>
								<li>
									<a href="#">Yearly<span class="badge pull-right"> 42 </span></a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">All time<span class="badge pull-right">56</span></a>
								</li>
							</ul>
						</div>
						<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
						<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
						<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>

					</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">

						<div class="col-xs-6 col-sm-3">
							<ul class="list-unstyled">
								<li>
									<i class=" glyphicon glyphicon-asterisk"></i>
									glyphicon-asterisk
								</li>

								<li>
									<i class="glyphicon glyphicon-plus"></i>
									glyphicon-plus
								</li>

								<li>
									<i class="glyphicon glyphicon-euro"></i>
									glyphicon-euro
								</li>

								<li>
									<i class="glyphicon glyphicon-minus"></i>
									glyphicon-minus
								</li>

								<li>
									<i class="glyphicon glyphicon-cloud"></i>
									glyphicon-cloud
								</li>

								<li>
									<i class="         glyphicon glyphicon-envelope"></i>
									glyphicon-envelope
								</li>

								<li>
									<i class="glyphicon glyphicon-pencil"></i>
									glyphicon-pencil
								</li>

								<li>
									<i class="glyphicon glyphicon-glass"></i>
									glyphicon-glass
								</li>

								<li>
									<i class="glyphicon glyphicon-music"></i>
									glyphicon-music
								</li>

								<li>
									<i class="glyphicon glyphicon-search"></i>
									glyphicon-search
								</li>

								<li>
									<i class="glyphicon glyphicon-heart"></i>
									glyphicon-heart
								</li>

								<li>
									<i class="glyphicon glyphicon-star"></i>
									glyphicon-star
								</li>

								<li>
									<i class="glyphicon glyphicon-star"></i>
									glyphicon-star-empty
								</li>

								<li>
									<i class="glyphicon glyphicon-user"></i>
									glyphicon-user
								</li>

								<li>
									<i class="glyphicon glyphicon-film"></i>
									glyphicon-film
								</li>

								<li>
									<i class="glyphicon glyphicon-th"></i>
									glyphicon-th-large
								</li>

								<li>
									<i class="glyphicon glyphicon-th"></i>
									glyphicon-th
								</li>

								<li>
									<i class="glyphicon glyphicon-th"></i>
									glyphicon-th-list
								</li>

								<li>
									<i class="glyphicon glyphicon-ok"></i>
									glyphicon-ok
								</li>
							</ul>
						</div>

						<div class="col-xs-6 col-sm-3">
							<ul class="list-unstyled">
								<li>
									<i class="glyphicon glyphicon-remove"></i>
									glyphicon-remove
								</li>

								<li>
									<i class="glyphicon glyphicon-zoom-in"></i>
									glyphicon-zoom-in
								</li>

								<li>
									<i class="glyphicon glyphicon-zoom-out"></i>
									glyphicon-zoom-out
								</li>

								<li>
									<i class="glyphicon glyphicon-off"></i>
									glyphicon-off
								</li>

								<li>
									<i class="glyphicon glyphicon-signal"></i>
									glyphicon-signal
								</li>

								<li>
									<i class="glyphicon glyphicon-cog"></i>
									glyphicon-cog
								</li>

								<li>
									<i class="glyphicon glyphicon-trash"></i>
									glyphicon-trash
								</li>

								<li>
									<i class="glyphicon glyphicon-home"></i>
									glyphicon-home
								</li>

								<li>
									<i class="glyphicon glyphicon-file"></i>
									glyphicon-file
								</li>

								<li>
									<i class="glyphicon glyphicon-time"></i>
									glyphicon-time
								</li>

								<li>
									<i class="glyphicon glyphicon-road"></i>
									glyphicon-road
								</li>

								<li>
									<i class="glyphicon glyphicon-download"></i>
									glyphicon-download-alt
								</li>

								<li>
									<i class="glyphicon glyphicon-download"></i>
									glyphicon-download
								</li>

								<li>
									<i class="glyphicon glyphicon-upload"></i>
									glyphicon-upload
								</li>

								<li>
									<i class="glyphicon glyphicon-inbox"></i>
									glyphicon-inbox
								</li>

								<li>
									<i class="glyphicon glyphicon-play"></i>
									glyphicon-play-circle
								</li>

								<li>
									<i class="glyphicon glyphicon-repeat"></i>
									glyphicon-repeat
								</li>

								<li>
									<i class="glyphicon glyphicon-refresh"></i>
									glyphicon-refresh
								</li>

								<li>
									<i class="glyphicon glyphicon-list"></i>
									glyphicon-list-alt
								</li>
							</ul>
						</div>

						<div class="col-xs-6 col-sm-3">
							<ul class="list-unstyled">
								<li>
									<i class="glyphicon glyphicon-lock"></i>
									glyphicon-lock
								</li>

								<li>
									<i class="glyphicon glyphicon-flag"></i>
									glyphicon-flag
								</li>

								<li>
									<i class="glyphicon glyphicon-headphones"></i>
									glyphicon-headphones
								</li>

								<li>
									<i class="glyphicon glyphicon-volume-off"></i>
									glyphicon-volume-off
								</li>

								<li>
									<i class="glyphicon glyphicon-volume-down"></i>
									glyphicon-volume-down
								</li>

								<li>
									<i class="glyphicon glyphicon-volume-up"></i>
									glyphicon-volume-up
								</li>

								<li>
									<i class="glyphicon glyphicon-qrcode"></i>
									glyphicon-qrcode
								</li>

								<li>
									<i class="glyphicon glyphicon-barcode"></i>
									glyphicon-barcode
								</li>

								<li>
									<i class="glyphicon glyphicon-tag"></i>
									glyphicon-tag
								</li>

								<li>
									<i class="glyphicon glyphicon-tags"></i>
									glyphicon-tags
								</li>

								<li>
									<i class="glyphicon glyphicon-book"></i>
									glyphicon-book
								</li>

								<li>
									<i class="glyphicon glyphicon-bookmark"></i>
									glyphicon-bookmark
								</li>

								<li>
									<i class="glyphicon glyphicon-print"></i>
									glyphicon-print
								</li>

								<li>
									<i class="glyphicon glyphicon-camera"></i>
									glyphicon-camera
								</li>

								<li>
									<i class="glyphicon glyphicon-font"></i>
									glyphicon-font
								</li>

								<li>
									<i class="glyphicon glyphicon-bold"></i>
									glyphicon-bold
								</li>

								<li>
									<i class="glyphicon glyphicon-italic"></i>
									glyphicon-italic
								</li>

								<li>
									<i class="glyphicon glyphicon-text-height"></i>
									glyphicon-text-height
								</li>

								<li>
									<i class="glyphicon glyphicon-text-width"></i>
									glyphicon-text-width
								</li>
							</ul>
						</div>

						<div class="col-xs-6 col-sm-3">
							<ul class="list-unstyled">
								<li>
									<i class="glyphicon glyphicon-align-left"></i>
									glyphicon-align-left
								</li>

								<li>
									<i class="glyphicon glyphicon-align-center"></i>
									glyphicon-align-center
								</li>

								<li>
									<i class="glyphicon glyphicon-align-right"></i>
									glyphicon-align-right
								</li>

								<li>
									<i class="glyphicon glyphicon-align-justify"></i>
									glyphicon-align-justify
								</li>

								<li>
									<i class="glyphicon glyphicon-list"></i>
									glyphicon-list
								</li>

								<li>
									<i class="glyphicon glyphicon-indent-left"></i>
									glyphicon-indent-left
								</li>

								<li>
									<i class="glyphicon glyphicon-indent-right"></i>
									glyphicon-indent-right
								</li>

								<li>
									<i class="glyphicon glyphicon-facetime-video"></i>
									glyphicon-facetime-video
								</li>

								<li>
									<i class="glyphicon glyphicon-picture"></i>
									glyphicon-picture
								</li>

								<li>
									<i class="glyphicon glyphicon-map-marker"></i>
									glyphicon-map-marker
								</li>

								<li>
									<i class="glyphicon glyphicon-adjust"></i>
									glyphicon-adjust
								</li>

								<li>
									<i class="glyphicon glyphicon-tint"></i>
									glyphicon-tint
								</li>

								<li>
									<i class="glyphicon glyphicon-edit"></i>
									glyphicon-edit
								</li>

								<li>
									<i class="glyphicon glyphicon-share"></i>
									glyphicon-share
								</li>

								<li>
									<i class="glyphicon glyphicon-check"></i>
									glyphicon-check
								</li>

								<li>
									<i class="glyphicon glyphicon-move"></i>
									glyphicon-move
								</li>

								<li>
									<i class="glyphicon glyphicon-step-backward"></i>
									glyphicon-step-backward
								</li>

								<li>
									<i class="glyphicon glyphicon-fast-backward"></i>
									glyphicon-fast-backward
								</li>

								<li>
									<i class="glyphicon glyphicon-backward"></i>
									glyphicon-backward
								</li>
							</ul>
						</div>
					</div>


				</div>
			</div><!-- end panel -->
		</div><!-- end .col-md-12 -->

	</div><!-- end col-md-12 -->
</div>