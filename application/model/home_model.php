<?php
class Home_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getWebsiteConfig()
    {
        $query = "SELECT * FROM `tbl_website_config` LIMIT 0,1";

        $result = parent::queryExceute($query);

        return $result;
    }

    public function getPageConfig()
    {
        $query = "SELECT * FROM `tbl_page_config` WHERE `name` = ? LIMIT 0,1";

        $result = parent::queryExceute($query, ["home"]);

        return $result;
    }

    public function getMainSlider()
    {
        $query = "SELECT * FROM `tbl_main_slider` WHERE `active` = 1 ORDER BY `id` DESC LIMIT 0,4";

        $result = parent::queryExceute($query);

        return $result;
    }

    public function getRollbarTools()
    {
        $queryGroup1 = "SELECT * FROM `tbl_rollbar_tools` WHERE `active` = 1 AND `group_id` = 1 ORDER BY `id` LIMIT 0,6";
        $queryGroup2 = "SELECT * FROM `tbl_rollbar_tools` WHERE `active` = 1 AND `group_id` = 2 ORDER BY `id` LIMIT 0,6";

        $resultGroup1 = parent::queryExceute($queryGroup1);
        $resultGroup2 = parent::queryExceute($queryGroup2);

        $result = ["group1"=>$resultGroup1, "group2"=>$resultGroup2];
        
        return $result;
    }

    public function getOfferProducts()
    {
        $query = "SELECT `id`, `name`, `brand`, `price`, `price_off`, `percent_off`, `cover_image`, `star`, `active` FROM `tbl_products` WHERE `active` = 1 AND `percent_off` != 0 ORDER BY `id` DESC LIMIT 0,8";

        $result = parent::queryExceute($query);

        return $result;
    }

    public function getNewestProducts()
    {
        $query = "SELECT `id`, `name`, `brand`, `price`, `percent_off`, `cover_image`, `star`, `active` FROM `tbl_products` WHERE `active` = 1 AND `percent_off` = 0 ORDER BY `id` DESC LIMIT 0,5";

        $result = parent::queryExceute($query);

        return $result;
    }

    public function getMostViewdProducts()
    {
        $query = "SELECT `id`, `name`, `brand`, `price`, `percent_off`, `cover_image`, `star`, `active` FROM `tbl_products` WHERE `active` = 1 AND `percent_off` = 0 ORDER BY `total_view` DESC LIMIT 0,5";

        $result = parent::queryExceute($query);

        return $result;
    }

    public function getMostSalesProducts()
    {
        $query = "SELECT `id`, `name`, `brand`, `price`, `percent_off`, `cover_image`, `star`, `active` FROM `tbl_products` WHERE `active` = 1 AND `percent_off` = 0 ORDER BY `total_sale` DESC LIMIT 0,5";

        $result = parent::queryExceute($query);

        return $result;
    }

    public function getAdBanners()
    {
        $query = "SELECT * FROM `tbl_ad_banners` WHERE `active` = 1 ORDER BY `id` LIMIT 0,2";

        $result = parent::queryExceute($query);

        return $result;
    }
}