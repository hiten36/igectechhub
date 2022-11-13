if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
document.getElementById('ns').addEventListener('input',(e)=>{
    var val=e.target.value.toLowerCase();
    let ncards=document.querySelectorAll('.card');
    for(i of ncards)
    {
        if(i.children[1].children[0].innerText.toLowerCase().includes(val) || i.children[1].children[1].innerText.toLowerCase().includes(val))
        {
            i.style.display='block';
        }
        else
        {
            i.style.display='none';
        }
    }
})