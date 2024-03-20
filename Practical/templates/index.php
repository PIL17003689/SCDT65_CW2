<?php $title = 'Weather Forecasting';
require __DIR__ . "/inc/header.php"; ?>

<div class="centered-body" style="margin-top:35vh;">
<div class="content">
        <small>Artificial Forecasting Intelligence</small>
        <h1 class="titleText">
            View a Forecast
        </h1>

        <div class="buttons">

            <input type="text" placeholder="Just a paceholder">

            <!-- The Glow Button -->
            <a href="https://stacksorted.com/" class="GlowingButton" target="_blank">

                <!-- Glow -->
                <div class="GlowingButton__glowWrap l"><span class="GlowingButton__glow"></span></div>
                <div class="GlowingButton__glowWrap r"><span class="GlowingButton__glow"></span></div>
                <!-- /Glow -->
                <!-- Overlay -->
                <span class="GlowingButton__overlay"></span>
                <!-- Overlay -->
                <!-- Content -->
                <div class="GlowingButton__content">
                    <span>Visit Stacksorted</span>
                    <span>Visit Stacksorted</span>
                </div>
                <!-- /Content -->


            </a>
            <!-- /The Glow Button -->
        </div>
    </div>
</div>
<script type="importmap">
    {
      "imports": {
        "three": "https://unpkg.com/three@0.158.0/build/three.module.js",
        "three/addons/": "https://unpkg.com/three@0.158.0/examples/jsm/"
      }
    }
</script>
<div class="centered-body" style="margin-top:20vh;">

</div>

<?php require __DIR__ . "/inc/footer.php"; ?> 