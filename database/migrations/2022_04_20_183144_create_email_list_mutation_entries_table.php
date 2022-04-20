<?php

declare(strict_types=1);

use Gumbo\EmailSync\Enums\ChangeType;
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
        Schema::create('email_list_mutation_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mutation_id')->constrained('email_list_mutations')->cascadeOnDelete();

            $table->morphs('subject');

            $table->string('change', 20)->default(ChangeType::Unknown->value);
            $table->string('description')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email_list_mutation_entries');
    }
};
