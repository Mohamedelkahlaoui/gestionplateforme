<?php
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
        Schema::dropIfExists('projets');
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('anneeprog');
            $table->string('reference');
            $table->string('intitule');
            $table->string('couttotal');
            $table->string('partIndh');
            $table->string('delaireal');
            $table->unsignedBigInteger('provs_id');
            $table->unsignedBigInteger('comm_id');
            $table->unsignedBigInteger('part_id');
            // foreignkey de provinces
            $table->foreign('provs_id')->references('id')->on('provinces');
           // $table->foreignId('provs_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            // foreignkey de communes
            $table->foreign('comm_id')->references('id')->on('communes');
            //$table->foreignId('comm_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            // foreignkey de partenaires
            $table->foreign('part_id')->references('id')->on('partenaires');
           // $table->foreignId('part_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};



class ChangeDbCharset extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $charset = "utf8mb4";
        $collate = $charset."_unicode_ci";
        $dbName = Config::get('database.connections.'.Config::get('database.default').'.database');
        $query = "ALTER SCHEMA $dbName DEFAULT CHARACTER SET $charset DEFAULT COLLATE $collate;\n"; 
        DB::connection()->getPdo()->exec($query);

        $dbName = Config::get('database.connections.'.Config::get('database.default').'.database');
        $result = DB::select(DB::raw('show tables'));
        $test = DB::select(DB::raw("select * from INFORMATION_SCHEMA.COLUMNS where DATA_TYPE = 'varchar' AND TABLE_SCHEMA = '$dbName';"));
        //var_dump($test);
        foreach($test as $t)
        {
            $query = "ALTER TABLE $t->TABLE_NAME CHANGE $t->COLUMN_NAME $t->COLUMN_NAME VARCHAR(191) CHARACTER SET $charset COLLATE $collate; \n";
            echo $query;
            DB::connection()->getPdo()->exec($query);
        }
        $test = DB::select(DB::raw("select * from INFORMATION_SCHEMA.COLUMNS where DATA_TYPE = 'text' AND TABLE_SCHEMA = '$dbName';"));
        foreach($test as $t)
        {
            $query = "ALTER TABLE $t->TABLE_NAME CHANGE $t->COLUMN_NAME $t->COLUMN_NAME TEXT CHARACTER SET $charset COLLATE $collate; \n";
            echo $query;
            DB::connection()->getPdo()->exec($query);
        }


        $result = DB::select(DB::raw('show tables'));
        foreach($result as $r)
        {
            foreach($r as $k => $t)
            {
                $query = "ALTER TABLE `$t` CONVERT TO CHARACTER SET $charset COLLATE $collate; \n";
                echo $query;
                DB::connection()->getPdo()->exec($query);
            }
        }
        echo "DB CHARSET set to $charset , $collate";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $charset = "utf8";
        $collate = $charset."_unicode_ci";
        $dbName = Config::get('database.connections.'.Config::get('database.default').'.database');
        $query = "ALTER SCHEMA $dbName DEFAULT CHARACTER SET $charset DEFAULT COLLATE $collate;\n"; 
        DB::connection()->getPdo()->exec($query);

        $dbName = Config::get('database.connections.'.Config::get('database.default').'.database');
        $result = DB::select(DB::raw('show tables'));
        $test = DB::select(DB::raw("select * from INFORMATION_SCHEMA.COLUMNS where DATA_TYPE = 'varchar' AND TABLE_SCHEMA = '$dbName';"));
        //var_dump($test);
        foreach($test as $t)
        {
            $query = "ALTER TABLE $t->TABLE_NAME CHANGE $t->COLUMN_NAME $t->COLUMN_NAME VARCHAR(255) CHARACTER SET $charset COLLATE $collate; \n";
            echo $query;
            DB::connection()->getPdo()->exec($query);
        }
        $test = DB::select(DB::raw("select * from INFORMATION_SCHEMA.COLUMNS where DATA_TYPE = 'text' AND TABLE_SCHEMA = '$dbName';"));
        foreach($test as $t)
        {
            $query = "ALTER TABLE $t->TABLE_NAME CHANGE $t->COLUMN_NAME $t->COLUMN_NAME TEXT CHARACTER SET $charset COLLATE $collate; \n";
            echo $query;
            DB::connection()->getPdo()->exec($query);
        }


        $result = DB::select(DB::raw('show tables'));
        foreach($result as $r)
        {
            foreach($r as $k => $t)
            {
                $query = "ALTER TABLE `$t` CONVERT TO CHARACTER SET $charset COLLATE $collate; \n";
                echo $query;
                DB::connection()->getPdo()->exec($query);
            }
        }
        echo "DB CHARSET set to $charset , $collate";
    }
}