<div class="ao_setting row-fluid" id="other_choice<?php echo $aoid; ?>" src="<?php echo $aotype; ?>">
	<input type="hidden" class="aoid" value="<?php echo $aoid; ?>">
	<input type="hidden" class="aotype" value="<?php echo $aotype; ?>">
	<div class="span12 ">
		<div class="control-group">
			<div class="controls">
				<label class="checkbox">
					<input value="" type="checkbox"><strong><?php echo $ao_name; ?></strong>
				</label>
			</div>
		</div>
		<div class="body offset1 control-group">
		</div>
		<div class="background" style="display: none">
			<div class="control-group">
				<div class="controls">
					<label class="span2">Label:</label>
					<input id="q_other_choice_label" value="Other (please specify):" type="text" name="q_other_choice_label">
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<label class="span2">Size:</label>
					<select id="q_other_choice1" class="m-wrap span3">
						<?php foreach ($smline as $i => $elem) { ?>
							<option value="<?php echo $i; ?>"><?php echo $elem ?></option>
						<?php } ?>
					</select>
					<select id="q_other_choice2" class="m-wrap span4">
						<?php foreach ($charwide as $i => $elem) { ?>
							<option <?php if ($i == $charwide_select) echo "selected=\"\""; ?> value="<?php echo $i; ?>"><?php echo $elem ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
		</div>
	</div>
</div>

<script>

	$('#other_choice<?php echo $aoid; ?> .checkbox input').click(function() {
		var checked = $(this).parent().attr("class");
		if (checked === 'checked') {
			$('#other_choice<?php echo $aoid; ?> .body').empty();
		}
		else {
			var str = $('#other_choice<?php echo $aoid; ?> .background').html();
			$('#other_choice<?php echo $aoid; ?> .body').append(str);
		}
	});

</script>