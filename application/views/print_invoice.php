<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url("assets/") ?>images/svg/logo-icon.svg" type="image/x-icon">
    <title>Burpang</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>
    <link rel="stylesheet" type="text/css" href="http://demo.harnishdesign.net/html/koice/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="http://demo.harnishdesign.net/html/koice/vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="http://demo.harnishdesign.net/html/koice/css/stylesheet.css" />
</head>

<body onload="window.print()" onafterprint="window.close()">
    <style>
        .col,
        .col-1,
        .col-10,
        .col-11,
        .col-12,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-auto,
        .col-lg,
        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-auto,
        .col-md,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-auto,
        .col-sm,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-auto,
        .col-xl,
        .col-xl-1,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-auto {
            width: 0% !important;
        }
    </style>
    <div class="container-fluid">
        <header>
            <div class="row align-items-center">
                <div class="col-sm-7 text-center text-sm-left mb-3 mb-sm-0">
                    <h4 class="text-7 mb-0">Burpang</h4>
                </div>
                <div class="col-sm-5 text-center text-sm-right">
                </div>
            </div>
            <hr>
        </header>

        <main>
            <div class="row">
                <div class="col-sm-6"><strong>Tanggal:</strong> <?php echo date("Y-m-d", strtotime($orders->dateMake)); ?></div>
                <div class="col-sm-6 text-sm-right"> <strong>Nomor Invoice:</strong> <?php echo $orders->noInvoice ?></div>

            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6 text-sm-right order-sm-1">
                    <strong>Bayar Ke:</strong>
                    <?php if ($orders->paymentMethod == "transferBank") {
                        echo "
                        <address>
                            Randini Oktaviani Savitri<br />
                            BCA 166-034-669-1<br />
                        </address>
                        ";
                    } else {
                        echo "
                        <address>
                            Ditempat<br />                            
                        </address>
                        ";
                    } ?>

                    <strong>Note:</strong>
                    <address>
                        <?php echo $orders->note ?>
                    </address>
                </div>
                <div class="col-sm-6 order-sm-0"> <strong>Kirim Ke:</strong>
                    <address>
                        <?php echo $orders->name ?><br />
                        <?php echo $orders->address ?><br />
                        <?php echo $orders->city ?><br />
                        <?php echo $orders->posCode ?>
                    </address>
                </div>
            </div>

            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="card-header">
                                <tr>
                                    <td class="col-3 border-0"><strong>Produk</strong></td>
                                    <td class="col-4 border-0"><strong></strong></td>
                                    <td class="col-2 text-center border-0"><strong>Harga</strong></td>
                                    <td class="col-1 text-center border-0"><strong>Jumlah</strong></td>
                                    <td class="col-2 text-right border-0"><strong>Sub Total</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($detail_orders as $do) {
                                    echo "
                                    <tr>
                                        <td class='col-3 border-0'>$do->product</td>
                                        <td class='col-4 text-1 border-0'></td>
                                        <td class='col-2 text-center border-0'>Rp " . number_format($do->price, 0, ',', ',') . "</td>
                                        <td class='col-1 text-center border-0'>$do->quantity</td>
                                        <td class='col-2 text-right border-0'>Rp " . number_format($do->price * $do->quantity, 0, ',', ',') . "</td>
                                    </tr>
                                    ";
                                } ?>
                            </tbody>
                            <tfoot class="card-footer">
                                <tr>
                                    <td colspan="4" class="text-right"><strong>Sub Total:</strong></td>
                                    <td class="text-right"><?php echo number_format($orders->totalPrice - 6000, 0, ',', ',') ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right"><strong>Pengiriman:</strong></td>
                                    <td class="text-right">Rp 6,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #dee2e6;">
                                    <td colspan="4" class="text-right"><strong>Total:</strong></td>
                                    <td class="text-right"><?php echo number_format($orders->totalPrice, 0, ',', ',') ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>