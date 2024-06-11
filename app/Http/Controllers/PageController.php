<?php

namespace App\Http\Controllers;
//use App\Http\Controllers;\PageController;
use Illuminate\Http\Request;
use App\Models\Phone;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function home()
    {
        return view("home", ["key" => "home"]);
    }

    public function phone()
    {
        //$phone = Phone::all();
        $phone = Phone::orderBy('idhp', 'desc')->get();
        return view("phone" , ["key" => "phone", "mv" => $phone]);
    }

    public function about()
    {
        return view("about" , ["key" => "about"]);
    }

    public function faq()
    {
        return view("faq" , ["key" => "faq"]);
    }
    public function tambahhp()
    {
        return view("tambahhp" , ["key" => "phone"]);
    }
    public function savephone(Request $request)
    {
        $file_name = time().'-'.$request->file('gambar')->getClientOriginalName();
        $path = $request->file('gambar')->storeAs('gambar', $file_name, 'public');

        Phone::create([
            'namahp' => $request->namahp,
            'merek' => $request->merek,
            'harga' => $request->harga,
            'processor' => $request->processor,
            'gambar' => $path
        ]);
        return redirect('/phone')->with('alert', 'Data HandPhone Berhasil Disimpan');
    }

    public function formeditphone($id)
    {
        $phone = Phone::find($id);
        return view("form-edit",["key" => "phone", "mv" => $phone]);
    }

    public function updatephone($id, Request $request)
    {
        $phone = Phone::find($id);
        $phone->namahp = $request->namahp;
        $phone->merek = $request->merek;
        $phone->harga = $request->harga;
        $phone->processor = $request->processor;

        if($request->gambar)
        {
            if($phone->gambar)
            {
                Storage::disk('public')->delete($phone->gambar);
            }
            $file_name = time().'-'.$request->file('gambar')->getClientOriginalName();
            $path = $request->file('gambar')->storeAs('gambar', $file_name, 'public');
            $phone->gambar = $path;
        }
        $phone->save();

        return redirect("/phone")->with('alert', 'Data berhasil dirubah');
    }

    public function deletephone($id)
    {
        $phone = Phone::find($id);

        if($phone->gambar)
        {
            Storage::disk('public')->delete($phone->gambar);
        }
        $phone->delete();

        return redirect("/phone")->with('alert', 'Data Berhasil Dihapus');
    }

    public function login()
    {
        return view("login");
    }

    public function formedituser()
    {
        return view("formedituser", ["key" => ""]);
    }

    public function updateuser(Request $request)
{
    $user = Auth::user();

    if (Hash::check($request->password_lama, $user->password)) {
        if ($request->password_baru == $request->konfirmasi_password) {
            $user->password = Hash::make($request->password_baru);
            $user->save();

            return redirect("/user")->with("info", "Password Berhasil Di Ubah");
        } else {
            return redirect("/user")->with("info", "Password Gagal Di Ubah: Konfirmasi password tidak cocok");
        }
    } else {
        return redirect("/user")->with("info", "Password Lama salah");
    }
}
}
