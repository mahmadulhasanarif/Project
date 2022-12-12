<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form method="POST" action="" id="addForm">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Question Add page</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="errorMsg"></div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="category-name" class="col-form-label">Category Name:</label>
                        <select id="category_id" name="category_id"
                            class="form-control @error('category_id') is-invalid @enderror">
                            <option selected="">Select Category Name</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message" class="col-form-label">Question:</label>
                        <textarea class="form-control" placeholder="Enter Your Question" id="question_text"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="addQuestion" class="btn btn-primary addQuestion">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>