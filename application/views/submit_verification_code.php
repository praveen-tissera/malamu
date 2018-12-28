<?php 
echo form_open('user/verifyPhoneNumber');  

$data = array(
    'type' => 'text',
    'name' => 'verification-code',
    'class' => 'form-control',
    'id' => 'from-place',
    'placeholder' => 'Verification Code',
    'required'=> 'required'
    );
    echo form_input($data);
echo form_submit('submit', 'Send', "class='btn btn-default btn-block'");
echo form_close();	


?>