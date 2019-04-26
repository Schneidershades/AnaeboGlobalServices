<?php
use App\Models\AGS\Branch;
use App\Models\AGS\Customer;
use App\Models\AGS\Supplier;
use App\Models\AGS\Sale;
use App\Models\AGS\Stock;
use App\Models\AGS\StockApproval;
use App\Models\AGS\StockCategory;
use App\Models\AGS\SaleTransaction;
use App\Models\AGS\SalaryStructure;
use App\User;
use App\Models\AGS\Wallet;
use App\Models\AGS\WalletTransaction;
use App\Permission;
use App\Role;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        // Receipt::truncate();
        // ReceiptApproval::truncate();
        // Stock::truncate();
        // StockApproval::truncate();
        // StockCategory::truncate();
        // Transaction::truncate();
        // User::truncate();
        // Wallet::truncate();
        // WalletApproval::truncate();
        // WalletTransaction::truncate();
        // WalletTransactionApproval::truncate();
        // Branch::truncate();
        // BranchApproval::truncate();

        // Ask for db migration refresh, default is no
        if ($this->command->confirm('Do you wish to refresh migration before seeding, it will clear all old data ?')) {
            // Call the php artisan migrate:refresh
            $this->command->call('migrate:refresh');
            $this->command->warn("Data cleared, starting from blank database.");

            $this->call(BranchTableSeeder::class);
            factory(SalaryStructure::class, 2)->create();
        }

        // Seed the default permissions
        $permissions = Permission::defaultPermissions();

        foreach ($permissions as $perms) {
            Permission::firstOrCreate(['name' => $perms]);
        }

        $this->command->info('Default Permissions added.');

        // Confirm roles needed
        if ($this->command->confirm('Create Roles for user, default is admin and user? [y|N]', true)) {

            // Ask for roles from input
            $input_roles = $this->command->ask('Enter roles in comma separate format.', 'Admin,User');

            // Explode roles
            $roles_array = explode(',', $input_roles);

            // add roles
            foreach($roles_array as $role) {
                $role = Role::firstOrCreate(['name' => trim($role)]);

                if( $role->name == 'Admin' ) {
                    // assign all permissions
                    $role->syncPermissions(Permission::all());
                    $this->command->info('Admin granted all the permissions');
                } else {
                    // for others by default only read access
                    $role->syncPermissions(Permission::where('name', 'LIKE', 'view_%')->get());
                }

                // create one user for each role
                $this->createUser($role);
            }

            $this->command->info('Roles ' . $input_roles . ' added successfully');

        } else {
            Role::firstOrCreate(['name' => 'User']);
            $this->command->info('Added only default user role.');
        }

        // now lets seed some posts for demo
        

        factory(Customer::class, 30)->create();


        // factory(User::class, 9)->create();
        // factory(CustomerApproval::class, 30)->create();

        $this->call(SupplierTableSeeder::class);

        factory(Sale::class, 50)->create();

        $this->call(StockCategoryTableSeeder::class);

        $this->call(StockTableSeeder::class);
        // factory(StockApproval::class, 49)->create();

        factory(Wallet::class, 100)->create();
        factory(WalletTransaction::class, 100)->create();

        factory(SaleTransaction::class, 500)->create();
        
        $this->command->info('Some Posts data seeded.');
        $this->command->warn('All done :)');
    }

    /**
     * Create a user with given role
     *
     * @param $role
     */
    private function createUser($role)
    {
        $user = factory(User::class)->create();
        $user->assignRole($role->name);

        if( $role->name == 'Admin' ) {
            $this->command->info('Here is your admin details to login:');
            $this->command->warn($user->email);
            $this->command->warn('Password is "password"');
        }
    }
}
