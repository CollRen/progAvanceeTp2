{{ include('layouts/header.php', { title: 'Ingredient'})}}
<div class="container">
    <h2>Ingredient Edit</h2>
    <form method="post">
        <label>Nom
            <input type="text" name="nom" value="{{ ingredient.nom }}">
        </label>
        {% if errors.name is defined %}
        <span class="error">{{ errors.nom }}</span>
        {% endif %}

        <select name="ingredient_categorie" id="">

            {% for ingredientcat in ingredientcats %}

            <option value="{{ ingredientcat.id }}" {% if ingredientcat.id == ingredient.ingredient_categorie %} selected {% endif %}>{{ ingredientcat.nom }}</option>

            {% endfor %}
        </select>

        <input type="submit" class="btn" value="Update">
    </form>
</div>
{{ include('layouts/footer.php') }}