<?php
class GetInstitucionalService {

    public function execute(PDO $pdo) {
        
        $query = "SELECT * FROM institucional";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

}

?>