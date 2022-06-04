<html>

<head>
<title>DigitaGlobal</title>
    <link rel="stylesheet" href="../DigitGo/CSS/digitaglobal.css">
    <link rel="stylesheet" href="../DigitGo/CSS/our_menu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <style>
        *{
            margin:0;
            padding: 0;
            box-sizing:border-box;
            font-family: sans-serif;
        }

        input{
            display:none;
        }

        .dg_our_work_container{
            width: 100%;
            text-align: center;
        }

        #dg_our_work_container_title{
            font-weight: normal;
            font-size:35px;
            position: relative;
            margin: 40px 0;
        }

        #dg_our_work_container_title::before{
            content: '';
            position: absolute;
            width: 100px;
            height:3px;
            background-color: crimson;
            bottom: -20px;
            left:50%;
            transform: translateX(-50%);
            animation: animate1 4s linear infinite;
        }

        @keyframes animate1{
            0%{width: 100px;}
            50%{width: 200px;}
            100%{width: 100px;}
        }

        .dg_our_work_top_content{
            background-color: rgb(243, 243, 243);
            width: 90%;
            margin: 0 auto 20px auto;
            height: 60px;
            display: flex;
            align-items: center;
            border-radius: 5px;
            box-shadow: 3px 3px 5px lightgray;
        }

        #dg_our_work_title{
            height: 100%;
            background-color: rgb(221, 221, 221);
            line-height: 60px;
            padding: 0 50px;
            color: white;
        }

        #dg_our_work_lbl{
            display: inline-block;
            height: 100%;
            margin: 0 20px;
            line-height: 60px;
            font-size: 18px;
            color:gray;
            cursor:pointer;
            transition: color .5s;
        }

        #dg_our_work_lbl:hover{
            color: black;
        }

        .dg_our_work_photo_gallery{
            width:90%;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            grid-gap: 20px;
        }

        .dg_pic{
            position: relative;
            height:230px;
            border-radius: 10px;
            box-shadow: 3px 3px 5px lightgray;
            cursor: pointer;
            transition: .5s;
            
        }

        .dg_pic img{
        width:100%;
        height: 100%;
        border-radius: 10px;
        transition: .5s;
        }

        .dg_pic::before{
            content: "OUR WORK";
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            color:white;
            font-size:22px;
            font-weight: bold;
            width: 100%;
            margin-top: -100px;
            opacity: 0;
            transition: .3s;
            transition-delay: .2s;
            z-index: 1;
        }


        .dg_pic:after{
            content: "";
            position: absolute;
            width: 100%;
            bottom:0;
            left:0;
            border-radius: 10px;
            height: 0;
            background-color: rgba(0, 0, 0, .4);
            transition: .3s;
        }

        .dg_pic:hover::after{
            height: 100%;
        }

        .dg_pic:hover::before{
           margin-top: 0;
           opacity: 1;
        }

        #check_1:checked ~ .dg_our_work_container .dg_our_work_photo_gallery .dg_pic{
            opacity: 1;
            transform: scale(1);
            position: relative;
            transition: .5s;
        }

        #check_2:checked ~ .dg_our_work_container .dg_our_work_photo_gallery .website{
            transform: scale(1);
            opacity: 1;
            position: relative;
            
        }

        #check_2:checked ~ .dg_our_work_container .dg_our_work_photo_gallery .s_media,
        #check_2:checked ~ .dg_our_work_container .dg_our_work_photo_gallery .v_motion{
            opacity: 0;
            transform: scale(0);
            position: absolute;
            transition: 0s;
        }


        #check_3:checked ~ .dg_our_work_container .dg_our_work_photo_gallery .s_media{
            transform: scale(1);
            opacity: 1;
            position: relative;
            
        }

        #check_3:checked ~ .dg_our_work_container .dg_our_work_photo_gallery .v_motion,
        #check_3:checked ~ .dg_our_work_container .dg_our_work_photo_gallery .website{
            opacity: 0;
            transform: scale(0);
            position: absolute;
            transition: 0s;
        }



        #check_4:checked ~ .dg_our_work_container .dg_our_work_photo_gallery .v_motion{
            transform: scale(1);
            opacity: 1;
            position: relative;
            
        }

        #check_4:checked ~ .dg_our_work_container .dg_our_work_photo_gallery .s_media,
        #check_4:checked ~ .dg_our_work_container .dg_our_work_photo_gallery .website{
            opacity: 0;
            transform: scale(0);
            position: absolute;
            transition: 0s;
        }


        /*#check1:checked ~ .dg_our_work_container .dg_our_work_photo_gallery .dg_pic{
                opacity: 1;
                transform: scale(1);
                position: relative;
                transition: 0s;
        }


        #check2:checked ~ .dg_our_work_container 
        .dg_our_work_photo_gallery .website{
                transition: .5s;
                transform: scale(1);
                opacity: 1;
                position: relative;
        }

        #check3:checked ~ .dg_our_work_container 
        .dg_our_work_photo_gallery .s_media,
        #check4:checked ~ .dg_our_work_container 
        .dg_our_work_photo_gallery .v_motion{
                opacity: 1;
                transform: scale(1);
                position: relative;
                transition: .5s;
        }*/

    </style>

</head>

<body>
    <div class="wrapper">
        <!--<header>-->
        <div class="gb_section1">
            <div class="dg_banner">
                <img src="../DigitGo/Image/Graphic-Designing-in-Saudi-Arabia-by-SolutionDots-System.jpg"
                    id="dg_banner_img">
                <div class="db_banner_txtbox db_banner_txtbox1">
                    <h1>WE CREATE THE FUTURE</h1>
                    <span></span>
                    <p>We live on the cutting edge. Lets take you there.</p>
                    <button>OUR WORK</button>
                </div>
            </div>

            <div class="dg_banner1">
                <img src="../DigitGo/Image/1519801405383.jpg" id="dg_banner_img">
                <div class="db_banner_txtbox_1 db_banner_txtbox2">
                    <h1>WE BULID BRANDS</h1>
                    <span></span>
                    <p>Take your company from the unknown to known. Go Digita. Go Global.</p>
                    <button>OUR WORK</button>
                </div>
            </div>

            <div class="dg_banner2">
                <img src="../DigitGo/Image/social-media-marketing.jpg" id="dg_banner_img">
                <div class="db_banner_txtbox db_banner_txtbox3">
                    <h1>WE KNOW SOCIAL</h1>
                    <span></span>
                    <p>We help our clients win with digtal solutions that engage and convert.</p>
                    <button>OUR WORK</button>
                </div>
            </div>

            <div class="dg_banner3">
                <img src="../DigitGo/Image/istockphoto-613679762-170667a.jpg" id="dg_banner_img">
                <div class="db_banner_txtbox_1 db_banner_txtbox4">
                    <h1>WE ANALYZE YOUR BUSINESS FROM EVERY DIRECTION</h1>
                    <span></span>
                    <p>We help our clients with the best possible solutions for your business.</p>
                    <button>OUR WORK</button>
                </div>
            </div>
            <nav>
                <div class="logo"><img src="../DigitGo/Image/digita-logo-tm-w-uai-720x237.png"></div>
                <div class="meun">
                    <ul>
                        <li><a href="../DigitGo/main.php">WHO WE ARE</a></li>
                        <li><a href="">SERVICES</a></li>
                        <li><a href="../DigitGo/our_work.php">OUR WORK</a></li>
                        <li><a href="">BLOG</a></li>
                        <li><a href="">EVENTS</a></li>
                        <li><a href="">CAREERS</a></li>
                        <li><a href="">EXTRAS</a></li>
                        
                    </ul>
                </div>
            </nav>
        </div>

    <input type="radio" name="Photos" id="check_1" checked>
    <input type="radio" name="Photos" id="check_2">
    <input type="radio" name="Photos" id="check_3">
    <input type="radio" name="Photos" id="check_4">

    <div class="dg_our_work_container">
        <h1 id="dg_our_work_container_title">OUR WORK GALLERY</h1>
        <div class="dg_our_work_top_content">
            <h3 id="dg_our_work_title">OUR WORK</h3>
            <label id="dg_our_work_lbl" for="check_1">SHOW ALL</label>
            <label id="dg_our_work_lbl"  for="check_2">WEBSITE DEVELOPMENT</label>
            <label id="dg_our_work_lbl"  for="check_3">SOCIAL MEDIA</label>
            <label id="dg_our_work_lbl"  for="check_4">VIDEO AND MOTION GRAPHICS</label>

        </div>

        <div class="dg_our_work_photo_gallery">
            <div class="dg_pic website">
                <img src="../DigitGo/Image/our_work/14344097_1127512320617460_4699375681184093692_n.png">
            </div>

            <div class="dg_pic s_media">
                <img src="../DigitGo/Image/our_work/1833-Act.png">
            </div>

            <div class="dg_pic v_motion">
                <img src="../DigitGo/Image/our_work/798.png">    
            </div>

            <div class="dg_pic website">
                <img src="../DigitGo/Image/our_work/Digita-Global-Cell-129.png">
            </div>

            <div class="dg_pic v_motion">
                <img src="../DigitGo/Image/our_work/FBC-WEEK-1-_-CELL-91.jpg">    
            </div>

            <div class="dg_pic s_media">
                <img src="../DigitGo/Image/our_work/jem-logo-black2.png">
            </div>

            <div class="dg_pic v_motion">
                <img src="../DigitGo/Image/our_work/ProBiz-Mock-up-3.png">    
            </div>

            <div class="dg_pic website">
                <img src="../DigitGo/Image/our_work/UWI-GGW-10k.png">
            </div>

            <div class="dg_pic s_media">
                <img src="../DigitGo/Image/our_work/uwi-tv-Cell-6.png">
            </div>

            <div class="dg_pic v_motion">
                <img src="../DigitGo/Image/our_work/Video+Stats.png">    
            </div>


            <div class="dg_pic website">
                <img src="../DigitGo/Image/our_work/14344097_1127512320617460_4699375681184093692_n.png">
            </div>

            <div class="dg_pic s_media">
                <img src="../DigitGo/Image/our_work/1833-Act.png">
            </div>

            <div class="dg_pic v_motion">
                <img src="../DigitGo/Image/our_work/798.png">    
            </div>

            <div class="dg_pic website">
                <img src="../DigitGo/Image/our_work/Digita-Global-Cell-129.png">
            </div>

            <div class="dg_pic v_motion">
                <img src="../DigitGo/Image/our_work/FBC-WEEK-1-_-CELL-91.jpg">    
            </div>

            <div class="dg_pic s_media">
                <img src="../DigitGo/Image/our_work/jem-logo-black2.png">
            </div>

            <div class="dg_pic v_motion">
                <img src="../DigitGo/Image/our_work/ProBiz-Mock-up-3.png">    
            </div>

            <div class="dg_pic website">
                <img src="../DigitGo/Image/our_work/UWI-GGW-10k.png">
            </div>

            <div class="dg_pic s_media">
                <img src="../DigitGo/Image/our_work/uwi-tv-Cell-6.png">
            </div>

            <div class="dg_pic v_motion">
                <img src="../DigitGo/Image/our_work/Video+Stats.png">    
            </div>

        </div>
    </div>


    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="../DigitGo/Javascript/digitalglobal.js"></script>
    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function () {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("nav").style.top = "0";
            } else {
                document.getElementById("nav").style.top = "-50px";
            }
            prevScrollpos = currentScrollPos;
        }


        // Slide every slideDelay seconds
        const slideDelay = 3000;

        const dynamicSlider = document.getElementById("slider");

        var curSlide = 0;
        window.setInterval(() => {
            curSlide++;
            if (curSlide === dynamicSlider.childElementCount) {
                curSlide = 0;
            }

            // Actual slide
            dynamicSlider.firstElementChild.style.setProperty("margin-left", "-" + curSlide + "00%");
        }, slideDelay);
    </script>

    <script>
        (function ($, window, document) {
            $.fn.goTop = function (options) {
                var defaults = {
                    scrollTop: 100,
                    scrollSpeed: 1000,
                    fadeInSpeed: 1000,
                    FadeOutSpeed: 500
                };
                var options = $.extend(defaults, options);
                var $this = $(this);
                $(window).on('scroll', function () {
                    if ($(window).scrollTop() > options.scrollTop) {
                        $this.fadeIn(options.fadeInSpeed);
                    } else {
                        $this.fadeOut(options.FadeOutSpeed);
                    }
                })
                $this.on('click', function () {
                    $('html,body').animate({
                        'scrollTop': 0
                    }, options.speed)
                })
            }
        })(jQuery, window, document)

        $('#go-top').goTop({
            scrollTop: 100,
            scrollSpeed: 1000,
            fadeInSpeed: 1000,
            FadeOutSpeed: 500
        })




        const counters = document.querySelectorAll(".count");
        const speed = 200;

        function numberWithCommas(x) {
            return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
        }

        counters.forEach((counter) => {
            const updateCount = () => {
                const target = parseInt(+counter.getAttribute("data-target"));
                const count = parseInt(+counter.innerText);
                const increment = Math.trunc(target / speed);
                console.log(increment);

                if (count < target) {
                    counter.innerText = count + increment;
                    setTimeout(updateCount, 1);
                } else {
                    count.innerText = target;
                }
            };
            updateCount();
        });




        var delay = 1500;
        var sliderRadios = document.getElementsByName("dg_ourwork_slider");
        var index = 0
        var imageCount = sliderRadios.length;

        setInterval(function () {
            index++;
            if (index > imageCount - 1) {
                index = 0;
            }
            sliderRadios[index].click();
            console.log(sliderRadios[index].id);
        }, delay);
    </script>
</body>
</html>




<!--VISUAL IDENTITY
BROCHURE & KIT DESIGN
BANNER & BILLBOARD DESIGN
BOOK DESIGN
PRINT DESIGN
PRODUCT PACKAGING DESIGN
CALENDAR DESIGN
GAME DEVELOPMENT-->