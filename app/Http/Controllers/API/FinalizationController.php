<?php

namespace App\Http\Controllers\API;

use App\Models\Finalization;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinalizationController extends Controller
{
    public function index()
    {
        $data = Finalization::all();
        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data success",
                    "data" => $data,
                    "links" => [
                        "searchbyid_finalization" => "/api/finalization/{id}",
                        "develop_finalization" => "/api/finalization/develop",
                        "manage_finalization" => "/api/finalization/{id}/manage",
                        "remove_finalization" => "/api/finalization/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_finalization" => "/api/finalization",
                    "searchbyid_finalization" => "/api/finalization/{id}",
                    "develop_finalization" => "/api/finalization/develop",
                    "manage_finalization" => "/api/finalization/{id}/manage",
                    "remove_finalization" => "/api/finalization/{id}"
                ]], 404);
    }

    public function store(Request $request)
    {
        $data = new Finalization();
        $data->user_id = $request->user_id;
        $data->group_id = $request->group_id;
        $data->file = $request->file;
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;
        $data->status = $request->status;
        $data->keterangan = $request->keterangan;
        $data->save();
        

        if($data){
            return response()->json(
                    [
                    "message" => "Insert data success",
                    "data" => $data,
                    "links" => [
                        "display_finalization" => "/api/finalization",
                        "searchbyid_finalization" => "/api/finalization/{id}",
                        "manage_finalization" => "/api/finalization/{id}/manage",
                        "remove_finalization" => "/api/finalization/{id}"
                    ]], 201);

        }
        else
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_finalization" => "/api/finalization",
                    "searchbyid_finalization" => "/api/finalization/{id}",
                    "develop_finalization" => "/api/finalization/develop",
                    "manage_finalization" => "/api/finalization/{id}/manage",
                    "remove_finalization" => "/api/finalization/{id}"
                ]], 400);
    }

    public function show($id)
    {
        $data = Finalization::find($id);

        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data with id success",
                    "data" => $data,
                    "links" => [
                        "display_finalization" => "/api/finalization",
                        "develop_finalization" => "/api/finalization/develop",
                        "manage_finalization" => "/api/finalization/{id}/manage",
                        "remove_finalization" => "/api/finalization/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_finalization" => "/api/finalization",
                    "searchbyid_finalization" => "/api/finalization/{id}",
                    "develop_finalization" => "/api/finalization/develop",
                    "manage_finalization" => "/api/finalization/{id}/manage",
                    "remove_finalization" => "/api/finalization/{id}"
                ]], 404);
    }

    public function update(Request $request, $id)
    {
        if($data = Finalization::find($id))
        {   
            $user_id = $request->user_id;
            $group_id = $request->group_id;
            $file = $request->file;
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;
            $status = $request->status;
            $keterangan = $request->keterangan;

            $data->user_id = $user_id;
            $data->group_id = $group_id;
            $data->file = $file;
            $data->judul = $judul;
            $data->deskripsi = $deskripsi;
            $data->status = $status;
            $data->keterangan = $keterangan;
            $data->save();

            return response()->json(
                [
                "message" => "Update data success",
                "data" => $data,
                "links" => [
                    "display_finalization" => "/api/finalization",
                    "searchbyid_finalization" => "/api/finalization/{id}",
                    "develop_finalization" => "/api/finalization/develop",
                    "remove_finalization" => "/api/finalization/{id}"
                ]], 201);
        }
        else
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_finalization" => "/api/finalization",
                    "searchbyid_finalization" => "/api/finalization/{id}",
                    "develop_finalization" => "/api/finalization/develop",
                    "manage_finalization" => "/api/finalization/{id}/manage",
                    "remove_finalization" => "/api/finalization/{id}"
                ]], 400);
    }

    public function destroy($id)
    {
        if($data = Finalization::find($id))
        {
            $data->delete();
            return response()->json(
                [
                "message" => "Delete data success",
                "data" => $data,
                "links" => [
                    "display_finalization" => "/api/finalization",
                    "searchbyid_finalization" => "/api/finalization/{id}",
                    "develop_finalization" => "/api/finalization/develop",
                    "manage_finalization" => "/api/finalization/{id}/manage",
                ]], 200);
        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_finalization" => "/api/finalization",
                    "searchbyid_finalization" => "/api/finalization/{id}",
                    "develop_finalization" => "/api/finalization/develop",
                    "manage_finalization" => "/api/finalization/{id}/manage",
                    "remove_finalization" => "/api/finalization/{id}"
                ]], 404);
    }
}
