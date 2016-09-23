<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cache extends Model
{
    //
    public function up()
    {
        Schema::create('caches', function(Bluesprint $table) {
            $table->string('key')->unique();
            $table->text('value');
            $table->integer('expiration');
        });
    }
}
