
    <div class="col-md-4 mb-4">
        <form wire:submit.prevent="addStudent">
            <div class="form-group">
                <label for="name" class="name">Name</label>
                <input type="text" name="nama" wire:model="nama" class="form-control @error('nama') is-invalid @enderror">
                @error('nama') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="" class="email">Email</label>
                <input type="text" name="email" wire:model="email" class="form-control @error('email') is-invalid @enderror">
                @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

