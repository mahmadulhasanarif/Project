<div class="modal fade" id="addContactModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form method="POST" action="" id="addForm">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Contact Add page</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="errorMsg"></div>

                <div class="modal-body">
                    <div class="mb">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name">
                    </div>
                    <div class="mb">
                        <label for="phone" class="col-form-label">Phone:</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter your phone">
                    </div>
                    <div class="mb">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter your Email">
                    </div>
                    <div class="mb">
                        <label for="address" class="col-form-label">Address:</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter your address">
                    </div>
                    <div class="form-group">
                        <label for="message" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="addContact" class="btn btn-primary addContact">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>