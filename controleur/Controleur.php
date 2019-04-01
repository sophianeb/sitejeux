<?php 
class Controleur{

	public function render($chemin,$vars = [])
	{	

		extract($vars);
		
		require '/vue/template/header.php';
		
		require '/vue/'.$chemin.'.php'; 
		
		require '/vue/template/footer.php';
	}
}