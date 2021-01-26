function viewall()
    {
    document.getElementById('all_image').style = 'visibility:visible';
    document.getElementById('people_image').style = 'visibility:hidden';
    document.getElementById('animal_image').style = 'visibility:hidden';
    document.getElementById('nature_image').style = 'visibility:hidden';
    }

function viewpeople()
{
document.getElementById('all_image').style = 'visibility:hidden';
document.getElementById('people_image').style = 'visibility:visible';
document.getElementById('animal_image').style = 'visibility:hidden';
document.getElementById('nature_image').style = 'visibility:hidden';
}

function viewanimal()
{
document.getElementById('all_image').style = 'visibility:hidden';
document.getElementById('people_image').style = 'visibility:hidden';
document.getElementById('animal_image').style = 'visibility:visible';
document.getElementById('nature_image').style = 'visibility:hidden';
}

function viewnature()
{
document.getElementById('all_image').style = 'visibility:hidden';
document.getElementById('people_image').style = 'visibility:hidden';
document.getElementById('animal_image').style = 'visibility:hidden';
document.getElementById('nature_image').style = 'visibility:visible';
}