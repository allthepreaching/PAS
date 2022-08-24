<?php
include_once 'header.php'
?>

<!-- NEWEST SECTION -->
<section class="boxes">
    <div>
        <div class="contain">
            <div class="donate">
                <a href="http://faithfulwordbaptist.org/donate.html">
                    <button class="button-78" role="button">
                        Donate to Faithful Word
                    </button>
                </a>
            </div>
            <div class="ns-label">
                Newest <br> Sermons
            </div>
            <?php
            $query = 'SELECT * FROM ( SELECT * FROM pasUpload ORDER BY date DESC LIMIT 3) as r ORDER BY date DESC';
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) :
                while ($uploads = mysqli_fetch_assoc($result)) :
                    echo '<div class="box">';
                    echo $uploads['code'];
                    echo '</div>';
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<!-- SLIDER SECTION -->
<section id="slider">
    <div class="slider-wrapper">
        <div class="carousel owl-carousel">
            <?php
            $query = 'SELECT * FROM docsUpload ORDER BY name ASC';
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) :
                while ($docs = mysqli_fetch_assoc($result)) :
                    echo '<div class="slide">';
                    echo $docs['code'];
                    echo '</div>';
                endwhile;
            endif;
            ?>
        </div>
</section>

<!-- SERMONS SECTION -->
<div class="sermons-wrapper">
    <div class="row">

        <?php
        $countQuery = "SELECT COUNT(*) AS count FROM `pasUpload`";
        $countResult = mysqli_query($conn, $countQuery);
        while ($row = mysqli_fetch_assoc($countResult)) {
            $countOutput = $row['count'];
        }

        $codeQuery = $mysqli->query("SELECT * FROM pasUpload ORDER BY name ASC");
        $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
        $codeCount = count($codes);

        const COLUMNS = 4;

        $base = floor($codeCount / COLUMNS);
        $remainder = $codeCount % COLUMNS;

        $chunks = [];
        for ($start = 0; $start < $codeCount; $start += $length) {
            $length = $base + ($remainder-- > 0 ? 1 : 0);
            $chunks[] = array_slice($codes, $start, $length);
        }
        ?>
        <!-- COLUMN 1 -->
        <div class="col-md-3">
            <ul class="simple">

                <?php
                foreach ($chunks[0] as $data) {
                    echo $data['code'];
                }

                ?>

            </ul>
        </div>
        <!-- COLUMN 2 -->
        <div class="col-md-3">
            <ul class="simple">

                <?php
                foreach ($chunks[1] as $data) {
                    echo $data['code'];
                }
                ?>

            </ul>
        </div>
        <!-- COLUMN 3 -->
        <div class="col-md-3">
            <ul class="simple">

                <?php
                foreach ($chunks[2] as $data) {
                    echo $data['code'];
                }
                ?>

            </ul>
        </div>
        <!-- COLUMN 4 -->
        <div class="col-md-3">
            <ul class="simple">

                <?php
                foreach ($chunks[3] as $data) {
                    echo $data['code'];
                }
                ?>

            </ul>

        </div>
    </div>
</div>

<?php
include_once 'footer.php'
?>