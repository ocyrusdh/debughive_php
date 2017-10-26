<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Debug Hive</title>

        <link rel="stylesheet" href="css/app.css">

    </head>
    <body>
        <div id="debughive">
            <div id="logo">
                <div :class="['hexagon', 'one', {'active' : active_nav == 0}]" @click="isActive(0)" v-text="nav[0].value"></div>
                <div :class="['hexagon', 'two', {'active' : active_nav == 1}]" @click="isActive(1)" v-text="nav[1].value"></div>
                <div :class="['hexagon', 'three', {'active' : active_nav == 2}]" @click="isActive(2)" v-text="nav[2].value"></div>
                <div class="debug">
                    <div class="head">
                        <div class="antena antena_l">
                            <div></div>
                        </div>
                        <div class="antena antena_r">
                            <div></div>
                        </div>
                    </div>
                    <div class="wing_l"></div>
                    <div class="wing_r"></div>
                </div>
                <div id="logo_text">ebug</div>
            </div>
            <div id="hive">
                <div class="connection_line"></div>
                <div class="container">
                    @for($i = 0; $i < 50; $i++)
                        <div>
                            <div class="hexagon"></div>
                            <div class="hexagon"></div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </body>
</html>
<script src="js/app.js"></script>