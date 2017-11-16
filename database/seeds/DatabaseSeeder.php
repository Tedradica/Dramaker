<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(UserscompanyTableSeeder::class);
        $this->call(UsersAddTableSeeder::class);
        $this->call(PositionTableSeeder::class);
        $this->call(ProductEmployeeTableSeeder::class);
        $this->call(CategoryEquipmentTableSeeder::class);
        $this->call(CategoryLocationTableSeeder::class);
        $this->call(CategoryProductTableSeeder::class);
        $this->call(ProductEquipmentTableSeeder::class);
        $this->call(RentalEquipmentTableSeeder::class);
        $this->call(TeamTableSeeder::class);
        $this->call(DramaTableSeeder::class);
        $this->call(DramaEmployeeTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(UploadFileTableSeeder::class);
        $this->call(ContestTableSeeder::class);
        $this->call(ContestApplyTableSeeder::class);
        $this->call(RecruitTableSeeder::class);
        $this->call(RecruitFieldTableSeeder::class);
        $this->call(RecruitApplyTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(ScriptTableSeeder::class);
        $this->call(CharacterTableSeeder::class);
        $this->call(SceneTableSeeder::class);
        $this->call(CharacterScriptTableSeeder::class);
        $this->call(JapanDataSeeder::class);

        // $this->call(CameraTableSeeder::class);

        // $this->call(DramaEmployeeTableSeeder::class);
        // $this->call(DramaEmployeeTableSeeder::class);
        // $this->call(DramaEmployeeTableSeeder::class);
        // $this->call(DramaEmployeeTableSeeder::class);
        // $this->call(DramaEmployeeTableSeeder::class);
        // $this->call(DramaEmployeeTableSeeder::class);
        // $this->call(DramaEmployeeTableSeeder::class);
    }

}
