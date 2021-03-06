<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>


<br/>

<?php if ($db) : ?>

<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2 mt-3">
		<a href="computadores/add.php" class="btn btn-primary">
			<div class="row mt-3">
				<div class="col-xs-12 text-center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Novo Computador</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2 mt-3">
		<a href="computadores" class="btn btn-default">
			<div class="row mt-3">
				<div class="col-xs-12 text-center">
					<i class="fa fa-laptop fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Ver Computadores</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2 mt-3">
		<a href="computadores/list-directory.php" class="btn btn-default">
			<div class="row mt-3">
				<div class="col-xs-12 text-center">
					<i class="fa fa-paste fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Listagem de Diretórios</p>
				</div>
			</div>
		</a>
	</div>
</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>