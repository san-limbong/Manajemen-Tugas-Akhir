<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data success",
                    "data" => $data,
                    "links" => [
                        "searchbyid_profile" => "/api/profile/{id}",
                        "manage_profile" => "/api/profile/{id}/manage",
                        "remove_profile" => "/api/profile/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_profile" => "/api/profile",
                    "searchbyid_profile" => "/api/profile/{id}",
                    "manage_profile" => "/api/profile/{id}/manage",
                    "remove_profile" => "/api/profile/{id}"
                ]], 404);
    }

    public function show($id)
    {
        $data = User::find($id);

        if($data){
            return response()->json(
                    [
                    "message" => "Retrieve data with id success",
                    "data" => $data,
                    "links" => [
                        "display_profile" => "/api/profile",
                        "manage_profile" => "/api/profile/{id}/manage",
                        "remove_profile" => "/api/profile/{id}"
                    ]], 200);

        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_profile" => "/api/profile",
                    "searchbyid_profile" => "/api/profile/{id}",
                    "manage_profile" => "/api/profile/{id}/manage",
                    "remove_profile" => "/api/profile/{id}"
                ]], 404);
    }

   
    public function update(Request $request, $id)
    {
        if($data = User::find($id))
        {   
            $name = $request->name;
            $username = $request->username;
            $nomorinduk = $request->nomorinduk;
            $tanggallahir = $request->tanggallahir;
            $tempatlahir = $request->tempatlahir;
            $prodi = $request->nomorinduk;
            $email = $request->email;
            $notelp = $request->notelp;
            $jeniskelamin = $request->jeniskelamin;
            $alamat = $request->alamat;
            $agama = $request->agama;
            $image = $request->image;
            //Petunjuk is_admin bertipe Boolean, maka nilainya :
            // 1 = Admin
            // 0 = Bukan Admin
            $is_admin = $request->is_admin;

            $data->name = $name;
            $data->username = $username;
            $data->nomorinduk = $nomorinduk;
            $data->tanggallahir = $tanggallahir;
            $data->tempatlahir = $tempatlahir;
            $data->prodi = $prodi;
            $data->email = $email;
            $data->notelp = $notelp;
            $data->jeniskelamin = $jeniskelamin;
            $data->alamat = $alamat;
            $data->agama = $agama;
            $data->image = $image;

            //Petunjuk is_admin bertipe Boolean, maka nilainya :
            // 1 = Admin
            // 0 = Bukan Admin
            $data->is_admin = $is_admin;
            $data->save();

            return response()->json(
                [
                "message" => "Update data success",
                "data" => $data,
                "links" => [
                    "display_profile" => "/api/profile",
                    "searchbyid_profile" => "/api/profile/{id}",
                    "remove_profile" => "/api/profile/{id}"
                ]], 201);
        }
        else
            return response()->json(
                [
                "error_message" => "Incomplete or incorrect data fails the validation process",
                "links" => [
                    "display_profile" => "/api/profile",
                    "searchbyid_profile" => "/api/profile/{id}",
                    "manage_profile" => "/api/profile/{id}/manage",
                    "remove_profile" => "/api/profile/{id}"
                ]], 400);
    }

    
    public function destroy($id)
    {
        if($data = User::find($id))
        {
            $data->delete();
            return response()->json(
                [
                "message" => "Delete data success",
                "data" => $data,
                "links" => [
                    "display_profile" => "/api/profile",
                    "searchbyid_profile" => "/api/profile/{id}",
                    "manage_profile" => "/api/profile/{id}/manage",
                ]], 200);
        }
        else
            return response()->json(
                [
                "error_message" => "Data Not Found",
                "links" => [
                    "display_profile" => "/api/profile",
                    "searchbyid_profile" => "/api/profile/{id}",
                    "manage_profile" => "/api/profile/{id}/manage",
                    "remove_profile" => "/api/profile/{id}"
                ]], 404);
    }
}
