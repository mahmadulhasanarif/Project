<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">SL NO</th>
        <th scope="col">Name</th>
        <th scope="col">Created_AT</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
      <tr>
        <th scope="row">{{ $categories->firstItem()+$loop->index }}</th>
        <td>{{ $category->name }}</td>
        <td>{{ Carbon\Carbon::parse($product->price)->difForHumans() }}</td>
        <td>
            <button type="button" class="btn btn-success updateButton"
            data-bs-toggle="modal" data-bs-target="#updateModal"
            data-id = "{{ $category->id }}",
            data-name = "{{ $category->name }}">
                <i class="fa-solid fa-pen-to-square"></i>
            </button>
            <button type="button" id="deleteButton" class="btn btn-danger deleteButton"
            data-id={{ $category->id }} ><i class="fa-solid fa-xmark"></i></button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $categories->links() }}