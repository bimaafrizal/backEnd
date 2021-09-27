<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Heroes · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">



    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('/assets/dist/css/bootstrap.min.css') ?>" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="heroes.css" rel="stylesheet">
</head>

<body>

    <main>



        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1"> List Data Brita</h1>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <a href="<?= base_url('news/add_data_news'); ?>"> <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Tambah Data Berita</button></a>

                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Berita</th>
                                <th scope="col">Tool</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = '0';
                            foreach ($data_news as $news) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo ++$a; ?></th>

                                    <td><?php echo $news->title ?></td>
                                    <td><?php echo $news->text ?></td>
                                    <td>
                                        <a href="<?= base_url('news/update/' . $news->id); ?>">Edit</a><br>
                                        <a href="<?= base_url('news/hapus_berita/' . $news->id); ?>">Hapus</a>
                                    </td>

                                </tr>

                            <?php  } ?>

                        </tbody>
                    </table>



                </div>

            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="bg-dark text-secondary px-4 py-5 text-center">
            <div class="py-5">
                <h1 class="display-5 fw-bold text-white">Dark mode hero</h1>
                <div class="col-lg-6 mx-auto">

                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Custom button</button>
                        <button type="button" class="btn btn-outline-light btn-lg px-4">Secondary</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="b-example-divider mb-0"></div>

    </main>

    <script src="<?= base_url('/assets/dist/js/bootstrap.bundle.min.js'); ?>"></script>


</body>

</html>