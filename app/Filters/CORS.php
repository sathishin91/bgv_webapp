namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class CORS implements FilterInterface
{
public function before(RequestInterface $request, $arguments = null)
{
// Add CORS headers
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');

return $request;
}

public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
{
return $response;
}
}