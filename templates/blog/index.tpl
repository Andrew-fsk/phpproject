<div class="container padding-top padding-bottom">
    <div class="h1">{$data.title}</div>
    <div class="blog-list">
        {foreach $data.items as $val}
            {include file="file:blog/item_preview.tpl" val = $val}
        {/foreach}
    </div>
</div>