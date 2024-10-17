<?php

include "../../global/config.php";
$postData = $_POST["postData"];

if($postData == "saveScrumType"){
	$scrum_text = $_POST['scrum_text'];
	$scrum_type = $_POST['scrum_type'];
	$scrum_date = date("d.m.Y H:m:s");


	$baglanti = baglanti();
	$insertSQL = "INSERT INTO `scrum_list`(`scrum_text`, `scrum_type`, `scrum_date`) VALUES (:scrum_text,:scrum_type,:scrum_date)";
	$sorgu = $baglanti->prepare($insertSQL);
	$sorgu->bindParam(':scrum_text', $scrum_text);
	$sorgu->bindParam(':scrum_type', $scrum_type);
	$sorgu->bindParam(':scrum_date', $scrum_date);
	$sorgu->execute();
}

if($postData == "getScrumTextList"){
	$scrum_type = $_POST['scrum_type'];
	$scrum_date = date("d.m.Y");

	$baglanti = baglanti();
	$selectSQL = "SELECT * FROM `scrum_list` WHERE scrum_type = :scrum_type ORDER BY `scrum_id` DESC";
	$sorgu = $baglanti->prepare($selectSQL);
	$sorgu->bindParam(':scrum_type', $scrum_type);
	$sorgu->execute();

	if($scrum_type == "1")
		$divClass = "success";
	if($scrum_type == "2")
		$divClass = "danger";
	if($scrum_type == "3")
		$divClass = "warning";

	foreach ($sorgu as $row) {
		echo '
		<div class="connect-sorting-content" data-sortable="true">
			<div data-draggable="true" class="card simple-title-task" style="">
				<div class="card-body">
				<div class="task-header alert alert-light-'.$divClass.'">                                                    
					<div class="">
					<h4 class="" data-taskTitle="'.$row["scrum_text"].'">'.$row["scrum_text"].'</h4>
					</div>
					<div class="">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 s-task-edit"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 s-task-delete"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
					</div>
					</div>
				</div>
			</div>
		</div>';
	}
}


?>