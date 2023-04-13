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
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 mx-auto">
            <h1 class="text-center mb-4">Rechercher une adresse</h1>
            <div class="form-group">

                    <div class="row mt-5">
            <div class="col-md-8 mx-auto text-center">

                <p>Vous pouvez saisir une adresse complète ou partielle dans le champ de saisie, puis cliquer sur le
                    bouton "Rechercher". Les résultats s\'afficheront dans la zone de résultats ci-dessous.</p>
            </div>
        </div>
        
                <label for="address">Adresse</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="address" placeholder="Entrez une adresse...">
                    <div class="input-group-append">
                        <button type="button" id="search" class="btn btn-primary">Rechercher</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Résultats</h5>
                    <ul id="results" class="list-group">
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
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
            .catch((error) => console.error(error))
    }

    function fillResults(data) {
        let list = document.getElementById(\'results\')
        list.innerHTML = \'\'
        if (undefined !== data.features) {
            data.features.forEach(function (element) {
                let li = document.createElement(\'li\')
                li.className = "list-group-item"
                li.appendChild(document.createTextNode(element.properties.label))
                list.appendChild(li)
            });
        } else {
            let li = document.createElement(\'li\')
            li.className = "list-group-item"
            li.appendChild(document.createTextNode("Aucun résultat trouvé."))
            list.appendChild(li)
        }
    }

    document.getElementById("search").addEventListener("click", (event) => {
        event.preventDefault()
        searchAddress();
    });

</script>





';
include("vues/layout.php");
?>