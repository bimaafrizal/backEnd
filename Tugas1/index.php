<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="indexStyle.css">
    <title>Tugas 1</title>
</head>

<body>
    <?php

    class rumah
    {
        // Properties
        public $pemilik;
        public $warna;
        public $tipe;
        // Methods
        function set($pemilik, $warna, $tipe)
        {
            $this->pemilik = $pemilik;
            $this->warna = $warna;
            $this->tipe = $tipe;
        }
        function tampilData()
        {
            echo "Rumah bapak {$this->pemilik} berwarna {$this->warna} dengan tipe {$this->tipe}";
        }
        function statusRumah()
        {
            if ($this->tipe > 40) {
                $status = "Luas";
            } else {

                $status = "Minimalis";
            }
            echo $status;
        }
        function kisaranHarga()
        {
            if ($this->tipe >= 60) {
                $harga = 300000000;
            } else if ($this->tipe >= 40) {
                $harga = 200000000;
            } else {
                $harga = 100000000;
            }
            return $harga;
        }
    }

    //menampillkan data rumah
    // $inforumah->tampilData();
    // echo ", rumah ini termasuk dalam kategori ";
    // $inforumah->statusRumah();
    // echo " Kisaran harganya adalah ", $inforumah->kisaranHarga();

    // echo "<br>";
    // echo "============ DP ==========";
    // echo "<br>";
    // echo $inforumah->kisaranHarga() * 0.3;

    ?>


    <div class="all bg-light">
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-light">
                    <div class="container">
                        <a href="https://www.linkedin.com/in/bima-afrizal-malna-12033b145/" class="navbar-brand text-light">Bima Afrizal Malna/V3420018/TI-A</a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="heading">
                                    <h1> Selamat datang di Web Penghitungan Perumahan</h1>
                                    <h2>Tempat Paling Akurat Penghitungan Rumah Anda</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="forms">
                                    <h1 class="heading-form">Inputkan data anda</h1>
                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                        <div class=" row">
                                            <div class="col-2">
                                            </div>
                                            <div class="col-8">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Nama Pemilik:</label>
                                                    <input type="text" name="namaPemilik" class="form-control" id="namaPemilik" aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <div class="col-2">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                            </div>
                                            <div class="col-8">
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Warna:</label>
                                                    <input type="text" name="warna" class="form-control" id="warna">
                                                </div>
                                            </div>
                                            <div class="col-2">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                            </div>
                                            <div class="col-8">
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Tipe:</label>
                                                    <input type="text" name="tipe" class="form-control" id="tipe">
                                                </div>
                                            </div>
                                            <div class="col-2">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                            </div>
                                            <div class="col-8">
                                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                            <div class="col-2">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="output">
                            <div class="row">
                                <div class="col">
                                    <h1 class="heading-form">
                                        Output:
                                    </h1>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-2"></div>
                                            <?php
                                            if (isset($_POST['submit'])) {
                                                $namaPemilik = $_POST['namaPemilik'];
                                                $warnaRumah = $_POST['warna'];
                                                $tipeRumah = $_POST['tipe'];

                                                //membuat objek
                                                $rumah1 = new rumah();

                                                //setting properti
                                                $rumah1->set($namaPemilik, $warnaRumah, $tipeRumah);

                                            ?>
                                                <div class="col-8">
                                                    <h3><?php $rumah1->tampilData(); ?> <br></h3>
                                                    <h3><?php echo "Rumah ini termasuk dalam kategori ";
                                                        $rumah1->statusRumah(); ?> <br></h3>
                                                    <h3> <?php echo " Kisaran harganya adalah ", $rumah1->kisaranHarga(); ?> <br></h3>
                                                </div>
                                            <?php } else {
                                                $namaPemilik = "Admin";
                                                $warnaRumah = "Biru";
                                                $tipeRumah = "22";

                                                //membuat objek
                                                $inforumah = new rumah();

                                                //setting properti
                                                $inforumah->set($namaPemilik, $warnaRumah, $tipeRumah);
                                            ?>
                                                <div class="col-8">
                                                    <h3><?php $inforumah->tampilData(); ?> <br></h3>
                                                    <h3><?php echo "Rumah ini termasuk dalam kategori ";
                                                        $inforumah->statusRumah(); ?> <br></h3>
                                                    <h3> <?php echo " Kisaran harganya adalah ", $inforumah->kisaranHarga(); ?> <br></h3>
                                                </div>
                                            <?php } ?>

                                            <div class="col-2"></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2"></div>
                                            <div class="col-8">
                                                <button type="reset" class="btn btn-danger">Reset</button>
                                            </div>
                                            <div class="col-2"></div>
                                        </div>
                                    </div>
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