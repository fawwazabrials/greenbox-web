<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateOrderTable extends Migration
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
            'customerName' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'orderDate' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'deliveryAddress' => [
                'type' => 'TEXT',
            ],
            'totalAmount' => [
                'type' => 'INT',
            ],
            'deliveryStatus' => [
                'type' => 'ENUM',
                'constraint' => ['COMPLETED', 'ONGOING']
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('order');
    }

    public function down()
    {
        $this->forge->dropTable('order');
    }
}
