@extends('layouts.app')

@section("conteudo")
  <!-- trainer section -->

  <section class="trainer_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          nossos professores
        </h2>
      </div>
      <div class="row">
        @foreach ($profissionais as $profissional )
            <div class="col-lg-4 col-md-6 mx-auto">
          <div class="box">
                            <a href="/profissionais/{{ $profissional -> id }}" class="text-reset">

            <div class="name">
              <h5>
                {{$profissional->nome  }}
              </h5>
            </div>
            <div class="img-box">
              <img src="{{Voyager::image($profissional->foto)  }}" alt="">
            </div>
            </a>
            <div class="social_box">
              <a href="{{ $profissional->whatsapp }}">
                <img src="/images/logos/whatsapp-logo.png" alt="">
              </a>
              <a href="{{ $profissional->instagram }}">
                <img src="/images/logos/instagram-logo.png" alt="">
              </a>
              <a href="{{ $profissional->linkedin }}">
                <img src="/images/logos/linkedin-logo.png" alt="">
              </a>
              <a href="{{ $profissional->youtube }}">
                <img src="/images/logos/youtube-logo.png" alt="">
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- end trainer section -->

  <!-- info section -->
  

  <!-- end info_section -->

  @endsection
