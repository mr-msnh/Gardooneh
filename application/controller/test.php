<?php
class Test extends Controller
{
    private $controllerName = "Test";
    private $model;


    public function __construct()
    {
        parent::requireControllerModel($this->controllerName);
        $modelName = $this->controllerName."_Model";
        $this->model = new $modelName;
    }
    public function default()
    {
        parent::requireControllerView($this->controllerName,[]);

    }

    public function func()
    {
        echo "Func is working!";
    }
}