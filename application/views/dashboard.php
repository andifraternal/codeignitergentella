<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Roving</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>assets/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
	<link href="<?php echo base_url() ?>assets/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
	
    <link href="<?php echo base_url() ?>assets/gentelella/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url() ?>assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url() ?>assets/gentelella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="<?php echo base_url() ?>assets/gentelella/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/gentelella/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/gentelella/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="<?php echo base_url() ?>assets/gentelella/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/gentelella/vendors/cropper/dist/cropper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/gentelella/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>assets/gentelella/build/css/custom.min.css" rel="stylesheet">






	


  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"><i class="fa fa-asterisk"></i> <span></span></a>
            </div>

            <div class="clearfix"></div>

            

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
			 </div>
              <!-- <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div> -->

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small ">
             
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                

                <li role="presentation" class="dropdown">
                  <a href="<?php echo base_url() ?>index.php/auth/logout" class="dropdown-toggle info-number" >
                   Logout
                    
                  </a>
                  
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <?php echo $contents; ?>
        
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Copyright IT Hwaseung, all right reserved</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>assets/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>assets/gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url() ?>assets/gentelella/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url() ?>assets/gentelella/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url() ?>assets/gentelella/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="<?php echo base_url() ?>assets/gentelella/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="<?php echo base_url() ?>assets/gentelella/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <!-- jquery.inputmask -->
    <script src="<?php echo base_url() ?>assets/gentelella/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- jQuery Knob -->
    <script src="<?php echo base_url() ?>assets/gentelella/vendors/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- Cropper -->
    <script src="<?php echo base_url() ?>assets/gentelella/vendors/cropper/dist/cropper.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url() ?>assets/gentelella/build/js/custom.min.js"></script>


	<script src="<?php echo base_url() ?>assets/gentelella/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>









	






	
    
    <!-- Initialize datetimepicker -->
<script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY',
        autoClose: true
    });

    $('#monthpicker').datepicker({
			format: 'yyyy-mm',
			viewMode: "months",
			minViewMode: "months",
			autoClose: true
		})

    $('#datepicker').datepicker({
			autoclose: true,
			format: 'yyyy-mm-dd'
		})

	$('#datepicker2').datepicker({
			autoclose: true,
			format: 'yyyy-mm-dd'
		})
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });




	$('#celluser10').hide();
	$('#celluser20').hide();
	$('#celluser30').hide();
	$('#celluser40').hide();
	$('#celluser50').hide();

	$( "#levelid" ).change(function() {
		// $('#row_dim').hide(); 
		// $('#type').change(function(){
			if($('#levelid').val() == '1') {
				// $('#row_dim').show(); 
				$('#celluser10').show();
				$('#celluser20').show();
				$('#celluser30').show();
				$('#celluser40').show();
				$('#celluser50').show();
			} else if($('#levelid').val() == '2') {
				$('#celluser10').hide();
				$('#celluser20').hide();
				$('#celluser30').hide();
				$('#celluser40').hide();
				$('#celluser50').hide();
			} else if($('#levelid').val() == '3') {
				$('#celluser10').hide();
				$('#celluser20').hide();
				$('#celluser30').hide();
				$('#celluser40').hide();
				$('#celluser50').hide();
			} else if($('#levelid').val() == '0') {
				$('#celluser10').hide();
				$('#celluser20').hide();
				$('#celluser30').hide();
				$('#celluser40').hide();
				$('#celluser50').hide();
			} 
		// });
	});


      $( "#c_cutting_board" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_ccb/'); ?>"+$('#id_roving').val()+"/"+$('#c_cutting_board').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#iccb').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#c_cutting_dies" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_ccd/'); ?>"+$('#id_roving').val()+"/"+$('#c_cutting_dies').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#iccd').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#c_warna_material" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_cwm/'); ?>"+$('#id_roving').val()+"/"+$('#c_warna_material').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#icwm').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#c_ketebalan_material" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_ckm/'); ?>"+$('#id_roving').val()+"/"+$('#c_ketebalan_material').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#ickm').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#c_hasil_cutting" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_chc/'); ?>"+$('#id_roving').val()+"/"+$('#c_hasil_cutting').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#ichc').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#c_skyfing" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_csb/'); ?>"+$('#id_roving').val()+"/"+$('#c_skyfing').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#icsb').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#c_size_label" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_cpsl/'); ?>"+$('#id_roving').val()+"/"+$('#c_size_label').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#icpsl').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#s_pemasangan_sepatu" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_spsm/'); ?>"+$('#id_roving').val()+"/"+$('#s_pemasangan_sepatu').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#ispsm').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#s_jahitan_kendor" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_sjk/'); ?>"+$('#id_roving').val()+"/"+$('#s_jahitan_kendor').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#isjk').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#s_jarak_tepi" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_sjt/'); ?>"+$('#id_roving').val()+"/"+$('#s_jarak_tepi').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#isjt').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#s_upper_rusak" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_sur/'); ?>"+$('#id_roving').val()+"/"+$('#s_upper_rusak').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#isur').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#s_miring" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_sm/'); ?>"+$('#id_roving').val()+"/"+$('#s_miring').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#ism').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});



		$( "#s_pemasangan_tongue" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_spt/'); ?>"+$('#id_roving').val()+"/"+$('#s_pemasangan_tongue').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#ispt').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#s_collar_lining" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_sclk/'); ?>"+$('#id_roving').val()+"/"+$('#s_collar_lining').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#isclk').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});



		$( "#s_kebersihan_upper" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_skubp/'); ?>"+$('#id_roving').val()+"/"+$('#s_kebersihan_upper').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#iskubp').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#s_pounching" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_sp/'); ?>"+$('#id_roving').val()+"/"+$('#s_pounching').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#isp').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#a_pasang_heel" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_aphc/'); ?>"+$('#id_roving').val()+"/"+$('#a_pasang_heel').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#iaphc').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});



		$( "#a_press" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_apb/'); ?>"+$('#id_roving').val()+"/"+$('#a_press').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#iapb').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#a_miring" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_am/'); ?>"+$('#id_roving').val()+"/"+$('#a_miring').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#iam').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});



		$( "#a_quarter" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_aqk/'); ?>"+$('#id_roving').val()+"/"+$('#a_quarter').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#iaqk').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});

		$( "#a_side_lasting" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_aslp/'); ?>"+$('#id_roving').val()+"/"+$('#a_side_lasting').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#iaslp').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#a_tinggi_rendah_belakang" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_atrb/'); ?>"+$('#id_roving').val()+"/"+$('#a_tinggi_rendah_belakang').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#iatrb').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#a_bufing_tidak_pas" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_abtpp/'); ?>"+$('#id_roving').val()+"/"+$('#a_bufing_tidak_pas').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#iabtpp').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});

		$( "#a_over_lem" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_aol/'); ?>"+$('#id_roving').val()+"/"+$('#a_over_lem').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#iaol').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#a_less_cementing" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_alc/'); ?>"+$('#id_roving').val()+"/"+$('#a_less_cementing').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#ialc').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});

		$( "#a_beda_warna" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_abw/'); ?>"+$('#id_roving').val()+"/"+$('#a_beda_warna').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#iabw').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});


		$( "#a_bonding_pas_pola" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_abpp/'); ?>"+$('#id_roving').val()+"/"+$('#a_bonding_pas_pola').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#iabpp').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});

		$( "#a_kebersihan_upper" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_akubp/'); ?>"+$('#id_roving').val()+"/"+$('#a_kebersihan_upper').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#iakubp').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});

		$( "#a_packing" ).click(function() {
		$.ajax({
				url : "<?php echo site_url('roving_qc/input_data_ap/'); ?>"+$('#id_roving').val()+"/"+$('#a_packing').val()+"/"+$('#cell').val(),
				success : function(o) {
				console.log(o)
					// do something
					if(o.status=='ok'){
					var data = o.data
					$('#iap').val(data.jumlah_data)
					}
					else{
					alert(o.msg)
					}
				},
				error : function(data) {
					// do something
					console.log(data)
				}
			});
		});

		// $( "#add_cutting" ).click(function() {
		// // $.ajax({
		// // 		url : "+$('#tanggal').val()+"/"+$('#c_cutting_mechine').val()+"/"+$('#c_model').val()+"/"+$('#c_componen').val()+"/"+$('#c_sizecheck').val()+"/"+$('#c_cutting_die').val()+"/"+$('#c_remark').val(),
		// // 		success : function(o) {
		// // 		console.log($('#c_cutting_mechine').val())
		// // 			// do something
		// // 			if(o.status=='ok'){
		// // 			var data = o.data
		// // 			$('#iccb').val(data.jumlah_data)
		// // 			}
		// // 			else{
		// // 			alert(o.msg)
		// // 			}
		// // 		},
		// // 		error : function(data) {
		// // 			// do something
		// // 			console.log(data)
		// // 		}
		// // 	});

		// console.log($('#c_cutting_mechine').val())
		// });



</script>
  </body>
</html>
