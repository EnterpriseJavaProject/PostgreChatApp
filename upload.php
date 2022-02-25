<?php

//upload.php

if(!empty($_FILES))
{
	if(is_uploaded_file($_FILES['uploadFile']['tmp_name']))
	{
		$ext = pathinfo($_FILES['uploadFile']['name'], PATHINFO_EXTENSION);
		$allow_ext = array('jpg', 'png');
		if(in_array($ext, $allow_ext))
		{
			$_file_name = $_FILES['uploadFile']['name'];
			$target_path = $_FILES['uploadFile']['tmp_name'];
			
			if(move_uploaded_file($target_path,"" $_file_name))
			{
				echo '<p><img src="'.$target_path.'" class="img-thumbnail" width="200" height="160" /></p><br />';
			}
			//echo $ext;
		}
	}
}

?>
