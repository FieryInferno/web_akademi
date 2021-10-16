<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>AcompDemy</title>
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url(); ?>asset/img/acompdemy4.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-image: url('http://localhost/web_akademi/asset/img/sertifikat.jpeg');background-repeat: no-repeat;">
  <div class="text-center" style="margin-top: 29rem;">
    <h1><?= $this->session->nama; ?></h1>
    <h1><?= $nama_kelas; ?></h1>
  </div>

  <script>
    var css = '@page { size: landscape; }',
    head = document.head || document.getElementsByTagName('head')[0],
    style = document.createElement('style');

    style.type = 'text/css';
    style.media = 'print';

    if (style.styleSheet){
      style.styleSheet.cssText = css;
    } else {
      style.appendChild(document.createTextNode(css));
    }

    head.appendChild(style);
    window.print()
  </script>
</body>
</html>