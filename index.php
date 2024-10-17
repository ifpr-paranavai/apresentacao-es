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
            <h2 class="section-title"><?php echo $data['about']['title']; ?></h2>
            <p class="text-center"><?php echo $data['about']['description']; ?></p>

            <div class="text-right mt-4">
                <a href="matriz.php" class="btn btn-secondary">Matriz Curricular</a>
                <a href="https://portaldocandidato.ifpr.edu.br/" target="_blank" class="btn btn-danger">Inscrições Abertas - INSCREVA-SE</a>
            </div>
        </div>
    </section>

    <section class="section bg-light">
        <div class="container">
            <h2 class="section-title"><?php echo $data['projects']['title']; ?></h2>
            <p class="mb-4"><?php echo $data['projects']['description']; ?></p>
            <div class="row">
                <?php foreach ($data['projects']['items'] as $project): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card project-card">
                            <img src="<?php echo $project['image']; ?>" class="card-img-top" alt="<?php echo $project['title']; ?>">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #22223B;"><?php echo $project['title']; ?></h5>
                                <p class="card-text"><?php echo $project['description']; ?></p>
                                <!-- <a href="#" class="btn btn-primary">Saiba Mais</a> -->
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="section-title"><?php echo $data['labs']['title']; ?></h2>
            <div class="row">
                <?php foreach ($data['labs']['items'] as $lab): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card lab-card">
                            <img src="<?php echo $lab['image']; ?>" class="card-img-top" alt="<?php echo $lab['title']; ?>">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #22223B;"><?php echo $lab['title']; ?></h5>
                                <p class="card-text"><?php echo $lab['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section bg-light">
        <div class="container">
            <h2 class="section-title"><?php echo $data['testimonials']['title']; ?></h2>
            <div class="row">
                <?php foreach ($data['testimonials']['items'] as $testimonial): ?>
                    <div class="col-md-6 d-flex mb-4">
                        <div class="card testimonial-card">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <blockquote class="blockquote mb-4">
                                    <p>"<?php echo $testimonial['quote']; ?>"</p>
                                </blockquote>
                                <footer class="text-right" style="font-style: italic;"><?php echo $testimonial['student']; ?><br /><small><?php echo $testimonial['year']; ?></small></footer>
                            </div>
                        </div>
                    </div>
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