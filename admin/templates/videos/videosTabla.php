<table>
	<thead>
		<tr>
			<th class="border-bottom-2 border-mute-light fore-color-1"><?php echo  "Tipo"; ?></th>
			<th class="border-bottom-2 border-mute-light fore-color-1"><?php echo  "Nombre"; ?></th>
			<th class="border-bottom-2 border-mute-light fore-color-1 no-phone"><?php echo "Ruta"; ?></th>
			<th class="border-bottom-2 border-mute-light fore-color-1 no-phone no-tablet"><?php echo "usuario";?></th>
			<th class="border-bottom-2 border-mute-light fore-color-1 no-phone"><?php echo "Fecha"; ?></th>
			<th class="border-bottom-2 border-mute-light fore-color-1"></th>
		</tr>
	</thead>
	<tbody>
<?php if (count($users) <= 0): ?>
	<tr>
		<td colspan="6" class="text-center"><?php echo l10n('search_empty', 'Empty results') ?></td>
	</tr>
<?php else:?>
	<?php $i = 0; foreach ($users as $user): $i++ ?>
		<tr id="id_<?php echo $user['id']?>" class="<?php echo $i % 2 == 0 ? 'background-blue-light' : '' ?>">
			<td><?php echo $user['tipo'] ?></td>
			<td><?php echo $user['nombre'] ?></td>
			<td class="no-phone"><?php echo $user['ruta'] ?></td>
			<td class="no-phone no-tablet"><?php echo $user['usuario_id'] ?></td>
			<td class="no-phone"><?php echo formatDate(DateTimeImmutable::createFromFormat("Y-m-d H:i:s", $user['fecha_creacion']), false, true, true) ?></td>
			
			<td class="<?php echo $i % 2 ? 'even-dark' : 'odd-dark' ?>">			
				<a class="fa margin-left icon-large fa-times fore-red" href="videos.php?delete=<?php echo urlencode($user['id']) ?>" onclick="return confirm('<?php echo str_replace("'", "\\'", l10n("private_area_confirm_remove", "Do you want to remove this user?")) ?>');" title="<?php echo l10n("private_area_remove_user", "Remove this user") ?>"></a>
			</td>
		</tr>
	<?php endforeach; ?>
<?php endif; ?>
	</tbody>
</table>

