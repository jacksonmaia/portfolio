@include('admin.include.head')
@include('admin.include.top')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Painel de controle</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ route('admin.index') }}">Home</a></li>
                    <li><i class="fa fa-laptop"></i>Painel de controle</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box blue-bg">
                    <i class="fa fa-check"></i>
                    <div class="count">6.674</div>
                    <div class="title">Acessos</div>
                </div><!--/.info-box-->
            </div><!--/.col-->


            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box dark-bg">
                    <i class="fa fa-envelope-o" ></i>
                    <div class="count">4.362</div>
                    <div class="title">Contato</div>
                </div><!--/.info-box-->
            </div><!--/.col-->


            <div class="col-md-3">

                <div class="social-box facebook">
                    <i class="fa fa-facebook"></i>
                    <ul>
                        <li>
                            <strong>256k</strong>
                            <span>friends</span>
                        </li>
                        <li>
                            <strong>359</strong>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div><!--/social-box-->
            </div>

            <div class="col-md-3">

                <div class="social-box instagram">
                    <i class="fa fa-instagram"></i>
                    <ul>
                        <li>
                            <strong>1562k</strong>
                            <span>followers</span>
                        </li>
                        <li>
                            <strong>2562</strong>
                            <span>tweets</span>
                        </li>
                    </ul>
                </div><!--/social-box-->

            </div><!--/col-->

        </div>




    </section>
</section>
<!--main content end-->
</section>
<!-- container section start -->

@include('admin.include.footer')
