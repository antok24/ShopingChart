<div class="col-md-4 mb-4">
    <form action="" wire:submit.prevent="updatebuku">
        <div class="form-group">
            <label for="nama_buku" class="name">Judul Buku</label>
            <input type="text" name="nama_buku" wire:model="nama_buku" class="form-control @error('nama_buku')is-invalid @enderror">
            @error('nama_buku') <span class="error text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="penerbit" class="name">Penerbit</label>
            <input type="text" name="penerbit" wire:model="penerbit" class="form-control @error('penerbit')is-invalid @enderror">
            @error('penerbit') <span class="error text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="tahun_terbit" class="name">Tahun Penerbitan</label>
            <input type="text" name="tahun_terbit" wire:model="tahun_terbit" class="form-control @error('tahun_terbit')is-invalid @enderror">
            @error('tahun_terbit') <span class="error text-danger">{{ $message }}</span>@enderror
        </div>
         <button type="submit" class="bg-warning text-white w-32 px-4 py-1 hover:bg-red-600 rounded border shadow">Update</button>
    </form>
</div>
