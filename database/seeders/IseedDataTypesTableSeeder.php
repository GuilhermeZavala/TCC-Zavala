<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IseedDataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'profissionais',
                'slug' => 'profissionais',
                'display_name_singular' => 'Profissional',
                'display_name_plural' => 'Profissionais',
                'icon' => 'voyager-person',
                'model_name' => 'App\\Models\\Profissional',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\VoyagerController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2026-05-30 19:44:25',
                'updated_at' => '2026-05-30 20:29:22',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'certificacoes',
                'slug' => 'certificacoes',
                'display_name_singular' => 'Certificação',
                'display_name_plural' => 'Certificações',
                'icon' => 'voyager-certificate',
                'model_name' => 'App\\Models\\Certificacao',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\VoyagerController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2026-06-06 20:02:39',
                'updated_at' => '2026-06-06 20:04:16',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'especialidades',
                'slug' => 'especialidades',
                'display_name_singular' => 'Especialidade',
                'display_name_plural' => 'Especialidades',
                'icon' => 'voyager-barbell',
                'model_name' => 'App\\Models\\Especialidade',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\VoyagerController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2026-06-13 20:09:14',
                'updated_at' => '2026-06-13 20:09:14',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'estabelecimentos',
                'slug' => 'estabelecimentos',
                'display_name_singular' => 'Estabelecimento',
                'display_name_plural' => 'Estabelecimentos',
                'icon' => 'voyager-home',
                'model_name' => 'App\\Models\\Estabelecimento',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\VoyagerController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2026-06-13 20:12:04',
                'updated_at' => '2026-06-13 20:12:04',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'servicos',
                'slug' => 'servicos',
                'display_name_singular' => 'Serviço',
                'display_name_plural' => 'Serviços',
                'icon' => 'voyager-shop',
                'model_name' => 'App\\Models\\Servico',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\VoyagerController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2026-06-13 20:19:30',
                'updated_at' => '2026-06-13 20:19:30',
            ),
            11 => 
            array (
                'id' => 14,
                'name' => 'servicos_oferecidos',
                'slug' => 'servicos-oferecidos',
                'display_name_singular' => 'Serviço Oferecido',
                'display_name_plural' => 'Serviços Oferecidos',
                'icon' => 'voyager-shop',
                'model_name' => 'App\\Models\\ServicoOferecido',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\VoyagerController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2026-06-13 20:22:41',
                'updated_at' => '2026-06-13 20:30:13',
            ),
            12 => 
            array (
                'id' => 15,
                'name' => 'curriculo',
                'slug' => 'curriculo',
                'display_name_singular' => 'Curriculo',
                'display_name_plural' => 'Curriculos',
                'icon' => 'voyager-certificate',
                'model_name' => 'App\\Models\\Curriculo',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\VoyagerController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2026-06-13 20:33:39',
                'updated_at' => '2026-06-13 20:33:39',
            ),
        ));
        
        
    }
}