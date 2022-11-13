<?php

namespace App\Http\Controllers\API;

use App\Models\Seminar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Seminar::all();
        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data success",
                    "data" => $data,
                    "links" => [
                        "searchbyid_seminar" => "/api/seminar/{id}",
                        "develop_seminar" => "/api/seminar/develop",
                        "manage_seminar" => "/api/seminar/{id}/manage",
                        "remove_seminar" => "/api/seminar/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_seminar" => "/api/seminar",
                    "searchbyid_seminar" => "/api/seminar/{id}",
                    "develop_seminar" => "/api/seminar/develop",
                    "manage_seminar" => "/api/seminar/{id}/manage",
                    "remove_seminar" => "/api/seminar/{id}"
                ]], 404);
    }

    
    public function store(Request $request)
    {
        $data = new Seminar();
        $data->namakelompok = $request->namakelompok;
        $data->dosenpembimbing = $request->dosenpembimbing;
        $data->dosenpenguji = $request->dosenpenguji;
        $data->tanggal = $request->tanggal;
        $data->waktu = $request->waktu;
        $data->save();
        

        if($data){
            return response()->json(
                    [
                    "message" => "Insert data success",
                    "data" => $data,
                    "links" => [
                        "display_seminar" => "/api/seminar",
                        "searchbyid_seminar" => "/api/seminar/{id}",
                        "manage_seminar" => "/api/seminar/{id}/manage",
                        "remove_seminar" => "/api/seminar/{id}"
                    ]], 201);

        }
        else
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_seminar" => "/api/seminar",
                    "searchbyid_seminar" => "/api/seminar/{id}",
                    "develop_seminar" => "/api/seminar/develop",
                    "manage_seminar" => "/api/seminar/{id}/manage",
                    "remove_seminar" => "/api/seminar/{id}"
                ]], 400);
    }

    public function show($id)
    {
        $data = Seminar::find($id);
        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data with id success",
                    "data" => $data,
                    "links" => [
                        "display_seminar" => "/api/seminar",
                        "develop_seminar" => "/api/seminar/develop",
                        "manage_seminar" => "/api/seminar/{id}/manage",
                        "remove_seminar" => "/api/seminar/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_seminar" => "/api/seminar",
                    "searchbyid_seminar" => "/api/seminar/{id}",
                    "develop_seminar" => "/api/seminar/develop",
                    "manage_seminar" => "/api/seminar/{id}/manage",
                    "remove_seminar" => "/api/seminar/{id}"
                ]], 404);
    }

    public function update(Request $request, $id)
    {
        if($data = Seminar::find($id))
        {   
            $namakelompok = $request->namakelompok;
            $dosenpembimbing = $request->dosenpembimbing;
            $dosenpenguji = $request->dosenpenguji;
            $tanggal = $request->tanggal;
            $waktu = $request->waktu;
       

            $data->namakelompok = $namakelompok;
            $data->dosenpembimbing = $dosenpembimbing;
            $data->dosenpenguji = $dosenpenguji;
            $data->tanggal = $tanggal;
            $data->waktu = $waktu;
    
            $data->save();

            return response()->json(
                [
                "message" => "Update data success",
                "data" => $data,
                "links" => [
                    "display_seminar" => "/api/seminar",
                    "searchbyid_seminar" => "/api/seminar/{id}",
                    "develop_seminar" => "/api/seminar/develop",
                    "remove_seminar" => "/api/seminar/{id}"
                ]], 201);
        }
        else
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_seminar" => "/api/seminar",
                    "searchbyid_seminar" => "/api/seminar/{id}",
                    "develop_seminar" => "/api/seminar/develop",
                    "manage_seminar" => "/api/seminar/{id}/manage",
                    "remove_seminar" => "/api/seminar/{id}"
                ]], 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($data = Seminar::find($id))
        {
            $data->delete();
            return response()->json(
                [
                "message" => "Delete data success",
                "data" => $data,
                "links" => [
                    "display_seminar" => "/api/seminar",
                    "searchbyid_seminar" => "/api/seminar/{id}",
                    "develop_seminar" => "/api/seminar/develop",
                    "manage_seminar" => "/api/seminar/{id}/manage",
                ]], 200);
        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_seminar" => "/api/seminar",
                    "searchbyid_seminar" => "/api/seminar/{id}",
                    "develop_seminar" => "/api/seminar/develop",
                    "manage_seminar" => "/api/seminar/{id}/manage",
                    "remove_seminar" => "/api/seminar/{id}"
                ]], 404);
    }
}
