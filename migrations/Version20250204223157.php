<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250204223157 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE matches (id INT AUTO_INCREMENT NOT NULL, team1_id INT DEFAULT NULL, team2_id INT DEFAULT NULL, tournament_id INT NOT NULL, winner_id INT DEFAULT NULL, score1 INT DEFAULT NULL, score2 INT DEFAULT NULL, match_date DATE NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_62615BAE72BCFA4 (team1_id), INDEX IDX_62615BAF59E604A (team2_id), INDEX IDX_62615BA33D1A3E7 (tournament_id), INDEX IDX_62615BA5DFCD4B8 (winner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE matches ADD CONSTRAINT FK_62615BAE72BCFA4 FOREIGN KEY (team1_id) REFERENCES teams (id)');
        $this->addSql('ALTER TABLE matches ADD CONSTRAINT FK_62615BAF59E604A FOREIGN KEY (team2_id) REFERENCES teams (id)');
        $this->addSql('ALTER TABLE matches ADD CONSTRAINT FK_62615BA33D1A3E7 FOREIGN KEY (tournament_id) REFERENCES tournaments (id)');
        $this->addSql('ALTER TABLE matches ADD CONSTRAINT FK_62615BA5DFCD4B8 FOREIGN KEY (winner_id) REFERENCES teams (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE matches DROP FOREIGN KEY FK_62615BAE72BCFA4');
        $this->addSql('ALTER TABLE matches DROP FOREIGN KEY FK_62615BAF59E604A');
        $this->addSql('ALTER TABLE matches DROP FOREIGN KEY FK_62615BA33D1A3E7');
        $this->addSql('ALTER TABLE matches DROP FOREIGN KEY FK_62615BA5DFCD4B8');
        $this->addSql('DROP TABLE matches');
    }
}
