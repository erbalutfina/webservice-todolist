<!DOCTYPE html>
<html>
   
 <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="http://<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo base_url(); ?>/assets/css/ionicons.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo base_url(); ?>/assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <link href="http://<?php echo base_url(); ?>/assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo base_url(); ?>/assets/css/smoothness/jquery-ui-1.9.0.custom.css" rel="stylesheet" type="text/css" />

        <script src="http://<?php echo base_url(); ?>/assets/javascript/jquery-1.8.2.js"></script>
        <script src="http://<?php echo base_url(); ?>/assets/javascript/bootstrap.js" type="text/javascript"></script>
        <script src="http://<?php echo base_url(); ?>/assets/javascript/app.js" type="text/javascript"></script>
        <script src="http://<?php echo base_url(); ?>/assets/javascript/jquery-ui-1.9.0.custom.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="http://<?php echo base_url(); ?>/assets/javascript/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="http://<?php echo base_url(); ?>/assets/javascript/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    </head>

            <center>       
                <table>

                    <tr>
                             <a href="http://<?php echo base_url(); ?>index.php" title="Halaman Awal">
                                <span style="margin:0 3px 0 0;"><img src="http://<?php echo base_url(); ?>/assets/img/home.png" /></span>
                               
                                <span>Halaman Awal</span>
                            </a>
                    </tr>
                   <tr>
                            <a href="http://<?php echo base_url(); ?>index.php/todo" title="To Do List">
                                <span style="margin:0 3px 0 0;"><img src="http://<?php echo base_url(); ?>/assets/img/daftar.png" /></span>
                               
                                <span>To Do List</span>
                            </a>
                    </tr>
                    <tr>
                            <a href="http://<?php echo base_url(); ?>index.php/json" title="JSON To Do List">
                                <span style="margin:0 3px 0 0;"><img src="http://<?php echo base_url(); ?>/assets/img/output.png" /></span>
                                <span>JSON To Do List</span>
                            </a>
                    </tr>
                </table>
            </center>        
                

          <aside class="main-side">                
            <section class="content-header">
                <h3 >
                    <center> TO DO LIST </center>
                    <!--<?php echo $title;?>-->
                    
                </h3>
               
            </section>
            <section class="content">