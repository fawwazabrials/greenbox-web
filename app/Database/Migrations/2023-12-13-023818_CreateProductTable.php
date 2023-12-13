<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductTable extends Migration
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
            'name' => [
                'type' => 'TEXT',
            ],
            'price' => [
                'type' => 'INT',
            ],
            'stock' => [
                'type' => 'INT',
                'default' => 0
            ],
            'description' => [
                'type' => 'TEXT',
            ],
            'description_kandungan' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'description_petunjuk_penyimpanan' => [
                'type' => 'TEXT',
                'null' => true
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('product');
    }

    public function down()
    {
        $this->forge->dropTable('product');
    }
}
