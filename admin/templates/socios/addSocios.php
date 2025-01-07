
<div class="content-box border-left-2 border-color-1 background-white dynamicobjects">
	<div class="text-large uppercase fore-mute-dark margin-bottom">Agregar Socio</div>
	<?php if(isset($users) && count($users) > 0){ $data = $users[0];?>
	<form method="post" action="socios.php?editSocios=true&id=<?= $data['id'] ?>" id="formNews"  enctype="multipart/form-data">
		<table class="email-test div-phone" style="width: 100%;">
			<tbody class="div-phone">
				<tr class="div-phone">
					<td class="small div-phone" colspan="2">
						<div class="padding-left fore-color-1">Nombre de Institucion</div>
						<input class="border border-mute-light background-transparent" placeholder="Nombre de institucion" type="text" name="txt_nombre_ins" id="txt_nombre_ins" value="<?php echo $data['institucion']; ?>" style="width:100%;">
					</td>					
					<td class="small div-phone">
						<div class="padding-left fore-color-1">Telefono de Institucion</div>
						<input class="border border-mute-light background-transparent" placeholder="Telefono Institucion" type="text" name="txt_telefono_ins" id="txt_telefono_ins" value="<?php echo $data['telefono_ins']; ?>" style="width:100%;">
					</td>
					<td class="small div-phone">
						<div class="padding-left fore-color-1">Celular de Institucion</div>
						<input class="border border-mute-light background-transparent" placeholder="Celular Institucion" type="text" name="txt_celular_ins" id="txt_celular_ins" value="<?php echo $data['telefono_ins2']; ?>" style="width:100%;">
					</td>
				</tr>
				<tr>
					<td class="small div-phone" colspan="2">
						<div class="padding-left fore-color-1">Url Institucion</div>
						<input class="border border-mute-light background-transparent" placeholder="Url institucion" type="text" name="txt_url_inst" id="txt_url_inst" value="<?php echo $data['url']; ?>" style="width:100%;">
					</td>
					<td class="small div-phone">
						<div class="padding-left fore-color-1">Region</div>
						<input class="border border-mute-light background-transparent" placeholder="Region" type="text" name="txt_region" id="txt_region" value="<?php echo $data['url']; ?>" style="width:100%;">
					</td>
				</tr>
				<tr>
					<td class="small div-phone" colspan="4">
						<div class="padding-left fore-color-1">Direccion Institucion</div>
						<textarea class="border border-mute-light background-transparent" name="txt_direccion_ins" id="txt_direccion_ins" style="width: 99%;" rows="3" placeholder="Direccion Institucion"><?php echo $data['direccion']; ?></textarea>	
					</td>
				
				</tr>		
				<tr class="div-phone">
					<td class="small div-phone" colspan="2">
						<div class="padding-left fore-color-1">Nombre de rector</div>
						<input class="border border-mute-light background-transparent" placeholder="Nombre rector" type="text" name="txt_nombre_rector" id="txt_nombre_rector" value="<?php echo $data['rector']; ?>" style="width:100%;">
					</td>
					<td class="small div-phone">
						<div class="padding-left fore-color-1">Correo de rector</div>
						<input class="border border-mute-light background-transparent" placeholder="Correo rector" type="text" name="txt_correo_rector" id="txt_correo_rector" value="<?php echo $data['correo_rector']; ?>" style="width:100%;">
					</td>
					<td class="small div-phone">
						<div class="padding-left fore-color-1">Telefono de Rector</div>
						<input class="border border-mute-light background-transparent" placeholder="Telefono de rector" type="text" name="txt_telefono_rector" id="txt_telefono_rector" value="<?php echo $data['telefonoRector']; ?>" style="width:100%;">
					</td>					
				</tr>
				<tr>
					<td class="small div-phone" colspan="2">
						<div class="padding-left fore-color-1">Nombre de replegal</div>
						<input class="border border-mute-light background-transparent" placeholder="Nombre replegal" type="text" name="txt_nombre_rep" id="txt_nombre_rep" value="<?php echo $data['replegal']; ?>" style="width:100%;">
					</td>
					<td class="small div-phone">
						<div class="padding-left fore-color-1">Cedular de replegal</div>
						<input class="border border-mute-light background-transparent" placeholder="Cedula replegal" type="text" name="txt_cedula_rep" id="txt_cedula_rep" value="<?php echo $data['cedula']; ?>" style="width:100%;">
					</td>
					</tr>
					<tr>
					<td class="small div-phone">
						<div class="padding-left fore-color-1">Correo replegal</div>
						<input class="border border-mute-light background-transparent" placeholder="Correo replegal" type="text" name="txt_correo_rep" id="txt_correo_rep" value="<?php echo $data['correoReplegal']; ?>" style="width:100%;">
					</td>
					<td class="small div-phone">
						<div class="padding-left fore-color-1">Telefono de replegal</div>
						<input class="border border-mute-light background-transparent" placeholder="Telefono replegal" type="text" name="txt_telefono_rep" id="txt_telefono-rep" value="<?php echo $data['telefonoRep']; ?>" style="width:100%;">
					</td>
					
					
					
				</tr>
				<tr class="div-phone">
					<td class="small div-phone" colspan="2">
						<label for="attachment" style="display: block;">Foto de colegio</label>
					</td>
					<td class="small div-phone">
						<input type="file" name="txt_img" id="txt_img" style="display: block;">
					</td>
					<td class="small div-phone">
						<img  src="<?php echo $data['foto'] ?>" style="width: 50%;" >
					</td>
				</tr>
				<tr class="div-phone">				
					<td class="small div-phone">
						<button class="logout button fore-white background-color-1" style="margin: 3px;padding: 10px 15px 10px 15px;"  ><i class="fa fa-save"></i> Editar</button>
					</td>
				</tr>
				</tbody>
		</table>
	</form>
			<?php }else{ ?>
	<form method="post" action="socios.php?saveNews=true" id="formNews"  enctype="multipart/form-data">
		<table class="email-test div-phone" style="width: 100%;">
			<tbody class="div-phone">
				<tr class="div-phone">
					<td class="small div-phone" colspan="2">
						<div class="padding-left fore-color-1">Nombre de Institucion</div>
						<input class="border border-mute-light background-transparent" placeholder="Nombre de institucion" type="text" name="txt_nombre_ins" id="txt_nombre_ins" value="" style="width:100%;">
					</td>					
					<td class="small div-phone">
						<div class="padding-left fore-color-1">Telefono de Institucion</div>
						<input class="border border-mute-light background-transparent" placeholder="Telefono Institucion" type="text" name="txt_telefono_ins" id="txt_telefono_ins" value="" style="width:100%;">
					</td>
					<td class="small div-phone">
						<div class="padding-left fore-color-1">Celular de Institucion</div>
						<input class="border border-mute-light background-transparent" placeholder="Celular Institucion" type="text" name="txt_celular_ins" id="txt_celular_ins" value="" style="width:100%;">
					</td>
				</tr>
				<tr>
					<td class="small div-phone" colspan="2">
						<div class="padding-left fore-color-1">Url Institucion</div>
						<input class="border border-mute-light background-transparent" placeholder="Url institucion" type="text" name="txt_url_inst" id="txt_url_inst" style="width:100%;">
					</td>
					<td class="small div-phone">
						<div class="padding-left fore-color-1">Region</div>
						<input class="border border-mute-light background-transparent" placeholder="Region" type="text" name="txt_region" id="txt_region" style="width:100%;">
					</td>
				</tr>
				<tr>
					<td class="small div-phone" colspan="4">
						<div class="padding-left fore-color-1">Direccion Institucion</div>
						<textarea class="border border-mute-light background-transparent" name="txt_direccion_ins" id="txt_direccion_ins" style="width: 99%;" rows="3" placeholder="Direccion Institucion"></textarea>	
					</td>
				</tr>		
				<tr class="div-phone">
					<td class="small div-phone" colspan="2">
						<div class="padding-left fore-color-1">Nombre de rector</div>
						<input class="border border-mute-light background-transparent" placeholder="Nombre rector" type="text" name="txt_nombre_rector" id="txt_nombre_rector" value="" style="width:100%;">
					</td>
					<td class="small div-phone">
						<div class="padding-left fore-color-1">Correo de rector</div>
						<input class="border border-mute-light background-transparent" placeholder="Correo rector" type="text" name="txt_correo_rector" id="txt_correo_rector" value="" style="width:100%;">
					</td>
					<td class="small div-phone">
						<div class="padding-left fore-color-1">Telefono de Rector</div>
						<input class="border border-mute-light background-transparent" placeholder="Telefono de rector" type="text" name="txt_telefono_rector" id="txt_telefono_rector" value="" style="width:100%;">
					</td>					
				</tr>
				<tr>
					<td class="small div-phone" colspan="2">
						<div class="padding-left fore-color-1">Nombre de replegal</div>
						<input class="border border-mute-light background-transparent" placeholder="Nombre replegal" type="text" name="txt_nombre_rep" id="txt_nombre_rep" value="" style="width:100%;">
					</td>
					<td class="small div-phone">
						<div class="padding-left fore-color-1">Cedular de replegal</div>
						<input class="border border-mute-light background-transparent" placeholder="Cedula replegal" type="text" name="txt_cedula_rep" id="txt_cedula_rep" value="" style="width:100%;">
					</td>
					</tr>
					<tr>
					<td class="small div-phone">
						<div class="padding-left fore-color-1">Correo replegal</div>
						<input class="border border-mute-light background-transparent" placeholder="Correo replegal" type="text" name="txt_correo_rep" id="txt_correo_rep" value="" style="width:100%;">
					</td>
					<td class="small div-phone">
						<div class="padding-left fore-color-1">Telefono de replegal</div>
						<input class="border border-mute-light background-transparent" placeholder="Telefono replegal" type="text" name="txt_telefono_rep" id="txt_telefono-rep" value="" style="width:100%;">
					</td>
					
				</tr>
				<tr class="div-phone">
					<td class="small div-phone" colspan="2">
						<label for="attachment" style="display: block;">Foto de colegio</label>
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
			<?php }?>
			</tbody>
		</table>
	</form>
</div>