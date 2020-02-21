<div class="modal fade" id="bdReview" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 rounded-0">
            <div class="modal-header">
                <h3 class="modal-title mb-3 text-uppercase head-border pb-2" id="exampleModalCenterTitle">Review</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/submit-review" id="formReview" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" data-rule="required|min:5"
                            class="form-control border-warning rounded-0" id="name" placeholder="Full Name">
                        <div class="invalid-feedback"></div>
                        <div class="valid-feedback"> </div>
                    </div>
                    <div class="form-group">
                        <label for="text">Email</label>
                        <input type="text" name="email" data-rule="required|email"
                            class="form-control border-warning rounded-0" id="email" placeholder="name@example.com">
                        <div class="invalid-feedback"></div>
                        <div class="valid-feedback"> </div>
                    </div>
                    <div class="form-group">
                        <label for="review">Review</label>
                        <textarea data-rule="required" name="message" class="form-control border-warning rounded-0"
                            id="review" rows="3"></textarea>
                        <div class="invalid-feedback"></div>
                        <div class="valid-feedback"> </div>
                    </div>
                    <button type="submit" id="submit" class="wp-btn-primary color-secondary">Submit</button>
                </form>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" id="submit" class="wp-btn-primary color-secondary">Submit</button>
            </div> --}}
        </div>
    </div>
</div>