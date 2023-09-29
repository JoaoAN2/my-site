<?php
class GetInstitucionalService {

    public function execute(PDO $pdo) {
        
        $query = "SELECT * FROM institucional";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $result[0]["numero_visitas"] += 1;
        $newQuery = "UPDATE institucional SET numero_visitas = :novoNumero WHERE id_institucional=1";
        $newStmt = $pdo->prepare($newQuery);
        $newStmt->bindParam(":novoNumero", $result[0]["numero_visitas"], PDO::PARAM_INT);
        $newStmt->execute();

        return $result;

    }

}

?>