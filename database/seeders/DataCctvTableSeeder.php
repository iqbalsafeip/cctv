<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataCctvTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_cctv')->delete();
        
        \DB::table('data_cctv')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_cctv' => 'Jl. Otista',
                'lokasi' => 'https://www.google.com/maps/@-7.192677,107.8865857,3a,63.5y,3.89h,76.83t/data=!3m6!1e1!3m4!1sUb3-d0tp3k1jHDWwgnK26A!2e0!7i16384!8i8192!5m1!1e4?hl=id',
                'link' => 'http://cctv.garutkab.go.id/5JR9Hb1SqnoyyQFjK5l853Er9hCPhC/mp4/diskominfo/NtEJXWNFRf/s.mp4',
                'created_at' => '2021-08-27 01:27:16',
                'updated_at' => '2021-12-14 01:16:09',
            ),
            1 => 
            array (
                'id' => 2,
                'nama_cctv' => 'Jl. Ahmad Yani',
                'lokasi' => 'https://www.google.com/maps/@-7.215805,107.9047742,3a,90y,64.83h,83.73t/data=!3m6!1e1!3m4!1sOgxEvejuhyQ8Tscha91S5Q!2e0!7i16384!8i8192!5m1!1e4?hl=id',
                'link' => 'http://cctv.garutkab.go.id/5JR9Hb1SqnoyyQFjK5l853Er9hCPhC/mp4/diskominfo/oWgoX5ovZ9/s.mp4',
                'created_at' => '2021-08-27 01:27:31',
                'updated_at' => '2021-12-14 01:15:33',
            ),
            2 => 
            array (
                'id' => 3,
                'nama_cctv' => 'Pertigaan Samarang',
                'lokasi' => 'https://www.google.com/maps/@-7.2009366,107.898238,3a,90y,168.4h,88.71t/data=!3m6!1e1!3m4!1sTVRK_L5HcJsYyrUVXXNrmA!2e0!7i16384!8i8192!5m1!1e4?hl=id',
                'link' => 'http://cctv.garutkab.go.id/5JR9Hb1SqnoyyQFjK5l853Er9hCPhC/mp4/diskominfo/gwp96RnVn0/s.mp4',
                'created_at' => '2021-08-27 01:27:44',
                'updated_at' => '2021-12-14 01:16:23',
            ),
            3 => 
            array (
                'id' => 4,
                'nama_cctv' => 'CCTV 4',
                'lokasi' => 'Lokasi 4',
                'link' => 'http://cctv.garutkab.go.id/5JR9Hb1SqnoyyQFjK5l853Er9hCPhC/mp4/diskominfo/e6IPXzsze9/s.mp4',
                'created_at' => '2021-08-27 01:27:55',
                'updated_at' => '2021-08-27 01:27:55',
            ),
        ));
        
        
    }
}