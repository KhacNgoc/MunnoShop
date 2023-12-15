
<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>Đăng kí nhận bảng tin</h4>
{{--                        <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>--}}
                        <form action="{{route('subscribe')}}" method="post" class="newsletter-inner">
                            @csrf
                            <input name="email" placeholder="Email của bạn" required="" type="email">
                            <button class="btn" type="submit">Đăng kí</button>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->
