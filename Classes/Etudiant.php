<?php


class Etudiant extends Database {

    public function addEtudiant($nom, $prenom, $dateNaissance, $codeClass, $numInscription, $address, $mail, $tel) {
        $data = [
            'Nom' => $nom,
            'Prenom' => $prenom,
            'DateNaissance' => $dateNaissance,
            'CodeClass' => $codeClass,
            'NumInscription' => $numInscription,
            'Address' => $address,
            'Mail' => $mail,
            'Tel' => $tel
        ];

        return $this->insertRecord('etudiant', $data);
    }

    //get all etudiant
    public function getAllStudents() {
        $query = "SELECT * FROM etudiant";
        return $this->getAllRecords($query);
    }

   // get etudiant by ID
    public function getEtudiantById($idColumn, $etudiantId) {
        return $this->getRecordById('etudiant', $idColumn, $etudiantId);
    }


    //delete etudiant by id
    public function deleteEtudiantById($etudiantId) {
        return $this->deleteRecordById('etudiant',$idColumn, $etudiantId);
    }


    //edit etudinat by id
    public function editEtudiantById($etudiantId, $data) {
        return $this->editRecordById('etudiant', $etudiantId, $data);
    }
}
?>
