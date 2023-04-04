<div class="col-md-6 col-lg-4">
    <div class="ftco-footer-widget mb-5">
        <h2 class="ftco-heading-2">Subscribe Us!</h2>
        <form action="/news-letter" class="subscribe-form" method="post">
        @csrf
            <div class="form-group">
                <input type="email" class="form-control mb-2 text-center" name="email" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="form-control submit px-3">
            </div>
        </form>
    </div>
</div>