<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mb-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-2 border-bottom">
      <h1 class="h3">Keranjang Belanja</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Selesaikan Belanjaan</div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse ($cart['products'] as $product)
                            <li class="list-group-item">
                                <span>{{ $product->name }} | harga : {{ $product->price }}</span>
                                <div class="float-right">
                                    <button wire:click="removeItem({{ $product->id }})" class="btn btn-warning">Hapus</button>
                                </div>
                            </li>
                        @empty
                            
                        @endforelse
                    </ul>
                </div>
                <div class="card-footer">
                    @if ($cart['products'])
                        <button wire:click="checkout" class="btn btn-success float-right">Check Out</button>
                    @endif
                    </div>
            </div>
        </div>
    </div>
</main>
