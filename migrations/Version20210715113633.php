<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210715113633 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ecart ADD carre1245 INT DEFAULT NULL, ADD carre2356 INT DEFAULT NULL, ADD carre781011 INT DEFAULT NULL, ADD carre891112 INT DEFAULT NULL, ADD carre13141617 INT DEFAULT NULL, ADD carre14151718 INT DEFAULT NULL, ADD carre19202223 INT DEFAULT NULL, ADD carre20212324 INT DEFAULT NULL, ADD carre25262829 INT DEFAULT NULL, ADD carre26272930 INT DEFAULT NULL, ADD carre31323435 INT DEFAULT NULL, ADD carre32333536 INT DEFAULT NULL, ADD red INT DEFAULT NULL, ADD black INT DEFAULT NULL, ADD even INT DEFAULT NULL, ADD odd INT DEFAULT NULL, ADD half1 INT DEFAULT NULL, ADD half2 INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ecart DROP carre1245, DROP carre2356, DROP carre781011, DROP carre891112, DROP carre13141617, DROP carre14151718, DROP carre19202223, DROP carre20212324, DROP carre25262829, DROP carre26272930, DROP carre31323435, DROP carre32333536, DROP red, DROP black, DROP even, DROP odd, DROP half1, DROP half2');
    }
}
