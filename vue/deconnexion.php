<?php
$_SESSION = array();
session_destroy();
header('Location: index.php?page=accueil');
die();

?>
<div class="row">
	<div class="col-md-10 col-md-offset-2" style="margin-left: 40px">
		<?= message("info", "<strong>OK!</strong> Vous avez bien été déconnectée.", ['no_close'=>true]); ?>
		<br>
<a class = 'btn btn-primary' href="index.php?page=login">Reconnexion</a>

</div>
</div>