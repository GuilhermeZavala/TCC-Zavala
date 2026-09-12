@extends('layouts.app')

@section("conteudo")
<!-- trainer profile section -->
  <section class="trainer_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>Perfil do Professor</h2>
      </div>

      <div class="row align-items-center mt-5">
        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
          <div class="box">
            <div class="img-box">
              <img src="{{ Voyager::image($profissional->foto) }}" alt="Foto do professor" class="img-fluid">
            </div>
          </div>
        </div>

        <div class="col-lg-7 col-md-6">
          <div class="trainer_profile">
            <h2>{{ $profissional->nome }}</h2>
            <p class="mt-3">
              {!! $profissional->curriculo !!}
            </p>

            <div class="mt-4">
              <p><strong></strong> <a href="mailto:{{ $profissional->email }}">{{ $profissional->email }}</a></p>
              <p><strong><img src="/images/logos/whatsapp-logo.png" alt=""></strong> <a href="https://wa.me/{{ $profissional->whatsapp }}" target="_blank" rel="noopener">{{ $profissional->whatsapp }}</a></p>
            </div>

            <div class="social_box mt-4" style="justify-content:flex-start; gap:14px; flex-wrap:wrap;">
              <p><strong><img src="/images/logos/instagram-logo.png" alt=""></strong><a href="https://instagram.com/{{ $profissional->instagram }}" target="_blank" rel="noopener" title="{{ $profissional->instagram }}">
                {{ $profissional->instagram }}
              </a></p>
              <p><strong><img src="/images/logos/linkedin-logo.png" alt=""></strong><a href="https://www.linkedin.com/in/{{ $profissional->linkedin }}" target="_blank" rel="noopener" title="LinkedIn" style="color:#fff; font-weight:600;">{{ $profissional->linkedin }}</a></p>
              <p><strong><img src="/images/logos/youtube-logo.png" alt=""></strong><a href="https://www.youtube.com/{{ $profissional->youtube }}" target="_blank" rel="noopener" title="YouTube" style="color:#fff; font-weight:600;"> {{ $profissional->youtube }}</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end trainer profile section -->

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

  <!-- end info_section -->

  @endsection
