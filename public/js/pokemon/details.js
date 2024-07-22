$(document).ready(function () {

    const modal = $("#modal-pokemon");
    const modal_pk_img = $("#pokemon-img");
    const modal_pk_name = $("#pokemon-name");
    const modal_pk_stats = $("#pokemon-stats");
    const modal_pk_types = $("#pokemon-types");
    const modal_pk_abilities = $("#pokemon-abilities");
    const modal_pk_images = $("#pokemon-images");

    $('.pokemonDetail').on('click', function (element, event) {

        try {
            let btn = $(this);

            if (!btn) {
                throw "sin información";
            }

            let url = btn.data('target');
            let name = btn.data('pokemon');

            if (!url || !name) {
                throw "Información no valida";
            }

            $.ajax({
                url: url,
                type: "get",
                dataType: "json"
            }).done(function (response) {
                modal_pk_name.text(name);
                // modal_pk_img.attr('src', 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/' + response.id + '.png');
                modal_pk_img.attr('src', 'https://img.pokemondb.net/artwork/' + name + '.jpg');

                modal_pk_stats.empty();
                response.stats.map(function (stat) {
                    modal_pk_stats.append('<div class="col-4"><strong>' + stat.stat.name + ':</strong> <text>' + stat.base_stat + '</text></div>');
                })

                modal_pk_types.empty();
                response.types.map(function (type) {
                    modal_pk_types.append('<text class="mx-1">' + type.type.name + '</text>|')
                })

                modal_pk_abilities.empty()
                response.abilities.map(function (ability) {
                    modal_pk_abilities.append('<li>' + ability.ability.name + '</li>')
                })

                modal_pk_images.empty()
                for (let sprite in response.sprites) {
                    if (response.sprites[sprite] != null) {
                        modal_pk_images.append('<div class="col text-center"><img src="' + response.sprites[sprite] + '" alt="" class="w-75"><strong>' + sprite + '</strong></div>');
                    }
                }

                modal.modal('show')
            }).fail(function (response) {
                throw "Solicitud invalida";
            });
        } catch (e) {
            if (!(e instanceof Error)) {
                e = new Error(e);
            }
            alert('Error: Algo salió mal. ' + e.message);
        }
    });
});