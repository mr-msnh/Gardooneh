<?php
class Home_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
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
}