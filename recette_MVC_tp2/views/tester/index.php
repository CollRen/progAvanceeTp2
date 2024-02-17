{{ include('layouts/header.php', { title: 'Tester'})}}
    <h1>Tester</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>phone</th>
                <th>Zip Code</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        {% for tester in testers %}
            <tr>
                <td><a href="{{ base }}/tester/show?id={{ tester.id }}">{{ tester.name }}</a></td>
                <td>{{ tester.address }}</td>
                <td>{{ tester.phone }}</td>
                <td>{{ tester.zip_code }}</td>
                <td>{{ tester.email }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <a href="{{ base }}/tester/create" class="btn" >Tester Create</a>
