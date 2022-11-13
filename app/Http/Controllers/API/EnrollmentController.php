<?php

namespace App\Http\Controllers\API;

use App\Models\Enrollment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        $data = Enrollment::all();
        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data success",
                    "data" => $data,
                    "links" => [
                        "searchbyid_enrollment" => "/api/enrollment/{id}",
                        "develop_enrollment" => "/api/enrollment/develop",
                        "manage_enrollment" => "/api/enrollment/{id}/manage",
                        "remove_enrollment" => "/api/enrollment/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_enrollment" => "/api/enrollment",
                    "searchbyid_enrollment" => "/api/enrollment/{id}",
                    "develop_enrollment" => "/api/enrollment/develop",
                    "manage_enrollment" => "/api/enrollment/{id}/manage",
                    "remove_enrollment" => "/api/enrollment/{id}"
                ]], 404);
        
    }

    public function store(Request $request)
    {   
        $data = new Enrollment();
        $data->user_id = $request->user_id;
        $data->totalsks = $request->totalsks;
        $data->status = $request->status;
        $data->save();

        if($data){
            return response()->json(
                    [
                    "message" => "Insert data success",
                    "data" => $data,
                    "links" => [
                        "display_enrollment" => "/api/enrollment",
                        "searchbyid_enrollment" => "/api/enrollment/{id}",
                        "manage_enrollment" => "/api/enrollment/{id}/manage",
                        "remove_enrollment" => "/api/enrollment/{id}"
                    ]], 201);

        }
        else
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_enrollment" => "/api/enrollment",
                    "searchbyid_enrollment" => "/api/enrollment/{id}",
                    "develop_enrollment" => "/api/enrollment/develop",
                    "manage_enrollment" => "/api/enrollment/{id}/manage",
                    "remove_enrollment" => "/api/enrollment/{id}"
                ]], 400);
        
    }

    public function show($id)
    {
        $data = Enrollment::find($id);

        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data with id success",
                    "data" => $data,
                    "links" => [
                        "display_enrollment" => "/api/enrollment",
                        "develop_enrollment" => "/api/enrollment/develop",
                        "manage_enrollment" => "/api/enrollment/{id}/manage",
                        "remove_enrollment" => "/api/enrollment/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_enrollment" => "/api/enrollment",
                    "searchbyid_enrollment" => "/api/enrollment/{id}",
                    "develop_enrollment" => "/api/enrollment/develop",
                    "manage_enrollment" => "/api/enrollment/{id}/manage",
                    "remove_enrollment" => "/api/enrollment/{id}"
                ]], 404);
    }

    public function update(Request $request, $id)
    {
        if($data = Enrollment::find($id))
        {   
            $user_id = $request->user_id;
            $totalsks = $request->totalsks;
            $status = $request->status;

            $data->user_id = $user_id;
            $data->totalsks = $totalsks;
            $data->status = $status;
            $data->save();

            return response()->json(
                [
                "message" => "Update data success",
                "data" => $data,
                "links" => [
                    "display_enrollment" => "/api/enrollment",
                    "searchbyid_enrollment" => "/api/enrollment/{id}",
                    "develop_enrollment" => "/api/enrollment/develop",
                    "remove_enrollment" => "/api/enrollment/{id}"
                ]], 201);
        }
        else
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_enrollment" => "/api/enrollment",
                    "searchbyid_enrollment" => "/api/enrollment/{id}",
                    "develop_enrollment" => "/api/enrollment/develop",
                    "manage_enrollment" => "/api/enrollment/{id}/manage",
                    "remove_enrollment" => "/api/enrollment/{id}"
                ]], 400);
    }

    
    public function destroy($id)
    {
        if($data = Enrollment::find($id))
        {
            $data->delete();
            return response()->json(
                [
                "message" => "Delete data success",
                "data" => $data,
                "links" => [
                    "display_enrollment" => "/api/enrollment",
                    "searchbyid_enrollment" => "/api/enrollment/{id}",
                    "develop_enrollment" => "/api/enrollment/develop",
                    "manage_enrollment" => "/api/enrollment/{id}/manage",
                ]], 200);
        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_enrollment" => "/api/enrollment",
                    "searchbyid_enrollment" => "/api/enrollment/{id}",
                    "develop_enrollment" => "/api/enrollment/develop",
                    "manage_enrollment" => "/api/enrollment/{id}/manage",
                    "remove_enrollment" => "/api/enrollment/{id}"
                ]], 404);
    }
}
