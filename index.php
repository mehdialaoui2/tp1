<?php
function valider_mot_de_passe($mot_de_passe) {
    // Vérifier la longueur du mot de passe
    if (strlen($mot_de_passe) < 6 || strlen($mot_de_passe) > 10) {
        return "Erreur: Le mot de passe doit comporter entre 6 et 10 caractères.";
    }

    // Définir le sel
    $sel = "ABC 1234@";

    // Concaténer le mot de passe et le sel
    $mot_de_passe_avec_sel = $mot_de_passe . $sel;

    // Chiffrer le nouveau mot de passe
    $mot_de_passe_chiffre = hash('sha256', $mot_de_passe_avec_sel);

    // Retourner le sel et le mot de passe chiffré
    return "Sel: " . $sel . ", Mot de passe chiffré: " . $mot_de_passe_chiffre;
}

// Tester la fonction
echo valider_mot_de_passe("monMotDePasse");
?>