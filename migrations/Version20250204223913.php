<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250204223913 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE results (id INT AUTO_INCREMENT NOT NULL, matchs_id INT DEFAULT NULL, winner_id INT DEFAULT NULL, team1_score INT NOT NULL, team2_score INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_9FA3E41488EB7468 (matchs_id), INDEX IDX_9FA3E4145DFCD4B8 (winner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE results ADD CONSTRAINT FK_9FA3E41488EB7468 FOREIGN KEY (matchs_id) REFERENCES matches (id)');
        $this->addSql('ALTER TABLE results ADD CONSTRAINT FK_9FA3E4145DFCD4B8 FOREIGN KEY (winner_id) REFERENCES teams (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE results DROP FOREIGN KEY FK_9FA3E41488EB7468');
        $this->addSql('ALTER TABLE results DROP FOREIGN KEY FK_9FA3E4145DFCD4B8');
        $this->addSql('DROP TABLE results');
    }
}
