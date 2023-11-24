<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [ 
                'role' => 1,
                'permission' => 1,
            ],
            [ 
                'role' => 1,
                'permission' => 2,
            ],
            [ 
                'role' => 1,
                'permission' => 3,
            ],
            [ 
                'role' => 1,
                'permission' => 4,
            ],
            [ 
                'role' => 1,
                'permission' => 5,
            ],
            [ 
                'role' => 1,
                'permission' => 6,
            ],
            [ 
                'role' => 1,
                'permission' => 7,
            ],
            [ 
                'role' => 1,
                'permission' => 8,
            ],
            [ 
                'role' => 1,
                'permission' => 9,
            ],
            [ 
                'role' => 1,
                'permission' => 10,
            ],
            [ 
                'role' => 1,
                'permission' => 11,
            ],
            [ 
                'role' => 1,
                'permission' => 12,
            ],
            [ 
                'role' => 1,
                'permission' => 13,
            ],
            [ 
                'role' => 1,
                'permission' => 14,
            ],
            [ 
                'role' => 1,
                'permission' => 15,
            ],
            [ 
                'role' => 1,
                'permission' => 16,
            ],
            [ 
                'role' => 1,
                'permission' => 17,
            ],
            [ 
                'role' => 1,
                'permission' => 18,
            ],
            [ 
                'role' => 1,
                'permission' => 19,
            ],
            [ 
                'role' => 1,
                'permission' => 20,
            ],
            [ 
                'role' => 1,
                'permission' => 21,
            ],
            [ 
                'role' => 1,
                'permission' => 22,
            ],
            [ 
                'role' => 1,
                'permission' => 23,
            ],
            [ 
                'role' => 1,
                'permission' => 24,
            ],
        ];
        DB::table('permissions')->insert($data);
    }
}
