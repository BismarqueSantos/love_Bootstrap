<div class="pessoas text-center" id="cadastrar">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-5 avaliador">
                <h3>Cadastre-se como Avaliador, e expresse sua opinião sobre os lugares que frequenta. </h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#avaliador1">
                Cadastre-se
                </button>
                <?php include("cadastro_avaliador.php"); ?>
            </div>
            <div class="col-md-5 estabelecimento">
                <h3>Cadastre seu Estabelecimento e mude a sua empatia com a sociedade.</h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#estabelecimento1">
                Cadastre-se
                </button>
                <?php include("cadastro_estabelecimento.php"); ?>
            </div>
        </div>
    </div>
</div>