{{ include('layouts/header.php', { title: 'Show'})}}
    <div class="container">
        <h2>Ingredientcat Show</h2>
        <hr>
        <p><strong>Nom:</strong> {{ ingredientcat.nom }}</p>


        <a href="{{base}}/ingredientcat/edit?id={{ingredientcat.id}}" class="btn block">Edit</a>
        <form action="{{base}}/ingredientcat/delete" method="post">
            <input type="hidden" name="id" value="{{ ingredientcat.id }}">
            <button class="btn block red">Delete</button>
        </form>
    </div>

    {{ include('layouts/footer.php') }}