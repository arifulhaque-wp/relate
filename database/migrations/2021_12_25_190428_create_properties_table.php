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
            
            $table->unsignedBigInteger( column:'featured_media_id' );
            $table->unsignedBigInteger( column:'location_id' );

            $table->unsignedBigInteger( column:'price' );
            $table->unsignedBigInteger( column:'sale' )->default( 1 )->comment( '0=rent, 1=sale' );
            $table->unsignedBigInteger( column:'type' )->default( 1 )->comment( '0=land, 1=villa, 2=apartment' );

            $table->unsignedBigInteger( column:'bedrooms' )->nullable();
            $table->unsignedBigInteger( column:'bathrooms' )->nullable();
            $table->unsignedBigInteger( column:'net_sqm' )->nullable();
            $table->unsignedBigInteger( column:'gross_sqm' )->nullable();
            $table->unsignedBigInteger( column:'pool' )->nullable()->comment('0=no,1=public, 2=private, 3=both');

            $table->string('overview');
            $table->longText('why_buy')->nullable();
            $table->longText('description');

            $table->timestamps();

            $table->foreign( 'featured_media_id' )->references( 'id' )->on( 'media' );
            $table->foreign( 'location_id' )->references( 'id' )->on( 'locations' );
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
