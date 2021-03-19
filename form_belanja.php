<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body style="background-color:#f1f1f1;">

    <div class="container" style="margin-top:2em; background-color:#f1f1f1; max-width:75em;">
        <div class="row">
            <div class="col-md-8" style="background-color:white; padding-top:0.5em;">
                <form class="form-horizontal" method="post" action="form_belanja.php" autocomplete="off">
                <fieldset>

                <!-- Form Name -->
                <legend>Belanja Online</legend>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="customer">Customer</label>  
                <div class="col-md-5">
                <input id="customer" name="customer" type="text" placeholder="Masukan Nama Customer" class="form-control input-md">
                    
                </div>
                </div>

                <!-- Multiple Radios (inline) -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="produk">Pilih Produk</label>
                <div class="col-md-4"> 
                    <label class="radio-inline" for="produk-0">
                    <input type="radio" name="produk" id="produk-0" value="TV">
                    TV
                    </label> 
                    <label class="radio-inline" for="produk-1">
                    <input type="radio" name="produk" id="produk-1" value="Kulkas">
                    Kulkas
                    </label> 
                    <label class="radio-inline" for="produk-2">
                    <input type="radio" name="produk" id="produk-2" value="Mesin Cuci">
                    Mesin Cuci
                    </label>
                </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="jumlah">Jumlah</label>  
                <div class="col-md-5">
                <input id="jumlah" name="jumlah" type="number" placeholder="Masukan Jumlah" class="form-control input-md">
                    
                </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="kirim"></label>
                <div class="col-md-4">
                    <button id="kirim" name="kirim" class="btn btn-success">Kirim</button>
                </div>
                </div>

                </fieldset>
                </form>
            </div>
            <div class="col-md-4">
                <table class="table" style="font-size:14px;">
                <thead>
                    <tr style="background-color:lightblue;">
                    <th scope="col">Daftar Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="background-color:white;">
                    <td>TV: 4.200.000</td>
                    </tr>
                    <tr style="background-color:white;">
                    <td>Kulkas: 3.100.000</td>
                    </tr>
                    <tr style="background-color:white;">
                    <td>Mesin Cuci: 3.800.000</td>
                    </tr>
                    <tr style="background-color:lightblue;">
                    <th scope="col">Harga Dapat Berubah Setiap Saat!</th>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
        
    <?php
    error_reporting(0);
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $kirim = $_POST['kirim'];

    if ($produk == 'TV') {
        $total = $jumlah * 4200000;
    }
    elseif ($produk == 'Kulkas') {
        $total = $jumlah * 3100000;
    }
    elseif ($produk == 'Mesin Cuci') {
        $total = $jumlah * 3800000;
    }
    ?>

        <div class="row">
            <div class="col-md" style="margin-top:1.5em;">
                <table class="table" style="max-width:30em; background-color:white;">
                    <tr>
                        <td>Customer</td>
                        <td>:</td>
                        <td><?php echo $customer; ?></td>
                    </tr>
                    <tr>
                        <td>Produk</td>
                        <td style="padding-right:3em;">:</td>
                        <td><?php echo $produk; ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>:</td>
                        <td><?php echo $jumlah; ?></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>:</td>
                        <td><?php echo number_format($total,2,',','.'); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
</body>
</html>