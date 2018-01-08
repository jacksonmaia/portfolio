@include('admin.include.head')
@include('admin.include.top')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-files-o"></i> Novo projeto</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ route('admin.index') }}">Início</a></li>
                    <li><i class="icon_document_alt"></i>Projetos</li>
                    <li><i class="fa fa-files-o"></i>Novo projeto</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Editar Projeto
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal " id="register_form" method="post" action="{{ route('admin.atualizar.projeto', $registro->id) }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">
                                <div class="form-group ">
                                    <label for="fullname" class="control-label col-lg-2"> Título <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="fullname" name="titulo" type="text" value="{{$registro->titulo}}"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2"> Sub título <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="address" name="subTitulo" type="text" value="{{$registro->subTitulo}}"/>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2"> Imagem <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="address" name="imagem" type="file" value="{{$registro->imagem}}"/>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2"> Descrição <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="address" name="descricao" type="text" value="{{$registro->descricao}}"/>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2"> Cliente <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="address" name="cliente" type="text" value="{{$registro->cliente}}"/>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2"> Ano <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="address" name="ano" type="number" value="{{$registro->ano}}"/>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2"> Url <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="address" name="url" type="text" value="{{$registro->url}}"/>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2"> Tags <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="address" name="tag" type="text" value="{{$registro->tag}}"/>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2"> Classes <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="address" name="class" type="text" value="{{$registro->class}}"/>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                        <button class="btn btn-default" type="button"><a href="{{ route('admin.index') }}">Cancel</a></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>

</section>
@include('admin.include.footer')
