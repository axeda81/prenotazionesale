<!-- page content -->
<div class="right_col" role="main">
 <div class="">
		<div class="row">
   <div class="col-md-9 col-xs-12">
    <div class="x_panel">
    	<div class="x_content">
    		<div class="table-responsive">

							<!-- tabella con elenco sale -->
	      <table id="datatable" class="table table-striped table-bordered jambo_table">
	        <thead>
	          <tr>
	            <th>Sala</th>
	            <th>Dipartimento</th>
	            <th>Descrizione</th>
	            <th>Numero Posti</th>
	            <th></th>
	          </tr>
	        </thead>
	        <tbody>        
	          <?php if(isset($sale)) : foreach($sale as $row): ?>
	          <tr>
	            <td><?php echo $row->nomesala ?> </td>
	            <td><?php echo $row->dipartimento; ?> </td>
	            <td><?php echo $row->descrizione; ?> </td>
	            <td><?php echo $row->numeroposti; ?></td>
	            <td><a href="<?php echo base_url().'index.php/gestoreprenotazioni/inizia_prenotazione/'.$row->ID; ?>" data-placement="right" data-toggle="tooltip" data-original-title="Prenota questa sala"><i class="fa fa-calendar-plus-o"></i>&nbsp;</a></td>
	          </tr> 
	          <?php endforeach; ?>
	          <?php endif; ?>   
	        </tbody>
	      </table>
							<!-- fine tabella -->
						</div>	
    	</div>
				</div>
			</div>
		</div>
	</div>
</div>
