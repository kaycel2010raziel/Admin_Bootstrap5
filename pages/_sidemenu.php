<?php

function get_sidemenu_admin(){
	echo '
		<ul class="sidebar-nav">
			<li class="sidebar-header">
				Pages
			</li>
			<li class="sidebar-item active">
				<a class="sidebar-link" href="index.html">
					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="pages-profile.html">
					<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="pages-sign-in.html">
					<i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="pages-sign-up.html">
					<i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="pages-blank.html">
					<i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
				</a>
			</li>
		</ul>
	';
}




function header_style(){
	echo '	<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
			<meta name="author" content="AdminKit">
			<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
			
			<link rel="preconnect" href="https://fonts.gstatic.com">
			<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
			<title>Bootstrap 5 Admin Template</title>
			<link href="css/app.css" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">	
			
			<script src="plugins/jquery/jquery_tower.min.js"></script>
			<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
			<link rel="stylesheet" href="plugins/datatables/datatables.css">
			<!-- fullCalendar -->
			<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
			<link rel="stylesheet" href="plugins/timepicker/jquery.timepicker.css">
			<link rel="stylesheet" href="plugins/fullcalendar/3.10.0/fullcalendar.css">
			<link rel="stylesheet" href="plugins/select2/css/select2.css">
			<link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.css">
			<link rel="stylesheet" href="plugins/fpdf/fpdf.css">
			<link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
			
			';
}
function Footer_style(){
	echo '<div class="container-fluid">
				<div class="row text-muted">
					<div class="col-6 text-start">
						<p class="mb-0">
							<a class="text-muted" href="#" target="_blank"><strong>AdminKit Demo</strong></a> &copy;
						</p>
					</div>
					<div class="col-6 text-end">
						<ul class="list-inline">
							<li class="list-inline-item">
								<a class="text-muted" href="#" target="_blank">Support</a>
							</li>
							<li class="list-inline-item">
						</ul>
					</div>
				</div>
			</div>';
	
}

function library(){
	echo '	<!-- jQuery -->
			<script src="plugins/jquery/jquery.min.js"></script>
			<script src="plugins/html2canvas/html2canvas.min.js"></script>
			<script src="plugins/html2canvas/html2canvas.js"></script>
			<script src="plugins/daterangepicker/moment.min.js"></script>
			<script type="text/javascript" src="plugins/datatables/datatables.min.js"></script>
			<!-- Bootstrap -->
			<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
			<!-- jQuery UI -->
			<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
			<!-- fullCalendar 2.2.5 -->
			<script src="plugins/select2/js/select2.js"></script>
			<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
			<script src="plugins/daterangepicker/daterangepicker.js"></script>
			<script src="plugins/timepicker/jquery.timepicker.js"></script>
			<script src="plugins/fullcalendar/moment.min.js"></script>
			<script src="plugins/fullcalendar/3.10.0/fullcalendar.js"></script>
			<script src="plugins/fullcalendar/3.10.0/locale/es.js"></script>
			<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
			
			';
}

function Modals(){
	echo '<!-- GENERIC MODAL LG-->
			<div class="modal fade" id="lg_modal" tabindex="-1" role="dialog" aria-labelledby="lg_modal_title" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="lg_modal_title"></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body size-limit" id="lg_modal_content"></div>
						<div class="modal-footer" id="lg_modal_footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							<button type="button" class="btn btn-success" id="lg_modal_apply_button" ></button>
						</div>
					</div>
				</div>
			</div>			
			<!-- GENERIC MODAL XL-->
			<div class="modal fade" id="xl_modal" tabindex="-1" role="dialog" aria-labelledby="xl_modal_title" aria-hidden="true">
				<div class="modal-dialog modal-xl" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="xl_modal_title"></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body" id="xl_modal_content"></div>
						<div class="modal-footer" id="xl_modal_footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							<button type="button" class="btn btn-success" id="xl_modal_apply_button" ></button>
						</div>
					</div>
				</div>
			</div>
			<!-- GENERIC MODAL SM-->
			<div class="modal fade" id="sm_modal" tabindex="-1" role="dialog" aria-labelledby="sm_modal_title" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="sm_modal_title"></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body size-limit" id="sm_modal_content"></div>
						<div class="modal-footer" id="sm_modal_footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							<button type="button" class="btn btn-success" id="sm_modal_apply_button" ></button>
						</div>
					</div>
				</div>
			</div>
			';
}

function get_side_logout(){
	echo ' 
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
		<div class="dropdown-menu text-center" aria-labelledby="dropdownMenu2">
			<a style="display: block;" class="btn btn-primary m-1 px-1" href="../password_change.php">Cambiar Contrase??a</a>
			<a style="display: block;" class="btn btn-danger m-1  px-1" href="../logout.php">Cerrar Sesi??n</a>
		</div>';
}