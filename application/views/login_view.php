<html>
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>" />
    </head>
    <body>
        <div class="header-bar">
        </div>
        <div class="login">
            <div class="login-box">
                <h2>Sign In</h2>
                <?php echo form_open('admin'); ?>

                <?php
                echo form_label('Username', 'name');
                echo form_input('name', set_value('name'), 'id="name"');
                ?>

                <?php
                echo form_label('Password', 'password');
                echo form_password('password', '', 'id="password"');
                ?>

                <?php
                echo form_submit('submit', 'Login', 'class="button"');
                echo form_close();
                ?>
            </div>
        </div>
        <div class="errors"><?php echo validation_errors(); ?></div>
    </body>
</html>