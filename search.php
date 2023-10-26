<?php require_once "admin/settings/db.php";
$db = new DBConnection();
// Get the search query from the POST request
if(isset($_POST['searchQuery'])) {
    $searchQuery = $_POST['searchQuery'];

    // Construct and execute the SQL query
    $sql = "SELECT * FROM echo.blog WHERE MATCH(Basliq) AGAINST(:searchQuery)";
    $stmt = $db->query($sql);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(count($results) > 0) {
        // Display search results
        foreach($results as $result) {
            echo "<p><strong>Title:</strong> " . $result['Basliq'] . "</p>";
            echo "<p><strong>Content:</strong> " . $result['mezmun'] . "</p>";
            echo "<hr/>";
        }
    } else {
        echo "No results found.";
    }
}
