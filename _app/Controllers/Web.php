<?php

	namespace Source\Controllers;

	class Web extends Controller{

		public function __construct($router)
	    {
	       parent::__construct($router);
	       if (!empty($_SESSION["User"])){
	           $this->router->redirect("appsite.home");
	       }
		}

		public function home(): void
		{
			echo $this->view->render("theme/site/index");
		}

		public function loginAdmin(): void
		{
			echo $this->view->render("theme/admin/login");
		}


	}



?>