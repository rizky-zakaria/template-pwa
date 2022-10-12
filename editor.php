<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
</head>

<body>

  <div class="container mb-5">
    <form action="https://app.kresnadumbo.id/kirkat" method="POST">
      <input type="hidden" name="_token" value="MdXiWpcTTcRTsvO7CZlbQELEKgaZ1dheqpRFjDOZ">
      <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" class="form-control" id="title" name="judul">
      </div>
      <div class="mb-3">
        <label for="desc" class="form-label">Pendahuluan</label>
        <textarea class="pendahuluan form-control" id="pendahuluan" name="pendahuluan" cols="3000" rows="1000"></textarea>
      </div>
      <div class="mb-3">
        <label for="desc" class="form-label">Keadaan Sasaran</label>
        <textarea class="keadaan-sasaran form-control" name="keadaan" id="keadaan-sasaran" cols="3000" rows="1000"></textarea>
      </div>
      <div class="mb-3">
        <label for="desc" class="form-label">Analisa</label>
        <textarea class="analisa form-control" id="analisa" name="analisa" cols="3000" rows="1000"></textarea>
      </div>
      <div class="mb-3">
        <label for="desc" class="form-label">Prediksi</label>
        <textarea class="prediksi form-control" id="prediksi" name="prediksi" cols="3000" rows="1000"></textarea>
      </div>
      <div class="mb-3">
        <label for="desc" class="form-label">Kesimpulan</label>
        <textarea class="kesimpulan form-control" id="kesimpulan" name="kesimpulan" cols="3000" rows="1000"></textarea>
      </div>
      <div class="mb-3">
        <label for="desc" class="form-label">Penutup</label>
        <textarea class="penutup form-control" id="penutup" name="penutup" cols="3000" rows="1000"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <div class="d-flex justify-content-evenly fixed-bottom bg-primary text-light">
    <div class="p-2">
      <a href="index.php" class="nav-link">
        <i class="fa fa-file"></i>
      </a>
    </div>
    <div class="p-2">
      <a href="editor.php" class="nav-link">
        <i class="fa fa-edit"></i>
      </a>
    </div>
    <div class="p-2">
      <a href="profile.php" class="nav-link">
        <i class="fa fa-user"></i>
      </a>
    </div>
  </div>
  <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  <script src="ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('pendahuluan');
    CKEDITOR.replace('keadaan-sasaran');
    CKEDITOR.replace('analisa');
    CKEDITOR.replace('prediksi');
    CKEDITOR.replace('kesimpulan');
    CKEDITOR.replace('penutup');
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>