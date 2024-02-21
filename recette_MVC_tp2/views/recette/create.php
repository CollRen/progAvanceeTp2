{{ include('layouts/header.php', { title: 'Create'})}}
    <div class="container">
        <h2>Recette Create</h2>
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
            <label>Temps de préparation <small>(En minutes)</small>
                <input type="text" name="temps_preparation" value="{{ recette.temps_preparation }}">
            </label>
            {% if errors.zip_code is defined %}
                <span class="error">{{ errors.zip_code}}</span>
            {% endif %}
            <label>temps_cuisson <small>(En minutes)</small>
                <input type="text" name="temps_cuisson" value="{{ recette.temps_cuisson }}">
            </label>
            {% if errors.phone is defined %}
                <span class="error">{{ errors.phone}}</span>
            {% endif %}

            <input type="submit" class="btn" value="Save">
        </form>
    </div>
    {{ include('layouts/footer.php') }}