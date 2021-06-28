<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210628195320 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE answer (id INT AUTO_INCREMENT NOT NULL, answer VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE choice (id INT AUTO_INCREMENT NOT NULL, question_id INT NOT NULL, choice1 VARCHAR(255) DEFAULT NULL, choice2 VARCHAR(255) DEFAULT NULL, choice3 VARCHAR(255) DEFAULT NULL, choice4 VARCHAR(255) DEFAULT NULL, INDEX IDX_C1AB5A921E27F6BF (question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, answer_id INT NOT NULL, content VARCHAR(255) NOT NULL, INDEX IDX_B6F7494EAA334807 (answer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE result_matching (id INT AUTO_INCREMENT NOT NULL, is_match TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, answer_id INT NOT NULL, result_matching_id INT NOT NULL, avatar VARCHAR(255) NOT NULL, pseudo VARCHAR(255) NOT NULL, job VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, rating INT DEFAULT NULL, description LONGTEXT NOT NULL, INDEX IDX_8D93D649AA334807 (answer_id), INDEX IDX_8D93D649A50CE2F7 (result_matching_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE choice ADD CONSTRAINT FK_C1AB5A921E27F6BF FOREIGN KEY (question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494EAA334807 FOREIGN KEY (answer_id) REFERENCES answer (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649AA334807 FOREIGN KEY (answer_id) REFERENCES answer (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649A50CE2F7 FOREIGN KEY (result_matching_id) REFERENCES result_matching (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494EAA334807');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649AA334807');
        $this->addSql('ALTER TABLE choice DROP FOREIGN KEY FK_C1AB5A921E27F6BF');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649A50CE2F7');
        $this->addSql('DROP TABLE answer');
        $this->addSql('DROP TABLE choice');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE result_matching');
        $this->addSql('DROP TABLE user');
    }
}
