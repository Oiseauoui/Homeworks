<?php

class UsersController extends Controller
{
    public function admin_index()
    {
        $this->data = $this->model->getList();
    }

    public function __construct($data = array())
    {
        parent::__construct($data);
        $this->model = new User();
    }

    public function admin_login()
    {
        if ($_POST && isset($_POST['login']) && isset($_POST['password'])) {
            $user = $this->model->getByLogin($_POST['login']);
            $hash = md5(Config::get('salt') . $_POST['password']);
            if ($user && $user['is_active'] && $hash == $user['password']) {
                Session::set('login', $user['login']);
                Session::set('role', $user['role']);
            }
            Router::redirect('/admin/');
        }
    }

    /**
     * Action для страницы "Регистрация"
     */

    public function index()
    {
        if (isset($errors) && is_array($errors)):

            foreach ($errors as $error):
                echo $error;
            endforeach;
        endif;

        // Переменные для формы
        $login = false;
        $email = false;
        $password = false;
        $result = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $login = $_POST['login'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            //$hash = password_hash($_POST['password'], PASSWORD_BCRYPT);

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!User::checklogin($login)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
             }
           if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';

            }
            if (User::checkPassword($password)) {
                $this->model->getPassword($password);
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            }
            //if ($this->model->checkEmailExists($email)) {
            //  $errors[] = 'Такой email уже используется';
            //var_dump();

            if ($this->model->checkUserData($email)) {
                $errors[] = 'Такой email уже используется';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Регистрируем пользователя
                $this->model->register($login, $email, $password, $role = null);
                echo "Вы успешно зарегестрировались!" . "<br>";

                ?>
                <a href="/admin/users/login">Login</a>
                <?php
            }
            if (isset($errors) && is_array($errors)) {

                foreach ($errors as $error) {
                    echo $error . "<br>";
                }
            }

        }

    }

        //  Router::redirect('/admin/users/login');

        /*
       * Удаляем данные о пользователе из сессии
       */
        public
        function admin_logout()
        {
            Session::destroy();
            Router::redirect('/admin/');

        }
    }
