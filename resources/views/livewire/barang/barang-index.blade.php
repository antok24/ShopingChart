<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Data Barang</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
      </div>
    </div>
    @if (session()->has('message'))
        <div class="alert alert-success">
          {{ session('message') }}
        </div>
    @endif
    
    @if ($showform)
        <livewire:barang.barang-update>
    @else
        <livewire:barang.barang-create>
    @endif
  
    <div class="col-md-12 mb-5">
      <div class="row">
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Kode Barang</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Tahun Perolehan</th>
                  <th scope="col">Options</th>
                </tr>
              </thead>
              <tbody>
                <?php $no= 1 ?>
                @foreach ($barang as $a)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $a->kode_barang }}</td>
                  <td>{{ $a->nama_barang }}</td>
                  <td>{{ $a->tahun_perolehan }}</td>
                  <td>
                    <button wire:click="getBarang({{ $a->kode_barang }})" class="bg-primary text-white w-23 px-4 py-1 hover:bg-red-600 rounded border shadow">Edit</button>
                    @if ($konfirmasi)
                      <button wire:click="deletebarang({{ $a->kode_barang }})" class="bg-danger text-white w-23 px-4 py-1 hover:bg-red-600 rounded border shadow">Yakin ?</button>
                    @else
                      <button wire:click="konfirmasi({{ $a->kode_barang }})" class="bg-secondary text-white w-23 px-4 py-1 hover:bg-red-600 rounded border shadow">Delete</button>
                    @endif
                  </td>
                </tr>
                @endforeach
    
                {{ $barang->links() }}
              </tbody>
            </table>
      </div>
    </div>
</main>