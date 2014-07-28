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
		    						<a data-toggle="collapse" data-parent="#accordion" href="#collapseDash"> <b> ADMIN DAHSBOARD </b> </a>
		      					</div>
									<div id="collapseDash" class="panel-collapse collapse">
		      							<div class="panel-body">
		    							<ul>
											<li> <a href="<?php echo site_url("sample/page_admin"); ?>#TodaysCampaign">Today's Campaign</a></li> 
											<li> <a href="<?php echo site_url("sample/page_admin"); ?>#ForApproval">For Approval</a></li> 
											<li> <a href="<?php echo site_url("sample/page_admin"); ?>#TodaysCampaignStatistics">Today's Campaign Statistics</a></li> 
										</ul>
			      					</div>
								</div>
						</div>			

							<div class="panel panel-default">
		    					<div class="panel-heading">
		    						<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> <b> ACCOUNT </b> </a>
		      					</div>
									<div id="collapseOne" class="panel-collapse collapse">
		      							<div class="panel-body">
		        							<ul>
		        							 	<li><a href="<?php echo site_url("sample/page_admin"); ?>#ViewAccount">View Account</a></li>
								        		<li><a href="<?php echo site_url("sample/page_admin"); ?>#CreateAccount">Create Account</a></li>
												<li><a href="<?php echo site_url("sample/page_admin"); ?>#UploadBulkAccount">Upload Bulk Accounts</a> </li>
												<li><a href="<?php echo site_url("sample/page_admin"); ?>#AccountStatus">Account Status</a></li>
												<li><a href="<?php echo site_url("sample/page_admin"); ?>#AccountMgt">Account Management</a> </li>
													<ul>
														<li><a href="<?php echo site_url("sample/page_admin"); ?>#AccountDetails">Account Details </a></li>
														<li><a href="<?php echo site_url("sample/page_admin"); ?>#AccountSettings">Account Settings </a></li>
														<li><a href="<?php echo site_url("sample/page_admin"); ?>#Billing">Billing</a></li>
														<li><a href="<?php echo site_url("sample/page_admin"); ?>#Reports">Reports</a></li>
															<ul>
																<li> <a href="<?php echo site_url("sample/page_admin"); ?>#Traffic">Traffic Reports</a></li> 
																<li> <a href="<?php echo site_url("sample/page_admin"); ?>#BillingRep">Billing Reports</a></li> 
															</ul>
														<li><a href="<?php echo site_url("sample/page_admin"); ?>#AcctUsersMgt">Account Users Management </a></li>
														<li><a href="<?php echo site_url("sample/page_admin"); ?>#SMSKeywords">SMS Keywords</a></li>
														<li><a href="<?php echo site_url("sample/page_admin"); ?>#Textback">Textback Numbers</a></li>
 														<li><a href="<?php echo site_url("sample/page_admin"); ?>#SenderID">Sender ID</a></li>
 														<li><a href="<?php echo site_url("sample/page_admin"); ?>#TechnicalSettings">Technical Settings</a></li>
 														<li><a href="<?php echo site_url("sample/page_admin"); ?>#Pricing">Pricing</a></li>
 															<ul>
																<li> <a href="<?php echo site_url("sample/page_admin"); ?>#TransacPricing">Custom Transaction Pricing</a></li>
																<li> <a href="<?php echo site_url("sample/page_admin"); ?>#OpePricing">Custom Operator Pricing</a></li>
															</ul>
 														<li><a href="<?php echo site_url("sample/page_admin"); ?>#Transaction">Transaction Search</a></li>
 														<li><a href="<?php echo site_url("sample/page_admin"); ?>#AcctFeatures">Active Features</a></li>
 														<li><a href="<?php echo site_url("sample/page_admin"); ?>#PricingPlan">Pricing Plan</a></li>
													</ul>
											</ul>
										</div>
									</div>
							</div>	

							<div class="panel panel-default">
		    					<div class="panel-heading">
		    						<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> <b> REPORTS </b> </a>
		      					</div>
									<div id="collapseTwo" class="panel-collapse collapse">
		      							<div class="panel-body">
		        							<ul> 
								        		<li><a href="<?php echo site_url("sample/page_admin"); ?>#TransacSearch">Transaction Search</a></li>
											</ul>
										</div>
									</div>
							</div>	

							<div class="panel panel-default">
		    					<div class="panel-heading">
		    						<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> <b> ADMIN SETTINGS </b> </a>
		      					</div>
									<div id="collapseThree" class="panel-collapse collapse">
		      							<div class="panel-body">
		        							<ul> 
								        		<li><a href="<?php echo site_url("sample/page_admin"); ?>#PlatformSettings">Platform Settings
												</a></li>
												<li><a href="<?php echo site_url("sample/page_admin"); ?>#AdminUsers">Admin Users
												</a></li>
													<ul>
														<li><a href="<?php echo site_url("sample/page_admin"); ?>#AdminErrors">Admin Errors </a></li>
													</ul>
											</ul>
										</div>
									</div>
							</div>	
		 			</div>
				</div>
			</div>	

				<!-- DETAILS -->

				<div class="col-sm-9">
					<h1 id="AdminDash"> <strong> Admin Dashboard </strong> </h1>	

							<h3 id="TodaysCampaign"> <strong> Today's Campaign </strong> </h3>
							<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	
								<div class= "col-sm-112">
									<div class="row-fluid">
						            	<div class="thumbnails">
						            		<div class="span4">
							               		<div class="thumbnail">
							                  		<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/admindash1.png" style="width: 80%">
								                  		<div class="caption">
									                    	<table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Column</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">ID</td>
														                <td class="col-sm-5">ID number of created campaigns.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Account</td>
														                <td class="col-sm-5">Name of account where the campaign was created.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Name</td>
														                <td class="col-sm-5">Campaign name</td>
														            </tr>
	              										        </tbody>
														    </table>

														    <table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Campaign Status</span></th> 
														                <th class="col-sm-6"><span>Actions</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Live</td>
														                <td class="col-sm-5">Campaign Stats, Lock and Unlock</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Approved</td>
														                <td class="col-sm-5">View</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Completed</td>
														                <td class="col-sm-5">View Dashboard</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Draft</td>
														                <td class="col-sm-5">View</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Locked</td>
														                <td class="col-sm-5">View and Resume</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Queuing</td>
														                <td class="col-sm-5">View</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Ready</td>
														                <td class="col-sm-5">View</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">For Approval</td>
														                <td class="col-sm-5">View, Approve and Reject</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Pending</td>
														                <td class="col-sm-5">View</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Rejected</td>
														                <td class="col-sm-5">View</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Stopped</td>
														                <td class="col-sm-5">Campaign Stats and Mark as Force-completed</td>
														            </tr>
	              										        </tbody>
														    </table>	

														    <table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Action</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Stats</td>
														                <td class="col-sm-5">Will show your Campaign Status</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Lock</td>
														                <td class="col-sm-5">Will pause the sending of campaign</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Unlock</td>
														                <td class="col-sm-5">Will continue the sending of campaign</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">View</td>
														                <td class="col-sm-5">You will see campaign summary</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Approve</td>
														                <td class="col-sm-5">You will approved campaign</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Reject</td>
														                <td class="col-sm-5">You will reject campaign</td>
														            </tr>
														            
														            <tr>
														                <td class="col-sm-1">Mark as Force-Completed</td>
														                <td class="col-sm-5">You will stop the campaign</td>
														            </tr>
	              										        </tbody>
														    </table>

														    <table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Button</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														           <tr>
														                <td class="col-sm-1">Lock All Campaigns</td>
														                <td class="col-sm-5">All live campaign s will be locked.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Previous</td>
														                <td class="col-sm-5">You will go back to the previous page</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Next</td>
														                <td class="col-sm-5">You will proceed to the next page</td>
														            </tr>
	              										        </tbody>
														    </table>				
							                   	   		</div>
							                	</div>
							                </div>	
							            </div>

							<h3 id="ForApproval"> <strong> For Approval </strong> </h3>
							<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
							<div class="row-fluid">
				            	<div class="thumbnails">
				            			<div class="span4">
							                <div class="thumbnail">
							                	<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/admindash2.png" style="width: 80%;">  
								                	<div class="caption">
								                    	<table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Column</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">ID</td>
														                <td class="col-sm-5">ID number of created campaigns.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Account</td>
														                <td class="col-sm-5">Name of account where the campaign was created.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Name</td>
														                <td class="col-sm-5">Campaign name</td>
														            </tr>
	              										        </tbody>
														    </table>

														    <table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Campaign Status</span></th> 
														                <th class="col-sm-6"><span>Actions</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Live</td>
														                <td class="col-sm-5">Campaign Stats, Lock and Unlock</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Approved</td>
														                <td class="col-sm-5">View</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Completed</td>
														                <td class="col-sm-5">View Dashboard</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Draft</td>
														                <td class="col-sm-5">View</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Locked</td>
														                <td class="col-sm-5">View and Resume</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Queuing</td>
														                <td class="col-sm-5">View</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Ready</td>
														                <td class="col-sm-5">View</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">For Approval</td>
														                <td class="col-sm-5">View, Approve and Reject</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Pending</td>
														                <td class="col-sm-5">View</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Rejected</td>
														                <td class="col-sm-5">View</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Stopped</td>
														                <td class="col-sm-5">Campaign Stats and Mark as Force-completed</td>
														            </tr>
	              										        </tbody>
														    </table>	

														    <table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Action</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Stats</td>
														                <td class="col-sm-5">Will show your Campaign Status</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Lock</td>
														                <td class="col-sm-5">Will pause the sending of campaign</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Unlock</td>
														                <td class="col-sm-5">Will continue the sending of campaign</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">View</td>
														                <td class="col-sm-5">You will see campaign summary</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Approve</td>
														                <td class="col-sm-5">You will approved campaign</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Reject</td>
														                <td class="col-sm-5">You will reject campaign</td>
														            </tr>
														            
														            <tr>
														                <td class="col-sm-1">Mark as Force-Completed</td>
														                <td class="col-sm-5">You will stop the campaign</td>
														            </tr>
	              										        </tbody>
														    </table>

														    <table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Button</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Previous</td>
														                <td class="col-sm-5">You will go back to the previous page</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Next</td>
														                <td class="col-sm-5">You will proceed to the next page</td>
														            </tr>
	              										        </tbody>
														    </table>	
							                    	</div>
							                </div>
							            </div>
							        </div>    
							    </div>
								

						<h3 id="TodaysCampaignStatistics"> <strong> Today's Campaign Statistics </strong> </h3>
						<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
							<div class="row-fluid">
				            	<div class="thumbnails">
				            		<div class="span4">
							            <div class="thumbnail">
							               	<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/admindash3.png" style="width: 70%;">  
							                	<div class="caption">
							                    	<table class="table table-bordered">
														<thead>
												            <tr>
												                <th class="col-sm-2"><span>Field</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Queued</td>
												                <td class="col-sm-5">Campaigns awaiting when the user reached the maximum run campaign per account.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Sent</td>
												                <td class="col-sm-5">Directed campaigns to recipients. </td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Pending</td>
												                <td class="col-sm-5">Campaigns awaiting. </td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Delivered</td>
												                <td class="col-sm-5">Transported SMS. </td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">No Delivery Info</td>
												                <td class="col-sm-5">No data collected.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Bounced</td>
												                <td class="col-sm-5">Error, SMS traffic</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Dropped</td>
												                <td class="col-sm-5">Not sent SMS due to forced stop action.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Phonebook Uploader</td>
												                <td class="col-sm-5">Up/Down status</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Campaign Manager</td>
												                <td class="col-sm-5">Up/Down status</td>
												            </tr>
												        </tbody>
													</table>	
						                    	</div>
						                </div>
						            </div>

						        <h1 id=""> <strong> Account </strong> </h1>    
						        <h3 id="ViewAccount"> <strong> Account List </strong> </h3>
						        <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
									<div class="span4">
						               	<div class="thumbnail">
						                  		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/viewaccountlist.png" style="width: 100%;"><br> </center>
							                  		<div class="caption">
							                  			<p> User can create and upload bulk accounts. It also displays list of all the accounts created. </p> <br>
									                    	<table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Column</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">ID</td>	
														                <td class="col-sm-5">Shows ID number per Account.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Name</td>
														                <td class="col-sm-5">Displays Account Name listed in the table.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Status</td>
														                <td class="col-sm-5">Shows the status of each account. (e.g., Active, Blocked, Suspended, Expired, Cancelled and Temporary)</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Action</td>
														                <td class="col-sm-5">Manage Account, Update Account Status and Login to Account.</td>
														            </tr>
			           										        </tbody>
														    </table>	

														    <table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Action</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Manage Account</td>	
														                <td class="col-sm-5">You may customize your account.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Update Account Status</td>
														                <td class="col-sm-5">You may manage your account status.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Login to Account</td>
														                <td class="col-sm-5">You will be directly log in to your selected account.</td>
														            </tr>
			           										        </tbody>
														    </table>

														    <table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Button</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Create</td>	
														                <td class="col-sm-5">You may add or create new account.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Upload Bulk Accounts</td>
														                <td class="col-sm-5">You may upload bulk accounts.</td>
														            </tr>

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

						        <h3 id="CreateAccount"> <strong> Create Account </strong> </h3>
						        <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	
									<div class="span4">
						               	<div class="thumbnail">
						                  	<div class="caption">
						                  		<ul>
					                  				<li> Click Create button.</li> <br>
					                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/createaccount.png" style="width: 40%;"><br><br> </center>
					                  				<li> Window will pop-up for creating or adding new account.</li> <br>
					                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/admincreateacct.png" style="width: 100%;"> </center><br>
					                  				<li> Fill out all the input fields.
					                  				<li> Click Submit button. </li>
					                  				<li> <strong> Note: </strong> User can reset the typed account name.</li>
					                  			</ul>
							                    	<table class="table table-bordered">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Parameter</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Account Name</td>
												                <td class="col-sm-5">Input the name of account to be created.</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Contact Name</td>
												                <td class="col-sm-5"> <strong> Optional </strong>. Input contact name for the account.</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Sender ID</td>
												                <td class="col-sm-5"><strong> Optional </strong>. User can set already the Account Sender ID when adding new account.</td>
												            </tr>
         										        </tbody>
												    </table>

												    <table class="table table-bordered">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Button</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Reset</td>
												                <td class="col-sm-5">All fields will be cleared.</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Submit</td>
												                <td class="col-sm-5"> Your new account will be saved and added to the account list table.</td>
												            </tr>
         										        </tbody>
												    </table>		
					                   	   	</div>  
					                </div>
					            </div>        

						        <h3 id="UploadBulkAccount"> <strong> Upload Bulk Accounts </strong> </h3>
						        <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	
									<div class="span4">
						               	<div class="thumbnail">
					                  		<div class="caption">
					                  			<ul>
					                  				<li> Click Upload Bulk Accounts button.</li> <br>
					                  					<center><img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/uploadbulkaccount.png" style="width: 40%;"> </center> <br>
					                  				<li> Click Choose File button to locate your file. File must be in .csv format.</li> <br>
					                  					<center><img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminbulkacct.png" style="width: 70%;"> </center> <br>
					                  						<table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Parameter</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">File</td>
														                <td class="col-sm-5">The file to be uploaded from your computer.
																			CSV file format only.</td>
														            </tr>
		         										        </tbody>
														    </table> <br>
					                  				<li> Click Next. The newly uploaded bulk accounts will be saved in the account list table.</li> <br>
					                  			</ul>
							                    	
											<h4> <strong> Upload History </strong> </h4>
										    	<center><img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminbulkhistory.png" style="width: 100%;"> </center> <br>
										    		<p> After you start an upload, the Upload List will display informations on the status of your upload. It also displays a history of other uploads. Upload history can be deleted. </p> <br>
										    			<table class="table table-bordered">
						                					<thead>
													            <tr>
													                <th class="col-sm-2"><span>Column</span></th> 
													                <th class="col-sm-6"><span>Description</span></th>
													            </tr>
													        </thead>
													        <tbody>
													            <tr>
													                <td class="col-sm-1">File Name</td>
													                <td class="col-sm-5">Name of file that has been uploaded.</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Status</td>
													                <td class="col-sm-5">Displays the status of the uploaded file. (e.g., Complete, the email address has already taken and etc.)</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Progress</td>
													                <td class="col-sm-5">Shows the progress of the file you are uploading.</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Error Code</td>
													                <td class="col-sm-5">Displays error code corresponding to upload error type.</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Date Created</td>
													                <td class="col-sm-5">Displays the date and time the file has been uploaded.
																	(e.g., 2014-06-20 08:17:52)</td>
													            </tr>
             										        </tbody>
													    </table>
					                   	   	</div>  
						                </div>
						            </div> 

						       	<h3 id="AccountMgt"> <strong> Account Management </strong> </h3>       
						       	<h4 id="AccountStatus"> <strong> Account Status </strong> </h4>
						       	<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	
									<div class="span4">
						               	<div class="thumbnail">
					                  		<div class="caption">
				                  				<ul>
					                  				<li> Click Update Account Status button.</li> <br>
					                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/updatestatus.png" style="width: 20%;"> </center> <br>
					                  				<li> A window will pop-up for selecting account status.</li> 
					                  				<li> Select in the dropdown box the status you are going to use for your account. </li> <br>
					                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminacctstat.png" style="width: 70%;"> </center> <br>
					                  						<table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Parameter</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Account</td>
														                <td class="col-sm-5">Name of account to be updated.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Status</td>
														                <td class="col-sm-5">Select account status. (e.g., Active, Blocked, Suspended, Expired, etc)</td>
														            </tr>
		         										        </tbody>
														    </table>	
					                  				<li> Click  Update Status.</li> <br>
					                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/accountstat.png" style="width: 110%;"> </center> <br>
					                  			</ul>
							                    	<table class="table table-bordered">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Column</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">ID</td>
												                <td class="col-sm-5">Account ID number.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Name</td>
												                <td class="col-sm-5">Name of the owner's account. </td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Status</td>
												                <td class="col-sm-5">Select account status. (e.g., Active, Blocked, Suspended, Expired an Cancelled)</td>
												            </tr>
         										        </tbody>
												    </table>	

												    <table class="table table-bordered">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Action</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Manage</td>
												                <td class="col-sm-5">You may customize your account's setting.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Update Account Status</td>
												                <td class="col-sm-5">You may change your account's status. (e.g., Active, Blocked, Suspended, Expired an Cancelled)</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Login To Account</td>
												                <td class="col-sm-5">You are being log in to your account, automatically.</td>
												            </tr>
         										        </tbody>
												    </table>	
					                   	   	</div>  
						                </div>
						            </div>     

						        <h4 id="AccountDetails"> <strong> Account Details </strong> </h4>
						        <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	
									<div class="span4">	
						               	<div class="thumbnail">
						                  		<div class="caption">
						                  			<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminacctdetails.png" style="width: 60%;"> </center> <br>
							                  			<p> Shows basic information of the account. </p> <br>	
									                    	<table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Column</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Account Name</td>
														                <td class="col-sm-5">Name of account you are using.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Account Status</td>
														                <td class="col-sm-5">Status of account you are using. (e.g., Active, Blocked, Suspended, Expired an Cancelled)</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Billing Type</td>
														                <td class="col-sm-5">Your type of billing. (e.g., Monetary)</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Balance</td>
														                <td class="col-sm-5">Remaining account balance is expressed in PHP</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Currency</td>
														                <td class="col-sm-5">Medium of exchange. (e.g., Philippine Peso, USD, EUR and etc.)</td>
														            </tr>
	             										        </tbody>
														    </table>	
						                   	   	</div>  
						                </div>
						            </div> 

						        <h4 id="AccountSettings"> <strong> Update Settings </strong> </h4>
						        <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	
									<div class="span4">
						               	<div class="thumbnail">
						                  		<div class="caption">
						                  			<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminacctsettings.png" style="width: 80%;"> </center> <br> 
							                  			<p> User can update the basic settings of each account: </p>
							                  				<ul>
							                  					<li> Set the credit limit per account. </li>
							                  					<li> User can reset the basic settings per account. </li>
							                  				</ul>	
										                    	<table class="table table-bordered">
								                					<thead>
															            <tr>
															                <th class="col-sm-2"><span>Parameter</span></th> 
															                <th class="col-sm-6"><span>Description</span></th>
															            </tr>
															        </thead>
															        <tbody>
															            <tr>
															                <td class="col-sm-1">Account Name</td>
															                <td class="col-sm-5">Name of account you are using.</td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Credit Limit</td>
															                <td class="col-sm-5">Maximum amount of credit that a user is authorized to use.</td>
															            </tr>
																	 </tbody>
															    </table>	

															    <table class="table table-bordered">
								                					<thead>
															            <tr>
															                <th class="col-sm-2"><span>Button</span></th> 
															                <th class="col-sm-6"><span>Description</span></th>
															            </tr>
															        </thead>
															        <tbody>
															            <tr>
															                <td class="col-sm-1">Reset</td>
															                <td class="col-sm-5">Fields will be cleared.</td>
															            </tr>

															            <tr>
															                <td class="col-sm-1">Submit</td>
															                <td class="col-sm-5">Your update will be saved.</td>
															            </tr>
																	 </tbody>
															    </table>	
						                   	   	</div>  
						                </div>
						            </div> 

						        <h4 id="Billing"> <strong> Billing </strong> </h4>
						        <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	
									<div class="span4">
						               	<div class="thumbnail">
					                  		<div class="caption">
					                  			
					                  				<ul>
					                  					<li> Click Debit / Credit / Refund / ebate button. </li>
					                  					<li> Fill out all input fields. </li>  <br>
					                  						<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminbilling.png" style="width: 60%;"> </center> <br>
					                  					<li> Click Submit. </li> <br>
					                  				</ul>	
								                    	<table class="table table-bordered">
						                					<thead>
													            <tr>
													                <th class="col-sm-2"><span>Parameter</span></th> 
													                <th class="col-sm-6"><span>Description</span></th>
													            </tr>
													        </thead>
													        <tbody>
													            <tr>
													                <td class="col-sm-1">ID</td>
													                <td class="col-sm-5">ID number of the account that you are using.</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Name</td>
													                <td class="col-sm-5">Name of the account you are using.</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Balance</td>
													                <td class="col-sm-5">Remaining account balance is expressed in PHP.</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Amount</td>
													                <td class="col-sm-5">Specific amount you want to add in your transaction.</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Description</td>
													                <td class="col-sm-5">Details of your transaction.</td>
													            </tr>
															 </tbody>
													    </table>

													    <table class="table table-bordered">
						                					<thead>
													            <tr>
													                <th class="col-sm-2"><span>Button</span></th> 
													                <th class="col-sm-6"><span>Description</span></th>
													            </tr>
													        </thead>
													        <tbody>
													            <tr>
													                <td class="col-sm-1">Reset</td>
													                <td class="col-sm-5">Fields will be cleared.</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Submit</td>
													                <td class="col-sm-5">Your update will be saved.</td>
													            </tr>
								        					</tbody>
													    </table>		
					                   	   	</div>  
						                </div>
						            </div>                                    
           
    							<h4 id="Reports"> <strong> Reports </strong> </h4>       
						       	<h5 id="Traffic"> <strong> Traffic Reports </strong> </h5>
						       	<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	
									<div class="span4">
						               	<div class="thumbnail">
						                  	<div class="caption">
					                  			<ul>
					                  				<li> To generate traffic report, set date range. </li> <br>
					                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/admintraffic.png" style="width: 100%;"> </center> <br>
					                  				<li> Click Submit.
					                  				<li> Shows Summary of Campaigns (Total Bulk SMS Campaigns, Total Bulk SMS Spent, Total Bulk SMS 	Transactions and Total API Transactions), Bulk SMS Status Breakdown and Bulk SMS Operator Breakdown per account. </li> <br>
					                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/admintrafficsummary.png" style="width: 100%;"> </center> <br>
					                  			</ul>	
							                    	<table class="table table-bordered">
					                					<thead>
												            <tr>
												                <th class="col-sm-3"><span>Field</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												         	<tr>
												                <td class="col-sm-1">From Date</td>
												                <td class="col-sm-5">Calendar ready. Start of date range.</td>
												            </tr>
												            
												            <tr>
												                <td class="col-sm-1">To Date</td>
												                <td class="col-sm-5">Calendar ready. End of date range.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Account</td>
												                <td class="col-sm-5">Name of account you are using.</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Total Bulk SMS Campaigns</td>
												                <td class="col-sm-5">Total count of bulk campaigns</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Total Bulk SMS Spent</td>
												                <td class="col-sm-5">Total count of bulk sms sent</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Total BUlk SMS Transactions</td>
												                <td class="col-sm-5">Total count bulk sms transactions</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Total API transactions</td>
												                <td class="col-sm-5">Total count of API transactions</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Queued</td>
												                <td class="col-sm-5">Bulk SMS being queued</td>
												            </tr>
												            
												            <tr>
												                <td class="col-sm-1">Delivered</td>
												                <td class="col-sm-5">Bulk SMS being delivered</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Bounced</td>
												                <td class="col-sm-5">Bulk SMS that bounced</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">No Delivery Info</td>
												                <td class="col-sm-5">Bulk SMS with No Dleivery Info</td>
												            </tr>
         										        </tbody>
												    </table>	
						                  	</div>  
						                </div>
						            </div>    

						        <h5 id="BillingRep"> <strong> Billing Reports </strong> </h5>
						        <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	
									<div class="span4">
						               	<div class="thumbnail">
						                  	<div class="caption">
					                  			<ul>
					                  				<li> To generate billing report, set date range. </li> <br>
					                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminbillingrep.png" style="width: 100%;"> </center> <br>
					                  				<li> Click Submit.</li>
					                  				<li> Show Summary of Billings. </li> <br>
					                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminbillingrepsummary.png" style="width: 100%;"> </center> <br>
					                  			</ul>	
							                    	<table class="table table-bordered">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Column</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Date</td>
												                <td class="col-sm-5">Date when campaign being created</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Description</td>
												                <td class="col-sm-5">Description of the campaign created</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Amount</td>
												                <td class="col-sm-5">Amount cost for the campaign created</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Type</td>
												                <td class="col-sm-5">Type of billing (e.g. Debit, Credit, Refund and Rebate)</td>
												            </tr>
         										        </tbody>
												    </table>

												    <table class="table table-bordered">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Button</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Change Dates</td>
												                <td class="col-sm-5">You may change the date of your billing report that you want to generate</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Download</td>
												                <td class="col-sm-5">You may download your billing report</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Previous</td>
												                <td class="col-sm-5">You will go back to the previous page</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Next</td>
												                <td class="col-sm-5">You will proceed to the next page</td>
												            </tr>
         										        </tbody>
												    </table>		
					                   	   	</div>  
						                </div>
						            </div>     

						        <h4 id="AcctUsersMgt"> <strong> Account Users Management </strong> </h4>
						        <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	
									<div class="span4">
						               	<div class="thumbnail">
						                  	<div class="caption">
					                  			<ul>
					                  				<li> User can create individual user or upload bulk users.</li> <br>
					                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminacctusers.png" style="width: 100%;"> </center> <br>
					                  						<ul> 
					                  							<li> Create </li> <br>
					                  								<ul>
					                  									<li> Click Create button.</li> 
					                  									<li> Fill out all input fields. </li> <br>
					                  										<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminacctusers2.png" style="width: 70%;"> </center> <br>
					                  											<table class="table table-bordered">
												                					<thead>
																			            <tr>
																			                <th class="col-sm-2"><span>Parameter</span></th> 
																			                <th class="col-sm-6"><span>Description</span></th>
																			            </tr>
																			        </thead>
																			        <tbody>
																			            <tr>
																			                <td class="col-sm-1">First Name</td>
																			                <td class="col-sm-5">Users given name.</td>
																			            </tr>

																			            <tr>
																			                <td class="col-sm-1">Last Name</td>
																			                <td class="col-sm-5">Users family Name.</td>
																			            </tr>

																			            <tr>
																			                <td class="col-sm-1">Email</td>
																			                <td class="col-sm-5">Email address of the created account user.</td>
																			            </tr>

																			            <tr>
																			                <td class="col-sm-1">Mobile</td>
																			                <td class="col-sm-5">User mobile number</td>
																			            </tr>

																			            <tr>
																			                <td class="col-sm-1">Password</td>
																			                <td class="col-sm-5">User password</td>
																			            </tr>

																			            <tr>
																			                <td class="col-sm-1">User Groups</td>
																			                <td class="col-sm-5">Group that user will be added</td>
																			            </tr>

																			            <tr>
																			                <td class="col-sm-1">Role</td>
																			                <td class="col-sm-5">Account User / Account Admin</td>
																			            </tr>
							         										        </tbody>
																			    </table>	
					                  									<li> Click Send.</li>
					                  									<li> User will be added in the datatable.</li><BR>
					                  										<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminacctusers3.png" style="width: 100%;"> </center> <br>
					                  											<table class="table table-bordered">
												                					<thead>
																			            <tr>
																			                <th class="col-sm-2"><span>Column</span></th> 
																			                <th class="col-sm-6"><span>Description</span></th>
																			            </tr>
																			        </thead>
																			        <tbody>
																			            <tr>
																			                <td class="col-sm-1">First Name</td>
																			                <td class="col-sm-5">Users given name.</td>
																			            </tr>

																			            <tr>
																			                <td class="col-sm-1">Last Name</td>
																			                <td class="col-sm-5">Users family Name.</td>
																			            </tr>

																			            <tr>
																			                <td class="col-sm-1">Email</td>
																			                <td class="col-sm-5">Email address of the created account user.</td>
																			            </tr>

																			            <tr>
																			                <td class="col-sm-1">Status</td>
																			                <td class="col-sm-5">User status (e.g. Active, Temporary, etc)</td>
																			            </tr>

																			            <tr>
																			                <td class="col-sm-1">Role</td>
																			                <td class="col-sm-5">Account User / Account Admin</td>
																			            </tr>

																			            <tr>
																			                <td class="col-sm-1">Action</td>
																			                <td class="col-sm-5">Edit, Set Privileges, Set action, and Delete</td>
																			            </tr>
							         										        </tbody>
																			    </table>

																			    <table class="table table-bordered">
												                					<thead>
																			            <tr>
																			                <th class="col-sm-2"><span>Button</span></th> 
																			                <th class="col-sm-6"><span>Description</span></th>
																			            </tr>
																			        </thead>
																			        <tbody>
																			            <tr>
																			                <td class="col-sm-1">Edit</td>
																			                <td class="col-sm-5">You may edit user</td>
																			            </tr>

																			            <tr>
																			                <td class="col-sm-1">Set Privileges</td>
																			                <td class="col-sm-5">You may set privileges for selected user</td>
																			            </tr>

																			            <tr>
																			                <td class="col-sm-1">Set Actions</td>
																			                <td class="col-sm-5">You may set actions for selected user</td>
																			            </tr>

																			            <tr>
																			                <td class="col-sm-1">Delete</td>
																			                <td class="col-sm-5">You may delete selected user</td>
																			            </tr>
							         										        </tbody>
																			    </table>	
					                  								</ul>
					                  							<li> Upload Bulk users </li>
					                  								<ul>
					                  									<li> Click Upload Bulk Users button. </li> 
					                  									<li> Select User Group. </li> 
					                  									<li> Click Choose File button to locate your file. </li> <br>
					                  										<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminbulkusers.png" style="width: 100%;"> </center> <br>
					                  											 <table class="table table-bordered">
												                					<thead>
																			            <tr>
																			                <th class="col-sm-2"><span>Parameter</span></th> 
																			                <th class="col-sm-6"><span>Description</span></th>
																			            </tr>
																			        </thead>
																			        <tbody>
																			            <tr>
																			                <td class="col-sm-1">User Group</td>
																			                <td class="col-sm-5">You may select user group</td>
																			            </tr>

																			            <tr>
																			                <td class="col-sm-1">File</td>
																			                <td class="col-sm-5">You may locate your file to be uploaded</td>
																			            </tr>
							         										        </tbody>
																			    </table>	
					                  									<li> Click Next. </li>
					                  									<li> Your uploaded file will be aaded in the datatable. </li> <br>
					                  									<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminbulkusers2.png" style="width: 100%;"> </center> <br>
					                  										<table class="table table-bordered">
											                					<thead>
																		            <tr>
																		                <th class="col-sm-2"><span>Column</span></th> 
																		                <th class="col-sm-6"><span>Description</span></th>
																		            </tr>
																		        </thead>
																		        <tbody>
																		            <tr>
																		                <td class="col-sm-1">File Name</td>
																		                <td class="col-sm-5">Name of file uploaded</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Status</td>
																		                <td class="col-sm-5">Complete or Error</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Progress</td>
																		                <td class="col-sm-5">Progress while uploading file</td>
																		            </tr>

																		            <tr>
																		                <td class="col-sm-1">Error Code</td>
																		                <td class="col-sm-5">Corresponding error code </td>
																		            </tr>

																		             <tr>
																		                <td class="col-sm-1">Date Created</td>
																		                <td class="col-sm-5">File being created</td>
																		            </tr>
						         										        </tbody>
																		    </table>	
					                  								</ul>
					                  						</ul>
					                  				
							                    	
						                   	   	</div>  
						                </div>
						            </div> 

						        <h4 id="SMSKeywords"> <strong> SMS Keywords </strong> </h4>
						        <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	
									<div class="span4">
						               	<div class="thumbnail">
						                  	<div class="caption">
						                  		<ul>
						                  			<li> Click Create. </li> <br>
						                  				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminsms.png" style="width: 100%;"> </center> <br> 
						                  			<li> A window will appear.</li>
						                  			<li> Fill out input field.</li> <br>
						                  				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminsms2.png" style="width: 70%;"> </center> <br>
						                  					<table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Parameter</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														        	<tr>
														        		<td class="col-sm-1">SMS Keyword</td>
													                	<td class="col-sm-5">Your SMS Keyword</td> 
														        	</tr>
														        </tbody>
													        </table>
						                  			<li>  Click Save.</li>
						                  			<li> Your SMS keyword will be aaded in the datatable.</li> <br>
						                  				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminsms3.png" style="width: 100%;"> </center> <br>
						                  					<table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Column</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														        	<tr>
														        		<td class="col-sm-1">ID</td>
													                	<td class="col-sm-5">SMS Keyword ID</td> 
														        	</tr>

														        	<tr>
														        		<td class="col-sm-1">Account</td>
													                	<td class="col-sm-5">User Account</td> 
														        	</tr>

														        	<tr>
														        		<td class="col-sm-1">SMS Keyword</td>
													                	<td class="col-sm-5">SMS keyword</td> 
														        	</tr>

														        	<tr>
														        		<td class="col-sm-1">Created By</td>
													                	<td class="col-sm-5">Account who created the SMS Keyword</td> 
														        	</tr>

														        	<tr>
														        		<td class="col-sm-1">Date Created</td>
													                	<td class="col-sm-5">SMS Keyword being created</td> 
														        	</tr>

														        	<tr>
														        		<td class="col-sm-1">Action</td>
													                	<td class="col-sm-5">Delete</td> 
														        	</tr>
														        </tbody>
													        </table>

													        <table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Action</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														        	<tr>
														        		<td class="col-sm-1">Create</td>
													                	<td class="col-sm-5">You may create new SMS keyword</td> 
														        	</tr>

														        	<tr>
														        		<td class="col-sm-1">Delete</td>
													                	<td class="col-sm-5">You may delete SMS keyword</td> 
														        	</tr>
														        </tbody>
													        </table>
						                  		</ul>
						                   	</div>  
						                </div>
						            </div> 

						        <h4 id="Textback"> <strong> Textback Numbers </strong> </h4>
						        <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	
									<div class="span4">
						               	<div class="thumbnail">
						                  	<div class="caption">
						                  		<ul>
						                  			<li> Click Create. </li> <br>
						                  				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/admintextback.png" style="width: 100%;"> </center> <br>
						                  			<li> A window will appear.</li>
						                  			<li> Fiil out input filed.</li> <br>
						                  				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/admintextback2.png" style="width: 70%;"> </center> <br>
						                  					<table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Parameter</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Textback Number</td>
														                <td class="col-sm-5">Valid textback number</td>
														            </tr>
														        </tbody>
														    </table>	
						                  			<li> Click Save. </li>
						                  			<li> Your created textback number will be added to the datatable. </li> <br>
						                  				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/admintextback3.png" style="width: 90%;"> </center> <br>
						                  					<table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Column</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">ID</td>
														                <td class="col-sm-5"> ID number of each Textback Number created.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Account</td>
														                <td class="col-sm-5"> Name of account which the textback number belongs to.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Number</td>
														                <td class="col-sm-5"> Textback number created.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Created By</td>
														                <td class="col-sm-5"> Displays the email address of the account who created the textback number.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Created On</td>
														                <td class="col-sm-5"> Displays time and date the textback number has been created.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Action</td>
														                <td class="col-sm-5"> Delete</td>
														            </tr>
														        </tbody>
														    </table>	

														    <table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Button</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Delete</td>
														                <td class="col-sm-5"> You may delete selected textback number </td>
														            </tr>
														        </tbody>
														    </table>	
						                  		</ul>
						                   	</div>  
						                </div>
						            </div> 

						        <h4 id="SenderID"> <strong> Sender ID </strong> </h4>
						        <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	
									<div class="span4">
						               	<div class="thumbnail">
						                  	<div class="caption">
						                  		<ul>
						                  			<li> Click Create. </li> <br>
						                  				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminsender.png" style="width: 100%;"> </center> <br>
						                  			<li> A window will appear.</li>
						                  			<li> Fill out input field.</li> <br>
						                  				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminsender1.png" style="width: 70%;"> </center> <br>
						                  					<table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Parameter</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Sender ID</td>
														                <td class="col-sm-5"> Valid Sender ID</td>
														            </tr>
														        </tbody>
														    </table>	
						                  			<li> Click Add Sender ID.</li>
						                  			<li> Your created Sender ID will be added in the datatable.</li> <br>
						                  				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminsender2.png" style="width: 100%;"> </center> <br>
						                  					<table class="table table-bordered">
						                						<thead>
														            <tr>
														                <th class="col-sm-2"><span>Column</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">ID</td>
														                <td class="col-sm-5"> ID number of each Sender ID created.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Name</td>
														                <td class="col-sm-5"> Sender ID</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Account</td>
														                <td class="col-sm-5"> Name of account which Sender ID belongs.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Date Created</td>
														                <td class="col-sm-5">Displays time and date the Sender ID created.</td>
														            </tr>

														            <tr>
														                <td class="col-sm-1">Action</td>
														                <td class="col-sm-5"> Delete</td>
														            </tr>
														        </tbody>
														    </table>

														    <table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Button</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Delete</td>
														                <td class="col-sm-5">You may delete selected sender ID</td>
														            </tr>
														        </tbody>
														    </table>		
						                  		</ul>
						                   	</div>  
						                </div>
						            </div>   

						        <h4 id="TechnicalSettings"> <strong> Technical Settings </strong> </h4>
						        <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	
									<div class="span4">
						               	<div class="thumbnail">
						                  	<div class="caption">
						                  		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/admintech.png" style="width: 60%;"> </center>
							                  		<h4> <strong> User will be able to: </strong></h4>
							                  			<ul>
							                  				<li> Set and Add more IP Whitelisted. </li>
							                  				<li> Specify API Token. </li>
							                  				<li> Reset Technical settings </li>
							                  			</ul>
							                  				<table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Parameter</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">IP Whitelisted</td>
														                <td class="col-sm-5"> Input valid IP</td>
														            </tr>

														             <tr>
														                <td class="col-sm-1">API Token</td>
														                <td class="col-sm-5"> Input valid API</td>
														            </tr>
														        </tbody>
														    </table>

														    <table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Button</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Add more IP</td>
														                <td class="col-sm-5">You may add more IPs</td>
														            </tr>


														            <tr>
														                <td class="col-sm-1">Reset</td>
														                <td class="col-sm-5">Fields will be cleared</td>
														            </tr>

														             <tr>
														                <td class="col-sm-1">Submit</td>
														                <td class="col-sm-5">Technical settings will be updated</td>
														            </tr>
														        </tbody>
														    </table>		
						                   	   	</div>  
						                </div>
						            </div> 

						        <h4 id="Pricing"> <strong> Pricing </strong> </h4>
						        <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	
									<div class="span4">
						               	<div class="thumbnail">
						                  	<div class="caption">
						                  		<h5 id="TransacPricing"> <strong> Custom Transaction Pricing </strong> </h5>          		
						           	       			<ul>
						                  				<li> Click Add button. </li> <br> 
						                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminaddpricing1.png" style="width: 100%;"> </center> <br>
						                  				<li> A window will pop-up for adding new transaction pricing. </li> 
						                  				<li> Fill out input fields.</li> <br>
						                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminaddpricing.png" style="width: 70%;"> </center> <br>
						                  						<table class="table table-bordered">
								                					<thead>
															            <tr>
															                <th class="col-sm-2"><span>Parameter</span></th> 
															                <th class="col-sm-6"><span>Description</span></th>
															            </tr>
															        </thead>
															        <tbody>
															            <tr>
															                <td class="col-sm-1">Transaction</td>
															                <td class="col-sm-5">Transaction (e.g. Location-based, Hyper Targted, and Inbound SMS)</td>
															            </tr>

															             <tr>
															                <td class="col-sm-1">Price</td>
															                <td class="col-sm-5">Cost for transaction</td>
															            </tr>
																    </tbody>
															    </table>
						                  				<li> Click Save. </li>
						                  				<li> Your transaction pricing will be added in the datatable.</li> <br>
						                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminaddpricing2.png" style="width: 70%;"> </center> <br>
						                  			</ul>
						                  				<table class="table table-bordered">
						                					<thead>
													            <tr>
													                <th class="col-sm-2"><span>Parameter</span></th> 
													                <th class="col-sm-6"><span>Description</span></th>
													            </tr>
													        </thead>
													        <tbody>
													            <tr>
													                <td class="col-sm-1">Transaction</td>
													                <td class="col-sm-5"> Inbound SMS, Hyper-targeted and Location-based </td>
													            </tr>

													             <tr>
													                <td class="col-sm-1">Currency</td>
													                <td class="col-sm-5"> PHP</td>
													            </tr>
													        </tbody>
													    </table>

													    <table class="table table-bordered">
						                					<thead>
													            <tr>
													                <th class="col-sm-2"><span>Action</span></th> 
													                <th class="col-sm-6"><span>Description</span></th>
													            </tr>
													        </thead>
													        <tbody>
													            <tr>
													                <td class="col-sm-1">Edit</td>
													                <td class="col-sm-5">You may edit your transaction pricing to update price</td>
													            </tr>

													             <tr>
													                <td class="col-sm-1">Delete</td>
													                <td class="col-sm-5"> You may delete selected transaction</td>
													            </tr>
													        </tbody>
													    </table> <br> <br>

												<h5 id="OpePricing"> <strong> Custom Operating Pricing </strong> </h5> 
						           	       			<ul>
						                  				<li> Click Add button. </li> <br>
						                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/admincustompricing1.png" style="width: 100%;"> </center> <br>
						                  				<li> A window will pop-up for adding new operator pricing. </li> 
						                  				<li> Fill out input fields. </li> <br>	
						                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/admincustompricing.png" style="width: 70%;"> </center> <br>
						                  						 <table class="table table-bordered">
								                					<thead>
															            <tr>
															                <th class="col-sm-2"><span>Parameter</span></th> 
															                <th class="col-sm-6"><span>Description</span></th>
															            </tr>
															        </thead>
															        <tbody>
															            <tr>
															                <td class="col-sm-1">Operator</td>
															                <td class="col-sm-5">You may select you operator (e.g. Smart, Globe, etc)</td>
															            </tr>

															             <tr>
															                <td class="col-sm-1">Price</td>
															                <td class="col-sm-5">Your operating price</td>
															            </tr>
															        </tbody>
															    </table> 
						                  				<li> Click Save. </li>
						                  				<li> Your operating price will be added in the datatable. </li> <br>
						                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/admincustompricing2.png" style="width: 70%;"> </center> <br>
						                  			</ul>
						                  				<table class="table table-bordered">
						                					<thead>
													            <tr>
													                <th class="col-sm-2"><span>Parameter</span></th> 
													                <th class="col-sm-6"><span>Description</span></th>
													            </tr>
													        </thead>
													        <tbody>
													            <tr>
													                <td class="col-sm-1">Operator</td>
													                <td class="col-sm-5"> Globe, Smart, Sun and Philippine Default </td>
													            </tr>

													           	<tr>
													                <td class="col-sm-1">Currency</td>
													                <td class="col-sm-5"> PHP</td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Price</td>
													                <td class="col-sm-5"> Cost per sent SMS </td>
													            </tr>
													        </tbody>
													    </table>	

													    <table class="table table-bordered">
						                					<thead>
													            <tr>
													                <th class="col-sm-2"><span>Action</span></th> 
													                <th class="col-sm-6"><span>Description</span></th>
													            </tr>
													        </thead>
													        <tbody>
													            <tr>
													                <td class="col-sm-1">Edit</td>
													                <td class="col-sm-5"> You may edit your custom pricing to update the price </td>
													            </tr>

													           	<tr>
													                <td class="col-sm-1">Delete</td>
													                <td class="col-sm-5">You may delete your selected custom pricing</td>
													            </tr>
													        </tbody>
													    </table>			    	
					                   	   	</div>  
					                	</div>
					            	</div> 

					            <h3 id="Transaction"> <strong> Transaction Search </strong> </h3>
					            <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	  
					            	<div class="span4">
						               	<div class="thumbnail">
						                  	<div class="caption">        		
												<ul>
					                  				<li> Enter a valid Mobile Number. </li> <br>
					                  				<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/admintransacsearch.png" style="width: 70%;"> </center> <br>	            
					                  					
					                  				<li> Click Submit </li>
					                  				<li> Datatable will appear. (e.g., Bulk SMS Search, MO Search, API Search) </li> <br>
					                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/bulksms.png" style="width: 100%;"> </center> <br>
					                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/mo.png" style="width: 100%;"> </center> <br>
					                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/api.png" style="width: 100%;"> </center>
					                  			</ul>
					                  				<table class="table table-bordered">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Parameter</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">ID</td>
												                <td class="col-sm-5"> The count/number of mobile transaction. </td>
											 	            </tr>

												             <tr>
												                <td class="col-sm-1">Campaign</td>
												                <td class="col-sm-5"> Campaign name. </td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Triggered</td>
												                <td class="col-sm-5"> Date sent</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Mobile</td>
												                <td class="col-sm-5"> Entered mobile number</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Operator</td>
												                <td class="col-sm-5"> Globe/Sun/Smart</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Route</td>
												                <td class="col-sm-5"> RTS3</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Status</td>
												                <td class="col-sm-5"> Standing (e.g., Sent, Queued, Bounced)</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">DR</td>
												                <td class="col-sm-5"> Shows if delivered</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Price </td>
												                <td class="col-sm-5">Cost of sent SMS</td>
												            </tr>
													        </tbody>
												    </table>
											</div>
										</div>
									</div>				    

								<h3 id="AcctFeatures"> <strong> Active Features </strong> </h3>
									           	   
						        <h4 id="AddFeature"> <strong> Add Feature </strong> </h4>
						        <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	 
						        	<div class="span4">
						               	<div class="thumbnail">
						                  	<div class="caption"> 
					           	       			<ul>
				           	       					<li> Click Add Feature button. </li> <br> 
				           	       						<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminaddfeatures1.png" style="width: 70%;"> </center> <br>
				           	       					<li> Window will pop-up for adding features. </li> <br>
				           	       						<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminaddfeatures.png" style="width: 70%;"> </center>	<br>
				           	       					<li> Select features to be activated by clicking the Activate action. </li>
				           	       				</ul>	

				           	       					<table class="table table-bordered">
					           	       					<thead>
					           	       						<tr>
					           	       							<th class="col-sm-2"><span>Parameter</span></th> 
													            <th class="col-sm-6"><span>Description</span></th> 
					           	       						</tr>
					           	       					</thead>
					           	       					<tbody>
					           	       						 <tr>
												                <td class="col-sm-1">Features</td>
												                <td class="col-sm-5"> Bulk, Location-based and Hyper-targeted </td>
												            </tr>
					           	       					</tbody>
				           	       					</table>

				           	       					<table class="table table-bordered">
					           	       					<thead>
					           	       						<tr>
					           	       							<th class="col-sm-2"><span>Action</span></th> 
													            <th class="col-sm-6"><span>Description</span></th> 
					           	       						</tr>
					           	       					</thead>
					           	       					<tbody>
					           	       						 <tr>
												                <td class="col-sm-1">Activate </td>
												                <td class="col-sm-5"> To activate selected feature </td>
												            </tr>
					           	       					</tbody>
				           	       					</table>
						           	       	</div>  
					                	</div>
					            	</div>     	          	                                                                          
                                

     							<h3 id="PricingPlan"> <strong> Pricing Plan </strong> </h3> 
     							<a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	 
     								<div class="span4">
						               	<div class="thumbnail">
						                  	<div class="caption"> 
			            						<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminpricingplan.png" style="width: 100%;"> </center><br>	            
						           	       			<ul>
						                  				<li> Displays pricing plan details. </li>
						                  				<li> User may select the current or other pricing plan that will be updated.</li>
						                  			</ul>
						                  				<table class="table table-bordered">
						                					<thead>
													            <tr>
													                <th class="col-sm-2"><span>Parameter</span></th> 
													                <th class="col-sm-6"><span>Description</span></th>
													            </tr>
													        </thead>
													        <tbody>
													            <tr>
													                <td class="col-sm-1">Plan</td>
													                <td class="col-sm-5"> Shows current pricing plan. </td>
													            </tr>

													            <tr>
													                <td class="col-sm-1">Date Created</td>
													                <td class="col-sm-5">Displays time and date the pricing plan has been updated. 
																		(e.g., 2014-06-23 06:42:18)</td>
													            </tr>
													        </tbody>
													    </table>    

													    <table class="table table-bordered">
													    	<thead>
													        <tr>
													                <th class="col-sm-2"><span>Button</span></th> 
													                <th class="col-sm-6"><span>Description</span></th>
													            </tr>
													        </thead>
													        <tbody>
													            <tr>
													                <td class="col-sm-1">Update</td>
													                <td class="col-sm-5">You will update selected pricing plan. </td>
													            </tr>
													        </tbody>
													    </table>    
									    	</div>  
					                	</div>
					            	</div>

					            <h1><strong> Reports </strong></h1>	
					            <h3 id="TransacSearch"> <strong> Transaction Search </strong> </h3>
					            <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	  
     								<div class="span4">
						               	<div class="thumbnail">
						                  	<div class="caption"> 
			            						<ul>
					                  				<li> Enter a valid Mobile Number.</li> <br>
					                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminreporttransac.png" style="width: 80%;"> </center> <br>
					                  						<table class="table table-bordered">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Parameter</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Mobile Number</td>
												                <td class="col-sm-5">Valid mobile number</td>
												            </tr>
												        </tbody>
												    </table>    
					                  				<li> Shows data table. (e.g., Bulk SMS Search, MO Search, API Search) </li> <br>
					                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminreporttransac1.png" style="width: 100%;"> </center> <br>
					                  						<table class="table table-bordered">
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
					                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminreporttransac2.png" style="width: 100%;"> </center> <br>
					                  						<table class="table table-bordered">
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
					                  					<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminreporttransac3.png" style="width: 100%;"> </center> <br>
					                  						<table class="table table-bordered">
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

					            <h1><strong> Admin Settings </strong></h1>	
					            <h3 id="PlatformSettings"> <strong> Platform Settings </strong> </h3> 
					            <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	 
     								<div class="span4">
						               	<div class="thumbnail">
						                  	<div class="caption"> 
			            						<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminplatform.png" style="width: 70%;"> </center> <br>           
						           	       			<table class="table table-bordered">
					                					<thead>
												            <tr>
												                <th class="col-sm-2"><span>Parameter</span></th> 
												                <th class="col-sm-6"><span>Description</span></th>
												            </tr>
												        </thead>
												        <tbody>
												            <tr>
												                <td class="col-sm-1">Phonebook Upload Manager</td>
												                <td class="col-sm-5">Localhost location of phonebook upload manager.
																	(e.g., http://127.0.0.1:9001)</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Bulk SMS Manager</td>
												                <td class="col-sm-5">Localhost location of bulk SMS manager.
																	(e.g., http://ADV-NODE:8083)</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Strict Mode</td>
												                <td class="col-sm-5">0 (Can access all the actions regardless  of the set privileges)
																	    <br>1 (Limited access only).</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Platform Timezone</td>
												                <td class="col-sm-5">Standard time. (e.g., Asia/Manila)</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Default Currency</td>
												                <td class="col-sm-5">PHP</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Default Account Billing Type</td>
												                <td class="col-sm-5">Monetary</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Opt Out Message</td>
												                <td class="col-sm-5">To stop receiving SMS, text in STOP SENDERID to 2910</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Local Server URL</td>
												                <td class="col-sm-5">Localhost location of local server URL</td>
												            </tr>

												             <tr>
												                <td class="col-sm-1">Max. SMS per Recipient</td>
												                <td class="col-sm-5">2</td>
												            </tr>

												            <tr>
												                <td class="col-sm-1">Max. Run Campaign per User</td>
												                <td class="col-sm-5">2</td>
												            </tr>
												        </tbody>
												    </table>    
									    	</div>  
					                	</div>
					            	</div>		

					            <h3 id="AdminUsers"> <strong> Admin Users </strong> </h3>
					            <div style="padding-left: 20px;"> <h4 id="AdminAddUsers"> <strong> Admin Add Users </strong> </h4> </div>
					            <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	 
     								<div class="span4">
						               	<div class="thumbnail">
						                  	<div class="caption"> 
			            						<ul>
			            							<li> Click Create button.</li> <br>
			            								<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminusers.png" style="width: 100%;"> </center> <br>            
								           	       			<table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Column</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">ID</td>
														                <td class="col-sm-5">ID number of admin user created.</td>
														            </tr>

														             <tr>
														                <td class="col-sm-1">First Name</td>
														                <td class="col-sm-5">Users given name.</td>
														            </tr>

														             <tr>
														                <td class="col-sm-1">Last Name</td>
														                <td class="col-sm-5">Users family Name.</td>
														            </tr>

														             <tr>
														                <td class="col-sm-1">Email </td>
														                <td class="col-sm-5">Email address of the created admin user.</td>
														            </tr>

														             <tr>
														                <td class="col-sm-1">Status</td>
														                <td class="col-sm-5">Active</td>
														            </tr>

														             <tr>
														                <td class="col-sm-1">Role</td>
														                <td class="col-sm-5">Admin</td>
														            </tr>

														             <tr>
														                <td class="col-sm-1">Action</td>
														                <td class="col-sm-5">Edit, Set Privileges, Set Actions and Delete</td>
														            </tr>
														        </tbody>
														    </table>

														    <table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Action</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Edit</td>
														                <td class="col-sm-5">You may edit your user info </td>
														            </tr>

														             <tr>
														                <td class="col-sm-1">Set Privileges</td>
														                <td class="col-sm-5">You may set pirivileges for the selected users</td>
														            </tr>

														             <tr>
														                <td class="col-sm-1">Set Actions</td>
														                <td class="col-sm-5">You may set actions for the selected users</td>
														            </tr>

														             <tr>
														                <td class="col-sm-1">Delete</td>
														                <td class="col-sm-5">You may delete users</td>
														            </tr>
														        </tbody>
														    </table>        
			            							<li> A window will pop-up for adding new user. </li> <br>
			            								<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adminadduser.png" style="width: 70%;"> </center> <br>
			            									<table class="table table-bordered">
							                					<thead>
														            <tr>
														                <th class="col-sm-2"><span>Parameter</span></th> 
														                <th class="col-sm-6"><span>Description</span></th>
														            </tr>
														        </thead>
														        <tbody>
														            <tr>
														                <td class="col-sm-1">Mobile</td>
														                <td class="col-sm-5"> <strong> Required </strong>. Input a valid mobile number. (e.		g., 639051111111)</td>
														            </tr>

														             <tr>
														                <td class="col-sm-1">First Name</td>
														                <td class="col-sm-5"><strong> Required </strong>. Users given name.</td>
														            </tr>

														             <tr>
														                <td class="col-sm-1">Last Name</td>
														                <td class="col-sm-5"><strong> Required </strong>.  Users last name.</td>
														            </tr>

														             <tr>
														                <td class="col-sm-1">Email </td>
														                <td class="col-sm-5"><strong> Required </strong>. Input a valid email address. It 		must be unique. </td>
														            </tr>

														             <tr>
														                <td class="col-sm-1">Password</td>
														                <td class="col-sm-5"><strong> Required </strong>. Must be at least consist of 6 		characters</td>
														            </tr>

														             <tr>
														                <td class="col-sm-1">Role</td>
														                <td class="col-sm-5">Admin</td>
														            </tr>
														        </tbody>
														    </table> 
													<li> Click Add User button.</li>	       
			            						</ul>
			            						
									    	</div>  
					                	</div>
					            	</div>	

					            <h4 id="AdminErrors"> <strong> Admin Errors </strong> </h4>  
					            <a type="button" class="btn btn-xs btn-primary" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>	
     								<div class="span4">
						               	<div class="thumbnail">
						                  	<div class="caption"> 
						                  		<table class="table table-bordered">
				                					<thead>
											            <tr>
											                <th class="col-sm-2"><span>Error</span></th> 
											                <th class="col-sm-6"><span>Description</span></th>
											            </tr>
											        </thead>
											        <tbody>
											            <tr>
											                <td class="col-sm-1">Success</td>
											                <td class="col-sm-5"> Desired input result. </td>
											            </tr>

											             <tr>
											                <td class="col-sm-1">Validation Errors</td>
											                <td class="col-sm-5">
											                    <li> Your request is incomplete and missing some mandatory parameters. </li>
												                <li> Error message for invalid email address and if the email is already taken.
																	User must input a valid email address and it must be unique.</li>
												                <li> Error message for adding an existing SMS Keyword/Textback Number/Sender ID.
																	Duplicates are not allowed.</li>
											                </td>
											            </tr>

											             <tr>
											                <td class="col-sm-1">Upload Errors</td>
											                <td class="col-sm-5">
											                	<li> No file selected. </li>
												                <li> User must select a file to be uploaded. User must select a file to be uploaded.</li>	
												                <li> The file type you are attempting to upload is not allowed.
																	User must upload a file in CSV format only. </li>
												            </td>
											            </tr>

											             <tr>
											                <td class="col-sm-1">Error Text</td>
											                <td class="col-sm-5">If an error occurred, this will explain in readable terms the error encountered. </td>
											            </tr>

											             <tr>
											                <td class="col-sm-1">Activated</td>
											                <td class="col-sm-5">Feature has been activated.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">De-activated</td>
											                <td class="col-sm-5">Feature has been de-activated.</td>
											            </tr>

											            <tr>
											                <td class="col-sm-1">Activation Error</td>
											                <td class="col-sm-5">Feature is already activated in the account.</td>
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