<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <form method="POST" action="" id="updateForm">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Category Update page</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="errorMsg"></div>
  
                <div class="modal-body">
                  <input type="hidden" id="up_id">
                    <div class="mb-3">
                        <label for="category-name" class="col-form-label">Category Name:</label>
                        <input type="text" class="form-control" id="up_name" placeholder="Enter product name">
                    </div>
                </div>
  
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="UpdateCategory" class="btn btn-primary UpdateCategory">Update</button>
                </div>
            </div>
        </div>
    </form>
  </div>