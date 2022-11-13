<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;


class APIController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($data, $message)
    {
        $response = [
            'status' => 'success',
            'message' => $message,
            'data'    => $data,
        ];

        return response()->json($response, 200);
    }

    public function sendResponseWithParam($data, $param, $message)
    {
        $response = [
            'status' => 'success',
            'message' => $message,
            'data'    => $data,
            'param'    => $param,
        ];

        return response()->json($response, 200);
    }

    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $code)
    {
        $response = [
            'status' => 'failed',
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }
}