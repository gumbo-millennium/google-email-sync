<?php

declare(strict_types=1);

use Gumbo\EmailSync\Enums\ChangeDirection;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_list_mutations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('list_id')->constrained('email_lists');
            $table->string('direction', 10)->default(ChangeDirection::Up->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email_list_mutations');
    }
};
