<?php


class RegisterController extends Controller
{
    public function __construct($data = array()){
        parent::__construct($data);
        $this->model = new CreateUser();
    }

    public function index()
    {
        foreach ($_POST as $key => $value) {
            if (empty($_POST[$key])) {
                echo "Все поля должны быть заполнены!";
            }

            if ($_POST) {
                if ($this->model->create($_POST)) {
                    Session::setFlash('Thank you! Your message was sent successfully!');
                    echo "Вы успешно зарегестрировались";
                } else {
                    throw new \Exception('Упс! Не удалось зарегестрироваться!');
                }
                exit;
            }
        }
    }
            public function admin_index()
    {
        $this->data = $this->model->getList();
    }
}
