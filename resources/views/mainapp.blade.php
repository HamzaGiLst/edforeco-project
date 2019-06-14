@extends('layouts.app')

@section('title','main hub')

@section('header')
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        body{
           font-size: 15px;
        }
        * Carousel base class */
        .carousel {
            margin-bottom: 4rem;
        }
        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
            bottom: 3rem;
            z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
            height: 32rem;
            background-color: #777;
        }
        .carousel-item > img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 35rem;
        }
        .navbar{
            border-radius: 0px;
        }

        #footer {
            background: #343a40 !important;
        }
    </style>
@endsection
@section('content')
    @include('inc.header')
    @include('inc.hnav')
    @include('inc.slider')
    <div class="card">
        <div class="card-body justify-content-lg-center">
            <p>

                You should not have to upload images that are more than 72dpi if the dimensions are within the specs above. Also, keep in mind that some digital cameras may save the raw images as .tiff files with CMYK color profiles. When saving the images as .jpg files prior to upload, it is recommended that you select RGB color profile if possible. CMYK may not convert optimally, although it may be adequate for some images.
            </p>

            <div class="w-full">
                <header class="post__header">
                    <h1 class="text-center mb-0">Material Theme for PhpStorm</h1>
                    <div class="post__footer flex items-start justify-center py-2 px-0">
                        <div class="post__author text-center">
                            <img class="inline-block rounded-full w-12 mb-2" src="https://www.gravatar.com/avatar/0e7b6742f9d7e1a8a213d74b429b9e8f?s=130">
                            <div class="author__content leading-none">
<span class="label text-xs mb-0 mx-auto inline-block leading-loose">
<span class="text-grey">November 01, 2016</span>
<span class="text-grey"> / </span>
<a class="text-red whitespace-no-wrap hover:text-red-darker transition" href="/@ericlbarnes">Eric L. Barnes</a>
</span>
                            </div>
                        </div>
                    </div>
                </header>
                <p></p><p>I finally had a chance to install this <a href="https://github.com/ChrisRM/material-theme-jetbrains">Material theme</a> for PhpStorm and it’s really nice. Great colors, neat file type icons–including a Laravel icon for Blade and an elephant for the PHP files.</p>
                <p>The theme supports all JetBrains products including WebStorm and PyStorm. It also comes in a default style as shown in the screenshot above and a darker style that sets the IDE background to a black. My only minor complaint is it’s hard for me to make out the active file editor tab.</p>
                <h2>Material Theme Installation</h2>
                <ol>
                    <li>Open the Settings/Preferences dialog</li>
                    <li>Select Plugins.</li>
                    <li>Click Browse repositories and then search for Material Theme UI</li>
                    <li>Click Install plugin and confirm your intention to download and install the plugin.</li>
                    <li>Click OK in the Settings dialog and restart for the changes to take effect.</li>
                    <li>To switch the IDE theme (not the code color scheme), go to Tools -&gt; Material Theme and choose ‘Darker Theme’, ‘Default Theme’ or ‘Lighter Theme’.</li>
                </ol><p></p>
                <p><a class="text-red hover:text-red-darkest transition" href="https://github.com/ChrisRM/material-theme-jetbrains">Visit Resource →</a></p>

                <hr>
                <p class="text-sm">
<span class="mb-0 mx-auto inline-block"><b>Filed in:</b>
<a class="text-red hover:text-red-darker transition" href="/category/tools">Development Tools</a>
<span class="text-grey"> / </span>
<a class="link--black" href="/tag/phpstorm">PhpStorm</a>
</span>
                </p>
                <hr>
                <div class="hidden md:block py-8" style="border-top: 3px solid #ddd;">
                    <h3 class="text-xl mb1 text-center">Enjoy this? Get Laravel News delivered straight to your inbox every Sunday.</h3>
                    <p class="text-center text-sm"><b class="text-grey-darkest">No Spam, ever.</b> We'll never share your email&nbsp;address and you can opt&nbsp;out at any&nbsp;time.</p>
                    <form action="https://laravelnews.createsend.com/t/d/s/owwr/" method="post" class="newsletter-form" data-area="home">
                        <input type="hidden" id="fieldhrcf" name="cm-fd-hrcf-mn" value="6">
                        <input type="hidden" id="fieldhrcfdy" name="cm-fd-hrcf-dy" value="14">
                        <input type="hidden" id="fieldhrcfyr" name="cm-fd-hrcf-yr" value="2019">
                        <div class="flex w-full">
                            <input class="w-full flex-1 input w-full flex-1 border-r-0 rounded-r-none" type="email" placeholder="Email Address" name="cm-owwr-owwr" required="">
                            <button class="btn border-red p-4 bg-red rounded-r hover:bg-black transition newsletter-subscribe">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('inc.foot')
@endsection