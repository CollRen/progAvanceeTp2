{{ include('layouts/header.php', { title: 'Create'})}}
    <div class="container">
        <h2>Tester Create</h2>
        <form method="post">
            <label>Titre
                <input type="text" name="titre" value="{{ tester.name }}">
            </label>
            {% if errors.name is defined %}
                <span class="error">{{ errors.name }}</span>
            {% endif %}
            <label>Description
                <input type="text" name="description" value="{{ tester.address }}">
            </label>
            {% if errors.address is defined %}
                <span class="error">{{ errors.address}}</span>
            {% endif %}
            <label>temps_preparation
                <input type="text" name="temps_preparation" value="{{ tester.zip_code }}">
            </label>
            {% if errors.zip_code is defined %}
                <span class="error">{{ errors.zip_code}}</span>
            {% endif %}
            <label>temps_cuisson
                <input type="text" name="temps_cuisson" value="{{ tester.phone }}">
            </label>
            {% if errors.phone is defined %}
                <span class="error">{{ errors.phone}}</span>
            {% endif %}
            <label>email
                <input type="email" name="email" value="{{ tester.email }}">
            </label>

            <input type="submit" class="btn" value="Save">
        </form>
    </div>
    {{ include('layouts/footer.php') }}