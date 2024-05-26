

<x-page-layout  backgroundImageName="{{ asset($story->file_path) }}" :darkMode="$story->dark_mode" :cnavBackground="$story->cnav_background">
    <div class="flex flex-col pt-48 w-full h-full justify-between">
        <div class="flex flex-col gap-2">
            <div class="flex flex-col">
                <h1 class="text-6xl font-extrabold lowercase">the</h1>
                <h1 class="text-6xl font-black uppercase" style="color: {{$story->title_text_color}};">{{ $story->title }}</h1>
            </div>
            <p class="w-8/12" style="color: {{$story->description_text_color}};">{{ $story->description }}</p>
        </div>
        
        <div class="flex justify-start items-end w-full pb-16 gap-4">
            <div class="flex justify-between gap-4">
                @foreach ($nav_links as $index => $nav_link)
                    @if (isset($nav_link))
                        @if (get_class($nav_link) == 'App\Models\Story')
                            <a href="{{ route('pages.main-story', $nav_link->id) }}" class="flex items-center justify-center text-center text-xs font-semibold rounded-full bg-yellow-200 hover:bg-yellow-300 w-10 h-10">{{ $index + 1 }}</a>
                        @elseif(get_class($nav_link) == 'App\Models\Gallery')
                            <a href="{{ route('pages.gallery', $nav_link->id) }}" class="flex items-center justify-center text-center text-xs font-semibold rounded-full bg-yellow-200 hover:bg-yellow-300 w-10 h-10">{{ $index + 1 }}</a>
                        @elseif(get_class($nav_link) == 'App\Models\Timeline')
                            @if ($nav_link->stories->count() >= 1)
                                <a href="{{ route('pages.timeline', $nav_link->id) }}" class="flex items-center justify-center text-center text-xs font-semibold rounded-full bg-yellow-200 hover:bg-yellow-300 w-10 h-10">{{ $index + 1 }}</a>
                            @endif
                        @endif
                    @endif
                @endforeach
            </div>

            @if ($story->headline_id < 7)
            <div class="flex items-center gap-2 text-xs font-semibold {{ $story->dark_mode ? 'text-white' : 'text-black'}}">
                Next Story
                <a href="{{ route('pages.story', $story->headline_id + 1) }}"class="flex items-center justify-center text-center text-xs font-semibold rounded-full bg-yellow-200 hover:bg-yellow-300 w-10 h-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-last"><path d="m7 18 6-6-6-6"/><path d="M17 6v12"/></svg>
                </a>
                
            </div>
            @endif
        </div>
    </div>
</x-page-layout>

@if ($story->animation == 'snow')
    <div class="snow"></div>
@endif

@if ($story->animation == 'sakura')  
<script>
    var Sakura = function Sakura(selector, options) {
    var _this = this;

    if (typeof selector === 'undefined') {
        throw new Error('No selector present. Define an element.');
    }
    
    this.el = document.querySelector(selector); // Defaults for the option object, which gets extended below.

    var defaults = {
        className: 'sakura',
        // Classname of the petal. This corresponds with the css.
        fallSpeed: 1,
        // Speed factor in which the petal falls.
        maxSize: 14,
        // The maximum size of the petal.
        minSize: 10,
        // The minimum size of the petal.
        delay: 300,
        // Delay between petals.
        gradientColorStart: 'rgba(255, 183, 197, 0.9)',
        // Gradient color start (rgba).
        gradientColorEnd: 'rgba(255, 197, 208, 0.9)',
        // Gradient color end (rgba).
        gradientColorDegree: 120 // Gradient degree angle.
        
    }; // Merge defaults with user options.

    var extend = function extend(originalObj, newObj) {
        Object.keys(originalObj).forEach(function (key) {
            if (newObj && Object.prototype.hasOwnProperty.call(newObj, key)) {
            var origin = originalObj;
            origin[key] = newObj[key];
        }
        });
        return originalObj;
    };

    this.settings = extend(defaults, options); // Hide horizontal scrollbars on the target element.

    this.el.style.overflowX = 'hidden'; // Random array element

    function randomArrayElem(arr) {
        return arr[Math.floor(Math.random() * arr.length)];
    } // Random integer

    
    function randomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    } // Check for animation events.

    
    var prefixes = ['webkit', 'moz', 'MS', 'o', ''];

    function PrefixedEvent(element, type, callback) {
        for (var p = 0; p < prefixes.length; p += 1) {
            var animType = type;
            
            if (!prefixes[p]) {
                animType = type.toLowerCase();
            }
            
            element.addEventListener(prefixes[p] + animType, callback, false);
        }
    } // Check if the element is in the viewport.
    

    function elementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
    }
    
    this.createPetal = function () {
        if (_this.el.dataset.sakuraAnimId) {
        setTimeout(function () {
            window.requestAnimationFrame(_this.createPetal);
        }, _this.settings.delay);
    } // Name the animations. These have to match the animations in the CSS file.


        var animationNames = {
        blowAnimations: ['blow-soft-left', 'blow-medium-left', 'blow-soft-right', 'blow-medium-right'],
        swayAnimations: ['sway-0', 'sway-1', 'sway-2', 'sway-3', 'sway-4', 'sway-5', 'sway-6', 'sway-7', 'sway-8']
        }; // Get one random animation of each type and randomize fall time of the petals

        var blowAnimation = randomArrayElem(animationNames.blowAnimations);
        var swayAnimation = randomArrayElem(animationNames.swayAnimations);

        var fallTime = (document.documentElement.clientHeight * 0.007 + Math.round(Math.random() * 5)) * _this.settings.fallSpeed; // Create animations
        
        
        var animationsArr = ["fall ".concat(fallTime, "s linear 0s 1"), "".concat(blowAnimation, " ").concat((fallTime > 30 ? fallTime : 30) - 20 + randomInt(0, 20), "s linear 0s infinite"), "".concat(swayAnimation, " ").concat(randomInt(2, 4), "s linear 0s infinite")];
        var animations = animationsArr.join(', '); // Create petal and give it a random size.
        
        var petal = document.createElement('div');
        petal.classList.add(_this.settings.className);
        var height = randomInt(_this.settings.minSize, _this.settings.maxSize);
        var width = height - Math.floor(randomInt(0, _this.settings.minSize) / 3);
        petal.style.background = "linear-gradient(".concat(_this.settings.gradientColorDegree, "deg, ").concat(_this.settings.gradientColorStart, ", ").concat(_this.settings.gradientColorEnd, ")");
        petal.style.webkitAnimation = animations;
        petal.style.animation = animations;
        petal.style.borderRadius = "".concat(randomInt(_this.settings.maxSize, _this.settings.maxSize + Math.floor(Math.random() * 10)), "px ").concat(randomInt(1, Math.floor(width / 4)), "px");
        petal.style.height = "".concat(height, "px");
        petal.style.left = "".concat(Math.random() * document.documentElement.clientWidth - 100, "px");
        petal.style.marginTop = "".concat(-(Math.floor(Math.random() * 20) + 15), "px");
        petal.style.width = "".concat(width, "px"); // Remove petals of which the animation ended.

        PrefixedEvent(petal, 'AnimationEnd', function () {
        if (!elementInViewport(petal)) {
            petal.remove();
        }
        }); // Remove petals that float out of the viewport.

        PrefixedEvent(petal, 'AnimationIteration', function () {
            if (!elementInViewport(petal)) {
                petal.remove();
        }
        }); // Add the petal to the target element.

        _this.el.appendChild(petal);
        };

        this.el.setAttribute('data-sakura-anim-id', window.requestAnimationFrame(this.createPetal));
    };

    Sakura.prototype.start = function () {
    var animId = this.el.dataset.sakuraAnimId;

    if (!animId) {
        this.el.setAttribute('data-sakura-anim-id', window.requestAnimationFrame(this.createPetal));
    } else {
        throw new Error('Sakura is already running.');
    }
    };

    Sakura.prototype.stop = function () {
        var _this2 = this;
        
        var graceful = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
        var animId = this.el.dataset.sakuraAnimId;

    if (animId) {
        window.cancelAnimationFrame(animId);
        this.el.setAttribute('data-sakura-anim-id', '');
    } // Remove all current blossoms at once.
    // You can also set 'graceful' to true to stop new petals from being created.
    // This way the petals won't be removed abruptly.


    if (!graceful) {
        setTimeout(function () {
            var petals = document.getElementsByClassName(_this2.settings.className);

            while (petals.length > 0) {
            petals[0].parentNode.removeChild(petals[0]);
        }
        }, this.settings.delay + 50);
    }
    };
    
    var sakura = new Sakura('body', {
        colors: [
        {
            gradientColorStart: 'rgba(255, 183, 197, 0.9)',
            gradientColorEnd: 'rgba(255, 197, 208, 0.9)',
            gradientColorDegree: 120,
        },
        {
            gradientColorStart: 'rgba(255,189,189)',
            gradientColorEnd: 'rgba(227,170,181)',
            gradientColorDegree: 120,
        },
        {
            gradientColorStart: 'rgba(212,152,163)',
            gradientColorEnd: 'rgba(242,185,196)',
            gradientColorDegree: 120,
        },
    ]
    });
</script>
@endif

@if ($story->animation == 'fall')
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<script>
        // var colors = ["#227C70", "#FFBF00"];
    var colors = ["#227C70", "#FFBF00","#0002A1"];

    var id = null;
    function frame() {
        confetti({
            particleCount: 2,
            angle: 60,
            spread: 55,
            origin: { x: 0 },
            colors: colors,
        });

        confetti({
            particleCount: 2,
            angle: 120,
            spread: 55,
            origin: { x: 1 },
            colors: colors,
        });

        if (Date.now() < Date.now() + 15000) {
            id =  requestAnimationFrame(frame);
        }
    }

    window.onload = snow();

    $(document).ready(function() {
        $("#b-close").click(function() {
            // alert("page is loaded");
            $(".popup_this_container").hide();
            window.cancelAnimationFrame(id);
        });
    });

    function stop(){
        window.cancelAnimationFrame(id);

        setTimeout(() => {
            confetti.reset();
        }, 100);
    }

    // function fireworks() {
    //     var duration = 25 * 1000;
    //     var animationEnd = Date.now() + duration;
    //     var defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };

    //     function randomInRange(min, max) {
    //       return Math.random() * (max - min) + min;
    //     }

    //     var interval = setInterval(function () {
    //       var timeLeft = animationEnd - Date.now();

    //       if (timeLeft <= 0) {
    //         return clearInterval(interval);
    //       }

    //       var particleCount = 50 * (timeLeft / duration);
    //       // since particles fall down, start a bit higher than random
    //       confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 } }));
    //       confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 } }));
    //     }, 250);
    // }

    function snow() {
        function randomInRange(min, max) {
            return Math.random() * (max - min) + min;
        }

        (function frame() {
            confetti({
                particleCount: 1,
                startVelocity: 0,
                ticks: 500, // Adjust the number of ticks as needed
                origin: {
                    x: Math.random(),
                    y: Math.random() - 0.2
                },
                colors: ['#FF5722'],
                shapes: ['circle'],
                gravity: randomInRange(0.4, 0.6),
                scalar: randomInRange(0.4, 1),
                drift: randomInRange(-0.4, 0.4)
            });

        // Call the next frame
            requestAnimationFrame(frame);
        }());
    }
</script>
@endif