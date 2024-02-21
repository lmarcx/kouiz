<?php include 'database.php'; ?>

<!-- Start Question Section -->
<section>
    <?php
    // 2. Sélectionner une question aléatoire depuis la table question
    $sql = "SELECT id, contenu FROM question ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Récupérer l'ID et le contenu de la question sélectionnée
        $row = $result->fetch_assoc();
        $question_id = $row["id"];
        $question_content = $row["contenu"];

        // Afficher la question sélectionnée
        echo "<h1 class='text-center mt-32 text-4xl font-bold'>" . $question_content . "</h1>";

        // 3. Inclure le fichier answer.php et lui passer l'ID de la question
        include 'answer.php';
    } else {
        echo "No question found";
    }
    ?>
</section>
<!-- End Question Section -->

<?php include 'database.php'; ?>
