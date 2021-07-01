<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210630154452 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ecart ADD sixain4 INT DEFAULT NULL, ADD sixain5 INT DEFAULT NULL, ADD sixain6 INT DEFAULT NULL, ADD sixain7 INT DEFAULT NULL, ADD sixain8 INT DEFAULT NULL, ADD sixain9 INT DEFAULT NULL, ADD sixain10 INT DEFAULT NULL, ADD sixain11 INT DEFAULT NULL, ADD sixain12 INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ecart DROP sixain4, DROP sixain5, DROP sixain6, DROP sixain7, DROP sixain8, DROP sixain9, DROP sixain10, DROP sixain11, DROP sixain12');
    }
}
