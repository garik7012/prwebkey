@extends('layouts.master')
@section('title', $pageseo->title)
@section('keywords', $pageseo->keywords)
@section('description', $pageseo->description)
@section('content')
    <div class="page-content">
        <nav class="breadcrumbs">
            <a class="bread-main" href="/">Главная</a><span class="bread-next">&#10095;</span>
            <span class="bread-current">Клиенты</span>
        </nav>
        <section class="page-section klients">
            <h1 class="page-title">Клиенты</h1>
            <div class="brand-trust-logos">
                <div class="brand-trust-logo__item">
                    <img src="/img/brands-logo/elsie_logo.png" alt="elsie">
                </div>
                <div class="brand-trust-logo__item">
                    <img src="/img/brands-logo/biola.png" alt="biola">
                </div>
                <div class="brand-trust-logo__item">
                    <img src="/img/brands-logo/bipi.png" alt="bipi">
                </div>
                <div class="brand-trust-logo__item">
                    <img src="/img/brands-logo/lifecell.png" alt="lifecell">
                </div>
                <div class="brand-trust-logo__item">
                    <img src="/img/brands-logo/hikari.png" alt="hikari">
                </div>
                <div class="brand-trust-logo__item">
                    <img src="/img/brands-logo/metinvest.png" alt="metinvest">
                </div>
                <div class="brand-trust-logo__item">
                    <img src="/img/brands-logo/ukrnet.png" alt="ukrnet">
                </div>
                <div class="brand-trust-logo__item">
                    <img src="/img/brands-logo/zinteco.png" alt="zinteco">
                </div>
                <div class="brand-trust-logo__item">
                    <img src="/img/brands-logo/veja.png" alt="veja">
                </div>
                <div class="brand-trust-logo__item">
                    <img src="/img/brands-logo/miss.png" alt="miss">
                </div>
                <div class="brand-trust-logo__item">
                    <img src="/img/brands-logo/mau.png" alt="mau">
                </div>
                <div class="brand-trust-logo__item">
                    <img src="/img/brands-logo/isd.png" alt="isd">
                </div>
            </div>
        </section>
    </div>
    </main>
@endsection