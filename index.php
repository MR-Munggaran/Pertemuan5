<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .fakeimg {
            height: 200px;         
            background: #aaa;
        }
    </style>
</head>
<body>
    <header class="bg-primary container-fluid text-white p-5 text-center">
        <h1>PORTOFOLIO SAYA</h1>
        <p>Data Scientist, AI, Networking</p>        
    </header>
    <nav class="container-fluid navbar navbar-dark bg-dark navbar-expand-sm">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" 
                data-bs-toggle="collapse" 
                data-bs-target="#menuutama"
                type="button"
                >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menuutama">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PORTOFOLIO</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <section>
            <?php 
            include "connect.php";
            include "fungsi.php";
            $sql = "SELECT * FROM berita" ;
            $hasil = mysqli_query($conn,$sql);
            $jmlData = mysqli_num_rows($hasil);
            if($jmlData>0){ 
                while ($row = mysqli_fetch_assoc($hasil)){
            ?>
             
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="mt-2"><?= $row["judul"];?></h2>
                    <h5><?= $row["subjudul"];?>, <?= $row["tgl"];?></h5>
                    <div class="fakeimg">Fake Image</div>
                    <p align="justify">
                        <?php 
                        $jmlKata = 50;
                        echo potongArtikel($row["isi"], $jmlKata,$row['id']);
                        ?>
                    </p>
                </div>
                <?php }
            }; ?>
            </div>
        </section>
    </div>
    <div class="bg-dark mt-5 p-4 text-center text-white">
        <p>Footer</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>