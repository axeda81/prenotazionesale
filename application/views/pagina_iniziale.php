<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-9 col-xs-12">
        <div class="x_panel">
          <div class="row">
            <div class="col-md-4 col-xs-12 widget widget_tally_box">
               <div class="x_panel">
                 <div class="x_content">
                   <div class="flex">
                     <ul class="list-inline widget_profile_box text-center">
                       <li class="text-center" style="float: none;">
                         <a style="float: none;" id="faiPrenotazione">
                           <i class="fa fa-calendar-plus-o"></i>
                         </a>
                       </li>
                     </ul>
                   </div>
                   <h3 class="name">Prenota una sala</h3>
                 </div>
               </div>
            </div>
            <div class="col-md-4 col-xs-12 widget widget_tally_box">
              <div class="x_panel">
                <div class="x_content">
                  <div class="flex">
                    <ul class="list-inline widget_profile_box text-center">
                      <li class="text-center" style="float: none;">
                        <a style="float: none;" id="modificaPrenotazione">
                          <i class="fa fa-pencil-square-o"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <h3 class="name">Modifica una prenotazione</h3>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-xs-12 widget widget_tally_box">
              <div class="x_panel">
                <div class="x_content">
                  <div class="flex">
                    <ul class="list-inline widget_profile_box text-center">
                      <li class="text-center" style="float: none;">
                        <a style="float: none;" id="cancellaPrenotazione">
                          <i class="fa fa-trash-o"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <h3 class="name">Cancella una prenotazione</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#faiPrenotazione').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/home/faiPrenotazione");
    })
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#modificaPrenotazione').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/home/modificaPrenotazione");
    })
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#cancellaPrenotazione').on('click', function() {
      window.location.replace("<?php echo base_url();?>index.php/home/cancellaPrenotazione");
    })
  });
</script>
