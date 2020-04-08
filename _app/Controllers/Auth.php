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

        public function register($data): void
        {
            $email = filter_var($data['email'] , FILTER_VALIDATE_EMAIL);
            $passwd = filter_var($data['password'], FILTER_DEFAULT);
            $name = filter_var($data['name'], FILTER_DEFAULT);
            $lastName = filter_var($data['lastName'], FILTER_DEFAULT);
            $level = filter_var($data['level'], FILTER_VALIDATE_INT);
            $status = filter_var($data['status'], FILTER_VALIDATE_INT);

            $user = (new User)->find("user_email = :e", "e={$email}")->fetch();

            if (!$email || !$passwd || !$name) :
                flash("alert", "Atenção, Digite todos os dados para cadastrar um novo usuário!");
                $this->router->redirect("app.register");
                return;
            elseif($user):
                flash("alert", "Opss, Já existe um usuário com esse E-mail!");
                $this->router->redirect("app.register");
                return;
            else:
                $usert = new User;
                $usert->user_first_name = $name;
                $usert->user_last_name = $lastName;
                $usert->user_email = $email;
                $usert->user_password = password_hash($passwd, PASSWORD_DEFAULT);
                $usert->user_level = (int) $level;
                $usert->user_status = (int) $status;
                $userID = $usert->save();

                var_dump($userID);
            endif;

            if ($userID) {
                flash("success", "Parabéns, Usuário cadastrado com sucesso!");
                $this->router->redirect("app.records");
                return;
            }
        }

        public function remove($data): void
        {   
            $id = (int) $data['id'];
            $user = (new User)->findById($id);

            if ($user):
                $user->destroy();
                $this->router->redirect("app.records");
                return;
            endif;
        }
    }

?>