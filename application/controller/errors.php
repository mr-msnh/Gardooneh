<?php
class Errors extends Controller
{
    private $controllerName = "errors";

    public function __construct()
    {
        parent::requireControllerModel($this->controllerName);
        $modelName = $this->controllerName."_model";
        $this->model = new $modelName;
    }
    public function default($errorMessage)
    {
        parent::requireControllerView($this->controllerName, $errorMessage);
    }
}