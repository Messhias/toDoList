<!DOCTYPE html>
<html ng-app='tarefas'>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MInha lista de tarefas</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<style>

		.even{
			background-color: #EFEFEF;
			padding: 10px;
		}
		.odd{
			background-color: #DDDDDD;
			padding: 10px;
		}
		.header{text-align: center;}
		
	</style>

</head>
<body class="container" ng-controller='tarefasController as tarefas'>
	
	<div class="page-header">
		
		<h2>
			Minha lista de tarefas
		</h2>

	</div>

	<form ng-submit="adicionarTarefa()">
		
		<label for="texto">Tarefa</label>
		<input type="text" name="texto" ng-model="texto" required="true"
		placeholder="Texto" class="form-control">


		<label for="autor">Autor</label>
		<input type="text" name="autor" ng-model="autor" required="true"
		placeholder="Texto" class="form-control">


		<label for="autor">Status</label>
		<select name="status" name='status' ng-model="status" required="true"
		class="form-control">
			<option value="Concluido">Concluido</option>
			<option value="Pendente">Pendente</option>
		</select>

		<br>

		<input type="submit" name="btnAddTask" value="Cadastrar" class="btn btn-default">
		
	</form>

	<br>

	<div class="row" 
	ng-repeat='tarefa in dadosTarefa'
	ng-class-odd="'odd'"
	ng-class-even="'even'"
	>
		<div class="col-sm-1">
			<span ng-click='excluirTarefa(tarefa.id)'
			class="glyphicon glyphicon-remove"
			aria-hidden='true'></span>
		</div>
		<div class="col-sm-3">{{tarefa.texto}}</div>
		<div class="col-sm-3">{{tarefa.autor}}</div>
		<div class="col-sm-3">{{tarefa.status}}</div>
		<div class="col-sm-2">

			<span ng-if="tarefa.status == 'Concluido'">
				<input type="button" value="Marcar como pendente"
				class="btn btn-success"
				ng-click="mudarStatus(tarefa.id,'Pendente');"
				>
			</span>


			<span ng-if="tarefa.status == 'Pendente'">
				<input type="button" value="Marcar como concluido"
				class="btn btn-danger"
				ng-click="mudarStatus(tarefa.id,'Concluido');"
				>
			</span>

		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.js" type="text/javascript"></script>

	<script src="js/app.js" type="text/javascript"></script>

</body>
</html>