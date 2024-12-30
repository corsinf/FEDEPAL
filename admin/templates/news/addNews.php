<div class="content-box border-left-2 border-color-1 background-white dynamicobjects">
	<div class="text-large uppercase fore-mute-dark margin-bottom">Agregar Noticia</div>
	<form method="post" action="news.php?saveNews=true" id="formNews"  enctype="multipart/form-data">
		<table class="email-test div-phone" style="width: 50%;">
			<tbody class="div-phone">
				<tr class="div-phone">
					<td class="small div-phone" colspan="2">
						<div class="padding-left margin-top-2 fore-color-1">Titulo</div>
						<input class="border border-mute-light background-transparent" placeholder="Titulo de noticia" type="text" name="txt_titulo" id="txt_titulo" value="" style="width:100%;">
					</td>
				</tr>		
				<tr class="div-phone">
					<td class="small div-phone" colspan="2">
						<div class="padding-left margin-top-2 fore-color-1">Contenido</div>
						<textarea class="border border-mute-light background-transparent" name="txt_body" id="txt_body" style="width: 99%;" rows="10" placeholder="Contenido de noticia"></textarea>	
					</td>
				</tr>
				<tr class="div-phone">
					<td class="small div-phone">
						<label for="attachment" style="display: block;">Archivo adjunto</label>
					</td>
					<td class="small div-phone">
						<input type="file" name="txt_img" id="txt_img" style="display: block;">
					</td>
				</tr>
				<tr class="div-phone">				
					<td class="small div-phone">
						<button class="logout button fore-white background-color-1" style="margin: 3px;padding: 10px 15px 10px 15px;"  ><i class="fa fa-save"></i> Guardar</button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>