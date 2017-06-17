
					<div id="content">
						<!-- if you want active dragable panel, you should add #sortable-panel. handler drag-drop configured on .panel -->
						<div  class="">

							<div id="titr-content" class="col-md-12">
								<h2>Typography </h2>
								<h5>Headings & paragraphs font style...</h5>
								<div class="actions">
									<button class="btn btn-success ">Add new</button>
									<button class="btn btn-default ">Options</button>
								</div>
							</div>
						
							<div class="col-md-6 layout no-padding">

								<div class="col-md-12 ">
									
									<div class="bs-example bs-example-type">
										<h3 class="text-primary" style="margin: 20px 0;">Headers</h3>
										<table class="table eg-1">
											<tbody>
												<tr>
													<td>
														<h1>h1. Theme Heading 1</h1>
														<p >Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
														<p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
														<pre><code class="html"><span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"attribute"</span><span class="nt">&gt;</span>attr<span class="nt">&lt;/abbr&gt;</span></code></pre>
													</td>

													<td class="info">'Open Sans' 32px Light</td>
												</tr>
												<tr>
													<td>
														<h2>h2. Theme Heading 2</h2>
														<p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available. <code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font styling of a heading but still want your text to be displayed inline.</p>
													</td>
													<td class="info">'Open Sans' 26px Light</td>
												</tr>
												<tr>
													<td>
														<h3>h3. Theme Heading 3</h3>																
														<p>Bootstrap's global default <code>font-size</code> is <strong>14px</strong>, with a <code>line-height</code> of <strong>1.428</strong>. </p>
													</td>
													<td class="info">'Open Sans' 22px Light</td>
												</tr>
												<tr>
													<td><h4>h4. Theme Heading 4</h4></td>
													<td class="info">'Open Sans' 18px Light</td>
												</tr>
												<tr>
													<td><h5>h5. Theme Heading 5</h5></td>
													<td class="info">'Open Sans' 15px Light</td>
												</tr>
												<tr>
													<td><h6>h6. Theme Heading 6</h6></td>
													<td class="info">'Open Sans' 13px Bold</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="highlight">
<pre><code class="html"><span class="nt">&lt;h1&gt;</span>h1. Theme Heading 1<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>h2. Theme Heading 2<span class="nt">&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>h3. Theme Heading 3<span class="nt">&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>h4. Theme Heading 4<span class="nt">&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>h5. Theme Heading 5<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>h6. Theme Heading 6<span class="nt">&lt;/h6&gt;</span>
</code></pre></div>

								</div><!-- end .col-md-12 -->

								<div class="col-md-12 ">

									<div class="bs-example bs-example-type"> 
										<h3 class="text-primary">Quotes</h3>

										<div class="bs-example">
											<blockquote>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
												</p>
												<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
											</blockquote>
										</div>
							<div class="highlight">
						<pre><code class="html"><span class="nt">&lt;blockquote&gt;</span>
  <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;small&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/small&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span>
</code></pre>
</div>


										<div class="bs-example" style="overflow: hidden;">
											<blockquote class="pull-right">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
												</p>
												<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
											</blockquote>
										</div>
										<div class="highlight">
						<pre><code class="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"pull-right"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/blockquote&gt;</span>
</code></pre>
</div>

									</div>
								</div><!-- end .col-md-12 -->



							</div>
							
							<div class="col-md-6 layout no-padding">
								
								<div class="col-md-12 ">
									<div  class="panel panel-default">											
										<div class="panel-body">

											<h3 class="text-primary">Discription Lists</h3>					
												<div class="bs-example">
												      <dl>
												        <dt>Description lists</dt>
												        <dd>A description list is perfect for defining terms.</dd>
												        <dt>Euismod</dt>
												        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
												        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
												        <dt>Malesuada porta</dt>
												        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
												      </dl>
												    </div>			
<div class="highlight"><pre><code class="html"><span class="nt">&lt;dl&gt;</span>
  <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span>
</code></pre></div>


												<div class="bs-example">
												      <dl class="dl-horizontal">
												        <dt>Description lists</dt>
												        <dd>A description list is perfect for defining terms.</dd>
												        <dt>Euismod</dt>
												        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
												        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
												        <dt>Malesuada porta</dt>
												        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
												        <dt>Felis euismod semper eget lacinia</dt>
												        <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
												      </dl>
												    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;dl</span> <span class="na">class=</span><span class="s">"dl-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span>
</code></pre></div>

											
													
													
										</div>											
									</div><!-- end panel -->
								</div><!-- end .col-md-12 -->

								<div class="col-md-12 ">
									<div class="bs-example">
										<h3 class="text-primary">Address</h3>
										<address>
											<strong>Twitter, Inc.</strong><br>
											795 Folsom Ave, Suite 600<br>
											San Francisco, CA 94107<br>
											<abbr title="Phone">P:</abbr> (123) 456-7890
										</address>
										<address>
											<strong>Full Name</strong><br>
											<a href="mailto:#">first.last@example.com</a>
										</address>
									</div>
									<div class="highlight"><pre><code class="html"><span class="nt">&lt;address&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Twitter, Inc.<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
  795 Folsom Ave, Suite 600<span class="nt">&lt;br&gt;</span>
  San Francisco, CA 94107<span class="nt">&lt;br&gt;</span>
  <span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"Phone"</span><span class="nt">&gt;</span>P:<span class="nt">&lt;/abbr&gt;</span> (123) 456-7890
<span class="nt">&lt;/address&gt;</span>

<span class="nt">&lt;address&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Full Name<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"mailto:#"</span><span class="nt">&gt;</span>first.last@example.com<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/address&gt;</span>
</code></pre></div>
								</div><!-- end .col-md-12 -->

								<div class="col-md-12">
									<div class="bs-example">
										<h3 class="text-primary">Alignment</h3>
										<p class="text-left">Left aligned text.</p>
										<p class="text-center">Center aligned text.</p>
										<p class="text-right">Right aligned text.</p>
									</div>
									<div class="highlight"><pre><code class="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-left"</span><span class="nt">&gt;</span>Left aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>Center aligned text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-right"</span><span class="nt">&gt;</span>Right aligned text.<span class="nt">&lt;/p&gt;</span>
</code></pre></div>
								</div>																				
							</div>

								<div class="col-md-12">
									<div class="well well-sm"> 
										<h3 class="text-primary">All Lists</h3>
										<div class="row">
											
											<div class="col-sm-6">
												
												<div class="bs-example">

													<ul>
														<li>Unordered List Item </li>
														<li><strong>I am inside a strong tag</strong></li>

														<li><i>I am Italic!</i>
															<ul>
																<li class="text-danger">We can also be red</li>
																<li class="text-success">Or green</li>
																<li class="txt-color-purple">Even purple!</li>

															</ul>
														</li>

														<li><strong><i>I am inside a strong and Italic tag, I may also break into a new line if <u>squized</u></i></strong></li>
														<li><small>I am inside a small tag</small></li>
													</ul>
												</div>
												<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>
											</div>													
											<div class="col-sm-6">
												
												<div class="bs-example">

													<ol>
														<li>Ordered List Item </li>
														<li><u>Ordered List Item</u></li>

														<li><strong>Ordered List Item</strong>
															<ul class="list-unstyled">
																<li><i class="fa fa-bell text-danger"></i> Unstyled list with custom icon</li>
																<li class="text-success"><i class="fa fa-check"></i> <strong><u>Unstyled list</u> with custom icon</strong></li>
																<li><i class="fa fa-warning text-warning"></i> <i>Unstyled list with custom icon</i></li>

															</ul>
														</li>

														<li class="text-info"><strong><i>I am inside a strong and Italic tag, I may also break into a new line if squized</i></strong></li>
														<li><span class="label label-danger">I am a label</span></li>
													</ol>
												</div>
												<div class="highlight"><pre><code class="html"><span class="nt">&lt;ol&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ol&gt;</span>
</code></pre></div>														
											</div>					
										</div>												
										<div class="row">													
											<div class="col-sm-12">																										
												<div class="bs-example">
													<ul class="list-inline">
														<li class="text-success">
															<strong>Inline List Item #1</strong>
														</li>
														<li class="text-danger">
															<strong><u>Inline List Item #2</u></strong>
														</li>
														<li class="text-primary">
															<strong><i>Inline List Item #3</i></strong>
														</li>
													</ul>
												</div>
												<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>														
											</div>													
										</div>												
									</div>
								</div>

							
							
						</div><!-- end col-md-12 -->
					</div>