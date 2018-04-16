<!-- page content -->
<div class="right_col" role="main">
 <div class="">
		<div class="row">
   <div class="col-md-9 col-xs-12">
    <div class="x_panel">
    	<div class="x_content">

    		DATI DELLA SALA 
	          <?php if(isset($dati_sala)): ?>
	  
	            <p><?php echo $dati_sala[0]->nomesala ?> </p>
	            <p><?php echo $dati_sala[0]->dipartimento; ?> </p>
	            <p><?php echo $dati_sala[0]->descrizione; ?> </p>
	            <p><?php echo $dati_sala[0]->numeroposti; ?></p>
	    

	          <?php endif; ?> 

     	<div class="form-group">
       <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
       	<?php echo anchor('home/faiPrenotazione', 'Indietro', array('class' => 'btn btn-primary pull-right')); ?>

       </div>
      </div>
    	</div>
				</div>
			</div>
		</div>
	</div>
</div>
