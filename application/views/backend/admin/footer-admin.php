<!--<div class="row">
					<footer id="admin-footer" class="clearfix">
						<div class="pull-left">
							<b>Copyright </b>&copy; 2016
						</div>
						<div class="pull-right">
							admin system
						</div>
					</footer>
				</div>
				
			</div>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=base_url()?>assets/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/default.js"></script>
	
	<script src="<?=base_url()?>assets/chosen/chosen.jquery.min.js"></script>
	<script src="<?=base_url()?>assets/summernote/dist/summernote.min.js"></script>
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
	
	<script src="<?=base_url()?>assets/default.js"></script>
	
	<script type="text/javascript">
		var config={
			'.chosen-select': {},
			'.chosen-select-deselect': {allow_single_deselect: true},
			'.chosen-select-no-single': {disable_search_threshold: 10},
			'.chosen-select-no-result': {no_results_text: 'Oops, nothing found!'},
			'.chosen-select-width': {width: "95%"}
		}
		for(var selector in config){
			$(selector).chosen(config[selector]);
		}
	</script>
	
	<script type="text/javascript">
		$('.summernote').summernote({
			height: 200
		})
	</script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$('#datePicker')
			.datepicker({
				format: 'mm/dd/yyyy'
			})
		});
	</script>
	
	<script type="text/javascript">
		$(document).on('click', '.browse', function(){
		  var file = $(this).parent().parent().parent().find('.file');
		  file.trigger('click');
		});
	</script>
	
  </body>
</html>