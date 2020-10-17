<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-12">
                <div class="single-footer-widget">
                    <h6>TractorOnTheGo</h6>
                    <ul class="footer-nav">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">API</a></li>
                        <li><a href="#">List your Tractor</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6  col-md-12">
                <div class="single-footer-widget newsletter">
                    <h6>Email updates</h6>
                    <p>Stay with us via email notifications for constant updates on new features, news and new tractor
                        locations.</p>
                    <div id="mc_embed_signup">
                        <form target="_blank" novalidate="true"
                              action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                              method="get" class="form-inline">

                            <div class="form-group row" style="width: 100%">
                                <div class="col-lg-8 col-md-12">
                                    <input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                               type="text">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <button class="nw-btn primary-btn">Subscribe<span
                                            class="lnr lnr-arrow-right"></span></button>
                                </div>
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-12">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">IG <a href="#">(@TractorOnTheGo)</a></h6>
                    <ul class="instafeed d-flex flex-wrap">
                        <li><img src="{{asset('assets/img/i1.jpg')}}" alt=""></li>
                        <li><img src="{{asset('assets/img/i2.jpg')}}" alt=""></li>
                        <li><img src="{{asset('assets/img/i3.jpg')}}" alt=""></li>
                        <li><img src="{{asset('assets/img/i4.jpg')}}" alt=""></li>
                        <li><img src="{{asset('assets/img/i5.jpg')}}" alt=""></li>
                        <li><img src="{{asset('assets/img/i6.jpg')}}" alt=""></li>
                        <li><img src="{{asset('assets/img/i7.jpg')}}" alt=""></li>
                        <li><img src="{{asset('assets/img/i8.jpg')}}" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                TOG Services Nig. Ltd. All rights reserved
                <!-- | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="https://www.facebook.com/tractoronthego/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/tog_ng" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/tractoronthego/" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCwPH1RiVRoY-twvIicGpg9w" target="_blank"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->



<script>
    var options = {
        minimumInputLength: 1,
        ajax: {
            url: 'https://autocomplete.geocoder.cit.api.here.com/6.2/suggest.json',
            delay: 250,
            dataType: 'json',
            data: function (params) {
                return {
                    query: params.term,
                    app_id: 'nXD9LtvKImo6jjKRHj9M',
                    app_code: 'KxeD2mPjPl-imYy3b1JekQ',
                    beginHighlight: '<b>',
                    endHighlight: '</b>',
                    country: 'NGA'
                };
            },
            processResults: function (data) {
                return {
                    results: $.map(data.suggestions, function (obj) {
                        return { id: obj.locationId, text: obj.label.split(', ').reverse().join(', ') };
                    })
                };
            }
        },
        escapeMarkup: function (markup) { return markup; }
    };

    $('#location').select2(options).on('select2:select', function (e) {
        $.getJSON('https://geocoder.cit.api.here.com/6.2/geocode.json', {
            app_id: 'nXD9LtvKImo6jjKRHj9M',
            app_code: 'KxeD2mPjPl-imYy3b1JekQ',
            locationId: e.params.data.id
        });
    });
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e453af1298c395d1ce7c150/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

