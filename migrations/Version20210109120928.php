<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210109120928 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post CHANGE created created DATETIME DEFAULT NULL, CHANGE updated updated DATETIME DEFAULT NULL, CHANGE post_status post_status ENUM(\'draft\', \'pending\', \'active\', \'inactive\', \'trashed\')');
        $this->addSql('ALTER TABLE user ADD gender ENUM(\'male\', \'female\', \'other\'), ADD status ENUM(\'pending\', \'active\', \'inactive\', \'trashed\'), CHANGE created created DATETIME DEFAULT NULL, CHANGE updated updated DATETIME DEFAULT NULL, CHANGE dob dob DATE DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post CHANGE post_status post_status VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE created created DATETIME NOT NULL, CHANGE updated updated DATETIME NOT NULL');
        $this->addSql('ALTER TABLE `user` DROP gender, DROP status, CHANGE created created DATETIME NOT NULL, CHANGE updated updated DATETIME NOT NULL, CHANGE dob dob DATE NOT NULL');
    }
}
