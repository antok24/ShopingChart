<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Data Pegawai</h1>
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
        <livewire:pegawai.pegawai-update>
    @else
        <livewire:pegawai.pegawai-create>
    @endif
  
    <div class="col-md-9 mb-5">
      <div class="row">
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">NIP</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tempat, Tanggal Lahir</th>
                  <th scope="col">Email</th>
                  <th scope="col">@</th>
                </tr>
              </thead>
              <tbody>
                <?php $no= 1 ?>
                @foreach ($pegawai as $a)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $a->nip }}</td>
                  <td>{{ $a->nama_pegawai }}</td>
                  <td>{{ $a->tempat_lahir }},{{ date('j F Y', strtotime($a->tanggal_lahir)) }}</td>
                  <td>{{ $a->email }}</td>
                  <td>
                    <button wire:click="getPegawai({{ $a->nip }})" class="btn btn-primary text-white">Edit</button>
                    <button wire:click="delete({{ $a->nip }})" class="btn btn-danger text-white">Delete</button>
                  </td>
                </tr>
                @endforeach
    
                {{ $pegawai->links() }}
              </tbody>
            </table>
      </div>
    </div>
</main>
