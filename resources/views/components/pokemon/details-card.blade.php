<div class="col">
    <div class="card mb-3">
        <img src="https://img.pokemondb.net/artwork/{{$pokemon['name']}}.jpg" class="card-img-top " alt="...">
        <div class="card-body">
            <h5 class="card-title text-uppercase">{{__($pokemon['name'])}}</h5>
            <button type="button" class="btn btn-primary pokemonDetail" id="card-{{__($pokemon['name'])}}" name="card-{{__($pokemon['name'])}}"
                    data-target="{{$pokemon['url']}}"
                    data-pokemon="{{$pokemon['name']}}">
                <i class="bi bi-file-earmark-plus"></i>
                Saber Mas
            </button>
        </div>
    </div>
</div>