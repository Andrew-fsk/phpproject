<div class="padding-top padding-bottom">
    <div class="container">
        <ul class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="#" itemprop="item">Главная</a></li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="#" itemprop="item">Блог</a></li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span href="./index.html" itemprop="item">{$data.title}</span></li>
        </ul>
        <h1>{$data.title}</h1>
        <div class="blog-item-image object-fit"><img src="../img/project.png">
            <div class="date">{$data.post_time}</div>
        </div>
        {$data.item_content}
    </div>
</div>
