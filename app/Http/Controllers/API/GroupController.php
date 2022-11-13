<?php

namespace App\Http\Controllers\API;

use App\Models\Group;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    
    public function index()
    {
        $data = Group::all();
        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data success",
                    "data" => $data,
                    "links" => [
                        "searchbyid_group" => "/api/group/{id}",
                        "develop_group" => "/api/group/develop",
                        "manage_group" => "/api/group/{id}/manage",
                        "remove_group" => "/api/group/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_group" => "/api/group",
                    "searchbyid_group" => "/api/group/{id}",
                    "develop_group" => "/api/group/develop",
                    "manage_group" => "/api/group/{id}/manage",
                    "remove_group" => "/api/group/{id}"
                ]], 404);
    }

    
    public function store(Request $request)
    {
        $data = new Group();
        $data->user_id = $request->user_id;
        $data->namakelompok = $request->namakelompok;
        $data->anggota1 = $request->anggota1;
        $data->anggota2 = $request->anggota2;
        $data->deskanggota = $request->deskanggota;

        $data->dosenpembimbing = $request->dosenpembimbing;
        $data->deskdosen = $request->deskdosen;

        $data->status = $request->status;
        $data->keterangan = $request->keterangan;
        $data->save();
        

        if($data){
            return response()->json(
                    [
                    "message" => "Insert data success",
                    "data" => $data,
                    "links" => [
                        "display_group" => "/api/group",
                        "searchbyid_group" => "/api/group/{id}",
                        "manage_group" => "/api/group/{id}/manage",
                        "remove_group" => "/api/group/{id}"
                    ]], 201);

        }
        else
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_group" => "/api/group",
                    "searchbyid_group" => "/api/group/{id}",
                    "develop_group" => "/api/group/develop",
                    "manage_group" => "/api/group/{id}/manage",
                    "remove_group" => "/api/group/{id}"
                ]], 400);
    }

    
    public function show($id)
    {
        $data = Group::find($id);

        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data with id success",
                    "data" => $data,
                    "links" => [
                        "display_group" => "/api/group",
                        "develop_group" => "/api/group/develop",
                        "manage_group" => "/api/group/{id}/manage",
                        "remove_group" => "/api/group/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_group" => "/api/group",
                    "searchbyid_group" => "/api/group/{id}",
                    "develop_group" => "/api/group/develop",
                    "manage_group" => "/api/group/{id}/manage",
                    "remove_group" => "/api/group/{id}"
                ]], 404);
    }

    
    public function update(Request $request, $id)
    {
        if($data = Group::find($id))
        {   
            $user_id = $request->user_id;
            $namakelompok = $request->namakelompok;
            $anggota1 = $request->anggota1;
            $anggota2 = $request->anggota2;
            $deskanggota = $request->deskanggota;

            $dosenpembimbing = $request->dosenpembimbing;
            $deskdosen = $request->deskdosen;

            $status = $request->status;
            $keterangan = $request->keterangan;


            $data->user_id = $user_id;
            $data->namakelompok = $namakelompok;
            $data->anggota1 = $anggota1;
            $data->anggota2 = $anggota2;
            $data->deskanggota = $deskanggota;

            $data->dosenpembimbing = $dosenpembimbing;
            $data->deskdosen = $deskdosen;

            $data->status = $status;
            $data->keterangan = $keterangan;
            $data->save();

            return response()->json(
                [
                "message" => "Update data success",
                "data" => $data,
                "links" => [
                    "display_group" => "/api/group",
                    "searchbyid_group" => "/api/group/{id}",
                    "develop_group" => "/api/group/develop",
                    "remove_group" => "/api/group/{id}"
                ]], 201);
        }
        else
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_group" => "/api/group",
                    "searchbyid_group" => "/api/group/{id}",
                    "develop_group" => "/api/group/develop",
                    "manage_group" => "/api/group/{id}/manage",
                    "remove_group" => "/api/group/{id}"
                ]], 400);
    }

    public function destroy($id)
    {
        if($data = Group::find($id))
        {
            $data->delete();
            return response()->json(
                [
                "message" => "Delete data success",
                "data" => $data,
                "links" => [
                    "display_group" => "/api/group",
                    "searchbyid_group" => "/api/group/{id}",
                    "develop_group" => "/api/group/develop",
                    "manage_group" => "/api/group/{id}/manage",
                ]], 200);
        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_group" => "/api/group",
                    "searchbyid_group" => "/api/group/{id}",
                    "develop_group" => "/api/group/develop",
                    "manage_group" => "/api/group/{id}/manage",
                    "remove_group" => "/api/group/{id}"
                ]], 404);
    }
}
