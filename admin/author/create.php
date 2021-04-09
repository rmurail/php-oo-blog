<!-- Require bootstrap -->
<?php 

require '../../bootstrap.php'; 

use Entity\Author;
use Manager\AuthorManager;

$manager = new AuthorManager($connection);
$author = new Author();

//Si le formulaire a été soumis
if (isset($_POST['author_create'])) {
    //Met à jour l'auteur avec les données saisies par l'internaute
    $author->setName($_POST['name']);

    //Insérer dans la BDD
    $manager->insert($author);

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
                <h1 class="h2">Détail de l'utilisateur</h1>
            </div>

            <p>
                <!-- Boutons Modifier / Supprimer -->
            </p>

            <table>
                <tbody>
                <tr>
                    <th>ID</th>
                    <td>
                        #
                    </td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>
                        #
                    </td>
                </tr>
                </tbody>
            </table>

        </main>
    </div>
</div>

<!-- Scripts -->
<?php include PROJECT_ROOT . '/admin/includes/scripts.php'; ?>
</html>
