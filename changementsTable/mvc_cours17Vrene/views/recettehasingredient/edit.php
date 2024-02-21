{{ include('layouts/header.php', { title: 'Recettehasingredient'})}}
    <div class="container">
        <h2>Nous ne devrions pas avoir besoin de cette page</h2>
        <form method="post">
        <label>Nom
                <input type="text" name="nom" value="{{ recettehasingredient.recette_id }}">
            </label>
            {% if errors.name is defined %}
                <span class="error">{{ errors.nom }}</span>
            {% endif %}
           
            <input type="submit" class="btn" value="Update">
        </form>
    </div>
    {{ include('layouts/footer.php') }}