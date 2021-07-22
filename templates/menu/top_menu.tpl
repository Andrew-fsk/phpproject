{if $data}
    <ul class="nav">
        {foreach $data as $val}
            <li class="item-level-0"><a class="link-level-0" href="{if $val.url}{$val.url}{else}#{/if}">{$val.text}</a>
            </li>
        {/foreach}
    </ul>
{/if}