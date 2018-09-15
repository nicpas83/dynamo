<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach ($posts as $post): ?>
    <url>
        <loc><?php echo Router::url('/',true); ?>post/
<?php echo $post['Content']['slug'];?></loc>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <?php endforeach; ?>
</urlset>