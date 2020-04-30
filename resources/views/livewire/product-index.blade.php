<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mb-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
      <h1 class="h3">Products</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <input type="text" wire:model="search" placeholder="Search Something...." class="form-control mb-3">
        </div>
        @foreach ($products as $product)
            <div class="col-md-3 mt-2">
            <div class="card">
                <div class="card-header bg-primary">{{ $product->name }}</div>
                <div class="card-body">{{ $product->description }}</div>
                <div class="card-footer">
                    <button wire:click="addToCart({{ $product->id }})" class="btn btn-success">Add to Cart</button>
                </div>
            </div>
            </div>        
        @endforeach
    
        {{ $products->links() }}
    </div>
</main>