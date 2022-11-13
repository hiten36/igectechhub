var b1=document.querySelector('.menu');
var b2=document.querySelector('.menu1');
b1.addEventListener('click',()=>{
    if(!b2.classList.contains('menu_ani'))
    {
        document.getElementById('menu_head').style.display='none';
        document.getElementById('menu_img').style.display='block';
        b2.style.display='flex';
        b2.classList.remove('menu_ani2');
        b2.classList.add('menu_ani');
        setTimeout(() => {
            b2.style.top='88px';
        }, 300);
    }
    else
    {
        document.getElementById('menu_head').style.display='block';
        document.getElementById('menu_img').style.display='none';
        b2.classList.remove('menu_ani');
        b2.classList.add('menu_ani2');
        setTimeout(() => {
            b2.style.display='none';
        }, 300);
    }
})
document.addEventListener('mouseup',(e)=>{
    if(b2.classList.contains('menu_ani'))
    {
        if(!b2.contains(e.target) && !b1.contains(e.target))
        {
            document.getElementById('menu_head').style.display='block';
            document.getElementById('menu_img').style.display='none';
            b2.classList.remove('menu_ani');
            b2.classList.add('menu_ani2');
            setTimeout(() => {
                b2.style.display='none';
            }, 300);
        }
    }
})