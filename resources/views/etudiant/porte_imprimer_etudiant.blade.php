<link rel="stylesheet" href="template/dist/css/bootstrap.min.css">

<div class="row">
    <div class="col-7 offset-2">
        
        <div class="card">
            {% for message in app.flashes('success') %}
            <div class="alert alert-success container col-12">
                {{ message}}
            </div>
            {% endfor %}
            <div class="card-header">
                <h5 class='text-uppercase'>Selectioner la filiere et la classe avant de continuer...</h5>
            </div>

            <div class="card-body">
            
                <form action=""  method="post">
                   <div class="form-group">
                        Filiere
                        <select class='form-control' type="text" name="filiere" id="">
                        {% for element in filieres %}
                            <option value="{{element.id}}">{{element.nom}}</option>
                        {% else %}
                             <option value="">Tableau vide...</option>
                        {% endfor %}
                        </select>
                   </div>
                   <div class="form-group">
                       Classe
                        <select class='form-control' type="text" name="classe" id="">
                        {% for element in niveaux %}
                            <option value="{{element.id}}">{{element.nom}}</option>
                        {% else %}
                             <option value="">Tableau vide...</option>
                        {% endfor %}
                        </select>
                   </div>
                    <div class="form-group">
                        <a class='btn btn-warning col-4' href="{{path('liste_etudiant')}}">Retour</a>
                        <button type="submit" class='col-4 btn btn-success'>Suivant</button>
                    </div>
                
                </form>
            
            </div>
        
        </div>
    
    
    </div>

</div>

<style>
.card{
    position: relative;
    top:30%;
}
</style>