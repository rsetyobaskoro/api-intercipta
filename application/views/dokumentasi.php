<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Apps</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="https://sitri.online/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="https://sitri.online/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="https://sitri.online/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://sitri.online/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="https://sitri.online/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="https://sitri.online/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <link href="https://sitri.online/assets/pages/css/blog.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="https://sitri.online/assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="https://sitri.online/assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="https://sitri.online/assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="https://sitri.online/assets/icon.png" /> </head>
    <!-- END HEAD -->

        <body class="page-container-bg-solid page-md">
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Dashboard
                                <small>Sistem Informasi</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
						<!-- BEGIN PAGE BREADCRUMBS -->
						<div class="page-content-inner">
                            <div class="m-heading-1 border-green m-bordered">
                                <!-- <h3>Catatan</h3> -->
                                <h2>Dokumentasi API</h2>
								<p><strong>Note:</strong> The <strong>data-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light ">
                                        <div class="portlet-body">
											<div class="panel-group" id="accordion">
												<!-- Start Parent -->
												<div class="heading">
													<h4>
														<a class="toggleEndpointList">Auth</a>
													</h4>
												</div>
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;auth/login</a>
														</h4>
													</div>
													<div id="collapse1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"email": "string",
	"password": "string"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"nik": "string",
	"nama": "string",
	"alamat": "string",
	"email": "string",
	"password": "string",
	"nohp": "string",
	"level": "admin/ pic/ tl/ fl/ client/ non_fl",
	"status_absen": "masuk/ keluar",
	"absen_today": "ya/ tidak",
	"id_shift": "int",
	"id_project_region": "int"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;auth/username_check</a>
														</h4>
													</div>
													<div id="collapse12" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"email": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Keluaran berupa status dengan keterangan email tersedia atau tidak.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Parent and Child -->
												<!-- Start Parent -->
												<div class="heading">
													<h4>
														<a class="toggleEndpointList">Admin</a>
													</h4>
												</div>
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;admin/user_data</a>
														</h4>
													</div>
													<div id="collapse2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"nik": "string",
	"nama": "string",
	"alamat": "string",
	"email": "string",
	"password": "string",
	"nohp": "string",
	"level": "admin/ pic/ tl/ fl/ client/ non_fl",
	"status_absen": "masuk/ keluar",
	"absen_today": "ya/ tidak",
	"id_shift": "int",
	"id_project_region": "int"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;admin/user_data?level={level}</a>
														</h4>
													</div>
													<div id="collapse3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"nik": "string",
	"nama": "string",
	"alamat": "string",
	"email": "string",
	"password": "string",
	"nohp": "string",
	"level": "admin/ pic/ tl/ fl/ client/ non_fl",
	"status_absen": "masuk/ keluar",
	"absen_today": "ya/ tidak",
	"id_shift": "int",
	"id_project_region": "int"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;admin/user_data</a>
														</h4>
													</div>
													<div id="collapse4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nik": "string",
	"nama": "string",
	"alamat": "string",
	"email": "string",
	"password": "string",
	"nohp": "string",
	"level": "admin/ pic/ tl/ fl/ client/ non_fl",
	"id_shift": "int",
	"id_region": "int"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;admin/user_data</a>
														</h4>
													</div>
													<div id="collapse5" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"nik": "string",
	"nama": "string",
	"alamat": "string",
	"email": "string",
	"nohp": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_user" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;admin/region</a>
														</h4>
													</div>
													<div id="collapse6" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama_region": "string",
	"provinsi": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse22" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;admin/region?id={id}</a>
														</h4>
													</div>
													<div id="collapse22" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama_region": "string",
	"provinsi": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;admin/region</a>
														</h4>
													</div>
													<div id="collapse8" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nama": "string",
	"prov": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;admin/region</a>
														</h4>
													</div>
													<div id="collapse10" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama": "string",
	"prov": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse27" aria-expanded="false" class="collapsed"><span class="label label-danger">DELETE</span>&nbsp;admin/region</a>
														</h4>
													</div>
													<div id="collapse27" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut atribut yang harus dipenuhi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;admin/outlet</a>
														</h4>
													</div>
													<div id="collapse11" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_outlet": "int",
	"nama_outlet": "string",
	"nama_region": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse24" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;admin/outlet?id_outlet={id_outlet}</a>
														</h4>
													</div>
													<div id="collapse24" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_outlet": "int",
	"nama_outlet": "string",
	"nama_region": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse31" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;admin/outlet</a>
														</h4>
													</div>
													<div id="collapse31" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nama": "string",
	"id_region": "int",
	"id_shift_pagi": "int",
	"id_shift_sore": "int"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse21" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;admin/outlet</a>
														</h4>
													</div>
													<div id="collapse21" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_outlet": "int",
	"nama": "string",
	"id_shift_pagi": "int",
	"id_shift_sore": "int"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_outlet" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse26" aria-expanded="false" class="collapsed"><span class="label label-danger">DELETE</span>&nbsp;admin/outlet</a>
														</h4>
													</div>
													<div id="collapse26" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut atribut yang harus dipenuhi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_outlet": "int"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse20" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;admin/shift</a>
														</h4>
													</div>
													<div id="collapse20" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama_shift": "string",
	"jam_masuk": "HH:ii:ss",
	"jam_keluar": "HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse19" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;admin/shift?id={id}</a>
														</h4>
													</div>
													<div id="collapse19" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama_shift": "string",
	"jam_masuk": "HH:ii:ss",
	"jam_keluar": "HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;admin/shift</a>
														</h4>
													</div>
													<div id="collapse18" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nama": "string",
	"jam_masuk": "HH:ii:ss",
	"jam_keluar": "HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;admin/shift</a>
														</h4>
													</div>
													<div id="collapse17" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama": "string",
	"jam_masuk": "HH:ii:ss",
	"jam_keluar": "HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse25" aria-expanded="false" class="collapsed"><span class="label label-danger">DELETE</span>&nbsp;admin/shift</a>
														</h4>
													</div>
													<div id="collapse25" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut atribut yang harus dipenuhi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;admin/project</a>
														</h4>
													</div>
													<div id="collapse7" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_project": "int",
	"pic": "string",
	"client": "string",
	"kode_project": "string",
	"nama_project": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse32" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;admin/project?id_project={id_project}</a>
														</h4>
													</div>
													<div id="collapse32" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_project": "int",
	"pic": "string",
	"client": "string",
	"kode_project": "string",
	"nama_project": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse29" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;admin/project</a>
														</h4>
													</div>
													<div id="collapse29" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nik_pic": "string",
	"nik_client": "string",
	"kode_project": "string",
	"nama_project": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>NIK PIC ataupun NIK Client bisa diambil dari <b>user data</b></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse30" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;admin/project</a>
														</h4>
													</div>
													<div id="collapse30" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_project": "int",
	"nik_pic": "string",
	"nik_client": "string",
	"kode_project": "string",
	"nama_project": "string",
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_project" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse28" aria-expanded="false" class="collapsed"><span class="label label-danger">DELETE</span>&nbsp;admin/project</a>
														</h4>
													</div>
													<div id="collapse28" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut atribut yang harus dipenuhi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_project": "int"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Parent -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse33" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;admin/project_region</a>
														</h4>
													</div>
													<div id="collapse33" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama_project": "string",
	"nama_region": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse34" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;admin/project_region?id_project_region={id_project_region}</a>
														</h4>
													</div>
													<div id="collapse34" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama_project": "string",
	"nama_region": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse35" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;admin/project_region</a>
														</h4>
													</div>
													<div id="collapse35" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"id_project_region": "int"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_user" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Parent and Child-->
												<!-- Start Parent -->
												<div class="heading">
													<h4>
														<a class="toggleEndpointList">Team Leader</a>
													</h4>
												</div>
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;team_leader/absent</a>
														</h4>
													</div>
													<div id="collapse9" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nik": "string",
	"nama": "string",
	"tanggal_absensi": "YYYY-mm-dd HH:ii:ss",
	"image": "string",
	"lat": "string",
	"long": "string"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse23" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;team_leader/absent_done</a>
														</h4>
													</div>
													<div id="collapse23" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_absen": "int",
	"id_user": "int",
	"tanggal_absen_done": "YYYY-mm-dd"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse48" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;team_leader/report?id_tl={id_user}</a>
														</h4>
													</div>
													<div id="collapse48" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_laporan": "int",
	"tgl_laporan": "YYYY-mm-dd HH:ii:ss",
	"tipe_laporan": "sendiri/ kompetitor",
	"foto_kondisi": "string",
	"keterangan": "string",
	"lat": "string",
	"lng": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse47" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;team_leader/report??id_tl={id_user}&id_laporan={id_laporan}</a>
														</h4>
													</div>
													<div id="collapse47" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_laporan": "int",
	"tgl_laporan": "YYYY-mm-dd HH:ii:ss",
	"tipe_laporan": "sendiri/ kompetitor",
	"foto_kondisi": "string",
	"keterangan": "string",
	"lat": "string",
	"lng": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse46" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;team_leader/report</a>
														</h4>
													</div>
													<div id="collapse46" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"tgl_laporan": "YYYY-mm-dd HH:ii:ss",
	"id_user": "int",
	"tipe_laporan": "sendiri/ kompetitor",
	"foto_kondisi": "string",
	"keterangan": "string",
	"lat": "string",
	"lng": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Untuk foto kondisi berupa string <b>base64</b> dari sebuah foto, dan tipe data yang dibolehkan dari foto yang akan diupload adalah <b>.jpg</b></li>
																	<!-- <li>Kode kelompok, diambil dari tabel kelompok</li> -->
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse45" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;team_leader/report</a>
														</h4>
													</div>
													<div id="collapse45" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_laporan": "int",
	"tgl_laporan": "YYYY-mm-dd HH:ii:ss",
	"id_user": "int",
	"tipe_laporan": "sendiri/ kompetitor",
	"foto_kondisi": "string",
	"keterangan": "string",
	"lat": "string",
	"lng": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_laporan" digunakan sebagai parameter untuk mengubah data lain.</li>
																	<li>Untuk foto kondisi, persyaratan sama dengan method <b>POST</b></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse44" aria-expanded="false" class="collapsed"><span class="label label-danger">DELETE</span>&nbsp;team_leader/report</a>
														</h4>
													</div>
													<div id="collapse44" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut atribut yang harus dipenuhi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_laporan": "int"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Parent and Child-->
												<!-- Start Parent -->
												<div class="heading">
													<h4>
														<a class="toggleEndpointList">PIC</a>
													</h4>
												</div>
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse36" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;pic/project?nik_pic={nik_pic}</a>
														</h4>
													</div>
													<div id="collapse36" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_project": "int",
	"client": "string",
	"kode_project": "string",
	"nama_project": "string",
	"jumlah_region": "int",
	"region_complete": "int"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse37" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;pic/project?nik_pic={nik_pic}&kode_project={kode_project}</a>
														</h4>
													</div>
													<div id="collapse37" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																		<code>
{
    "data_utama": [
        {
            "id_project": "int",
            "client": "string",
            "kode_project": "string",
            "nama_project": "string",
            "jumlah_region": "int",
            "region_complete": "int"
        }
    ],
    "data_detail": [
        {
            "id_project_region": "int",
            "nama_region": "string",
            "nama_tl": "string",
            "jumlah_outlet": "int",
            "id_region": "int"
        }
    ]
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Array data detail bisa memiliki lebih dari 1 nilai.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse41" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;pic/project_region</a>
														</h4>
													</div>
													<div id="collapse41" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"kode_project": "string",
	"id_region": "int"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse40" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;pic/project_region</a>
														</h4>
													</div>
													<div id="collapse40" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_project_region": "int",
	"kode_project": "string",
	"id_region": "int",
	"id_tl": "int"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_project_region" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse38" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;pic/project_region?id_project_region={id_project_region}</a>
														</h4>
													</div>
													<div id="collapse38" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																		<code>
{
    "data_utama": [
        {
            "id_project_region": "int",
            "kode_project": "string",
            "nama_project": "string",
            "nama_region": "string",
            "nama_tl": "string"
        }
    ],
    "data_outlet": [
        {
            "id_outlet": "int",
            "nama_outlet": "string",
            "jumlah_fl": "int"
        }
    ]
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Array data outlet bisa memiliki lebih dari 1 nilai.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse39" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;pic/outlet?id_outlet={id_outlet}</a>
														</h4>
													</div>
													<div id="collapse39" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																		<code>
{
    "data_utama": [
        {
            "id_outlet": "int",
            "nama_outlet": "string",
            "nama_tl": "string"
        }
    ],
    "data_fl": [
        {
            "nama_fl": "string",
            "nama_shift": "string"
        }
    ]
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Array data front liner outlet bisa memiliki lebih dari 1 nilai.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse42" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;pic/outlet2?id_outlet={id_outlet}</a>
														</h4>
													</div>
													<div id="collapse42" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																		<code>
{
	"id": "int",
	"nama_fl": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Array data front liner outlet bisa memiliki lebih dari 1 nilai.</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse43" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;pic/team_leader?id_region={id_region}</a>
														</h4>
													</div>
													<div id="collapse43" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																		<code>
{
	"id_user": "int",
	"nama": "string"																					"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Array data front liner outlet bisa memiliki lebih dari 1 nilai.</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Parent and Child -->
												<!-- Start Parent -->
												<div class="heading">
													<h4>
														<a class="toggleEndpointList">Front Liner</a>
													</h4>
												</div>
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;front_liner/absent</a>
														</h4>
													</div>
													<div id="collapse13" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nik": "string",
	"nama": "string",
	"tanggal_absensi": "YYYY-mm-dd HH:ii:ss",
	"image": "string",
	"lat": "string",
	"long": "string"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;front_liner/absent_done</a>
														</h4>
													</div>
													<div id="collapse14" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_absen": "int",
	"id_user": "int",
	"tanggal_absen_done": "YYYY-mm-dd"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Parent and Child -->
												<!-- Start Parent -->
												<div class="heading">
													<h4>
														<a class="toggleEndpointList">Non Front Liner</a>
													</h4>
												</div>
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;non_front_liner/absent</a>
														</h4>
													</div>
													<div id="collapse15" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nik": "string",
	"nama": "string",
	"tanggal_absensi": "YYYY-mm-dd HH:ii:ss",
	"image": "string",
	"lat": "string",
	"long": "string"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;non_front_liner/absent_done</a>
														</h4>
													</div>
													<div id="collapse16" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_absen": "int",
	"id_user": "int",
	"tanggal_absen_done": "YYYY-mm-dd"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Parent and Child -->
											</div>
                                        </div>
                                    </div>
                                    <!-- END EXAMPLE TABLE PORTLET-->
                                </div>
                            </div>
						</div>
					<!-- END PAGE CONTENT INNER -->
					</div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
		<!-- BEGIN PRE-FOOTER -->
        <div class="page-prefooter">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>
        <!-- END PRE-FOOTER -->
        <!-- BEGIN INNER FOOTER -->
        <div class="page-footer">
            <div class="container">© 2015-2019, Intercipta Corp
            </div>
        </div>
        <div class="scroll-to-top">
		<img src='http://icons.iconarchive.com/icons/custom-icon-design/pretty-office-5/256/navigate-up-icon.png' width='20%' />
        </div>
        <!-- END FOOTER -->
        <script src="https://sitri.online/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="https://sitri.online/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://sitri.online/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="https://sitri.online/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="https://sitri.online/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="https://sitri.online/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="https://sitri.online/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
		<script src="https://sitri.online/assets/global/scripts/app.min.js" type="text/javascript"></script>
		<!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="https://sitri.online/assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="https://sitri.online/assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="https://sitri.online/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>