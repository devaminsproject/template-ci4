<?php 
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthGuardApp implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {
        if(!session()->get('isLoggedInApp'))
        {
			session()->setFlashdata('alert', '<script>swal( "Error", "Anda belum login, silahkan login terlebih dahulu", "error" );</script>');
            return redirect()->to('/homeapp/splashscreen');
        }
    }
    
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}