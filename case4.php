<?php
class Etudiant {
    public $nom; // Nom de l'étudiant
    public $note; // Note de l'étudiant

    function __construct($nom, $note) {
        $this->nom = $nom;
        $this->note = $note;
    }
}

class GroupeEtudiants {
    public $etudiants; // Liste des étudiants dans le groupe

    function __construct($etudiants) {
        $this->etudiants = $etudiants;
    }

    function calculerMoyenne() {
        $total = 0;
        $nombre = count($this->etudiants);

        foreach ($this->etudiants as $etudiant) {
            $total += $etudiant->note;
        }

        $moyenne = $nombre > 0 ? $total / $nombre : 0;

        return $moyenne;
    }

    function deplacerEtudiant($etudiant, $groupeDestination) {
        $cle = array_search($etudiant, $this->etudiants, true);
        if ($cle !== false) {
            unset($this->etudiants[$cle]);
        }

        $groupeDestination->etudiants[] = $etudiant;
    }
}

$etudiant1 = new Etudiant("John", 85);
$etudiant2 = new Etudiant("Jane", 92);
$etudiant3 = new Etudiant("Bob", 78);
$etudiant4 = new Etudiant("Alice", 89);
$etudiant5 = new Etudiant("Charlie", 95);
$etudiant6 = new Etudiant("David", 80);
$etudiant7 = new Etudiant("Eva", 88);
$etudiant8 = new Etudiant("Frank", 76);
$etudiant9 = new Etudiant("Grace", 94);
$etudiant10 = new Etudiant("Hank", 81);
$etudiant11 = new Etudiant("Ivy", 87);
$etudiant12 = new Etudiant("Jack", 91);
$etudiant13 = new Etudiant("Karen", 79);
$etudiant14 = new Etudiant("Leo", 93);
$etudiant15 = new Etudiant("Mia", 82);
$etudiant16 = new Etudiant("Nathan", 90);
$etudiant17 = new Etudiant("Olivia", 84);
$etudiant18 = new Etudiant("Peter", 77);
$etudiant19 = new Etudiant("Quinn", 96);
$etudiant20 = new Etudiant("Rachel", 83);

$groupe1 = new GroupeEtudiants([$etudiant1, $etudiant2, $etudiant3, $etudiant4, $etudiant5, $etudiant6, $etudiant7, $etudiant8, $etudiant9, $etudiant10]);
$groupe2 = new GroupeEtudiants([$etudiant11, $etudiant12, $etudiant13, $etudiant14, $etudiant15, $etudiant16, $etudiant17, $etudiant18, $etudiant19, $etudiant20]);

echo "Moyenne pour le Groupe 1 : " . $groupe1->calculerMoyenne() . "<br>";
echo "Moyenne pour le Groupe 2 : " . $groupe2->calculerMoyenne() . "<br>";

// Trier les étudiants du Groupe 1 en fonction des notes par ordre décroissant
usort($groupe1->etudiants, function ($a, $b) {
    return $b->note - $a->note;
});

// Obtenir le meilleur étudiant du Groupe 1
$meilleurEtudiantGroupe1 = array_shift($groupe1->etudiants);

// Trier les étudiants du Groupe 2 en fonction des notes par ordre croissant
usort($groupe2->etudiants, function ($a, $b) {
    return $a->note - $b->note;
});

// Obtenir l'étudiant avec la note la plus basse du Groupe 2
$etudiantNoteLaPlusBasseGroupe2 = array_shift($groupe2->etudiants);

// Vérifier s'il y a un meilleur étudiant dans le Groupe 1 et un étudiant dans le Groupe 2 avant de déplacer
if ($meilleurEtudiantGroupe1 && $etudiantNoteLaPlusBasseGroupe2) {
    $groupe1->deplacerEtudiant($meilleurEtudiantGroupe1, $groupe2);
}

echo "<br>Après avoir déplacé le meilleur étudiant du Groupe 1 vers le Groupe 2:<br>";
echo "Moyenne pour le Groupe 1 : " . $groupe1->calculerMoyenne() . "<br>";
echo "Moyenne pour le Groupe 2 : " . $groupe2->calculerMoyenne() . "<br>";

?>
