
					<div id="content">
						<!-- if you want active dragable panel, you should add #sortable-panel. handler drag-drop configured on .panel -->
						<div  class="">

							<div id="titr-content" class="col-md-12">
								<h2>Vector Map</h2>
								<h5>jVector Maps API lets you customize maps ...</h5>
								<div class="actions">
									<button class="btn btn-success ">Add new</button>
									<button class="btn btn-default ">Options</button>
								</div>
							</div>
						
							<div class="col-md-8 ">
								<div  class="panel panel-default">									
									<div class="panel-body no-padding">
				
										<div id="world-map-gdp" class="bg-map-vector" style="width:100%;height:320px;"></div>
										<h4 class="bold padding-10">
											<i class="fa fa-map-marker"></i>
											Vector Map
										</h4>
										<p class="padding-10 bold">
											Import <code>jquery-jvectormap.min.js</code>, <code>jquery-jvectormap-world-mill-en.js</code> & also to use color in map you should have file <code>date-sample.js</code> with such a content:
											<br><br><code>var gdpData = {"AF": 16.63, "AL": 11.58, "DZ": 158.97, ... };</code>
											<br><br>
										</p>
									</div>
									
								</div><!-- end panel -->
							</div><!-- end .col-md-8 -->
							
							<div class="col-md-4 ">
								<div  class="panel panel-default">									
									<div class="panel-body no-padding" >
										
										<div id="mall-map" class="bg-map-vector" style="width:100%;height:320px;" ></div>
										<h4 class="padding-10 bold">
											<i class="fa fa-map-marker"></i>
											Custom map
										</h4>												
										<p  class="padding-10 bold">Example of custom map created from SVG using converter available <a href="http://svgto.jvectormap.com/" >here</a>. Please note that if you use map generated from SVG you need to position markers by pixel coordinates, not by latitude and longitude as in case of map generated from GIS data.</p>
									</div>
									
								</div><!-- end panel -->
							</div><!-- end .col-md-6 -->

							<div class="col-md-6 ">
								<div  class="panel panel-default">									
									<div class="panel-body no-padding">
										
										<div id="usa-map" class="bg-map-vector" style="width:100%;height:500px;"></div>
										<h4 class="padding-10 bold">
											<i class="fa fa-map-marker"></i>
											USA Map
										</h4>
										<p class="padding-10 bold">
											Import <code>jquery-jvectormap-us-aea-en.js</code> and also copy scripts
										</p>
									</div>
									
								</div><!-- end panel -->
							</div><!-- end .col-md-6 -->

							<div class="col-md-6">
								<div  class="panel panel-default">									
									<div class="panel-body no-padding">
																					
										<div id="de-map" class="bg-map-vector" style="width:100%;height:500px;"></div>
										<h4 class="padding-10 bold">
											<i class="fa  fa-map-marker"></i>
											Map with icon
										</h4>
										<p class="padding-10 bold">
											Import <code>jquery-jvectormap-de-merc-en.js</code> and also copy scripts
										</p>
									</div>																						
								</div><!-- end panel -->
							</div><!-- end .col-md-6 -->

						</div><!-- end col-md-12 -->
					</div>