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

		    			<?php echo $this->calendar->generate(); ?>





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

<!--
 <script>
            $(window).load(function () {

                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
                var started;
                var categoryClass;

                var calendar = $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end, allDay) {
                        $('#fc_create').click();

                        started = start;
                        ended = end

                        $(".antosubmit").on("click", function () {
                            var title = $("#title").val();
                            if (end) {
                                ended = end
                            }
                            categoryClass = $("#event_type").val();

                            if (title) {
                                calendar.fullCalendar('renderEvent', {
                                        title: title,
                                        start: started,
                                        end: end,
                                        allDay: allDay
                                    },
                                    true // make the event "stick"
                                );
                            }
                            $('#title').val('');
                            calendar.fullCalendar('unselect');

                            $('.antoclose').click();

                            return false;
                        });
                    },
                    eventClick: function (calEvent, jsEvent, view) {
                        //alert(calEvent.title, jsEvent, view);

                        $('#fc_edit').click();
                        $('#title2').val(calEvent.title);
                        categoryClass = $("#event_type").val();

                        $(".antosubmit2").on("click", function () {
                            calEvent.title = $("#title2").val();

                            calendar.fullCalendar('updateEvent', calEvent);
                            $('.antoclose2').click();
                        });
                        calendar.fullCalendar('unselect');
                    },
                    editable: true,
                    events: [
                        
                ]
                });
            });
        </script>
-->