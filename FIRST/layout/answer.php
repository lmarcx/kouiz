<?php include 'database.php'; ?>

<!-- Start Answer Section -->
<section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4 mx-4 md:mx-8 lg:mx-16 xl:mx-20 my-40">
    
    <?php
    // 2. Sélectionner les réponses correspondantes à cette question dans la table "reponse"
    $sql_answers = "SELECT contenu FROM reponse WHERE question_id = $question_id";
    $result_answers = $conn->query($sql_answers);

    if ($result_answers->num_rows > 0) {
        // 3. Afficher les réponses dans la section des réponses
        while ($row_answers = $result_answers->fetch_assoc()) {
            echo 
            "<div class='p-4 bg-gray-400 rounded-lg hover:bg-orange-500'>
                    <h2 class='text-center text-xl font-bold'>" . $row_answers["contenu"] . "</h2>
            </div>";
        }
    } else {
        echo "No answers found for this question.";
    }
    ?>
</section>
<!-- End Answer Section -->

<?php include 'database.php'; ?>
