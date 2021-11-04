<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->char('document_type',1);
            $table->bigInteger('document_id')->unique('clients_document_id_unique');
            $table->string('name',191)->nullable(false)
                ->default('V');
            $table->string('email',191);
            $table->string('phone',191);
            $table->timestamp('last_purchase');
            $table->unsignedInteger('total_purchases')->default(0);
            $table->decimal('total_paid')->nullable(false);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->decimal('balance',8,2);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
