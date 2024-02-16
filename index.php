<?php
require './models/movie.php';
require './instances/scream_VI.php';
require './instances/requiem_for_a_dream.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>PHP OOP 1</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Original language</th>
                        <th scope="col">Execution time</th>
                        <th scope="col">Producer</th>
                        <th scope="col">Country of origin</th>
                        <th scope="col">Genres</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $scream_VI->get_title() ?>
                        </td>
                        <td>
                            <?php echo $scream_VI->get_original_language() ?>
                        </td>
                        <td>
                            <?php echo $scream_VI->get_execution_time() ?>
                        </td>
                        <td>
                            <?php echo $scream_VI->get_producer() ?>
                        </td>
                        <td>
                            <?php echo $scream_VI->get_country_of_origin() ?>
                        </td>
                        <td>
                            <?php echo $scream_VI->get_genres() ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $requiem_for_a_dream->get_title() ?>
                        </td>
                        <td>
                            <?php echo $requiem_for_a_dream->get_original_language() ?>
                        </td>
                        <td>
                            <?php echo $requiem_for_a_dream->get_execution_time() ?>
                        </td>
                        <td>
                            <?php echo $requiem_for_a_dream->get_producer() ?>
                        </td>
                        <td>
                            <?php echo $requiem_for_a_dream->get_country_of_origin() ?>
                        </td>
                        <td>
                            <?php echo $requiem_for_a_dream->get_genres() ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="text/javascript" src="./javascript/scripts.js"></script>
</body>

</html>