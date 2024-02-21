{{ include('layouts/header.php', { title: 'Show'})}}
    <div class="container">
        <h2>Recettehasingredient Show</h2>
        <hr>
        <p><strong>ID de la receette:</strong> {{ recettehasingredient.recette_id }}</p>
        <p><strong>ID de l'ingrédient:</strong> {{ recettehasingredient.ingredient_id }}</p>
        <p><strong>Quantité:</strong> {{ recettehasingredient.quantite }}</p>
        <p><strong>ID Unité mesure:</strong> {{ recettehasingredient.unite_mesure_id }}</p>

        <a href="{{base}}/recettehasingredient/edit?id={{recettehasingredient.id}}" class="btn block">Edit</a>
        <form action="{{base}}/recettehasingredient/delete" method="post">
            <input type="hidden" name="id" value="{{ recettehasingredient.id }}">
            <button class="btn block red">Delete</button>
        </form>
    </div>

    {{ include('layouts/footer.php') }}