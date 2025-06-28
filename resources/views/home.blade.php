@extends('layouts.app')

@section('title', 'Nova - Secure, Efficient, and User-Friendly Financial Services')

@section('content')
        <!-- ======= Hero =======-->
        <section class="hero__v6 section" id="home">
    @include('sections.hero')
        </section>

        <!-- ======= About =======-->
        <section class="about__v4 section" id="about">
    @include('sections.about')
        </section>

        <!-- ======= Features =======-->
        <section class="section features__v2" id="features">
    @include('sections.features')
        </section>

        <!-- ======= Pricing =======-->
        <section class="section pricing__v2" id="pricing">
    @include('sections.pricing')
        </section>

        <!-- ======= How it works =======-->
        <section class="section howitworks__v1" id="how-it-works">
    @include('sections.how-it-works')
        </section>

        <!-- ======= Stats =======-->
        <section class="stats__v3 section">
    @include('sections.stats')
        </section>

      
        <!-- ======= Testimonials =======-->
        <section class="section testimonials__v2" id="testimonials">
    @include('sections.testimonials')
        </section>

        <!-- ======= FAQ =======-->
        <section class="section faq__v2" id="faq">
    @include('sections.faq')
        </section>

        <!-- ======= Contact =======-->
        <section class="section contact__v2" id="contact">
    @include('sections.contact')
        </section>
@endsection
