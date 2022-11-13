if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
let b1=document.querySelectorAll('.reply');
for(i of b1)
{
    i.addEventListener('click',(e)=>{
        if(e.target.parentNode.nextElementSibling.innerHTML=='')
        {
            if(e.target.previousElementSibling.value=='flag')
            {
                let str=`<input type="hidden" name="comm_id" value="${e.target.parentNode.nextElementSibling.nextElementSibling.value}"><textarea class="form-control" name="user_reply" rows="3"></textarea><button type="submit" class="btn mt-2 btn-primary">Post Reply</button>`;
                e.target.parentNode.nextElementSibling.innerHTML=str;
            }
        }
        else
        {
            e.target.parentNode.nextElementSibling.innerHTML="";
        }
    })
}
let b2=document.querySelectorAll('.like_form');
for(i of b2)
{
    i.addEventListener('click',(e)=>{
        e.target.submit();
    })
}