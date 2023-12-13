<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrderItemTable extends Migration
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
            'orderId' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null'           => true,
            ],
            'productId' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null'           => true,
            ],
            'quantity' => [
                'type' => 'INT',
            ],
            'subtotal' => [
                'type' => 'INT',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('orderId', 'order', 'id', 'CASCADE', 'NULL');
        $this->forge->addForeignKey('productId', 'product', 'id', 'CASCADE', 'NULL');
        $this->forge->createTable('orderItem');
    }

    public function down()
    {
        $this->forge->dropTable('orderItem');
    }
}
