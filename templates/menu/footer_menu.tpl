{foreach $data as $val}
    <div class="column">
        <div class="title">{$val.text}</div>
        {if $val.children}
            <div class="footer-nav">
                {foreach $val.children as $v}
                    <a class="footer-link" href="{if $v.url}{$v.url}{else}#{/if}">{$v.text}</a>
                {/foreach}
            </div>
        {/if}
        {if $val@iteration == 2}
            <div class="app-links"><a href="#"><img src="/img/playmarket.png"></a><a href="#"><img src="/img/appstore.png"></a></div>
        {/if}
    </div>
{/foreach}