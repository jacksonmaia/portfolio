@include('site.include.head')

<!-- Preloader -->
<div id="loader">
    <!-- Preloader inner -->
    <div id="loaderInner">
        <div class="spinner"></div>
    </div>
    <!-- End preloader inner -->
</div>
<!-- End preloader-->


<!--Wrapper-->
<div id="wrapper" class="margLTop  margLBottom">

    <!--Container-->
    <div class="container">


        <div class="row ">




            <div class="col-md-12">



                <!--Portfolio single-->
                <section id="portfolio" class="bgWhite ofsInBottom ">

                    <!--Portfolio -->
                    <div class="portfolio">

                        <!--Main title-->

                        <div class="main-title work-title">
                            <h1>Projeto</h1>
                            <div class="divider">
                                <div class="zigzag large clearfix "  data-svg-drawing="yes" >
                                    <svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
			<path d="M1.357,12.26 10.807,2.81 20.328,12.332
				29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
			</svg>
                                </div>
                            </div>
                        </div>

                        <!--End main title-->




                        <!--Content-->
                        <div class="content">

                            <!--Block content-->
                            <div class="block-content ">

                                <div class="block-nav-work margBottom">

                                    <ul>
                                        <li><a href="{{route('menu.index')}}#portfolio"><i class="icon-cancel"></i></a></li>
                                    </ul>
                                </div>

                                <div class="block-single margBottom clearfix">
                                    <div class="col-md-10 col-md-offset-1">
                                        <h1 class="large-title margBSSmall">{{$single->titulo}}</h1>
                                        <p class="margBSSmall">{{$single->descricao}}</p>

                                        <hr>

                                        <ul>

                                            <li>Tags :
                                                <strong>{{$single->tag}}</strong>
                                            </li>

                                            <li>Cliente :
                                                <strong>{{$single->cliente}}</strong>
                                            </li>


                                            <li>Ano :
                                                <strong>{{$single->ano}}</strong>
                                            </li>

                                        </ul>

                                    </div>
                                </div>


                                <div class="block-single margBottom clearfix">

                                    <div class="col-md-10 col-md-offset-1">
                                        <img src="{!! asset($single->imagem) !!}" alt="">
                                    </div>
                                </div>


                            </div>
                            <!--End block content-->



                        </div>
                        <!--End content-->






                        <!--Button-->
                        <div class="button ofsInTop tCenter">

                            <div class="divider">
                                <div class="zigzag large clearfix "  data-svg-drawing="yes" >
                                    <svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
		<path d="M1.357,12.26 10.807,2.81 20.328,12.332
			29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
		</svg>
                                </div>
                            </div>


                            <!--Row-->
                            <div class="row ">


                                <div class="col-md-12">
                                    <a class="but opc-3 ico" href="{{$single->url}}">Ver projeto online</a>

                                </div>



                            </div>
                            <!--End row-->


                        </div>
                        <!--End button-->




                    </div>
                    <!--End portfolio-->

                </section>
                <!--End portfolio single-->


            </div>


        </div>
        <!--End  row-->


    </div>
    <!--End  container-->




</div>
<!--End wrapper-->

@include('site.include.footer')
