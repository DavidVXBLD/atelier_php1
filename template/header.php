<!doctype html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Atelier PHP</title>
    </head>
  <body>
    <header class="bg-dark text-white py-5 mb-0">
        <section class="container text-center">
            <h1><?php echo $site_infos["title"]; ?></h1>
            <p><?php echo $site_infos["description"]; ?></p>
        </section>
    </header>
    <main class="container my-5">