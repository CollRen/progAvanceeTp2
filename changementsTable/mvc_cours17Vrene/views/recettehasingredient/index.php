{{ include('layouts/header.php', { title: 'Recettehasingredient'})}}
    <h1>Recettehasingredient</h1>
    <table>
        <thead>
            <tr>
                <th>Mmm ici nous avons besoin de deux clés qui sont étrangères</th>

            </tr>
        </thead>
        <tbody>
        {% for recettehasingredient in recettehasingredients %}
            <tr>
                <td><a href="{{ base }}/recettehasingredient/show?id={{ recettehasingredient.id }}">{{ recettehasingredient.ingredient_id }}</a></td>

            </tr>
        {% endfor %}
        </tbody>
    </table>
    <a href="{{ base }}/recettehasingredient/create" class="btn" >Recettehasingredient Create</a>
