<?php

use Illuminate\Database\Seeder;

class ProductEquipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $equipment = [
          // ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'RED RAVEN FULL SET',	'sequence' => 1,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'CANON C300 FULL SET',	'sequence' => 1,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'CANON C300 FULL SET',	'sequence' => 2,	'equipment_status' => '고장'],
          // ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'CANON C300 FULL SET',	'sequence' => 3,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'SONY PXW-FS7 FULL SET',	'sequence' => 1,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'CANON C100 FULL SET',	'sequence' => 1,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'SONY NEX-FS700 FULL SET',	'sequence' => 1,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'SONY A7S II FULL SET',	'sequence' => 1,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'CANON 5D MK3 FULL SET',	'sequence' => 1,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'NIKON D810+줌렌즈 SET',	'sequence' => 1,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'GH4+LUMIX 줌렌즈 SET',	'sequence' => 1,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'TILTA FS7 케이지',	'sequence' => 1,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'MOTION7 5Dmark3 ZPDLWL',	'sequence' => 1,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 2,	'equipment_name' => 'HAN 지미짚',	'sequence' => 1,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 2,	'equipment_name' => 'HAN 지미짚',	'sequence' => 2,	'equipment_status' => '고장'],
          // ['production_no' => 71,	'category_no' => 2,	'equipment_name' => '자바라짚 + 로닌M',	'sequence' => 1,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 2,	'equipment_name' => 'POLECAM 폴캠',	'sequence' => 1,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 2,	'equipment_name' => 'KONOVA SUNJIB S700',	'sequence' => 1,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 2,	'equipment_name' => 'LIBEC 포타짚 JIB-50HD',	'sequence' => 1,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 5,	'equipment_name' => 'MANFROTTO 504',	'sequence' => 1,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 5,	'equipment_name' => 'MANFROTTO 504',	'sequence' => 2,	'equipment_status' => '사용 가능'],
          // ['production_no' => 71,	'category_no' => 5,	'equipment_name' => 'MANFROTTO 504',	'sequence' => 3,	'equipment_status' => '사용 가능'],

          ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'RED RAVEN FULL SET',	'sequence' => 1,	'equipment_status' => '使用 可能'],
          ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'CANON C300 FULL SET',	'sequence' => 1,	'equipment_status' => '使用 可能'],
          ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'CANON C300 FULL SET',	'sequence' => 2,	'equipment_status' => '故障'],
          ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'CANON C300 FULL SET',	'sequence' => 3,	'equipment_status' => '使用中'],
          ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'SONY PXW-FS7 FULL SET',	'sequence' => 1,	'equipment_status' => '使用中'],
          ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'CANON C100 FULL SET',	'sequence' => 1,	'equipment_status' => '使用中'],
          ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'SONY NEX-FS700 FULL SET',	'sequence' => 1,	'equipment_status' => '使用 可能'],
          ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'SONY A7S II FULL SET',	'sequence' => 1,	'equipment_status' => '使用 可能'],
          ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'CANON 5D MK3 FULL SET',	'sequence' => 1,	'equipment_status' => '使用中'],
          ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'NIKON D810+ズームレンズ SET',	'sequence' => 1,	'equipment_status' => '使用 可能'],
          ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'GH4+LUMIX ズームレンズ SET',	'sequence' => 1,	'equipment_status' => '使用 可能'],
          ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'TILTA FS7 CAGE',	'sequence' => 1,	'equipment_status' => '使用 可能'],
          ['production_no' => 71,	'category_no' => 1,	'equipment_name' => 'MOTION7 5Dmark3 ZPDLWL',	'sequence' => 1,	'equipment_status' => '使用中'],
          ['production_no' => 71,	'category_no' => 2,	'equipment_name' => 'HAN ジミジプ',	'sequence' => 1,	'equipment_status' => '使用 可能'],
          ['production_no' => 71,	'category_no' => 2,	'equipment_name' => 'HAN ジミジプ',	'sequence' => 2,	'equipment_status' => '故障'],
          ['production_no' => 71,	'category_no' => 2,	'equipment_name' => 'ジミジプ + M',	'sequence' => 1,	'equipment_status' => '使用 可能'],
          ['production_no' => 71,	'category_no' => 2,	'equipment_name' => 'POLECAM ',	'sequence' => 1,	'equipment_status' => '使用 可能'],
          ['production_no' => 71,	'category_no' => 2,	'equipment_name' => 'KONOVA SUNJIB S700',	'sequence' => 1,	'equipment_status' => '使用 可能'],
          ['production_no' => 71,	'category_no' => 2,	'equipment_name' => 'LIBEC JIB-50HD',	'sequence' => 1,	'equipment_status' => '使用中'],
          ['production_no' => 71,	'category_no' => 5,	'equipment_name' => 'MANFROTTO 504',	'sequence' => 1,	'equipment_status' => '使用中'],
          ['production_no' => 71,	'category_no' => 5,	'equipment_name' => 'MANFROTTO 504',	'sequence' => 2,	'equipment_status' => '使用中'],
          ['production_no' => 71,	'category_no' => 5,	'equipment_name' => 'MANFROTTO 504',	'sequence' => 3,	'equipment_status' => '使用中'],

        ];

        DB::table('production_equipments')->insert($equipment);
    }
}
