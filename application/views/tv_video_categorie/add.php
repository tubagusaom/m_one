<div class="form-panel" style="margin-left: 20px;margin-top: 10px; margin-bottom: 20px;">
	<div class="x-panel-bwrap">
		<form id="myform">
			<table class="table-data">
				<!-- <tr>
                    <td colspan="2" style="text-align: right;">
                        Initial Code <b><?=$data_code + 1?></b>
                        
                    </td>
                </tr> -->
				<tr>
					<td style="width: 150px;">Program TV : </td>
					<td>
						<input style="width: 225px;" class="easyui-textbox" data-options="required: true" value="<?=$categorie->categories?>" disabled>
						<input type="hidden" id="id_categorie" name="id_categorie" value="<?=$categorie->id?>">

						<input type="hidden" id="code_video" name="code_video" value="<?=$data_code + 1?>" >
					</td>
				</tr>

				<tr>
					<td style="width: 150px;">Title : </td>
					<td>
						<input id="nama_video" name="nama_video" style="width: 225px;" class="easyui-textbox" data-options="required: true">
					</td>
				</tr>
				<tr>
					<td style="width: 150px;">Description : </td>
					<td>
						<input id="desc_video" name="desc_video" class="easyui-textbox" style="width:100%;height:60px" data-options="label:'Message:',multiline:true,required: true">
					</td>
				</tr>
				<tr>
					<td style="width: 150px;">Link Video : </td>
					<td>
						<input id="link_video" name="link_video" style="width: 225px;" class="easyui-textbox" data-options="required: true">
					</td>
				</tr>
				<!-- <tr>
					<td style="width: 150px;">Link Embed : </td>
					<td>
						<input id="link_embed" name="link_embed" style="width: 225px;" class="easyui-textbox" data-options="required: true">
					</td>
				</tr>
				<tr>
					<td style="width: 150px;">Poster Video : </td>
					<td>
						<input id="poster_video" name="poster_video" style="width: 225px;" class="easyui-textbox" data-options="required: true">
					</td>
				</tr> -->

			</table>
		</form>
	</div>
</div>