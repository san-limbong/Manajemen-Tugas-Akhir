<?php

namespace App\Http\Controllers\API;

use App\Models\Lecture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function index()
    {
        $data = Lecture::all();
        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data success",
                    "data" => $data,
                    "links" => [
                        "searchbyid_lecture" => "/api/lecture/{id}",
                        "develop_lecture" => "/api/lecture/develop",
                        "manage_lecture" => "/api/lecture/{id}/manage",
                        "remove_lecture" => "/api/lecture/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_lecture" => "/api/lecture",
                    "searchbyid_lecture" => "/api/lecture/{id}",
                    "develop_lecture" => "/api/lecture/develop",
                    "manage_lecture" => "/api/lecture/{id}/manage",
                    "remove_lecture" => "/api/lecture/{id}"
                ]], 404);
    }

    public function store(Request $request)
    {
        $data = new Lecture();
        $data->namakelompok = $request->namakelompok;
        $data->dosenpembimbing = $request->dosenpembimbing;
        $data->tanggal = $request->tanggal;
        $data->waktu = $request->waktu;
        $data->save();
        

        if($data){
            return response()->json(
                    [
                    "message" => "Insert data success",
                    "data" => $data,
                    "links" => [
                        "display_lecture" => "/api/lecture",
                        "searchbyid_lecture" => "/api/lecture/{id}",
                        "manage_lecture" => "/api/lecture/{id}/manage",
                        "remove_lecture" => "/api/lecture/{id}"
                    ]], 201);

        }
        else
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_lecture" => "/api/lecture",
                    "searchbyid_lecture" => "/api/lecture/{id}",
                    "develop_lecture" => "/api/lecture/develop",
                    "manage_lecture" => "/api/lecture/{id}/manage",
                    "remove_lecture" => "/api/lecture/{id}"
                ]], 400);
    }

    public function show($id)
    {
        $data = Lecture::find($id);
        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data with id success",
                    "data" => $data,
                    "links" => [
                        "display_lecture" => "/api/lecture",
                        "develop_lecture" => "/api/lecture/develop",
                        "manage_lecture" => "/api/lecture/{id}/manage",
                        "remove_lecture" => "/api/lecture/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_lecture" => "/api/lecture",
                    "searchbyid_lecture" => "/api/lecture/{id}",
                    "develop_lecture" => "/api/lecture/develop",
                    "manage_lecture" => "/api/lecture/{id}/manage",
                    "remove_lecture" => "/api/lecture/{id}"
                ]], 404);
    }

    public function update(Request $request, $id)
    {
        if($data = Lecture::find($id))
        {   
            $namakelompok = $request->namakelompok;
            $dosenpembimbing = $request->dosenpembimbing;
            $tanggal = $request->tanggal;
            $waktu = $request->waktu;
       

            $data->namakelompok = $namakelompok;
            $data->dosenpembimbing = $dosenpembimbing;
            $data->tanggal = $tanggal;
            $data->waktu = $waktu;
            $data->save();

            return response()->json(
                [
                "message" => "Update data success",
                "data" => $data,
                "links" => [
                    "display_lecture" => "/api/lecture",
                    "searchbyid_lecture" => "/api/lecture/{id}",
                    "develop_lecture" => "/api/lecture/develop",
                    "remove_lecture" => "/api/lecture/{id}"
                ]], 201);
        }
        else
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_lecture" => "/api/lecture",
                    "searchbyid_lecture" => "/api/lecture/{id}",
                    "develop_lecture" => "/api/lecture/develop",
                    "manage_lecture" => "/api/lecture/{id}/manage",
                    "remove_lecture" => "/api/lecture/{id}"
                ]], 400);
    }

    public function destroy($id)
    {
        if($data = Lecture::find($id))
        {
            $data->delete();
            return response()->json(
                [
                "message" => "Delete data success",
                "data" => $data,
                "links" => [
                    "display_lecture" => "/api/lecture",
                    "searchbyid_lecture" => "/api/lecture/{id}",
                    "develop_lecture" => "/api/lecture/develop",
                    "manage_lecture" => "/api/lecture/{id}/manage",
                ]], 200);
        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_lecture" => "/api/lecture",
                    "searchbyid_lecture" => "/api/lecture/{id}",
                    "develop_lecture" => "/api/lecture/develop",
                    "manage_lecture" => "/api/lecture/{id}/manage",
                    "remove_lecture" => "/api/lecture/{id}"
                ]], 404);
    }
}
