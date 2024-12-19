<?php
if (is_uploaded_file($_FILES['file']['tmp_name'])) {
	echo base64_encode(file_get_contents($_FILES['file']['tmp_name']));
}
