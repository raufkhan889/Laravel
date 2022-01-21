<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
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
                'created_at' => '2021-11-27 10:31:26',
                'updated_at' => '2021-11-27 10:31:26',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-11-27 10:31:26',
                'updated_at' => '2021-11-27 10:31:26',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-11-27 10:31:26',
                'updated_at' => '2021-11-27 10:31:26',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-11-27 10:31:26',
                'updated_at' => '2021-11-27 10:31:26',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-11-27 10:31:26',
                'updated_at' => '2021-11-27 10:31:26',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-11-27 10:31:26',
                'updated_at' => '2021-11-27 10:31:26',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-11-27 10:31:26',
                'updated_at' => '2021-11-27 10:31:26',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-11-27 10:31:26',
                'updated_at' => '2021-11-27 10:31:26',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-11-27 10:31:26',
                'updated_at' => '2021-11-27 10:31:26',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-11-27 10:31:27',
                'updated_at' => '2021-11-27 10:31:27',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-11-27 10:31:27',
                'updated_at' => '2021-11-27 10:31:27',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-11-27 10:31:27',
                'updated_at' => '2021-11-27 10:31:27',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-11-27 10:31:27',
                'updated_at' => '2021-11-27 10:31:27',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-11-27 10:31:27',
                'updated_at' => '2021-11-27 10:31:27',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-11-27 10:31:27',
                'updated_at' => '2021-11-27 10:31:27',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-11-27 10:31:27',
                'updated_at' => '2021-11-27 10:31:27',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-11-27 10:31:27',
                'updated_at' => '2021-11-27 10:31:27',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-11-27 10:31:27',
                'updated_at' => '2021-11-27 10:31:27',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-11-27 10:31:27',
                'updated_at' => '2021-11-27 10:31:27',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-11-27 10:31:28',
                'updated_at' => '2021-11-27 10:31:28',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-11-27 10:31:28',
                'updated_at' => '2021-11-27 10:31:28',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-11-27 10:31:28',
                'updated_at' => '2021-11-27 10:31:28',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-11-27 10:31:28',
                'updated_at' => '2021-11-27 10:31:28',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-11-27 10:31:28',
                'updated_at' => '2021-11-27 10:31:28',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-11-27 10:31:28',
                'updated_at' => '2021-11-27 10:31:28',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2021-11-27 10:31:40',
                'updated_at' => '2021-11-27 10:31:40',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2021-11-27 10:31:40',
                'updated_at' => '2021-11-27 10:31:40',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2021-11-27 10:31:40',
                'updated_at' => '2021-11-27 10:31:40',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2021-11-27 10:31:41',
                'updated_at' => '2021-11-27 10:31:41',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2021-11-27 10:31:41',
                'updated_at' => '2021-11-27 10:31:41',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2021-11-27 10:31:45',
                'updated_at' => '2021-11-27 10:31:45',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2021-11-27 10:31:45',
                'updated_at' => '2021-11-27 10:31:45',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2021-11-27 10:31:45',
                'updated_at' => '2021-11-27 10:31:45',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2021-11-27 10:31:46',
                'updated_at' => '2021-11-27 10:31:46',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2021-11-27 10:31:46',
                'updated_at' => '2021-11-27 10:31:46',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2021-11-27 10:31:48',
                'updated_at' => '2021-11-27 10:31:48',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2021-11-27 10:31:48',
                'updated_at' => '2021-11-27 10:31:48',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2021-11-27 10:31:48',
                'updated_at' => '2021-11-27 10:31:48',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2021-11-27 10:31:48',
                'updated_at' => '2021-11-27 10:31:48',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2021-11-27 10:31:48',
                'updated_at' => '2021-11-27 10:31:48',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2021-11-27 17:05:16',
                'updated_at' => '2021-11-27 17:05:16',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2021-11-27 17:05:16',
                'updated_at' => '2021-11-27 17:05:16',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2021-11-27 17:05:16',
                'updated_at' => '2021-11-27 17:05:16',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2021-11-27 17:05:16',
                'updated_at' => '2021-11-27 17:05:16',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2021-11-27 17:05:16',
                'updated_at' => '2021-11-27 17:05:16',
            ),
        ));
        
        
    }
}