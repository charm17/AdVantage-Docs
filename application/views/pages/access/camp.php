<html>
<title> AdVantage Docs</title>
<head>

	<base href="<?php echo base_url();?>" />  <!-- import image from folder -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="assets/js/jquery-2.1.1.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>

<body>

	<!-- HEADER -->
	<div class = "container">
		<div class = "page-header">
				<h1> <a class="list-group-item active"> AdVantage Docs </a> </h1>
		</div>
	</div>

		<!-- MENU -->
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="list-group">
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
	    					<div class="panel-heading">
	    						<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> <b> CAMPAIGN </b> </a>
	      					</div>
								<div id="collapseOne" class="panel-collapse collapse">
	      							<div class="panel-body">
	        							<ul> 
							        		<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#Create"> Create Campaign </a> </li>
							        			<ul>
							        				<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#Create"> Broadcast </a> </li>
							        					<ul>
									        				<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#Bulk"> Bulk Campaign </a> </li>
									        				<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#Locationbased"> Location-Based / LSMS </a> </li>
									        				<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#Hypertargeted"> Hyper Trageted / HSMS </a> </li>
									        			</ul>
							        				<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#Conversation"> Conversation </a> </li>
							        					<ul>
									        				<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#Registration"> Registration </a> </li>
									        				<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#Quiz"> Quiz / LSMS </a> </li>
									        				<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#Survey"> Survey </a> </li>
									        			</ul>
							        			</ul>
							        		<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#CampTable"> Campaign Table </a> </li>
											<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#Dash"> Campaign Dashboard </a> </li>
										</ul>
									</div>
								</div>
						</div>	

						<div class="panel panel-default">
								<div class="panel-heading">
	    							<a href="<?php echo site_url("sample/page_campaign"); ?>#Inbox"> <strong> INBOX </strong> </a>
	      						</div>
						</div>

						<div class="panel panel-default">
	    					<div class="panel-heading">
	    						<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> <b> CONTACTS </b> </a>
	      					</div>
								<div id="collapseThree" class="panel-collapse collapse">
	      							<div class="panel-body">
	        							<ul> 
	        								<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#ViewContacts"> View Contacts </a> </li>
							        		<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#CreateContacts"> Add / Create Contacts </a> </li>
											<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#UploadContacts"> Upload Contacts </a> </li>
											<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#DownloadContacts"> Download Contacts </a> </li>
											<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#ViewUpload"> View Upload Contacts </a> </li>
											<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#FullScreen"> Full Screen </a> </li>
											<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#Group"> Groups </a> </li>
												<ul>
													<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#AddGroup"> Add Group </a> </li>
													<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#ProfileGroup"> Profile Group </a> </li>
												</ul>
											<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#Purge"> Purge </a> </li>
										</ul>
									</div>
								</div>
						</div>	

						<div class="panel panel-default">
	    					<div class="panel-heading">
	    						<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"> <b> REPORTS </b> </a>
	      					</div>
								<div id="collapseFour" class="panel-collapse collapse">
	      							<div class="panel-body">
	        							<ul> 
							        		<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#Traffic"> Traffic Report </a> </li>
											<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#Transaction"> Transaction Search </a> </li>
											<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#Billing"> Billing </a> </li>
										</ul>
									</div>
								</div>
						</div>

						<div class="panel panel-default">
	    					<div class="panel-heading">
	    						<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"> <b> ACCOUNT </b> </a>
	      					</div>
								<div id="collapseFive" class="panel-collapse collapse">
	      							<div class="panel-body">
	        							<ul> 
							        		<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#Users"> Users </a> </li>
							        			<ul>
													<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#CreateAccountUser"> Create Account User </a> </li>
													<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#BulkUserUpload"> Bulk User Upload </a> </li>
												</ul>
											<li> <a href="<?php echo site_url("sample/page_campaign"); ?>#Technical"> Technical Settings </a> </li>
										</ul>
									</div>
								</div>
						</div>

						<div class="panel panel-default">
								<div class="panel-heading">
	    							<a href="<?php echo site_url("sample/page_campaign"); ?>#Advantage"> <strong> ADVANTAGE NOTIFICATIONS </strong> </a>
	      						</div>
						</div>	
					</div>
				</div>
			</div>	



				<!-- DETAILS -->

	<div class="col-sm-9">
		<h1 id="Create"> <strong> Campaign </strong> </h1>
			<h2 id="Create"> <strong> Create Campaign </strong> </h2>
			<h3 id="Create"> <strong> Broadcast </strong> </h3>
			<div style="padding-left: 20px;"> <h4 id="Bulk"> <strong> BULK Campaign </strong> </h4>
			<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
				                  		<div class="caption">
					                    	<h4> <strong> Step 1 </strong> </h4>
							                    <ul> 
													<li> Fill out Campaign Name </li>
													<li> Select Sender ID </li>
														<p> - Sender IDs are pre-approved by Account Managers. </p>
													<li> Fill out Campaign Message </li>
													<li> Use Template (Optional) </li>
														<ul>
															<li>  New Template </li> <br>
																<ul>
																	<li> Click New Template. </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/newtemplate.png" style="width:70%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Column</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">ID</td>
																		                <td class="col-sm-5">Template ID</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">Template Message</td>
																		            </tr>
																		    	</tbody>
																		    </table>	

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Action</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Use Template</td>
																		                <td class="col-sm-5">You may use the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Edit Template</td>
																		                <td class="col-sm-5">You may edit the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Delete Template</td>
																		                <td class="col-sm-5">You may delete the selected template.</td>
																		            </tr>
																		    	</tbody>
																		    </table>	
																	<li> Fill out message. </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/createtemplate.png" style="width:70%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Parameter</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">You may write your template message.</td>
																		            </tr>
																		    	</tbody>
																		    </table>
																	<li> Click Create Template to save your new created template. Otherwise, the window will close and redirect you to Template table. </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/templatetable.png" style="width:90%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Column</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">ID</td>
																		                <td class="col-sm-5">Template ID</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">Template Message</td>
																		            </tr>
																		    	</tbody>
																		    </table>	

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Action</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Use Template</td>
																		                <td class="col-sm-5">You may use the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Edit Template</td>
																		                <td class="col-sm-5">You may edit the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Delete Template</td>
																		                <td class="col-sm-5">You may delete the selected template.</td>
																		            </tr>
																		    	</tbody>
																		    </table>

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Button</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">New Template</td>
																		                <td class="col-sm-5">You may create new template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Previous</td>
																		                <td class="col-sm-5">Will lead you back to the previous page.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Next</td>
																		                <td class="col-sm-5">Will lead you forward to the next page.</td>
																		            </tr>
																		    	</tbody>
																		    </table>		
																</ul>
															<li> Existing Template </li> <br>
																<ul>	
																	<li> Click Use Template. </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/newtemplate.png" style="width:70%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Column</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">ID</td>
																		                <td class="col-sm-5">Template ID</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">Template Message</td>
																		            </tr>
																		    	</tbody>
																		    </table>	

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Action</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Use Template</td>
																		                <td class="col-sm-5">You may use the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Edit Template</td>
																		                <td class="col-sm-5">You may edit the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Delete Template</td>
																		                <td class="col-sm-5">You may delete the selected template.</td>
																		            </tr>
																		    	</tbody>
																		    </table>	
																	<li> The Template table will appear.  </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/templatetable.png" style="width:90%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Column</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">ID</td>
																		                <td class="col-sm-5">Template ID</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">Template Message</td>
																		            </tr>
																		    	</tbody>
																		    </table>	

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Action</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Use Template</td>
																		                <td class="col-sm-5">You may use the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Edit Template</td>
																		                <td class="col-sm-5">You may edit the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Delete Template</td>
																		                <td class="col-sm-5">You may delete the selected template.</td>
																		            </tr>
																		    	</tbody>
																		    </table>

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Button</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">New Template</td>
																		                <td class="col-sm-5">You may create new template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Previous</td>
																		                <td class="col-sm-5">Will lead you back to the previous page.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Next</td>
																		                <td class="col-sm-5">Will lead you forward to the next page.</td>
																		            </tr>
																		    	</tbody>
																		    </table>		
																	<li> In the Action column, click Use the Template. </li> <br>
																</ul>
														</ul>
													<li> Select Campaign Type </li> <br>
														<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Campaign Type</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Bulk</td>
																		                <td class="col-sm-5">Campaign recepients are based on the contacts uploaded on the system.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Location-Based / LSMS</td>
																		                <td class="col-sm-5">Campaign recepients are based on specified location.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Hyper Targeted / HSMS</td>
																		                <td class="col-sm-5">Campaign recepients are based on the profiles of the recepients.</td>
																		            </tr>
																		    	</tbody>
																		    </table>	
	
													<li> Click Next </li> <br> 
														<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/bulk1.png" style="width:60%;"> </center> <br>
												</ul>	
													<table class="table table-bordered table-striped">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Parameter</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Campaign Name</td>
												                <td class="col-sm-5"><strong>Required</strong>. Campaign label.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Sender ID</td>
												                <td class="col-sm-5"><strong>Required</strong>. Brand highlight/SMS from.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Message</td>
												                <td class="col-sm-5"><strong>Required</strong>. Campaign details and ideas.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Template</td>
												                <td class="col-sm-5"><strong>Required</strong>. Pre-formatted campaign message.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Campaign Type</td>
												                <td class="col-sm-5"><strong>Required</strong>. Based campaign by purpose (e.i Bulk, LSMS and HSMS)</td>
												            </tr>
												    	</tbody>
												    </table>

												    <table class="table table-bordered table-striped">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Button</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Save as Draft</td>
												                <td class="col-sm-5">you campaign will be saved as draft.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Next</td>
												                <td class="col-sm-5">You will proceed to the next step.</td>
												            </tr>
												    	</tbody>
												    </table>	
			                   	   		</div>
			                   	</div>   		
			                </div>
			            </div>

						    <div class="span4">
				                <div class="thumbnail">
				                	<div class="caption">
				                    	<h4> <strong> Step 2 </strong> </h4>
					                    	<ul> 
						              			<li> Select Phonebook Group </li> <br>
						              				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/bulk2.png"  style="width:60%;"> </center> <br>
							              				<ul>	
							              					<li> No Group </li> <br>
							              						<ul>
							              							<li> Click Upload button. </li>
							              							<li> A pop up window will appear. Fill out necessary fields.</li>
							              							<li> Click Select Group. Otherwise, check Add to new group. </li>
							              							<li> Write the name of your group in the Select group field.</li>
							              							<li> In the Add option, choose if you Add to all group or New contacts only. </li> 
							              								<ul>
							              									<li> Add to all group - All your uploaded contacts will add to your group. </li>
							              									<li> New contacts only - Unique contacts will be uploaded to your group to avoid duplicate. </li>
							              								</ul>
							              							<li> Check Yes in the Replace zero to prefix and fill out in the input field. </li>
							              							<li> In the File, click the Select file to locate your file. The file type must be .csv</li>
							              							<li> Click Next. </li>	
							              							<li> You will be redirect to the Contact Uploads page.</li>
							              							<li> If the upload status is complete, go back to create campaign and click next.</li>
							              							<li> You  may now select your group in the Phonebook Group.</li> <br>
							              						</ul>
							              					<li> Existing Group </li><br>
							              						<ul>
							              							<li> Select on the phonebook group your group/s. </li>
							              							<li> Click Next.</li>
							              								<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/existinggroup.png"  style="width:60%;"> </center> <br>
							              						</ul>
							              	</ul>

												<table class="table table-bordered table-striped">
													<thead>
											            <tr>
											                <th class="col-sm-2"><span>Parameter</span></th> 
											                <th class="col-sm-6"><span>Description</span></th>
											            </tr>
											        </thead>
											        <tbody>
											            <tr>
											                <td class="col-sm-1">Phonebook Group</td>
											                <td class="col-sm-5"><strong>Required</strong>. Select desired recipient of campaign.</td>
											            </tr>
											        </tbody>
												</table>	

												<table class="table table-bordered table-striped">
													<thead>
											            <tr>
											                <th class="col-sm-2"><span>Button</span></th> 
											                <th class="col-sm-6"><span>Description</span></th>
											            </tr>
											        </thead>
											        <tbody>
											            <tr>
											                <td class="col-sm-1">Upload</td>
											                <td class="col-sm-5"><strong>Optional</strong>. If no available contact group. </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Back</td>
											                <td class="col-sm-5">Going back to the previous page.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Save as Draft</td>
											                <td class="col-sm-5">Your campaign will not be created, just saved it as draft.</td>
											            </tr>

											             <tr>
											                <td class="col-sm-1">Next</td>
											                <td class="col-sm-5">You will proceed to the next step in creating campaign.</td>
											            </tr>
											        </tbody>
												</table>	
			                    	</div>
			                	</div>
			            	</div>
						            
				            <div class="span4">
				                <div class="thumbnail">
				                	<div class="caption">
				                    	<h4> <strong> Step 3 </strong> </h4>
									        <ul> 
						              			<li> Scheduled campaign (Optional) </li> <br>
						              				<ul>
						              					<li> If you click the checkbox, you have to set the scheduled date. </li> <br>
						              						<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/scheduled.png"  style="width:60%;"> </center> <br> 
						              							<table class="table table-bordered table-striped">
																	<thead>
															            <tr>
															                <th class="col-sm-2"><span>Parameter</span></th> 
															                <th class="col-sm-6"><span>Description</span></th>
															            </tr>
															        </thead>
															        <tbody>
															            <tr>
															                <td class="col-sm-1">Campaign Start</td>
															                <td class="col-sm-5">Calendar Ready. Date from. (YYYY-MM-DD HH:MM)</td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Campaign End</td>
															                <td class="col-sm-5">Calendar Ready. Date to. (YYYY-MM-DD HH:MM) </td>
															            </tr>
															        </tbody>
																</table>

																<table class="table table-bordered table-striped">
																	<thead>
															            <tr>
															                <th class="col-sm-2"><span>Button</span></th> 
															                <th class="col-sm-6"><span>Description</span></th>
															            </tr>
															        </thead>
															        <tbody>
															            <tr>
															                <td class="col-sm-1">Back</td>
															                <td class="col-sm-5">You will go back to the previous step.</td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Create Campaign</td>
															                <td class="col-sm-5">Your campaign will be created.</td>
															            </tr>
															        </tbody>
																</table>
						              					<li> Click Create Campaign.</li> <br>	
						              				</ul>
												<li> Create Campaign </li>	
												<li> A summary of your campaign will be displayed. </li> <br>
													<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/summary.png"  style="width:60%;"> </center> <br>   	
														<table class="table table-bordered table-striped">
															<thead>
													            <tr>
													                <th class="col-sm-2"><span>Button</span></th> 
													                <th class="col-sm-6"><span>Description</span></th>
													            </tr>
													        </thead>
													        <tbody>
													            <tr>
													                <td class="col-sm-1">Edit</td>
													                <td class="col-sm-5">You will go back to the first step and able to edit your campaign.</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Send Test</td>
													                <td class="col-sm-5">Your campaign will send a test to test numbers.</td>
													            </tr>

													             <tr>
													                <td class="col-sm-1">Next</td>
													                <td class="col-sm-5">Your campaign will be created.</td>
													            </tr>
													        </tbody>
														</table>
												<li> Click Next. </li> <br>		
											</ul>
									</div>
				                </div>
				            </div>
						                 
												
			<h4 id="Locationbased"> <strong> LOCATION-BASED / LSMS Campaign </strong> </h4>
			<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>
				<div class="row-fluid">
		            <div class="thumbnails">
			            <div class="span4">
			               	<div class="thumbnail">
			                  	<div class="caption">
			                    	<h4> <strong> Step 1 </strong> </h4>
					                    <ul> 
											<li> Fill out Campaign Name </li>
											<li> Select Sender ID </li>
												<p> - Sender IDs are pre-approved by Account Managers. </p>
											<li> Fill out Campaign Message </li>
											<li> Use Template (Optional) </li>
												<ul>
													<li>  New Template </li> <br>
														<ul>
															<li> Click New Template. </li> <br>
																<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/newtemplate.png" style="width:70%;"> </center> <br>
																	<table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Column</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">ID</td>
																                <td class="col-sm-5">Template ID</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Message</td>
																                <td class="col-sm-5">Template Message</td>
																            </tr>
																    	</tbody>
																    </table>	

																    <table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Action</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">Use Template</td>
																                <td class="col-sm-5">You may use the selected template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Edit Template</td>
																                <td class="col-sm-5">You may edit the selected template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Delete Template</td>
																                <td class="col-sm-5">You may delete the selected template.</td>
																            </tr>
																    	</tbody>
																    </table>	
															<li> Fill out message. </li> <br>
																<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/createtemplate.png" style="width:70%;"> </center> <br>
																	<table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Parameter</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">Message</td>
																                <td class="col-sm-5">You may write your template message.</td>
																            </tr>
																    	</tbody>
																    </table>
															<li> Click Create Template to save your new created template. Otherwise, the window will close and redirect you to Template table. </li> <br>
																<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/templatetable.png" style="width:90%;"> </center> <br>
																	<table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Column</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">ID</td>
																                <td class="col-sm-5">Template ID</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Message</td>
																                <td class="col-sm-5">Template Message</td>
																            </tr>
																    	</tbody>
																    </table>	

																    <table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Action</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">Use Template</td>
																                <td class="col-sm-5">You may use the selected template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Edit Template</td>
																                <td class="col-sm-5">You may edit the selected template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Delete Template</td>
																                <td class="col-sm-5">You may delete the selected template.</td>
																            </tr>
																    	</tbody>
																    </table>

																    <table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Button</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">New Template</td>
																                <td class="col-sm-5">You may create new template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Previous</td>
																                <td class="col-sm-5">Will lead you back to the previous page.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Next</td>
																                <td class="col-sm-5">Will lead you forward to the next page.</td>
																            </tr>
																    	</tbody>
																    </table>		
														</ul>
													<li> Existing Template </li> <br>
														<ul>	
															<li> Click Use Template. </li> <br>
																<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/newtemplate.png" style="width:70%;"> </center> <br>
																	<table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Column</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">ID</td>
																                <td class="col-sm-5">Template ID</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Message</td>
																                <td class="col-sm-5">Template Message</td>
																            </tr>
																    	</tbody>
																    </table>	

																    <table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Action</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">Use Template</td>
																                <td class="col-sm-5">You may use the selected template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Edit Template</td>
																                <td class="col-sm-5">You may edit the selected template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Delete Template</td>
																                <td class="col-sm-5">You may delete the selected template.</td>
																            </tr>
																    	</tbody>
																    </table>	
															<li> The Template table will appear.  </li> <br>
																<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/templatetable.png" style="width:90%;"> </center> <br>
																	<table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Column</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">ID</td>
																                <td class="col-sm-5">Template ID</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Message</td>
																                <td class="col-sm-5">Template Message</td>
																            </tr>
																    	</tbody>
																    </table>	

																    <table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Action</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">Use Template</td>
																                <td class="col-sm-5">You may use the selected template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Edit Template</td>
																                <td class="col-sm-5">You may edit the selected template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Delete Template</td>
																                <td class="col-sm-5">You may delete the selected template.</td>
																            </tr>
																    	</tbody>
																    </table>

																    <table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Button</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">New Template</td>
																                <td class="col-sm-5">You may create new template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Previous</td>
																                <td class="col-sm-5">Will lead you back to the previous page.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Next</td>
																                <td class="col-sm-5">Will lead you forward to the next page.</td>
																            </tr>
																    	</tbody>
																    </table>		
															<li> In the Action column, click Use the Template. </li> <br>
														</ul>
												</ul>
											<li> Select Campaign Type </li> <br>
												<table class="table table-bordered table-striped">
				                					<thead>
											            <tr>
											                <th class="col-sm-2"><span>Campaign Type</span></th> 
											                <th class="col-sm-6"><span>Description</span></th>
											            </tr>
											        </thead>
											        <tbody>
											            <tr>
											                <td class="col-sm-1">Bulk</td>
											                <td class="col-sm-5">Campaign recepients are based on the contacts uploaded on the system.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Location-Based / LSMS</td>
											                <td class="col-sm-5">Campaign recepients are based on specified location.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Hyper Targeted / HSMS</td>
											                <td class="col-sm-5">Campaign recepients are based on the profiles of the recepients.</td>
											            </tr>
											    	</tbody>
											    </table>	

											<li> Click Next </li> <br> 
												<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/bulk1.png" style="width:60%;"> </center> <br>
										</ul>	
											<table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Parameter</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Campaign Name</td>
										                <td class="col-sm-5"><strong>Required</strong>. Campaign label.</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Sender ID</td>
										                <td class="col-sm-5"><strong>Required</strong>. Brand highlight/SMS from.</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Message</td>
										                <td class="col-sm-5"><strong>Required</strong>. Campaign details and ideas.</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Template</td>
										                <td class="col-sm-5"><strong>Required</strong>. Pre-formatted campaign message.</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Campaign Type</td>
										                <td class="col-sm-5"><strong>Required</strong>. Based campaign by purpose (e.i Bulk, LSMS and HSMS)</td>
										            </tr>
										    	</tbody>
										    </table>

										    <table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Button</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Save as Draft</td>
										                <td class="col-sm-5">you campaign will be saved as draft.</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Next</td>
										                <td class="col-sm-5">You will proceed to the next step.</td>
										            </tr>
										    	</tbody>
										    </table>	
	                   	   		</div>
			                </div>
			            </div>
			        </div>
			    </div>
					  
					    <div class="span4">
			                <div class="thumbnail">
			                	<div class="caption">
				                    	<h4> <strong> Step 2 </strong> </h4>
				                    		<ul> 
						              			<li> Select target locations </li>
													<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/lsms2.png"  style="width:60%;"> </center> <br> 	
														<table class="table table-bordered table-striped">
															<thead>
													            <tr>
													                <th class="col-sm-2"><span>Parameter</span></th> 
													                <th class="col-sm-6"><span>Description</span></th>
													            </tr>
													        </thead>
													        <tbody>
													            <tr>
													                <td class="col-sm-1">Select Locations</td>
													                <td class="col-sm-5"><strong>Required</strong>. Choose from existing locations (i.e Makati, Taguig)</td>
													            </tr>
													        </tbody>
														</table>


														<table class="table table-bordered table-striped">
															<thead>
													            <tr>
													                <th class="col-sm-2"><span>Button</span></th> 
													                <th class="col-sm-6"><span>Description</span></th>
													            </tr>
													        </thead>
													        <tbody>
													            <tr>
													                <td class="col-sm-1">Back</td>
													                <td class="col-sm-5">You will go back to the previous step.</td>
													            </tr>

													             <tr>
													                <td class="col-sm-1">Next</td>
													                <td class="col-sm-5">You will proceed to the next step.</td>
													            </tr>
													        </tbody>
														</table>
											<li> Click Next </li> <br> 			
										</ul>		
			                    	</div>
			                </div>
			            </div>
					            
			            <div class="span4">
			                <div class="thumbnail">
			                	<div class="caption">
			                    	<h4> <strong> Step 3 </strong> </h4>
								        <ul> 
					              			<li> Set your Target Reach or your Budget. </li>
					              				<p> - If you set your Target Reach, the Budget will automatically be computed and vice versa.</p>
												<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/target.png"  style="width:60%;"> </center> <br> 
											<li> Scheduled campaign (Optional) </li> <br>
					              				<ul>
					              					<li> If you click the checkbox, you have to set the scheduled date. </li> <br>
					              						<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/scheduled.png"  style="width:60%;"> </center> <br> 
					              							<table class="table table-bordered table-striped">
																<thead>
														            <tr>
														                <th class="col-sm-2"><span>Parameter</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Campaign Start</td>
														                <td class="col-sm-5">Calendar Ready. Date from. (YYYY-MM-DD HH:MM)</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Campaign End</td>
														                <td class="col-sm-5">Calendar Ready. Date to. (YYYY-MM-DD HH:MM) </td>
														            </tr>
														        </tbody>
															</table>

															<table class="table table-bordered table-striped">
																<thead>
														            <tr>
														                <th class="col-sm-2"><span>Button</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Back</td>
														                <td class="col-sm-5">You will go back to the previous step.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Create Campaign</td>
														                <td class="col-sm-5">Your campaign will be created.</td>
														            </tr>
														        </tbody>
															</table>
													<li> Click Create Campaign.</li> <br> 
												</ul>
											<li> Click Create Campaign.</li>
											<li> A summary of your created campaign will be displayed. </li><br>
												<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/summary2.png"  style="width:60%;"> </center><br>			
													<table class="table table-bordered table-striped">
														<thead>
												            <tr>
												                <th class="col-sm-2"><span>Button</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Edit</td>
												                <td class="col-sm-5">You will go back to the first step and able to edit your campaign.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Next</td>
												                <td class="col-sm-5">Your campaign will be successfully created.</td>
												            </tr>
												        </tbody>
													</table>
											<li> Click Next.</li>
										</ul>			
		                    	</div>
			                </div>
			            </div>
					      
			<h4 id="Hypertargeted"> <strong> HYPER TARGETED / HSMS Campaign </strong> </h4>
			<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>
				<div class="row-fluid">
		            <div class="thumbnails">
			            <div class="span4">
			               	<div class="thumbnail">
			                  	<div class="caption">
			                    	<h4> <strong> Step 1 </strong> </h4>
					                    <ul> 
											<li> Fill out Campaign Name </li>
											<li> Select Sender ID </li>
												<p> - Sender IDs are pre-approved by Account Managers. </p>
											<li> Fill out Campaign Message </li>
											<li> Use Template (Optional) </li>
												<ul>
													<li>  New Template </li> <br>
														<ul>
															<li> Click New Template. </li> <br>
																<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/newtemplate.png" style="width:70%;"> </center> <br>
																	<table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Column</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">ID</td>
																                <td class="col-sm-5">Template ID</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Message</td>
																                <td class="col-sm-5">Template Message</td>
																            </tr>
																    	</tbody>
																    </table>	

																    <table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Action</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">Use Template</td>
																                <td class="col-sm-5">You may use the selected template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Edit Template</td>
																                <td class="col-sm-5">You may edit the selected template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Delete Template</td>
																                <td class="col-sm-5">You may delete the selected template.</td>
																            </tr>
																    	</tbody>
																    </table>	
															<li> Fill out message. </li> <br>
																<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/createtemplate.png" style="width:70%;"> </center> <br>
																	<table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Parameter</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">Message</td>
																                <td class="col-sm-5">You may write your template message.</td>
																            </tr>
																    	</tbody>
																    </table>
															<li> Click Create Template to save your new created template. Otherwise, the window will close and redirect you to Template table. </li> <br>
																<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/templatetable.png" style="width:90%;"> </center> <br>
																	<table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Column</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">ID</td>
																                <td class="col-sm-5">Template ID</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Message</td>
																                <td class="col-sm-5">Template Message</td>
																            </tr>
																    	</tbody>
																    </table>	

																    <table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Action</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">Use Template</td>
																                <td class="col-sm-5">You may use the selected template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Edit Template</td>
																                <td class="col-sm-5">You may edit the selected template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Delete Template</td>
																                <td class="col-sm-5">You may delete the selected template.</td>
																            </tr>
																    	</tbody>
																    </table>

																    <table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Button</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">New Template</td>
																                <td class="col-sm-5">You may create new template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Previous</td>
																                <td class="col-sm-5">Will lead you back to the previous page.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Next</td>
																                <td class="col-sm-5">Will lead you forward to the next page.</td>
																            </tr>
																    	</tbody>
																    </table>		
														</ul>
													<li> Existing Template </li> <br>
														<ul>	
															<li> Click Use Template. </li> <br>
																<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/newtemplate.png" style="width:70%;"> </center> <br>
																	<table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Column</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">ID</td>
																                <td class="col-sm-5">Template ID</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Message</td>
																                <td class="col-sm-5">Template Message</td>
																            </tr>
																    	</tbody>
																    </table>	

																    <table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Action</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">Use Template</td>
																                <td class="col-sm-5">You may use the selected template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Edit Template</td>
																                <td class="col-sm-5">You may edit the selected template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Delete Template</td>
																                <td class="col-sm-5">You may delete the selected template.</td>
																            </tr>
																    	</tbody>
																    </table>	
															<li> The Template table will appear.  </li> <br>
																<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/templatetable.png" style="width:90%;"> </center> <br>
																	<table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Column</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">ID</td>
																                <td class="col-sm-5">Template ID</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Message</td>
																                <td class="col-sm-5">Template Message</td>
																            </tr>
																    	</tbody>
																    </table>	

																    <table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Action</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">Use Template</td>
																                <td class="col-sm-5">You may use the selected template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Edit Template</td>
																                <td class="col-sm-5">You may edit the selected template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Delete Template</td>
																                <td class="col-sm-5">You may delete the selected template.</td>
																            </tr>
																    	</tbody>
																    </table>

																    <table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Button</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">New Template</td>
																                <td class="col-sm-5">You may create new template.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Previous</td>
																                <td class="col-sm-5">Will lead you back to the previous page.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Next</td>
																                <td class="col-sm-5">Will lead you forward to the next page.</td>
																            </tr>
																    	</tbody>
																    </table>		
															<li> In the Action column, click Use the Template. </li> <br>
														</ul>
												</ul>
											<li> Select Campaign Type </li> <br>
												<table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Campaign Type</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">Bulk</td>
																                <td class="col-sm-5">Campaign recepients are based on the contacts uploaded on the system.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Location-Based / LSMS</td>
																                <td class="col-sm-5">Campaign recepients are based on specified location.</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Hyper Targeted / HSMS</td>
																                <td class="col-sm-5">Campaign recepients are based on the profiles of the recepients.</td>
																            </tr>
																    	</tbody>
																    </table>	

											<li> Click Next </li> <br> 
												<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/bulk1.png" style="width:60%;"> </center> <br>
										</ul>	
											<table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Parameter</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Campaign Name</td>
										                <td class="col-sm-5"><strong>Required</strong>. Campaign label.</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Sender ID</td>
										                <td class="col-sm-5"><strong>Required</strong>. Brand highlight/SMS from.</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Message</td>
										                <td class="col-sm-5"><strong>Required</strong>. Campaign details and ideas.</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Template</td>
										                <td class="col-sm-5"><strong>Required</strong>. Pre-formatted campaign message.</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Campaign Type</td>
										                <td class="col-sm-5"><strong>Required</strong>. Based campaign by purpose (e.i Bulk, LSMS and HSMS)</td>
										            </tr>
										    	</tbody>
										    </table>

										    <table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Button</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Save as Draft</td>
										                <td class="col-sm-5">Your campaign will be saved as draft.</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Next</td>
										                <td class="col-sm-5">You will proceed to the next step.</td>
										            </tr>
										    	</tbody>
										    </table>	
	                   	   		</div>
			                </div>
			            </div>
			        </div>
			    </div>
						        
					    <div class="span4">
			                <div class="thumbnail">
			                	<div class="caption">
			                    	<h4> <strong> Step 2 </strong> </h4>
			                    		<ul> 
					              			<li> Fill out all the required fields. </li> <br>
												<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/hsms2.png"  style="width:70%;"> </center><br>
													<table class="table table-bordered table-striped">
														<thead>
												            <tr>
												                <th class="col-sm-2"><span>Parameter</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												        	<tr>
												                <td class="col-sm-1">Gender</td>
												                <td class="col-sm-5">Male and Female</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Interest</td>
												                <td class="col-sm-5">Food, technology</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Relationship</td>
												                <td class="col-sm-5">Single, Engaged, Widowed</td>
												            </tr>


												        	<tr>
												                <td class="col-sm-1">Ows a Credit Card</td>
												                <td class="col-sm-5">Yes or No</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Owns A House</td>
												                <td class="col-sm-5">Yes or No</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Owns A Car</td>
												                <td class="col-sm-5">Yes or No</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Owns A Computer / Laptop</td>
												                <td class="col-sm-5">Yes or No</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Carrier</td>
												                <td class="col-sm-5">Type of Operator</td>
												            </tr>	

												           	<tr>
												                <td class="col-sm-1">Plan Bundle</td>
												                <td class="col-sm-5">Internet data capability</td>
												            </tr>
												        </tbody>
					            					</table>

					            					<table class="table table-bordered table-striped">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Button</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Back</td>
												                <td class="col-sm-5">You will go back to the previous step.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Next</td>
												                <td class="col-sm-5">You will proceed to the next step.</td>
												            </tr>
												    	</tbody>
										    		</table>		
					            		<li> Click Next </li> <br> 
					            	</ul>				
		                    	</div>
			                </div>
			            </div>
					            
			            <div class="span4">
			                <div class="thumbnail">
			                	<div class="caption">
			                    	<h4> <strong> Step 3 </strong> </h4>
								        <ul> 
					              			<li> Set your Target Reach or your Budget. </li>
					              				<p> - If you set your Target Reach, the Budget will automatically be computed and vice versa.</p>
												<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/target.png"  style="width:60%;"> </center> <br> 
											<li> Scheduled campaign (Optional) </li> <br>
					              				<ul>
					              					<li> If you click the checkbox, you have to set the scheduled date. </li> <br>
					              						<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/scheduled.png"  style="width:60%;"> </center> <br> 
					              							<table class="table table-bordered table-striped">
																<thead>
														            <tr>
														                <th class="col-sm-2"><span>Parameter</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Campaign Start</td>
														                <td class="col-sm-5">Calendar Ready. Date from. (YYYY-MM-DD HH:MM)</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Campaign End</td>
														                <td class="col-sm-5">Calendar Ready. Date to. (YYYY-MM-DD HH:MM) </td>
														            </tr>
														        </tbody>
															</table>

															<table class="table table-bordered table-striped">
																<thead>
														            <tr>
														                <th class="col-sm-2"><span>Button</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Back</td>
														                <td class="col-sm-5">You will go back to the previous step.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Create Campaign</td>
														                <td class="col-sm-5">Your campaign will be created.</td>
														            </tr>
														        </tbody>
															</table>
													<li> Click Create Campaign.</li> <br> 
												</ul>
											<li> Click Create Campaign.</li>
											<li> A summary of your created campaign will be displayed. </li><br>
												<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/summary3.png"  style="width:30%;"> </center><br>			
													<table class="table table-bordered table-striped">
														<thead>
												            <tr>
												                <th class="col-sm-2"><span>Button</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Edit</td>
												                <td class="col-sm-5">You will go back to the first step and able to edit your campaign.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Next</td>
												                <td class="col-sm-5">Your campaign will be successfully created.</td>
												            </tr>
												        </tbody>
													</table>
											<li> Click View Campaign.</li>
											<li> In the Campaign Table, select your campaign if the status is ready. If its ready, click View and you will redirect to step 3.</li>
											<li> Click Next.</li>
										</ul>			
		                    	</div>
			                </div>
			            </div>
			        </div> 

			<h3 id="Conversation"> <strong> Conversation </strong> </h3>
			<div style="padding-left: 20px;"> <h4 id="Registration"> <strong> Registration </strong> </h4>
			<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
				                  		<div class="caption">
					                    	<h4> <strong> Step 1 </strong> </h4>
							                    <ul> 
													<li> Fill out Campaign Name </li>
													<li> Select Sender ID </li>
														<p> - Sender IDs are pre-approved by Account Managers. </p>
													<li> Select Primary Keyword </li>
													<li> Select Secondary Keyword </li>
													<li> Fill out Campaign Header </li>
													<li> Fill out Campaign Footer </li>
													<li> Use Template (Optional) </li>
														<ul>
															<li>  New Template </li> <br>
																<ul>
																	<li> Click New Template. </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/newtemplate.png" style="width:70%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Column</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">ID</td>
																		                <td class="col-sm-5">Template ID</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">Template Message</td>
																		            </tr>
																		    	</tbody>
																		    </table>	

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Action</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Use Template</td>
																		                <td class="col-sm-5">You may use the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Edit Template</td>
																		                <td class="col-sm-5">You may edit the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Delete Template</td>
																		                <td class="col-sm-5">You may delete the selected template.</td>
																		            </tr>
																		    	</tbody>
																		    </table>	
																	<li> Fill out message. </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/createtemplate.png" style="width:70%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Parameter</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">You may write your template message.</td>
																		            </tr>
																		    	</tbody>
																		    </table>
																	<li> Click Create Template to save your new created template. Otherwise, the window will close and redirect you to Template table. </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/templatetable.png" style="width:90%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Column</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">ID</td>
																		                <td class="col-sm-5">Template ID</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">Template Message</td>
																		            </tr>
																		    	</tbody>
																		    </table>	

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Action</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Use Template</td>
																		                <td class="col-sm-5">You may use the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Edit Template</td>
																		                <td class="col-sm-5">You may edit the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Delete Template</td>
																		                <td class="col-sm-5">You may delete the selected template.</td>
																		            </tr>
																		    	</tbody>
																		    </table>

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Button</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">New Template</td>
																		                <td class="col-sm-5">You may create new template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Previous</td>
																		                <td class="col-sm-5">Will lead you back to the previous page.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Next</td>
																		                <td class="col-sm-5">Will lead you forward to the next page.</td>
																		            </tr>
																		    	</tbody>
																		    </table>		
																</ul>
															<li> Existing Template </li> <br>
																<ul>	
																	<li> Click Use Template. </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/newtemplate.png" style="width:70%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Column</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">ID</td>
																		                <td class="col-sm-5">Template ID</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">Template Message</td>
																		            </tr>
																		    	</tbody>
																		    </table>	

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Action</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Use Template</td>
																		                <td class="col-sm-5">You may use the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Edit Template</td>
																		                <td class="col-sm-5">You may edit the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Delete Template</td>
																		                <td class="col-sm-5">You may delete the selected template.</td>
																		            </tr>
																		    	</tbody>
																		    </table>	
																	<li> The Template table will appear.  </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/templatetable.png" style="width:90%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Column</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">ID</td>
																		                <td class="col-sm-5">Template ID</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">Template Message</td>
																		            </tr>
																		    	</tbody>
																		    </table>	

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Action</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Use Template</td>
																		                <td class="col-sm-5">You may use the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Edit Template</td>
																		                <td class="col-sm-5">You may edit the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Delete Template</td>
																		                <td class="col-sm-5">You may delete the selected template.</td>
																		            </tr>
																		    	</tbody>
																		    </table>

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Button</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">New Template</td>
																		                <td class="col-sm-5">You may create new template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Previous</td>
																		                <td class="col-sm-5">Will lead you back to the previous page.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Next</td>
																		                <td class="col-sm-5">Will lead you forward to the next page.</td>
																		            </tr>
																		    	</tbody>
																		    </table>		
																	<li> In the Action column, click Use the Template. </li> <br>
																</ul>
														</ul>
													<li> Select Campaign Type </li> <br>
														<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Campaign Type</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Bulk</td>
																		                <td class="col-sm-5">Campaign recepients are based on the contacts uploaded on the system.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Location-Based / LSMS</td>
																		                <td class="col-sm-5">Campaign recepients are based on specified location.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Hyper Targeted / HSMS</td>
																		                <td class="col-sm-5">Campaign recepients are based on the profiles of the recepients.</td>
																		            </tr>
																		    	</tbody>
																		    </table>	
	
													<li> Click Next </li> <br> 
														<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/reg_1.png" style="width:60%;"> </center> <br>
												</ul>	
													<table class="table table-bordered table-striped">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Parameter</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Campaign Name</td>
												                <td class="col-sm-5"><strong>Required</strong>. Campaign label.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Sender ID</td>
												                <td class="col-sm-5"><strong>Required</strong>. Brand highlight/SMS from.</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Primary Keyword</td>
												                <td class="col-sm-5"><strong>Required</strong>. Primary keyword for campaign message. </td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Secondary Keyword</td>
												                <td class="col-sm-5"><strong>Required</strong>. Secondary keyword for campaign message. </td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Header</td>
												                <td class="col-sm-5"><strong>Required</strong>. Header for campign message. </td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Footer</td>
												                <td class="col-sm-5"><strong>Required</strong>. Footer for campaign message. </td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Template</td>
												                <td class="col-sm-5"><strong>Required</strong>. Pre-formatted campaign message.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Campaign Type</td>
												                <td class="col-sm-5"><strong>Required</strong>. Based campaign by purpose (e.i Bulk, LSMS and HSMS)</td>
												            </tr>
												    	</tbody>
												    </table>

												    <table class="table table-bordered table-striped">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Button</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Save as Draft</td>
												                <td class="col-sm-5">you campaign will be saved as draft.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Next</td>
												                <td class="col-sm-5">You will proceed to the next step.</td>
												            </tr>
												    	</tbody>
												    </table>	
			                   	   		</div>
			                   	</div>   		
			                </div>
			            </div>

						    <div class="span4">
				                <div class="thumbnail">
				                	<div class="caption">
				                    	<h4> <strong> Step 2 </strong> </h4>
					                    	<ul> 
						              			<li> Select Phonebook Group </li> <br>
						              				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/reg_2.png"  style="width:60%;"> </center> <br>
							              				<ul>	
							              					<li> No Group </li> <br>
							              						<ul>
							              							<li> Click Upload button. </li>
							              							<li> A pop up window will appear. Fill out necessary fields.</li>
							              							<li> Click Select Group. Otherwise, check Add to new group. </li>
							              							<li> Write the name of your group in the Select group field.</li>
							              							<li> In the Add option, choose if you Add to all group or New contacts only. </li> 
							              								<ul>
							              									<li> Add to all group - All your uploaded contacts will add to your group. </li>
							              									<li> New contacts only - Unique contacts will be uploaded to your group to avoid duplicate. </li>
							              								</ul>
							              							<li> Check Yes in the Replace zero to prefix and fill out in the input field. </li>
							              							<li> In the File, click the Select file to locate your file. The file type must be .csv</li>
							              							<li> Click Next. </li>	
							              							<li> You will be redirect to the Contact Uploads page.</li>
							              							<li> If the upload status is complete, go back to create campaign and click next.</li>
							              							<li> You  may now select your group in the Phonebook Group.</li> <br>
							              						</ul>
							              					<li> Existing Group </li><br>
							              						<ul>
							              							<li> Select on the phonebook group your group/s. </li>
							              							<li> Click Next.</li>
							              								<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/existinggroup.png"  style="width:60%;"> </center> <br>
							              						</ul>
							              	</ul>

												<table class="table table-bordered table-striped">
													<thead>
											            <tr>
											                <th class="col-sm-2"><span>Parameter</span></th> 
											                <th class="col-sm-6"><span>Description</span></th>
											            </tr>
											        </thead>
											        <tbody>
											            <tr>
											                <td class="col-sm-1">Phonebook Group</td>
											                <td class="col-sm-5"><strong>Required</strong>. Select desired recipient of campaign.</td>
											            </tr>
											        </tbody>
												</table>	

												<table class="table table-bordered table-striped">
													<thead>
											            <tr>
											                <th class="col-sm-2"><span>Button</span></th> 
											                <th class="col-sm-6"><span>Description</span></th>
											            </tr>
											        </thead>
											        <tbody>
											            <tr>
											                <td class="col-sm-1">Upload</td>
											                <td class="col-sm-5"><strong>Optional</strong>. If no available contact group. </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Back</td>
											                <td class="col-sm-5">Going back to the previous page.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Save as Draft</td>
											                <td class="col-sm-5">Your campaign will not be created, just saved it as draft.</td>
											            </tr>

											             <tr>
											                <td class="col-sm-1">Next</td>
											                <td class="col-sm-5">You will proceed to the next step in creating campaign.</td>
											            </tr>
											        </tbody>
												</table>	
			                    	</div>
			                	</div>
			            	</div>
						            
				            <div class="span4">
				                <div class="thumbnail">
				                	<div class="caption">
				                    	<h4> <strong> Step 3 </strong> </h4>
									        <ul> 
						              			<li> Scheduled campaign (Optional) </li> <br>
						              				<ul>
						              					<li> If you click the checkbox, you have to set the scheduled date. </li> 
						              					<li> If you click the checkbox, you have to set the repeated date or schedule. </li> <br>
						              						<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/reg_3.png"  style="width:60%;"> </center> <br> 
						              							<table class="table table-bordered table-striped">
																	<thead>
															            <tr>
															                <th class="col-sm-2"><span>Parameter</span></th> 
															                <th class="col-sm-6"><span>Description</span></th>
															            </tr>
															        </thead>
															        <tbody>
															            <tr>
															                <td class="col-sm-1">Campaign Start</td>
															                <td class="col-sm-5">Calendar Ready. Date from. (YYYY-MM-DD HH:MM)</td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Campaign End</td>
															                <td class="col-sm-5">Calendar Ready. Date to. (YYYY-MM-DD HH:MM) </td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Daily</td>
															                <td class="col-sm-5">If Daily, campaign will be sent daily as scheduled. </td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Weekly</td>
															                <td class="col-sm-5">If Weekly, campaign will be sent weekly as scheduled. </td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Monthly</td>
															                <td class="col-sm-5">If Monthly, campaign will be sent monthly as scheduled. </td>
															            </tr>
															        </tbody>
																</table>

																<table class="table table-bordered table-striped">
																	<thead>
															            <tr>
															                <th class="col-sm-2"><span>Button</span></th> 
															                <th class="col-sm-6"><span>Description</span></th>
															            </tr>
															        </thead>
															        <tbody>
															            <tr>
															                <td class="col-sm-1">Back</td>
															                <td class="col-sm-5">You will go back to the previous step.</td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Create Campaign</td>
															                <td class="col-sm-5">Your campaign will be created.</td>
															            </tr>
															        </tbody>
																</table>
						              					<li> Click Create Campaign.</li> <br>	
						              				</ul>
												<li> Create Campaign </li>	
												<li> A summary of your campaign will be displayed. </li> <br>
													<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/reg_summary.png"  style="width:60%;"> </center> <br>   	
														<table class="table table-bordered table-striped">
															<thead>
													            <tr>
													                <th class="col-sm-2"><span>Button</span></th> 
													                <th class="col-sm-6"><span>Description</span></th>
													            </tr>
													        </thead>
													        <tbody>
													            <tr>
													                <td class="col-sm-1">Edit</td>
													                <td class="col-sm-5">You will go back to the first step and able to edit your campaign.</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Send Test</td>
													                <td class="col-sm-5">Your campaign will send a test to test numbers.</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Next</td>
													                <td class="col-sm-5">Your campaign will be created.</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Simulate Questionnaire</td>
													                <td class="col-sm-5">Your going to test the campaign.</td>
													            </tr>
													        </tbody>
														</table>
												<li> Click Next. </li> <br>		
											</ul>
									</div>
				                </div>
				            </div>

			<h4 id="Quiz"> <strong> Quiz </strong> </h4>
			<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
				                  		<div class="caption">
											<h4> <strong> Create Quiz </strong> </h4>
				                  				<ul>
				                  					<li> Fill out or Select Access Code </li>
				                  					<li> Select Expiration Date </li>
				                  					<li> Fill out Max Retries </li>
				                  					<li> Fill out Question Number </li>
				                  					<li> Fill out Question </li>
				                  					<li> Fill out Answer Code </li>
				                  					<li> Fill out Answer Text </li>
				                  					<li> Select checkbox for the correct answer </li><br>
				                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/quiz_1.png" style="width:70%;"> </center> <br>
				                  				</ul>
				                  					<table class="table table-bordered table-striped">
													<thead>
											            <tr>
											                <th class="col-sm-2"><span>Parameter</span></th> 
											                <th class="col-sm-6"><span>Description</span></th>
											            </tr>
											        </thead>
											        <tbody> 
											        	<tr>
											                <td class="col-sm-1">Access Code</td>
											                <td class="col-sm-5">Access number of the campaign. </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Expiration Date</td>
											                <td class="col-sm-5">Expiration date of the campaign. </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Max Retries</td>
											                <td class="col-sm-5">Max Retries of participant to answer the quiz correctly. </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Question Type</td>
											                <td class="col-sm-5">Multiple Choice (default). </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Question Number</td>
											                <td class="col-sm-5">Number Question. </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Question</td>
											                <td class="col-sm-5">Your Question needed for Quiz.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Answer Code</td>
											                <td class="col-sm-5">Answer Code for the Quiz.  (e.g. Yes or No)</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Answer Text</td>
											                <td class="col-sm-5">Answer text for the Quiz. (e.g. Red, Yellow, Blue)</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Correct (checkbox )</td>
											                <td class="col-sm-5">Select correct answer/s.</td>
											            </tr>
											        </tbody>
												</table>

												<table class="table table-bordered table-striped">
													<thead>
											            <tr>
											                <th class="col-sm-2"><span>Button</span></th> 
											                <th class="col-sm-6"><span>Description</span></th>
											            </tr>
											        </thead>
											        <tbody> 
											            <tr>
											                <td class="col-sm-1">Add Option</td>
											                <td class="col-sm-5">To add answer code and answer text. </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Add Question</td>
											                <td class="col-sm-5">To add another question.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Submit</td>
											                <td class="col-sm-5">To save and proceed to the next step.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Delete button</td>
											                <td class="col-sm-5">To delete question of the quiz. .</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Up button</td>
											                <td class="col-sm-5">To move up question.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Down button</td>
											                <td class="col-sm-5">To move down question.</td>
											            </tr>
											        </tbody>
												</table>
											</div>
										</div>
									</div>
									
									<div class="span4">
				                		<div class="thumbnail">
				                			<div class="caption">			
					                    	<h4> <strong> Step 1 </strong> </h4>
							                    <ul> 
													<li> Fill out Campaign Name </li>
													<li> Select Sender ID </li>
														<p> - Sender IDs are pre-approved by Account Managers. </p>
													<li> Select Primary Keyword </li>
													<li> Select Secondary Keyword </li>
													<li> Fill out Campaign Header </li>
													<li> Fill out Campaign Footer </li>
													<li> Use Template (Optional) </li>
														<ul>
															<li>  New Template </li> <br>
																<ul>
																	<li> Click New Template. </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/quiz_2.png" style="width:70%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Column</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Campaign Name</td>
																		                <td class="col-sm-5"><strong>Required</strong>. Campaign label.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Sender ID</td>
																		                <td class="col-sm-5"><strong>Required</strong>. Brand highlight/SMS from.</td>
																		            </tr>

																		             <tr>
																		                <td class="col-sm-1">Primary Keyword</td>
																		                <td class="col-sm-5"><strong>Required</strong>. Primary keyword for campaign message. </td>
																		            </tr>

																		             <tr>
																		                <td class="col-sm-1">Secondary Keyword</td>
																		                <td class="col-sm-5"><strong>Required</strong>. Secondary keyword for campaign message. </td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Header</td>
																		                <td class="col-sm-5"><strong>Required</strong>. Header for campign message. </td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Footer</td>
																		                <td class="col-sm-5"><strong>Required</strong>. Footer for campaign message. </td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Template</td>
																		                <td class="col-sm-5"><strong>Required</strong>. Pre-formatted campaign message.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Campaign Type</td>
																		                <td class="col-sm-5"><strong>Required</strong>. Based campaign by purpose (e.i Bulk, LSMS and HSMS)</td>
																		            </tr>
																		    	</tbody>
																		    </table>	

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Action</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		           <tr>
																		                <td class="col-sm-1">Save as Draft</td>
																		                <td class="col-sm-5">Your campaign will not be created, just saved it as draft.</td>
																		            </tr>

																		             <tr>
																		                <td class="col-sm-1">Next</td>
																		                <td class="col-sm-5">You will proceed to the next step in creating campaign.</td>
																		            </tr>
																		    	</tbody>
																		    </table>	
																	<li> Fill out message. </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/createtemplate.png" style="width:70%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Parameter</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">You may write your template message.</td>
																		            </tr>
																		    	</tbody>
																		    </table>
																	<li> Click Create Template to save your new created template. Otherwise, the window will close and redirect you to Template table. </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/templatetable.png" style="width:90%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Column</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">ID</td>
																		                <td class="col-sm-5">Template ID</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">Template Message</td>
																		            </tr>
																		    	</tbody>
																		    </table>	

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Action</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Use Template</td>
																		                <td class="col-sm-5">You may use the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Edit Template</td>
																		                <td class="col-sm-5">You may edit the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Delete Template</td>
																		                <td class="col-sm-5">You may delete the selected template.</td>
																		            </tr>
																		    	</tbody>
																		    </table>

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Button</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">New Template</td>
																		                <td class="col-sm-5">You may create new template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Previous</td>
																		                <td class="col-sm-5">Will lead you back to the previous page.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Next</td>
																		                <td class="col-sm-5">Will lead you forward to the next page.</td>
																		            </tr>
																		    	</tbody>
																		    </table>		
																</ul>
															<li> Existing Template </li> <br>
																<ul>	
																	<li> Click Use Template. </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/newtemplate.png" style="width:70%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Column</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">ID</td>
																		                <td class="col-sm-5">Template ID</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">Template Message</td>
																		            </tr>
																		    	</tbody>
																		    </table>	

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Action</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Use Template</td>
																		                <td class="col-sm-5">You may use the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Edit Template</td>
																		                <td class="col-sm-5">You may edit the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Delete Template</td>
																		                <td class="col-sm-5">You may delete the selected template.</td>
																		            </tr>
																		    	</tbody>
																		    </table>	
																	<li> The Template table will appear.  </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/templatetable.png" style="width:90%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Column</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">ID</td>
																		                <td class="col-sm-5">Template ID</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">Template Message</td>
																		            </tr>
																		    	</tbody>
																		    </table>	

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Action</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Use Template</td>
																		                <td class="col-sm-5">You may use the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Edit Template</td>
																		                <td class="col-sm-5">You may edit the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Delete Template</td>
																		                <td class="col-sm-5">You may delete the selected template.</td>
																		            </tr>
																		    	</tbody>
																		    </table>

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Button</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">New Template</td>
																		                <td class="col-sm-5">You may create new template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Previous</td>
																		                <td class="col-sm-5">Will lead you back to the previous page.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Next</td>
																		                <td class="col-sm-5">Will lead you forward to the next page.</td>
																		            </tr>
																		    	</tbody>
																		    </table>		
																	<li> In the Action column, click Use the Template. </li> <br>
																</ul>
														</ul>
													<li> Select Campaign Type </li> <br>
														<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Campaign Type</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Bulk</td>
																		                <td class="col-sm-5">Campaign recepients are based on the contacts uploaded on the system.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Location-Based / LSMS</td>
																		                <td class="col-sm-5">Campaign recepients are based on specified location.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Hyper Targeted / HSMS</td>
																		                <td class="col-sm-5">Campaign recepients are based on the profiles of the recepients.</td>
																		            </tr>
																		    	</tbody>
																		    </table>	
	
													<li> Click Next </li> <br> 
														<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/quiz_2.png" style="width:60%;"> </center> <br>
												</ul>	
													<table class="table table-bordered table-striped">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Parameter</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Campaign Name</td>
												                <td class="col-sm-5"><strong>Required</strong>. Campaign label.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Sender ID</td>
												                <td class="col-sm-5"><strong>Required</strong>. Brand highlight/SMS from.</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Primary Keyword</td>
												                <td class="col-sm-5"><strong>Required</strong>. Primary keyword for campaign message. </td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Secondary Keyword</td>
												                <td class="col-sm-5"><strong>Required</strong>. Secondary keyword for campaign message. </td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Header</td>
												                <td class="col-sm-5"><strong>Required</strong>. Header for campign message. </td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Footer</td>
												                <td class="col-sm-5"><strong>Required</strong>. Footer for campaign message. </td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Template</td>
												                <td class="col-sm-5"><strong>Required</strong>. Pre-formatted campaign message.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Campaign Type</td>
												                <td class="col-sm-5"><strong>Required</strong>. Based campaign by purpose (e.i Bulk, LSMS and HSMS)</td>
												            </tr>
												    	</tbody>
												    </table>

												    <table class="table table-bordered table-striped">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Button</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Save as Draft</td>
												                <td class="col-sm-5">Your campaign will be saved as draft.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Next</td>
												                <td class="col-sm-5">You will proceed to the next step.</td>
												            </tr>
												    	</tbody>
												    </table>	
			                   	   		</div>
			                   	</div>   		
			                </div>
			            </div>

						    <div class="span4">
				                <div class="thumbnail">
				                	<div class="caption">
				                    	<h4> <strong> Step 2 </strong> </h4>
					                    	<ul> 
						              			<li> Select Phonebook Group </li> <br>
						              				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/quiz_3.png"  style="width:60%;"> </center> <br>
							              				<ul>	
							              					<li> No Group </li> <br>
							              						<ul>
							              							<li> Click Upload button. </li>
							              							<li> A pop up window will appear. Fill out necessary fields.</li>
							              							<li> Click Select Group. Otherwise, check Add to new group. </li>
							              							<li> Write the name of your group in the Select group field.</li>
							              							<li> In the Add option, choose if you Add to all group or New contacts only. </li> 
							              								<ul>
							              									<li> Add to all group - All your uploaded contacts will add to your group. </li>
							              									<li> New contacts only - Unique contacts will be uploaded to your group to avoid duplicate. </li>
							              								</ul>
							              							<li> Check Yes in the Replace zero to prefix and fill out in the input field. </li>
							              							<li> In the File, click the Select file to locate your file. The file type must be .csv</li>
							              							<li> Click Next. </li>	
							              							<li> You will be redirect to the Contact Uploads page.</li>
							              							<li> If the upload status is complete, go back to create campaign and click next.</li>
							              							<li> You  may now select your group in the Phonebook Group.</li> <br>
							              						</ul>
							              					<li> Existing Group </li><br>
							              						<ul>
							              							<li> Select on the phonebook group your group/s. </li>
							              							<li> Click Next.</li>
							              								<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/existinggroup.png"  style="width:60%;"> </center> <br>
							              						</ul>
							              	</ul>

												<table class="table table-bordered table-striped">
													<thead>
											            <tr>
											                <th class="col-sm-2"><span>Parameter</span></th> 
											                <th class="col-sm-6"><span>Description</span></th>
											            </tr>
											        </thead>
											        <tbody>
											            <tr>
											                <td class="col-sm-1">Phonebook Group</td>
											                <td class="col-sm-5"><strong>Required</strong>. Select desired recipient of campaign.</td>
											            </tr>
											        </tbody>
												</table>	

												<table class="table table-bordered table-striped">
													<thead>
											            <tr>
											                <th class="col-sm-2"><span>Button</span></th> 
											                <th class="col-sm-6"><span>Description</span></th>
											            </tr>
											        </thead>
											        <tbody>
											            <tr>
											                <td class="col-sm-1">Upload</td>
											                <td class="col-sm-5"><strong>Optional</strong>. If no available contact group. </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Back</td>
											                <td class="col-sm-5">Going back to the previous page.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Save as Draft</td>
											                <td class="col-sm-5">Your campaign will not be created, just saved it as draft.</td>
											            </tr>

											             <tr>
											                <td class="col-sm-1">Next</td>
											                <td class="col-sm-5">You will proceed to the next step in creating campaign.</td>
											            </tr>
											        </tbody>
												</table>	
			                    	</div>
			                	</div>
			            	</div>
						            
				            <div class="span4">
				                <div class="thumbnail">
				                	<div class="caption">
				                    	<h4> <strong> Step 3 </strong> </h4>
									        <ul> 
						              			<li> Scheduled campaign (Optional) </li> <br>
						              				<ul>
						              					<li> If you click the checkbox, you have to set the scheduled date. </li> 
						              					<li> If you click the checkbox, you have to set the repeated date or schedule. </li> <br>
						              						<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/reg_3.png"  style="width:60%;"> </center> <br> 
						              							<table class="table table-bordered table-striped">
																	<thead>
															            <tr>
															                <th class="col-sm-2"><span>Parameter</span></th> 
															                <th class="col-sm-6"><span>Description</span></th>
															            </tr>
															        </thead>
															        <tbody>
															            <tr>
															                <td class="col-sm-1">Campaign Start</td>
															                <td class="col-sm-5">Calendar Ready. Date from. (YYYY-MM-DD HH:MM)</td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Campaign End</td>
															                <td class="col-sm-5">Calendar Ready. Date to. (YYYY-MM-DD HH:MM) </td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Daily</td>
															                <td class="col-sm-5">If Daily, campaign will be sent daily as scheduled. </td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Weekly</td>
															                <td class="col-sm-5">If Weekly, campaign will be sent weekly as scheduled. </td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Monthly</td>
															                <td class="col-sm-5">If Monthly, campaign will be sent monthly as scheduled. </td>
															            </tr>
															        </tbody>
																</table>

																<table class="table table-bordered table-striped">
																	<thead>
															            <tr>
															                <th class="col-sm-2"><span>Button</span></th> 
															                <th class="col-sm-6"><span>Description</span></th>
															            </tr>
															        </thead>
															        <tbody>
															            <tr>
															                <td class="col-sm-1">Back</td>
															                <td class="col-sm-5">You will go back to the previous step.</td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Create Campaign</td>
															                <td class="col-sm-5">Your campaign will be created.</td>
															            </tr>
															        </tbody>
																</table>
						              					<li> Click Create Campaign.</li> <br>	
						              				</ul>
												<li> Create Campaign </li>	
												<li> A summary of your campaign will be displayed. </li> <br>
													<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/quiz_summary.png"  style="width:60%;"> </center> <br>   	
														<table class="table table-bordered table-striped">
															<thead>
													            <tr>
													                <th class="col-sm-2"><span>Button</span></th> 
													                <th class="col-sm-6"><span>Description</span></th>
													            </tr>
													        </thead>
													        <tbody>
													            <tr>
													                <td class="col-sm-1">Edit</td>
													                <td class="col-sm-5">You will go back to the first step and able to edit your campaign.</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Send Test</td>
													                <td class="col-sm-5">Your campaign will send a test to test numbers.</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Next</td>
													                <td class="col-sm-5">Your campaign will be created.</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Simulate Questionnaire</td>
													                <td class="col-sm-5">To test the campaign.</td>
													            </tr>
													        </tbody>
														</table>
												<li> Click Next. </li> <br>		
											</ul>
									</div>
				                </div>
				            </div>

			<h4 id="Quiz"> <strong> Survey </strong> </h4>
			<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
				                  		<div class="caption">
											<h4> <strong> Create Survey </strong> </h4>
				                  				<ul>
				                  					<li> Fill out or Select Access Code </li>
				                  					<li> Select Expiration Date </li>
				                  					<li> Select Question Type </li>
				                  						<ul>
				                  							<li> Multiple Choice </li>
				                  							<li> Free-form </li>
				                  						</ul>
				                  					<li> Fill out Question Number </li>
				                  					<li> Fill out Question </li>
				                  					<li> Fill out Answer Code </li>
				                  					<li> Fill out Answer Text </li><br>
				                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/survey_1.png" style="width:70%;"> </center> <br>
				                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/freeform.png" style="width:70%;"> </center> <br>
				                  				</ul>
				                  					<table class="table table-bordered table-striped">
													<thead>
											            <tr>
											                <th class="col-sm-2"><span>Parameter</span></th> 
											                <th class="col-sm-6"><span>Description</span></th>
											            </tr>
											        </thead>
											        <tbody> 
											        	<tr>
											                <td class="col-sm-1">Access Code</td>
											                <td class="col-sm-5">Access number of the campaign. </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Expiration Date</td>
											                <td class="col-sm-5">Expiration date of the campaign. </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Question Type</td>
											                <td class="col-sm-5">Multiple Choice or Free-form. </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Question Number</td>
											                <td class="col-sm-5">Number Question. </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Question</td>
											                <td class="col-sm-5">Your Question needed for Quiz.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Answer Code</td>
											                <td class="col-sm-5">Answer Code for the Quiz.  (e.g. Yes or No)</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Answer Text</td>
											                <td class="col-sm-5">Answer text for the Quiz. (e.g. Red, Yellow, Blue)</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Correct (checkbox )</td>
											                <td class="col-sm-5">Select correct answer/s.</td>
											            </tr>
											        </tbody>
												</table>

												<table class="table table-bordered table-striped">
													<thead>
											            <tr>
											                <th class="col-sm-2"><span>Button</span></th> 
											                <th class="col-sm-6"><span>Description</span></th>
											            </tr>
											        </thead>
											        <tbody> 
											            <tr>
											                <td class="col-sm-1">Add Option</td>
											                <td class="col-sm-5">To add answer code and answer text. </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Add Question</td>
											                <td class="col-sm-5">To add another question.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Submit</td>
											                <td class="col-sm-5">To save and proceed to the next step.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Delete button</td>
											                <td class="col-sm-5">To delete question of the quiz. .</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Up button</td>
											                <td class="col-sm-5">To move up question.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Down button</td>
											                <td class="col-sm-5">To move down question.</td>
											            </tr>
											        </tbody>
												</table>
											</div>
										</div>
									</div>
									
									<div class="span4">
				                		<div class="thumbnail">
				                			<div class="caption">			
					                    	<h4> <strong> Step 1 </strong> </h4>
							                    <ul> 
													<li> Fill out Campaign Name </li>
													<li> Select Sender ID </li>
														<p> - Sender IDs are pre-approved by Account Managers. </p>
													<li> Select Primary Keyword </li>
													<li> Select Secondary Keyword </li>
													<li> Fill out Campaign Header </li>
													<li> Fill out Campaign Footer </li>
													<li> Use Template (Optional) </li>
														<ul>
															<li>  New Template </li> <br>
																<ul>
																	<li> Click New Template. </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/quiz_2.png" style="width:70%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Column</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Campaign Name</td>
																		                <td class="col-sm-5"><strong>Required</strong>. Campaign label.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Sender ID</td>
																		                <td class="col-sm-5"><strong>Required</strong>. Brand highlight/SMS from.</td>
																		            </tr>

																		             <tr>
																		                <td class="col-sm-1">Primary Keyword</td>
																		                <td class="col-sm-5"><strong>Required</strong>. Primary keyword for campaign message. </td>
																		            </tr>

																		             <tr>
																		                <td class="col-sm-1">Secondary Keyword</td>
																		                <td class="col-sm-5"><strong>Required</strong>. Secondary keyword for campaign message. </td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Header</td>
																		                <td class="col-sm-5"><strong>Required</strong>. Header for campign message. </td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Footer</td>
																		                <td class="col-sm-5"><strong>Required</strong>. Footer for campaign message. </td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Template</td>
																		                <td class="col-sm-5"><strong>Required</strong>. Pre-formatted campaign message.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Campaign Type</td>
																		                <td class="col-sm-5"><strong>Required</strong>. Based campaign by purpose (e.i Bulk, LSMS and HSMS)</td>
																		            </tr>
																		    	</tbody>
																		    </table>	

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Action</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		           <tr>
																		                <td class="col-sm-1">Save as Draft</td>
																		                <td class="col-sm-5">Your campaign will not be created, just saved it as draft.</td>
																		            </tr>

																		             <tr>
																		                <td class="col-sm-1">Next</td>
																		                <td class="col-sm-5">You will proceed to the next step in creating campaign.</td>
																		            </tr>
																		    	</tbody>
																		    </table>	
																	<li> Fill out message. </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/createtemplate.png" style="width:70%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Parameter</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">You may write your template message.</td>
																		            </tr>
																		    	</tbody>
																		    </table>
																	<li> Click Create Template to save your new created template. Otherwise, the window will close and redirect you to Template table. </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/templatetable.png" style="width:90%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Column</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">ID</td>
																		                <td class="col-sm-5">Template ID</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">Template Message</td>
																		            </tr>
																		    	</tbody>
																		    </table>	

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Action</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Use Template</td>
																		                <td class="col-sm-5">You may use the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Edit Template</td>
																		                <td class="col-sm-5">You may edit the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Delete Template</td>
																		                <td class="col-sm-5">You may delete the selected template.</td>
																		            </tr>
																		    	</tbody>
																		    </table>

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Button</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">New Template</td>
																		                <td class="col-sm-5">You may create new template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Previous</td>
																		                <td class="col-sm-5">Will lead you back to the previous page.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Next</td>
																		                <td class="col-sm-5">Will lead you forward to the next page.</td>
																		            </tr>
																		    	</tbody>
																		    </table>		
																</ul>
															<li> Existing Template </li> <br>
																<ul>	
																	<li> Click Use Template. </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/newtemplate.png" style="width:70%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Column</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">ID</td>
																		                <td class="col-sm-5">Template ID</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">Template Message</td>
																		            </tr>
																		    	</tbody>
																		    </table>	

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Action</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Use Template</td>
																		                <td class="col-sm-5">You may use the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Edit Template</td>
																		                <td class="col-sm-5">You may edit the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Delete Template</td>
																		                <td class="col-sm-5">You may delete the selected template.</td>
																		            </tr>
																		    	</tbody>
																		    </table>	
																	<li> The Template table will appear.  </li> <br>
																		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/templatetable.png" style="width:90%;"> </center> <br>
																			<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Column</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">ID</td>
																		                <td class="col-sm-5">Template ID</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Message</td>
																		                <td class="col-sm-5">Template Message</td>
																		            </tr>
																		    	</tbody>
																		    </table>	

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Action</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Use Template</td>
																		                <td class="col-sm-5">You may use the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Edit Template</td>
																		                <td class="col-sm-5">You may edit the selected template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Delete Template</td>
																		                <td class="col-sm-5">You may delete the selected template.</td>
																		            </tr>
																		    	</tbody>
																		    </table>

																		    <table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Button</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">New Template</td>
																		                <td class="col-sm-5">You may create new template.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Previous</td>
																		                <td class="col-sm-5">Will lead you back to the previous page.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Next</td>
																		                <td class="col-sm-5">Will lead you forward to the next page.</td>
																		            </tr>
																		    	</tbody>
																		    </table>		
																	<li> In the Action column, click Use the Template. </li> <br>
																</ul>
														</ul>
													<li> Select Campaign Type </li> <br>
														<table class="table table-bordered table-striped">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Campaign Type</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">Bulk</td>
																		                <td class="col-sm-5">Campaign recepients are based on the contacts uploaded on the system.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Location-Based / LSMS</td>
																		                <td class="col-sm-5">Campaign recepients are based on specified location.</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Hyper Targeted / HSMS</td>
																		                <td class="col-sm-5">Campaign recepients are based on the profiles of the recepients.</td>
																		            </tr>
																		    	</tbody>
																		    </table>	
	
													<li> Click Next </li> <br> 
														<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/quiz_2.png" style="width:60%;"> </center> <br>
												</ul>	
													<table class="table table-bordered table-striped">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Parameter</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Campaign Name</td>
												                <td class="col-sm-5"><strong>Required</strong>. Campaign label.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Sender ID</td>
												                <td class="col-sm-5"><strong>Required</strong>. Brand highlight/SMS from.</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Primary Keyword</td>
												                <td class="col-sm-5"><strong>Required</strong>. Primary keyword for campaign message. </td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Secondary Keyword</td>
												                <td class="col-sm-5"><strong>Required</strong>. Secondary keyword for campaign message. </td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Header</td>
												                <td class="col-sm-5"><strong>Required</strong>. Header for campign message. </td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Footer</td>
												                <td class="col-sm-5"><strong>Required</strong>. Footer for campaign message. </td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Template</td>
												                <td class="col-sm-5"><strong>Required</strong>. Pre-formatted campaign message.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Campaign Type</td>
												                <td class="col-sm-5"><strong>Required</strong>. Based campaign by purpose (e.i Bulk, LSMS and HSMS)</td>
												            </tr>
												    	</tbody>
												    </table>

												    <table class="table table-bordered table-striped">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Button</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Save as Draft</td>
												                <td class="col-sm-5">you campaign will be saved as draft.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Next</td>
												                <td class="col-sm-5">You will proceed to the next step.</td>
												            </tr>
												    	</tbody>
												    </table>	
			                   	   		</div>
			                   	</div>   		
			                </div>
			            </div>

						    <div class="span4">
				                <div class="thumbnail">
				                	<div class="caption">
				                    	<h4> <strong> Step 2 </strong> </h4>
					                    	<ul> 
						              			<li> Select Phonebook Group </li> <br>
						              				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/quiz_3.png"  style="width:60%;"> </center> <br>
							              				<ul>	
							              					<li> No Group </li> <br>
							              						<ul>
							              							<li> Click Upload button. </li>
							              							<li> A pop up window will appear. Fill out necessary fields.</li>
							              							<li> Click Select Group. Otherwise, check Add to new group. </li>
							              							<li> Write the name of your group in the Select group field.</li>
							              							<li> In the Add option, choose if you Add to all group or New contacts only. </li> 
							              								<ul>
							              									<li> Add to all group - All your uploaded contacts will add to your group. </li>
							              									<li> New contacts only - Unique contacts will be uploaded to your group to avoid duplicate. </li>
							              								</ul>
							              							<li> Check Yes in the Replace zero to prefix and fill out in the input field. </li>
							              							<li> In the File, click the Select file to locate your file. The file type must be .csv</li>
							              							<li> Click Next. </li>	
							              							<li> You will be redirect to the Contact Uploads page.</li>
							              							<li> If the upload status is complete, go back to create campaign and click next.</li>
							              							<li> You  may now select your group in the Phonebook Group.</li> <br>
							              						</ul>
							              					<li> Existing Group </li><br>
							              						<ul>
							              							<li> Select on the phonebook group your group/s. </li>
							              							<li> Click Next.</li>
							              								<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/existinggroup.png"  style="width:60%;"> </center> <br>
							              						</ul>
							              	</ul>

												<table class="table table-bordered table-striped">
													<thead>
											            <tr>
											                <th class="col-sm-2"><span>Parameter</span></th> 
											                <th class="col-sm-6"><span>Description</span></th>
											            </tr>
											        </thead>
											        <tbody>
											            <tr>
											                <td class="col-sm-1">Phonebook Group</td>
											                <td class="col-sm-5"><strong>Required</strong>. Select desired recipient of campaign.</td>
											            </tr>
											        </tbody>
												</table>	

												<table class="table table-bordered table-striped">
													<thead>
											            <tr>
											                <th class="col-sm-2"><span>Button</span></th> 
											                <th class="col-sm-6"><span>Description</span></th>
											            </tr>
											        </thead>
											        <tbody>
											            <tr>
											                <td class="col-sm-1">Upload</td>
											                <td class="col-sm-5"><strong>Optional</strong>. If no available contact group. </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Back</td>
											                <td class="col-sm-5">Going back to the previous page.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Save as Draft</td>
											                <td class="col-sm-5">Your campaign will not be created, just saved it as draft.</td>
											            </tr>

											             <tr>
											                <td class="col-sm-1">Next</td>
											                <td class="col-sm-5">You will proceed to the next step in creating campaign.</td>
											            </tr>
											        </tbody>
												</table>	
			                    	</div>
			                	</div>
			            	</div>
						            
				            <div class="span4">
				                <div class="thumbnail">
				                	<div class="caption">
				                    	<h4> <strong> Step 3 </strong> </h4>
									        <ul> 
						              			<li> Scheduled campaign (Optional) </li> <br>
						              				<ul>
						              					<li> If you click the checkbox, you have to set the scheduled date. </li> 
						              					<li> If you click the checkbox, you have to set the repeated date or schedule. </li> <br>
						              						<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/reg_3.png"  style="width:60%;"> </center> <br> 
						              							<table class="table table-bordered table-striped">
																	<thead>
															            <tr>
															                <th class="col-sm-2"><span>Parameter</span></th> 
															                <th class="col-sm-6"><span>Description</span></th>
															            </tr>
															        </thead>
															        <tbody>
															            <tr>
															                <td class="col-sm-1">Campaign Start</td>
															                <td class="col-sm-5">Calendar Ready. Date from. (YYYY-MM-DD HH:MM)</td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Campaign End</td>
															                <td class="col-sm-5">Calendar Ready. Date to. (YYYY-MM-DD HH:MM) </td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Daily</td>
															                <td class="col-sm-5">If Daily, campaign will be sent daily as scheduled. </td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Weekly</td>
															                <td class="col-sm-5">If Weekly, campaign will be sent weekly as scheduled. </td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Monthly</td>
															                <td class="col-sm-5">If Monthly, campaign will be sent monthly as scheduled. </td>
															            </tr>
															        </tbody>
																</table>

																<table class="table table-bordered table-striped">
																	<thead>
															            <tr>
															                <th class="col-sm-2"><span>Button</span></th> 
															                <th class="col-sm-6"><span>Description</span></th>
															            </tr>
															        </thead>
															        <tbody>
															            <tr>
															                <td class="col-sm-1">Back</td>
															                <td class="col-sm-5">You will go back to the previous step.</td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Create Campaign</td>
															                <td class="col-sm-5">Your campaign will be created.</td>
															            </tr>
															        </tbody>
																</table>
						              					<li> Click Create Campaign.</li> <br>	
						              				</ul>
												<li> Create Campaign </li>	
												<li> A summary of your campaign will be displayed. </li> <br>
													<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/survey_summary.png"  style="width:60%;"> </center> <br>   	
														<table class="table table-bordered table-striped">
															<thead>
													            <tr>
													                <th class="col-sm-2"><span>Button</span></th> 
													                <th class="col-sm-6"><span>Description</span></th>
													            </tr>
													        </thead>
													        <tbody>
													            <tr>
													                <td class="col-sm-1">Edit</td>
													                <td class="col-sm-5">You will go back to the first step and able to edit your campaign.</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Send Test</td>
													                <td class="col-sm-5">Your campaign will send a test to test numbers.</td>
													            </tr>

													             <tr>
													                <td class="col-sm-1">Next</td>
													                <td class="col-sm-5">Your campaign will be created.</td>
													            </tr>
													        </tbody>
														</table>
												<li> Click Next. </li> <br>		
											</ul>
									</div>
				                </div>
				            </div>        	            






				<h2 id="CampTable"> <strong> Campaign Table </strong> </h2>
				<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
				                <div class="thumbnail">
				                	<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/campaign_table.png"  style="width:90%;">  
					                	<div class="caption">
					                    	<p> Show campaigns that are active or not, runs at the moment, locked and needs an action.  </p><br> 
				          	        			
				          	        			<table class="table table-bordered table-striped">
														<thead>
												            <tr>
												                <th class="col-sm-2"><span>Status</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												                <th class="col-sm-6"><span>Actions</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Draft</td>
												                <td class="col-sm-5">Preliminary campaign, user clicked save as draft or did not proceed after step 3. </td>
												            	<td class="col-sm-1">Edit, Copy, View, Delete</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Completed</td>
												                <td class="col-sm-5">Campaign has been sent out to its recepients.</td>
												            	<td class="col-sm-1">Dashboard, Copy, Delete</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Live</td>
												                <td class="col-sm-5">Campaign sending is on going. </td>
												            	<td class="col-sm-1">Dashboard, Copy, Stop</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Locked</td>
												                <td class="col-sm-5">Hold</td>
												            	<td class="col-sm-1">View, Resume</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Queueing</td>
												                <td class="col-sm-5">For bulk sms.Campaigns awaiting process.</td>
												            	<td class="col-sm-1">View</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Ready</td>
												                <td class="col-sm-5">For HSMS and LSMS, filtered sending. </td>
												            	<td class="col-sm-1">View</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">For Approval</td>
												                <td class="col-sm-5">Campaign request. Involves approvers (i.e Admin, Account Owner)</td>
												            	<td class="col-sm-1">Copy, Approve, Reject, View, Delete</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1"> Approved</td>
												                <td class="col-sm-5">Ready to send campaign. </td>
												            	<td class="col-sm-1">View, Go Live, Delete</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Rejected</td>
												                <td class="col-sm-5">User can copy and edit campaign. </td>
												            	<td class="col-sm-1">Copy, View, Delete</td>
												            </tr>
												        </tbody>    
													</table>	

													<table class="table table-bordered table-striped">
														<thead>
												            <tr>
												                <th class="col-sm-2"><span>Action</span></th>
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												        	 <tr>
												                <td class="col-sm-1">Simulate Conversation </td>
												            	<td class="col-sm-5">You test your created conversation.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Edit </td>
												            	<td class="col-sm-5">You may edit your created campaign saved as draft.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Copy</td>
												                <td class="col-sm-5">You may copy your created campaign. </td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">View</td>
												                <td class="col-sm-5">You may view your created campaign saved as draft. </td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Delete</td>
												                <td class="col-sm-5">You may delete your created campaign saved as draft.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Dashboard</td>
												                <td class="col-sm-5">It will display all the information about the campaign. (e.g. Total, Pending, Sent, Delivered, etc.</td>
												            </tr>

												            <tr>
												            	<td class="col-sm-1">Stop</td>
												                <td class="col-sm-5">You may stop the campaign while its ongoing.</td>
												            </tr>

												            <tr>
												            	<td class="col-sm-1">View</td>
												                <td class="col-sm-5"> You may view your awaiting LSMS/HSMS process. </td>
												            </tr>  

												            <tr>
												            	<td class="col-sm-1">Approve</td>
												                <td class="col-sm-5"> You may go live your requested campaign. </td>
												            </tr> 

												            <tr>
												            	<td class="col-sm-1">Reject</td>
												                <td class="col-sm-5"> Your campaign has a problem. (e.g. Message content or Budget over Cost)  </td>
												            </tr> 

												            <tr>
												            	<td class="col-sm-1">Go Live</td>
												                <td class="col-sm-5">Your created campaign is being propcess to be Live.</td>
												            </tr> 

												        </tbody>
												    </table>	
				          	        	</div>
				                </div>
				    </div>

				<h2 id="Dash"> <strong> Campaign Dashboard </strong> </h2>
				<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                	<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/campdash.png"  style="width:90%;">  
			                	<div class="caption">
			                    	 <p> Displays campaign summary and delivery statistics. </p><br> 

			                    		<table class="table table-bordered table-striped">
											<thead>
									            <tr>
									                <th class="col-sm-2"><span>Field</span></th> 
									                <th class="col-sm-6"><span>Description</span></th>
									            </tr>
									        </thead>
									        <tbody>

									        	<tr>
									                <td class="col-sm-1">ID</td>
									                <td class="col-sm-5">Campaign ID</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Campaign Name</td>
									                <td class="col-sm-5">Campaign Name</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Message</td>
									                <td class="col-sm-5">Campaign Message</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Sender ID</td>
									                <td class="col-sm-5">SMS From</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Groups</td>
									                <td class="col-sm-5">Contact group</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Recepients</td>
									                <td class="col-sm-5">Total Contacts</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">SMS Count</td>
									                <td class="col-sm-5">SMS sent</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Created Date</td>
									                <td class="col-sm-5">Date created campaign</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Start Date</td>
									                <td class="col-sm-5">Date campaign started go live.</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Completed In</td>
									                <td class="col-sm-5">Time campaign has been completed.</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Campaign Cost</td>
									                <td class="col-sm-5">Total Campaign Cost</td>
									            </tr>
									            <tr>
									                <td class="col-sm-1">Total</td>
									                <td class="col-sm-5"><strong>Downloadable</strong>. SMS count. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Pending</td>
									                <td class="col-sm-5"><strong>Downloadable</strong>. Campaigns awaiting. </td>
									            </tr>

									             <tr>
									                <td class="col-sm-1">Sent</td>
									                <td class="col-sm-5"><strong>Downloadable</strong>. Directed campaigns to recipients. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Delivered</td>
									                <td class="col-sm-5"><strong>Downloadable</strong>. Transported SMS. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">No Info</td>
									                <td class="col-sm-5"><strong>Downloadable</strong>. No data collected. </td>
									            </tr>

									             <tr>
									                <td class="col-sm-1">Bounced</td>
									                <td class="col-sm-5"><strong>Downloadable</strong>. Error and SMS traffic report. </td>
									            </tr>
									        </tbody>    
										</table>

										<table class="table table-bordered table-striped">
											<thead>
									            <tr>
									                <th class="col-sm-2"><span>Button</span></th> 
									                <th class="col-sm-6"><span>Description</span></th>
									            </tr>
									        </thead>
									        <tbody>
									            <tr>
									                <td class="col-sm-1">View Responses</td>
									                <td class="col-sm-5">View Inbox of selected campaign. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Simulate Conversation</td>
									                <td class="col-sm-5">Your going to test the created conversation. </td>
									            </tr>

									             <tr>
									                <td class="col-sm-1">Previous</td>
									                <td class="col-sm-5">You will go back to the previous page. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Next</td>
									                <td class="col-sm-5">You will forward to the next page.</td>
									            </tr>
									        </tbody>
										</table>
										<li> When you click View Responses </li><br>
										<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/inboundsms.png"  style="width:90%;"> </center><br> 
		                    				<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">ID</td>
										                <td class="col-sm-5">Message ID. </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Mobile</td>
										                <td class="col-sm-5">Participant's mobile number. </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Inbound Message</td>
										                <td class="col-sm-5">Participant's message.</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Price</td>
										                <td class="col-sm-5">Inbound message price.</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Outbound Message</td>
										                <td class="col-sm-5">System's acknowledgement or response.</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Price</td>
										                <td class="col-sm-5">Outbound message price.</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Action</td>
										                <td class="col-sm-5">Save participant's mobile number to phonebook.</td>
										            </tr>
										        </tbody>
											</table>

											<table class="table table-bordered table-striped">
											<thead>
									            <tr>
									                <th class="col-sm-2"><span>Button</span></th> 
									                <th class="col-sm-6"><span>Description</span></th>
									            </tr>
									        </thead>
									        <tbody>
									            <tr>
									                <td class="col-sm-1">Back to dashboard</td>
									                <td class="col-sm-5">You will go back to campaign's dashboard. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Previous</td>
									                <td class="col-sm-5">You will go back to the previous page. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Next</td>
									                <td class="col-sm-5">You will forward to the next page.</td>
									            </tr>
									        </tbody>
										</table>
		                    	</div>
		                </div>
			        </div>

		<h1 id="Inbox"> <strong> Inbox </strong> </h1>
		 <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>        	
			<div class="span4">
                <div class="thumbnail">
                	<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/inbox.png"  style="width:90%;"> <br>
                		 <p> Receive opt-out messages.</p> <br> 
	                	   	<div class="caption">
		                    	<!-- <p> Displays campaign name, filters and delivery status. </p> -->
	                    		<table class="table table-bordered table-striped">
									<thead>
							            <tr>
							                <th class="col-sm-2"><span>Column</span></th> 
							                <th class="col-sm-6"><span>Description</span></th>
							            </tr>
							        </thead>
							        <tbody>
							            <tr>
							                <td class="col-sm-1">ID</td>
							                <td class="col-sm-5">The count/number of opted out contact. </td>
							            </tr>

							            <tr>
							                <td class="col-sm-1">To</td>
							                <td class="col-sm-5">Sender ID where recipient stopped receiving. </td>
							            </tr>

							             <tr>
							                <td class="col-sm-1">From</td>
							                <td class="col-sm-5">Opted out contact. </td>
							            </tr>

							            <tr>
							                <td class="col-sm-1">Message</td>
							                <td class="col-sm-5">Recipients replied keyword depending on SMS keyword to be set on settings.</td>
							            </tr>

							            <tr>
							                <td class="col-sm-1">Date Received</td>
							                <td class="col-sm-5">Shows when the message has been received by the system.</td>
							            </tr>
							        </tbody>
								</table>

								<table class="table table-bordered table-striped">
									<thead>
							            <tr>
							                <th class="col-sm-2"><span>Button</span></th> 
							                <th class="col-sm-6"><span>Description</span></th>
							            </tr>
							        </thead>
							        <tbody>
							            <tr>
							                <td class="col-sm-1">Previous</td>
							                <td class="col-sm-5">You will go back to the previous page.</td>
							            </tr>

							            <tr>
							                <td class="col-sm-1">Next</td>
							                <td class="col-sm-5">You will forward to the next page.</td>
							            </tr>
							        </tbody>
								</table>
	                    	</div>
                </div>
		    </div>

		<h1 id="ViewContacts"> <strong> Contacts </strong> </h1>     
		    <h2 id="ViewContacts"> <strong> View Contacts </strong> </h2>
				<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                	<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/createcon2.png"  style="width:90%;"><br>
	                	   	   	<div class="caption">
			                    	<!-- <p> Displays campaign name, filters and delivery status. </p> -->
			                    		<p> Shows all the contacts saved on the phonebook. </p> <br> 
					              		
					              			<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Mobile Number</td>
										                <td class="col-sm-5"> Shows the mobile number of the saved contact. </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Name</td>
										                <td class="col-sm-5">Shows name of each saved contact. </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Created By</td>
										                <td class="col-sm-5">Shows the email address of the account used in uploading a file. </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> Status</td>
										                <td class="col-sm-5">Shows if the contacts saved are valid or invalid.</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Action</td>
										                <td class="col-sm-5">Edit - You may edit contacts. <br> Delete - You may delete contacts. </td>
										            </tr>
										        </tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Button</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Previous</td>
										                <td class="col-sm-5">You will go back to the previous page. </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Next</td>
										                <td class="col-sm-5">You will proceed to the next page.</td>
										            </tr>
										        </tbody>
											</table>
	                    		</div>
		                </div>
			        </div>

			<h2 id="CreateContacts"> <strong> Add / Create Contacts </strong> </h2>
			<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>        	
				<div class="span4">
	                <div class="thumbnail">
	                	<div class="caption">
	                    	<!-- <p> Displays campaign name, filters and delivery status. </p> -->
                    		<ul>
						        <li> Click Create Contact/Add Contact button. </li><br> <br>
		              				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/createcon1.png"  style="width:30%;"><br> <br>
            						<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/createcon2.png"  style="width:90%;"> </center><br> <br>
			              		<li> Window will pop-up for creating/adding contact. </li><br> <br>	
		              				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/createcon3.png"  style="width:90%;"> </center><br> <br>
		              					<table class="table table-bordered table-striped">
											<thead>
									            <tr>
									                <th class="col-sm-2"><span>Parameter</span></th> 
									                <th class="col-sm-6"><span>Description</span></th>
									            </tr>
									        </thead>
									        <tbody>
									            <tr>
									                <td class="col-sm-1">Mobile Number</td>
									                <td class="col-sm-5"> <strong> Required </strong>. Input a valid mobile number. (Ex. 639170000001) </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Full Name</td>
									                <td class="col-sm-5"><strong> Required </strong>. Contact full name. </td>
									            </tr>

									             <tr>
									                <td class="col-sm-1">Phonebook Groups</td>
									                <td class="col-sm-5"><strong> Optional </strong>. Select on which of the existing groups you want to 	save the new contact. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1"> Country</td>
									                <td class="col-sm-5"><strong> Optional </strong>. Contact country.</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Email</td>
									                <td class="col-sm-5"><strong> Optional </strong>.Input a valid Email Address.(Ex. juandelacruz@gmail.com) </td>
									            </tr>
									        </tbody>
										</table>
			              		<li> Click Save. </li>
								<li> The newly created contact will be saved in the phonebook. </li> <br> 
							</ul>	

		                    		
                	</div>
        </div>
    </div>

				<h2 id="DownloadContacts"> <strong> Download Contacts </strong> </h2>
					<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>        	
						<div class="span4">
			                <div class="thumbnail">
			                	<div class="caption">
				               		<ul>
		                    			<li> Click Download button. </li> <br> 
			                    				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/contactdown.png"  style="width:90%;"> </center> <br> 
			                    					<table class="table table-bordered table-striped" >
														<thead>
												            <tr>
												                <th class="col-sm-2"><span>Column</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Mobile Number</td>
												                <td class="col-sm-5"> Shows the mobile number of the saved contact. </td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Name</td>
												                <td class="col-sm-5">Shows name of each saved contact. </td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Creator</td>
												                <td class="col-sm-5">Shows the email address of the account used in uploading a file. </td>
												            </tr>

												            <tr>
												                <td class="col-sm-1"> Status</td>
												                <td class="col-sm-5">Shows if the contacts saved are valid or invalid.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Action</td>
												                <td class="col-sm-5">Edit and Delete. </td>
												            </tr>
												        </tbody>
													</table>
			                    		<li> Contacts will be downloaded in CSV file format. </li> <br> 
		                    		</ul>
					              		
					              			
		                			</div>
			                </div>
				        </div>
		            
			<h2 id="UploadContacts"> <strong> Upload Contacts </strong> </h2>
			<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>        	
				<div class="span4">
	                <div class="thumbnail">
	                	<div class="caption">
		                    <ul>
                    			<li> Click Upload button. </li> <br>
                    				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/contactup.png"  style="width:90%;"> </center> <br>
                    					<table class="table table-bordered table-striped" >
											<thead>
									            <tr>
									                <th class="col-sm-2"><span>Column</span></th> 
									                <th class="col-sm-6"><span>Description</span></th>
									            </tr>
									        </thead>
									        <tbody>
									            <tr>
									                <td class="col-sm-1">Mobile Number</td>
									                <td class="col-sm-5"> Shows the mobile number of the saved contact. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Name</td>
									                <td class="col-sm-5">Shows name of each saved contact. </td>
									            </tr>

									             <tr>
									                <td class="col-sm-1">Creator</td>
									                <td class="col-sm-5">Shows the email address of the account used in uploading a file. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1"> Status</td>
									                <td class="col-sm-5">Shows if the contacts saved are valid or invalid.</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Action</td>
									                <td class="col-sm-5">Edit and Delete. </td>
									            </tr>
									        </tbody>
										</table>
								<li> Redirects to upload page. </li> <br>
									<ul>
										<li> A pop up window will appear. Fill out necessary fields. </li>
										<li> Click Select Group. Otherwise, check Add to new group. </li>
										<li> Write the name of your group in the Select group field.</li>
										<li> In the Add option, choose if you Add to all group or New contacts only.</li>
											<ul>
												<li> Add to all group - All your uploaded contacts will add to your group.</li>
												<li> New contacts only - Unique contacts will be uploaded to your group to avoid duplicate.</li>
											</ul>
										<li> Check Yes in the Replace zero prefix and fill out in the input field.</li>
										<li> In the File, click the Select file to locate your file. The file type must be .csv</li>
									</ul>
	                    			<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/up1.png"  style="width:90%;"> </center> <br>
	                    				<table class="table table-bordered table-striped">
											<thead>
									            <tr>
									                <th class="col-sm-2"><span>Parameter</span></th> 
									                <th class="col-sm-6"><span>Description</span></th>
									            </tr>
									        </thead>
									        <tbody>
									            <tr>
									                <td class="col-sm-1">Select Group</td>
									                <td class="col-sm-5"> <strong> Optional </strong>. Check if you want to add contact to new group. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Add Option</td>
									                <td class="col-sm-5">You can select if new contacts only or add contact to all groups. </td>
									            </tr>

									             <tr>
									                <td class="col-sm-1">Replace zero prefix</td>
									                <td class="col-sm-5">Check if you want to replace 0 with the country code.</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1"> Select File</td>
									                <td class="col-sm-5">Pop-up window to select the file you want to upload. CSV file format only.</td>
									            </tr>
									        </tbody>
										</table>
                    			<li> Click Next.</li> 
                    			<li> The Upload History table will appear. </li>	
                    		</ul>

		        <h3> <strong> Contact Errors </strong> </h3>
					<table class="table table-bordered table-striped">
						<thead>
				            <tr>
				                <th class="col-sm-2"><span>Error</span></th> 
				                <th class="col-sm-6"><span>Description</span></th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td class="col-sm-1">Missing Mobile Number Field</td>
				                <td class="col-sm-5"> Contact Uploads. Error when uploading a file with an invalid file header. (Ex. Mobile number, mobile_no., mobile no., etc.) </td>
				            </tr>

				            <tr>
				                <td class="col-sm-1">Validation Error</td>
				                <td class="col-sm-5">Error message for adding existing mobile number in the contact group.</td>
			            	</tr>

			            	<tr>
				                <td class="col-sm-1">File Type Not Allowed</td>
				                <td class="col-sm-5">Error message for uploading an invalid file format. (Ex. .xlsx, .doc, etc.)</td>
			            	</tr>	

			            	<tr>
				                <td class="col-sm-1">Error</td>
				                <td class="col-sm-5">Add Profile Group. Error message when there is no available number to be filtered in creating a profile group.</td>
			            	</tr>					            
				        </tbody>
					</table>
						                            		
			            </div>
                </div>
	        </div>

		        

			<h2 id="ViewUpload"> <strong> View Upload Contacts </strong> </h2>
		    <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>        	
				<div class="span4">
	                <div class="thumbnail">
	                	<div class="caption">
		                    <h4> <strong> Upload History Table</strong> </h4>
	                    		<p> After you upload contacts, the Upload table will display informations on the status of your upload. It also displays history of other uploads. </p> <br>
	                    			<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/viewup.png"  style="width:90%;">	</center> <br>		              		
				              			<table class="table table-bordered table-striped">
											<thead>
									            <tr>
									                <th class="col-sm-2"><span>Column</span></th> 
									                <th class="col-sm-6"><span>Description</span></th>
									            </tr>
									        </thead>
									        <tbody>
									            <tr>
									                <td class="col-sm-1">Name</td>
									                <td class="col-sm-5"> Displays the name of the uploaded file. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Status</td>
									                <td class="col-sm-5">Displays if the file you are uploading is already completed or invalid. </td>
									            </tr>

									             <tr>
									                <td class="col-sm-1">Progress</td>
									                <td class="col-sm-5">Shows the progress of the file you are uploading. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1"> Error Code</td>
									                <td class="col-sm-5">Displays error code corresponding to upload error type.</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1"> Date Created</td>
									                <td class="col-sm-5">Shows time and date you started uploading file.</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1"> Date Completed</td>
									                <td class="col-sm-5">Shows time and date uploaded modified.</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Created by</td>
									                <td class="col-sm-5">Shows the email address of the account used in uploading a file. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Action</td>
									                <td class="col-sm-5"> Re-run or Delete </td>
									            </tr>
									        </tbody>
										</table>

										<table class="table table-bordered table-striped">
											<thead>
									            <tr>
									                <th class="col-sm-2"><span>Button</span></th> 
									                <th class="col-sm-6"><span>Description</span></th>
									            </tr>
									        </thead>
									        <tbody>
									            <tr>
									                <td class="col-sm-1">Previous</td>
									                <td class="col-sm-5">You will go back to the previous page.</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Next</td>
									                <td class="col-sm-5">You will proceed to the next page.</td>
								            	</tr>
									        </tbody>
										</table>
	            			</div>
	                </div>
		        </div>

			<h2 id="FullScreen"> <strong> Full Screen </strong> </h2>
			<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>        	
				<div class="span4">
	                <div class="thumbnail">
	                	<div class="caption">
		                    <ul>
                				<li> Click Profile Group button. </li> <br>
                    				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/campfull.png"  style="width:90%;"> </center> <br>
                    			<li> Window will now be in full screen. </li> <br>
                    				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/fullscreen.png"  style="width:100%;"> </center> <br>
                    		</ul>
		              		
		              			<table class="table table-bordered table-striped">
									<thead>
							            <tr>
							                <th class="col-sm-2"><span>Column</span></th> 
							                <th class="col-sm-6"><span>Description</span></th>
							            </tr>
							        </thead>
							        <tbody>
							            <tr>
							                <td class="col-sm-1">Mobile Number</td>
							                <td class="col-sm-5"> Contact mobile number. </td>
							            </tr>

							            <tr>
							                <td class="col-sm-1">Name</td>
							                <td class="col-sm-5">Contact Name.</td>
						            	</tr>	

						            	 <tr>
							                <td class="col-sm-1">Created by</td>
							                <td class="col-sm-5">The one who created the contacts.</td>
						            	</tr>

						            	 <tr>
							                <td class="col-sm-1">Status</td>
							                <td class="col-sm-5">Contact status.</td>
						            	</tr>

						            	 <tr>
							                <td class="col-sm-1">Action</td>
							                <td class="col-sm-5">Edit - You may edit your created contact. <br> Delete - You may delete your created contact.</td>
						            	</tr>			            
							        </tbody>
								</table>
                    	</div>
	                </div>
		        </div>             

		    <h2 id="Group"> <strong> Groups </strong> </h2>
		    <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br> 
		    	<div class="span4">
	                <div class="thumbnail">
	                	<div class="caption">
					    	<ul>
	                    		<li> Click Groups button. </li><br>
                    				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/campgroups.png"  style="width:90%;"> </center><br>
                    			<li> Data table will now display on your screen. </li><br>
                    				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/campgrouptable.png"  style="width:100%;"> </center><br>
	                    	</ul>  

	                    				<table class="table table-bordered table-striped">
											<thead>
									            <tr>
									                <th class="col-sm-2"><span>Column</span></th> 
									                <th class="col-sm-6"><span>Description</span></th>
									            </tr>
									        </thead>
									        <tbody>
									            <tr>
									                <td class="col-sm-1">Name</td>
									                <td class="col-sm-5">Name of group. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Count</td>
									                <td class="col-sm-5">Total of contacts within the group.</td>
								            	</tr>	

								            	 <tr>
									                <td class="col-sm-1">Date</td>
									                <td class="col-sm-5">Date when you created the group.</td>
								            	</tr>	

								            	 <tr>
									                <td class="col-sm-1">Test</td>
									                <td class="col-sm-5">Used in sending test.</td>
								            	</tr>				            
									        </tbody>
										</table>

										<table class="table table-bordered table-striped">
											<thead>
									            <tr>
									                <th class="col-sm-2"><span>Button</span></th> 
									                <th class="col-sm-6"><span>Description</span></th>
									            </tr>
									        </thead>
									        <tbody>
									            <tr>
									                <td class="col-sm-1">Previous</td>
									                <td class="col-sm-5">You will go back to the previous page.</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Next</td>
									                <td class="col-sm-5">You will proceed to the next page.</td>
								            	</tr>
									        </tbody>
										</table> 
	                    </div>
	                </div>
	            </div>
			                    		
			    <h3 id="AddGroup"> <strong> Add Group </strong> </h3>
			    <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                	<div class="caption">
			                <ul>
                    			<li> Click Add Group button. </li><br>
                    				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/campaddgroup.png"  style="width:90%;"> </center><br>
                    			<li> Window will pop-up for creating new contact group. </li><br>
                    				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/addgroup.png"  style="width:90%;"> </center><br>
                    					<table class="table table-bordered table-striped">
											<thead>
									            <tr>
									                <th class="col-sm-2"><span>Parameter</span></th> 
									                <th class="col-sm-6"><span>Description</span></th>
									            </tr>
									        </thead>
									        <tbody>
									            <tr>
									                <td class="col-sm-1">Group Name</td>
									                <td class="col-sm-5"> Input group name. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Test</td>
									                <td class="col-sm-5">Select if you want to create it as a test group.</td>
								            	</tr>				            
									        </tbody>
										</table>
	                    		<li> Click Save. Group will be added. </li><br>
	                    		</ul>
			              	</div>
		                </div>
			        </div>

			    <h3 id="ProfileGroup"> <strong> Profile Group </strong> </h3>
			    <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                	<div class="caption">
			                   	<ul>
	                    			<li> Click Profile Group button. </li> <br>
	                    				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/progroup1.png"  style="width:90%;"> </center> <br>
	                    			<li> Window will pop-up for creating new profile group. </li> <br>
	                    				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/progroup.png"  style="width:90%;"> </center> <br>
	                    					<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Parameter</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Group Name</td>
										                <td class="col-sm-5"> Input group name. </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Operators</td>
										                <td class="col-sm-5">Select the operators name of numbers to be filtered. (Ex. Globe, Philippine Default, Smart and Sun)</td>
									            	</tr>				            
										        </tbody>
											</table>
	                    			<li> Click Send. New Profile Group will be added. </li> <br>
	                    		</ul>
		              	 	</div>
	                	</div>
		        	</div> 

		        <h2 id="Purge"> <strong> Purge </strong> </h2>
			    <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                	<div class="caption">
			                    <h4> <strong> Purge </strong> </h4>
			                    	<p> All contacts in the phonebook will be deleted. It cannot be undone. </p> <br>
			                    		<ul>
			                    			<li> Click Purge button. </li> <br>
			                    				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/purge1.png"  style="width:90%;"> </center> <br>
			                    		    <li> Window will pop-up confirming the action. </li> <br>
			                    				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/purge.png"  style="width:90%;"> </center> <br>
			                    			<li> If YES, all the contacts will be deleted. Otherwise, confirm dialog box will be removed. </li> <br>
				                    	</ul>
						              		
						    </div>
		                </div>
			        </div>

		    <h1 id="Traffic"> <strong> Reports </strong> </h1>     
				<h2 id="Traffic"> <strong> Traffic Report </strong> </h2> 
				<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>       	
					<div class="span4">
		                <div class="thumbnail">
		                	<div class="caption">
		                		<ul>
		                    		<li> Set date range. </li> <br>
	                    				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/traffic.png"  style="width:90%;"> </center><br>
			                    			<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Parameter</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Date From</td>
										                <td class="col-sm-5"> Calendar Ready. Start of date range. (YYYY-MM-DD HH:MM) </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Date To</td>
										                <td class="col-sm-5">Calendar Ready. End of date range. (YYYY-MM-DD HH:MM) </td>
								            		</tr>
					            	            </tbody>
											</table>
	                    			<li> Shows summary (i.e total bulk sms campaigns, spent, transactions and api transactions) bulk sms status and operator breakdown. </li><br>
	                    			<li> Displays pie chart to show relative count of data. </li><br>
	                    				<center><img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/camptraffic.png"  style="width:90%;"> </center><br>
	                    					<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Field</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">From Date</td>
										                <td class="col-sm-5">Date started</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">To Date</td>
										                <td class="col-sm-5">Date ended</td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Account</td>
										                <td class="col-sm-5">Account name </td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Total Bulk SMS Campaign</td>
										                <td class="col-sm-5">Count of available bulk SMS campaign created and displayed in campaign dashboard.</td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Total Bulk SMS Spent</td>
										                <td class="col-sm-5">Total price based on all Bulk SMS campaign.</td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Total Bulk SMS Transactions</td>
										                <td class="col-sm-5">Displays total count of all the bulk SMS campaigns since the account created.</td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Total API Transactions</td>
										                <td class="col-sm-5">Number of all transactions for an individual subscription.</td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Status</td>
										                <td class="col-sm-5">Queued, Delivered, Bounced, No Delivery Info</td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Count</td>
										                <td class="col-sm-5">Displays count details based on the status.</td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Operator</td>
										                <td class="col-sm-5">Philippine Default, Smart, Globe & Sun</td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Count</td>
										                <td class="col-sm-5">Number of mobile transactions in bulk SMS campaign per operator.</td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Price</td>
										                <td class="col-sm-5">Cost of each transaction per operator.</td>
								            		</tr>
					            	            </tbody>
											</table>
		                    	</ul>
					                   
						    </div>
			            </div>
			        </div>

			    <h2 id="Transaction"> <strong> Transaction Search </strong> </h2>
			    <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                	<div class="caption">
		                		<ul>
	                    			<li> Enter valid mobile number. </li> 
	                    			<li> Click Submit. </li><br>
	                    				<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/transaction.png"  style="width:90%;"> <br> <br>
	                    					<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Parameter</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Mobile Number</td>
										                <td class="col-sm-5"> Valid mobile number. </td>
										            </tr>
					            	            </tbody>
											</table>
	                    			<li> Shows data table that displays summary.(e.g bulk SMS search, MO search, API search) </li> <br>
	                    				<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/tr1.png"  style="width:90%;"> <br> <br>
	                    					<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">ID</td>
										                <td class="col-sm-5"> Campaign ID </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Campaign</td>
										                <td class="col-sm-5">Campaign Name</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Triggered</td>
										                <td class="col-sm-5"> Date when campaign started to go live. </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Sent</td>
										                <td class="col-sm-5"> Date Sent</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Mobile</td>
										                <td class="col-sm-5"> Valid mobile number. </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Operator</td>
										                <td class="col-sm-5"> Type of operator. (e.g. Smart / Globe) </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Route</td>
										                <td class="col-sm-5"> Where the messages being sent. </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Status</td>
										                <td class="col-sm-5"> Standing (e.g., Sent, Queued, Bounced)</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">DR</td>
										                <td class="col-sm-5">Shows if delivered</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Price</td>
										                <td class="col-sm-5"> Cost of sent SMS </td>
										            </tr>
					            	            </tbody>
											</table>
	                    				<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/tr2.png"  style="width:90%;"> <br> <br>
	                    					<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">ID</td>
										                <td class="col-sm-5"> Campaign ID </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">From</td>
										                <td class="col-sm-5">Sender ID</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Mobile</td>
										                <td class="col-sm-5">Mobile number searched</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Message</td>
										                <td class="col-sm-5"> Message outbound received</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Date Created</td>
										                <td class="col-sm-5"> Date when message created. </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Price</td>
										                <td class="col-sm-5"> Cost of sent SMS</td>
										            </tr>
						         	            </tbody>
											</table>
	                    				<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/tr3.png"  style="width:90%;"> <br> <br>
	                    					<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">ID</td>
										                <td class="col-sm-5">The count/number of API transaction.</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">From</td>
										                <td class="col-sm-5">Sender ID</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Mobile</td>
										                <td class="col-sm-5">Mobile number searched</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Message</td>
										                <td class="col-sm-5"> Message API received</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Date Sent</td>
										                <td class="col-sm-5">When message API received </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Status</td>
										                <td class="col-sm-5"> Standing (e.g., Sent, Queued, Bounced)</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Price </td>
										                <td class="col-sm-5"> Cost of sent SMS</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">DR</td>
										                <td class="col-sm-5">Shows if delivered</td>
										            </tr>
						         	            </tbody>
											</table>
		                    	</ul>
					        </div>
			            </div>
			        </div>                
                    
                <h2 id="Billing"> <strong> Billing </strong> </h2>
                <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                   	<div class="caption">
		                		<ul>
	                    			<li> Set date range. </li>
	                    			<li> Click Submit. </li> <br>	
	                    				<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/billing.png"  style="width:90%;"> <br><br>
	                    					<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Parameter</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Date From</td>
										                <td class="col-sm-5"> Calendar Ready. Start of date range. (YYYY-MM-DD HH:MM)</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Date To</td>
										                <td class="col-sm-5">Calendar Ready. End of date range. (YYYY-MM-DD HH:MM)</td>
								            		</tr>

								            	</tbody>
											</table>
	                    			<li> Shows data table that displays summary.(i.e date, description, amount and type) </li> <br>
	                    				<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/campbilling.png"  style="width:90%;"> <br><br>
	                    					<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Date</td>
										                <td class="col-sm-5"> Date created. </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Description</td>
										                <td class="col-sm-5">Transaction description</td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Amount</td>
										                <td class="col-sm-5">Transaction cost</td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Type</td>
										                <td class="col-sm-5">Type of billing. (e.g. Debit, Credit)</td>
								            		</tr>
								            	</tbody>
											</table>
	                    			<li> You may: </li>
	                    				<ul>
			                    			<li> Change date range </li> 
			                    			<li> Download report </li> <br>
	                    						<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/campbillingdown.png"  style="width:90%;"> <br> <br>
	                    				</ul>
		                    	</ul>
									 <table class="table table-bordered table-striped">
										<thead>
								            <tr>
								                <th class="col-sm-2"><span>Button</span></th> 
								                <th class="col-sm-6"><span>Description</span></th>
								            </tr>
								        </thead>
								        <tbody>
								            <tr>
								                <td class="col-sm-1">Change Date</td>
								                <td class="col-sm-5">Another range of date. </td>
								            </tr>

								            <tr>
								                <td class="col-sm-1">Download</td>
								                <td class="col-sm-5">User can download report. (File format: .csv)</td>
						            		</tr>
			            		        </tbody>
									</table>
						    </div>
			            </div>
			        </div>

			<h1 id="Users"> <strong> Account </strong> </h1>  
			    <h2 id="Users"> <strong> Users </strong> </h2>
			    <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                	<div class="caption">
			                	<h4> <strong> User Table </strong> </h4>
			                		<ul>
		                    			<li> Displays details, informations of user </li>
		                    			<li> Enables account owner to edit informations, set user privileges (e.g create campaign, download reports, activate features) and delete. </li> <br>
				                			<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/users.png"  style="width:90%;"></center> <br>
						            </ul>
					                    <table class="table table-bordered table-striped">
											<thead>
									            <tr>
									                <th class="col-sm-2"><span>Column</span></th> 
									                <th class="col-sm-6"><span>Description</span></th>
									            </tr>
									        </thead>
									        <tbody>
									            <tr>
									                <td class="col-sm-1">Checkbox</td>
									                <td class="col-sm-5"> Enables user to check all or select user to delete. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">ID</td>
									                <td class="col-sm-5">The count/number of user order.</td>
							            		</tr>

							            		<tr>
									                <td class="col-sm-1">First Name</td>
									                <td class="col-sm-5">Given name of the new user.</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Last Name</td>
									                <td class="col-sm-5">Family name of the new user.</td>
							            		</tr>

							            		<tr>
									                <td class="col-sm-1">Email</td>
									                <td class="col-sm-5">Email address for campaign approval, rejection and details created by user.</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Status</td>
									                <td class="col-sm-5">To be set by account owner and admin, also shows if verified account.</td>
							            		</tr>

							            		<tr>
									                <td class="col-sm-1">Role</td>
									                <td class="col-sm-5">Position. Each roles have its diffirent privileges.</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Action</td>
									                <td class="col-sm-5">Enables admin and account owner to set privileges and organize account users.</td>
							            		</tr>
				            		        </tbody>
										</table>

										<table class="table table-bordered table-striped">
											<thead>
									            <tr>
									                <th class="col-sm-2"><span>Action</span></th> 
									                <th class="col-sm-6"><span>Description</span></th>
									            </tr>
									        </thead>
									        <tbody>
									            <tr>
									                <td class="col-sm-1">Edit</td>
									                <td class="col-sm-5"> Enables user to edit user account. </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Set Privileges</td>
									                <td class="col-sm-5">Enables user to set privileges in each user.</td>
							            		</tr>

							            		<tr>
									                <td class="col-sm-1">Set Actions</td>
									                <td class="col-sm-5">Enables user to set actions in each user.</td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Delete</td>
									                <td class="col-sm-5">Enables user to delete user.</td>
							            		</tr>
				            		        </tbody>
										</table> <br>
								</div>
						</div>
					</div>				

					<h3 id="CreateAccountUser"> <strong> Create Account User </strong> </h3> 
					<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>
						<div class="span4">
			                <div class="thumbnail">
		                		<div class="caption">
									<ul>
			                    		<li> Click Create. </li> <br>
			                    			<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/users.png"  style="width:100%;"> <br><br>
			                    		<li> A pop up window to fill out all required informations. </li> <br>
		                    				<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/createacctuser.png"  style="width:80%;"> <br><br>
		                    					<table class="table table-bordered table-striped">
													<thead>
											            <tr>
											                <th class="col-sm-2"><span>Parameter</span></th> 
											                <th class="col-sm-6"><span>Description</span></th>
											            </tr>
											        </thead>
											        <tbody>
											            <tr>
											                <td class="col-sm-1">First Name</td>
											                <td class="col-sm-5"> <strong> Required </strong>. New user's given name. </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Last Name</td>
											                <td class="col-sm-5"><strong> Required </strong>. New user's family name.</td>
									            		</tr>

									            		<tr>
											                <td class="col-sm-1">Email</td>
											                <td class="col-sm-5"><strong> Required </strong>. Should be valid to receive updates about user's created campaign.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Mobile</td>
											                <td class="col-sm-5"><strong> Required </strong>. System also updates campaign status through SMS.</td>
									            		</tr>

									            		<tr>
											                <td class="col-sm-1">Password</td>
											                <td class="col-sm-5"><strong> Required </strong>. Must be at least 6 characters.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">User Groups</td>
											                <td class="col-sm-5"> <strong> Set </strong>. Particular group of user it belongs.</td>
									            		</tr>

									            		<tr>
											                <td class="col-sm-1">Role</td>
											                <td class="col-sm-5"> <strong> Choose </strong>. Position. Privileges depends on the function selected (i.e Account User and Account Owner)</td>
											            </tr>
							         		        </tbody>
												</table>
	                    				<li> Click Send and the user will be added. <br> <br>
			                    	</ul>
				                </div>
							</div>
						</div>						

					<h3 id="BulkUserUpload"> <strong> Bulk User Upload </strong> </h3> 
					<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>
						<div class="span4">
			                <div class="thumbnail">
		                		<div class="caption">
									<ul>
										<li> Click Upload Bulk Users. </li> <br>
				                    		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/campbulkuser.png"  style="width:90%;"> </center> <br>
			                    		<li> Choose/set User Group. </li> 
			                    		<li> Click Browse, to locate your file. </li> <br>
			                    			<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/bulkuserup.png"  style="width:90%;"> </center> <br>
				                    			<table class="table table-bordered table-striped">
													<thead>
											            <tr>
											                <th class="col-sm-2"><span>Parameter</span></th> 
											                <th class="col-sm-6"><span>Description</span></th>
											            </tr>
											        </thead>
											        <tbody>
											            <tr>
											                <td class="col-sm-1">User Group</td>
											                <td class="col-sm-5"> Add from existing or new user group. </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">File</td>
											                <td class="col-sm-5">Browse from computer or folder destination. (File format: .csv)</td>
									            		</tr>
									            	  </tbody>
												</table>
										<li> Click Next. </li> <br>	
									</ul>	
						    	</div>
		           		 	</div>
						</div>                       

			    <h2 id="Technical"> <strong> Technical Settings </strong> </h2> 
			    <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>       	
					<div class="span4">
		                <div class="thumbnail">
		                	<div class="caption">
			                	<ul>
	                    			<li> Fill out all required input fields.
	                    				<ul>
	                    					<li> Set and Add more IP Whitelisted. </li>
			                    			<li> Specify API Token </li> <br>
			                    				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/technical.png"  style="width:90%;"> </center> <br>
			                    		</ul>
			                    			<table class="table table-bordered table-striped">
													<thead>
											            <tr>
											                <th class="col-sm-2"><span>Parameter</span></th> 
											                <th class="col-sm-6"><span>Description</span></th>
											            </tr>
											        </thead>
											        <tbody>
											            <tr>
											                <td class="col-sm-1">Account ID</td>
											                <td class="col-sm-5"> The count/number of account logged in. </td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">IP Whitelisted</td>
											                <td class="col-sm-5"> <strong> Optional </strong>. Input valid IP. Unique IP Whitelists were saved only.</td>
									            		</tr>

									            		<tr>
											                <td class="col-sm-1">API Token</td>
											                <td class="col-sm-5"><strong> Optional </strong>. Input valid API. </td>
											            </tr>
											        </tbody>
											</table>	
	                    			<li> If you clcik Reset, the input fields will be cleared / you may now reset you technical settings.</li>
	                    			<li> If you click Submit, your technical settings will be changed. <br><br>
	                    		</ul>
						    </div>
			            </div>
			        </div>

			    <h2 id="Advantage"> <strong> Advantage Notifications </strong> </h2> 
			    <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_campaign"); ?>" >Back to Top</a> <br> <br>
			    	<div class="span4">
				        <div class="thumbnail">
				        	<div class="caption">

				        		<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Notification</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Set Basic Info Successful</td>
										                <td class="col-sm-5">Filled out informations validation successful. (i.e Campaign Name, Sender ID, Message, Campaign Type)</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">The Phonebook Group Field is Required</td>
										                <td class="col-sm-5">For Bulk. User must select from existing phonebook group.</td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Set Filters Successful</td>
										                <td class="col-sm-5">Specified or selected filters successful. (i.e Phonebook Group, Select Locations and Parameter ID (LSMS), Age (HSMS)</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Set Targets Successful</td>
										                <td class="col-sm-5">For Bulk, LSMS and HSMS. Targets such as desired recipient count,  budget (LSMS and HSMS) and Scheduled Campaign successful validation.</td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Go Live Request OK</td>
										                <td class="col-sm-5">Go Live Action. User desired to go live the approved campaign.</td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Result</td>
										                <td class="col-sm-5">For Send Test. Error text shows campaign test result. (e.g No test group recipient).</td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Campaign has been approved</td>
										                <td class="col-sm-5">Campaign Action. Admin or account owner desired to approve campaign.</td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Campaign has been rejected</td>
										                <td class="col-sm-5">Campaign Action. Admin or account owner desired to reject campaign.</td>
								            		</tr>

								            		<tr>
										                <td class="col-sm-1">Campaign Deleted</td>
										                <td class="col-sm-5">Campaign Action. Admin, account owner and account user desired to delete existing campaign.</td>
								            		</tr>
					            		        </tbody>
											</table>
					        </div>
				        </div>
				    </div>    
			</div>  
		</div>
	</div>
</body>
</html>