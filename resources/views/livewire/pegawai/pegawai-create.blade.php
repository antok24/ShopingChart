<form wire:submit.prevent="simpanpegawai">
    <div class="form-group row">
        <label for="nik" class="col-sm-2 col-form-label">NIP</label>
        <div class="col-sm-4">
            <input type="text" name="nip" wire:model="nip" class="form-control @error('nip')is-invalid @enderror" autocomplete="off">
            @error('nip') <span class="error text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="nama_pegawai" class="col-sm-2 col-form-label">Nama Pegawai</label>
        <div class="col-sm-4">
            <input type="text" name="nama_pegawai" wire:model="nama_pegawai" class="form-control @error('nama_pegawai')is-invalid @enderror" autocomplete="off">
            @error('nama_pegawai') <span class="error text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-4">
            <input type="text" name="tempat_lahir" wire:model="tempat_lahir" class="form-control @error('tempat_lahir')is-invalid @enderror" autocomplete="off">
            @error('tempat_lahir') <span class="error text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-4">  
            <input id="date" type="text" wire:model="tanggal_lahir" name="tanggal_lahir" data-input-mask="30/12/9999" class="form-control @error('tanggal_lahir')is-invalid @enderror" autocomplete="off">
            @error('tanggal_lahir') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-4">
            <input type="text" name="email" wire:model="email" class="form-control @error('email')is-invalid @enderror" autocomplete="off">
            @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="button" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-4">
            <button type="submit" class="bg-primary text-white w-32 px-4 py-1 hover:bg-red-600 rounded border shadow">Simpan</button>
        </div>
    </div>
</form>