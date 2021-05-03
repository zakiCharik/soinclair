<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210424010155 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE partenaire (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, logo VARCHAR(255) DEFAULT NULL, logo_path VARCHAR(255) DEFAULT NULL, entreprise VARCHAR(100) DEFAULT NULL, specialite VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, description_profil LONGTEXT NOT NULL, tarifs DOUBLE PRECISION DEFAULT NULL, INDEX IDX_32FFA373A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE partenaire ADD CONSTRAINT FK_32FFA373A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE adherant ADD user_id INT NOT NULL, ADD cartesoinclair VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE adherant ADD CONSTRAINT FK_97DA58BCA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_97DA58BCA76ED395 ON adherant (user_id)');
        $this->addSql('ALTER TABLE employeur ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE employeur ADD CONSTRAINT FK_8747E1C7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_8747E1C7A76ED395 ON employeur (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE partenaire');
        $this->addSql('ALTER TABLE adherant DROP FOREIGN KEY FK_97DA58BCA76ED395');
        $this->addSql('DROP INDEX IDX_97DA58BCA76ED395 ON adherant');
        $this->addSql('ALTER TABLE adherant DROP user_id, DROP cartesoinclair');
        $this->addSql('ALTER TABLE employeur DROP FOREIGN KEY FK_8747E1C7A76ED395');
        $this->addSql('DROP INDEX IDX_8747E1C7A76ED395 ON employeur');
        $this->addSql('ALTER TABLE employeur DROP user_id');
    }
}
