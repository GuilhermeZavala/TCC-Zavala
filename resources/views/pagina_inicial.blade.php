@extends('layouts.app')

@section("conteudo")
  <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                  <h3> ENCONTRE </h3>
                    <h2> O PROFISSIONAL </h2> <h1> IDEAL PARA VOCÊ </h1> <p> Compare profissionais, conheça suas especialidades e encontre alguém preparado para ajudar você a alcançar seus objetivos. </p>
                    <div class="">
                      <a href="/profissionais">
                         VER PROFISSIONAIS
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h3> ENCONTRE </h3> <h2> O LUGAR </h2> <h1> CERTO PARA SEU OBJETIVO </h1> <p> Procure academias, estúdios, boxes, centros esportivos e outros estabelecimentos de atividade física perto de você. </p>
                    <div class="">
                      <a href="/estabelecimentos">
                        ENCONTRAR ESTABELECIMENTOS
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- Us section -->

  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          ESTABELECIMENTOS
        </h2>
      </div>

      <div class="us_container ">
        <div class="row">
          @foreach ($estabelecimentos as $estabelecimento)
<div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="{{ Voyager::image($estabelecimento->foto) }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                {{ $estabelecimento->nome }}
                </h5>
                <p>
                  {{ $estabelecimento->endereco }}
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <!-- end us section -->


  <!-- heathy section -->

  <section class="heathy_section layout_padding">
    <div class="container">

      <div class="row">
        <div class="col-md-12 mx-auto">
          <div class="detail-box">
            <h2>
              SERVIÇOS
            </h2>
<div class="us_container ">
        <div class="row">
          @foreach ($servicos as $servico)
<div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="{{ Voyager::image($servico->icone) }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                {{ $servico->titulo }}
                </h5>
                <p>
                  {!! $servico->descricao !!}
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end heathy section -->

  <!-- trainer section -->

  <section class="trainer_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          NOSSOS PROFESSORES
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

  <!-- contact section -->


  <!-- end contact section -->

  

@endsection