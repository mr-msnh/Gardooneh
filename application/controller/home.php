<?php
class Home extends Controller
{
    private $controllerName = "Home";
    private $model;

    public function __construct()
    {
        parent::requireControllerModel($this->controllerName);
        $modelName = $this->controllerName."_Model";
        $this->model = new $modelName;
    }
    public function default()
    {
        $mainSlider = ($this->model)->getMainSlider();
        $rollbarTools = ($this->model)->getRollbarTools();

        $defaultData = 
        [
            "MainSlider"=>$mainSlider,
            "RollbarTools"=>$rollbarTools
        ];
        
        parent::requireControllerView($this->controllerName, $defaultData);
    }

    public function test()
    {
        ($this->model)->generalQuerySelecte("tbl_main_slider", null, "2", true, true);
    }
}