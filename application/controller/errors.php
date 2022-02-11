<?php
class Errors extends Controller
{
    const CONTROLLER_NAME = "Errors";

    public function __construct()
    {
        parent::requireControllerModel(self::CONTROLLER_NAME);
        $modelName = self::CONTROLLER_NAME."_Model";
        $this->model = new $modelName;
    }
    public function default($errorMessage)
    {
        
        parent::requireControllerView(self::CONTROLLER_NAME, $errorMessage);
    }
}