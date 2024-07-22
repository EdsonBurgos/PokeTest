<div class="modal fade" id="modal-pokemon" tabindex="-1" role="dialog"
     aria-labelledby="pokemon-modal-detail"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-danger">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-3 text-center">
                        <img id="pokemon-img" class="w-100 mb-3 shadow img-thumbnail rounded d-inline mr-2"
                             src="https://img.pokemondb.net/artwork/pikachu.jpg" alt="">

                        <div class="card mb-3 shadow">
                            <div class="card-header text-uppercase">
                                Habilidades
                            </div>
                            <div class="card-body">
                                <ul id="pokemon-abilities">
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-9">
                        <div class="card border-0 shadow text-left mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <label for=""><strong>Nombre:</strong>
                                        <text id="pokemon-name"></text>
                                    </label>
                                    <div>
                                        <strong class="d-inline">Tipo:</strong>
                                        <div class="d-inline" id="pokemon-types">
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-1">
                                <h5 class="mb-0">Estadísticas</h5>
                                <div class="row" id="pokemon-stats">
                                    <div class="col-3"><strong>stat</strong>
                                        <text>value</text>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow text-left">
                            <div class="card-header text-uppercase">
                                Imagenes
                            </div>
                            <div class="card-body">
                                <div class="row row-cols-3" id="pokemon-images">
                                    <div class="col text-center">
                                        <img src="" alt="" class="w-75">
                                        <strong>name</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>