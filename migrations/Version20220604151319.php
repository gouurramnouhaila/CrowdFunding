<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220604151319 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project ADD project_holder_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EECFD22707 FOREIGN KEY (project_holder_id) REFERENCES project_holder (id)');
        $this->addSql('CREATE INDEX IDX_2FB3D0EECFD22707 ON project (project_holder_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EECFD22707');
        $this->addSql('DROP INDEX IDX_2FB3D0EECFD22707 ON project');
        $this->addSql('ALTER TABLE project DROP project_holder_id');
    }
}