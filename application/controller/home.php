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
        $websiteConfig      =   ($this->model)->getWebsiteConfig();
        $pageConfig         =   ($this->model)->getPageConfig();
        $mainSlider         =   ($this->model)->getMainSlider();
        $rollbarTools       =   ($this->model)->getRollbarTools();
        $offerProducts      =   ($this->model)->getOfferProducts();
        $newestProducts     =   ($this->model)->getNewestProducts();
        $mostViewdProducts  =   ($this->model)->getMostViewdProducts();
        $mostSalesProducts  =   ($this->model)->getMostSalesProducts();
        $adBanners          =   ($this->model)->getAdBanners();

        $defaultData = 
        [
            "WebsiteConfig"     =>  $websiteConfig,
            "PageConfig"        =>  $pageConfig,
            "MainSlider"        =>  $mainSlider,
            "RollbarTools"      =>  $rollbarTools,
            "OfferProducts"     =>  $offerProducts,
            "NewestProducts"    =>  $newestProducts,
            "MostViewdProducts" =>  $mostViewdProducts,
            "MostSalesProducts" =>  $mostSalesProducts,
            "AdBanners"         =>  $adBanners
        ];
        
        parent::requireControllerView(self::CONTROLLER_NAME, $defaultData);
    }

    public function test()
    {
        echo "<p>"."method test is working"."</P>";
        // echo date("Y/m/d  -  h:i:s");
    }
}