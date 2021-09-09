<?php
class penduduk
{
    public $nama;
    public $umur;
    public $pekerjaan;
    public $gaji;
    public $status;


    function set($name, $umur, $pekerjaan, $gaji, $status)
    {
        $this->nama = $name;
        $this->umur = $umur;
        $this->pekerjaan = $pekerjaan;
        $this->gaji = $gaji;
        $this->status = $status;
    }
    function tampilProfil()
    {
        echo "Nama saya adalah, {$this->nama} berumur {$this->umur} bekerja sebagai {$this->pekerjaan}";
    }
    function tampilGaji()
    {
        if ($this->gaji >= 8000000) {
            echo "Dengan gaji sebesar: {$this->gaji}. anda tidak bisa KPR";
        } else {
            echo "Dengan gaji sebesar: {$this->gaji}. anda bisa KPR";
        }
    }
    function golUmur()
    {
        if ($this->umur <= 5) {
            $status = "balita";
        } else if ($this->umur <= 11) {
            $status = "anak-anak";
        } else if ($this->umur <= 25) {
            $status = "remaja";
        } else if ($this->umur <= 55) {
            $status = "dewasa";
        } else {
            $status = "manula";
        }
        return $status;
    }

    function status()
    {
        echo "Status anda adalah : {$this->status}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
</head>

<body>
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
            <div class="full-card">
                <div class="card" style="width: 75%;">
                    <div class="card-body">
                        <h3>Form Tugas 2</h3>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama:</label>
                                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Umur:</label>
                                        <input type="text" name="umur" class="form-control" id="umur" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Pekerjaan:</label>
                                        <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Gaji:</label>
                                        <input type="text" name="gaji" class="form-control" id="gaji" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Status:</label>
                                        <input type="text" name="status" class="form-control" id="status" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8">
                                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </form>
                        <div class="output">
                            <div class="container">
                                <h3>Output</h3>
                                <div class="row">
                                    <div class="col-2"></div>
                                    <?php
                                    if (isset($_POST['submit'])) {
                                        $nama = $_POST['name'];
                                        $umur = $_POST['umur'];
                                        $pekerjaan = $_POST['pekerjaan'];
                                        $gaji = $_POST['gaji'];
                                        $status = $_POST['status'];

                                        $orang1 = new penduduk();

                                        $orang1->set($nama, $umur, $pekerjaan, $gaji, $status);
                                    ?>
                                        <div class="col-8">
                                            <h2><?php echo $orang1->tampilProfil(); ?></h2>
                                            <h2><?php echo "status anda adalah: {$orang1->status()}, anda termasuk golongan {$orang1->golUmur()}" ?></h2>
                                            <h2><?php echo $orang1->tampilgaji() ?></h2>
                                        </div>
                                    <?php } else {
                                        $nama = "Bima";
                                        $umur = 19;
                                        $pekerjaan = "Pelajar";
                                        $gaji = "1200000";
                                        $status = "Jomblo";

                                        $orang2 = new penduduk();

                                        $orang2->set($nama, $umur, $pekerjaan, $gaji, $status);

                                    ?>
                                        <div class="col-8">
                                            <h2><?php echo $orang2->tampilProfil(); ?></h2>
                                            <h2><?php echo "{$orang2->status()}, anda termasuk golongan {$orang2->golUmur()}" ?></h2>
                                            <h2><?php echo $orang2->tampilgaji() ?></h2>
                                        </div>

                                    <?php } ?>
                                    <div class="col-2"></div>
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