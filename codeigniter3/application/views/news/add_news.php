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


        <div class="b-example-divider"></div>

        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1"> Tambah Data Berita</h1>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Primary</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                    </div>
                    <form method="post" action="<?= base_url('news/save'); ?>">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name='judul'>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Berita</label>
                            <textarea class="form-control" id="berita" name='berita' rows="3"></textarea>
                        </div>
                        <input type="submit" value="Submit" name="kirim">
                    </form>



                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                    <img class="rounded-lg-3" src="bootstrap-docs.png" alt="" width="720">
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