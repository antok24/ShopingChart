<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Data Buku</h1>
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
    
    @if ($form)
        <livewire:buku.buku-update>
    @else
        <livewire:buku.buku-create>
    @endif
  
    <div class="col-md-9 mb-5">
      <div class="row">
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Penerbit</th>
                  <th scope="col">Tahun Terbit</th>
                  <th scope="col">Options</th>
                </tr>
              </thead>
              <tbody>
                <?php $no= 1 ?>
                @foreach ($buku as $a)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $a->nama_buku }}</td>
                  <td>{{ $a->penerbit }}</td>
                  <td>{{ $a->tahun_terbit }}</td>
                  <td>
                    <button wire:click="getBuku({{ $a->id }})" class="btn btn-primary text-white">Edit</button>
                    <button wire:click="deleteBuku({{ $a->id }})" class="btn btn-danger text-white">Delete</button>
                  </td>
                </tr>
                @endforeach
    
                {{ $buku->links() }}
              </tbody>
            </table>
      </div>
    </div>
  </main>