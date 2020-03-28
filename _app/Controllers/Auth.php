<?php

    namespace Source\Controllers;
    use Source\Models\User;

    class Auth extends Controller
    {
        public function login($data): void
        {
            $email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);
            $passwd = filter_var($data['passwd'], FILTER_DEFAULT);

            if (!$email || !$passwd) :
                flash("alert", "Informe seu E-mail e Senha para logar-se!");
                $this->router->redirect("webadmin.login");
                return;
            endif;

            $user = (new User)->find("user_email = :e", "e={$email}")->fetch();

            if (!$user || !password_verify($passwd, $user->user_password)) :
                flash("error", "E-mail ou Senha informados não conferem!");
                $this->router->redirect("webadmin.login");
                return;
            elseif($user->user_level == 1):
                flash("error", "Opa, Você não tem permissão de acesso nesta área!");
                $this->router->redirect("webadmin.login");
                return;
            endif;

            $_SESSION['User'] = $user->user_id;

            $this->router->redirect("app.home");
        }

        public function register(): void
        {
            
        }
    }

?>