<?php
include_once 'header.php'
?>

<!-- SEARCH RESULTS SECTION -->
<section class="search-boxes">
    <div>
        <div class="contain">
            <div class="search-label">
                Search Results
            </div>
            <?php
            if (isset($_POST['submit-search'])) {
                $search = mysqli_real_escape_string($conn, $_POST['search']);
                $sql = "SELECT * FROM pasUpload WHERE name LIKE '%$search%'";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);

                if ($queryResult > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="search-box">';
                        echo $row['code'];
                        echo '</div>';
                    }
                } else {
                    echo '<p class="errors">';
                    echo 'There are no results matching your search terms.';
                    echo '</p>';
                }
            }
            ?>
        </div>
    </div>
</section>

<?php
include_once 'footer.php'
?>