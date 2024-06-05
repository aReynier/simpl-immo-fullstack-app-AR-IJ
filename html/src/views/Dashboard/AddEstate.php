<!DOCTYPE html>
<html lang="fr">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire d'annonce</title>
<!-- Lien vers le CSS de Bootstrap -->
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->

</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="<?php echo URL_FORM_ADD_ESTATE; ?>" method="POST" class="mt-5">
                <h2 class="text-center mb-4">Ajouter une annonce</h2>
                <div class="form-group">
                    <label for="title">Titre :</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="city">Ville :</label>
                    <input type="text" id="city" name="city" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="description">Description :</label>
                    <input type="text" id="description" name="description" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="images">Image :</label>
                    <input type="text" id="images" name="images" class="form-control">
                </div>

                <div class="form-check">
                    <label for="isHouse" class="form-check-label">Est -ce une maison ? :</label>
                    <input type="checkbox" id="isHouse" name="isHouse" class="form-check-input">
                </div>

                <div class="form-group">
                    <label for="type">Type :</label>
                    <input type="text" id="type" name="type" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="price">Prix :</label>
                    <input type="number" id="price" name="price" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="propertySurface">Surface de la propriété (m²) :</label>
                    <input type="number" id="propertySurface" name="propertySurface" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="roomNumber">Nombre de pièces :</label>
                    <input type="number" id="roomNumber" name="roomNumber" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="bedroomNumber">Nombre de chambres :</label>
                    <input type="number" id="bedroomNumber" name="bedroomNumber" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="energeticPerformance">Numéro performance énergétique :</label>
                    <input type="text" id="energeticPerformance" name="energeticPerformance" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="greenhouseGases">Numéro gaz à effet de serre :</label>
                        <input type="text" id="greenhouseGases" name="greenhouseGases" class="form-control" required>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" id="isFurnished" name="isFurnished" class="form-check-input">
                        <label for="isFurnished" class="form-check-label">Meublé :</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" id="isBalcony" name="isBalcony" class="form-check-input">
                        <label for="isBalcony" class="form-check-label">Balcon :</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" id="isPool" name="isPool" class="form-check-input">
                        <label for="isPool" class="form-check-label">Piscine :</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" id="isCellar" name="isCellar" class="form-check-input">
                        <label for="isCellar" class="form-check-label">Cave :</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" id="isAirConditioning" name="isAirConditioning" class="form-check-input">
                        <label for="isAirConditioning" class="form-check-label">Climatisation :</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mt-6">Ajouter</button>
                </form>
            </div>
        </div>
    </div>


</body>
</html>