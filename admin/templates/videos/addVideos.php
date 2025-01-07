<script type="text/javascript">
	function ocultar(tipo)
	{
		if(tipo.toUpperCase()=='VIDEO')
		{
			$('#panel_archivo').css('display','block');
		}else
		{
			$('#panel_archivo').css('display','none');
		}

	}

	function colocar_nombre()
	{
		nombre = '';
		if($('#ddl_carpeta').val()!='')
		{
			var nombre = $('#ddl_carpeta option:selected').text();
		}
		$('#txt_nombre_carpeta').val(nombre);
	}
</script>
<div class="content-box border-left-2 border-color-1 background-white dynamicobjects">
	<div class="text-large uppercase fore-mute-dark margin-bottom">Agregar videos</div>
	<form method="post" action="videos.php?saveVideo=true" id="formNews">
		<table class="email-test div-phone" style="width: 50%;">
			<tbody class="div-phone">
				<tr class="div-phone">
					<td class="small div-phone" colspan="2">
						<div class="padding-left fore-color-1">Carpeta Contenedora</div>
						<select class="border border-mute-light background-transparent" style="width: 100%;" name="ddl_carpeta" id="ddl_carpeta" onchange="colocar_nombre()">
							<option value="">Seleccione carpeta</option>
								<?php $i = 0; foreach ($carpetas as $user): $i++ ?>
									<option value="<?php echo $user['id'] ?>"><?php echo $user['nombre'] ?></option>
								<?php endforeach; ?>

						</select>
						<input type="hidden" name="txt_nombre_carpeta" id="txt_nombre_carpeta">
					</td>
				</tr>	
				<tr class="div-phone">
					<td class="small div-phone" colspan="2">
						<div class="padding-left fore-color-1">Tipo</div>
						<select class="border border-mute-light background-transparent" style="width: 100%;" name="ddl_tipo" id="ddl_tipo" onchange="ocultar(this.value)">
							<option value="video">Video</option>
							<option value="carpeta">Carpeta</option>
						</select>
					</td>
				</tr>	
				<tr class="div-phone">
					<td class="small div-phone" colspan="2">
						<div class="padding-left fore-color-1">Nombre</div>
						<input class="border border-mute-light background-transparent" placeholder="Titulo de noticia" type="text" name="txt_titulo" id="txt_titulo" value="" style="width:100%;">
					</td>
				</tr>		
				
				<tr class="div-phone" id="panel_archivo">
					<td class="small div-phone" colspan="2">
						<div class="padding-left fore-color-1">URL / LINK</div>
						<input class="border border-mute-light background-transparent" placeholder="url / link" type="text" name="txt_url" id="txt_url" value="" style="width:100%;">
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