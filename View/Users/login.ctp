<div class="">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User',array('class'=>'form-control')); ?>
    <fieldset>
        <legend><?php echo __('Por favor ingrese su correo y password'); ?></legend>
        <?php echo $this->Form->input('email',array('label'=>"Correo",'placeholder'=>'Correo'));
        echo $this->Form->input('password',array('label'=>"Password",'placeholder'=>'Password'));
    ?>
    <?php echo $this->Form->end(__('Login')); ?>
    <strong>Correo:admin@admin.com</strong><br />
    <strong>Password:adminadmin</strong>
    </fieldset>

</div>
