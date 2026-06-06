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
            <div class="name">
              <h5>
                {{$profissional->nome  }}
              </h5>
            </div>
            <div class="img-box">
              <img src="{{Voyager::image($profissional->foto)  }}" alt="">
            </div>
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
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_items">
        <a href="">
          <div class="item ">
            <div class="img-box box-1">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                JARDIM E REGIÃO
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-2">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                +67 992960944
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-3">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                guilherme.zavala@estudante.ifms.edu.br
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  @endsection
