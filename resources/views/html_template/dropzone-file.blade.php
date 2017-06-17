<div id="content">
	<div id="sortable-panel" class="">

		<div id="titr-content" class="col-md-12">
			<h2>Dropzone</h2>
			<h5>Drag &amp; drop file upload with image preview...</h5>
			<div class="actions">
				<button class="btn btn-success ">Add new</button>
				<button class="btn btn-default ">Options</button>
			</div>
		</div>

		<div class="col-md-12 ">
			<div  class="panel panel-default">

				<div class="panel-body">
					<h4 class="bold"><i class="fa fa-cloud"></i> Dropzone.js</h4>
					<strong>DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.</strong>
					<form action="../dummy.html" class="dropzone" id="dropzone">
						<div class="fallback">
							<input name="file" type="file" multiple="" />
						</div>
					</form>

				</div>
			</div><!-- end panel -->
		</div><!-- end .col-md-12 -->

		<div class="col-md-6 ">
			<div  class="panel panel-default">
				<div class="panel-body">
					<h4 class="bold"><i class="fa fa-cloud"></i> Dropzone.js </h4>
					<hr>
					<div class="media">
						<ul class="media-list">
							<li class="media">
								<div class="media-left">
									<a href="#" >
										<div id="avatar-dropzone" class="dropzone dz-clickable dz-single"></div>
									</a>
								</div>
								<div class="media-body">
									<h4 class="media-heading">Avatar image upload</h4>
									<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div><!-- end panel -->
		</div><!-- end .col-md-6 -->

		<div class="col-md-6 ">
			<div  class="panel panel-default">
				<div class="panel-body">
					<h4 class="bold"><i class="fa fa-cloud"></i> Dropzone.js </h4>
					<strong>Upload files like Gmail uploader</strong>
					<br>
					<!-- <button  class="btn btn-default"><i class="fa fa-paperclip"></i></button> -->

				</div>
				<div class="panel-footer">
					<div class="textarea-div">
						<div class="typearea">
							<textarea placeholder="Write a reply..." id="textarea-expand" class="custom-scroll"></textarea>
						</div>
					</div>
					<span class="textarea-controls">
						<button class="btn btn-sm btn-success pull-right"> Reply </button>
						<a id="upload" href="javascript:void(0);" class="pull-left"><i class="fa fa-camera fa-fw fa-lg"></i></a>
						<div id="gmail-dropzone" class="dropzone dz-gmail pull-left"></div>
					</span>
				</div>
			</div><!-- end panel -->
		</div><!-- end .col-md-6 -->

	</div><!-- end col-md-12 -->
</div>