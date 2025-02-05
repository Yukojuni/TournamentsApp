<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250204220604 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE teams_user DROP FOREIGN KEY FK_67DE2A5FD6365F12');
        $this->addSql('ALTER TABLE teams_user DROP FOREIGN KEY FK_67DE2A5FA76ED395');
        $this->addSql('DROP TABLE teams_user');
        $this->addSql('ALTER TABLE teams DROP FOREIGN KEY FK_96C22258BE120E4E');
        $this->addSql('DROP INDEX IDX_96C22258BE120E4E ON teams');
        $this->addSql('ALTER TABLE teams ADD tournament_id INT DEFAULT NULL, CHANGE tournament_id_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE teams ADD CONSTRAINT FK_96C22258A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE teams ADD CONSTRAINT FK_96C2225833D1A3E7 FOREIGN KEY (tournament_id) REFERENCES tournaments (id)');
        $this->addSql('CREATE INDEX IDX_96C22258A76ED395 ON teams (user_id)');
        $this->addSql('CREATE INDEX IDX_96C2225833D1A3E7 ON teams (tournament_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE teams_user (teams_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_67DE2A5FD6365F12 (teams_id), INDEX IDX_67DE2A5FA76ED395 (user_id), PRIMARY KEY(teams_id, user_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE teams_user ADD CONSTRAINT FK_67DE2A5FD6365F12 FOREIGN KEY (teams_id) REFERENCES teams (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE teams_user ADD CONSTRAINT FK_67DE2A5FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE teams DROP FOREIGN KEY FK_96C22258A76ED395');
        $this->addSql('ALTER TABLE teams DROP FOREIGN KEY FK_96C2225833D1A3E7');
        $this->addSql('DROP INDEX IDX_96C22258A76ED395 ON teams');
        $this->addSql('DROP INDEX IDX_96C2225833D1A3E7 ON teams');
        $this->addSql('ALTER TABLE teams ADD tournament_id_id INT DEFAULT NULL, DROP user_id, DROP tournament_id');
        $this->addSql('ALTER TABLE teams ADD CONSTRAINT FK_96C22258BE120E4E FOREIGN KEY (tournament_id_id) REFERENCES tournaments (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_96C22258BE120E4E ON teams (tournament_id_id)');
    }
}
