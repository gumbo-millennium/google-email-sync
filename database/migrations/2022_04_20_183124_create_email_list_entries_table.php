<?php

declare(strict_types=1);

use Gumbo\EmailSync\Enums\Role;
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
        Schema::create('email_list_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('list_id')->constrained('email_lists');

            $table->string('email');
            $table->string('role', 20)->nullable()->default(Role::Member->value);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email_list_entries');
    }
};
