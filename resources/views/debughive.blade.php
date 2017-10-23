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
                <div :class="['hexagon', 'one', {'active' : hexagons[0].active}]" @click="isActive(0)" v-text="hexagons[0].value"></div>
                <div :class="['hexagon', 'two', {'active' : hexagons[1].active}]" @click="isActive(1)" v-text="hexagons[1].value"></div>
                <div :class="['hexagon', 'three', {'active' : hexagons[2].active}]" @click="isActive(2)" v-text="hexagons[2].value"></div>
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
            </div>
            <div id="hive">
                <div>
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