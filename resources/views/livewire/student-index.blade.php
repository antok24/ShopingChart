<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Student</h1>
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
      <livewire:student-update>
  @else
      <livewire:student-create>
  @endif


  <div class="col-md-9 mb-5">
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Options</th>
              </tr>
            </thead>
            <tbody>
              <?php $no= 1 ?>
              @foreach ($students as $student)
              <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $student->nama }}</td>
                <td>{{ $student->email }}</td>
                <td>
                  <button wire:click="getStudent({{ $student->id }})" class="btn btn-primary text-white">Edit</button>
                  <button wire:click="delete({{ $student->id }})" class="btn btn-danger text-white">Delete</button>
                </td>
              </tr>
              @endforeach
  
              {{ $students->links() }}
            </tbody>
          </table>
    </div>
  </div>
</main>
