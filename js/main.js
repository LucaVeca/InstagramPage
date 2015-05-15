$('.main_carousel_bag').fadeOut(000).delay(4000).fadeIn(1500);  

$('.left_bag_action')
.animate({ left: '+=960', top:'-=400'}, 500)
.animate({ visibility: 'hidden'}, 0)
.delay(1000)
.animate({ visibility: 'visible'}, 0)
.animate({ left: '-=960'}, 1000)
.animate({ visibility: 'hidden'}, 0, function(){
    //.....Some code here for right_bag_action....//
})
