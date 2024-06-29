<?php
if (isset($_POST['hape'])) {
    $selectedHapes = $_POST['hape']; // 
} else {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Programming UAS</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <style type="text/css">
        #navbar,
        #content {
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="navbar">
            <div class="navbar-container">
                <img src="https://picsum.photos/200/200" class="img-navbar">
                <h1>Toko Hape</h1>
            </div>
        </div>
        <div id="content">
            <div class="card-container">
                <?php foreach ($selectedHapes as $key => $value) : ?>
                    <div class="card">
                        <img src="<?= $_POST['gambar_' . $value] ?>" class="card-img">
                        <div class="card-description">
                            <p class="card-title">
                                <?php echo $_POST['merk_' . $value] . " " . $_POST['model_' . $value]; ?>
                            </p>
                            <p id="price"><span class="rp">Rp </span><?php echo $_POST['harga_' . $value]; ?></p>
                            <div class="spec">
                                <p>Spesifikasi</p>
                                <ul class="card-spec">
                                    <li>RAM : <span><?php echo $_POST['ram_' . $value]; ?></span></li>
                                    <li>Internet : <span><?php echo $_POST['internet_' . $value]; ?></span></li>
                                    <li>Baterai : <span><?php echo $_POST['baterai_' . $value]; ?></span></li>
                                    <li>Storage : <span><?php echo $_POST['storage_' . $value]; ?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(e) {
                // alert("hello world!")

            });
            $(document).ready(function() {
                if (localStorage.getItem('darkMode') === 'enabled') {
                    $('body').addClass('dark-mode');
                }
            });
        </script>
</body>

</html>