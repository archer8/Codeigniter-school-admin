<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>King's Content Management System</title>
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->



        <!-- Styles --> 
        <!-- <link type="text/css" href="css/custom-theme/jquery-ui-1.8.16.custom.css" rel="stylesheet" /> -->
        <?php foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

        <?php endforeach; ?>
        <?php foreach ($js_files as $file): ?>

            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>
        <link href="<?php echo base_url("bootstrap/bootstrap.css"); ?>" rel="stylesheet">
        <style type="text/css">
            /* Override some defaults */
            html, body {
                background-color: #eee;
            }
            body {
                padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
            }
            .container > footer p {
                text-align: center; /* center align it with the container */
            }
            .container {
                width: 820px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
            }

            /* The white background content wrapper */
            .container > .content {
                background-color: #fff;
                padding: 20px;
                margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
                -webkit-border-radius: 0 0 6px 6px;
                -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
            }

            /* Page header tweaks */
            .page-header {
                background-color: #f5f5f5;
                padding: 20px 20px 10px;
                margin: -20px -20px 20px;
            }

            /* Styles you shouldn't keep as they are for displaying this base example only */
            .content .span10,
            .content .span4 {
                min-height: 500px;
            }
            /* Give a quick and non-cross-browser friendly divider */
            .content .span4 {
                margin-left: 0;
                padding-left: 19px;
                border-left: 1px solid #eee;
            }

            .topbar .btn {
                border: 0;
            }

        </style>
        <script type="text/javascript">
            $(document).ready(function(){
                $(oTable).dataTable({
                    "bPaginate": true,
                    "bRetrieve" : true,
                    "bSort": false
                }
                
            )
                oTable.fnDraw();
                
            })
        </script>

    </head>

    <body>

        <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="css/custom-theme/jquery.ui.1.8.16.ie.css"/>
        <![endif]-->

        <div class="topbar">
            <div class="fill">
                <div class="container">
                    <a class="brand" href="http://github.com/addyosmani/jquery-ui-bootstrap">King's Content Management System</a>
                    <ul class="nav">
                        <li class="active"><?php echo anchor('control/index', 'Home', 'Logout Page'); ?></li>
                        <li><?php echo anchor('control/database', 'Database', 'Logout Page'); ?></li>
                        <li><?php echo anchor('control/forms', 'Forms', 'Logout Page'); ?></li>
                        <li><?php echo anchor('control/test', 'test', 'test'); ?></li>
                        <li><?php echo anchor('admin/logout', 'Logout', 'Logout Page'); ?></li>
                    </ul>
                    <form action="" class="pull-right">
                    </form>
                </div>
            </div>
        </div>


        <div class="container">

            <div class="content">
                <div class="page-header">
                    <h1>King's School <small>Content Management System</small></h1>
                </div>
                <h2>TKS Supporters Group</h2>
                <?php echo $output; ?>
            </div>
        </div>


    </body>
</html>
