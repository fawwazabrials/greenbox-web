<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateProcurementTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'productId' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null'           => true,
            ],
            'procuredDate' => [
                'type' => 'DATETIME',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'procuredQuantity' => [
                'type' => 'INT'
            ],
            'monitorUrl' => [
                'type' => 'TEXT'
            ],
            'isCompleted' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('productId', 'product', 'id', 'CASCADE', 'NULL');
        $this->forge->createTable('procurement');
    }

    public function down()
    {
        $this->forge->dropTable('procurement');
    }
}
