<?php
include 'baglan.php';
$db = new dbConnection();
$sitemapPath = '../../sitemap.xml';
$xml = '
<?xml version="1.0" encoding="utf-8" standalone="yes" ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://www.fdnmarine.com/</loc>
        <lastmod>2024-08-30</lastmod>
        <changefreq>always</changefreq>
        <priority>N/A</priority>
    </url>
    <url>
        <loc>https://www.fdnmarine.com/index.php</loc>
        <lastmod>2024-08-30</lastmod>
        <changefreq>always</changefreq>
        <priority>N/A</priority>
    </url>
    <url>
        <loc>https://www.fdnmarine.com/modeller.php</loc>
        <lastmod>2024-08-30</lastmod>
        <changefreq>always</changefreq>
        <priority>N/A</priority>
    </url>
    <url>
        <loc>https://www.fdnmarine.com/iletisim.php</loc>
        <lastmod>2024-08-30</lastmod>
        <changefreq>always</changefreq>
        <priority>N/A</priority>
    </url>
';
$getmodels = $db->getRows("SELECT * FROM tbproduct");
foreach ($getmodels as $product) {
    $url = 'https://www.fdnmarine.com/model-detay.php?';
    $url .= 'model=' . $product['product_url'] . '&amp;mid?=' . $product['product_id'];
    $xml .= '
        <url>
        <loc>' . $url . '</loc>
        <lastmod>' . date("Y/m/d") . '</lastmod>
        <changefreq>always</changefreq>
        <priority>N/A</priority>
    </url>
    ';
}
$xml .= '</urlset>';

file_put_contents($sitemapPath, $xml);

echo 'Sitemap başarıyla güncellendi!';