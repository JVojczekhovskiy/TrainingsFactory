<?php
    namespace app\controls;
    use app\models as MODELS;
    use app\view as VIEW;
    use ao\php\framework\controls\AbstractController as AbstractController;

class BezoekerController extends AbstractController
{
    protected $action;
    protected $control;
    protected $view;
    protected $model;

    public function __construct($control,$action, $message=NULL)
    {
        $this->control = $control;
        $this->action = $action;

        $this->view=new VIEW\View();
        $this->model = new MODELS\BezoekerModel($control, $action);

        if(!empty($message)){
            $this->view->set('boodschap',$message);
        }
    }

    /**
    *execute vertaalt de action variable dynamisch naar een handler van de specifieke controller.
    * als de handler niet bestaat wordt de default als action ingesteld en
    * wordt de taak overgedragen aan de defaultAction handler. defaultAction bestaat altijd wel.
    */
    public function execute()
    {
        $opdracht = $this->action.'Action';
        if(!method_exists($this,$opdracht))
        {
            $opdracht = 'defaultAction';
            $this->action = 'default';
        }
        $this->$opdracht();
        $this->view->setAction($this->action);
        $this->view->setControl($this->control);
        $this->view->toon();
    }

    protected function forward($action, $control=null)
    {
        if($control!==null)
        {
            $klasseNaam = __NAMESPACE__.'\\'.ucFirst($control).'Controller';
            $controller = new $klasseNaam($control,$action);

        }
        else
        {
            $this->action = $action;
            $controller = $this;
        }
        $controller->execute();
        exit();
    }

    protected function inloggenAction()
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

    protected function defaultAction()
    {

    }

}
