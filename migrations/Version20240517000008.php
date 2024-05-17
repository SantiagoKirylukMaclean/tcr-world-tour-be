<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240517000008 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE circuit (id_circuit VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, longitude_in_meters SMALLINT NOT NULL, PRIMARY KEY(id_circuit)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE driver (id_driver VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, is_dnf TINYINT(1) NOT NULL, PRIMARY KEY(id_driver)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE race (id_race VARCHAR(255) NOT NULL, id_circuit VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, date DATETIME NOT NULL, INDEX IDX_DA6FBBAFCDB85AD6 (id_circuit), PRIMARY KEY(id_race)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE result (id_result VARCHAR(255) NOT NULL, id_race VARCHAR(255) NOT NULL, id_driver VARCHAR(255) NOT NULL, type_session VARCHAR(50) NOT NULL, position INT NOT NULL, points INT NOT NULL, INDEX IDX_136AC113514FA7AD (id_race), INDEX IDX_136AC1133751C934 (id_driver), PRIMARY KEY(id_result)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE team (id_team VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, logo VARCHAR(255) NOT NULL, colors JSON NOT NULL, PRIMARY KEY(id_team)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE race ADD CONSTRAINT FK_DA6FBBAFCDB85AD6 FOREIGN KEY (id_circuit) REFERENCES circuit (id_circuit) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE result ADD CONSTRAINT FK_136AC113514FA7AD FOREIGN KEY (id_race) REFERENCES race (id_race) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE result ADD CONSTRAINT FK_136AC1133751C934 FOREIGN KEY (id_driver) REFERENCES driver (id_driver) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE race DROP FOREIGN KEY FK_DA6FBBAFCDB85AD6');
        $this->addSql('ALTER TABLE result DROP FOREIGN KEY FK_136AC113514FA7AD');
        $this->addSql('ALTER TABLE result DROP FOREIGN KEY FK_136AC1133751C934');
        $this->addSql('DROP TABLE circuit');
        $this->addSql('DROP TABLE driver');
        $this->addSql('DROP TABLE race');
        $this->addSql('DROP TABLE result');
        $this->addSql('DROP TABLE team');
    }
}
