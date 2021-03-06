<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="Modern UI CSS">
    <meta name="author" content="Sergey Pimenov">
    <meta name="keywords" content="windows 8, modern style, modern ui, style, modern, css, framework">

    <link href="css/modern.css" rel="stylesheet">
    <link href="css/modern-responsive.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet" type="text/css">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">

    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/google-analytics.js"></script>
    <script src="js/github.info.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>

    <script src="js/carousel.js"></script>

    <title>Modern UI CSS</title>
</head>
<body class="modern-ui" onload="prettyPrint()">
    <div class="page secondary">
        <? include("header.php")?>

        <div class="page-header">
            <div class="page-header-content">
                <h1>Carousel<small>demo</small></h1>
                <a href="/" class="back-button big page-back"></a>
            </div>
        </div>

        <div class="page-region">
            <div class="page-region-content">
                <div class="grid">
                    <div class="row">
                        <div class="span5">
                            <div class="carousel span5" style="height: 300px;" data-role="carousel" data-param-effect="slowdown" data-param-direction="left" data-param-duration="1500" data-param-period="4000">
                                <div class="slides">
                                    <div class="slide image" id="slide1">
                                        <img src="images/1.jpg" />
                                        <div class="description">
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                        </div>
                                    </div>
                                    <div class="slide image" id="slide2">
                                        <img src="images/2.jpg" />
                                        <div class="description">
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                        </div>
                                    </div>
                                    <div class="slide image" id="slide3">
                                        <img src="images/3.jpg" />
                                        <div class="description">
                                            This super beast eats fresh human flesh. She claws picking his nose, uttering at the same contented purring, and tooth picks out of leftover meat.
                                        </div>
                                    </div>
                                </div>


                                <span class="control left">&#8249;</span>
                                <span class="control right">&#8250;</span>

                            </div>
                        </div>

                        <div class="span5">
                            <div class="carousel span5" style="height: 300px;" data-role="carousel" data-param-effect="fade" data-param-direction="left" data-param-period="3000" data-param-markers="off">
                                <div class="slides">
                                    <div class="slide image" id="slide11">
                                        <img src="images/1.jpg" />
                                        <div class="description">
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                        </div>
                                    </div>
                                    <div class="slide image" id="slide21">
                                        <img src="images/2.jpg" />
                                        <div class="description">
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                        </div>
                                    </div>
                                    <div class="slide image" id="slide31">
                                        <img src="images/3.jpg" />
                                        <div class="description">
                                            This super beast eats fresh human flesh. She claws picking his nose, uttering at the same contented purring, and tooth picks out of leftover meat.
                                        </div>
                                    </div>
                                </div>


                                <span class="control left">&#8249;</span>
                                <span class="control right">&#8250;</span>

                            </div>
                        </div>
                    </div>
                </div>

                <h2>Component definition</h2>

<pre class="prettyprint linenums span10">
    &lt;div class="carousel" data-role="carousel"&gt;
        &lt;div class="slides"&gt;
            &lt;div class="slide image" id="slide1"&gt;
                &lt;img /&gt;
                &lt;div class="description"&gt;
                    Description text here...
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="slide mixed" id="slide2"&gt;
                &lt;img /&gt;
                &lt;div class="description"&gt;
                    Description text here...
                &lt;/div&gt;
            &lt;/div&gt;
            ...
        &lt;/div&gt;

        &lt;span class="control left"&gt;&#8249;&lt;/span&gt;
        &lt;span class="control right"&gt;&#8250;&lt;/span&gt;

    &lt;/div&gt;
</pre>
                <p>You can manual set the <code>width</code> and <code>height</code> of Carousel.</p>

                <p>
                    For use carousel you mus include <code>carousel.js</code> in head of you page and add attribute <code>data-role="carousel"</code> to carousel object.
                    To set specific parameters such as direction, duration, period, etc. you must add param data-param-* to carousel object.
                </p>

                <h3>Params:</h3>
                <ul class="unstyled">
                    <li><strong>auto</strong> - auto start carousel sliding (default: true)</li>
                    <li><strong>period</strong> - slide change period (default: 6000)</li>
                    <li><strong>duration</strong> - effect duration period (default: 1000)</li>
                    <li><strong>effect</strong> - animation effect. available: <em>slide, fade, slowdown, switch</em> (default: slide)</li>
                    <li><strong>direction</strong> - animation direction (default: right)</li>
                    <li><strong>markers</strong> - on|off slide markers (default: on)</li>
                    <li><strong>arrows</strong> - on|off slide arrows (default: on)</li>
                    <li><strong>stop</strong> - on|off slide animation on mouse over (default: on)</li>
                </ul>

<pre class="prettyprint linenums span10">
    &lt;div class="carousel" data-role="carousel" data-param-auto="false" data-param-effect="fade"&gt;
        ...
    &lt;/div&gt;
</pre>

                <h2>Javascript</h2>
                <p>Include in head <code>carousel.js</code></p>

            </div>
        </div>
        <? include("footer.php")?>

    </div>
    <?php include("counter.php");?>

</body>
</html>