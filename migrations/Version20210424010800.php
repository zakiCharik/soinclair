<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210424010800 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

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

        $this->addSql('ALTER TABLE adherant DROP FOREIGN KEY FK_97DA58BCA76ED395');
        $this->addSql('DROP INDEX IDX_97DA58BCA76ED395 ON adherant');
        $this->addSql('ALTER TABLE employeur DROP FOREIGN KEY FK_8747E1C7A76ED395');
        $this->addSql('DROP INDEX IDX_8747E1C7A76ED395 ON employeur');
        $this->addSql('ALTER TABLE employeur DROP user_id');
    }
}
