const insertItemButton=document.getElementById('insertItembtn');
const goBackButt0n=document.getElementById('goBackBtn');
const gridItemDisplay=document.getElementById('itemGrid');
const insertItemDisplay=document.getElementById('itemForm');

insertItemButton.addEventListener('click',function(){
    gridItemDisplay.style.display="none";
    insertItemDisplay.style.display="block";
})
goBackButt0n.addEventListener('click', function(){
    gridItemDisplay.style.display="block";
    insertItemDisplay.style.display="none";
})