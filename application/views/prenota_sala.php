<!-- page content -->
<div class="right_col" role="main">
 <div class="">
		<div class="row">
   <div class="col-md-9 col-xs-12">
    <div class="x_panel">
    	<div class="row">
    		<div class="col-md-4 col-xs-3">
		    	<div class="x_title">
		    		<?php if(isset($dati_sala)): ?>
		    		<h2><?php echo $dati_sala[0]->nomesala ?></h2>
		    		<div class="clearfix"></div>
		    	</div>
		    	<div class="x_content">
		    		<div class="table-responsive">
		    			<table class="table table-bordered">
										<tr>
	          <td><strong>Dove si trova </strong></td>
	          <td><?php echo $dati_sala[0]->dipartimento; ?> </td>
	         </tr>
										<tr>
	          <td><strong>Informazioni </strong></td>
	          <td><?php echo $dati_sala[0]->descrizione; ?> </td>
	         </tr>
										<tr>
	          <td><strong>Posti a sedere </strong></td>
	          <td><?php echo $dati_sala[0]->numeroposti; ?> </td>
	         </tr>	 
										<tr>
	          <td><strong>Servizi disponibili </strong></td>
	          <td><?php if(isset($servizi)) : foreach($servizi as $row): ?>
	          	<?php echo $row->servizio.'</br>'; ?>
	          	<?php endforeach; ?>
			     				<?php else: echo "-";?>
				     			<?php endif; ?> 
	          </td>
	         </tr>	 			     	
			     	</table>
			     	<?php else: echo "Attenzione: dati della sala non disponibili";?>
				     <?php endif; ?> 
				    </div> 
							</div> <!-- div class="x_content" -->
						</div>
						<div class="col-md-8 col-xs-9">
		    	<div class="x_title">
		    		<h2>	Calendario <small>Fai click sulla data per aggiungere/modificare prenotazione.</small> </h2>
		    		<div class="clearfix"></div>
		    	</div>
		    	<div class="x_content">

     			<div id="calendar">

          <?php echo $calendar; ?>

        </div>

		    	</div>
						</div>
					</div> <!-- div class="row" -->
					<div class="row">
	    	<div class="form-group">
	      <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
	      	<?php echo anchor('home/faiPrenotazione', 'Indietro', array('class' => 'btn btn-primary pull-right')); ?>
	      </div>
	     </div> <!-- div class="form-group" -->
	    </div> <!-- div class="row" -->
				</div> <!-- div class="x_panel" -->
			</div> <!-- div class="col-md-9 col-xs-12" -->
		</div> <!-- div class="row" -->
	</div> <!-- div class="" -->
</div> <!-- div class="right_col" -->

<script type="text/javascript">
 
 $(document).ready(function() {
  $('.calendar .day').click(function() {
   day_num = $(this).find('.day_num').html();
   day_data = prompt('Enter Stuff', $(this).find('.content').html());
   if (day_data != null) {
    
    $.ajax({
     url: window.location,
     type: 'POST',
     data: {
      day: day_num,
      data: day_data
     },
     success: function(msg) {
      location.reload();
     }      
    });
    
   }
   
  });
  
 });
  
</script>