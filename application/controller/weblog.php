<?php
class Weblog extends Controller
{
    private $controllerName = "Weblog";
    private $model;

    public function __construct()
    {
        parent::requireControllerModel($this->controllerName);
        $modelName = $this->controllerName."_Model";
        $this->model = new $modelName;
    }
    public function default()
    {
        parent::requireControllerView($this->controllerName, []);
    }
}