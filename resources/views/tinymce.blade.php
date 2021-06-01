@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <h3>TinyMCE Integration</h3>
        <br>
        <textarea id="editor"></textarea>

        <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>

            <script>
                window.onload = function () {

                    tinymce.init({
                        selector: '#editor',
                        height: 200,
                        plugins: 'image',
                        branding: false,
                        file_browser_callback: filemanager.tinyMceCallback
                    });

                };
            </script>
        </div>
    </div>
</div>
@endsection

    
