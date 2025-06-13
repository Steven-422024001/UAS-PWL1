<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use symfony\Component\HttpKernel\Exception\HttpException;
use App\Models\User;
use OpenApi\Annotations as OA;

/**
 * Class AuthController.
 * 
 * @author Steven <steven.422024001@civitas.ukrida.ac.id>
 */

class AuthController extends Controller
{
 /**
  * @OA\Post(
  *     path="/api/user/register",
  *     tags={"user"},
  *     summary="Register new user & get token",
  *     operationId="register",
  *     @OA\Response(
  *         respone=400,
  *         description="Invalid input",
  *         @OA\JsonContent()
  *     ),
  *     @OA\Response(
  *         response=201,
  *         description="Suscessful",
  *         @OA\JsonContent()
  *     ),
  *     @OA\RequestBody
  */
}
