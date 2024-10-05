@extends('layout.site')
@section('titulo','AtmoVision')
@section('conteudo') 
    <link rel="stylesheet" href="/css/sobrenos.css">

    <div class="page" id="info">
        <section>
            <h2>Sobre a AtmoVision</h2>
            <p>Na AtmoVision, nos empenhamos em fornecer as melhores ferramentas de monitoramento e análise climática, ajudando pessoas e organizações a tomarem decisões informadas sobre o meio ambiente.</p>
        </section>
    </div>

    <!-- Seção da Equipe -->
    <section id="team">
        <div class="team-member" id="po-leader">
            <img src="img_tcc/img_matheus.jpg" alt="Matheus Trentini">
            <h2>Matheus Trentini</h2>
            <p><strong>Função:</strong> Project Owner</p>
        </div>
        <div class="team-member" id="tech-leader">
            <img src="img_tcc/img_willian.jpg" alt="Willian Miranda">
            <h2>Willian Miranda</h2>
            <p><strong>Função:</strong> Líder Técnico</p>
        </div>
        <div class="team-member" id="ux-ui-leader">
            <img src="img_tcc/img_ellen.jpg" alt="Ellen Carvalho">
            <h2>Ellen Carvalho</h2>
            <p><strong>Função:</strong> Líder UX/UI</p>
        </div>
        <div class="team-member" id="dev-1">
            <img src="img_tcc/img_diogo.jpg" alt="Diogo Harada">
            <h2>Diogo Harada</h2>
            <p><strong>Função:</strong> Desenvolvedor</p>
        </div>
        <div class="team-member" id="dev-2">
            <img src="img_tcc/img_joao.jpg" alt="João Guilherme">
            <h2>João Guilherme</h2>
            <p><strong>Função:</strong> Desenvolvedor</p>
        </div>
        <div class="team-member" id="dev-3">
            <img src="img_tcc/img_emily.jpg" alt="Emily Rocha">
            <h2>Emily Rocha</h2>
            <p><strong>Função:</strong> Desenvolvedor</p>
        </div>
        <div class="team-member" id="dev-4">
            <img src="img_tcc/img_nicole.jpg" alt="Nicole Quadros">
            <h2>Nicole Quadros</h2>
            <p><strong>Função:</strong> Desenvolvedor</p>
        </div>
        <div class="photo-container">
            <div class="description">
                <h2>Descrição da Foto</h2>
                <p>Essa é a descrição da foto. Aqui você pode inserir detalhes sobre a imagem que será mostrada ao lado.</p>
            </div>
            <div class="photo">
                <img src="img_tcc/torre_unesp.jpg" alt="Imagem Descritiva">
            </div>
        </div>
        <div class="photo-container">
            <div class="description">
                <h2>Descrição da Foto</h2>
                <p>Essa é a descrição da foto. Aqui você pode inserir detalhes sobre a imagem que será mostrada ao lado.</p>
            </div>
            <div class="photo">
                <img src="img_tcc/torre_unesp.jpg" alt="Imagem Descritiva">
            </div>
        </div>
    </section>

    <script src="/js/sobrenos.js"></script>
@endsection