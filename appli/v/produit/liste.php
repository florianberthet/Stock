<!-- Bootstrap  JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo Install\Chemins::JS; ?>bootstrap.js"></script>
<script>
    $(document).ready(function() {
    });
</script>

<!-- Insertion CSS -->
<LINK rel="stylesheet" href="../_/css/bootstrap.css" type="text/css">
<LINK rel="stylesheet" href="../_/css/sb-admin.css" type="text/css">

<div id="wrapper">
    <!-- Header + Menu -->
    <?php
    include("../../appli/v/menu.php");
    ?>
    <!-- Corps -->
    <div id="page-wrapper">
        <div class ="row">
            <!-- Titre -->
            <div class="col-lg-12">
                <h1 class="page-header">Liste des produits</h1>
            </div>
        </div>

        <!-- Contenue -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Tableau -->
                <div class="table-responsive">
                    
                    <table class="table table-bordered table-hover table-striped tablesorter">
                        <thead>
                            <tr>
                                <th class="header">Identifiant <i class="fa fa-sort"></i></th>
                                <th class="header">Description <i class="fa fa-sort"></i></th>
                                <th class="header">Prix <i class="fa fa-sort"></i></th>
                                <th class="header">Qte en stock <i class="fa fa-sort"></i></th>
                            </tr>
                        </thead>

                        <!-- "id=table_row" permet d'afficher les données générées par le script -->
                        <tbody id="table_rows">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Script permettant l'affichage des données de la BDD -->
<script type="text/javascript">
    var liste = <?php echo json_encode($this->liste) ?>;

    for (var i = 0; i < 200; i++)
    {
        $('#table_rows').append('<tr><td>' + liste[i].id + '</td><td>' + liste[i].description + '</td><td>' + liste[i].prix + '</td><td>' + liste[i].qtecommande + '</td></tr>');
    }

</script>