{{ include('layouts/header.php', { title: 'Tester'})}}
    <div class="container">
        <h2>Tester Edit</h2>
        <form method="post">
        <label>Name
                <input type="text" name="name" value="{{ tester.name }}">
            </label>
            {% if errors.name is defined %}
                <span class="error">{{ errors.name }}</span>
            {% endif %}
            <label>Address
                <input type="text" name="address" value="{{ tester.address }}">
            </label>
            {% if errors.address is defined %}
                <span class="error">{{ errors.address}}</span>
            {% endif %}
            <label>Zip Code
                <input type="text" name="zip_code" value="{{ tester.zip_code }}">
            </label>
            {% if errors.zip_code is defined %}
                <span class="error">{{ errors.zip_code}}</span>
            {% endif %}
            <label>Phone
                <input type="text" name="phone" value="{{ tester.phone }}">
            </label>
            {% if errors.phone is defined %}
                <span class="error">{{ errors.phone}}</span>
            {% endif %}
            <label>email
                <input type="email" name="email" value="{{ tester.email }}">
            </label>
            {% if errors.email is defined %}
                <span class="error">{{ errors.email}}</span>
            {% endif %}
            <input type="submit" class="btn" value="Update">
        </form>
    </div>
    {{ include('layouts/footer.php') }}