<?php

namespace App\Http\Controllers\API;

use App\Models\Topic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Topic::all();
        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data success",
                    "data" => $data,
                    "links" => [
                        "searchbyid_topic" => "/api/topic/{id}",
                        "develop_topic" => "/api/topic/develop",
                        "manage_topic" => "/api/topic/{id}/manage",
                        "remove_topic" => "/api/topic/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_topic" => "/api/topic",
                    "searchbyid_topic" => "/api/topic/{id}",
                    "develop_topic" => "/api/topic/develop",
                    "manage_topic" => "/api/topic/{id}/manage",
                    "remove_topic" => "/api/topic/{id}"
                ]], 404);
    }


    public function store(Request $request)
    {
        $data = new Topic();
        $data->user_id = $request->user_id;
        $data->group_id = $request->group_id;
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
                        "display_topic" => "/api/topic",
                        "searchbyid_topic" => "/api/topic/{id}",
                        "manage_topic" => "/api/topic/{id}/manage",
                        "remove_topic" => "/api/topic/{id}"
                    ]], 201);

        }
        else
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_topic" => "/api/topic",
                    "searchbyid_topic" => "/api/topic/{id}",
                    "develop_topic" => "/api/topic/develop",
                    "manage_topic" => "/api/topic/{id}/manage",
                    "remove_topic" => "/api/topic/{id}"
                ]], 400);
    }


    public function show($id)
    {
        $data = Topic::find($id);
        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data with id success",
                    "data" => $data,
                    "links" => [
                        "display_topic" => "/api/topic",
                        "develop_topic" => "/api/topic/develop",
                        "manage_topic" => "/api/topic/{id}/manage",
                        "remove_topic" => "/api/topic/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_topic" => "/api/topic",
                    "searchbyid_topic" => "/api/topic/{id}",
                    "develop_topic" => "/api/topic/develop",
                    "manage_topic" => "/api/topic/{id}/manage",
                    "remove_topic" => "/api/topic/{id}"
                ]], 404);
    }


    public function update(Request $request, $id)
    {
        if($data = Topic::find($id))
        {   
            $user_id = $request->user_id;
            $group_id = $request->group_id;
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;
            $status = $request->status;
            $keterangan = $request->keterangan;

            $data->user_id = $user_id;
            $data->group_id = $group_id;
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
                    "display_topic" => "/api/topic",
                    "searchbyid_topic" => "/api/topic/{id}",
                    "develop_topic" => "/api/topic/develop",
                    "remove_topic" => "/api/topic/{id}"
                ]], 201);
        }
        else
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_topic" => "/api/topic",
                    "searchbyid_topic" => "/api/topic/{id}",
                    "develop_topic" => "/api/topic/develop",
                    "manage_topic" => "/api/topic/{id}/manage",
                    "remove_topic" => "/api/topic/{id}"
                ]], 400);
    }


    public function destroy($id)
    {
        if($data = Topic::find($id))
        {
            $data->delete();
            return response()->json(
                [
                "message" => "Delete data success",
                "data" => $data,
                "links" => [
                    "display_topic" => "/api/topic",
                    "searchbyid_topic" => "/api/topic/{id}",
                    "develop_topic" => "/api/topic/develop",
                    "manage_topic" => "/api/topic/{id}/manage",
                ]], 200);
        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_topic" => "/api/topic",
                    "searchbyid_topic" => "/api/topic/{id}",
                    "develop_topic" => "/api/topic/develop",
                    "manage_topic" => "/api/topic/{id}/manage",
                    "remove_topic" => "/api/topic/{id}"
                ]], 404);
    }
}
