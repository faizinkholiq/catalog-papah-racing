<!-- start banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>SALES PROCESSING</h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<div class="container">
    <div class="row">
        <div class="table-responsive">
            <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Kode Barang</th>
                        <th class="text-center">Nama Barang</th>
                        <th class="text-center">Stok</th>
                        <th class="text-center">Harga Modal</th>
                        <th class="text-center">Harga Jual</th>
                        <th class="text-center">Profit</th>
                        <th class="text-center">Bonus (10%)</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i=1; $i <= 10; $i++) { ?>
                    <tr>
                        <td><?=$i?></td>
                        <td>R0045Q-10</td>
                        <td>OLI YAMALUBE</td>
                        <td>1</td>
                        <td>RP660.000</td>
                        <td>RP900.000</td>
                        <td>RP240.000</td>
                        <td>RP24.000</td>
                        <td class="text-center">
                            <button type="button" onclick="" class="btn btn-sm btn-primary" style="width: 2rem;"><i class="fa fa-edit"></i></button>
                            <button type="button" onclick="" class="btn btn-sm btn-danger" style="width: 2rem;"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    //  $('#table').DataTable()
</script>