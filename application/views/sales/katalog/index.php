<!-- start banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>E-KATALOG</h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
            <div class="sidebar-categories">
                <div class="head">Browse Categories</div>
                <ul class="main-categories">
                    <li class="main-nav-list">
                        <a data-toggle="collapse" href="#!" aria-expanded="false">
                            <span class="lnr lnr-arrow-right"></span>Oli<span class="number">(53)</span>
                        </a>
                    </li>
                    <li class="main-nav-list">
                        <a data-toggle="collapse" href="#!" aria-expanded="false">
                            <span class="lnr lnr-arrow-right"></span>Ban<span class="number">(53)</span>
                        </a>
                    </li>
                    <li class="main-nav-list">
                        <a data-toggle="collapse" href="#!" aria-expanded="false">
                            <span class="lnr lnr-arrow-right"></span>Mesin<span class="number">(53)</span>
                        </a>
                    </li>
                    <li class="main-nav-list">
                        <a data-toggle="collapse" href="#!" aria-expanded="false">
                            <span class="lnr lnr-arrow-right"></span>Knalpot<span class="number">(53)</span>
                        </a>
                    </li>
                    <li class="main-nav-list">
                        <a data-toggle="collapse" href="#!" aria-expanded="false">
                            <span class="lnr lnr-arrow-right"></span>Membran<span class="number">(53)</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-filter mt-50">
                <div class="top-filter-head">Product Filters</div>
                <div class="common-filter">
                    <div class="head">Brands</div>
                    <form action="#">
                        <ul>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Yamaha<span>(29)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Honda<span>(29)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Castrol<span>(19)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Yamalube<span>(19)</span></label></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
            <div class="col-lg-7  col-md-6 col-sm-6 p-0">
                <div class="single-footer-widget">
                    <div class="" id="mc_embed_signup">
                        <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <div class="d-flex flex-row">
                                <input style="border: 1px solid #eee; border-right: 0;" class="form-control" name="search" placeholder="Cari Produk" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cari Produk '"
                                    required="" type="text">
                                <button class="click-btn btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Start Best Seller -->
            <section class="lattest-product-area pb-40 category-list" style="margin-top: 3rem;">
                <div class="row" style="margin-top: 2rem;">
                    <?php for ($i=1; $i < 10 ; $i++): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card" style="
                            box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);
                            border: none;
                            margin-bottom: 2rem;
                        ">
                            <div class="single-product" style="margin: 1rem 0 1rem;">
                                <img class="img-fluid" src="<?= base_url() ?>files/yamalube.jpg" alt="">
                                <div class="product-details" style="margin: 1rem 1rem 0;">
                                    <h3>Oli Yamalube</h3><hr>
                                    <div class="price">
                                        <h4><b>RP25.000</b></h4>
                                        <h5>Stok: 50</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </section>
            <!-- End Best Seller -->
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center" style="margin-top: 2rem;">
                <div class="sorting mr-auto">
                    <select>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                    </select>
                </div>
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- End Filter Bar -->
        </div>
    </div>
</div>