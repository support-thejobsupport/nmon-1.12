<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title"><?php _e('Edit Check Alert'); ?></h4>
</div>

<div class="modal-body">
    <div class="row">


        <div class="col-md-8">
            <div class="form-group">
                <label for="name"><?php _e('Page Name'); ?></label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $page['name']; ?>">
            </div>
        </div>


        <div class="col-md-4">
            <div class="form-group">
                <label for="groupid"><?php _e('Group'); ?></label>
                <select class="form-control select2 select2-hidden-accessible" id="groupid" name="groupid" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                    <?php foreach ($groups as $group) { if(!checkGroup($group['id'])) continue; ?>
                        <option value='<?php echo $group['id']; ?>' <?php if($group['id'] == $page['groupid']) echo "selected"; ?>><?php echo $group['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="servers"><?php _e('Servers'); ?></label>
                <select class="form-control select2tags select2-hidden-accessible" id="servers" name="servers[]" style="width: 100%;" multiple>
                    <?php foreach ($all_servers as $server) { ?>
                        <option value='<?php echo $server['id']; ?>' <?php if(in_array($server['id'], $selected_servers)) echo "selected"; ?> ><?php echo $server['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="websites"><?php _e('Websites'); ?></label>
                <select class="form-control select2tags select2-hidden-accessible" id="websites" name="websites[]" style="width: 100%;" multiple>
                    <?php foreach ($all_websites as $website) { ?>
                        <option value='<?php echo $website['id']; ?>' <?php if(in_array($website['id'], $selected_websites)) echo "selected"; ?> ><?php echo $website['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="checks"><?php _e('Checks'); ?></label>
                <select class="form-control select2tags select2-hidden-accessible" id="checks" name="checks[]" style="width: 100%;" multiple>
                    <?php foreach ($all_checks as $check) { ?>
                        <option value='<?php echo $check['id']; ?>' <?php if(in_array($check['id'], $selected_checks)) echo "selected"; ?> ><?php echo $check['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="info"><?php _e('Page Description'); ?></label>
                <textarea class="form-control summernote-modal" id="info" name="info"><?php echo $page['info']; ?></textarea>
            </div>
        </div>



    </div>


    <input type="hidden" name="id" value="<?php echo $page['id']; ?>">


    <input type="hidden" name="action" value="editPage">
    <input type="hidden" name="route" value="<?php echo $_GET['reroute']; ?>">
    <input type="hidden" name="routeid" value="">
    <input type="hidden" name="section" value="">
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-flat btn-default" data-dismiss="modal"><i class="fa fa-times"></i> <?php _e('Cancel'); ?></button>
    <button type="submit" class="btn btn-flat btn-success"><i class="fa fa-save"></i> <?php _e('Save'); ?></button>
</div>

<script type="text/javascript">

	$(".select2").select2({
        placeholder: "<?php _e('Please select'); ?>"
    });

    $(function() { $(".select2tags").select2({
        tags: true
    }); });


    $(document).ready(function() { $('.summernote-modal').summernote({height: 200}); });

</script>
