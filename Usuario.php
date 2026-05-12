<?php
class Usuario {
    private $pdo;

    public function __construct($db) {
        $this->pdo = $db;
    }

    // Funcionalidad: Insertar (Registrar datos)
    public function insertar($nombre, $email, $empresa) {
        $sql = "INSERT INTO usuarios (nombre, email, empresa) VALUES (?, ?, ?)";
        return $this->pdo->prepare($sql)->execute([$nombre, $email, $empresa]);
    }

    // Funcionalidad: Listar (Mostrar usuarios)
    public function listar() {
        return $this->pdo->query("SELECT * FROM usuarios")->fetchAll(PDO::FETCH_ASSOC);
    }

    // Funcionalidad: Modificar (Actualizar datos)
    public function modificar($id, $nombre, $email, $empresa) {
        $sql = "UPDATE usuarios SET nombre=?, email=?, empresa=? WHERE id=?";
        return $this->pdo->prepare($sql)->execute([$nombre, $email, $empresa, $id]);
    }

    // Funcionalidad: Eliminar (Borrar un usuario)
    public function eliminar($id) {
        $sql = "DELETE FROM usuarios WHERE id=?";
        return $this->pdo->prepare($sql)->execute([$id]);
    }

    public function obtenerPorId($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>