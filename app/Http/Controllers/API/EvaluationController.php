<?php

namespace App\Http\Controllers\API;

use App\Models\Evaluation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    
    public function index()
    {
        $data = Evaluation::all();
        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data success",
                    "data" => $data,
                    "links" => [
                        "searchbyid_evaluation" => "/api/evaluation/{id}",
                        "develop_evaluation" => "/api/evaluation/develop",
                        "manage_evaluation" => "/api/evaluation/{id}/manage",
                        "remove_evaluation" => "/api/evaluation/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_evaluation" => "/api/evaluation",
                    "searchbyid_evaluation" => "/api/evaluation/{id}",
                    "develop_evaluation" => "/api/evaluation/develop",
                    "manage_evaluation" => "/api/evaluation/{id}/manage",
                    "remove_evaluation" => "/api/evaluation/{id}"
                ]], 404);
    }

    public function store(Request $request)
    {
        $data = new Evaluation();
        $data->namakelompok = $request->namakelompok;
        $data->seminarnilai = $request->seminarnilai;
        $data->seminarstatus = $request->seminarstatus;
        $data->tanilai = $request->tanilai;
        $data->tastatus = $request->tastatus;
        $data->save();

        if($data){
            return response()->json(
                    [
                    "message" => "Insert data success",
                    "data" => $data,
                    "links" => [
                        "display_evaluation" => "/api/evaluation",
                        "searchbyid_evaluation" => "/api/evaluation/{id}",
                        "manage_evaluation" => "/api/evaluation/{id}/manage",
                        "remove_evaluation" => "/api/evaluation/{id}"
                    ]], 201);

        }
        else
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_evaluation" => "/api/evaluation",
                    "searchbyid_evaluation" => "/api/evaluation/{id}",
                    "develop_evaluation" => "/api/evaluation/develop",
                    "manage_evaluation" => "/api/evaluation/{id}/manage",
                    "remove_evaluation" => "/api/evaluation/{id}"
                ]], 400);
    }

    public function show($id)
    {
        $data = Evaluation::find($id);

        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data with id success",
                    "data" => $data,
                    "links" => [
                        "display_evaluation" => "/api/evaluation",
                        "develop_evaluation" => "/api/evaluation/develop",
                        "manage_evaluation" => "/api/evaluation/{id}/manage",
                        "remove_evaluation" => "/api/evaluation/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_evaluation" => "/api/evaluation",
                    "searchbyid_evaluation" => "/api/evaluation/{id}",
                    "develop_evaluation" => "/api/evaluation/develop",
                    "manage_evaluation" => "/api/evaluation/{id}/manage",
                    "remove_evaluation" => "/api/evaluation/{id}"
                ]], 404);
    }

    public function update(Request $request, $id)
    {
        
        if($data = Evaluation::find($id))
        {   
            $namakelompok = $request->namakelompok;
            $seminarnilai = $request->seminarnilai;
            $seminarstatus = $request->seminarstatus;
            $tanilai = $request->tanilai;
            $tastatus = $request->tastatus;

            $data->namakelompok = $namakelompok;
            $data->seminarnilai = $seminarnilai;
            $data->seminarstatus = $seminarstatus;
            $data->tanilai = $tanilai;
            $data->tastatus = $tastatus;
    
            $data->save();

            return response()->json(
                [
                "message" => "Update data success",
                "data" => $data,
                "links" => [
                    "display_evaluation" => "/api/evaluation",
                    "searchbyid_evaluation" => "/api/evaluation/{id}",
                    "develop_evaluation" => "/api/evaluation/develop",
                    "remove_evaluation" => "/api/evaluation/{id}"
                ]], 201);
        }
        else
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_evaluation" => "/api/evaluation",
                    "searchbyid_evaluation" => "/api/evaluation/{id}",
                    "develop_evaluation" => "/api/evaluation/develop",
                    "manage_evaluation" => "/api/evaluation/{id}/manage",
                    "remove_evaluation" => "/api/evaluation/{id}"
                ]], 400);
    }

    public function destroy($id)
    {
        if($data = Evaluation::find($id))
        {
            $data->delete();
            return response()->json(
                [
                "message" => "Delete data success",
                "data" => $data,
                "links" => [
                    "display_evaluation" => "/api/evaluation",
                    "searchbyid_evaluation" => "/api/evaluation/{id}",
                    "develop_evaluation" => "/api/evaluation/develop",
                    "manage_evaluation" => "/api/evaluation/{id}/manage",
                ]], 200);
        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_evaluation" => "/api/evaluation",
                    "searchbyid_evaluation" => "/api/evaluation/{id}",
                    "develop_evaluation" => "/api/evaluation/develop",
                    "manage_evaluation" => "/api/evaluation/{id}/manage",
                    "remove_evaluation" => "/api/evaluation/{id}"
                ]], 404);
    }
}
