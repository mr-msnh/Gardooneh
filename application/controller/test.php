<?php
class Test extends Controller
{
    private $controllerName = "test";
    private $model;


    public function __construct()
    {
        parent::requireControllerModel($this->controllerName);
        $modelName = $this->controllerName."_model";
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