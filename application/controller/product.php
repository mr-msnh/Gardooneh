<?php
class Product extends Controller
{
    const CONTROLLER_NAME = "Product";
    private $model;

    public function __construct()
    {
        parent::requireControllerModel(self::CONTROLLER_NAME);
        $modelName = self::CONTROLLER_NAME."_Model";
        $this->model = new $modelName;
    }
    public function default($param)
    {
        $websiteConfig      =   ($this->model)->getWebsiteConfig();
        $pageConfig         =   ($this->model)->getPageConfig();
        $product            =   ($this->model)->getProduct($param);

        $this->validateData([$product]);

        $defaultData = 
        [
            "WebsiteConfig"     =>  $websiteConfig,
            "PageConfig"        =>  $pageConfig,
            "Product"           =>  $product
        ];

        parent::requireControllerView(self::CONTROLLER_NAME, $defaultData);
    }

    public function validateData($value)
    {
        $result = Functions::checkEmptyVariables($value);

        if($result == false)
        {
            parent::unwantedError("404");
        }
    }
}