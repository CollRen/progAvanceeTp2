{{ include('layouts/header.php', { title: 'IngredientCat'})}}
    <h1>IngredientCat</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>

            </tr>
        </thead>
        <tbody>
        {% for ingredientcat in ingredientcats %}
            <tr>
                <td><a href="{{ base }}/ingredientcat/show?id={{ ingredientcat.id }}">{{ ingredientcat.nom }}</a></td>

            </tr>
        {% endfor %}
        </tbody>
    </table>
    
    <a href="{{ base }}/ingredientcat/create" class="btn" >IngredientCat Create</a>
