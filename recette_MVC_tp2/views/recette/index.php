{{ include('layouts/header.php', { title: 'Recette'})}}
    <h1>Recette</h1>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Temps de cuisson</th>
                <th>Temps préparation</th>
            </tr>
        </thead>
        <tbody>
        {% for recette in recettes %}
            <tr>
                <td><a href="{{ base }}/recette/show?id={{ recette.id }}">{{ recette.titre }}</a></td>
                <td>{{ recette.description }}</td>
                <td>{{ recette.temps_cuisson }}</td>
                <td>{{ recette.temps_preparation }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <a href="{{ base }}/recette/create" class="btn" >Recette Create</a>
