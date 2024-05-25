<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1 class="pull-left"><?php _e('Log'); ?><small> <?php _e('View alert log'); ?></small></h1>
		<div class="pull-right"></div>
		<div style="clear:both"></div>
	</section>
	<!-- Main content -->
	<section class="content">
		<?php if(!empty($statusmessage)): ?>
				<div class="row"><div class='col-md-12'><div class="alert alert-<?php print $statusmessage["type"]; ?> alert-auto" role="alert"><?php print __($statusmessage["message"]); ?></div></div></div>
		<?php endif; ?>
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-primary">
                    <div class="box-body">
						<div class="table-responsive">
	                        <table id="dataTableAjax" class="table table-striped table-hover table-bordered">
	                            <thead>
	                                <tr>
	                                    <th><?php _e('ID'); ?></th>
										<th><?php _e('Date'); ?></th>
	                                    <th><?php _e('Contact'); ?></th>
										<th><?php _e('Message'); ?></th>
										<th class="nosort"><?php _e('Channels'); ?></th>
	                                </tr>
	                            </thead>

							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /.content -->
</aside><!-- /.right-side -->


<script type="text/javascript">
	$("#dataTableAjax").dataTable( {
		"ajax": '?json=alertinglog',

        "processing": true,
        "serverSide": true,
		//"ordering": false,

		"order": [],
		"pageLength": <?php echo getConfigValue("table_records"); ?>,
		"dom": '<"top"f>rt<"bottom"><"row dt-margin"<"col-md-6"i><"col-md-6"p><"col-md-12"B>><"clear">',
		"buttons":  [ 'copy', 'csv', 'excel', 'pdf', 'print' ],
		"oLanguage": {
			"sSearch": "<i class='fa fa-search text-gray dTsearch'></i>",
			"sEmptyTable": "<?php _e('No entries to show'); ?>",
			"sZeroRecords": "<?php _e('Nothing found'); ?>",
			"sInfo": "<?php _e('Showing'); ?> _START_ <?php _e('to'); ?> _END_ <?php _e('of'); ?> _TOTAL_ <?php _e('entries'); ?>",
			"sInfoEmpty": "",
			"oPaginate": {
				"sNext": "<?php _e('Next'); ?>",
				"sPrevious": "<?php _e('Previous'); ?>",
				"sFirst": "<?php _e('First Page'); ?>",
				"sLast": "<?php _e('Last Page'); ?>"
			}
		},
		"columnDefs": [ { "orderable": false, "targets": 'nosort' } ]
	});
</script>
