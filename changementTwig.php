{% for ingredient in ingredients %}
        

Dans SHOW: La table principale est disponible sans LOOP
-----

{% for ingredientCat in ingredientcats %}

{% if ingredientCat.id == ingredient.ingredient_categorie_id %} 
    {{ ingredientCat.nom }} 
{% endif %} 

{% endfor %}

-----

{% endfor %}