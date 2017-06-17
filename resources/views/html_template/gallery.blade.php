<div id="content">
	<div id="sortable-panel" class="">

		<div id="titr-content" class="col-md-12">
			<h2>Bootstrap Image Gallery</h2>
			<h5>a touch-enabled, responsive and customizable image &amp; video gallery...</h5>
		</div>

		<div class="col-md-12 ">
			<div  class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						<i class="fa fa-image"></i>
						Image Gallery
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

					<form class="form-inline">
						<div class="form-group">
							<button id="video-gallery-button" type="button" class="btn btn-default blueimp" title="Launch Video Gallery"  data-toggle="tooltip">
								<i class="glyphicon glyphicon-film"></i>
							</button>
						</div>
						<div class="form-group">
							<button id="image-gallery-button" type="button" class="btn btn-primary blueimp" data-toggle="tooltip" title="Launch Image Gallery">
								<i class="glyphicon glyphicon-picture"></i>
							</button>
						</div>
						<div class="btn-group" data-toggle="buttons">
							<label class="btn btn-default active" data-toggle="tooltip" title="Borderless">
								<i class="glyphicon glyphicon-leaf"></i>
								<input id="borderless-checkbox" checked  type="checkbox">
							</label>
							<label class="btn btn-default" data-toggle="tooltip"  title="Fullscreen">
								<i class="glyphicon glyphicon-fullscreen"></i>
								<input id="fullscreen-checkbox" type="checkbox">
							</label>
						</div>
					</form>
					<br>
					<!-- The container for the list of example images -->
					<div id="links" class="blueimp">
						<a href="../assets/img/gallery/a1.jpg" title="A1 Image" data-gallery>
							<img src="../assets/img/gallery/thumb/a1.jpg" class="img-flat" height="160" width="160" alt="a1">
						</a>
						<a href="../assets/img/gallery/a2.jpg" title="A2 Image" data-gallery>
							<img src="../assets/img/gallery/thumb/a2.jpg" class="img-flat" height="160" width="160" alt="a2">
						</a>
						<a href="../assets/img/gallery/a3.jpg" title="A3 Image" data-gallery>
							<img src="../assets/img/gallery/thumb/a3.jpg" class="img-flat" height="160" width="160" alt="a3">
						</a>
						<a href="../assets/img/gallery/a4.jpg" title="A4 Image" data-gallery>
							<img src="../assets/img/gallery/thumb/a4.jpg" class="img-flat" height="160" width="160" alt="a4">
						</a>
						<a href="../assets/img/gallery/a5.jpg" title="A5 Image" data-gallery>
							<img src="../assets/img/gallery/thumb/a5.jpg" class="img-flat" height="160" width="160" alt="a5">
						</a>
						<a href="../assets/img/gallery/a6.jpg" title="A6 Image" data-gallery>
							<img src="../assets/img/gallery/thumb/a6.jpg" class="img-flat" height="160" width="160" alt="a6">
						</a>
						<a href="../assets/img/gallery/a7.jpg" title="A7 Image" data-gallery>
							<img src="../assets/img/gallery/thumb/a7.jpg" class="img-flat" height="160" width="160" alt="a7">
						</a>
					</div>
					<br>
					<div id="blueimp-gallery" class="blueimp blueimp-gallery blueimp-gallery-controls borderless" data-use-bootstrap-modal="false">
						<!-- The container for the modal slides -->
						<div class="slides"></div>
						<!-- Controls for the borderless lightbox -->
						<h3 class="title">Sample</h3>
						<a class="prev">‹</a>
						<a class="next">›</a>
						<a class="close">×</a>
						<a class="play-pause"></a>
						<ol class="indicator"></ol>
						<!-- The modal dialog, which will be used to wrap the lightbox content -->
						<div class="modal fade">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Sample</h4>
									</div>
									<div class="modal-body next"></div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default pull-left prev">
											<i class="glyphicon glyphicon-chevron-left"></i>
											Previous
										</button>
										<button type="button" class="btn btn-primary next">
											Next
											<i class="glyphicon glyphicon-chevron-right"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- end panel -->
		</div><!-- end .col-md-12 -->

		<div class="col-md-12 ">
			<div  class="panel panel-default">
				<div class="panel-body ">

					<h4 class="bold"><i class="fa fa-image"></i> Image Gallery</h4>
					<strong>Google style image gallery. to use this style you should use <code>.yep-image-gallery</code> container and also define two size images for every image.</strong>
					<div class="yep-image-gallery ">
						<div class="image__cell is-collapsed">
							<div class="image--basic">
								<a href="#expand-jump-1">
									<img id="expand-jump-1" class="basic__img" src="../assets/img/gallery/a1.jpg" alt="Fashion 1" />
								</a>
								<div class="arrow--up"></div>
							</div>
							<div class="image--expand">
								<a href="#close-jump-1" class="expand__close"></a>
								<div class="col-sm-6">
									<img class="image--large" src="../assets/img/gallery/a1.jpg" height="667" width="998" alt="Fashion 1" />
								</div>
								<div class="col-sm-6">
									<div class="superbox-imageinfo inline-block" >
										<h2 class="bold white">Admin Template</h2>
										<div>
											<p><em>www.example.com/test.html</em></p>
											<p class="grey superbox-img-description">My first photoshop layer mask on a high end PSD template theme</p>
											<p>
												<a class="btn btn-primary btn-sm">Edit Image</a>
												<a class="btn btn-danger btn-sm">Delete</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="image__cell is-collapsed">
							<div class="image--basic">
								<a href="#expand-jump-2">
									<img id="expand-jump-2" class="basic__img" src="../assets/img/gallery/a2.jpg"  alt="a2" />
								</a>
								<div class="arrow--up"></div>
							</div>
							<div class="image--expand">
								<a href="#close-jump-2" class="expand__close"></a>
								<div class="col-sm-6">
									<img class="image--large" src="../assets/img/gallery/a2.jpg" alt="a2" />
								</div>
								<div class="col-sm-6">
									<div class="superbox-imageinfo inline-block" >
										<h2 class="bold white">Admin Template</h2>
										<div>
											<p><em>www.example.com/test.html</em></p>
											<p class="grey superbox-img-description">My first photoshop layer mask on a high end PSD template theme</p>
											<p>
												<a class="btn btn-primary btn-sm">Edit Image</a>
												<a class="btn btn-danger btn-sm">Delete</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="image__cell is-collapsed">
							<div class="image--basic">
								<a href="#expand-jump-3">
									<img id="expand-jump-3" class="basic__img" src="../assets/img/gallery/a3.jpg" alt="Fashion 1" />
								</a>
								<div class="arrow--up"></div>
							</div>
							<div class="image--expand">
								<a href="#close-jump-3" class="expand__close"></a>
								<div class="col-sm-6">
									<img class="image--large" src="../assets/img/gallery/a3.jpg" alt="a3" />
								</div>
								<div class="col-sm-6">
									<div class="superbox-imageinfo inline-block" >
										<h2 class="bold white">Admin Template</h2>
										<div>
											<p><em>www.example.com/test.html</em></p>
											<p class="grey superbox-img-description">My first photoshop layer mask on a high end PSD template theme</p>
											<p>
												<a class="btn btn-primary btn-sm">Edit Image</a>
												<a class="btn btn-danger btn-sm">Delete</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="image__cell is-collapsed">
							<div class="image--basic">
								<a href="#expand-jump-4">
									<img id="expand-jump-4" class="basic__img" src="../assets/img/gallery/a4.jpg" alt="Fashion 1" />
								</a>
								<div class="arrow--up"></div>
							</div>
							<div class="image--expand">
								<a href="#close-jump-1" class="expand__close"></a>
								<div class="col-sm-6">
									<img class="image--large" src="../assets/img/gallery/a4.jpg" alt="a4" />
								</div>
								<div class="col-sm-6">
									<div class="superbox-imageinfo inline-block" >
										<h2 class="bold white">Admin Template</h2>
										<div>
											<p><em>www.example.com/test.html</em></p>
											<p class="grey superbox-img-description">My first photoshop layer mask on a high end PSD template theme</p>
											<p>
												<a class="btn btn-primary btn-sm">Edit Image</a>
												<a class="btn btn-danger btn-sm">Delete</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="image__cell is-collapsed">
							<div class="image--basic">
								<a href="#expand-jump-5">
									<img id="expand-jump-5" class="basic__img" src="../assets/img/gallery/a5.jpg" alt="Fashion 1" />
								</a>
								<div class="arrow--up"></div>
							</div>
							<div class="image--expand">
								<a href="#close-jump-1" class="expand__close"></a>
								<div class="col-sm-6">
									<img class="image--large" src="../assets/img/gallery/a5.jpg" alt="a5" />
								</div>
								<div class="col-sm-6">
									<div class="superbox-imageinfo inline-block" >
										<h2 class="bold white">Admin Template</h2>
										<div>
											<p><em>www.example.com/test.html</em></p>
											<p class="grey superbox-img-description">My first photoshop layer mask on a high end PSD template theme</p>
											<p>
												<a class="btn btn-primary btn-sm">Edit Image</a>
												<a class="btn btn-danger btn-sm">Delete</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="image__cell is-collapsed">
							<div class="image--basic">
								<a href="#expand-jump-6">
									<img id="expand-jump-6" class="basic__img" src="../assets/img/gallery/a6.jpg" alt="Fashion 1" />
								</a>
								<div class="arrow--up"></div>
							</div>
							<div class="image--expand">
								<a href="#close-jump-1" class="expand__close"></a>
								<div class="col-sm-6">
									<img class="image--large" src="../assets/img/gallery/a6.jpg" alt="a6" />
								</div>
								<div class="col-sm-6">
									<div class="superbox-imageinfo inline-block" >
										<h2 class="bold white">Admin Template</h2>
										<div>
											<p><em>www.example.com/test.html</em></p>
											<p class="grey superbox-img-description">My first photoshop layer mask on a high end PSD template theme</p>
											<p>
												<a class="btn btn-primary btn-sm">Edit Image</a>
												<a class="btn btn-danger btn-sm">Delete</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="image__cell is-collapsed">
							<div class="image--basic">
								<a href="#expand-jump-7">
									<img id="expand-jump-7" class="basic__img" src="../assets/img/gallery/a7.jpg" alt="Fashion 1" />
								</a>
								<div class="arrow--up"></div>
							</div>
							<div class="image--expand">
								<a href="#close-jump-1" class="expand__close"></a>
								<div class="col-sm-6">
									<img class="image--large" src="../assets/img/gallery/a7.jpg" alt="a7" />
								</div>
								<div class="col-sm-6">
									<div class="superbox-imageinfo inline-block" >
										<h2 class="bold white">Admin Template</h2>
										<div>
											<p><em>www.example.com/test.html</em></p>
											<p class="grey superbox-img-description">My first photoshop layer mask on a high end PSD template theme</p>
											<p>
												<a class="btn btn-primary btn-sm">Edit Image</a>
												<a class="btn btn-danger btn-sm">Delete</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="image__cell is-collapsed">
							<div class="image--basic">
								<a href="#expand-jump-8">
									<img id="expand-jump-8" class="basic__img" src="../assets/img/gallery/a8.jpg" alt="Fashion 1" />
								</a>
								<div class="arrow--up"></div>
							</div>
							<div class="image--expand">
								<a href="#close-jump-1" class="expand__close"></a>
								<div class="col-sm-6">
									<img class="image--large" src="../assets/img/gallery/a8.jpg" alt="a8" />
								</div>
								<div class="col-sm-6">
									<div class="superbox-imageinfo inline-block" >
										<h2 class="bold white">Admin Template</h2>
										<div>
											<p><em>www.example.com/test.html</em></p>
											<p class="grey superbox-img-description">My first photoshop layer mask on a high end PSD template theme</p>
											<p>
												<a class="btn btn-primary btn-sm">Edit Image</a>
												<a class="btn btn-danger btn-sm">Delete</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div><!-- end panel -->
		</div><!-- end .col-md-12 -->
	</div><!-- end col-md-12 -->
</div>