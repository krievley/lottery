
<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<html data-wf-site="559b1c9738a10b456f040af0" data-wf-page="559b1c9738a10b456f040af2" data-wf-status='1'>
    <head>
        <meta charset="utf-8"><title>Lottery</title><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="generator" content="Webflow">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/lottery.webflow.css') }}">
        <script src="{{ asset('js/webfont.js') }}"></script>
        <script>
            WebFont.load({
                google: {
                  families: ["Roboto:300,regular","Roboto Condensed:regular"]
                }
            });
        </script>
        <script type="text/javascript" src="{{ asset('js/modernizr-2.7.1.js') }}"></script>
    </head>
    <body>
        <div class="w-section navbar">
            <div class="w-container">
                <div class="w-row">
                    <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6 left-nav">
                        <a class="w-inline-block" href="/">
                            <img class="logo" src="{{ asset('images/space-logo.svg') }}" width="37">
                            <div class="brand">Giveaway</div>
                        </a>
                    </div>
                    <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6 right-nav">
                        <a class="w-inline-block social-btn" href="http://facebook.com/webflow">
                            <img src="{{ asset('images/facebook-icon_black.svg') }}" width="25">
                        </a>
                        <a class="w-inline-block social-btn" href="http://twitter.com/webflowapp">
                            <img src="{{ asset('images/twitter-icon_black.svg') }}" width="25">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-section section hero">
            <div class="w-container container">
                <h1>We are always giving away cool stuff.<br>Sign up below to win.</h1>
                <div class="w-form sign-up-form">
                    <form class="w-clearfix" name="wf-form-signup-form" data-name="Signup Form" data-redirect="/success">
                        <input class="w-input field" type="email" placeholder="Enter your email address" name="email" data-name="Email" required="required">
                        <input class="w-button button" type="submit" value="Enter Current Lottery" data-wait="Please wait...">
                    </form>
                    <div class="w-form-done success-message">
                        <p>Thanks! You'll be the first to know.</p>
                        <p class="spread-word">Help spread the word!</p>
                        <div class="w-clearfix social-widget-wrapper">
                            <div class="w-widget w-widget-twitter social-widget">
                                <iframe src="//platform.twitter.com/widgets/tweet_button.html#url=http%3A%2F%2Fwebflow.com&amp;counturl=webflow.com&amp;text=Check%20out%20this%20site&amp;count=horizontal&amp;size=m&amp;dnt=true" scrolling="no" frameborder="0" allowtransparency="true" style="border: none; overflow: hidden; width: 110px; height: 20px;"></iframe>
                            </div>
                            <div class="w-widget w-widget-facebook social-widget">
                                <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2Fwebflow&amp;layout=button_count&amp;locale=en_US&amp;action=like&amp;show_faces=false&amp;share=false" scrolling="no" frameborder="0" allowtransparency="true" style="border: none; overflow: hidden; width: 90px; height: 20px;"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="w-form-fail error-message">
                        <p>Oops! Something went wrong while submitting the form. :(</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section grey" data-anchor="slide1">
            <div class="w-container">
                <h2 class="grey-heading">Morning Lottery</h2>
                <p>This lottery is open from 5:00am to 5:00pm.</p>
                <img class="infinite" src="{{ asset('images/infinite-loop.svg') }}" width="187">
            </div>
        </div>
        <div class="section">
            <div class="w-container">
                <h2 class="grey-heading">Evening Lottery</h2>
                <p>This lottery is open from 5:00pm to 5:00am.&nbsp;</p>
                <div>
                    <img class="phone-image" src="{{ asset('images/infinite-loop.svg') }}">
                </div>
            </div>
        </div>
        <div class="w-section social-section">
            <div class="w-container">
                <h2>Tell your friends.</h2>
                <p>Like earning free stuff? Refer more friends.</p>
                <div class="share-wrapper">
                    <div class="w-widget w-widget-facebook share-btn">
                        <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2Fwebflow&amp;layout=box_count&amp;locale=en_US&amp;action=like&amp;show_faces=false&amp;share=false" scrolling="no" frameborder="0" allowtransparency="true" style="border: none; overflow: hidden; width: 55px; height: 65px;"></iframe>
                    </div>
                    <div class="w-widget w-widget-twitter share-btn">
                        <iframe src="//platform.twitter.com/widgets/tweet_button.html#url=http%3A%2F%2Fwebflow.com&amp;counturl=webflow.com&amp;text=Check%20out%20this%20site&amp;count=vertical&amp;size=m&amp;dnt=true" scrolling="no" frameborder="0" allowtransparency="true" style="border: none; overflow: hidden; width: 55px; height: 62px;"></iframe>
                    </div>
                    <div class="w-widget w-widget-gplus share-btn">
                        <div class="g-plusone" data-href="http://webflow.com" data-size="tall" data-annotation="bubble" data-width="120" data-recommendations="false" id="___plusone_0" style="width: 50px; height: 60px; text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; background: transparent;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-section section grey">
            <div class="w-container">
                <img class="logo footer" src="{{ asset('images/space-logo.svg') }}" width="37">
                <a class="w-inline-block social-btn footer" href="http://twitter.com/webflowapp"><img src="{{ asset('images/twitter-icon_black.svg') }}"></a>
                <a class="w-inline-block social-btn footer" href="http://facebook.com/webflow"><img src="{{ asset('images/facebook-icon_black.svg') }}"></a>
                <a class="w-inline-block social-btn footer" href="mailto:contact@webflow.com"><img src="{{ asset('images/email-icon-black.svg') }}"></a>
            </div>
        </div>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/webflow.0ab006a10.js') }}"></script>
        <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    </body>
</html>
