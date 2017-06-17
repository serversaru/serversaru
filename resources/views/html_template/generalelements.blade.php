<div id="content">
	<!-- if you want active dragable panel, you should add #sortable-panel. handler drag-drop configured on .panel -->
	<div id="sortable-panel" class="">

		<div id="titr-content" class="col-md-12">
			<h2>General Elements</h2>
			<h5> Common Bootstrap UI Features & Elements ...</h5>
			<div class="actions">
				<button class="btn btn-success ">Add new</button>
				<button class="btn btn-default ">Options</button>
			</div>
		</div>

		<div class="col-md-12">
			<div class="alert alert-warning fade in">
				<button class="close" data-dismiss="alert">
					×
				</button>
				<i class="fa-fw fa fa-warning"></i>
				<strong>Warning</strong> Better check yourself, you're not looking too good.
			</div>

			<div class="alert alert-success fade in">
				<button class="close" data-dismiss="alert">
					×
				</button>
				<i class="fa-fw fa fa-check"></i>
				<strong>Success</strong> You successfully read this important alert message.
			</div>

			<div class="alert alert-danger fade in left-icon">
				<button class="close" data-dismiss="alert">
					×
				</button>
				<i class="fa-lg fa fa-times icon-bg-danger"></i>
				<strong>Error!</strong> Change a few things up and try submitting again.
			</div>

			<div class="alert alert-info fade in left-icon">
				<button class="close" data-dismiss="alert">
					×
				</button>
				<i class="fa-lg fa fa-info-circle icon-bg-info"></i>
				<strong>Info!</strong> This alert needs your attention, but it's not super important.
			</div>
		</div><!-- end .col-md-12 -->

		<div class="col-md-6 ">
			<h4><i class="fa fa-align-justify"></i> Progress Bars</h4>
			<div  class="panel panel-default">
				<div class="panel-body">

					<div class="progress">
						<div class="progress-bar" role="progressbar"  style="width: 60%;"> </div>
						<span class="progress-type">HTML / HTML5</span>
						<span class="progress-completed">60%</span>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-success" role="progressbar"  style="width: 40%"> </div>
						<span class="progress-type">ASP.Net</span>
						<span class="progress-completed">40%</span>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-info" role="progressbar"  style="width: 20%"> </div>
						<span class="progress-type">Java</span>
						<span class="progress-completed">20%</span>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-warning" role="progressbar"  style="width: 60%"> </div>
						<span class="progress-type">JavaScript / jQuery</span>
						<span class="progress-completed">60%</span>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar"  style="width: 80%"> </div>
						<span class="progress-type">CSS / CSS3</span>
						<span class="progress-completed">80%</span>
					</div>

					<div class="alert alert-block alert-warning">
						To define size of progress bar you should use <code>.progress-xs</code> & <code>.progress-sm</code> and to define title of progress bar <code>.progress-type</code> and percent of progress <code>.progress-completed</code>

					</div>
					<h4>Basic</h4>
					<div class="progress progress-xs">
						<div class="progress-bar" role="progressbar"  style="width: 60%;"></div>
					</div>
					<div class="progress progress-striped progress-micro">
						<div class="progress-bar progress-bar-success" role="progressbar"  style="width: 40%"></div>
					</div>
					<div class="progress progress-sm">
						<div class="progress-bar progress-bar-warning" role="progressbar"  style="width: 60%"></div>
					</div>
					<div class="progress progress-striped  active">
						<div class="progress-bar progress-bar-info" role="progressbar"  style="width: 70%"></div>
					</div>
					<div class="progress progress-lg">
						<div class="progress-bar progress-bar-danger" role="progressbar"  style="width: 80%"></div>
					</div>

					<h4>Stacked</h4>
					<div class="progress">
						<div class="progress-bar progress-bar-success" style="width: 35%"> </div>
						<div class="progress-bar progress-bar-warning" style="width: 20%"> </div>
						<div class="progress-bar progress-bar-danger" style="width: 10%"> </div>
					</div>

				</div>
			</div><!-- end panel -->
		</div><!-- end .col-md-6 -->

		<div class="col-md-6 ">
			<h4><i class="fa fa-image"></i> Carousel Slide Show</h4>
			<div  class="panel panel-default">
				<div class="panel-body">
					<p>
						Default sliding carousel with base class of <code>
							.carousel .slide</code>
					</p>
					<div class="carousel slide" id="carousel-730783">
						<ol class="carousel-indicators">
							<li data-slide-to="0" data-target="#carousel-730783">
							</li>
							<li data-slide-to="1" data-target="#carousel-730783" class="active">
							</li>
							<li data-slide-to="2" data-target="#carousel-730783">
							</li>
						</ol>
						<div class="carousel-inner">
							<div class="item">
								<img alt="Carousel Bootstrap First" src="../assets/img/gallery/a1.jpg" />
								<div class="carousel-caption">
									<h4>
										First Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div>
							</div>
							<div class="item active">
								<img alt="Carousel Bootstrap Second" src="../assets/img/gallery/a2.jpg"  />
								<div class="carousel-caption">
									<h4>
										Second Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="Carousel Bootstrap Third" src="../assets/img/gallery/a3.jpg" />
								<div class="carousel-caption">
									<h4>
										Third Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div>
							</div>
						</div> <a class="left carousel-control" href="#carousel-730783" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-730783" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
					<br>
					<div class="alert alert-warning" >
						<strong>Note:</strong><br>
						Transition animations not supported in Internet Explorer 8 &amp; 9
					</div>

				</div>
			</div><!-- end panel -->
		</div><!-- end .col-md-6 -->

		<div class="col-md-12 ">
			<div class="alert alert-block alert-success fade in">
				<button data-dismiss="alert" class="close" type="button">
					&times;
				</button>
				<h4 class="alert-heading"><i class="fa fa-check-circle"></i> Success!</h4>
				<p>
					Duis mollis, est non commodo luctus,
					nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
				</p>
				<p>
					<a href="#" class="btn btn-green">
						Take this action
					</a>
					<a href="#" class="btn btn-light-grey">
						Or do this
					</a>
				</p>
			</div>
			<div class="alert alert-block alert-info fade in">
				<button data-dismiss="alert" class="close" type="button">
					&times;
				</button>
				<h4 class="alert-heading"><i class="fa fa-info-circle"></i> Info!</h4>
				<p>
					Duis mollis, est non commodo luctus,
					nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
				</p>
				<p>
					<a href="#" class="btn btn-blue">
						Take this action
					</a>
					<a href="#" class="btn btn btn-light-grey">
						Or do this
					</a>
				</p>
			</div>
			<div class="alert alert-block alert-warning fade in">
				<button data-dismiss="alert" class="close" type="button">
					&times;
				</button>
				<h4 class="alert-heading"><i class="fa fa-exclamation-triangle"></i> Warning!</h4>
				<p>
					Duis mollis, est non commodo luctus,
					nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
				</p>
				<p>
					<a href="#" class="btn btn-yellow">
						Take this action
					</a>
					<a href="#" class="btn btn-light-grey">
						Or do this
					</a>
				</p>
			</div>
			<div class="alert alert-block alert-danger fade in">
				<button data-dismiss="alert" class="close" type="button">
					&times;
				</button>
				<h4 class="alert-heading"><i class="fa fa-times-circle"></i> Error!</h4>
				<p>
					Duis mollis, est non commodo luctus,
					nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
				</p>
				<p>
					<a href="#" class="btn btn-blue">
						Take this action
					</a>
					<a href="#" class="btn btn-light-grey">
						Or do this
					</a>
				</p>
			</div>
		</div><!-- end .col-md-12 -->

		<div class="col-md-12 ">
			<h4><i class="fa fa-tags"></i>Available labels & badges</h4>
			<div  class="panel panel-default">
				<div class="panel-body ">
					<div class="alert alert-info">
						Add any of the below mentioned modifier classes to change the appearance of a label & badges.
					</div>
					<div class="row">
						<div class="col-md-6">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Labels</th>
										<th>Class</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><span class="label label-default"> Default</span></td>
										<td><code> label label-default </code></td>
									</tr>
									<tr>
										<td><span class="label label-success"> Success</span></td>
										<td><code> label label-success </code></td>
									</tr>
									<tr>
										<td><span class="label label-warning"> Warning</span></td>
										<td><code> label label-warning; </code></td>
									</tr>
									<tr>
										<td><span class="label label-danger"> Danger</span></td>
										<td><code> label label-danger </code></td>
									</tr>
									<tr>
										<td><span class="label label-info"> Info</span></td>
										<td><code> label label-info </code></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-6">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="hidden-xs">Name</th>
										<th>Example</th>
										<th>Class</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="hidden-xs"> Default </td>
										<td><span class="badge badge-default"> 1</span></td>
										<td><code> badge badge-default </code></td>
									</tr>
									<tr>
										<td class="hidden-xs"> Success </td>
										<td><span class="badge badge-success"> 2</span></td>
										<td><code> badge badge-success </code></td>
									</tr>
									<tr>
										<td class="hidden-xs"> Warning </td>
										<td><span class="badge badge-warning"> 4</span></td>
										<td><code> badge badge-warning </code></td>
									</tr>
									<tr>
										<td class="hidden-xs"> Danger </td>
										<td><span class="badge badge-danger"> 6</span></td>
										<td><code> badge badge-danger </code></td>
									</tr>
									<tr>
										<td class="hidden-xs"> Info </td>
										<td><span class="badge badge-info"> 8</span></td>
										<td><code> badge badge-info </code></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>


				</div>
			</div><!-- end panel -->
		</div><!-- end .col-md-6 -->

		<div class="col-md-6 ">
			<h4><i class="fa fa-warning"></i>Bootstrap Modals</h4>
			<div  class="panel panel-default">
				<div class="panel-body ">
					<h4>Static Example</h4>
					<p>
						A rendered modal with header, body, and set of actions in the footer.
					</p>
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span></button>
								<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body">
								<p>One fine body…</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
								<button type="button" class="btn btn-primary" >Save changes</button>
							</div>
						</div><!-- /.modal-content -->
					</div>

					<h4>Live demo</h4>
					<p>Toggle a modal via JavaScript by clicking the button below. It will slide down and fade in from the top of the page.</p>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
						Launch demo modal
					</button>

					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel3">Modal title</h4>
								</div>
								<div class="modal-body">
									...
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
							</div>
						</div>
					</div>

					<!-- Small modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#small-modal-sm">Small modal</button>

					<div id="small-modal-sm" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" >
						<div class="modal-dialog modal-sm">
							<div class="modal-content">

								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">×</span></button>
									<h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
								</div>
								<div class="modal-body">
									...
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div>

					<hr>

					<h4>Dynamically Modals (Bootbox.js)</h4>
					<button id="prompt" class=" btn btn-success bootboxjs">Prompt Modal</button>
					<button id="htmlmodal" class=" btn btn-primary bootboxjs" >HTML Modal</button>
					<button id="confirm" class=" btn btn-default bootboxjs">Confirm</button>

				</div>
			</div><!-- end panel -->
		</div><!-- end .col-md-6 -->

		<div class="col-md-6 ">
			<h4><i class="fa fa-bell"></i> Tooltips and Popovers</h4>
			<div  class="panel panel-default">
				<div class="panel-body ">
					<p>
						Four options are available: top, right, bottom, and left aligned.
					</p>
					<a title="Popover on left" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
						<i class="fa fa-arrow-left"></i>
						Popover on left
					</a>

					<a title="Popover on top" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
						<i class="fa fa-arrow-up"></i>
						Popover on top
					</a>

					<a title="Popover on bottom" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
					sagittis lacus vel augue laoreet rutrum faucibus.">
						<i class="fa fa-arrow-down"></i>
						Popover on bottom
					</a>

					<a title="Popover on right" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
						<i class="fa fa-arrow-right"></i>
						Popover on right
					</a>

					<hr>
					<p>
						Four options are available: top, right, bottom, and left aligned.
					</p>
					<div>
						<a class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
							<i class="fa fa-arrow-left"></i>
							Tooltip on left
						</a>
						<a class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
							<i class="fa fa-arrow-up"></i>
							Tooltip on top
						</a>
						<a class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
							<i class="fa fa-arrow-down"></i>
							Tooltip on bottom
						</a>
						<a class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
							<i class="fa fa-arrow-right"></i>
							Tooltip on right
						</a>
					</div>

				</div>
			</div><!-- end panel -->
		</div><!-- end .col-md-6 -->

		<div class="col-md-6 ">
			<h4><i class="fa fa-square-o"></i> Bootstarp Wells</h4>
			<div  class="panel panel-default">
				<div class="panel-body ">
					<div class="well well-lg">
						Large well
						<br>
						<code> .well .well-lg</code>
					</div>
					<div class="well ">
						Default well
						<br>
						<code> .well</code>
					</div>
					<div class="well well-sm ">
						Small well
						<code> .well .well-sm </code>
					</div>
					<br>
				</div>
			</div><!-- end panel -->
		</div><!-- end .col-md-6 -->

		<div class="col-md-6 ">
			<h4><i class="fa fa-list-ol"></i> Pagination </h4>
			<div  class="panel panel-default">
				<div class="panel-body ">
					<p>Links are customizable for different circumstances. Use <code>.disabled</code> for unclickable links and <code>.active</code> to indicate the current page.</p>
					<h4>
					sizing
				</h4>
				<p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.</p>
					<div>
						<ul class="pagination pagination-lg">
							<li>
								<a href="#">
									Prev
								</a>
							</li>
							<li class="active">
								<a href="#">
									1
								</a>
							</li>
							<li>
								<a href="#">
									2
								</a>
							</li>
							<li>
								<a href="#">
									3
								</a>
							</li>
							<li>
								<a href="#">
									Next
								</a>
							</li>
						</ul>
					</div>

					<div>
						<ul class="pagination">
							<li>
								<a href="#">
									Prev
								</a>
							</li>
							<li class="active">
								<a href="#">
									1
								</a>
							</li>
							<li>
								<a href="#">
									2
								</a>
							</li>
							<li>
								<a href="#">
									3
								</a>
							</li>
							<li>
								<a href="#">
									4
								</a>
							</li>
							<li>
								<a href="#">
									Next
								</a>
							</li>
						</ul>
					</div>

					<div>
						<ul class="pagination pagination-sm">
							<li>
								<a href="#">
									Prev
								</a>
							</li>
							<li class="active">
								<a href="#">
									1
								</a>
							</li>
							<li>
								<a href="#">
									2
								</a>
							</li>
							<li>
								<a href="#">
									3
								</a>
							</li>
							<li>
								<a href="#">
									4
								</a>
							</li>
							<li>
								<a href="#">
									Next
								</a>
							</li>
						</ul>
					</div>
				</div>

			</div><!-- end panel -->
		</div><!-- end .col-md-6 -->

		<div class="col-md-6 ">
			<h4><i class="fa fa-comment"></i> Media </h4>
			<div  class="panel panel-default">
				<div class="panel-body ">
					<div class="media">
						<ul class="media-list">
							<li class="media">
								<div class="media-left">
									<a href="#"  >
										<img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNGVhZmNjMmRkNiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE0ZWFmY2MyZGQ2Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;"  >
									</a>
								</div>
								<div class="media-body">
									<h4 class="media-heading">Media heading</h4>
									<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
									<!-- Nested media object -->
									<div class="media">
										<div class="media-left">
											<a href="#"  >
												<img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNGVhZmNjMzE4ZCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE0ZWFmY2MzMThkIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;"  >
											</a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">Nested media heading</h4>
											Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
											<!-- Nested media object -->
											<div class="media">
												<div class="media-left">
													<a href="#"  >
														<img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNGVhZmNiZmFhYiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE0ZWFmY2JmYWFiIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;"  >
													</a>
												</div>
												<div class="media-body">
													<h4 class="media-heading">Nested media heading</h4>
													Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
												</div>
											</div>
										</div>
									</div>
									<!-- Nested media object -->
									<div class="media">
										<div class="media-left">
											<a href="#"  >
												<img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNGVhZmNjMTczZCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE0ZWFmY2MxNzNkIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;"  >
											</a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">Nested media heading</h4>
											Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div><!-- end panel -->
			</div><!-- end .panel -->
		</div><!-- end col-md-6 -->

	</div><!-- end col-md-12 -->
</div>