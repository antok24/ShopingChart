        <form wire:submit.prevent="addDataTranslator">
            <div class="form-group row">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-4">
                  <input type="text" wire:model="nik" class="form-control @error('nik') is-invalid @enderror" autocomplete="off">
                  @error('nik') <span class="error text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-4">
                    <input type="text" name="nama" wire:model="nama" class="form-control @error('nama') is-invalid @enderror" autocomplete="off">
                    @error('nama') <span class="error text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="ijazah" class="col-sm-2 col-form-label">Ijazah Terakhir</label>
                <div class="col-sm-4">
                    <input type="text" name="ijazah" wire:model="ijazah" class="form-control @error('ijazah')is-invalid @enderror" autocomplete="off">
                    @error('ijazah') <span class="error text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="bidangkeahlian" class="col-sm-2 col-form-label">Bidang Keahlian</label>
                <div class="col-sm-4">
                    <input type="text" name="bidang_keahlian" wire:model="bidang_keahlian" class="form-control @error('bidang_keahlian')is-invalid @enderror" autocomplete="off">
                    @error('bidang_keahlian') <span class="error text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="simpan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-3">
                    <button type="submit" class="bg-primary text-white w-32 px-4 py-1 hover:bg-red-600 rounded border shadow">Simpan</button>
                </div>
            </div>
        </form>
