<div class="col-md-12" id="page2">
    <a href="{{ route('recevoir') }}" class="btn-video">

        <div id="videosList2" class="col-md-offset-1 col-md-4">

            <div class="video" id="video1">
                <h1 class="box">
                    <p style="padding-top: 38%;font-size: 40px">J'ai reçu</p>
                </h1>
                <img src="{{ asset('img/jairecu.JPG') }}" id="img-cover1" class="img-cover" >
                <video class="thevideo" loop preload="none" >
                    <source src="{{ asset("video/video2.mp4") }}" type="video/mp4">
                </video>
            </div>
        </div>
    </a>

    <a href="{{ route('offrir') }}" class="btn-video">

        <div id="videosList" class="col-md-offset-2 col-md-4">

            <div class="video"  id="video2">
                <h1 class="box">
                    <p style="padding-top: 38%;font-size: 40px;">J'offre</p>
                </h1>
                <img src="{{ asset('img/video-img.JPG') }}" id="img-cover2" class="img-cover" >
                <video class="thevideo" loop preload="none">
                    <source src="{{ asset("video/donne-coffret (online-video-cutter.com).mp4") }}" type="video/mp4">
                </video>
            </div>
        </div>
    </a>

</div>
