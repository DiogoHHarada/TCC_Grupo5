@extends('layout.site')
@section('titulo','AtmoVision')
@section('conteudo') 

    <link rel="stylesheet" href="{{asset('css/sobrenos.css')}}">
 <link rel="stylesheet" href="{{asset('css/rodape.css')}}">

   <!-- Segunda página: Mais informações da empresa -->
    <div class="page" id="info">
        <section>
            <h2>Sobre a AtmoVision</h2>
            <p>Nossa miss&atilde;o &eacute; proporcionar informa&ccedil;&otilde;es climatol&oacute;gicas para os professores, alunos e funcion&aacute;rios do CTI para conscientiza&ccedil;&atilde;o meteorol&oacute;gica, al&eacute;m de agregar valores como 
                preocupa&ccedil;&atilde;o ambiental, 
                consci&ecirc;ncia clim&aacute;tica, 
                inclus&atilde;o digital
                e empoderamento comunit&aacute;rio</p>
        </section>
    </div>

    <!-- Seção da Equipe -->
    <section id="team">
        <div class="team-member" id="po-leader">
            <img src="{{asset('img/img_matheus.jpg')}}" alt="Matheus Trentini">
            <h2>Matheus Trentini</h2>
            <p><strong>Project Owner</strong></p>
        </div>
        <div class="team-member" id="tech-leader">
            <img src="{{asset('img/img_willian.jpg')}}" alt="Willian Miranda">
            <h2>Willian Miranda</h2>
            <p><strong>L&iacute;der T&eacute;cnico</strong></p>
        </div>
        <div class="team-member" id="ux-ui-leader">
            <img src="{{asset('img/img_ellen.jpg')}}" alt="Ellen Carvalho">
            <h2>Ellen Carvalho</h2>
            <p><strong>L&iacute;der UX/UI</strong></p>
        </div>
        <div class="team-member" id="dev-1">
            <img src="{{asset('img/img_diogo.jpg')}}" alt="Diogo Harada">
            <h2>Diogo Harada</h2>
            <p><strong>Desenvolvedor</strong></p>
        </div>
        <div class="team-member" id="dev-2">
            <img src="{{asset('img/img_joao.jpg')}}" alt="João Guilherme">
            <h2>João Guilherme</h2>
            <p><strong>Desenvolvedor</strong></p>
        </div>
        <div class="team-member" id="dev-3">
            <img src="{{asset('img/img_emily.jpg')}}" alt="Emily Rocha">
            <h2>Emily Rocha</h2>
            <p><strong>Desenvolvedor</strong></p>
        </div>
        <div class="team-member" id="dev-4">
            <img src="{{asset('img/img_nicole.jpg')}}" alt="Nicole Quadros">
            <h2>Nicole Quadros</h2>
            <p><strong>Desenvolvedor</strong></p>
        </div>
    </section>
  <footer class="footer">
        <div class="footer-left">
            <img src="{{asset('img/smartphone_icon.png')}}" alt="Telefone" class="icon">
            <span>(14) 99789-9824</span>
        </div>
            <div class="footer-center">
                <img src="{{asset('img/logo_photo.png')}}" alt="Logo da Empresa" class="logo">
            </div>
        <div class="footer-right">
            <img src="{{asset('img/email_icon.png')}}" alt="Email" class="icon">
            <span>Contate-nos por gmail</span>
        </div>
    </footer>
    <script src="{{asset('js/sobrenos.js')}}"></script>
@endsection