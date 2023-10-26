<?php require_once "admin/settings/db.php";
$db = new DBConnection();
// Handle the filter parameters, assuming you use POST
$keyword = $_POST['keyword'] ?? '';
$category = $_POST['category'] ?? '';

// Build the SQL query with a JOIN
$sql = "SELECT blog.*, blog_kat.Ad FROM blog LEFT JOIN blog_kat ON blog.kat_id = blog_kat.id WHERE 1";

if(!empty($keyword)) {
    $sql .= " AND blog.Basliq LIKE :keyword";
}
if(!empty($category)) {
    $sql .= " AND blog.kat_id = :category";
}

$stmt = $db->prepare($sql);

if(!empty($keyword)) {
    $str = "%{$keyword}%";
    $stmt->bindParam(':keyword', $str, PDO::PARAM_STR);
}
if(!empty($category)) {
    $stmt->bindParam(':category', $category, PDO::PARAM_INT);
}

$stmt->execute();

// Fetch and return the filtered courses as JSON
$news = $stmt->fetchAll(PDO::FETCH_ASSOC);
rsort($news);

foreach($news as $post) { ?>
    <div class="echo-hero-baner">
        <div class="echo-inner-img-ct-1  img-transition-scale">
            <a href="xeber-<?= $post["slug"] . "-" . $post["id"] ?>">
                <img src="<?= $post["sekil"] ?>"
                     alt="<?= $post["Basliq"] ?>"/>
            </a>
        </div>
        <div class="echo-banner-texting">
            <h3 class="echo-hero-title text-capitalize font-weight-bold">
                <a href="xeber-<?= $post["slug"] . "-" . $post["id"] ?>"
                   class="title-hover">
                    <?= $post["Basliq"] ?>
                </a>
            </h3>
            <div class="echo-hero-area-titlepost-post-like-comment-share">
                <div class="echo-hero-area-like-read-comment-share">
                    <a href="xeber-<?= $post["slug"] . "-" . $post["id"] ?>">
                        <i class="fa-light fa-clock"></i> <?= substr($post["tarix"], 0, 10) ?>
                    </a>
                </div>
                <div class="echo-hero-area-like-read-comment-share">
                    <a href="xeber-<?= $post["slug"] . "-" . $post["id"] ?>">
                        <i class="fa-light fa-eye"></i> <?= $post["views"] ?> Views
                    </a>
                </div>
            </div>
            <hr/>
            <p class="echo-hero-discription">
                <?= mb_substr($post["mezmun"], 0, 154) ?>...
            </p>
        </div>
    </div>
<?php }