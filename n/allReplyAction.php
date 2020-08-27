<?php 
$sub = $_POST['sub'];
switch ($sub) {
	case 'Add':
		header('location: index.php?page=add-brand');
		break;
	case 'Edit':
		foreach ($_POST as $id) {
			if (!empty($id)) {
				header('location: index.php?page=edit-brand&mid='.$id);
			}
		}
			break;
	case 'Details':
		foreach ($_POST as $id) {
			if (!empty($id)) {
				header('location: view-member-profile.php?mid='.$id);
			}
		}
			break;
	case 'Delete':
		foreach ($_POST as $id) {
			if ($id !='Delete') {
				$allid .=$next.$id;
			    $next=",";
			}	
				header('location: index.php?page=delete-brand&allid='.$allid);
		}
			break;
	
}