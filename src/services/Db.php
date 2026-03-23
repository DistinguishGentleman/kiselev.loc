<?

namespace src\services;

class Db
{
    private $pdo;
    public function __construct()
    {
        $dbOptions = (require __DIR__ . '/../config/settings.php')['db'];

        $this->pdo = new \PDO(
            dsn: 'mysql:host=' . $dbOptions['host'] .
                ';dbname=' . $dbOptions['dbname'],
            username: $dbOptions['user'],
            password: $dbOptions['password'],

        );
        $this->pdo->exec('SET NAMES UTF8');
    }

    public function query(string $sql, $parms = []): ?array
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($parms);

        if(false === $result){
            return null;
        }
        return $sth->fetchAll();
    }
}
