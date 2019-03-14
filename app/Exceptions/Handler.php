<?php

namespace App\Exceptions;

use Exception;
<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Response;
=======
use Illuminate\Auth\AuthenticationException;
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
<<<<<<< HEAD
     * A list of the exception types that are not reported.
=======
     * A list of the exception types that should not be reported.
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
     *
     * @var array
     */
    protected $dontReport = [
<<<<<<< HEAD
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
=======
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
    ];

    /**
     * Report or log an exception.
     *
<<<<<<< HEAD
=======
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
<<<<<<< HEAD
      if ($exception instanceof \Illuminate\Session\TokenMismatchException) {
       return redirect()
              ->back()
              ->withInput($request->except(['password', 'password_confirmation']))
              ->with('error', 'The form has expired due to inactivity. Please try again');
   }
        return parent::render($request, $exception);
    }

=======
        return parent::render($request, $exception);
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

<<<<<<< HEAD
        $guard = array_get($exception->guards(), 0);

        switch($guard)
        {
            case 'admin':
                $login = "admin.login";
                break;

                default:
                    $login = "login";
                    break;
        }

        return redirect()->guest(route($login));
=======
        return redirect()->guest('login');
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
    }
}
