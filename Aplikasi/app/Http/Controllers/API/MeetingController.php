<?php

namespace App\Http\Controllers\API;

use App\Models\Meeting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    
    public function index()
    {
        $data = Meeting::all();
        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data success",
                    "data" => $data,
                    "links" => [
                        "searchbyid_meeting" => "/api/meeting/{id}",
                        "develop_meeting" => "/api/meeting/develop",
                        "manage_meeting" => "/api/meeting/{id}/manage",
                        "remove_meeting" => "/api/meeting/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_meeting" => "/api/meeting",
                    "searchbyid_meeting" => "/api/meeting/{id}",
                    "develop_meeting" => "/api/meeting/develop",
                    "manage_meeting" => "/api/meeting/{id}/manage",
                    "remove_meeting" => "/api/meeting/{id}"
                ]], 404);
    }

    public function store(Request $request)
    {
        $data = new Meeting();
        $data->user_id = $request->user_id;
        $data->group_id = $request->group_id;
        $data->jeniskegiatan = $request->jeniskegiatan;
        $data->linkmeet = $request->linkmeet;
        $data->tanggal = $request->tanggal;
        $data->waktu = $request->waktu;
        $data->status = $request->status;
        $data->keterangan = $request->keterangan;
        $data->save();
        

        if($data){
            return response()->json(
                    [
                    "message" => "Insert data success",
                    "data" => $data,
                    "links" => [
                        "display_meeting" => "/api/meeting",
                        "searchbyid_meeting" => "/api/meeting/{id}",
                        "manage_meeting" => "/api/meeting/{id}/manage",
                        "remove_meeting" => "/api/meeting/{id}"
                    ]], 201);

        }
        else
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_meeting" => "/api/meeting",
                    "searchbyid_meeting" => "/api/meeting/{id}",
                    "develop_meeting" => "/api/meeting/develop",
                    "manage_meeting" => "/api/meeting/{id}/manage",
                    "remove_meeting" => "/api/meeting/{id}"
                ]], 400);
    }

    
    public function show($id)
    {
        $data = Meeting::find($id);
        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data with id success",
                    "data" => $data,
                    "links" => [
                        "display_meeting" => "/api/meeting",
                        "develop_meeting" => "/api/meeting/develop",
                        "manage_meeting" => "/api/meeting/{id}/manage",
                        "remove_meeting" => "/api/meeting/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_meeting" => "/api/meeting",
                    "searchbyid_meeting" => "/api/meeting/{id}",
                    "develop_meeting" => "/api/meeting/develop",
                    "manage_meeting" => "/api/meeting/{id}/manage",
                    "remove_meeting" => "/api/meeting/{id}"
                ]], 404);
    }

    
    public function update(Request $request, $id)
    {
        if($data = Meeting::find($id))
        {   
            $user_id = $request->user_id;
            $group_id = $request->group_id;
            $jeniskegiatan = $request->jeniskegiatan;
            $linkmeet = $request->linkmeet;
            $tanggal = $request->tanggal;
            $waktu = $request->waktu;
            $status = $request->status;
            $keterangan = $request->keterangan;

            $data->user_id = $user_id;
            $data->group_id = $group_id;
            $data->jeniskegiatan = $jeniskegiatan;
            $data->linkmeet = $linkmeet;
            $data->tanggal = $tanggal;
            $data->waktu = $waktu;
            $data->status = $status;
            $data->keterangan = $keterangan;
    
            $data->save();

            return response()->json(
                [
                "message" => "Update data success",
                "data" => $data,
                "links" => [
                    "display_meeting" => "/api/meeting",
                    "searchbyid_meeting" => "/api/meeting/{id}",
                    "develop_meeting" => "/api/meeting/develop",
                    "remove_meeting" => "/api/meeting/{id}"
                ]], 201);
        }
        else
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_meeting" => "/api/meeting",
                    "searchbyid_meeting" => "/api/meeting/{id}",
                    "develop_meeting" => "/api/meeting/develop",
                    "manage_meeting" => "/api/meeting/{id}/manage",
                    "remove_meeting" => "/api/meeting/{id}"
                ]], 400);
    }

    public function destroy($id)
    {
        if($data = Meeting::find($id))
        {
            $data->delete();
            return response()->json(
                [
                "message" => "Delete data success",
                "data" => $data,
                "links" => [
                    "display_meeting" => "/api/meeting",
                    "searchbyid_meeting" => "/api/meeting/{id}",
                    "develop_meeting" => "/api/meeting/develop",
                    "manage_meeting" => "/api/meeting/{id}/manage",
                ]], 200);
        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_meeting" => "/api/meeting",
                    "searchbyid_meeting" => "/api/meeting/{id}",
                    "develop_meeting" => "/api/meeting/develop",
                    "manage_meeting" => "/api/meeting/{id}/manage",
                    "remove_meeting" => "/api/meeting/{id}"
                ]], 404);
    }
}
