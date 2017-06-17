<div id="content">
	<!-- if you want active dragable panel, you should add #sortable-panel. handler drag-drop configured on .panel -->
	<div  class="">

		<div id="titr-content" class="col-md-12">
			<h2>jQuery UI</h2>
			<h5> Styling of jQuery UI Widgets and Elements...</h5>
		</div>

		<div class="col-md-12">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<h4>
								<i class="fa fa-calendar-o"></i>
								Datepicker
							</h4>
							<div class="row">
								<div class="col-xs-6">
									<div class="input-group input-group-sm">
										<input type="text" id="datepicker" class="form-control jquery-ui" />
										<span class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-body">
							<h4>
								<i class="fa fa-list-alt"></i>
								Dialogs
							</h4>
							<div class="row">
								<div class="col-xs-6">
									<a href="#" id="id-btn-dialog2" class="btn btn-info btn-sm jquery-ui">Confirm Dialog</a>
									<a href="#" id="id-btn-dialog1" class="btn btn-purple btn-sm jquery-ui">Modal Dialog</a>

									<div id="dialog-message" class="hide">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										</p>

									</div><!-- #dialog-message -->

									<div id="dialog-confirm" class="hide">
										<div class="alert alert-info">
											These items will be permanently deleted and cannot be recovered.
										</div>

										<p>
											Are you sure?
										</p>
									</div><!-- #dialog-confirm -->
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-body">
							<h4>
								<i class="fa fa-bars"></i>
								Menu
							</h4>
							<div class="row">
								<div class="col-xs-6">
									<ul id="menu">
										<li class="ui-state-disabled">
											<a href="#">Aberdeen</a>
										</li>

										<li>
											<a href="#">Ada</a>
										</li>

										<li>
											<a href="#">Adamsville</a>
										</li>

										<li>
											<a href="#">Addyston</a>
										</li>

										<li>
											<a href="#">Delphi</a>

											<ul>
												<li class="ui-state-disabled">
													<a href="#">Ada</a>
												</li>

												<li>
													<a href="#">Saarland</a>
												</li>

												<li>
													<a href="#">Salzburg</a>
												</li>
											</ul>
										</li>

										<li>
											<a href="#">Saarland</a>
										</li>

										<li>
											<a href="#">Salzburg</a>

											<ul>
												<li>
													<a href="#">Delphi</a>

													<ul>
														<li>
															<a href="#">Ada</a>
														</li>

														<li>
															<a href="#">Saarland</a>
														</li>

														<li>
															<a href="#">Salzburg</a>
														</li>
													</ul>
												</li>

												<li>
													<a href="#">Delphi</a>

													<ul>
														<li>
															<a href="#">Ada</a>
														</li>

														<li>
															<a href="#">Saarland</a>
														</li>

														<li>
															<a href="#">Salzburg</a>
														</li>
													</ul>
												</li>

												<li>
													<a href="#">Perch</a>
												</li>
											</ul>
										</li>

										<li class="ui-state-disabled">
											<a href="#">Amesville</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-body">
							<h4>
								<i class="fa fa-terminal"></i>
								Autocomplete
							</h4>
							<div class="row">
								<div class="col-xs-12">
									<input id="tags" type="text" class="form-control" />
									<div class="note">Type 'a' or 'h'</div>
								</div>
							</div>
							<br>
							<h4>
								<i class="fa fa-info"></i>
								Tooltip
							</h4>
							<div class="row">
								<div class="col-xs-12">
									<p>
										<a class="grey" id="show-option" href="#" title="slide down on show">
											Please move mouse here
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-body">
							<h4>
								<i class="fa fa-arrows-h"></i>
								Slider
							</h4>
							<div class="row">
								<div class="col-xs-12">
									<div id="slider"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-body">
							<h4>
								<i class="fa fa-retweet"></i>
								Spinner
							</h4>
							<div class="row">
								<div class="col-xs-6">
									<input id="spinner" name="value" type="text" />
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<h4>
								<i class="fa fa-list"></i>
								Sortable Accordion
							</h4>
							<div class="row">
								<div class="col-xs-12">
									<div id="accordion" class="accordion-style2">
										<div class="group">
											<h3 class="accordion-header">Section 1</h3>

											<div>
												<p>
													Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
													ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
													amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
													odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
												</p>
											</div>
										</div>

										<div class="group">
											<h3 class="accordion-header">Section 2</h3>

											<div>
												<p>
													Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
													purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
													velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
													suscipit faucibus urna.
												</p>
											</div>
										</div>

										<div class="group">
											<h3 class="accordion-header">Section 3</h3>

											<div>
												<p>
													Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
													Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
													ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
													lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
												</p>

												<ul>
													<li>List item one</li>
													<li>List item two</li>
													<li>List item three</li>
												</ul>
											</div>
										</div>
									</div><!-- #accordion -->
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-body">
							<h4>
								<i class="fa fa-folder-o"></i>
								Tabs
							</h4>
							<div class="row">
								<div class="col-xs-12">
									<div id="tabs">
										<ul>
											<li>
												<a href="#tabs-11">Nunc tincidunt</a>
											</li>

											<li>
												<a href="#tabs-22">Proin dolor</a>
											</li>

											<li>
												<a href="#tabs-33">Aenean lacinia</a>
											</li>
										</ul>

										<div id="tabs-11">
											<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Duis orci. Aliquam sodales tortor vitae ipsum. Ut et mauris vel pede varius sollicitudin.</p>
										</div>

										<div id="tabs-22">
											<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla..</p>
										</div>

										<div id="tabs-33">
											<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Praesent eu risus hendrerit ligula tempus pretium.</p>
										</div>
									</div>
								</div>
							</div>
							<h3>
								<i class="fa fa-folder-o"></i>
								Dynamic Tabs
							</h3>
							<div class="row">
								<div class="col-xs-12">
									<p>
										<button id="add_tab" class="btn btn-info btn-sm" ><i class="fa fa-plus"></i> Add Tab</button>
									</p>

									<div id="tabs2">
										<ul>
											<li>
												<a href="#tabs-1">Nunc tincidunt</a>
											</li>
										</ul>
										<div id="tabs-1">
											<p>
												Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.
											</p>
										</div>
									</div>
									<!-- add tab -->
									<div id="addtab" title="Add another tab">
										<form>
											<fieldset>
												<input name="authenticity_token" type="hidden">
												<div class="form-group">
													<label>Tab Title</label>
													<input class="form-control" id="tab_title" value="" placeholder="Text field" type="text">
												</div>
												<div class="form-group">
													<label>Content</label>
													<textarea class="form-control" name="tab_content" id="tab_content" placeholder="Tab Content" rows="3"></textarea>
												</div>
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-body">
							<h4>
								<i class="fa fa-spinner"></i>
								Progressbar
							</h4>
							<div class="row">
								<div class="col-xs-12">
									<div id="progressbar"></div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- end col-md-12 -->


	</div><!-- end col-md-12 -->
</div>