import './bootstrap';
import 'flowbite';
import 'animate.css';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


// $(function () {
//     $('#circular_nav').hide();

//     $('#our_story_btn').click(function () {
//         $('#our_story_btn').hide();
//         $('#circular_nav').show();
//     });

//     $('#hide_circular_nav').click(function () {
//         $('#our_story_btn').show();
//         $('#circular_nav').hide();
//     })

//     $('.nav-item').mouseenter(function () {
//         $(this).find('.cnav-icon').show();
//     })

//     $('.nav-item').mouseleave(function () {
//         $(this).find('.cnav-icon').hide();
//     })
//     $('#rotate-icon').mouseenter(function () {
//         $(this).find('.register-icon').addClass('point-right');
//     })

//     $('#rotate-icon').mouseleave(function () {
//         $(this).find('.register-icon').removeClass('point-right');
//     })
// });