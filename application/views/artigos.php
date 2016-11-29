<html>
	<body>
		<h2>Artigos do nosso blog</h2>
		<table>
			<tr>
				<th>Titulo</th>
				<th>Conteúdo</th>
			</tr>
			<?php foreach($artigos as $artigo){ ?>
				<tr>
					<td> <?= $artigo['titulo'];?> </td>
					<td> <?= $artigo['conteudo'];?> </td>
				</tr>
			<?php };?>
		</table>
	</body>
</html>