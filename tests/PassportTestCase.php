<?php
namespace Tests;

use Tests\TestCase;
// use App\User;
use App\Models\User;
use HasFactory;
use Laravel\Passport\ClientRepository;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;

class PassportTestCase extends TestCase
{
    use DatabaseTransactions;

    protected $headersWithToken = [];
    protected $headersWithoutToken = [];
    protected $scopes = [];
    protected $user;

    public function setUp() :void
    {
        parent::setUp();

        //db
        $clientRepository = new ClientRepository();
        $client = $clientRepository->createPersonalAccessClient(
            null, 'Test Personal Access Client', url('/')
        );

        DB::table('oauth_personal_access_clients')->insert([
            'client_id' => $client->id,
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);

        //token create to db
        // $this->user = factory(User::class)->create();
        $this->user = User::factory()->create();
        $token = $this->user->createToken('TestToken', $this->scopes)->accessToken;
        var_dump($token); exit;

        //
        $this->headersWithToken['Accept'] = 'application/json';
        $this->headersWithToken['Authorization'] = 'Bearer' .$token;

        $this->headersWithToken['Accept'] = 'application/json';
    }
}