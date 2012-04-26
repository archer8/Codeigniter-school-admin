<html>
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
        <style>
            label 
            {
                display: block;
            }
            .errors 
            {
                color: red;
            }
        </style>
    </head>
    <body>
        
        //directs it to itself
        <h1>Login Form</h1>
        <?php echo form_open('admin'); ?>
        <p>
            <?php 
                echo form_label('Email Address: ', 'email');
                echo form_input('email', set_value('email'), 'id="email"');
            ?>
        </p>
         <p>
            <?php 
                echo form_label('Password:', 'password');
                echo form_password('password', '', 'id="password"');
            ?>
        </p>
        <?php
            echo form_submit('submit','Login');
            echo form_close();
        ?>
        
        <div class="errors"><?php echo validation_errors(); ?></div>
    </body>
</html>