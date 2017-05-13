<?php

class User extends Model
{
    public function getList(){
        $sql = "select * from users where 1";
        return $this->db->query($sql);
    }

   public function getByLogin($login)
    {
        $login = $this->db->escape($login);
        $sql = "select * from users where login = '{$login}' limit 1";
        $result = $this->db->query($sql);
        if (isset($result[0])) {
            return $result[0];
        }
        return false;
    }
               /**
     * Регистрация пользователя
     * @param string $login <p>Имя</p>
     * @param string $email <p>E-mail</p>
     * @param string $password <p>Пароль</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
  public  function register($login, $email, $password)
    {
        // Соединение с БД
        $login = $this->db->escape($login);
        $email = $this->db->escape($email);
        $password = $this->db->escape($password);

        // Текст запроса к БД
        $sql = "INSERT INTO users
                        set login = '{$login}',
                       email = '{$email}',
                       password = '{$password}'
                       ";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $this->db->query($sql);
        if (isset($result[0])) {
            return $result[0];
        }
        return false;
    }
    /**
     * Редактирование данных пользователя
     * @param integer $id <p>id пользователя</p>
     * @param string $login <p>Имя</p>
     * @param string $password <p>Пароль</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
   public function edit($id, $login, $password)
   {
       // Соединение с БД
       $id = $this->db->escape($id);
       $login = $this->db->escape($login);
       $password = $this->db->escape($password);

       // Текст запроса к БД
       $sql = "UPDATE users
                        set login = '{$login}',
                        password = '{$password}'
                       WHERE id = '{'$id}'
                       ";

       // Получение и возврат результатов. Используется подготовленный запрос
       $result = $this->db->query($sql);
       if (isset($result[0])) {
           return $result[0];
       }
       return false;
   }
        /**
     * Проверяем существует ли пользователь с заданными $email и $password
     * @param string $email <p>E-mail</p>
     * @param string $password <p>Пароль</p>
     * @return mixed : integer user id or false
     */
   /* public static function checkUserData($email, $password)
    {
        // Соединение с БД
        $db = Db::query();
        // Текст запроса к БД
        $sql = 'SELECT * FROM users WHERE email = :email AND password = :password';
        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();
        // Обращаемся к записи
        $user = $result->fetch();
        if ($user) {
            // Если запись существует, возвращаем id пользователя
            return $user['id'];
        }
        return false;
    }
    /**
     * Запоминаем пользователя
     * @param integer $userId <p>id пользователя</p>
     */
  /*  public static function auth($userId)
    {
        // Записываем идентификатор пользователя в сессию
        $_SESSION['user'] = $userId;
    }
    /**
     * Возвращает идентификатор пользователя, если он авторизирован.<br/>
     * Иначе перенаправляет на страницу входа
     * @return string <p>Идентификатор пользователя</p>
     */
   /* public static function checkLogged()
    {
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
       // header("Location: /user/login");
    }
    /**
     * Проверяет является ли пользователь гостем
     * @return boolean <p>Результат выполнения метода</p>
     */
   /* public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }
    /**
     * Проверяет имя: не меньше, чем 2 символа
     * @param string $login <p>Имя</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
   public static function checklogin($login)
    {
        if (strlen($login) >= 2) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет имя: не меньше, чем 6 символов
     * @param string $password <p>Пароль</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
   public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }
    /**
     * Проверяет email
     * @param string $email <p>E-mail</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    /**
     * Проверяет не занят ли email другим пользователем
     * @param type $email <p>E-mail</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
   /* public static function checkEmailExists($email)
    {
        // Соединение с БД
        $db = Db::query();
        // Текст запроса к БД
        $sql = 'SELECT COUNT(*) FROM users WHERE email = :email';
        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        if ($result->fetchColumn())
            return true;
        return false;
    }
    /**
     * Возвращает пользователя с указанным id
     * @param integer $id <p>id пользователя</p>
     * @return array <p>Массив с информацией о пользователе</p>
     */
   /* public static function getUserById($id)
    {
        // Соединение с БД
        $db = Db::query();
        // Текст запроса к БД
        $sql = 'SELECT * FROM users WHERE id = :id';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        return $result->fetch();
    }*/
}
