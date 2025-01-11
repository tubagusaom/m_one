<div class="form-panel" style="margin-left: 20px;margin-top: 20px; margin-bottom: 30px;">
	<div class="x-panel-bwrap">
		<form id="myform">
			<table class="table-data">
				<tr>
					<td style="width: 150px;">Program TV : </td>
					<td>
						<input id="group_name" name="group_name" style="width: 200px;" class="easyui-textbox" data-options="required: true" value="<?php echo $categorie ?>" disabled>
					</td>
				</tr>
				<tr>
					<td style="width: 150px;">Title : </td>
					<td>
						<input id="nama_video" name="nama_video" style="width: 200px;" class="easyui-textbox" data-options="required: true" value="<?php echo $data->menu_name ?>">
					</td>
				</tr>
				<tr>
					<td style="width: 150px;">Description : </td>
					<td>
						<input id="desc_video" name="desc_video" style="width: 200px;" class="easyui-textbox" data-options="required: true" value="<?php echo $data->icon_name ?>">
					</td>
				</tr>
				<tr>
					<td style="width: 150px;">Link Video : </td>
					<td>
						<input id="link_video" name="link_video" style="width: 200px;" class="easyui-textbox" data-options="required: true" value="<?php echo $data->no_urut ?>">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>