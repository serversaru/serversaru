<div id="content">
	<!-- if you want active dragable panel, you should add #sortable-panel. handler drag-drop configured on .panel -->
	<div  class="">

		<div id="titr-content" class="col-md-12">
			<h2>Mail Box</h2>
			<h5>Mailbox with compose e-mail and other things...</h5>
		</div>

		<div class="col-md-12 ">
			<div  class="panel panel-default">
				<div class="panel-body no-padding email-panel">
					<!-- Mail Sidebar -->
					<div class="email-sidebar col-md-3">
						<div class="logo-container"><span class="logo glyphicon glyphicon-envelope"></span>Mail</div>
						<a class="compose-btn btn btn-block btn-default">Compose</a>
						<div class="menu-segment">
							<ul>
								<li class="active"><a id="inbox" href="#" >Inbox<span> (43)</span></a></li>
								<li><a href="#" >Important</a></li>
								<li><a href="#" >Sent</a></li>
								<li><a href="#" >Drafts</a></li>
								<li><a href="#" >Trash</a></li>
							</ul>
						</div>
						<div class="separator"></div>
						<div class="menu-segment">
							<ul class="labels">
								<li class="title">Labels <span class="icon">+</span></li>
								<li><a href="#" >Dribbble <span class="ball pink"></span></a></li>
								<li><a href="#" >Roommates <span class="ball green"></span></a></li>
								<li><a href="#" >Bills <span class="ball blue"></span></a></li>
							</ul>
						</div>
					</div>
					<!-- /end Mail Sidebar -->

					<!-- Mail list grid -->
					<div class="email-list col-md-9">
						<header class="header">
							<div class="search-box">
								<input type="text" class="form-control" placeholder="Search..." ><span class="icon glyphicon glyphicon-search"></span>
							</div>
							<h1 class="page-title"><a class="sidebar-toggle-btn trigger-toggle-sidebar" ><span class="line"></span><span class="line"></span><span class="line"></span><span class="line line-angle1"></span><span class="line line-angle2"></span></a>Inbox</h1>
						</header>
						<div class="action-bar">
							<ul>
								<li><a class="icon square-icon glyphicon glyphicon-chevron-down" ></a></li>
								<li><a class="icon square-icon glyphicon glyphicon-refresh" ></a></li>
								<li><a class="icon square-icon glyphicon glyphicon-share-alt" ></a></li>
								<li><a class="icon square-icon red glyphicon glyphicon-remove" ></a></li>
								<li><a class="icon square-icon red glyphicon glyphicon-flag" ></a></li>
							</ul>
						</div>
						<div class="content">
							<!-- responsive table -->
							<div class="res-table">
								<table class="table table-hover table-fixed ellipsis-table" >
									<thead>
										<tr>
											<th class="center width-5">
												<div class="checkbox">
													<input id="checkbox10" type="checkbox" >
													<label for="checkbox10">
													</label>
												</div>
											</th>
											<th class="width-20">Sender</th>
											<th class="width-60">Subject</th>
											<th class="width-5"></th>
											<th class="width-10">Date</th>
										</tr>
									</thead>
									<tbody>
										<tr class="unread">
											<th class="center">
												<div class="checkbox">
													<input id="checkbox20" type="checkbox" >
													<label for="checkbox20">
													</label>
												</div>
											</th>
											<td data-title="Sender">Lucas Kriebel (via Twitter)</td>
											<td data-title="Subject">Lucas Kriebel (@LucasKriebel) has sent you a direct message on Twitter!</td>
											<td data-title="Attach"><i class="fa fa-paperclip fa-lg"></i></td>
											<td data-title="Date">11:49 AM</td>
										</tr>
										<tr class="unread">
											<td class="center">
												<div class="checkbox checkbox-primary">
													<input id="checkbox30" type="checkbox" >
													<label for="checkbox30">
													</label>
												</div>
											</td>
											<td data-title="Sender">Randy, me (5)</td>
											<td data-title="Subject">Last pic over my village  –  </td>
											<td data-title="Attach"><i class="fa fa-paperclip fa-lg"></i></td>
											<td data-title="Date">5:03 AM</td>
										</tr>
										<tr>
											<th class="center">
												<div class="checkbox">
													<input id="checkbox19" type="checkbox" >
													<label for="checkbox19">
													</label>
												</div>
											</th>
											<td data-title="Sender">Lucas Kriebel (via Twitter)</td>
											<td data-title="Subject">Lucas Kriebel (@LucasKriebel) has sent you a direct message on Twitter!</td>
											<td data-title="Attach"></td>
											<td data-title="Date">11:49 AM</td>
										</tr>
										<tr>
											<th class="center">
												<div class="checkbox">
													<input id="checkbox21" type="checkbox" >
													<label for="checkbox21">
													</label>
												</div>
											</th>
											<td data-title="Sender">Lucas Kriebel (via Twitter)</td>
											<td data-title="Subject">Lucas Kriebel (@LucasKriebel) has sent you a direct message on Twitter!</td>
											<td data-title="Attach"></td>
											<td data-title="Date">11:49 AM</td>
										</tr>
										<tr>
											<td class="center">
												<div class="checkbox">
													<input id="checkbox60" type="checkbox" >
													<label for="checkbox60">
													</label>
												</div>
											</td>
											<td data-title="Sender">Google Drive Team</td>
											<td data-title="Subject">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</td>
											<td data-title="Attach"></td>
											<td data-title="Date">28 Aug</td>
										</tr>
										<tr>
											<td class="center">
												<div class="checkbox">
													<input id="checkbox40" type="checkbox" >
													<label for="checkbox40">
													</label>
												</div>
											</td>
											<td data-title="Sender">Death to Stock</td>
											<td data-title="Subject">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</td>
											<td data-title="Attach"><i class="fa fa-paperclip fa-lg"></i></td>
											<td data-title="Date">18 Aug</td>
										</tr>
										<tr>
											<th class="center">
												<div class="checkbox">
													<input id="checkbox25" type="checkbox" >
													<label for="checkbox25">
													</label>
												</div>
											</th>
											<td data-title="Sender">Lucas Kriebel (via Twitter)</td>
											<td data-title="Subject">Lucas Kriebel (@LucasKriebel) has sent you a direct message on Twitter!</td>
											<td data-title="Attach"></td>
											<td data-title="Date">11 May</td>
										</tr>
										<tr>
											<td class="center">
												<div class="checkbox">
													<input id="checkbox61" type="checkbox" >
													<label for="checkbox61">
													</label>
												</div>
											</td>
											<td data-title="Sender">Google Drive Team</td>
											<td data-title="Subject">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</td>
											<td data-title="Attach"></td>
											<td data-title="Date">15 July</td>
										</tr>
										<tr>
											<td class="center">
												<div class="checkbox">
													<input id="checkbox50" type="checkbox" >
													<label for="checkbox50">
													</label>
												</div>
											</td>
											<td data-title="Sender">Peter, me (3)</td>
											<td data-title="Subject">Since you asked... and i'm inconceivably bored at the train station  –  </td>
											<td data-title="Attach"></td>
											<td data-title="Date">5 July</td>
										</tr>
										<tr>
											<th class="center">
												<div class="checkbox">
													<input id="checkbox26" type="checkbox" >
													<label for="checkbox26">
													</label>
												</div>
											</th>
											<td data-title="Sender">Lucas Kriebel (via Twitter)</td>
											<td data-title="Subject">Lucas Kriebel (@LucasKriebel) has sent you a direct message on Twitter!</td>
											<td data-title="Attach"><i class="fa fa-paperclip fa-lg"></i></td>
											<td data-title="Date">4 July</td>
										</tr>
										<tr>
											<th class="center">
												<div class="checkbox">
													<input id="checkbox27" type="checkbox" >
													<label for="checkbox27">
													</label>
												</div>
											</th>
											<td data-title="Sender">Lucas Kriebel (via Twitter)</td>
											<td data-title="Subject">Lucas Kriebel (@LucasKriebel) has sent you a direct message on Twitter!</td>
											<td data-title="Attach"><i class="fa fa-paperclip fa-lg"></i></td>
											<td data-title="Date">4 July</td>
										</tr>
										<tr>
											<th class="center">
												<div class="checkbox">
													<input id="checkbox28" type="checkbox" >
													<label for="checkbox28">
													</label>
												</div>
											</th>
											<td data-title="Sender">Lucas Kriebel (via Twitter)</td>
											<td data-title="Subject">Lucas Kriebel (@LucasKriebel) has sent you a direct message on Twitter!</td>
											<td data-title="Attach"></td>
											<td data-title="Date">3 July</td>
										</tr>
										<tr>
											<td class="center">
												<div class="checkbox">
													<input id="checkbox64" type="checkbox" >
													<label for="checkbox64">
													</label>
												</div>
											</td>
											<td data-title="Sender">Google Drive Team</td>
											<td data-title="Subject">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</td>
											<td data-title="Attach"></td>
											<td data-title="Date">1 July</td>
										</tr>
										<tr>
											<th class="center">
												<div class="checkbox">
													<input id="checkbox29" type="checkbox" >
													<label for="checkbox29">
													</label>
												</div>
											</th>
											<td data-title="Sender">Lucas Kriebel (via Twitter)</td>
											<td data-title="Subject">Lucas Kriebel (@LucasKriebel) has sent you a direct message on Twitter!</td>
											<td data-title="Attach"></td>
											<td data-title="Date">12 Feb</td>
										</tr>
										<tr>
											<th class="center">
												<div class="checkbox">
													<input id="checkbox33" type="checkbox" >
													<label for="checkbox33">
													</label>
												</div>
											</th>
											<td data-title="Sender">Lucas Kriebel (via Twitter)</td>
											<td data-title="Subject">Lucas Kriebel (@LucasKriebel) has sent you a direct message on Twitter!</td>
											<td data-title="Attach"></td>
											<td data-title="Date">11 Feb</td>
										</tr>
										<tr>
											<td class="center">
												<div class="checkbox">
													<input id="checkbox66" type="checkbox" >
													<label for="checkbox66">
													</label>
												</div>
											</td>
											<td data-title="Sender">Google Drive Team</td>
											<td data-title="Subject">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</td>
											<td data-title="Attach"></td>
											<td data-title="Date">10 Feb</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- /end .res-table -->
							<a href="#" class="load-more-link">Show more messages</a>
						</div>
					</div>
					<!-- /end Mail list grid -->

					<!-- Mail Message -->
					<div class="email-message col-md-9" style="display:none;">
						<div class="header">
							<h1 class="page-title"><a class="icon square-icon glyphicon glyphicon-chevron-left trigger-message-close"></a>Last pic over my village<span class="grey">(2)</span></h1>
							<p>From <a href="#" >Scott Waite</a> to <a href="#" >me</a>, started on <a href="#" >March 2, 2014</a> at 2:14 pm est.</p>
						</div>
						<ul class="message-container">
							<li class="received">
								<div class="details">
									<div class="left"><strong>Scott</strong> <i class="fa fa-arrow-right"></i> me, john</div>
									<div class="right">March 6, 2014, 20:08 pm</div>
								</div>
							</li>
							<li class="sent">
								<div class="details">
									<div class="left"><strong>Scott</strong> <i class="fa fa-arrow-right"></i> me, john</div>
									<div class="right">March 6, 2014, 20:08 pm</div>
								</div>
								<div class="message">
									<p>Lorem ipsum dolor sit amet, duo in quis euripidis, labores posidonium te ius. Ad modo dicant soleat vix, nam ad postea accommodare. Ne natum volumus pri. Adhuc tation id his. Ludus omnesque ea est, alterum fabulas delectus ad pro, quo debet nominavi abhorreant ut.</p>
									<p>Recusabo urbanitas reformidans sit ut, te mea duis impetus percipitur. Te sanctus partiendo intellegam pri. Tantas postea graeci pro ex, eius dicit concludaturque eu nam. Vel dicam causae luptatum ut.</p>
								</div>
								<div class="col-md-3">
									<div class="well well-sm">
										<img src="../assets/img/gallery/a1.jpg"  alt="" class=" img-responsive">
										<strong>catpic.jpg</strong>
										<span class="block">700kb</span>
										<a href="#">Download</a>
										<a href="#">View</a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="well well-sm">
										<img src="../assets/img/gallery/a2.jpg" height="667" width="1000"  alt="" class=" img-responsive">
										<strong>catpic.jpg</strong>
										<span class="block">700kb</span>
										<a href="" class="padding-r-10">Download</a>
										<a href="#">View</a>
									</div>
								</div>
								<div class="tool-box"><a href="#" class="square-icon small glyphicon glyphicon-share-alt"></a><a href="#" class="square-icon small red-hover glyphicon glyphicon-remove"  ></a><a href="#" class="square-icon small red-hover glyphicon glyphicon-flag" ></a></div>
							</li>
						</ul>
					</div>
					<!-- /end Mail Message -->

					<!-- Mail Compose -->
					<div class="email-compose col-md-9" style="display:none;">
						<header class="header">
							<div class="action-compose">
								<a href="" class="btn btn-success">Send</a>
								<a href="" class="btn btn-default">Save Draft</a>
							</div>
							<h1 class="page-title">
								<a class="icon square-icon glyphicon glyphicon-chevron-left trigger-message-close" ></a>
									Compose Mail
							</h1>
						</header>
						<div class="to-mail">
							<form >
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">
											To: <span class="symbol required" ></span>
										</label>
										<span class="input-icon">
											<input type="text" placeholder="user@example.com" class="form-control">
											<i class="fa fa-user"></i>
										</span>
									</div>
								</div>


								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">
											Subject: <span class="symbol required" ></span>
										</label>
										<span class="input-icon">
											<input type="text" placeholder="Subject" class="form-control">
											<i class="fa fa-comment"></i>
										</span>
									</div>
									<!-- summernote section -->
									<div id="summernote" class="summernote">Description Sample</div>
								</div>

								<div class="col-md-6">
									<label>Attachment:</label>
									<div class="fileinput fileinput-new input-group" data-provides="fileinput">
										<div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
										<span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input class="jasny" type="file" name="..."></span>
										<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
									</div>
								</div>
								<div class="col-md-12 footer">
									<button class="btn btn-success">Send</button>
									<button class="btn btn-default">Save Draft</button>
								</div>
							</form>
						</div>
					</div>
					<!-- /end Mail Compose -->

				</div>
			</div><!-- end panel -->
		</div><!-- end .col-md-12 -->

	</div><!-- end col-md-12 -->
</div>

<!-- Plugins Script -->
	<script type="text/javascript">
		$(document).ready(function() {
			
			/*
			 * Email Page
			 */
			 var showMessage = function(){
				$('.email-list').hide();
				$('.email-compose').hide();
				$('.email-message').show();
			 }
			 var showCompose = function(){
				$('.email-list').hide();
				$('.email-message').hide();
				$('.email-compose').show();
			 }
			 var showList = function(){
				$('.email-message').hide();
				$('.email-compose').hide();
				$('.email-list').show();
			 }
			$(".compose-btn").on('click',function(){
				showCompose();
			})

			$("table").on('click','tr',function(){
				showMessage();
				// alert('asdasd');
			})

			$('#inbox').on('click',function(){
				showList();
			})

			$('.trigger-message-close').on('click',function(){
				showList();
			})
		});
	</script>