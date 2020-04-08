<?php

    namespace Source\Controllers;
    use Source\Models\User;
    use Source\Models\Modules;

	class App extends Controller{

    protected $user;
    protected $users;
    protected $module;
    protected $options;
    protected $date;

		public function __construct($router)
    {
      $this->module = (new Modules);
        $this->users = (new User)->find()->fetch(true);
       parent::__construct($router);
       if (empty($_SESSION['User']) || !$this->user = (new User)->findById($_SESSION['User'])):
           unset($_SESSION['User']);
           flash("error", "Acesso Negado. Favor Logue-se!");
           $this->router->redirect("webadmin.login");
        endif;
        
        $this->options = [
          'user'=>$this->user,
          'users'=>$this->users,
          'module'=>$this->module->find()->fetch(true),
          'submodule' =>$this->module->fetch(true),
          'module_test' => $this->module->find("module_father_id = :id", "id=" . null)->fetch()];
    }

    public function home()
    {
      $array1 = [];
      $link = array_merge($this->options, $array1);
      echo $this->view->render("theme/admin/index", $link);
    }

    public function records()
    {
      $user_number = $this->user->find()->count();
      $array1 = [
        'users'=> $user_number,
        "regs"=> $this->user->find()->fetch(true)
      ];
      $link = array_merge($this->options, $array1);
      echo $this->view->render("theme/admin/Records/records", $link);
    }

    public function managers()
    {
      $array1 = [
        'user_level' => $this->userLevel($this->user->user_id)];
      $link = array_merge($this->options, $array1);
      echo $this->view->render("theme/admin/Managers/managers", $link);
    }

    public function register()
    {
      $array1 = [];
      $link = array_merge($this->options, $array1);
      echo $this->view->render("theme/admin/Register/register", $link);
    }

    public function icons()
    {
      $array1 = [];
      $link = array_merge($this->options, $array1);
      echo $this->view->render("theme/admin/Icons/icons", $link);
    }

    public function modules()
    {
      $array1 = [
        'father'=> $this->module->find("module_father_id = :id", "id={$this->module->module_id}")
      ];
      $link = array_merge($this->options, $array1);
      echo $this->view->render("theme/admin/Modules/home", $link);
    }

    public function modRemove($data)
    {
      $id = (int) $data['id'];
      $module = (new Modules)->findById($id);

      if ($module):
          $module->destroy();
          $this->router->redirect("app.modules");
          return;
      endif;
    }


    public function logout(): void
    {
      flash("success", "Até Logo " . $this->user->user_first_name);
      unset($_SESSION['User']);
      $this->router->redirect("webadmin.login");
    }

	}

?>