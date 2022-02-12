<?php
class Orders_Model extends Model
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

        $result = parent::queryExceute($query, ["orders"]);

        return $result;
    }
}