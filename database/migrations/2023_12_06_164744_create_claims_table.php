<?php

use App\Models\Prize;
use App\Models\Ticket;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Prize::class);
            $table->foreignIdFor(Ticket::class);
            $table->string('status')->default('active');
            $table->text('comment')->nullable();
            $table->timestamps();

            /* 
            Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience. 
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            can be written as:
            $table->foreignId('user_id')->constrained(); 

            The foreignId method creates an UNSIGNED BIGINT equivalent column, while the constrained method will use conventions to determine the table and column being referenced. If your table name does not match Laravel's conventions, you may manually provide it to the constrained method. In addition, the name that should be assigned to the generated index may be specified as well:
            
            Schema::table('posts', function (Blueprint $table) {
                $table->foreignId('user_id')->constrained(
                    table: 'users', indexName: 'posts_user_id'
                );
            });

            You may also specify the desired action for the "on delete" and "on update" properties of the constraint:
            
            An alternative, expressive syntax is also provided for these actions:
            
            $table->cascadeOnUpdate();	Updates should cascade.
            $table->restrictOnUpdate();	Updates should be restricted.
            $table->cascadeOnDelete();	Deletes should cascade.
            $table->restrictOnDelete();	Deletes should be restricted.
            $table->nullOnDelete();	Deletes should set the foreign key value to null.

            Any additional column modifiers must be called before the constrained method:
            
            $table->foreignId('user_id')
                ->nullable()
                ->constrained();

            
            Dropping Foreign Keys
                To drop a foreign key, you may use the dropForeign method, passing the name of the foreign key constraint to be deleted as an argument. Foreign key constraints use the same naming convention as indexes. In other words, the foreign key constraint name is based on the name of the table and the columns in the constraint, followed by a "_foreign" suffix:
            
            $table->dropForeign('posts_user_id_foreign');

            Alternatively, you may pass an array containing the column name that holds the foreign key to the dropForeign method. The array will be converted to a foreign key constraint name using Laravel's constraint naming conventions:

            $table->dropForeign(['user_id']);

            Toggling Foreign Key Constraints
            You may enable or disable foreign key constraints within your migrations by using the following methods:

            Schema::enableForeignKeyConstraints();
            
            Schema::disableForeignKeyConstraints();
            
            Schema::withoutForeignKeyConstraints(function () {
                // Constraints disabled within this closure...
            });

            SQLite disables foreign key constraints by default. When using SQLite, make sure to enable foreign key support in your database configuration before attempting to create them in your migrations. In addition, SQLite only supports foreign keys upon creation of the table and not when tables are altered.
            


            
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('claims');
    }
};
