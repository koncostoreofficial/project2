<?php

namespace App\Http\Livewire;

use App\Models\Keranjang;
use Livewire\Component;

class Shopping extends Component
{
    public function simpan($nama_barang, $harga_barang)
    {
       $simpan = new Keranjang();
       $simpan->nama_barang = $nama_barang;
       $simpan->harga_barang = $harga_barang;
       $simpan->save();
    }
    public function destroy($idhapus)
    {
        $hapus = Keranjang::findOrFail($idhapus);
        $hapus->delete();
        $this->reset();
    }
    public function render()
    {
        return view('livewire.shopping',[
            'datas' => Keranjang::all(),
            'jumlah'=> Keranjang::sum('harga_barang'),
        ]);
    }
}
