<div class="container padding-top padding-bottom">
    <div class="h1">{$data.title}</div>
    <div class="blog-list">
        {foreach $data.items as $val}
            <div class="blog-item">
                <a class="blog-image object-fit" href="/blog/{$val.url}.html">
                    <img src="/img/project.png">
                    <div class="date">{$val.post_time}</div>
                </a>
                <a class="blog-title" href="/blog/{$val.url}.html">
                    {$val.title}
                </a>
            </div>
        {/foreach}
    </div>
</div>