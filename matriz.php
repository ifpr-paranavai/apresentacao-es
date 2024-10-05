<?php
$content = file_get_contents('content.json');
$data = json_decode($content, true);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['header']['title']; ?> - IFPR Campus Paranavaí</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />

    <meta property="og:title" content="Engenharia de Software - IFPR Campus Paranavaí">
    <meta property="og:description" content="Conheça o curso de Engenharia de Software do IFPR Campus Paranavaí. Um curso gratuito, reconhecido pelo MEC e com foco em inovação tecnológica e desenvolvimento de software.">
    <meta property="og:url" content="https://eswifpr.tecnoif.com.br">
    <meta property="og:type" content="website">

    <meta name="description" content="Curso de Engenharia de Software do IFPR Campus Paranavaí. Formação gratuita com ênfase em desenvolvimento de software, inovação tecnológica e preparação para o mercado de trabalho.">

</head>

<body>
    <?php include 'header.php'; ?>

    <section class="section">
        <div class="container">
            <a href="index.php" class="btn btn-secondary mb-4">Página Inicial</a>
            <h3 class="text-center">Matriz Curricular</h3>

            <div id="curriculum-container">
                <?php foreach ($data['curriculum']['years'] as $year): ?>
                    <h3><?php echo $year['year']; ?></h3>
                    <table class="table table-bordered mb-4">
                        <thead class="thead-dark">
                            <tr>
                                <th>Disciplina</th>
                                <th>Carga Horária</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($year['subjects'] as $subject): ?>
                                <tr>
                                    <td><?php echo $subject['name']; ?></td>
                                    <td><?php echo $subject['hours']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
        crossorigin="anonymous"></script>

</body>

</html>