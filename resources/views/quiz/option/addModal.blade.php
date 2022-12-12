<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form method="POST" action="" id="addForm">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Option Add page</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="errorMsg"></div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="question-text" class="col-form-label">Question:</label>
                        <select id="question_id" class="form-control">
                            <option selected="">Select Question</option>
                            @foreach ($questions as $question)
                                <option value="{{ $question->id }}">{{ $question->question_text }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message" class="col-form-label">Option:</label>
                        <textarea class="form-control" placeholder="Enter option" id="option_text"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="points" class="col-form-label">Points:</label>
                        <input type="text" class="form-control" id="points" placeholder="Enter points">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="addOption" class="btn btn-primary addOption">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>