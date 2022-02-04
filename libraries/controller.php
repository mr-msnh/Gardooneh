<?php
class Controller 
{
    private $controller;
    private $action;
    private $param;

    private $requestedController;
    private $requestedParam;

    public function __construct()
    {
        //import configs and libraries
        require_once ("./config/domain.php");
        require_once ("./config/database.php");

        require_once ("./libraries/functions.php");
        require_once ("./libraries/model.php");


        $this->router();
    }

    private function router()
    {
        $this->handleRequest();
        $this->handleRequestedContrller();
        $this->handleRequestedParam();
        $this->handleRequestedAction();
    }

    private function handleRequest()
    {
        if(isset($_GET["controller"]) && !empty($_GET["controller"]))
        {
            $this->controller = Functions::letterToLowerCase($_GET["controller"]);
            if ($this->controller == "index") { $this->controller = "home"; }
            
            if(isset($_GET["action"]) && !empty($_GET["action"]))
            {
                $this->action = Functions::letterToLowerCase($_GET["action"]);
                
                if(isset($_GET["param"]) && !empty($_GET["param"]))
                {
                    $this->param = Functions::letterToLowerCase($_GET["param"]);
                }
                else
                {
                    $this->param = "";
                }
            }
            else if(isset($_GET["param"]) && !empty($_GET["param"]))
            {
                $this->action = "default";
                $this->param = Functions::letterToLowerCase($_GET["param"]);
            }
            else
            {
                $this->action = "default";
                $this->param = "";
            }
        }
        else
        {
            $this->controller = "home";
        }
    }

    private function handleRequestedContrller()
    {
        $pathController = "./application/controller/".$this->controller.".php";

        if(file_exists($pathController))
        {
            require_once($pathController);
            $this->requestedController = new $this->controller;

        }
        else
        {
            $this->handelErrorController("404");
        }
    }
    
    private function handleRequestedParam()
    {
        $this->requestedParam = Functions::convertTOCleanArray($this->param, "-", 5);
    }

    private function handleRequestedAction()
    {
        if(method_exists($this->requestedController, $this->action))
        {
            call_user_func_array([$this->requestedController,$this->action], $this->requestedParam);
        }
        else
        {
            $this->handelErrorController("404");
        }
    }

    private function handelErrorController($errorMessag)
    {
        require_once(ERROR_CONTROLLER);
        $this->requestedController = new Errors;
        $this->action = "default";
        $this->requestedParam = [$errorMessag];
        call_user_func_array([$this->requestedController,$this->action], $this->requestedParam);
    }

    protected function unwantedError($errorMessage)
    {
        header("Location:".PATH_URL."errors/".$errorMessage);
    }


    protected function requireControllerView($controllerName, $parameters)
    {
        require_once ("./application/view/".$controllerName."/index.php");
    }

    protected function requireControllerModel($controllerName)
    {
        $modelName = $controllerName."_model";
        require_once ("./application/model/".$modelName.".php");
    }
}