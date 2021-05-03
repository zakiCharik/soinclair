<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210424115609 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE adherant ADD entreprise VARCHAR(255) DEFAULT NULL, ADD code_client VARCHAR(255) DEFAULT NULL, ADD lastname VARCHAR(255) DEFAULT NULL, ADD nom_conjoint_first VARCHAR(255) DEFAULT NULL, ADD nom_conjoint_second VARCHAR(255) DEFAULT NULL, ADD nbr_enfant INT DEFAULT NULL, ADD adresse VARCHAR(255) DEFAULT NULL, ADD date_naissance DATE DEFAULT NULL, ADD situation_pro VARCHAR(255) NOT NULL, ADD category_sociopro VARCHAR(255) DEFAULT NULL, ADD maladie_chroni VARCHAR(255) DEFAULT NULL, ADD formule_soin_clair VARCHAR(255) DEFAULT NULL, ADD supp_one VARCHAR(255) DEFAULT NULL, ADD supp_two VARCHAR(255) DEFAULT NULL, ADD supp_three VARCHAR(255) DEFAULT NULL');
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
        $this->addSql('ALTER TABLE adherant DROP entreprise, DROP code_client, DROP lastname, DROP nom_conjoint_first, DROP nom_conjoint_second, DROP nbr_enfant, DROP adresse, DROP date_naissance, DROP situation_pro, DROP category_sociopro, DROP maladie_chroni, DROP formule_soin_clair, DROP supp_one, DROP supp_two, DROP supp_three');
        $this->addSql('ALTER TABLE employeur DROP FOREIGN KEY FK_8747E1C7A76ED395');
        $this->addSql('DROP INDEX IDX_8747E1C7A76ED395 ON employeur');
        $this->addSql('ALTER TABLE employeur DROP user_id');
    }
}
