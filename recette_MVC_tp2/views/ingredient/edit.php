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
           
            <input type="submit" class="btn" value="Update">
        </form>
    </div>
    {{ include('layouts/footer.php') }}