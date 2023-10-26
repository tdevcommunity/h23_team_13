namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
  public function run()
  {
      DB::table('users')->insert([
          [
              'firstname' => 'John',
              'lastname' => 'Doe',
              'email' => 'john@gmail.com',
              'country' => 'Togo',
              'adresse' => 'Lomé',
              'sex' => 'Masculin',
              'fonction' => 'Design',
              'telephone' => '+22892546875',
              'birthday' => '2023-12-02',
              'status' => 1,
              'role_id' => 3,
              'cv_path' => 'path',
          ],
          [
              'firstname' => 'Jane',
              'lastname' => 'Doe',
              'email' => 'jane@gmail.com',
              'country' => 'Togo',
              'adresse' => 'Lomé',
              'sex' => 'Féminin',
              'fonction' => 'Design',
              'telephone' => '+22892546876',
              'birthday' => '2023-12-03',
              'status' => 1,
              'role_id' => 3,
              'cv_path' => 'path',
          ],
          [
              'firstname' => 'Alice',
              'lastname' => 'Smith',
              'email' => 'alice@gmail.com',
              'country' => 'Togo',
              'adresse' => 'Lomé',
              'sex' => 'Féminin',
              'fonction' => 'Development',
              'telephone' => '+22892546877',
              'birthday' => '2023-11-15',
              'status' => 1,
              'role_id' => 2,
              'cv_path' => 'path',
          ],
          [
              'firstname' => 'Bob',
              'lastname' => 'Johnson',
              'email' => 'bob@gmail.com',
              'country' => 'Togo',
              'adresse' => 'Lomé',
              'sex' => 'Masculin',
              'fonction' => 'Marketing',
              'telephone' => '+22892546878',
              'birthday' => '2023-10-28',
              'status' => 1,
              'role_id' => 1,
              'cv_path' => 'path',
          ],
      ]);
  }
}

