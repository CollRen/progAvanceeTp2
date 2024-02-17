{{ include('layouts/header.php', { title: 'Recette'})}}
    <h1>Recette</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>phone</th>
                <th>Zip Code</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        {% for recette in recettes %}
            <tr>
                <td><a href="{{ base }}/recette/show?id={{ recette.id }}">{{ recette.titre }}</a></td>
                <td>{{ recette.description }}</td>
                <td>{{ recette.temps_cuisson }}</td>
                <td>{{ recette.temps_preparation }}</td>
                <td>{{ recette.email }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <a href="{{ base }}/recette/create" class="btn" >Recette Create</a>
