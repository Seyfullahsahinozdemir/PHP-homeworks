<?php
define("baslik", "My Page");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <h1><?php echo baslik; ?></h1>
  <div class="container my-3">
    <div class="row">
      <div class="col-3">
        <ul class="list-group">
          <li class="list-group-item">
            Macera
          </li>
          <li class="list-group-item">
            Dram
          </li>
          <li class="list-group-item">
            Komedi
          </li>
          <li class="list-group-item">
            Korku
          </li>
        </ul>
      </div>
      <div class="col-9">
        <div class="card mb-3">
          <div class="row">
            <div class="col-3">
              <img class="img-fluid" src="img/1.jpeg" alt="">
            </div>
            <div class="col-9">
              <div class="card-body">
                <h5 class="card-title">
                  <a href="paper-lives.html">Paper Lives</a>
                </h5>
                <p class="card-text ellipsis">
                  <?php
                  $description = ucfirst(strtolower("Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)"));
                  echo substr($description, 0, 50) . '...';
                  ?>
                </p>
                <div>
                  <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                  <span class="badge bg-success">Yorum: 55</span>
                  <span class="badge bg-success">Bağeni: 85</span>
                  <span class="badge bg-success">Vizyonda: Evet</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3">
          <div class="row">
            <div class="col-3">
              <img class="img-fluid" src="img/2.jpeg" alt="">
            </div>
            <div class="col-9">
              <div class="card-body">
                <h5 class="card-title">
                  <a href="walking-dead.html">Walking Dead</a>
                </h5>
                <p class="card-text ellipsis">
                  <?php
                  $description = ucfirst(strtolower("Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur."));
                  echo substr($description, 0, 50) . '...';
                  ?>
                </p>
                <div>
                  <span class="badge bg-success">Yapım Tarihi: 31.10.2010</span>
                  <span class="badge bg-success">Yorum: 236</span>
                  <span class="badge bg-success">Bağeni: 1023</span>
                  <span class="badge bg-danger">Vizyonda: Hayır</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>