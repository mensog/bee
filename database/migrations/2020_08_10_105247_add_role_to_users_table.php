<?php

use App\Models\PrivateAccount;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class AddRoleToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default(UserRole::CUSTOMER);
        });
        $data = [
            'name' => 'Администратор',
            'surname' => 'Сайта',
            'email' => env('ADMIN_INIT_MAIL'),
            'password' => env('ADMIN_INIT_PASSWORD'),
        ];
        $user = User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => UserRole::ADMIN,
        ]);
        $account = new PrivateAccount();
        $account->user_id = $user->id;
        $account->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
}
