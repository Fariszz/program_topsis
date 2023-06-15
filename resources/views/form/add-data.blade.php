@extends('layouts.layout')

@section('content')
<div class="content-page wide-lg">
    <div class="nk-block-head nk-block-head-lg">
        <div class="nk-block-head-content">
            <h2 class="nk-block-title fw-normal">Input Data</h2>
            <div class="nk-block-des">
                <p class="lead">Tambahkan Alternatif disini</p>
            </div>
        </div>
    </div><!-- .nk-block -->
    <div class="nk-block">
        @if($errors->has('error'))
        <div class="alert alert-danger">
            {{ $errors}}
        </div>
@endif

        <div class="accordion" id="accordionExample">
            @include('form.add-data-content')
        </div>
    </div><!-- .nk-block -->
</div><!-- .content-page -->


@endsection
