<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Data Translator</h1>
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

    @if ($statusUpdate)
      <livewire:translator-update>
    @else
      <livewire:translator-create>
    @endif


    <div class="col-md-12 mb-5">
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nik</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Ijazah Akhir</th>
                    <th scope="col">Bidang Keahlian</th>
                    <th scope="col">Options</th>
                  </tr>
                </thead>
                <?php $no = 1 ?>
                @foreach ($translators as $a)
                <tbody>
                  <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $a->nik }}</td>
                    <td>{{ $a->nama }}</td>
                    <td>{{ $a->ijazah }}</td>
                    <td>{{ $a->bidang_keahlian }}</td>
                    <td>
                      <button wire:click="getTranslator({{ $a->id }})" class="bg-primary text-white w-32 px-4 py-1 hover:bg-red-600 rounded border shadow">Edit</button>
                      @if ($konfirmasi)
                        <button wire:click="delete({{ $a->id }})" class="bg-danger text-white w-32 px-4 py-1 hover:bg-red-600 rounded border shadow">Yakin ?</button>
                      @else
                        <button wire:click="konfirmasi({{ $a->id }})" class="bg-secondary text-white w-32 px-4 py-1 hover:bg-red-600 rounded border shadow">Delete</button>
                      @endif
                    </td>
                  </tr>
                </tbody>
                @endforeach

                {{ $translators->links() }}
              </table>
        </div>
      </div>
</main>

