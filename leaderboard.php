<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Leader Board</title>
</head>
<body>
    <div class = "table">
        <table>
            <tr>
                <th colspan="3"><h1>Leader Board</h1></th>
            </tr>
            <tr class ="title">
                <th class="title-rank">Rank</th>
                <th class="title">Name</th>
                <th class="title-score">Score</th>
            </tr>
            <?php

                if(isset($_COOKIE['userNames'])){
                    $data = unserialize($_COOKIE['userNames']);
                }
                else
                    echo "<h1>Cookie is not set!</h1>";
                foreach ($data as $key) {
                    echo "<tr class=\"rank1\">";
                    echo "<td class=\"rank one\"><center>" . $key['rank'] . "</center></td>";
                    echo "<td class=\"rank\"><center>" . $key['name'] . "</center></td>";
                    echo "<td class=\"rank two\"><center>" . $key['score'] . "</center></td>";
                    echo "</tr>";
                }
            ?>
        </table>
     </div>
</body>
</html>