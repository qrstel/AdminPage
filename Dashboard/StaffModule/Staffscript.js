//BUTTONS
const insertStaffButton=document.getElementById('addStaffbtn');
const cancelButton1=document.getElementById('cancelbtn1');

//TABLES/FORM
const gridStaffDisplay=document.getElementById('staffTable');
const insertStaffDisplay=document.getElementById('addStaffForm');

//WHEN YOU CLICK "ADD NEW USER" BUTTON
insertStaffButton.addEventListener('click',function(){
    gridStaffDisplay.style.display="none";
    insertStaffDisplay.style.display="block";
})
//WHEN YOU CLICK "CANCEL" BUTTON IN addStaffForm
cancelButton1.addEventListener('click', function(){
    gridStaffDisplay.style.display="block";
    insertStaffDisplay.style.display="none";
})