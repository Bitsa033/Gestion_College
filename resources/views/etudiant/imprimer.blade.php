
<h1 class='h1'>{{titre}}</h1>

<div>
    <table>
        <tr>
            <td colspan='2' class='td'>
               <div class="filiere"> Filiere: <strong> {{filiere}}</strong></div>
                <div class="classe">Classe: <strong> {{niveau}}</strong> </div>
            </td>
            
        </tr>
        {% for element in etudiants %}
            <tr>
                <td style='width:10%;'>{{element.id}}</td>
                <td>{{element.etudiant.nom}}</td>
            </tr>
        {% else %}
            <tr>
                <td colspan='2'>Tableau vide...</td>
            </tr>
        {% endfor %}

    </table>
</div>

{# <link rel="stylesheet" href="{{asset('css/table.css')}}"> #}

<style>
    table {
    border-collapse: collapse;
    width: 70%;
    height: 20%;
    box-shadow: 0 0 10px gray;
    margin-left: 10px;
}

th,
td {
    border: 2px black solid;
    background: rgb(200, 200, 200);
}

.td{margin-left:20%;}

.filiere {
   text-transform:uppercase;
}
.classe {
   text-transform:uppercase;
}
.h1 {
    margin-left: 20%;
}
</style>
