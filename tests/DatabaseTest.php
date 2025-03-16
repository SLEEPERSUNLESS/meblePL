<?php
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    protected $pdo;

    // Funkcja uruchamia się przed każdym testem
    protected function setUp(): void
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=furniture_database', 'root', '');
    }

    // Testuje, czy połączenie z bazą działa

    public function testDatabaseConnection()
    {
    // Test dla furniture_database
    $pdoFurniture = new PDO('mysql:host=localhost;dbname=furniture_database', 'root', '');
    $this->assertNotNull($pdoFurniture);

    // Test dla user_database
    $pdoUser = new PDO('mysql:host=localhost;dbname=user_database', 'root', '');
    $this->assertNotNull($pdoUser);
    }

    public function testTableExists()
    {
    $pdoFurniture = new PDO('mysql:host=localhost;dbname=furniture_database', 'root', '');
    $stmtFurniture = $pdoFurniture->query("SHOW TABLES LIKE 'furniture'");
    $this->assertNotEmpty($stmtFurniture->fetchAll(PDO::FETCH_ASSOC));

    $pdoUser = new PDO('mysql:host=localhost;dbname=user_database', 'root', '');
    $stmtUser = $pdoUser->query("SHOW TABLES LIKE 'users'");
    $this->assertNotEmpty($stmtUser->fetchAll(PDO::FETCH_ASSOC));
    }

    public function testInsertFurnitureData()
    {
    $pdoFurniture = new PDO('mysql:host=localhost;dbname=furniture_database', 'root', '');
    $stmt = $pdoFurniture->prepare("INSERT INTO furniture (rodzaj, kolor, cena) VALUES (?, ?, ?)");
    $result = $stmt->execute(['Stół', 'czarny', 100.00]);
    $this->assertTrue($result);
    }

    public function testInsertUserData()
    {
    $pdoUser = new PDO('mysql:host=localhost;dbname=user_database', 'root', '');
    $stmt = $pdoUser->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $result = $stmt->execute(['JanKowalski', 'securepassword']);
    $this->assertTrue($result);
    }

    public function testDeleteFurnitureData()
    {
    $pdoFurniture = new PDO('mysql:host=localhost;dbname=furniture_database', 'root', '');
    $stmt = $pdoFurniture->prepare("DELETE FROM furniture WHERE rodzaj = ?");
    $result = $stmt->execute(['Stół']);
    $this->assertTrue($result);
    }       

    public function testDeleteUserData()
    {
    $pdoUser = new PDO('mysql:host=localhost;dbname=user_database', 'root', '');
    $stmt = $pdoUser->prepare("DELETE FROM users WHERE username = ?");
    $result = $stmt->execute(['JanKowalski']);
    $this->assertTrue($result);
    }


    // Funkcja uruchamia się po każdym teście
    protected function tearDown(): void
    {
        $this->pdo = null;
    }
}
