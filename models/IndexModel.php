<?php

class IndexModel extends Model
{

    public function showMenu($menu_id)
    {
        $data = null;
        if ($menu_id){
            $data = DB::query("select * from `menu` where `menu_id` = " . intval($menu_id) . " and `parent_id` = 0");
            foreach ($data as &$val){
                if($val['has_children']){
                    $val['children'] =  DB::query("select * from `menu` where `menu_id` = " . intval($menu_id) . " and `parent_id` = " . $val['item_id']);
                }
            }
        }
        return $data;
    }
}