@extends('front.master')


@section('title', $page->name)

@section('title_breadcrumb', $page->name)

@section('content')

    <section style="margin-bottom: 20px; margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h2 class="title mb-0 text-dark">{{ $page->name }}</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12 col-md-12">
                    <div><?php echo $page->content; ?></div>
                </div>
            </div>
        </div>
    </section>
@endsection
