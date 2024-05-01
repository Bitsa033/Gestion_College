
<h1 class='h1'>{{titre}}</h1>

<div>
    <table>

        {% for element in filieres %}
            <tr>
                <td>{{element.id}}</td>
                <td>{{element.nom}}</td>
            </tr>
        {% else %}
            
        {% endfor %}

    </table>
</div>

{# <link rel="stylesheet" href="{{asset('css/table.css')}}"> #}

<style>
    table {
    border-collapse: collapse;
    width: 70%;
    box-shadow: 0 0 10px gray;
    margin-left: 10px;
}

th,
td {
    border: 2px black solid;
    background: rgb(200, 200, 200);
}

.h1 {
    margin-left: 20%;
}
</style>
