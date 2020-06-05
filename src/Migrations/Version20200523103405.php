<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200523103405 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE adherent (id VARCHAR(255) NOT NULL, personne_id INT NOT NULL, anniv_adh DATE NOT NULL, num_licence INT NOT NULL, tel VARCHAR(15) NOT NULL, adresse_adh LONGTEXT NOT NULL, api_token VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_90D3F0607BA2F5EB (api_token), UNIQUE INDEX UNIQ_90D3F060A21BD112 (personne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE adherent_association (adherent_id VARCHAR(255) NOT NULL, association_id INT NOT NULL, INDEX IDX_7C1AEE2225F06C53 (adherent_id), INDEX IDX_7C1AEE22EFB9C8A5 (association_id), PRIMARY KEY(adherent_id, association_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE adherent_groupe (adherent_id VARCHAR(255) NOT NULL, groupe_id INT NOT NULL, INDEX IDX_10BBDA7325F06C53 (adherent_id), INDEX IDX_10BBDA737A45358C (groupe_id), PRIMARY KEY(adherent_id, groupe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin_asso (id VARCHAR(255) NOT NULL, association_id INT NOT NULL, personne_id INT NOT NULL, api_token VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_D6F4D6F7BA2F5EB (api_token), INDEX IDX_D6F4D6FEFB9C8A5 (association_id), INDEX IDX_D6F4D6FA21BD112 (personne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin_structure (id VARCHAR(255) NOT NULL, structure_id INT NOT NULL, personne_id INT NOT NULL, api_token VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_86F632D87BA2F5EB (api_token), INDEX IDX_86F632D82534008B (structure_id), INDEX IDX_86F632D8A21BD112 (personne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE association (id INT AUTO_INCREMENT NOT NULL, structure_id INT NOT NULL, nom_asso VARCHAR(255) NOT NULL, mail_asso VARCHAR(255) NOT NULL, tel_asso VARCHAR(15) NOT NULL, federation_asso VARCHAR(255) NOT NULL, comite_asso VARCHAR(255) DEFAULT NULL, adresse_asso LONGTEXT NOT NULL, INDEX IDX_FD8521CC2534008B (structure_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE association_intervenant (association_id INT NOT NULL, intervenant_id VARCHAR(255) NOT NULL, INDEX IDX_584485ACEFB9C8A5 (association_id), INDEX IDX_584485ACAB9A1716 (intervenant_id), PRIMARY KEY(association_id, intervenant_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE association_personne (association_id INT NOT NULL, personne_id INT NOT NULL, INDEX IDX_3903D189EFB9C8A5 (association_id), INDEX IDX_3903D189A21BD112 (personne_id), PRIMARY KEY(association_id, personne_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe (id INT AUTO_INCREMENT NOT NULL, association_id INT NOT NULL, nom_groupe VARCHAR(255) NOT NULL, id_respo_pers INT NOT NULL, INDEX IDX_4B98C21EFB9C8A5 (association_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe_intervenant (groupe_id INT NOT NULL, intervenant_id VARCHAR(255) NOT NULL, INDEX IDX_FC0D67927A45358C (groupe_id), INDEX IDX_FC0D6792AB9A1716 (intervenant_id), PRIMARY KEY(groupe_id, intervenant_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE intervenant (id VARCHAR(255) NOT NULL, personne_id INT NOT NULL, tel_inter VARCHAR(15) NOT NULL, adresse_inter LONGTEXT NOT NULL, api_token VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_73D0145C7BA2F5EB (api_token), UNIQUE INDEX UNIQ_73D0145CA21BD112 (personne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personne (id INT AUTO_INCREMENT NOT NULL, nom_pers VARCHAR(255) NOT NULL, prenom_pers VARCHAR(255) NOT NULL, mail_pers VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE structure (id INT AUTO_INCREMENT NOT NULL, nom_structure VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE structure_personne (structure_id INT NOT NULL, personne_id INT NOT NULL, INDEX IDX_5ECB6BA52534008B (structure_id), INDEX IDX_5ECB6BA5A21BD112 (personne_id), PRIMARY KEY(structure_id, personne_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE super_admin (id VARCHAR(255) NOT NULL, personne_id INT NOT NULL, api_token VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_BC8C27837BA2F5EB (api_token), UNIQUE INDEX UNIQ_BC8C2783A21BD112 (personne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE adherent ADD CONSTRAINT FK_90D3F060A21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE adherent_association ADD CONSTRAINT FK_7C1AEE2225F06C53 FOREIGN KEY (adherent_id) REFERENCES adherent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE adherent_association ADD CONSTRAINT FK_7C1AEE22EFB9C8A5 FOREIGN KEY (association_id) REFERENCES association (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE adherent_groupe ADD CONSTRAINT FK_10BBDA7325F06C53 FOREIGN KEY (adherent_id) REFERENCES adherent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE adherent_groupe ADD CONSTRAINT FK_10BBDA737A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE admin_asso ADD CONSTRAINT FK_D6F4D6FEFB9C8A5 FOREIGN KEY (association_id) REFERENCES association (id)');
        $this->addSql('ALTER TABLE admin_asso ADD CONSTRAINT FK_D6F4D6FA21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE admin_structure ADD CONSTRAINT FK_86F632D82534008B FOREIGN KEY (structure_id) REFERENCES structure (id)');
        $this->addSql('ALTER TABLE admin_structure ADD CONSTRAINT FK_86F632D8A21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE association ADD CONSTRAINT FK_FD8521CC2534008B FOREIGN KEY (structure_id) REFERENCES structure (id)');
        $this->addSql('ALTER TABLE association_intervenant ADD CONSTRAINT FK_584485ACEFB9C8A5 FOREIGN KEY (association_id) REFERENCES association (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE association_intervenant ADD CONSTRAINT FK_584485ACAB9A1716 FOREIGN KEY (intervenant_id) REFERENCES intervenant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE association_personne ADD CONSTRAINT FK_3903D189EFB9C8A5 FOREIGN KEY (association_id) REFERENCES association (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE association_personne ADD CONSTRAINT FK_3903D189A21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe ADD CONSTRAINT FK_4B98C21EFB9C8A5 FOREIGN KEY (association_id) REFERENCES association (id)');
        $this->addSql('ALTER TABLE groupe_intervenant ADD CONSTRAINT FK_FC0D67927A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_intervenant ADD CONSTRAINT FK_FC0D6792AB9A1716 FOREIGN KEY (intervenant_id) REFERENCES intervenant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE intervenant ADD CONSTRAINT FK_73D0145CA21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE structure_personne ADD CONSTRAINT FK_5ECB6BA52534008B FOREIGN KEY (structure_id) REFERENCES structure (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE structure_personne ADD CONSTRAINT FK_5ECB6BA5A21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE super_admin ADD CONSTRAINT FK_BC8C2783A21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE adherent_association DROP FOREIGN KEY FK_7C1AEE2225F06C53');
        $this->addSql('ALTER TABLE adherent_groupe DROP FOREIGN KEY FK_10BBDA7325F06C53');
        $this->addSql('ALTER TABLE adherent_association DROP FOREIGN KEY FK_7C1AEE22EFB9C8A5');
        $this->addSql('ALTER TABLE admin_asso DROP FOREIGN KEY FK_D6F4D6FEFB9C8A5');
        $this->addSql('ALTER TABLE association_intervenant DROP FOREIGN KEY FK_584485ACEFB9C8A5');
        $this->addSql('ALTER TABLE association_personne DROP FOREIGN KEY FK_3903D189EFB9C8A5');
        $this->addSql('ALTER TABLE groupe DROP FOREIGN KEY FK_4B98C21EFB9C8A5');
        $this->addSql('ALTER TABLE adherent_groupe DROP FOREIGN KEY FK_10BBDA737A45358C');
        $this->addSql('ALTER TABLE groupe_intervenant DROP FOREIGN KEY FK_FC0D67927A45358C');
        $this->addSql('ALTER TABLE association_intervenant DROP FOREIGN KEY FK_584485ACAB9A1716');
        $this->addSql('ALTER TABLE groupe_intervenant DROP FOREIGN KEY FK_FC0D6792AB9A1716');
        $this->addSql('ALTER TABLE adherent DROP FOREIGN KEY FK_90D3F060A21BD112');
        $this->addSql('ALTER TABLE admin_asso DROP FOREIGN KEY FK_D6F4D6FA21BD112');
        $this->addSql('ALTER TABLE admin_structure DROP FOREIGN KEY FK_86F632D8A21BD112');
        $this->addSql('ALTER TABLE association_personne DROP FOREIGN KEY FK_3903D189A21BD112');
        $this->addSql('ALTER TABLE intervenant DROP FOREIGN KEY FK_73D0145CA21BD112');
        $this->addSql('ALTER TABLE structure_personne DROP FOREIGN KEY FK_5ECB6BA5A21BD112');
        $this->addSql('ALTER TABLE super_admin DROP FOREIGN KEY FK_BC8C2783A21BD112');
        $this->addSql('ALTER TABLE admin_structure DROP FOREIGN KEY FK_86F632D82534008B');
        $this->addSql('ALTER TABLE association DROP FOREIGN KEY FK_FD8521CC2534008B');
        $this->addSql('ALTER TABLE structure_personne DROP FOREIGN KEY FK_5ECB6BA52534008B');
        $this->addSql('DROP TABLE adherent');
        $this->addSql('DROP TABLE adherent_association');
        $this->addSql('DROP TABLE adherent_groupe');
        $this->addSql('DROP TABLE admin_asso');
        $this->addSql('DROP TABLE admin_structure');
        $this->addSql('DROP TABLE association');
        $this->addSql('DROP TABLE association_intervenant');
        $this->addSql('DROP TABLE association_personne');
        $this->addSql('DROP TABLE groupe');
        $this->addSql('DROP TABLE groupe_intervenant');
        $this->addSql('DROP TABLE intervenant');
        $this->addSql('DROP TABLE personne');
        $this->addSql('DROP TABLE structure');
        $this->addSql('DROP TABLE structure_personne');
        $this->addSql('DROP TABLE super_admin');
    }
}
