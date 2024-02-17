{{ include('layouts/header.php', { title: 'Show'})}}
    <div class="container">
        <h2>Tester Show</h2>
        <hr>
        <p><strong>Name:</strong> {{ tester.name }}</p>
        <p><strong>Address:</strong> {{ tester.address }}</p>
        <p><strong>Zip Code:</strong> {{ tester.zip_code }}</p>
        <p><strong>Phone:</strong> {{ tester.phone }}</p>
        <p><strong>Email:</strong> {{ tester.email }}</p>
        <a href="{{base}}/tester/edit?id={{tester.id}}" class="btn block">Edit</a>
        <form action="{{base}}/tester/delete" method="post">
            <input type="hidden" name="id" value="{{ tester.id }}">
            <button class="btn block red">Delete</button>
        </form>
    </div>

    {{ include('layouts/footer.php') }}