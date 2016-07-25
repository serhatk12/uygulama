@extends('backend.layouts.app')
@section('title')
    Haber Ekle
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Haber Ekle</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Haber Ekleme Paneli
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                <div class="form-group">
                                    <label>Text Input</label>
                                    <input class="form-control">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>

                                <div class="form-group">
                                    <label>File input</label>
                                    <input type="file">
                                </div>

                                <div class="form-group">
                                    <label>Text area</label>
                                    <textarea class="cke_editor" name="editor1" rows="3"></textarea>
                                </div>


                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection


@section('js')
    <script src="{{asset('backend')}}/ckeditor/ckeditor.js"></script>
    <script>
        $(function () {

            CKEDITOR.replace('editor1', {


            });
        });
    </script>
@endsection