<!-- Require bootstrap -->
<?php require '../bootstrap.php'; 

use Manager\AuthorManager;
use Repository\AuthorRepository;

// Récupère l'id dans les paramètres d'URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

//Récupère l'auteur correspondant à l'ID
$repository = new AuthorRepository($connection);
if(null == $author = $repository->findOneById($id)) {
    http_response_code(404);
    exit;
}

//Si le formulaire a été soumis
if(isset($_POST['author_update'])) {
    // Met à jour l'auteur avec les données saisies par l'internaute
    $author->setName($_POST['name']);
    $manager = new AuthorManager($connection);
    $manager->update($author);

    //Rediriger l'internaute
    http_response_code(302);
    header('Location: /admin/author/read.php?id=' . $author->getId());
    exit;
}

?>
<!doctype html>
<html lang="fr">
<head>
    <!-- Head -->
    <?php include PROJECT_ROOT . '/admin/includes/head.php'; ?>
    <title>Administration</title>
</head>
<body>
<!-- Top bar -->
<?php include PROJECT_ROOT . '/admin/includes/topbar.php'; ?>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar bar -->
        <?php include PROJECT_ROOT . '/admin/includes/sidebar.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Tableau de bord</h1>
            </div>

            <!-- TODO Add content -->

        </main>
    </div>
</div>

<!-- Scripts -->
<?php include PROJECT_ROOT . '/admin/includes/scripts.php'; ?>
</html>
