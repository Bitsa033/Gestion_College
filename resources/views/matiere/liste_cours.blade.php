{% extends 'base.html.twig' %}

{% block title %}Liste des cours!
{% endblock %}

{% block body %}
	<!-- Content Wrapper. Contains page content -->
	<div
		class="content-wrapper">

		<!-- Main content -->
		<section class="content">
			<div
				class="container col-8 offset-1">
				<!-- Info boxes -->

				<div class=" card">
					
					<div class='card-header'>
					<h5><strong>Filiere:</strong> {{filiere.nom}}  <strong>Classe:</strong> {{classe.nom}}
							<strong>Semestre:</strong> {{semestre.nom}}</h5>
					<h5>Liste des cours | <a href="">Imprimer</a> </h5>
					</div>
					<div class=" card-body table-responsive p-0" style="height: 350px;">
						<table class="table table-bordered table-head-fixed">

							<tr>
								<th>Matiere</th>
								<th>Note</th>
								<th>Credit</th>
							</tr>
							{% for cours in listeCours %}
								<tr>
									
									<td>{{cours.matiere.nom}}</td>
									<td>{{cours.note}}</td>
									<td>{{cours.credit}}</td>
								</tr>
							{% else %}
								<tr>
									<td colspan="4">Liste vide !</td>
								</tr>
							{% endfor %}


						</table>
					</div>
					<!-- col -->

					
				</div>
				<!-- row -->
				</div>
				
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
	{% endblock %}
