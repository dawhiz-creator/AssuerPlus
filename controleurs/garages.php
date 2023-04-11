<?php

require_once 'Controleur.php';

class garages extends Controleur
{
    public function index()
    {
        // Code pour gérer la page garages
        $data = []; // données à passer à la vue
        afficherVue('garages', $data); // affichage de la vue garages
    }
}

$title='garages';
$content = '
<div>
    <button type="button" id="search" class="btn btn-primary">Rechercher l\'adresse</button>
    <div class="form-group">
        <label for="address">Adresse</label>
        <input type="text" class="form-control" id="address">
    </div>
    <ul id="results"></ul>
</div>

<script>
    // Création d\'un site requêtant des API géographiques
    const url = new URL(\'https://api-adresse.data.gouv.fr/search\')

    function searchAddress() {
        let params = { q: document.getElementById("address").value }
        url.search = new URLSearchParams(params).toString();

        fetch(url)
            .then((response) => {
                if (response.ok) {
                    return response.json()
                } else {
                    console.error("Erreur réponse : " + response.status)
                }
                console.log(response.json)
            })
            .then((data) => {
                fillResults(data)
            })
            .catch((error) => console.error(error)) //Traitement de l\'erreur dans l\'appel
    }

    function fillResults(data) {
        let list = document.getElementById(\'results\')
        list.innerHTML = \'\'
        if (undefined !== data.features) {
            data.features.forEach(function (element) {
                let li = document.createElement(\'li\')
                li.appendChild(document.createTextNode(element.properties.label))
                list.appendChild(li)
            });
        }
    }

    document.getElementById("search").addEventListener("click", (event) => {
        event.preventDefault() // évite que la page ne recharge
        searchAddress();
    });

</script>

';
include("vues/layout.php");
?>