<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210629092819 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494EAA334807');
        $this->addSql('DROP INDEX IDX_B6F7494EAA334807 ON question');
        $this->addSql('ALTER TABLE question DROP answer_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649AA334807');
        $this->addSql('DROP INDEX IDX_8D93D649AA334807 ON user');
        $this->addSql('ALTER TABLE user ADD has_answered TINYINT(1) NOT NULL, DROP answer_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE question ADD answer_id INT NOT NULL');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494EAA334807 FOREIGN KEY (answer_id) REFERENCES answer (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_B6F7494EAA334807 ON question (answer_id)');
        $this->addSql('ALTER TABLE user ADD answer_id INT NOT NULL, DROP has_answered');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649AA334807 FOREIGN KEY (answer_id) REFERENCES answer (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_8D93D649AA334807 ON user (answer_id)');
    }
}
