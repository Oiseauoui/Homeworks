<?php

class ContactsController extends Controller{

    public function __construct($data = array()){
        parent::__construct($data);
        $this->model = new Message();
    }

    public function index()
    {

            if  ($_POST) {
                if ($this->model->save($_POST)) {
                    Session::setFlash('Thank you! Your message was sent successfully!');
                    echo "Вы успешно зарегестрировались";
                } else {
                    throw new \Exception('Упс! Не удалось зарегестрироваться!');
                }
                exit;
            }
        }


    public function admin_index(){
        $this->data = $this->model->getList();
    }

}