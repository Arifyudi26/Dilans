  				<!DOCTYPE html>
				<html lang="en">

                <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
                <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <base href="<?php echo base_url();?>"/>
                <link rel="icon" href="<?php echo base_url('assets/img/icon_puskes.png')?>">
                <title>Selamat datang...</title>
                <!-- Global stylesheets -->
                <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
                <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
                <link href="assets/css/core.css" rel="stylesheet" type="text/css">
                <link href="assets/css/components.css" rel="stylesheet" type="text/css">
                <link href="assets/css/colors.css" rel="stylesheet" type="text/css">
                <!-- /global stylesheets -->

                <!-- Core JS files -->
				<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
				<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
				<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
				<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
                <!-- /core JS files -->

                <!-- Theme JS files -->
				<szcript type="text/javascript" src="assets/js/core/app.js"></script>
                <!-- /theme JS files -->

                </head>

                <body class="login-container">
                  

                      <div class="row text-center ">
                        <div class="col-md-12">
                         <h2><img src="<?php echo base_url('assets/logo2.png');?>" width="130px"></h2>
                        </div>
                       </div>
                     

					<div class="row ">
					  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
						<div class="panel-heading" align="center">
						<strong>Dilans Security System</strong>
                
                    </div>
					<div class="panel-body">

                    <form action="" method="post">
                    <?php
				    echo $this->session->flashdata('msg');
					?>
                       <br />
                    <div class="form-group input-group">
                     <span class="input-group-addon"><i class="icon-user text-muted"></i></span>
                     <input type="text" name="username" class="form-control" required maxlength="15" placeholder="Username " />                      
                    </div>
                     <div class="form-group input-group">
                     <span class="input-group-addon"> <i class="icon-lock2 text-muted"  ></i></span>
                      <input type="password" name="password" class="form-control" required maxlength="15"  placeholder="Password" />
                    </div>
             
 
                    <button type="submit" name="btnlogin"  class="btn btn-primary">Masuk <i class="icon-circle-right2 position-right"></i></button>
                    <input type="reset" name="reset" value="Reset" class="btn btn-default">
                   
                     
                     <div class="text-center">
                     <br />
                     <a href="web/lupa_password">Lupa Password??</a>
                     </div>
						            		
              </form>
             </div>
            </div>
           </div>
       

					<!-- Footer -->
					<div class="footer text-muted text-center">
						&copy; 2020. <a href="">Puskesmas Sawah Besar</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
 </body>
</html>
