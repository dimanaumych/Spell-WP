$('.menu-btn').on('click', function(e) {
    e.preventDefault();
    $('.left_sidebar').toggleClass('menu_active');
    $('.main_content').toggleClass('content_active');
    $('.menu-btn').css("display","none");
    $('.left_sidebar').css('overflowX','hidden')
})
$('.cancel-btn').on('click', function(e) {
    e.preventDefault();
    $('.left_sidebar').toggleClass('menu_active');
    $('.main_content').toggleClass('content_active');
    $('.left_sidebar').css('overflowX','inherit')
    setTimeout(()=>{
        $('.menu-btn').css("display","flex");
    }, 280)
});

document.querySelector('.menu-item-has-children>a').addEventListener('click', function (event){
    event.preventDefault();
})
//
let i = true;

    $('#primary-menu ul li:nth-child(2)').click(() => {
        console.log('НАЖАЛ УСЛУГИ')
        if (i) {
            $('#primary-menu ul li:nth-child(2) .sub-menu li').css('display', 'block');
            i = false;
        }else {
            $('#primary-menu ul li:nth-child(2) .sub-menu li').css('display', 'none');
            i = true;
        }
    })
let x = true;

$('#primary-menu ul li:nth-child(1)').click(()=>{
    if (x) {
        

        $('#primary-menu ul li:nth-child(1) .sub-menu li').css('display', 'flex');
        x = false;
    }
    else {
        $('#primary-menu ul li:nth-child(1) .sub-menu li').css('display', 'none');
        x = true;
    }
});
$('#primary-menu>ul>li:nth-child(1)>a').click((e)=>{
    e.preventDefault()
});

