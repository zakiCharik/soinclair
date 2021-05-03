<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210422114554 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE adherant (id INT AUTO_INCREMENT NOT NULL, numero_soinclair VARCHAR(255) NOT NULL, cin VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employeur (id INT AUTO_INCREMENT NOT NULL, database_employees VARCHAR(255) DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, logo_path VARCHAR(255) DEFAULT NULL, entreprise VARCHAR(255) DEFAULT NULL, activity VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, short_description LONGTEXT DEFAULT NULL, long_description LONGTEXT NOT NULL, path_picture VARCHAR(255) DEFAULT NULL, order_in_list INT DEFAULT NULL, is_visible TINYINT(1) NOT NULL, date_published DATE DEFAULT NULL, corps_service LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(60) NOT NULL, firstname VARCHAR(70) NOT NULL, phonenumber VARCHAR(50) DEFAULT NULL, created_time DATE DEFAULT NULL, modified_time DATE DEFAULT NULL, is_locked TINYINT(1) NOT NULL, password VARCHAR(255) NOT NULL, salt VARCHAR(255) DEFAULT NULL, ville VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, subscription_date DATE NOT NULL, expiring_date DATE DEFAULT NULL, role VARCHAR(255) DEFAULT NULL, type VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE adherant');
        $this->addSql('DROP TABLE employeur');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE user');
    }
}
