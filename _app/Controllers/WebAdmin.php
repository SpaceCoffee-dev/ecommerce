<?php

	namespace Source\Controllers;

	class WebAdmin extends Controller{

		public function __construct($router)
	    {
	       parent::__construct($router);
	       if (!empty($_SESSION["User"])){
	           $this->router->redirect("app.home");
	       }
		}

		public function login(): void
		{
			echo $this->view->render("theme/admin/login");
		}

	}



?>