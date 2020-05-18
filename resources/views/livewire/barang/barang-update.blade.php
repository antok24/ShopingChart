<form wire:submit.prevent="updatebarang">
    <div class="form-group row">
        <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
        <div class="col-sm-4">
            <input type="text" name="kode_barang" wire:model="kode_barang" class="form-control @error('kode_barang')is-invalid @enderror" autocomplete="off" readonly>
            @error('kode_barang') <span class="error text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-4">
            <input type="text" name="nama_barang" wire:model="nama_barang" class="form-control @error('nama_barang')is-invalid @enderror" autocomplete="off">
            @error('nama_barang') <span class="error text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="tahun_perolehan" class="col-sm-2 col-form-label">Tahun Perolehan</label>
        <div class="col-sm-4">
            <input type="text" name="tahun_perolehan" wire:model="tahun_perolehan" class="form-control @error('tahun_perolehan')is-invalid @enderror" autocomplete="off">
            @error('tahun_perolehan') <span class="error text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="button" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-4">
            <button type="submit" class="bg-warning text-white w-32 px-4 py-1 hover:bg-red-600 rounded border shadow">Update</button>
        </div>
    </div>
</form>