@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>This is a placeholder page for the Blog page.</h4>
                <p>The master page for this page can be found at resources\views\layouts\master.blade.php</p>
                <p>This view can be found at resources\views\site\blog.blade.php</p>
                <p>The controller for this view is SiteController</p>
                <p>The method controlling this view is the blog() method of the SiteController</p>
                <p>This Route is <code> Route::get('/blog', 'SiteController@blog')</code></p>
            </div>
        </div>
    </div>
@stop