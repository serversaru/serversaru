
					<div id="content">
						<!-- if you want active dragable panel, you should add #sortable-panel. handler drag-drop configured on .panel -->
						<div  class="">

							<div id="titr-content" class="col-md-12">
								<h2>Form Wizard</h2>
								<h5>with selectable items(single & multiple) and custom icons ...</h5>
								<div class="actions">
									<button class="btn btn-success ">Add new</button>
									<button class="btn btn-default ">Options</button>
								</div>
							</div>
														
							<div class="col-md-6 ">
								<div  class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<i class="fa fa-sitemap"></i>
											Steps Wizard
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
									<div class="panel-body no-padding">
										
										<form id="example-advanced-form"  action="#" class="wizard">
										    <h3>Account</h3>
										    <fieldset>
										        <legend>Account Information</legend>
												
												
										 		<div class="form-group">
													<label class="control-label" for="userName-2">
														User name * <span class="symbol required" ></span>
													</label>
													<input id="userName-2" name="userName" type="text" class="form-control required" >
												</div>
												<div class="form-group">
													<label class="control-label" for="password-2">
														Password * <span class="symbol required" ></span>
													</label>
													<input  id="password-2" name="password" type="password"  class="form-control required">
												</div>
												<div class="form-group">
													<label class="control-label" for="confirm-2">
														Confirm Password * <span class="symbol required" ></span>
													</label>
													<input  id="confirm-2" name="confirm" type="password"  class="form-control required">
												</div>
										       												       
										        <p>(*) Mandatory</p>
										    </fieldset>
										 
										    <h3>Profile</h3>
										    <fieldset>
										        <legend>Profile Information</legend>
										 		
										 		<div class="form-group">
													<label class="control-label" for="name-2">
														First name * <span class="symbol required" ></span>
													</label>
													<input  id="name-2" name="name" type="text"  class="form-control required">
												</div>
										       	<div class="form-group">
													<label class="control-label" for="surname-2">
														Last name * <span class="symbol required" ></span>
													</label>
													<input  id="surname-2" name="surname" type="text"  class="form-control required">
												</div>
										        <div class="form-group">
													<label class="control-label" for="email-2">
														Email * <span class="symbol required" ></span>
													</label>
													<input  id="email-2" name="email" type="text" class="form-control email required">
												</div>
												<div class="form-group">
													<label class="control-label" for="address-2">
														Address <span class="symbol required" ></span>
													</label>
													<textarea  id="address-2" name="address" class="form-control"></textarea>
												</div>
												<div class="form-group">
													<label class="control-label" for="age-2">
														Age (The warning step will show up if age is less than 18) * <span class="symbol required" ></span>
													</label>
													<input  id="age-2" name="age" type="text" class="required number form-control">
												</div>
										       
										        <p>(*) Mandatory</p>
										    </fieldset>
										 
										    <h3>Warning</h3>
										    <fieldset>
										        <legend>You are to young</legend>
										 
										        <p>Please go away ;-)</p>
										    </fieldset>
										 
										    <h3>Finish</h3>
										    <fieldset>												        												        
										        <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required"> 
										        <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
										    </fieldset>
										</form>

									</div>																								
								</div><!-- end panel -->
							</div><!-- end .col-md-6 -->									

							<div class="col-md-6 ">
								<div  class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<i class="fa fa-file-text"></i>
											Fuelux Wizard
											<div class="bars pull-right">
												<a href="#"><i class="maximum fa fa-expand" data-toggle="tooltip" data-placement="bottom" title="Maximize"></i></a>
												<a href="#"><i class="minimize fa fa-chevron-down" data-toggle="tooltip" data-placement="bottom" title="Collapse"></i></a>
												<a href="#"><i data-target="#panel2" data-dismiss="alert" data-toggle="tooltip" data-placement="bottom" title="Close" class="fa fa-times"></i></a>
											</div>
										</div>
									</div>
									<div class="panel-body">
										
										<section id="wizard" class="fuelux">
											<div class="wizard" data-initialize="wizard" id="myWizard">
												<div class="steps-container">
													<ul class="steps">
														<li data-step="1" data-name="campaign" class="active"><span class="badge">1</span>Step One<span class="chevron"></span></li>
														<li data-step="2"><span class="badge">2</span>Step Two<span class="chevron"></span></li>
														<li data-step="3" data-name="template"><span class="badge">3</span>Step Three<span class="chevron"></span></li>
													</ul>
												</div>
												<div class="actions">
													<button type="button" class="btn btn-default btn-prev"><span class="glyphicon glyphicon-arrow-left"></span>Prev</button>
													<button type="button" class="btn btn-default btn-next" data-last="Complete">Next<span class="glyphicon glyphicon-arrow-right"></span></button>
												</div>
												<div class="step-content">
													<div class="step-pane active sample-pane alert" data-step="1">
														<h4>Step 1</h4>
														
														<div class="form-group">
															<label class="control-label">
																First Name <span class="symbol required" ></span>
															</label>
															<input type="text" placeholder="Insert your First Name" class="form-control" id="firstname" name="firstname" >
														</div>
														<div class="form-group">
															<label class="control-label">
																Last Name <span class="symbol required" ></span>
															</label>
															<input type="text" placeholder="Insert your Last Name" class="form-control" id="lastname" name="lastname" >
														</div>
														<div class="form-group">
															<label class="control-label">
																Email Address <span class="symbol required" ></span>
															</label>
															<input type="email" placeholder="Text Field" class="form-control" id="email" name="email" >
														</div>
														<div class="form-group">
															<label class="control-label">
																Password <span class="symbol required" ></span>
															</label>
															<input type="password" class="form-control" name="password" id="password" >
														</div>
														<div class="form-group">
															<label class="control-label">
																Confirm Password <span class="symbol required" ></span>
															</label>
															<input type="password" class="form-control" id="password_again" name="password_again" >
														</div>
														
													</div>
													<div class="step-pane sample-pane alert" data-step="2">
														<h4>Step 2</h4>
														
															<div class="form-group connected-group">
																<label class="control-label">
																	Date of Birth <span class="symbol required" ></span>
																</label>
																<div class="row">
																	<div class="col-md-3">
																		<select name="dd" id="dd" class="form-control" >
																			<option value="">DD</option>
																			<option value="01">1</option>
																			<option value="02">2</option>
																			<option value="03">3</option>
																			<option value="04">4</option>
																			<option value="05">5</option>
																			<option value="06">6</option>
																			<option value="07">7</option>
																			<option value="08">8</option>
																			<option value="09">9</option>
																			<option value="10">10</option>
																			<option value="11">11</option>
																			<option value="12">12</option>
																			<option value="13">13</option>
																			<option value="14">14</option>
																			<option value="15">15</option>
																			<option value="16">16</option>
																			<option value="17">17</option>
																			<option value="18">18</option>
																			<option value="19">19</option>
																			<option value="20">20</option>
																			<option value="21">21</option>
																			<option value="22">22</option>
																			<option value="23">23</option>
																			<option value="24">24</option>
																			<option value="25">25</option>
																			<option value="26">26</option>
																			<option value="27">27</option>
																			<option value="28">28</option>
																			<option value="29">29</option>
																			<option value="30">30</option>
																			<option value="31">31</option>
																		</select>
																	</div>
																	<div class="col-md-3">
																		<select name="mm" id="mm" class="form-control" >
																			<option value="">MM</option>
																			<option value="01">1</option>
																			<option value="02">2</option>
																			<option value="03">3</option>
																			<option value="04">4</option>
																			<option value="05">5</option>
																			<option value="06">6</option>
																			<option value="07">7</option>
																			<option value="08">8</option>
																			<option value="09">9</option>
																			<option value="10">10</option>
																			<option value="11">11</option>
																			<option value="12">12</option>
																		</select>
																	</div>
																	<div class="col-md-3">
																		<input type="text" placeholder="YYYY" id="yyyy" name="yyyy" class="form-control" >
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label">
																	Gender <span class="symbol required" ></span>
																</label>
																<div>

																	<div class="radio radio-primary radio-inline">
												                        <input type="radio" value="" name="gender" id="gender_female" >
												                        <label for="gender_female">Female</label>
												                    </div>
												                    <div class="radio radio-primary radio-inline">
												                        <input type="radio" value="" name="gender" id="gender_male" >
												                        <label for="gender_male">male</label>
												                    </div>
																	
																</div>
															</div>
															<div class="row">
																<div class="col-md-4">
																	<div class="form-group">
																		<label class="control-label">
																			Zip Code <span class="symbol required" ></span>
																		</label>
																		<input class="form-control" type="text" name="zipcode" id="zipcode" >
																	</div>
																</div>
																<div class="col-md-8">
																	<div class="form-group">
																		<label class="control-label">
																			City <span class="symbol required" ></span>
																		</label>
																		<input class="form-control tooltips" type="text" data-original-title="We'll display it when you write reviews" data-rel="tooltip" title="" data-placement="top" name="city" id="city" >
																	</div>
																</div>
															</div>
															<div class="form-group">
																<hr>
																<label class="control-label">
																	<strong>Signup for Clip-One Emails</strong> <span class="symbol required" ></span>
																</label>
																<p>
																	Would you like to review Clip-One emails?
																</p>
																<div>																	
																	<div class="radio radio-primary radio-inline">
												                        <input type="radio" value="" name="newsletter" id="no" >
												                        <label for="no">Female</label>
												                    </div>
												                    <div class="radio radio-primary radio-inline">
												                        <input type="radio" value="" name="newsletter" id="yes" >
												                        <label for="yes">male</label>
												                    </div>
																</div>
															</div>
														
													</div>
													<div class="step-pane sample-pane bg-info alert" data-step="3">
														<h4>Congragilations</h4>
														<p> Your information post successfly </p>
													</div>
												</div>

											</div>
										</section>
										
									</div>				
								</div><!-- end panel -->
							</div><!-- end .col-md-6 -->

							<div class="col-md-12 ">
								<div  class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<i class="fa fa-sitemap"></i>
											Vertical Steps Wizard
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
									<div class="panel-body no-padding">
										
									<div id="example-vertical" class="wizard">
									    <h3>Desgin</h3>
									    <section>
									    	<h4>Feature</h4>
									        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry!</p>
									        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum is simply dummy text of the printing and typesetting industry</p>
									        <p>Lorem Ipsum is simply dummy text of the printing and</p>
									    </section>
									    <h3>Implemention</h3>
									    <section>
									    	<h4>Implemention</h4>
									        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry!</p>
									        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum is simply dummy text of the printing and typesetting industry</p>
									        <p>Lorem Ipsum is simply dummy text of the printing and</p>
									    </section>
									    <h3>Test</h3>
									    <section>
									    	<h4>Test</h4>
									        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry!</p>
									        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum is simply dummy text of the printing and typesetting industry</p>
									        <p>Lorem Ipsum is simply dummy text of the printing and</p>
									    </section>
									</div>

									</div>																								
								</div><!-- end panel -->
							</div><!-- end .col-md-12 -->
							
						</div><!-- end col-md-12 -->
					</div>