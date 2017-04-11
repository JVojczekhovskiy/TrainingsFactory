<?php
namespace app\controls;

use ao\php\framework\controls\AbstractController;

class BezoekerController extends AbstractController
{

    public function inloggenAction()
    {
        if($this->model->isPostLeeg())
        {
           $this->view->set("boodschap","Vul uw gegevens in");
        }
        else
        {
            $resultInlog=$this->model->controleerInloggen();
            switch($resultInlog)
            {
                case REQUEST_SUCCESS:
                     $this->view->set("boodschap","Welkom op de beheers applicatie. Veel werkplezier");
                     $recht = $this->model->getGebruiker()->getRecht();
                     $this->forward("default", $recht);
                     break;
                case REQUEST_FAILURE_DATA_INVALID:
                     $this->view->set("boodschap","Gegevens kloppen niet. Probeer opnieuw.");
                     break;
                case REQUEST_FAILURE_DATA_INCOMPLETE:
                     $this->view->set("boodschap","niet alle gegevens ingevuld");
                     break;
            }
        }
    }

    public function defaultAction()
    {

    }

    public function lidWordenAction()
    {

    }

    public function regelsAction()
    {

    }


}
