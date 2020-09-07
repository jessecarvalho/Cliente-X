@extends('layout.template')
@section('content')

    <div class="banner">
        <img src="{{asset("img/banner/01.jpg")}}" id="img">
    </div>
    <div class="banner-control text-center">
        <button class="btn-banner" id="btn-1" onclick="manualClique('0')"></button>
        <button class="btn-banner" id="btn-2" onclick="manualClique('1')"></button>
        <button class="btn-banner" id="btn-3" onclick="manualClique('2')"></button>
    </div>
    <div class="menus">
        <div class="row about-sector">
            <div class="col-md-2"></div>
            <div class="col-sm-12 col-md-8">
                <div class="text-center" id="about">
                    <div class="about">
                        <i class="icon icofont-bullseye"></i>
                        <h1>Sobre nós</h1>
                        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vehicula, nulla ut venenatis
                            ultricies, sapien velit lobortis mauris, nec tincidunt tortor nibh vitae massa. Cras ac
                            elementum nibh. Ut sed lacinia nunc. Ut nisi leo, luctus ut felis eget, euismod rutrum
                            ligula. Donec tempus sollicitudin magna, ut accumsan odio pulvinar ut. Phasellus sodales
                            scelerisque purus, vel sodales ipsum semper in. Proin mollis sapien ut nisi ultrices, sit
                            amet imperdiet  purus aliquam. Aliquam erat volutpat. Nullam vel cursus nisi. Curabitur
                            euismod felis nisl, sed placerat massa luctus eget. </h2>
                            <h2> Integer sagittis dolor non magna molestie auctor. Etiam elementum massa
                            tincidunt lacus placerat tincidunt eget tempus mi. Maecenas nec auctor neque. Vivamus
                            volutpat augue sed efficitur dictum. Maecenas lectus sem, sodales sed nisl nec, volutpat
                            sodales enim. Duis  sed aliquet erat. Morbi venenatis libero quis cursus porta. Morbi
                            metus fringilla vestibulum. Nam eu risus in ante sodales vehicula ac sit amet sapien.
                            Integer dictum leo justo, at pulvinar lectus condimentum in. Morbi non euismod libero.
                            Sed laoreet cursus justo eget feugiat. Aenean interdum enim ante, at ullamcorper tellus
                            bibendum ac. Morbi ornare varius commodo. Curabitur non accumsan erat. Integer lectus nunc,
                            aliquam nec aliquam eu, condimentum sit amet diam. </h2>
                            <h2> Quisque eleifend viverra libero, vitae tempus orci sagittis non. Nulla laoreet erat,
                            et congue neque consectetur vel. Nam hendrerit nisi purus, vel congue magna dignissim vel.
                            Fusce consectetur odio a tortor pulvinar, sit amet varius augue mattis. Donec vitae orci ac
                            massa consectetur dignissim vestibulum id magna. Nunc sit amet volutpat odio. Sed sed est
                            metus. In in felis enim. Ut at faucibus erat. Suspendisse potenti. </h2>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="row contact-sector">
            <div class="col-md-2"></div>
            <div class="col-sm-12 col-md-8">
                <div class="contact" id="contact">
                    <div class="text-center">
                        <i class="icon icofont-contacts"></i>
                        <h1>Contato</h1>
                    </div>
                    <form method="post" action="{{route('email')}}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputName">Nome</label>
                                <input type="name" class="custom-form form-control" id="inputName" name="name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail">E-mail</label>
                                <input type="email" class="custom-form form-control" id="inputEmail" name="email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputTel">Telefone</label>
                                <input type="tel" class="custom-form form-control" id="inputTel" name="tel" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputSubject">Assunto</label>
                                <input type="text" class="custom-form form-control" id="inputSubject" name="subject" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="text">Mensagem</label> <br>
                                <textarea rows="5" id="text" name="message" maxlength="500" required></textarea>
                                <button type="submit" class="btn btn-send">Enviar</button>
                                <h2 id="caracteres">500 Caracteres restantes</h2>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="bottom">
        <div class="row address">
            <div class="col-md-2"></div>
            <div class="col-sm-12 col-md-4 text-center">
                <h1>Endereço e contatos</h1>
                <h2>Rua desconhecida, 51, São Paulo - SP</h2>
                <h2>(11) 94851-8009</h2>
                <h2>(11) 2222-2222</h2>
            </div>
            <div class="col-sm-12 col-md-4 text-center">
                <a href="https://facebook.com"><i class="icon-social icofont-facebook"></i></a>
                <a href="https://twitter.com"><i class="icon-social icofont-twitter"></i></a>
                <a href="https://instagram.com"><i class="icon-social icofont-instagram"></i></a>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
