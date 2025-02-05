<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250204215720 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE teams (id INT AUTO_INCREMENT NOT NULL, tournament_id_id INT DEFAULT NULL, name VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_96C22258BE120E4E (tournament_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE teams_user (teams_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_67DE2A5FD6365F12 (teams_id), INDEX IDX_67DE2A5FA76ED395 (user_id), PRIMARY KEY(teams_id, user_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE teams ADD CONSTRAINT FK_96C22258BE120E4E FOREIGN KEY (tournament_id_id) REFERENCES tournaments (id)');
        $this->addSql('ALTER TABLE teams_user ADD CONSTRAINT FK_67DE2A5FD6365F12 FOREIGN KEY (teams_id) REFERENCES teams (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE teams_user ADD CONSTRAINT FK_67DE2A5FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE teams DROP FOREIGN KEY FK_96C22258BE120E4E');
        $this->addSql('ALTER TABLE teams_user DROP FOREIGN KEY FK_67DE2A5FD6365F12');
        $this->addSql('ALTER TABLE teams_user DROP FOREIGN KEY FK_67DE2A5FA76ED395');
        $this->addSql('DROP TABLE teams');
        $this->addSql('DROP TABLE teams_user');
    }
}
