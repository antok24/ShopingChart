        <form wire:submit.prevent="addDataTranslator">
            <div class="form-group row">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-4">
                  <input type="text" wire:model="nik" class="form-control @error('nik') is-invalid @enderror">
                  @error('nik') <span class="error text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-4">
                    <input type="text" name="nama" wire:model="nama" class="form-control @error('nama') is-invalid @enderror">
                    @error('nama') <span class="error text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="ijazah" class="col-sm-2 col-form-label">Ijazah Terakhir</label>
                <div class="col-sm-4">
                    <input type="text" name="ijazah" wire:model="ijazah" class="form-control @error('ijazah')is-invalid @enderror">
                    @error('ijazah') <span class="error text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="bidangkeahlian" class="col-sm-2 col-form-label">Bidang Keahlian</label>
                <div class="col-sm-4">
                    <input type="text" name="bidang_keahlian" wire:model="bidang_keahlian" class="form-control @error('bidang_keahlian')is-invalid @enderror">
                    @error('bidang_keahlian') <span class="error text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary shadow float-right">Save</button>
                </div>
            </div>
        </form>
