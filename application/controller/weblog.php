<?php
class Weblog extends Controller
{
    const CONTROLLER_NAME = "Weblog";
    private $model;

    public function __construct()
    {
        parent::requireControllerModel(self::CONTROLLER_NAME);
        $modelName = self::CONTROLLER_NAME."_Model";
        $this->model = new $modelName;
    }
    public function default()
    {
        parent::requireControllerView(self::CONTROLLER_NAME, []);
    }
}