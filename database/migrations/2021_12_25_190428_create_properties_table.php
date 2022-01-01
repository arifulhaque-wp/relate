<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'properties', function ( Blueprint $table ) {
            $table->id();
            $table->string( column:'name' );
            $table->string( column:'featured_image' );
            $table->unsignedBigInteger( column:'price' );
            $table->unsignedBigInteger( column:'sale' )->default( 1 )->comment( '0=rent, 1=sale' );
            $table->unsignedBigInteger( column:'type' )->default( 1 )->comment( '0=land, 1=villa, 2=apartment' );
            $table->string( column:'bedroom' )->nullable();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'properties' );
    }
}
