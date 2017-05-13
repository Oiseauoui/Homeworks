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
            /*if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }*/

            if ($errors == false) {
                // Если ошибок нет
                // Регистрируем пользователя
                $result = $this->model->register($login, $email, $password);
            }
            if (isset($errors) && is_array($errors)) {

                foreach ($errors as $error) {
                    echo $error . "<br>";
                }
            }
            // Session::setFlash('Thank you! Your message was sent successfully!');
        }

            //  Router::redirect('/admin/users/login');
    }
    // Подключаем вид
    //require_once(ROOT . '/views/users/index.html');



    /**
     * Удаляем данные о пользователе из сессии
     */
      public function admin_logout()
    {
        Session::destroy();
        Router::redirect('/admin/');

    }
}
