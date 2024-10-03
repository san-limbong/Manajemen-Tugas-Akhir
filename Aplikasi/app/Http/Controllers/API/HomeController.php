<?php

namespace App\Http\Controllers\API;

use App\Models\Announcement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Announcement::all();
        if($data){
            // return response()->json($data, 200);
            return response()->json(
                    [
                    "message" => "Retrieve data success",
                    "data" => $data,
                    "links" => [
                        "searchbyid_announcement" => "/api/announcement/{id}",
                        "develop_announcement" => "/api/announcement/develop",
                        "manage_announcement" => "/api/announcement/{id}/manage",
                        "remove_announcement" => "/api/announcement/{id}"
                    ]], 200);

        }
        else
            // return response()->json('Data Not Found', 404);
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_announcement" => "/api/announcement",
                    "searchbyid_announcement" => "/api/announcement/{id}",
                    "develop_announcement" => "/api/announcement/develop",
                    "manage_announcement" => "/api/announcement/{id}/manage",
                    "remove_announcement" => "/api/announcement/{id}"
                ]], 404);

    }

    
    public function store(Request $request)
    {
        $data = new Announcement();
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;
        $data->save();

        if($data){
            // return response()->json($data, 200);
            return response()->json(
                    [
                    "message" => "Insert data success",
                    "data" => $data,
                    "links" => [
                        "display_announcement" => "/api/announcement",
                        "searchbyid_announcement" => "/api/announcement/{id}",
                        "manage_announcement" => "/api/announcement/{id}/manage",
                        "remove_announcement" => "/api/announcement/{id}"
                    ]], 201);

        }
        else
            // return response()->json('Data Not Found', 404);
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_announcement" => "/api/announcement",
                    "searchbyid_announcement" => "/api/announcement/{id}",
                    "develop_announcement" => "/api/announcement/develop",
                    "manage_announcement" => "/api/announcement/{id}/manage",
                    "remove_announcement" => "/api/announcement/{id}"
                ]], 400);
    }

    
    public function show($id)
    {
        $data = Announcement::find($id);

        if($data){
            // return response()->json($data, 200);
            return response()->json(
                    [
                    "message" => "Retrieve data with id success",
                    "data" => $data,
                    "links" => [
                        "display_announcement" => "/api/announcement",
                        "develop_announcement" => "/api/announcement/develop",
                        "manage_announcement" => "/api/announcement/{id}/manage",
                        "remove_announcement" => "/api/announcement/{id}"
                    ]], 200);

        }
        else
            // return response()->json('Data Not Found', 404);
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_announcement" => "/api/announcement",
                    "searchbyid_announcement" => "/api/announcement/{id}",
                    "develop_announcement" => "/api/announcement/develop",
                    "manage_announcement" => "/api/announcement/{id}/manage",
                    "remove_announcement" => "/api/announcement/{id}"
                ]], 404);
    }

    
    public function update(Request $request, $id)
    {
        if($data = Announcement::find($id))
        {   
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $data->judul = $judul;
            $data->deskripsi = $deskripsi;
            $data->save();

            return response()->json(
                [
                "message" => "Update data success",
                "data" => $data,
                "links" => [
                    "display_announcement" => "/api/announcement",
                    "searchbyid_announcement" => "/api/announcement/{id}",
                    "develop_announcement" => "/api/announcement/develop",
                    "remove_announcement" => "/api/announcement/{id}"
                ]], 201);
        }
        else
            // return response()->json('Data Not Found', 404);
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_announcement" => "/api/announcement",
                    "searchbyid_announcement" => "/api/announcement/{id}",
                    "develop_announcement" => "/api/announcement/develop",
                    "manage_announcement" => "/api/announcement/{id}/manage",
                    "remove_announcement" => "/api/announcement/{id}"
                ]], 400);
    }

    public function destroy($id)
    {
        if($data = Announcement::find($id))
        {
            $data->delete();
            return response()->json(
                [
                "message" => "Delete data success",
                "data" => $data,
                "links" => [
                    "display_announcement" => "/api/announcement",
                    "searchbyid_announcement" => "/api/announcement/{id}",
                    "develop_announcement" => "/api/announcement/develop",
                    "manage_announcement" => "/api/announcement/{id}/manage",
                ]], 200);
        }
        else
            // return response()->json('Data Not Found', 404);
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_announcement" => "/api/announcement",
                    "searchbyid_announcement" => "/api/announcement/{id}",
                    "develop_announcement" => "/api/announcement/develop",
                    "manage_announcement" => "/api/announcement/{id}/manage",
                    "remove_announcement" => "/api/announcement/{id}"
                ]], 404);
    }
}
