<?php
    namespace app\controls;

    use ao\php\framework\controls\AbstractController;

class MemberController extends AbstractController
{
    public function defaultAction()
    {
       $gebruiker = $this->model->getGebruiker();
       $this->view->set("gebruiker",$gebruiker);
    }

    public function uitloggenAction()
    {
        $this->model->uitloggen();
        $this->forward('default','bezoeker');
    }    
}
