<div>
    <h1>Products</h1>


    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
       Create
      </button>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)


          <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>
                <button @click="$dispatch('edit-mode', {id:{{$product->id}}})" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>



                {{-- <button onclick="confirmDelete({{ $product->id }})" class="btn btn-danger">Delete</button> --}}


            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <livewire:create-products/>
</div>
