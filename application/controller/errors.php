<?php
class Errors extends Controller
{
    private $controllerName = "Errors";

    public function __construct()
    {
        parent::requireControllerModel($this->controllerName);
        $modelName = $this->controllerName."_Model";
        $this->model = new $modelName;
    }
    public function default($errorMessage)
    {
        
        parent::requireControllerView($this->controllerName, $errorMessage);
    }
}