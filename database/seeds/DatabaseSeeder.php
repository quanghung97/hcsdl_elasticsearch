sudo <?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(chuyen_gia_Seeder::class);
    }
}
class chuyen_gia_Seeder extends Seeder
{
  public function run()
  {
    $items = array("TS", "Ths", "PGS.TS", "CN", "GS.TS", "PGS", "GS", "KS");
    $faker = Faker::create();
    	foreach (range(1,1000000) as $index) {
	        DB::table('chuyen_gia_khcn')->insert(
            [
	            'ho_va_ten' => $faker->name,
	            'hoc_vi' => $items[array_rand($items)],
	            'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
              'chuyen_nganh' => $faker->jobTitle,
              'co_quan' => $faker->company,
              'dia_chi_co_quan' => $faker->address,
              'huong_nghien_cuu' =>$faker->bs,
              'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
              'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
              'tinh_thanh' => $faker->city
	        ],
          [
	            'ho_va_ten' => $faker->name,
	            'hoc_vi' => $items[array_rand($items)],
	            'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
              'chuyen_nganh' => $faker->jobTitle,
              'co_quan' => $faker->company,
              'dia_chi_co_quan' => $faker->address,
              'huong_nghien_cuu' =>$faker->bs,
              'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
              'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
              'tinh_thanh' => $faker->city
	        ],
          [
            'ho_va_ten' => $faker->name,
            'hoc_vi' => $items[array_rand($items)],
            'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'chuyen_nganh' => $faker->jobTitle,
            'co_quan' => $faker->company,
            'dia_chi_co_quan' => $faker->address,
            'huong_nghien_cuu' =>$faker->bs,
            'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
            'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
            'tinh_thanh' => $faker->city
        ],
        [
            'ho_va_ten' => $faker->name,
            'hoc_vi' => $items[array_rand($items)],
            'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'chuyen_nganh' => $faker->jobTitle,
            'co_quan' => $faker->company,
            'dia_chi_co_quan' => $faker->address,
            'huong_nghien_cuu' =>$faker->bs,
            'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
            'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
            'tinh_thanh' => $faker->city
        ],
        [
          'ho_va_ten' => $faker->name,
          'hoc_vi' => $items[array_rand($items)],
          'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
          'chuyen_nganh' => $faker->jobTitle,
          'co_quan' => $faker->company,
          'dia_chi_co_quan' => $faker->address,
          'huong_nghien_cuu' =>$faker->bs,
          'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
          'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
          'tinh_thanh' => $faker->city
      ],
      [
          'ho_va_ten' => $faker->name,
          'hoc_vi' => $items[array_rand($items)],
          'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
          'chuyen_nganh' => $faker->jobTitle,
          'co_quan' => $faker->company,
          'dia_chi_co_quan' => $faker->address,
          'huong_nghien_cuu' =>$faker->bs,
          'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
          'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
          'tinh_thanh' => $faker->city
      ],
      [
        'ho_va_ten' => $faker->name,
        'hoc_vi' => $items[array_rand($items)],
        'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'chuyen_nganh' => $faker->jobTitle,
        'co_quan' => $faker->company,
        'dia_chi_co_quan' => $faker->address,
        'huong_nghien_cuu' =>$faker->bs,
        'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
        'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
        'tinh_thanh' => $faker->city
    ],
    [
        'ho_va_ten' => $faker->name,
        'hoc_vi' => $items[array_rand($items)],
        'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'chuyen_nganh' => $faker->jobTitle,
        'co_quan' => $faker->company,
        'dia_chi_co_quan' => $faker->address,
        'huong_nghien_cuu' =>$faker->bs,
        'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
        'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
        'tinh_thanh' => $faker->city
    ],
    [
      'ho_va_ten' => $faker->name,
      'hoc_vi' => $items[array_rand($items)],
      'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
      'chuyen_nganh' => $faker->jobTitle,
      'co_quan' => $faker->company,
      'dia_chi_co_quan' => $faker->address,
      'huong_nghien_cuu' =>$faker->bs,
      'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
      'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
      'tinh_thanh' => $faker->city
  ],
  [
      'ho_va_ten' => $faker->name,
      'hoc_vi' => $items[array_rand($items)],
      'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
      'chuyen_nganh' => $faker->jobTitle,
      'co_quan' => $faker->company,
      'dia_chi_co_quan' => $faker->address,
      'huong_nghien_cuu' =>$faker->bs,
      'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
      'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
      'tinh_thanh' => $faker->city
  ],
  [
    'ho_va_ten' => $faker->name,
    'hoc_vi' => $items[array_rand($items)],
    'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
    'chuyen_nganh' => $faker->jobTitle,
    'co_quan' => $faker->company,
    'dia_chi_co_quan' => $faker->address,
    'huong_nghien_cuu' =>$faker->bs,
    'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
    'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
    'tinh_thanh' => $faker->city
],
[
    'ho_va_ten' => $faker->name,
    'hoc_vi' => $items[array_rand($items)],
    'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
    'chuyen_nganh' => $faker->jobTitle,
    'co_quan' => $faker->company,
    'dia_chi_co_quan' => $faker->address,
    'huong_nghien_cuu' =>$faker->bs,
    'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
    'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
    'tinh_thanh' => $faker->city
],
[
  'ho_va_ten' => $faker->name,
  'hoc_vi' => $items[array_rand($items)],
  'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
  'chuyen_nganh' => $faker->jobTitle,
  'co_quan' => $faker->company,
  'dia_chi_co_quan' => $faker->address,
  'huong_nghien_cuu' =>$faker->bs,
  'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
  'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
  'tinh_thanh' => $faker->city
],
[
  'ho_va_ten' => $faker->name,
  'hoc_vi' => $items[array_rand($items)],
  'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
  'chuyen_nganh' => $faker->jobTitle,
  'co_quan' => $faker->company,
  'dia_chi_co_quan' => $faker->address,
  'huong_nghien_cuu' =>$faker->bs,
  'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
  'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
  'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
  'ho_va_ten' => $faker->name,
  'hoc_vi' => $items[array_rand($items)],
  'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
  'chuyen_nganh' => $faker->jobTitle,
  'co_quan' => $faker->company,
  'dia_chi_co_quan' => $faker->address,
  'huong_nghien_cuu' =>$faker->bs,
  'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
  'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
  'tinh_thanh' => $faker->city
],
[
  'ho_va_ten' => $faker->name,
  'hoc_vi' => $items[array_rand($items)],
  'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
  'chuyen_nganh' => $faker->jobTitle,
  'co_quan' => $faker->company,
  'dia_chi_co_quan' => $faker->address,
  'huong_nghien_cuu' =>$faker->bs,
  'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
  'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
  'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
  'ho_va_ten' => $faker->name,
  'hoc_vi' => $items[array_rand($items)],
  'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
  'chuyen_nganh' => $faker->jobTitle,
  'co_quan' => $faker->company,
  'dia_chi_co_quan' => $faker->address,
  'huong_nghien_cuu' =>$faker->bs,
  'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
  'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
  'tinh_thanh' => $faker->city
],
[
  'ho_va_ten' => $faker->name,
  'hoc_vi' => $items[array_rand($items)],
  'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
  'chuyen_nganh' => $faker->jobTitle,
  'co_quan' => $faker->company,
  'dia_chi_co_quan' => $faker->address,
  'huong_nghien_cuu' =>$faker->bs,
  'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
  'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
  'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
  'ho_va_ten' => $faker->name,
  'hoc_vi' => $items[array_rand($items)],
  'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
  'chuyen_nganh' => $faker->jobTitle,
  'co_quan' => $faker->company,
  'dia_chi_co_quan' => $faker->address,
  'huong_nghien_cuu' =>$faker->bs,
  'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
  'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
  'tinh_thanh' => $faker->city
],
[
  'ho_va_ten' => $faker->name,
  'hoc_vi' => $items[array_rand($items)],
  'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
  'chuyen_nganh' => $faker->jobTitle,
  'co_quan' => $faker->company,
  'dia_chi_co_quan' => $faker->address,
  'huong_nghien_cuu' =>$faker->bs,
  'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
  'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
  'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
],
[
'ho_va_ten' => $faker->name,
'hoc_vi' => $items[array_rand($items)],
'nam_sinh' => $faker->date($format = 'Y-m-d', $max = 'now'),
'chuyen_nganh' => $faker->jobTitle,
'co_quan' => $faker->company,
'dia_chi_co_quan' => $faker->address,
'huong_nghien_cuu' =>$faker->bs,
'link_anh' => '/storage/app/public/media/profile_khcn/default.jpg',
'Sl_congTrinh_baiBao' => $faker->numberBetween($min = 1, $max = 80),
'tinh_thanh' => $faker->city
]

        );
	    }
  }
}
