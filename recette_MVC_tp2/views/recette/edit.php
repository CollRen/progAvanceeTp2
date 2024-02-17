{{ include('layouts/header.php', { title: 'Recette'})}}
    <div class="container">
        <h2>Recette Edit</h2>
        <form method="post">
        <label>Titre
                <input type="text" name="titre" value="{{ recette.titre }}">
            </label>
            {% if errors.name is defined %}
                <span class="error">{{ errors.name }}</span>
            {% endif %}
            <label>Description
                <input type="text" name="description" value="{{ recette.description }}">
            </label>
            {% if errors.address is defined %}
                <span class="error">{{ errors.address}}</span>
            {% endif %}
            <label>temps_preparation
                <input type="text" name="temps_preparation" value="{{ recette.temps_preparation }}">
            </label>
            {% if errors.zip_code is defined %}
                <span class="error">{{ errors.zip_code}}</span>
            {% endif %}
            <label>temps_cuisson
                <input type="text" name="temps_cuisson" value="{{ recette.temps_cuisson }}">
            </label>
            {% if errors.phone is defined %}
                <span class="error">{{ errors.phone}}</span>
            {% endif %}


            <input type="submit" class="btn" value="Update">
        </form>
    </div>
    {{ include('layouts/footer.php') }}