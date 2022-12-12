<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <form method="POST" action="" id="updateForm">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Question Update page</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="errorMsg"></div>
  
                <div class="modal-body">
                  <input type="hidden" id="up_id">
                    <div class="mb-3">
                        <label for="category-name" class="col-form-label">Category Name:</label>
                        <select id="up_category_id" name="category_id"
                            class="form-control @error('up_category_id') is-invalid @enderror">
                            <option selected="">Select Category Name</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message" class="col-form-label">Question:</label>
                        <textarea class="form-control" id="up_question_text">{{ $question->question_text }}</textarea>
                    </div>
                </div>
  
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="UpdateQuestion" class="btn btn-primary UpdateQuestion">Update</button>
                </div>
            </div>
        </div>
    </form>
  </div>