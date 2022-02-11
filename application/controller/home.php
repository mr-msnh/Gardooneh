<?php
class Home extends Controller
{
    const CONTROLLER_NAME = "Home";
    private $model;

    public function __construct()
    {
        parent::requireControllerModel(self::CONTROLLER_NAME);
        $modelName = self::CONTROLLER_NAME."_Model";
        $this->model = new $modelName;
    }
    public function default()
    {
        $mainSlider     =   ($this->model)->getMainSlider();
        $rollbarTools   =   ($this->model)->getRollbarTools();
        $offerProducts  =   ($this->model)->getOfferProducts();
        $products       =   ($this->model)->getProducts();
        $adBanners      =   ($this->model)->getAdBanners();

        $defaultData = 
        [
            "MainSlider"    =>  $mainSlider,
            "RollbarTools"  =>  $rollbarTools,
            "OfferProducts" =>  $offerProducts,
            "Products"      =>  $products,
            "AdBanners"     =>  $adBanners
        ];
        
        parent::requireControllerView(self::CONTROLLER_NAME, $defaultData);
    }

    public function test()
    {
        echo "<p>"."method test is working"."</P>";
        echo date("Y/m/d  -  h:i:s");
    }
}