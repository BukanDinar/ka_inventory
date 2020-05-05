<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Elements | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
  <link href="js/morris/morris-0.4.3.min.css" rel="stylesheet" />
  <link href="js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

	<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>-->
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
 <section class="panel">
              <header class="panel-heading">
                Modal Dialogs
              </header>
              <div class="panel-body">
                <a class="btn btn-success" data-toggle="modal" href="#myModal">
                                  Dialog
                              </a>
                <a class="btn btn-warning" data-toggle="modal" href="#myModal2">
                                  Confirm
                              </a>
                <a class="btn btn-danger" data-toggle="modal" href="#myModal3">
                                  Alert !
                              </a>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Modal Tittle</h4>
                      </div>
                      <div class="modal-body">

                        Body goes here...

                      </div>
                      <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- modal -->
                <!-- Modal -->
                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Modal Tittle</h4>
                      </div>
                      <div class="modal-body">

                        Body goes here...

                      </div>
                      <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-warning" type="button"> Confirm</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- modal -->
                <!-- Modal -->
                <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Modal Tittle</h4>
                      </div>
                      <div class="modal-body">

                        Body goes here...

                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-danger" type="button"> Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- modal -->

              </div>
            </section>
            <section class="panel">
              <div id="c-slide" class="carousel slide auto panel-body">
                <ol class="carousel-indicators out">
                  <li class="active" data-slide-to="0" data-target="#c-slide"></li>
                  <li class="" data-slide-to="1" data-target="#c-slide"></li>
                  <li class="" data-slide-to="2" data-target="#c-slide"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item text-center active">
                    <h3>Creative is new model of Admin</h3>
                    <small class="">Based on Bootstrap 3</small>
                  </div>
                  <div class="item text-center">
                    <h3>Massive UI Elements</h3>
                    <small class="">Fully Responsive</small>
                  </div>
                  <div class="item text-center">
                    <h3>Well Documentation</h3>
                    <small class="">Easy to Use</small>
                  </div>
                </div>
                <a data-slide="prev" href="#c-slide" class="left carousel-control">
                                  <i class="arrow_carrot-left_alt2"></i>
                              </a>
                <a data-slide="next" href="#c-slide" class="right carousel-control">
                                  <i class="arrow_carrot-right_alt2"></i>
                              </a>
              </div>
            </section>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Barang
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="myTable">
                                    <thead>
                                        <tr align="center" style="font-weight: bold;">
                                            <td>No</td>
                                            <td>Nama Barang</td>
                                            <td>Stock</td>
                                            <td>Stock Min</td>
                                            <td>Harga Jual</td>
                                            <td>Harga Beli</td>
                                            <td>Diskon</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>

<?php
include ("konek.php");
$sql = "SELECT * FROM tabel_barang ORDER BY nama_barang";
        $query = mysqli_query($db, $sql);
        $no = 1;

        while($mhs = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>".$mhs['nama_barang']."</td>";
            echo "<td>".$mhs['stock']."</td>";  
            echo "<td>".$mhs['stockmin']."</td>";  
            echo "<td>".$mhs['harga_jual']."</td>";  
            echo "<td>".$mhs['harga_beli']."</td>";
            echo "<td>".$mhs['disk']."</td>";    
            echo "<td>";
            echo "<a href='admin.php?page=editbarang&kode_barang=".$mhs['kode_barang']."'>Edit</a> | ";
            echo "<a href='hapus-barang.php?kode_barang=".$mhs['kode_barang']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
            $no++;
           
        }
        
        ?>


                                  </tbody>
                                          </th>

                                        </tr>
                                </table>
                            </div>
<!-- MODALS START -->
                            <div class="panel panel-default">
                        <div class="panel-body">
                            <nav>
                            <a class="btn btn-success btn-4x" href="?page=tambahbarang">
                              <i class="glyphicon glyphicon-plus">Tambah Barang</i>
                            </a>
                        </nav>
                        </div>
                        
                    </div>
                    </div>
                </div>
</div>
<!-- JQUERY SCRIPTS -->
<script src="js/dataTables/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
<script src="js/dataTables/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
<script src="js/dataTables/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
<script src="js/dataTables/custom.js"></script>
        </body>
        </html>