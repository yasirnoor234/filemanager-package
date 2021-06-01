@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <h3>CKEditor Integration</h3>
        <br>

        <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
        <script>
            window.onload = function () {
                CKEDITOR.replace('ckeditor', {
                    filebrowserBrowseUrl: filemanager.ckBrowseUrl,
                });
            }
        </script>

        <textarea id="ckeditor"></textarea>
        </div>
    </div>
</div>
@endsection

    
