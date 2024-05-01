{% extends 'base.html.twig' %}

{% block body %}
    <!-- Content Wrapper. Contains page content -->
    <div
        class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div
                class="container-fluid">
                <!-- Info boxes --> <br>
                
                <div class="row">
                    <div class="col-md-8 offset-1">
                        <div class="card card-blue">
                            <div class="card-header"> 
                                <form action="{{path('porte_nouveau_cour_traitement')}}" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select name="filiere" id="" class="form-control">
                                                <option value="">Filiere ...</option>
                                                {% for filiere in filieres %}
                                                        <option value="{{filiere.id}}">{{filiere.nom}}</option>
                                                {% else %}
                                                    <option value="">Tableau vide...</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <!--/col -->
                                        <div class="col-md-3">
                                            <select name="niveau" id="" class="form-control">
                                                <option value="">Niveau ...</option>
                                                {% for classe in niveaux %}
                                                        <option value="{{classe.id}}">{{classe.nom}}</option>
                                                {% else %}
                                                    <option value="">Tableau vide...</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <!--/col -->
                                        <div class="col-md-3">
                                            <select name="semestre" id="" class="form-control">
                                                <option value="">Semestre ...</option>
                                                {% for semestre in semestres %}
                                                        <option value="{{semestre.id}}">{{semestre.nom}}</option>
                                                {% else %}
                                                    <option value="">Tableau vide...</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <!--/col -->
                                        <div class="col-md-2">
                                            <button name="matieres_transfert_form" value="matieres_transfert_form" class="btn btn-default" type="submit">Choisir</button>
                                        </div>
                                        <!--/col -->
                                    </div>
                                    <!--/row -->
                                </form>
                            </div>
                            <div class="card-header">
                                {% if app.session.get('filiere') and app.session.get('niveau') and app.session.get('semestre') %}
                                    <a href="{{path('liste_cours')}}"> liste des cours</a>
                                {% endif %}
                            </div>
                           
                            <div class="card-body table-warning table-responsive p-0" style="height: 400px;">
                                {% if app.session.get('filiere') and app.session.get('niveau') and app.session.get('semestre') %}
                                    
                                    <table class="table table-head-fixed text-nowrap">
                                        
                                        <form action="{{path('nouveau_cour_traitement')}}" method="post">
                                            
                                            {% for ms in matieres %}
                                            <tr>
                                                <td><input type="checkbox" name="matiereId[]" id="" value="{{ ms.id }}"></td>
                                                <td>{{ ms.nom }}<input type="hidden" value="{{ ms.id }}" class="form-control form-check" name="matiereName[]" id=""></td>
                                                <td><input type="number" class="form-control" name="note[]" id="" placeholder="Note /20"></td>
                                            </tr>
                                            {% endfor %}
                                            

                                        </div>
                                    </table>
                                    <!-- /.content-wrapper -->
                                {% else %}
                                    
                                {% endif %}

                            </div>
                            <div class="card-footer">
                                {% if app.session.get('filiere') and app.session.get('niveau') and app.session.get('semestre') %}
                                    <button name="enregistrer" class="btn btn-success form-control" type="submit">Enregistrer</button>
                                    </form>
                                    
                                {% else %}
                                    
                                {% endif %}
                            </div>
                        </div>
                        
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
{% endblock %}
