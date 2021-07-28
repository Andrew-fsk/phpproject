<?php

class BlogModel extends Model
{
    public function getItemsData()
    {
        $data = DB::query("select * from `blog_posts`");
        return $data;
    }

    public function getItemData($item_id, $itemUrl)
    {
        $item_id = intval($item_id);
        if($item_id){
            $data = DB::query("select * from `blog_posts` where `item_id` = " . $item_id . " and `url` = '" . $itemUrl . "'");
            return count($data) ? $data[0] : null;
        } else {
            return null;
        }
    }
}