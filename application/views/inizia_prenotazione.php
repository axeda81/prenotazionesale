<!-- page content -->
<div class="right_col" role="main">
 <div class="">
		<div class="row">
   <div class="col-md-9 col-xs-12">
    <div class="x_panel">
    	<div class="x_content">
     	<?php echo form_open('gestioneutenti/crea_nuovo_utente', array('class' => 'form-horizontal form-label-left')); ?>
      <div class="form-group">
      	<?php echo form_label('Nome', 'nome', array('class' => 'control-label col-md-1 col-sm-1 col-xs-12')); ?>
       <div class="col-md-9 col-sm-9 col-xs-12">                   
								<?php echo form_input(array('type' => 'text', 'class'=>'form-control', 'id' => 'nome', 'name' => 'nome', "required" => "required")); ?>
       </div>
      </div>
     	<div class="ln_solid"></div>
    			<?php 
      		if(isset($messaggioerrore)) {
      			echo '<div class="row">';
        	echo '<div class="col-md-6 alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ';
        	echo $messaggioerrore;
        	echo validation_errors('<p class="error">');
        	echo '</p></div></div>';
      		} 
    			?>
      <div class="form-group">
       <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
        	<?php echo form_submit('submit', 'Salva', array('class' => 'btn btn-success submit pull-right')); ?>
									<?php echo anchor('home', 'Indietro', array('class' => 'btn btn-primary pull-right')); ?>
        	<?php echo form_close(); ?>
      	</div>
     	</div>
    	</div>
				</div>
			</div>
		</div>
	</div>
</div>
