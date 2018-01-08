@include('admin.include.head')
@include('admin.include.top')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
<style>
    .bootstrap-tagsinput {
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        display: inline-block;
        padding: 4px 6px;
        color: #555;
        vertical-align: middle;
        border-radius: 4px;
        max-width: 100%;
        line-height: 22px;
        cursor: text;
    }
    .bootstrap-tagsinput input {
        border: none;
        box-shadow: none;
        outline: none;
        background-color: transparent;
        padding: 0 6px;
        margin: 0;
        width: auto;
        max-width: inherit;
    }
    .bootstrap-tagsinput {
        width: 100%;
    }
    .p{
        margin: 9px 0px 0px 205px;
        font-size: 12px;
        font-family: sans-serif;
        color: #878686;
        float: left;
    }
</style>



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
                        Advanced Form validations
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal " id="register_form"  method="post"  action="{{ route('admin.salvar.projeto') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group ">
                                    <label for="fullname" class="control-label col-lg-2">Título <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="fullname" name="titulo" type="text"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="fullname" class="control-label col-lg-2">Sub título <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="fullname" name="subTitulo" type="text"/>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2">Imagem <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="address" name="imagem" type="file" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2">Descrição <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="address" name="descricao" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2">Tags <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                            <div class="example example_markup">
                                                <div class="bs-example">
                                                    <input class=" form-control" id="address" name="tag" type="text" data-role="tagsinput" />

                                                </div>
                                            </div>
                                    </div>
                                    <p class="p">*Digite a tag e clique em Enter.</p>
                                </div>
                                <div class="form-group ">
                                    <label for="address" class="control-label col-lg-2">Classes <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <INPUT TYPE="radio" NAME="class" VALUE="PHP"> PHP
                                        <INPUT TYPE="radio" NAME="class" VALUE="Laravel"> Laravel
                                        <INPUT TYPE="radio" NAME="class" VALUE="Mobile"> Mobile
                                        <INPUT TYPE="radio" NAME="class" VALUE="Responsivo"> Responsivo
                                        <INPUT TYPE="radio" NAME="class" VALUE="Java"> Java
                                        <INPUT TYPE="radio" NAME="class" VALUE="Angular"> Angular
                                        <INPUT TYPE="radio" NAME="class" VALUE="Ionic"> Ionic
                                        <INPUT TYPE="radio" NAME="class" VALUE="Ruby"> Ruby
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="{{asset('js/Admin/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('js/Admin/app.js')}}"></script>
