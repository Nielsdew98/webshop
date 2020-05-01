@extends('layouts.front')
@section('title')
    Contact
@endsection
@section('content')
    <div class="col-lg-10 offset-lg-1">
        <section id="contact" class="row">
            <div class="col-12 my-6">
                <h2 class="text-center">Contacteer ons</h2>
            </div>
            <div class="mx-auto">
                <form id="contactformulier" class="bg-transparent p-6">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="Naam" required="" placeholder="Naam">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="email" class="form-control" id="Email" required="" placeholder="Email">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="tel" class="form-control" id="Telefoon" required="" placeholder="Telefoon">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <textarea name="bericht" id="Adres" class="form-control" required="" placeholder="Bericht"></textarea>
                        </div>
                    </div>
                    <button class="btnhover mt-4">Verstuur</button>
                </form>
            </div>
        </section>
        <section id="gegevens" class="row justify-content-around mt-4">
            <article class="col-lg-3 bg-light p-4">
                <h3>Telefoon</h3>
                <a href="tel:050252525">050 25 25 25</a>
            </article>
            <article class="col-lg-3 bg-light p-4">
                <h3>Email</h3>
                <a class="btn-floating btn-lg" href="mailto:info@bd.be">info@bd.be</a>
            </article>
            <article class="col-lg-3 bg-light p-4">
                <h3>Adres</h3>
                <span>Oostnieuwkerksesteenweg 111, 8800 Roeselare</span>
            </article>
        </section>
    </div>
    <section id="googlemaps" class="">
        <iframe class="w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2513.7799268269755!2d3.0972594156351017!3d50.94628287954684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c335bceb4d0467%3A0xa4ec8ad74209fbc5!2sSyntra%20West!5e0!3m2!1snl!2sbe!4v1579526202712!5m2!1snl!2sbe"  style="border:0;" allowfullscreen=""></iframe>
    </section>
@endsection
