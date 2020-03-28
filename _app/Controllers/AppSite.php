<?php

    namespace Source\Controllers;
    use Source\Models\User;

	class AppSite extends Controller{

        protected $user;

		public function __construct($router)
    {
       parent::__construct($router);
       // if (empty($_SESSION['User']) || !$this->user = (new User)->findById($_SESSION['User'])):
       //     unset($_SESSION['User']);
       //     flash("error", "Acesso Negado. Favor Logue-se!");
       //     $this->router->redirect("webadmin.login");
       //  endif;
       
    }

    public function home()
    {
      echo $this->view->render("theme/site/index");
    }

    public function logout(): void
    {
      flash("error", "Acesso Negado. Favor Logue-se!");
      unset($_SESSION['User']);
      $this->router->redirect("webadmin.login");
    }

	}

?>