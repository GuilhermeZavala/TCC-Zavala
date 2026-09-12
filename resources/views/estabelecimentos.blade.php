@extends('layouts.app')

@section("conteudo")
  <!-- trainer section -->

  <section class="trainer_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          ESTABELECIMENTOS SUGERIDOS
        </h2>
      </div>
      <div class="row">
        @foreach ($estabelecimentos as $estabelecimento )
            <div class="col-lg-4 col-md-6 mx-auto">
          <div class="box">
                            <a href="/profissionais/{{ $estabelecimento -> id }}" class="text-reset">

            <div class="name">
              <h5>
                {{$estabelecimento->nome  }}
              </h5>
            </div>
            <div class="img-box">
              <img src="{{Voyager::image($estabelecimento->foto)  }}" alt="">
            </div>
            </a>
            <div class="social_box text-dark">
              {{$estabelecimento->endereco  }}
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
