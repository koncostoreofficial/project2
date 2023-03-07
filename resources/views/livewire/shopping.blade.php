<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    Keranjang
                </div>
                <div class="card-body">
                    {{ $jumlah }}
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Belanjaan Saya
                </div>
                <div class="card-body">
                    @foreach ($datas as $item)
                    <p>{{ $item->nama_barang }}
                    <button class="btn btn-danger" wire:click="destroy({{ $item->id}})">delete</button>
                    @endforeach</p>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    Produk
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="card">
                                <img src="{{ asset('gambar/deck.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">deck Skateboard</h5>
                                        <p class="card-text">deck etaks 8,0/8,1</p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Rp. 550,000,00</li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('deck Skateboad','5500000')">BELI</button>
                                    </div>     
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="{{ asset('gambar/truck.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">deck Skateboard</h5>
                                    <p class="card-text">deck etaks 8,0/8,1</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Rp. 550,000,00</li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <button class="btn btn-primary">BELI</button>
                                </div>     
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="{{ asset('gambar/wheels.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">wheels spprit Skateboad</h5>
                                    <p class="card-text">wheels 52/53</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Rp. 550,000,00</li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <button class="btn btn-primary">BELI</button>
                                </div>     
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="{{ asset('gambar/bearing.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">bearing</h5>
                                    <p class="card-text">bearing etaks 8,0/8,1</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Rp. 550,000,00</li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <button class="btn btn-primary">BELI</button>
                                </div>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>