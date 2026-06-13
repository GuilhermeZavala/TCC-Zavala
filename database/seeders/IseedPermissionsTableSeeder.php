<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IseedPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_profissionais',
                'table_name' => 'profissionais',
                'created_at' => '2026-05-30 19:44:28',
                'updated_at' => '2026-05-30 19:44:28',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_profissionais',
                'table_name' => 'profissionais',
                'created_at' => '2026-05-30 19:44:28',
                'updated_at' => '2026-05-30 19:44:28',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_profissionais',
                'table_name' => 'profissionais',
                'created_at' => '2026-05-30 19:44:28',
                'updated_at' => '2026-05-30 19:44:28',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_profissionais',
                'table_name' => 'profissionais',
                'created_at' => '2026-05-30 19:44:28',
                'updated_at' => '2026-05-30 19:44:28',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_profissionais',
                'table_name' => 'profissionais',
                'created_at' => '2026-05-30 19:44:28',
                'updated_at' => '2026-05-30 19:44:28',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'browse_certificacoes',
                'table_name' => 'certificacoes',
                'created_at' => '2026-06-06 20:02:40',
                'updated_at' => '2026-06-06 20:02:40',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'read_certificacoes',
                'table_name' => 'certificacoes',
                'created_at' => '2026-06-06 20:02:40',
                'updated_at' => '2026-06-06 20:02:40',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'edit_certificacoes',
                'table_name' => 'certificacoes',
                'created_at' => '2026-06-06 20:02:40',
                'updated_at' => '2026-06-06 20:02:40',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'add_certificacoes',
                'table_name' => 'certificacoes',
                'created_at' => '2026-06-06 20:02:40',
                'updated_at' => '2026-06-06 20:02:40',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'delete_certificacoes',
                'table_name' => 'certificacoes',
                'created_at' => '2026-06-06 20:02:40',
                'updated_at' => '2026-06-06 20:02:40',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'browse_especialidades',
                'table_name' => 'especialidades',
                'created_at' => '2026-06-13 20:09:14',
                'updated_at' => '2026-06-13 20:09:14',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'read_especialidades',
                'table_name' => 'especialidades',
                'created_at' => '2026-06-13 20:09:14',
                'updated_at' => '2026-06-13 20:09:14',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'edit_especialidades',
                'table_name' => 'especialidades',
                'created_at' => '2026-06-13 20:09:14',
                'updated_at' => '2026-06-13 20:09:14',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'add_especialidades',
                'table_name' => 'especialidades',
                'created_at' => '2026-06-13 20:09:14',
                'updated_at' => '2026-06-13 20:09:14',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'delete_especialidades',
                'table_name' => 'especialidades',
                'created_at' => '2026-06-13 20:09:14',
                'updated_at' => '2026-06-13 20:09:14',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'browse_estabelecimentos',
                'table_name' => 'estabelecimentos',
                'created_at' => '2026-06-13 20:12:05',
                'updated_at' => '2026-06-13 20:12:05',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'read_estabelecimentos',
                'table_name' => 'estabelecimentos',
                'created_at' => '2026-06-13 20:12:05',
                'updated_at' => '2026-06-13 20:12:05',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'edit_estabelecimentos',
                'table_name' => 'estabelecimentos',
                'created_at' => '2026-06-13 20:12:05',
                'updated_at' => '2026-06-13 20:12:05',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'add_estabelecimentos',
                'table_name' => 'estabelecimentos',
                'created_at' => '2026-06-13 20:12:05',
                'updated_at' => '2026-06-13 20:12:05',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'delete_estabelecimentos',
                'table_name' => 'estabelecimentos',
                'created_at' => '2026-06-13 20:12:05',
                'updated_at' => '2026-06-13 20:12:05',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'browse_servicos',
                'table_name' => 'servicos',
                'created_at' => '2026-06-13 20:19:30',
                'updated_at' => '2026-06-13 20:19:30',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'read_servicos',
                'table_name' => 'servicos',
                'created_at' => '2026-06-13 20:19:30',
                'updated_at' => '2026-06-13 20:19:30',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'edit_servicos',
                'table_name' => 'servicos',
                'created_at' => '2026-06-13 20:19:30',
                'updated_at' => '2026-06-13 20:19:30',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'add_servicos',
                'table_name' => 'servicos',
                'created_at' => '2026-06-13 20:19:30',
                'updated_at' => '2026-06-13 20:19:30',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'delete_servicos',
                'table_name' => 'servicos',
                'created_at' => '2026-06-13 20:19:30',
                'updated_at' => '2026-06-13 20:19:30',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'browse_servicos_oferecidos',
                'table_name' => 'servicos_oferecidos',
                'created_at' => '2026-06-13 20:22:41',
                'updated_at' => '2026-06-13 20:22:41',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'read_servicos_oferecidos',
                'table_name' => 'servicos_oferecidos',
                'created_at' => '2026-06-13 20:22:41',
                'updated_at' => '2026-06-13 20:22:41',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'edit_servicos_oferecidos',
                'table_name' => 'servicos_oferecidos',
                'created_at' => '2026-06-13 20:22:41',
                'updated_at' => '2026-06-13 20:22:41',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'add_servicos_oferecidos',
                'table_name' => 'servicos_oferecidos',
                'created_at' => '2026-06-13 20:22:41',
                'updated_at' => '2026-06-13 20:22:41',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'delete_servicos_oferecidos',
                'table_name' => 'servicos_oferecidos',
                'created_at' => '2026-06-13 20:22:41',
                'updated_at' => '2026-06-13 20:22:41',
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'browse_curriculo',
                'table_name' => 'curriculo',
                'created_at' => '2026-06-13 20:33:39',
                'updated_at' => '2026-06-13 20:33:39',
            ),
            71 => 
            array (
                'id' => 72,
                'key' => 'read_curriculo',
                'table_name' => 'curriculo',
                'created_at' => '2026-06-13 20:33:39',
                'updated_at' => '2026-06-13 20:33:39',
            ),
            72 => 
            array (
                'id' => 73,
                'key' => 'edit_curriculo',
                'table_name' => 'curriculo',
                'created_at' => '2026-06-13 20:33:39',
                'updated_at' => '2026-06-13 20:33:39',
            ),
            73 => 
            array (
                'id' => 74,
                'key' => 'add_curriculo',
                'table_name' => 'curriculo',
                'created_at' => '2026-06-13 20:33:39',
                'updated_at' => '2026-06-13 20:33:39',
            ),
            74 => 
            array (
                'id' => 75,
                'key' => 'delete_curriculo',
                'table_name' => 'curriculo',
                'created_at' => '2026-06-13 20:33:39',
                'updated_at' => '2026-06-13 20:33:39',
            ),
        ));
        
        
    }
}